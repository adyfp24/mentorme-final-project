<?php

class Admin_model{

   public function tampilDataMentor()
   {
    global $conn;

        $sql = "SELECT * FROM mentor";
        $result = $conn->query($sql);
        $mentor = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mentor[] = $row;
            }
        }

        return $mentor;
    }

    public function tambahDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul)
    {
        global $conn;  // Saring penggunaan variabel global dan gunakan koneksi yang telah dibuat
    
        // Perbaikan query SQL dan penggunaan koneksi
        $sql = "INSERT INTO mentor (nama_mentor, hasil_penelitian, minat_penelitian, fee, jadwal, pendidikan, sertifikasi, deskripsi, tempat, spesialisasi, judul)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        $stmt = $conn->prepare($sql);
    
        // Bind parameter dengan tipe data yang sesuai
        $stmt->bind_param("sssssssssss", $nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul);
    
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
    
        // echo $nama_mentor.'<br>';
        // echo $hasil_penelitian;
    

    
 
}