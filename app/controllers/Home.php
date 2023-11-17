<?php 

class Home extends Controller {
    public function index()
    {
        session_start();
        $data['judul'] = 'Home';
        $data['session'] = $_SESSION['id_user'];
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}