<?php

class Mentoring extends Controller{
    public function index()
    {
        session_start();
        $data['judul'] = 'Mentoring';
        $data['session'] = $_SESSION['id_user'];
        $data['mentor'] = $this->model('Admin_model')->tampilDataMentor();
        $id_user = $_SESSION['id_user'];
        $data['username'] = $this->model('User_model')->getUsernameById($id_user);
        $this->view('templates/header',$data);
        $this->view('mentoring/index',$data);
        $this->view('templates/footer');
    }
}