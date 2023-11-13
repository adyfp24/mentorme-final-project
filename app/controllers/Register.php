<?php

class Register extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('auth/register');
        $this->view('templates/footer');
    }
}