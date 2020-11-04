<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;

use App\Models\Modelkategori;
 
class Kategori extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new Modelkategori();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['kategori'] = $model->getKategori();
            return view('v_kategorilist2',$data);
            
        }
    }

    public function form(){
        helper('form');
        return view('v_kategoriform');
    }

    public function simpan(){
        $model = new Modelkategori();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('kategori');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'nama_kategori'  => $this->request->getPost('nama_kategori'),
            
        );
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/img/kategori/');
        $data = array(
            'nama_kategori'  => $this->request->getPost('nama_kategori'),
            
            
        );
        }
        $model->SimpanKategori($data);
        return redirect()->to('./kategori')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function form_edit($id){
        $model = new Modelkategori();
        helper('form');
        $data['kategori'] = $model->PilihKategori($id)->getRow();
        return view('v_kategoriedit',$data);
    }

    public function edit(){
        $model = new Modelkategori();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('kategori');
        }
        $id = $this->request->getPost('id_kategori');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'nama_kategori'  => $this->request->getPost('nama_kategori'),
            
           
        );
        } else {
        $dt = $model->PilihKategori($id)->getRow();
        
        $path = '../public/assets/img/kategori/';
       
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/img/kategori/');
        $data = array(
            'nama_kategori'  => $this->request->getPost('nama_kategori'),
           
        
            
        );
        }
        
        $model->edit_data($id,$data);
        return redirect()->to('./kategori')->with('berhasil', 'Data Berhasil di Ubah');
        
    }

    public function hapus($id){
        $model = new Modelkategori();
        $dt = $model->PilihKategori($id)->getRow();
        $model->HapusKategori($id);
      
        $path = '../public/assets/img/kategori/';
      
        return redirect()->to('./kategori')->with('berhasil', 'Data Berhasil di Hapus');
    }

}