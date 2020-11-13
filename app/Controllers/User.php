<?php

namespace App\Controllers;

use App\Models\ModelUser;

class User extends BaseController
{
    protected $ModelUser;

    public function __Construct()

     {
        $this->ModelUser = new ModelUser();
     }

    public function index()
    {
        $User = $this->ModelUser->findAll();

        $data = [
            'judul' => 'Tampilan User',
            'user' => $User
        ];

        echo view('templatenew/v_wrapper', $data);

    }
    public function search(){
      $keyword = $this->request->getPost('keyword');
      $User = $this->ModelUser->like("judul_berita",$keyword,"both")->find();

      // die(var_dump($User));

      $data = [
          'judul' => 'Tampilan User',
          'user' => $User
      ];

      echo view('templatenew/v_wrapper', $data);
    }

    public function detail(){
      $uri = service('uri');
      $id = $uri->getSegment(3);
      // die(var_dump($id));
      $User = $this->ModelUser->where("id_berita",$id)->find();

      // die(var_dump($User));

      $data = [
          'judul' => 'Tampilan User',
          'user' => $User
      ];

      echo view('templatenew/v_wrapper2', $data);
    }

}
