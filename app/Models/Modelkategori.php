<?php namespace App\Models;
use CodeIgniter\Model;
 
class Modelkategori extends Model
{
    protected $table = 'kategori';
     
    public function getKategori()
    {
        return $this->findAll();  
    }
    public function SimpanKategori($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function PilihKategori($id)
    {
         $query = $this->getWhere(['id_kategori' => $id]);
         return $query;
    }
    public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_kategori' => $id));
        return $query;
    }
    public function HapusKategori($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_kategori' => $id));
        return $query;
    }
 }