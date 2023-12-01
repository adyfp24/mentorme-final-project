<?php

class Gambar extends Controller{
    public function index(){
        session_start();
        $data['judul'] = 'Upload';
        $data['session'] = $_SESSION['id_user'];
        $this->view('upload/index');
    }
    public function simpanGambar(){
        if(isset($_FILES['gambar'])){
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $gambar = $_FILES['gambar']['name'];
            $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            $ukuran	= $_FILES['file']['size'];
            $file_tmp = $_FILES['gambar']['tmp_name'];
            // var_dump(__DIR__.'/upload/'.$gambar);
            move_uploaded_file($file_tmp, __DIR__.'/../assets/img/'.$gambar);
            
            
            
            // if ( move_uploaded_file($file_tmp, 'assets/' . $gambar)){
            //     echo 'Gambar berhasil diupload';
            //     }else {
            //         echo 'Gambar gagal diupload';
            //     }
        }        
}

}