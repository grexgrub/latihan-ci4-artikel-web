<?php 


namespace App\utils; 

class Flasher{

  static function setFlash($pesan,$aksi,$alert){  
    $session = \Config\Services::session();
    $session->setFlashdata([
      'warning' => [
        'pesan' => $pesan,
        'aksi' => $aksi,
        'alert' => 'alert-'.$alert
      ],
    ]);
  }

  static function flash(){
    if(session('warning')){
      echo '<div class="alert '. session('warning')['alert'] .' alert-dismissible fade show" role="alert">
      <strong>'.session('warning')['pesan'].'</strong> '.session('warning')['aksi'].'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>   
      </div>'; 
    }
  } 
}
