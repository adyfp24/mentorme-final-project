<?php

class Jadwal extends Controller{
    
    public function index(){
        session_start();
        // session_unset();
        // session_destroy();
        
        // Periksa apakah session 'username' sudah ada
        if (!isset($_SESSION['id_user'])) {
            // Jika tidak ada, redirect ke halaman login
            header('Location: ' . BASEURL . '?controller=login'); // Gantilah 'login' dengan alamat halaman login Anda
            exit();
        }else{
            session_start();
            $data['judul'] = 'Jadwal';
            $data['session'] = $_SESSION['id_user'];
            $data['jadwal'] = $this->model('User_model')->getJadwal();
            $id_user = $_SESSION['id_user'];
            $data['username'] = $this->model('User_model')->getUsernameById($id_user);
            $this->view('templates/header',$data);
            $this->view('jadwal/index',$data);
            // $this->view('templates/footer');
        }
    }
}