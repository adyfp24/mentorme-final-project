<?php 

class Booking extends Controller{
    public function index(){
        session_start();
        $data['judul'] = 'booking';
        $data['session'] = $_SESSION['id_user'];
        $id_mentor = $_POST['id_mentor'];
        $data['detail'] = $this->model('User_model')->getDetailMentor($id_mentor);
        $this->view('templates/header',$data);
        $this->view('mentoring/booking',$data);
        $this->view('templates/footer');
    }
    public function bookingMentor()
    {
        session_start();
        if(isset($_SESSION['id_user']))
        {   
            $id_user = $_SESSION['id_user'];
            $id_mentor = $_POST['id_mentor'];
            $request_topik = $_POST['request_topik'];
            $booking = $this->model('User_model')->tambahBookingMentor($request_topik,$id_user,$id_mentor);
            $id_booking = $this->model('User_model')->getIdBookingBaru();
            // var_dump($id_booking);
            $jadwalBaru = $this->model('User_model')->tambahJadwal($id_booking);
            if($jadwalBaru){
                header('location:'.BASEURL.'/jadwal');
            }
        }else{
            echo 'login dulu';
        }
    }
}