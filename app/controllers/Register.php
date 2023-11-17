<?php

class Register extends Controller{
    public function index(){
        session_start();
        $this->view('templates/header');
        $this->view('auth/register');
        $this->view('templates/footer');
    }
    public function regUser()
    {
        if($_SERVER['REQUEST_METHOD']==='POST')
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $nomor = $_POST['nomor'];
            $result = $this->model('User_model')->registerUser($username,$password,$email,$nomor);
            if($result){
                header('location:'.BASEURL);
            }else{
                echo 'error mas';
            }
        }
    }
}