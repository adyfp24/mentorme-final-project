<?php
$adminRepo = new Admin_repo();
class Admin_repo{

    public function tambahDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul)
    {
        global $conn;
    
        $sql = "INSERT INTO mentor (nama_mentor, hasil_penelitian, minat_penelitian, fee, jadwal, pendidikan, sertifikasi, deskripsi, tempat, spesialisasi, judul)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        $stmt = $conn->prepare($sql);
    
        $stmt->bind_param("sssssssssss", $nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul);
    
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
}