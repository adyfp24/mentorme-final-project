<?php 

class Admin extends Controller {
    
    public function index()
    {
        session_start();
        $data['session'] = $_SESSION['id_admin'];
        if (!isset($_SESSION['id_admin'])) {
            header('location: '.BASEURL.'?controller=Admin&method=loginPage');
          exit();
      }else{
        $data['judul'] = 'Admin';
        $data['mentor'] = $this->model('Admin_model')->tampilDataMentor();
        $this->view('admin/dashboard', $data);
        $this->view('templates/footer');
      }
    }
    public function loginPage()
    {
        session_start();
        $this->view('templates/header');
        $this->view('admin/login_admin');
        $this->view('templates/footer');
    }
    public function logAdmin(){
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            session_start();
            $username_admin = $_POST['username_admin'];
            $password_admin = $_POST['password_admin'];
            $result = $this->model('Admin_model')->loginAdmin($username_admin, $password_admin);
            if($result){
                header('location: '.BASEURL.'?controller=Admin');
            }else{
                echo '<script>alert("Username atau password yang anda masukkan salah");</script>';
                echo '<script>window.location.href="'.BASEURL.'?controller=Admin&method=loginPage";</script>';
            }
        }
        
    }
    public function logoutAdmin()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){    
            session_start();
            session_unset();
            session_destroy();
            header('location:'.BASEURL);
        }
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama_mentor = $_POST['nama_mentor'];
            $hasil_penelitian = $_POST['hasil_penelitian'];
            $minat_penelitian = $_POST['minat_penelitian'];
            $fee = $_POST['fee'];
            $jadwal = $_POST['jadwal'];
            $pendidikan = $_POST['pendidikan'];
            $sertifikasi = $_POST['sertifikasi'];
            $deskripsi = $_POST['deskripsi'];
            $tempat = $_POST['tempat'];
            $spesialisasi = $_POST['spesialisasi'];
            $judul = $_POST['judul'];

            $result = $this->model('Admin_model')->tambahDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul);

            if ($result) {
                header('location: '.BASEURL.'?controller=Admin');
            }else{
                echo 'data tidak berhasil diinput';
            }
        }
    }
    public function hapus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id_mentor = $_POST['id_mentor'];
            $result=$this->model('Admin_model')->hapusDataMentor($id_mentor);

            if ($result) {
                header('location: '.BASEURL.'?controller=Admin');
            }
        }    
    }
    public function edit()
    {
        $id_mentor = $_POST['id_mentor'];
        $data['mentor'] = $this->model('Admin_model')->editDataMentor($id_mentor);

        $this->view('admin/dashboard', $data);
    }
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_mentor = $_POST['id_mentor'];
            $nama_mentor = $_POST['nama_mentor'];
            $hasil_penelitian = $_POST['hasil_penelitian'];
            $minat_penelitian = $_POST['minat_penelitian'];
            $fee = $_POST['fee'];
            $jadwal = $_POST['jadwal'];
            $pendidikan = $_POST['pendidikan'];
            $sertifikasi = $_POST['sertifikasi'];
            $deskripsi = $_POST['deskripsi'];
            $tempat = $_POST['tempat'];
            $spesialisasi = $_POST['spesialisasi'];
            $judul = $_POST['judul'];


            $result = $this->model('Admin_model')->updateDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul, $id_mentor);

            if ($result) {
                header('location: '.BASEURL.'?controller=Admin');
                exit; // Ensure that no further code is executed after the header redirect
            } else {
                echo 'Data tidak berhasil diedit';
            }
        }
    }
}