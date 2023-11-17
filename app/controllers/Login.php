<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = 'login'; 
        $data['session'] = $_SESSION['id_user'];
        $this->view('templates/header',$data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }
    public function forget()
    {
        $data['judul'] = 'forget'; 
        $data['session'] = $_SESSION['id_user'];
        $this->view('templates/header',$data);
        $this->view('auth/forget');
        $this->view('templates/footer');
    }

    public function logUser(){
        session_start();
        // $this->logout();

        if (isset($_SESSION['id_user'])) {
            header('Location:'.BASEURL);
            exit();
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = $this->model('User_model')->loginUser($username, $password);
            if(!$result){
                echo 'login gagal';
            }else{
                session_start();
                header('location:'.BASEURL);
            }
        }
    }
    public function logoutUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){    
            session_start();
            session_unset();
            session_destroy();
            header('location:'.BASEURL);
        }
        // exit();
    }
}






