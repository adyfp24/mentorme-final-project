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
//     public function hapusDataMentor($id_mentor)
// {
//     global $conn;

//     try {
//         // Periksa referensi kunci asing sebelum penghapusan
//         $checkSql = "SELECT COUNT(*) FROM jadwal WHERE id_mentor = ?";
//         $checkStmt = $conn->prepare($checkSql);

//         if (!$checkStmt) {
//             throw new Exception("Error dalam persiapan pernyataan SQL");
//         }

//         $checkStmt->bind_param("i", $id_mentor);
//         $checkStmt->execute();
//         $checkStmt->bind_result($count);
//         $checkStmt->fetch();
//         $checkStmt->close();

//         if ($count > 0) {
//             throw new Exception("Tidak dapat menghapus mentor. Mentor terkait dengan entri jadwal yang ada.");
//         }

//         // Jika tidak ada referensi kunci asing, lanjutkan dengan penghapusan
//         $deleteSql = "DELETE FROM mentor WHERE id_mentor = ?";
//         $deleteStmt = $conn->prepare($deleteSql);

//         if (!$deleteStmt) {
//             throw new Exception("Error dalam persiapan pernyataan SQL");
//         }

//         $deleteStmt->bind_param("i", $id_mentor);

//         if ($deleteStmt->execute()) {
//             $deleteStmt->close();
//             return true;
//         } else {
//             $deleteStmt->close();
//             return false;
//         }
//     } catch (Exception $e) {
//         echo "Error: " . $e->getMessage();
//     }
// }

//     public function hapusDataMentor($id_mentor)
// {
//     global $conn;

//     try {
//         // Cek apakah ada referensi di tabel booking
//         $cekBooking = "SELECT COUNT(*) as total FROM booking WHERE id_mentor = ?";
//         $stmtCek = $conn->prepare($cekBooking);

//         if (!$stmtCek) {
//             throw new Exception("Error in SQL statement preparation for checking references");
//         }

//         $stmtCek->bind_param("i", $id_mentor);
//         $stmtCek->execute();

//         $resultCek = $stmtCek->get_result();
//         $rowCek = $resultCek->fetch_assoc();
//         $totalBooking = $rowCek['total'];

//         $stmtCek->close();

//         if ($totalBooking > 0) {
//             throw new Exception("Cannot delete mentor. There are bookings associated with this mentor.");
//         }

//         // Jika tidak ada referensi, hapus mentor
//         $sql = "DELETE FROM mentor WHERE id_mentor = ?";
//         $stmt = $conn->prepare($sql);

//         if (!$stmt) {
//             throw new Exception("Error in SQL statement preparation");
//         }

//         $stmt->bind_param("i", $id_mentor);

//         if ($stmt->execute()) {
//             $stmt->close();
//             return true;
//         } else {
//             throw new Exception("Error in executing DELETE statement");
//         }
//     } catch (Exception $e) {
//         echo "Error: " . $e->getMessage();
//         return false;
//     }
// }


    public function editDataMentor()
    {

    }

}