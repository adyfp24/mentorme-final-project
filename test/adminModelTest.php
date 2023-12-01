<?php

use PHPUnit\Framework\TestCase;

require_once '/Applications/XAMPP/xamppfiles/htdocs/fix-project/app/models/Admin_model.php';

class admin_repo_mock{
    public function loginAdmin($username_admin){
        if($username_admin =='admin' ){
            return ["id_admin"=>"1","username_admin"=>"admin", "password_admin" => "testing"];
        }else{
            return false;
        } 
    }
    public function tambahDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul){
        if (
            !empty($nama_mentor) &&
            !empty($hasil_penelitian) &&
            !empty($minat_penelitian) &&
            !empty($fee) &&
            !empty($jadwal) &&
            !empty($pendidikan) &&
            !empty($sertifikasi) &&
            !empty($deskripsi) &&
            !empty($tempat) &&
            !empty($spesialisasi) &&
            !empty($judul)
        ) {
            return true;
        } else {
            return false;
        }
    }
    
}

$adminRepo = new admin_repo_mock();

class AdminModelTest extends TestCase{
    public function testTambahDataSuccess(){
        $adminModel = new Admin_model();
        $nama_mentor = 'ady firdaus';
        $hasil_penelitian = 'hasil jjsjncs';
        $minat_penelitian = 'jdsbisbicjs';
        $fee = 'oiwciocwi';
        $jadwal = 'kjabc';
        $pendidikan = 'kjsibcs';
        $sertifikasi = 'iscbicb';
        $deskripsi = 'uicabicob';
        $tempat = 'jcsbabjcas';
        $spesialisasi = 'jsabbax';
        $judul = 'jcsbcas';
        $result = $adminModel->tambahDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul);
        $this->assertTrue($result);
    }
    public function testTambahDataFailed(){
        $adminModel = new Admin_model();
        $nama_mentor = '';
        $hasil_penelitian = '';
        $minat_penelitian = '';
        $fee = '';
        $jadwal = '';
        $pendidikan = '';
        $sertifikasi = '';
        $deskripsi = '';
        $tempat = '';
        $spesialisasi = '';
        $judul = '';
        $result = $adminModel->tambahDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul);
        $this->assertFalse($result);
    }
    public function testLoginAdminCorrectCredentials()
    {
    $adminModel = new Admin_model();

    $username_admin = 'admin';
    $password_admin = 'testing';

    $result = $adminModel->loginAdmin($username_admin, $password_admin);

    $this->assertTrue($result);
    }

    public function testLoginWrongPassword(){
        $adminModel = new Admin_model();

        $username_admin = 'admin';
        $password_admin = 'jdjjd';

        $result = $adminModel->loginAdmin($username_admin, $password_admin);

        $this->assertFalse($result);
    }

    public function testLoginWrongUsername(){
        $adminModel = new Admin_model();

        $username_admin = 'jscdm';
        $password_admin = 'testing';

        $result = $adminModel->loginAdmin($username_admin, $password_admin);

        $this->assertFalse($result);
    }
}