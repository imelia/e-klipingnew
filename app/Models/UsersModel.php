<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    
    public function getUsers()
    {
        $builder = $this->db->table('login');
        return $builder->get();
    }

    public function saveUsers($data){
        $query = $this->db->table('login')->insert($data);
        return $query;
    }

    public function updateUsers($data, $id)
    {
        $query = $this->db->table('login')->update($data, array('user_id' => $id));
        return $query;
    }

    public function deleteUsers($id)
    {
        $query = $this->db->table('login')->delete(array('user_id' => $id));
        return $query;
    } 

  
}

