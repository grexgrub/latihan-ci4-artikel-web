<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

use App\Models\artikel_data;
use App\Models\users;

class Artikel extends BaseController
{
    protected $artikel;
    protected $user;

    public function __construct()
    {
        $this->artikel = new artikel_data();
        $this->user = new users();
    }

    public function index()
    {
        $artikel = $this->artikel->getAll();
        $user = $this->user->get();
        $data =[
           'title' => 'artikel',
           'artikel' => $artikel,
           'user' => $user
         ];
        return view('artikel/artikel', $data);
    }

    public function myarticle()
    {
        $artikel = $this->artikel->getByUser(session('username'));
        $user = $this->user->get();
        $data = [
          'title' => 'my artikel',
          'artikel' => $artikel,
          'user' => $user
        ];

        return view('artikel/myartikel', $data);
    }

    public function buatartikel()
    {
        $user = $this->user->get();
        $data =[
           'title' => 'buat-artikel',
           'user' => $user
         ];
        return view('artikel/buatartikel', $data);
    }

    public function uploadImage()
    {

        $validate = [
          'upload' => [
            'rules' => 'uploaded[upload]|mime_in[upload,image/jpg,image/png,image/jpeg]|is_image[upload]|max_size[upload,1024]',
          ],
        ];

        if(!$this->validate($validate)) {
            $data = [
              'uploaded' => false,
            ];
            return $this->response->setJSON($data);
        }

        $uploaded = $this->request->getFile('upload');
        $newName = $uploaded->getRandomName();
        $uploaded->move('img/artikel-gambar', $newName);
        $data = [
          'uploaded' => true,
          'url' => base_url('img/artikel-gambar/'.$newName)
        ];

        return $this->response->setJSON($data);
    }

    public function uploadarticle()
    {
        $validate = [
          'Judul' => [
            'rules' => 'required|alpha_numeric_punct',
            'errors' => [
              'required' => 'Bagian ini wajib di isi',
              'alpha_numeric_punc' => 'Hanya mengizinkan karakter alpabet']
            ],
          'cover' => [
            'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/png,image/jpeg]|is_image[cover]|max_size[cover,1024]',
          ],
          'editor' => [
            'rules' => 'required|min_length[100]',
            'errors' => [
              'required' => 'Bagian ini wajib di isi',
              'min_length' => 'minimal 100 karakter'],
          ],
        ];

        if(!$this->validate($validate)) {
            return redirect()->back()->withInput();
        }

        $cover = $this->request->getFile('cover');
        $newname = $cover->getRandomName();
        $cover->move('img/cover', $newname);
        $path = base_url('img/cover/').$newname;

        $myTime = Time::now('Asia/Jakarta', 'en_US')->toDateTimeString();

        $data = $this->request->getVar();
        $this->artikel->save(['id_article' => '@'.session('username'),
        'judul' => $data['Judul'],
        'isi' => $data['editor'],
        'cover' => $path,
        'slug' => url_title($data['Judul'], '-', true),
        'created_at' => $myTime,
        'updated_at' => $myTime
        ]);


    }

    public function baca($slug)
    {
        $artikel = $this->artikel->get($slug);
        if(!$artikel) {
            return redirect()->back();
        }
        $data = [
          'title' => 'artikel',
          'artikel' => $artikel,
        ];
        return view('artikel/baca', $data);
    }

    public function gantiPp()
    {
        $pp = $this->request->getFile('Pp');
        $newname = $pp->getRandomName();
        $pp->move('img/avatar', $newname);


        $this->user->set(
            'photo_profile',
            base_url('img/avatar/'.$newname)
        )->where('username', '@'.session('username'))->update();

    }

    public function delete($slug)
    {
        $this->artikel->getDelete($slug);
        return redirect()->back();
    }


  public function asu()
  {


  }


}
