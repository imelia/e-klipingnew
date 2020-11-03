<?php 

namespace App\Controllers; 

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Tampilan User'
        ];

        echo view('templateuser/v_wrapper', $data);
    }  
}