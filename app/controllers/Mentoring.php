<?php

class Mentoring extends Controller{
    public function index()
    {
        session_start();
        $data['judul'] = 'Mentoring';
        $data['session'] = $_SESSION['id_user'];
        $data['mentor'] = $this->model('Admin_model')->tampilDataMentor();
        $this->view('templates/header',$data);
        $this->view('mentoring/index',$data);
        $this->view('templates/footer');
    }
}