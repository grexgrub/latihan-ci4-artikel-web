<?php



namespace App\Models;

use CodeIgniter\Model;

class users extends Model{

  protected $table = 'users',
  $allowedFields = ['username','nama','password','photo_profile'];

  function login($username,$password){
    return $this->where(['username' => '@'.$username,'password' => $password])->first();
  }

  function get(){
    return $this->where('username', '@'.session('username'))->first();  
  }
  
}
