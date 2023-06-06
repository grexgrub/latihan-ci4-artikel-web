<?php

namespace App\utils;

class Flasher
{
    public static function setFlash($pesan, $aksi, $alert)
    {
        $session = \Config\Services::session();
        $session->setFlashdata([
          'warning' => [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'alert' => $alert
          ],
        ]);
    }

    public static function flash()
    {
        if(session('warning')) {
            echo '<div class="box-loading '. session('warning')['alert'] .' "><strong>'.session('warning')['pesan'].'</strong>'. session('warning')['aksi'] .' <div class="loading"> </div></div>';

        }
    }
}
