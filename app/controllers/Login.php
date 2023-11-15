<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = 'login'; 
        $this->view('templates/header',$data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }
    public function logUser(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = $this->model('User_model')->loginUser($username,$password);
            if ($result) {
                header('location: '.BASEURL);
            }else{
                echo 'username atau password salah';
            }   
        }   
    }
}







