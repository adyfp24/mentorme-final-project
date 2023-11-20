<?php

class Register extends Controller{
    public function index(){
        session_start();
        $data['judul'] = 'register';
        $this->view('templates/header',$data);
        $this->view('auth/register');
        $this->view('templates/footer');
    }
    public function regUser()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $nomor = $_POST['nomor'];

        // Cek apakah username sudah ada di database
        $usernameExists = $this->model('User_model')->checkUsernameExists($username);

        if ($usernameExists) {
            echo '<script>alert("Username telah digunakan, gunakan username lain");</script>';
            echo '<script>window.location.href="'.BASEURL.'?controller=register";</script>';
            // header('location:'.BASEURL.'/register/');
        } else {
            // Jika username belum ada, tambahkan user ke database
            $result = $this->model('User_model')->registerUser($username, $password, $email, $nomor);
            
            if ($result) {
                header('location:' . BASEURL.'?controller=login');
            } else {
                echo '<script>alert(masukkan data registrasi dengan benar");</script>';
            }
        }
    }
}

}