<?php

class Jadwal extends Controller{
    public function index(){
        $data['judul'] = 'Jadwal';
        $this->view('templates/header',$data);
        $this->view('jadwal/index');
        $this->view('templates/footer');
    }
}