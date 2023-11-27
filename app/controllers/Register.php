<?php

class Register extends Controller{
    public function index(){
        session_start();
        $data['judul'] = 'login'; 
        $data['session'] = $_SESSION['id_user'];
      	if (isset($_SESSION['id_user'])) {
            header('Location:'.BASEURL);
            
            exit();
        }  
        $data['judul'] = 'register';
        $this->view('templates/header',$data);
        $this->view('auth/register');
        $this->view('templates/footer');
    }
    public function regUser()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $email = htmlspecialchars($_POST['email']);
        $nomor = htmlspecialchars($_POST['nomor']);

        $usernameExists = $this->model('User_model')->checkUsernameExists($username);

        if ($usernameExists) {
            echo '<script>alert("Username telah digunakan,silahkan gunakan username lain untuk mendaftar");</script>';
            echo '<script>window.location.href="'.BASEURL.'?controller=Register";</script>';
        } else {
            $result = $this->model('User_model')->registerUser($username, $password, $email, $nomor);
            
            if ($result) {
                header('location:' . BASEURL.'?controller=Login');
            } else {
                echo '<script>alert(masukkan data registrasi dengan benar");</script>';
            }
        }
    }
}

}