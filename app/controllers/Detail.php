<?php

class Detail extends Controller{
    public function index(){
        session_start();
        $data['judul'] = 'detail';
        $data['session'] = $_SESSION['id_user'];
        $id_mentor = $_POST['id_mentor'];
        $data['detail'] = $this->model('User_model')->getDetailMentor($id_mentor);
        $this->view('templates/header',$data);
        $this->view('mentoring/detail',$data);
        $this->view('templates/footer');
    }
}