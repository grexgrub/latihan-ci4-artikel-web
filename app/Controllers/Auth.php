<?php

namespace App\Controllers;

use App\Models\users;
use App\utils\Flasher;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->users = new users();

    }

    public function index()
    {
        if(session('username')) {
            return redirect()->to('/');
        }
        $data = [
          'title' => 'login'
        ];
        return view('auth/login', $data);
    }

    public function login()
    {
        if(session('username')) {
            return redirect()->to('/');
        }
        if(!$this->request->is('post')) {
            return redirect()->back();
        }
        helper('form');
        $session = \Config\Services::session();
        $validate = [
          'username' => [
            'rules' => 'required',
            'errors' => [
              'required' => 'Bagian ini wajib di isi'
            ]],
          'password' => [
            'rules' => 'required',
            'errors' => [
              'required' => 'Bagian ini wajib di isi'
            ],
          ],
        ];

        if (!$this->validate($validate)) {

            return redirect()->back()->withInput();
        }

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $login = $this->users->login($username, $password);

        if ($login) {
            $user = [
              'username' => $username,
              'name' => $login['nama']
            ];
            $session->set($user);
            return redirect()->to('/');
        }


        Flasher::setFlash('Gagal', 'Login password atau username salah', 'warning');
        return redirect()->back()->withInput();


    }

    public function register()
    {
        if(session('username')) {
            return redirect()->to('/');
        }
        $data = [
          'title' => 'register'
        ];
        return view('auth/register', $data);
    }

    public function daftar()
    {
        if(session('username')) {
            return redirect()->to('/');
        }
        if(!$this->request->is('post')) {
            return redirect()->back();
        }
        $validate = [
          'username' => [
            'rules' => 'required|alpha',
            'errors' => [
              'required' => 'Bagian ini wajib di isi',
              'alpha' => 'Hanya mengizinkan karakter alpabet']
            ],
          'name' => [
            'rules' => 'required|alpha_numeric_punct',
            'errors' => [
              'required' => 'Bagian ini wajib di isi',
              'alpha_numeric_punct' => 'Hanya mengizinkan karakter alpabet, angka, dan limited punctuation']
            ],
          'password' => [
            'rules' => 'required|alpha_numeric_punct|min_length[8]',
            'errors' => [
              'required' => 'Bagian ini wajib di isi',
              'alpha_numeric_punct' => 'Hanya mengizinkan karakter alpabet, angka, dan karakter punctuation terbatas seperti @,#',
              'min_length' => 'minimal 8 karakter'],
          ],
        ];

        if(!$this->validate($validate)) {
            return redirect()->back()->withInput();
        }
        $Us = $this->request->getVar('username');
        $Na = $this->request->getVar('name');
        $Pa = $this->request->getVar('password');
        $this->users->save(['username' => '@'.$Us, 'nama' => $Na, 'password' => $Pa]);
        return redirect()->to('/');
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->remove('username');
        return redirect()->to('/login');
    }


}
