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
    public function hapusDataMentor($id_mentor)
    {
        global $conn;

        try {
            $sql = "DELETE FROM mentor WHERE id_mentor = ?";
            $stmt = $conn->prepare($sql);
            
            if (!$stmt) {
                throw new Exception("Error in SQL statement preparation");
            }

            $stmt->bind_param("i", $id_mentor);

            if ($stmt->execute()) {
                $stmt->close();
                return true;
            } else {
                $stmt->close();
                return false;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function editDataMentor()
    {

    }

}