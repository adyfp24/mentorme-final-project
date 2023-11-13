<?php 

class Admin extends Controller {
    public function index()
    {
        $data['judul'] = 'Admin';
        $data['admin'] = $this->model('Admin_model')->getAdmin();
        $data['mentor'] = $this->model('Admin_model')->tampilDataMentor();
        $this->view('admin/index', $data);
        // $this->view('templates/sidebar');
        $this->view('templates/footer');
    }
}