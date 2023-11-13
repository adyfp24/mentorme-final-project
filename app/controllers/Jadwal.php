<?php

class Jadwal extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('jadwal/index');
        $this->view('templates/footer');
    }
}