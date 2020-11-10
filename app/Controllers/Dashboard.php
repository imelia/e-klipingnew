<?php 

namespace App\Controllers;

use App\Models\Modeldashboard;

class Dashboard extends BaseController
{
  
  public function index()
  {
        $session = session();
        // $tag = "Welcome back, ".$session->get('user_email');
    $data = [
      'title' => 'Tampilan Admin',
      'username' => $session->get('user_name')
    ];

    echo view('global/header', $data);
    echo view('global/sidebar');
    echo view('global/topbar', $data);
    echo view('home/index');
    echo view('global/footer');
  }
  

  public function dashboard()
  {
    // $Home = $this->Modeldashboard->findAll();

    $data = [
      'judul' => 'Dashboard',
      'home' => $Home,
    ];

    echo view('/admin/dashboard', $data);
  }
}
