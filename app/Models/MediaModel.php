<?php namespace App\Models;
use CodeIgniter\Model;
 
class MediaModel extends Model
{
    protected $table = 'media';
     
    public function getMedia()
    {
        return $this->findAll();  
    }
    public function SimpanMedia($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function PilihMedia($id)
    {
         $query = $this->getWhere(['id_media' => $id]);
         return $query;
    }
    public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_media' => $id));
        return $query;
    }
    public function HapusMedia($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_media' => $id));
        return $query;
    }
 }