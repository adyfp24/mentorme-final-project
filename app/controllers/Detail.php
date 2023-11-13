<?php

class Detail extends Controller{
    public function index(){
        $data['judul'] = 'detail';
        $this->view('templates/header');
        $this->view('mentoring/detail');
        $this->view('templates/footer');
    }
}