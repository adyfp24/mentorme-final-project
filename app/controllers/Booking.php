<?php 

class Booking extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('mentoring/booking');
        $this->view('templates/footer');
    }
}