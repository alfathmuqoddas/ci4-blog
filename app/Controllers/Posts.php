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
        session()->setFlashdata('msg_success', 'Shouts posted successfully');
        return redirect()->to('/');
	}

	public function delete($id)
	{
		$db = db_connect();
		$builder = $db->table('posts');
		$builder->delete(['id' => $id]);
		return redirect()->back()->with('msg_warning', 'Post deleted');
		
	}
}