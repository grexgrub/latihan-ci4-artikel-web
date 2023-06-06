<?php

namespace App\Models;

use CodeIgniter\Model;

class artikel_data extends Model
{
    protected $table = 'article';
    protected $allowedFields = ['judul','isi','id_article','slug','created_at','updated_at','cover'];


    public function getAll()
    {
        return $this->findAll();
    }

    public function get($slug)
    {
        return $this->where('slug', $slug)->first();
    }

    public function getByUser($username)
    {
        return $this->where('id_article', '@'.$username)->findAll();
    }

    public function getDelete($slug)
    {
        return $this->where(['id_article' => '@'.session('username'), 'slug' => $slug])->delete();
    }


}
