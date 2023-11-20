<?php

class Jadwal extends Controller{
    
    public function index(){
        session_start();
        // session_unset();
        // session_destroy();
        
        if (!isset($_SESSION['id_user'])) {
            header('Location: ' . BASEURL . '?controller=Login'); 
            exit();
        }else{
            session_start();
            $data['judul'] = 'Jadwal';
            $data['session'] = $_SESSION['id_user'];
            $data['jadwal'] = $this->model('User_model')->getJadwal();
            $id_user = $_SESSION['id_user'];
            $data['username'] = $this->model('User_model')->getUsernameById($id_user);
            $this->view('templates/header',$data);
            $this->view('jadwal/index',$data);
            // $this->view('templates/footer');
        }
    }
    public function hapusJadwal()
    {
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $id_jadwal = $_POST['id_jadwal'];
            try {
                $result = $this->model('User_model')->hapusJadwalById($id_jadwal);
            
                if ($result) {
                    header('location: ?controller=Jadwal');
                } else {
                    echo '<script>alert("jadwal gagal dihapus");</script>';
                    echo '<script>window.location.href="'.BASEURL.'?controller=Jadwal";</script>';
                }
            } catch (Exception $e) {
                echo "Terjadi pengecualian: " . $e->getMessage();
            }
            
    }
    }
}    