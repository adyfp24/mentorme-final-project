<?php

class Mentoring extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('mentoring/index');
        $this->view('templates/footer');
    }
}