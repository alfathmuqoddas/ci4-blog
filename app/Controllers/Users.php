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
          
        if($this->validate($rules)){
            $userModel = new User_model();

            $data = [
                'name'     => $this->request->getVar('name'),
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->save($data);

            return redirect()->to('/');
        }else{
            $data['title'] = 'Register';
            $data['validation'] = $this->validator;
            echo view('templates/header', $data);
            echo view('users/register', $data);
            echo view('templates/footer');
        }
          
    }
}