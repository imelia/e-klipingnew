<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;

use App\Models\MediaModel;
 
class Media extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new MediaModel();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['media'] = $model->getMedia();
            return view('v_medialist2',$data);
            
        }
    }

    public function form(){
        helper('form');
        return view('v_mediaform');
    }

    public function simpan(){
        $model = new MediaModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('media');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'nama_media'  => $this->request->getPost('nama_media'),
            
        );
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/img/media/');
        $data = array(
            'nama_media'  => $this->request->getPost('nama_media'),
            'gambar_koran' => $upload->getName(),
            
        );
        }
        $model->SimpanMedia($data);
        return redirect()->to('./media')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function form_edit($id){
        $model = new MediaModel();
        helper('form');
        $data['media'] = $model->PilihMedia($id)->getRow();
        return view('v_mediaedit',$data);
    }

    public function edit(){
        $model = new MediaModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('media');
        }
        $id = $this->request->getPost('id_media');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'nama_media'  => $this->request->getPost('nama_media'),
            
           
        );
        } else {
        $dt = $model->PilihMedia($id)->getRow();
        $gambar_koran = $dt->gambar_koran;
        $path = '../public/assets/img/media/';
        @unlink($path.$gambar);
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/img/media/');
        $data = array(
            'nama_media'  => $this->request->getPost('nama_media'),
            'gambar_koran' => $upload->getName(),
        
            
        );
        }
        
        $model->edit_data($id,$data);
        return redirect()->to('./media')->with('berhasil', 'Data Berhasil di Ubah');
        
    }

    public function hapus($id){
        $model = new MediaModel();
        $dt = $model->PilihMedia($id)->getRow();
        $model->HapusMedia($id);
        $gambar_koran = $dt->gambar_koran;
        $path = '../public/assets/img/media/';
        @unlink($path.$gambar_koran);
        return redirect()->to('./media')->with('berhasil', 'Data Berhasil di Hapus');
    }

}