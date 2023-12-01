<?php

class Admin_model{
    public function loginAdmin($username_admin, $password_admin) {
        global $adminRepo;
        $admin = $adminRepo->loginAdmin($username_admin); 
            if($admin == false){
                return false;
            }
                if ($password_admin === $admin['password_admin']) {   
                    $_SESSION['id_admin'] = $admin['id_admin'];
                    return true;
                } else {
                    return false;
                }
    }

    public function tampilDataMentor()
    {
        global $conn;

        $sql = "SELECT * FROM mentor ORDER BY id_mentor";
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
        global $adminRepo;
        $dataMentor = $adminRepo->tambahDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul);
        if($dataMentor == true){
            return true;
        }else{
            return false;
        } 
    }
  public function hapusDataMentor($id_mentor)
{
    global $conn;

    try {
        $cekBooking = "SELECT COUNT(*) as total FROM booking WHERE id_mentor = ?";
        $stmtCek = $conn->prepare($cekBooking);

        if (!$stmtCek) {
            throw new Exception("Error in SQL statement preparation for checking references");
        }

        $stmtCek->bind_param("i", $id_mentor);
        $stmtCek->execute();

        $resultCek = $stmtCek->get_result();
        $rowCek = $resultCek->fetch_assoc();
        $totalBooking = $rowCek['total'];

        $stmtCek->close();

        if ($totalBooking > 1) {
            throw new Exception("Cannot delete mentor. There are bookings associated with this mentor.");
        }

        // Jika tidak ada referensi, hapus mentor
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
            throw new Exception("Error in executing DELETE statement");
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}


    public function editDataMentor($id_mentor)
{
    global $conn;

    try {
        // Fetch mentor data based on id_mentor
        $sql = "SELECT * FROM mentor WHERE id_mentor = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error in SQL statement preparation");
        }

        $stmt->bind_param("i", $id_mentor);
        $stmt->execute();
        $result = $stmt->get_result();
        $mentor = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mentor[] = $row;
            }
        }

        return $mentor;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return null; 
    }
}
public function updateDataMentor($nama_mentor, $hasil_penelitian, $minat_penelitian, $fee, $jadwal, $pendidikan, $sertifikasi, $deskripsi, $tempat, $spesialisasi, $judul, $id_mentor)
{
    global $conn;

    // Update mentor data based on id_mentor
    $sql = "UPDATE mentor SET 
                nama_mentor = ?,
                spesialisasi = ?,
                minat_penelitian = ?,
                sertifikasi = ?,
                deskripsi = ?,
                pendidikan = ?,
                hasil_penelitian = ?,
                judul = ?,
                jadwal = ?,
                fee = ?,
                tempat = ?
                WHERE id_mentor = ?";

        $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new Exception("Error in SQL statement preparation");
    }

    $stmt->bind_param("ssissssssssi", $nama_mentor, $spesialisasi, $minat_penelitian, $sertifikasi, $deskripsi, $pendidikan, $hasil_penelitian, $judul, $jadwal, $fee, $tempat, $id_mentor);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
}

}