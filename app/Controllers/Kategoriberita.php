<?php namespace App\Controllers;

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
        $kategori_berita = $this->KategoriberitaModel->findAll();
        $data = [
            'id_kategori_berita' => 'id_kategori_berita',
            'id_kategori' => 'id_kategori',
            'nama_kategori' => 'nama_kategori',
            'id_media' => 'id_media',
            'nama_media' => 'nama_media',
            'tanggal' => 'tanggal',
            'gambar_berita' => 'gambar berita',
            'kategori_berita' => $kategori_berita

        ];
        return view('admin/kategoriberita', compact('data'));
    }
}