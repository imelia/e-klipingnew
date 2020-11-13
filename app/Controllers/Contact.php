<?php 

namespace App\Controllers;

use App\Models\ModelContact;

class Contact extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'Tampilan User',
           
          ];
        
          echo view('templatenew/v_contact', $data);
        }
}
