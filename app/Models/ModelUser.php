<?php 

namespace App\Models;
 
use CodeIgniter\Model;
 
class ModelUser extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $useTimestamps = true;

}