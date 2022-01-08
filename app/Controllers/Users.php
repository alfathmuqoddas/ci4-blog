<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\User_model;

class Users extends Controller{
	public function register()
	{
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[150]',
            'username'		=> 'required|min_length[2]|max_length[150]|is_unique[user2.username]',
            'email'         => 'required|min_length[4]|max_length[150]|valid_email|is_unique[user2.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if(!$this->validate($rules)){
            $data['title'] = 'Register';
            ;
            echo view('templates/header', $data);
            echo view('users/register', ['validation' => $this->validator,]);
            echo view('templates/footer');
            
        }else{
            $userModel = new User_model();

            $data = [
                'name'     => $this->request->getVar('name'),
                'username' => preg_replace('/\s+/', '', $this->request->getVar('username')),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->save($data);
            session()->setFlashdata('msg_success', 'Register successful, you can login now');
            return redirect()->to('/');
        }
          
    }

    public function login()
    {
        helper(['form']);
        $session = session();

        $userModel = new User_model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                $session->setFlashdata('msg_success', 'Login successful');
                return redirect()->to('/');
            
            }else{
                $session->setFlashdata('msg_warning', 'Password is incorrect.');
                $data['title'] = 'Login';
                echo view('templates/header', $data);
                echo view('users/login');
                echo view('templates/footer');
            }

        }else{
            $session->setFlashdata('msg_warning', 'Email does not exist.');
            $data['title'] = 'Login';
            echo view('templates/header', $data);
            echo view('users/login');
            echo view('templates/footer');
        }
    }

    public function logout()
    {
        $session = session();

        // destroy session
        $session->destroy();

        return redirect()->to('/');
    }
}