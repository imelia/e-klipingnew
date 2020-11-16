<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BeritaModel;

class Berita extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new BeritaModel();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['berita'] = $model->getBerita();
            return view('v_beritalist2',$data);

        }
    }

    public function form(){
        helper('form');
        return view('v_beritaform');
    }

    public function simpan(){
        $session = session();
        $model = new BeritaModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('berita');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf]|max_size[file_upload,5120]'
        ]);

        if ($validation == FALSE) {
          $data = array(
              'judul_berita'  => $this->request->getPost('judul_berita'),
              'kategori'  => $this->request->getPost('kategori'),
              'media'  => $this->request->getPost('media'),
              'tanggal'  => $this->request->getPost('tanggal'),
          );
          return redirect()->to('./berita/form')->with('notif', 'Type FIle Tidak Didukung (Upload Hanya PDF maks 1MB)');
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/pdf/berita/');
        $data = array(
            'judul_berita'  => $this->request->getPost('judul_berita'),
            'kategori'  => $this->request->getPost('kategori'),
            'media'  => $this->request->getPost('media'),
            'tanggal'  => $this->request->getPost('tanggal'),
            'gambar_berita' => $upload->getName(),
        );
        }
        $model->SimpanBerita($data);
        return redirect()->to('./berita')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function form_edit($id){
        $model = new BeritaModel();
        helper('form');
        $data['berita'] = $model->PilihBerita($id)->getRow();
        return view('v_beritaedit',$data);
    }

    public function edit(){
        $model = new BeritaModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('berita');
        }
        $id = $this->request->getPost('id_berita');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,application/pdf]|max_size[file_upload,5120]'
        ]);

        if ($validation == FALSE) {
        $data = array(
            'judul_berita'  => $this->request->getPost('judul_berita'),
            'kategori'  => $this->request->getPost('kategori'),
            'media'  => $this->request->getPost('media'),
            'tanggal'  => $this->request->getPost('tanggal'),

        );
        } else {
        $dt = $model->PilihBerita($id)->getRow();
        $gambar_berita = $dt->gambar_berita;
        $path = '../public/assets/pdf/berita/';
        @unlink($path.$gambar);
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/pdf/berita/');
        $data = array(
            'judul_berita'  => $this->request->getPost('judul_berita'),
            'kategori'  => $this->request->getPost('kategori'),
            'media'  => $this->request->getPost('media'),
            'tanggal'  => $this->request->getPost('tanggal'),
            'gambar_berita' => $upload->getName(),

        );
        }

        $model->edit_data($id,$data);
        return redirect()->to('./berita')->with('berhasil', 'Data Berhasil di Ubah');

    }

    public function hapus($id){
        $model = new BeritaModel();
        $dt = $model->PilihBerita($id)->getRow();
        $model->HapusBerita($id);
        $gambar_berita = $dt->gambar_berita;
        $path = '../public/assets/pdf/berita/';
        @unlink($path.$gambar_berita);
        return redirect()->to('./berita')->with('berhasil', 'Data Berhasil di Hapus');
    }

}
