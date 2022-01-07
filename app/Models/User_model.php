<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class User_model extends Model{

    protected $table = 'user2';
    
    protected $allowedFields = [
        'name',
        'username',
        'email',
        'password',
        'created_at'
    ];

}