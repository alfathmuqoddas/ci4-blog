<?php

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Post_model;

class Posts extends Controller
{
	public function create()
	{

		$db = db_connect();
		$builder = $db->table('posts');

		$data = [
		    'body' => $this->request->getVar('body'),
		    'user_id' => session()->get('id'),
		];

		$builder->insert($data);
        session()->setFlashdata('msg_success', 'Data uploaded');
        return redirect()->to('/');
	}

	public function like()
	{
		
	}
}