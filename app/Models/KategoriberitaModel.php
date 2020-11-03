<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriberitaModel extends Model
{
    protected $table = 'kategori_berita';

    public function getKategoriberita()
    {
        return $this->findAll();
    }
}