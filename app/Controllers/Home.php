<?php 

namespace App\Controllers; 

use App\Models\HomeModel;

class Home extends BaseController
{
    protected $HomeModel;

    public function __Construct()

     {
        $this->HomeModel = new HomeModel();
     }

    public function index()
    {
        $Home = $this->HomeModel->findAll();

        $data = [
            'judul' => 'Tampilan User', 
            'home' => $Home
        ];

        echo view('templateuser/v_wrapper', $data);
    
    }  

}