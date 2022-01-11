<?php 
namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Form extends Controller
{
 
    public function index()
    {    
         $data['title'] = 'Upload Images';
         $db = db_connect();
         $query = $db->table('products')->get();
         $data['posts'] = $query->getResult();

         echo view('templates/header', $data);
         echo view('pages/upload-image');
         echo view('templates/footer');
    }
 
    public function storeMultipleFile()
    {  
 
        helper(['form', 'url']);
 
        $db      = db_connect();
        $imgBuilder = $db->table('file');
        $productBuilder = $db->table('products');
        $data = [
            'title' => $this->request->getVar('title'),
            'name' => $this->request->getVar('product_name'),
            'slug' => url_title($this->request->getVar('title'), '-', true),
        ];

        $productBuilder->insert($data);
 
        $msg = 'Please select a valid files';
  
        if ($this->request->getFileMultiple('file')) {
 
             foreach($this->request->getFileMultiple('file') as $file)
             {   
 
                $file->move(ROOTPATH . 'public/uploads');
 
              $data = [
                'name' =>  $file->getClientName(),
                'type'  => $file->getClientMimeType(),
              ];
 
              $save = $imgBuilder->insert($data);
              $msg = 'Files has been uploaded';
             }
        }
 
       return redirect()->to( base_url('form/index') )->with('msg', $msg);
 
     }

     public function view($id){
            $data['title'] = 'Details';

            $db = db_connect();
            $data['post'] = $db->table('products')->getWhere(['id' => $id])->getRow();
            //$data['comments'] = $db->table('file')->getWhere($post_id);

            echo view('templates/header', $data);
            echo view('pages/form-details', $data);
            echo view('templates/footer');
        }
 
}