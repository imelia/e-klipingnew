<?php 

namespace App\Models;

use CodeIgniter\Model;

class KategoriberitaModel extends Model
{
    protected $table = 'kategori_berita';
    protected $primaryKey = 'id_kategori';
    protected $useTimestamps = true;

}