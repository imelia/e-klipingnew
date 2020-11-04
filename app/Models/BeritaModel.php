<?php namespace App\Models;
use CodeIgniter\Model;
 
class BeritaModel extends Model
{
    protected $table = 'berita';
     
    public function getBerita()
    {
        return $this->findAll();  
    }
    public function SimpanBerita($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function PilihBerita($id)
    {
         $query = $this->getWhere(['id_berita' => $id]);
         return $query;
    }
    public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_berita' => $id));
        return $query;
    }
    public function HapusBerita($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_berita' => $id));
        return $query;
    }
 }