<?php
$adminRepo = new Admin_repo();
class Admin_repo{
    public function loginAdmin($username_admin)
    {
        global $conn;
    
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username_admin = ?");
        
        if ($stmt === false) {
            die('Error in SQL statement preparation: ' . $conn->error);
        }

        $stmt->bind_param("s", $username_admin);
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $admin = $result->fetch_assoc();
                $stmt->close();
                return $admin;
            }else{
                return false;
            }
        }
    }

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