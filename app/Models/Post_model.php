<?php 

namespace App\Models;  
use CodeIgniter\Model;

class Post_model extends Model{

	public function get_posts($id = false)
	{
		$db = db_connect();
		$builder = $db->table('posts');

		if($id === false){
			$builder->orderBy('posts.id', 'DESC');
			$builder->join('user2', 'user2.id = posts.user_id');
			$query = $builder->get();
			return $query->getResult();
		}

		$query = $builder->get_where('posts', array('id' => $id));
		return $query->row_array();
	}
}