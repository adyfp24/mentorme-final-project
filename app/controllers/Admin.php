<?php 

class Admin extends Controller {
    
    public function index()
    {
        $data['judul'] = 'Admin';
        $data['mentor'] = $this->model('Admin_model')->tampilDataMentor();
        $this->view('admin/dashboard', $data);
        //$this->view('templates/sidebar');
        $this->view('templates/footer');
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
                header('location: '.BASEURL.'/admin');
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
                header('location: '.BASEURL.'/admin');
            }
        }    
    }
    public function edit()
    {
        
    }
}