<?php

namespace App\Controllers;
use App\Models\Post_model;

class Home extends BaseController
{
    public function index()
    {	
    	helper('form');
    	$db = db_connect();
    	$model = new Post_model();
		$data['title'] = 'Home';

		$data['posts'] = $model->get_posts();

		echo view('templates/header', $data);
		echo view('home', $data);
		echo view('templates/footer');
	}
}
