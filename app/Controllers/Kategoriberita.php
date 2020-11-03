<?php 

namespace App\Controllers;

// Tambahkan Upload Model di sini
use App\Models\KategoriberitaModel;

class Kategoriberita extends BaseController
{
    protected $KategoriberitaModel;

    public function __Construct()

    {
        $this->KategoriberitaModel = new KategoriberitaModel();
    }

    public function index()
    {
        $Kategoriberita = $this->KategoriberitaModel->findAll();
        $data['title'] = "E-Kliping | Diskominfo Kabupaten Malang";
        $data = [
            'id_kategori_berita' => 'id_kategori_berita',
            'id_kategori' => 'id_kategori',
            'nama_kategori' => 'nama_kategori',
            'id_media' => 'id_media',
            'nama_media' => 'nama_media',
            'tanggal' => 'tanggal',
            'gambar_berita' => 'gambar berita',
            'kategoriberita' => $Kategoriberita
           
        ];

        echo view('global/header', $data); 
        echo view('global/sidebar');
        echo view('global/topbar', $data);
        echo view('admin/kategori_berita', $data);
        echo view('global/footer');
        return view('admin/Kategori_berita', $data);
    }
}