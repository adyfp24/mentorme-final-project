<?php

class Mentoring extends Controller{
    public function index()
    {
        session_start();
        $data['judul'] = 'Mentoring';
        $data['session'] = $_SESSION['id_user'];
        $data['mentor'] = $this->model('User_model')->tampilDataMentor();
        $id_user = $_SESSION['id_user'];
        $data['username'] = $this->model('User_model')->getUsernameById($id_user);
        $this->view('templates/header',$data);
        $this->view('mentoring/index',$data);
        $this->view('templates/footer');
    }
    public function pagination() {
        session_start();
    
        $data['judul'] = 'Mentoring';
        $data['session'] = $_SESSION['id_user'];
    
        // Initialize $page variable with a default value
        $page = 1;
    
        // Check if a numeric value is present in $_POST and set $page accordingly
        foreach ($_POST as $key => $value) {
            if (is_numeric($value)) {
                $page = $value;
                break;
            }
        }
    
        // Fetch data based on the selected page
        $data['mentor'] = $this->model('User_model')->tampilDataMentor($page);
    
        $id_user = $_SESSION['id_user'];
        $data['username'] = $this->model('User_model')->getUsernameById($id_user);
    
        $this->view('templates/header', $data);
        $this->view('mentoring/index', $data);
        $this->view('templates/footer');
    }
    
}