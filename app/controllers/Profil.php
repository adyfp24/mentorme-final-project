<?php

class Profil extends Controller{
    public function index(){
        session_start();
        $data['judul'] = 'Profil';
        $data['session'] = $_SESSION['id_user'];
        $id_user = $data['session'];
        $data['user'] = $this->model('User_model')->getDataUser($id_user);
        $this->view('templates/header', $data);
        $this->view('profil/index', $data);
        $this->view('templates/footer');
    }
    public function upload(){
        session_start();
        if(isset($_FILES['gambar'])){
            $data['session'] = $_SESSION['id_user'];
            $id_user = $data['session'];
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $gambar = $_FILES['gambar']['name'];
            $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            $ukuran	= $_FILES['file']['size'];
            $file_tmp = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($file_tmp, __DIR__.'/../assets/img/'.$gambar);
            $data['gambar'] = $gambar;
            $this->model('User_model')->insertGambar($gambar,$id_user);
            header('location: ?controller=Profil');
        }
    }
}