<?php

class Mentoring extends Controller{
    public function index(){
        $data['judul'] = 'Mentoring';
        $this->view('templates/header',$data);
        $this->view('mentoring/index');
        $this->view('templates/footer');
    }
}