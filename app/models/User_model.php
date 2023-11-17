<?php 

class User_model {
    public function loginUser($username, $password) {
        global $conn;
    
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        if ($stmt === false) {
            die('Error in SQL statement preparation: ' . $conn->error);
        }
    
        $stmt->bind_param("s", $username);
    
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if ($password === $user['password']) {
                    $stmt->close();
                    $_SESSION['id_user'] = $user['id_user'];
                    return true;
                } else {
                    $stmt->close();
                    return false;
                }
            } else {
                $stmt->close();
                return false;
            }
        } else {
            $stmt->close();
            return false; 
        }
    }
    public function registerUser($username, $password, $email, $nomor)
    {
        global $conn;  
    
        $sql = "INSERT INTO users (username, password, email, nomor)
                VALUES (?, ?, ?, ?)";
    
        $stmt = $conn->prepare($sql);
    
        $stmt->bind_param("ssss", $username, $password, $email, $nomor);
    
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
   
    public function getJadwal()
    {
        global $conn;
        $id_user = $_SESSION['id_user'];        
        $stmt = $conn->prepare("SELECT jadwal.*, booking.request_topik, mentor.nama_mentor, mentor.judul, mentor.jadwal, mentor.fee 
                            FROM jadwal
                            INNER JOIN booking ON jadwal.id_booking = booking.id_booking
                            INNER JOIN mentor ON booking.id_mentor = mentor.id_mentor
                            WHERE booking.id_user = ?");
    
        if ($stmt === false) {
        die('Error in SQL statement preparation: ' . $conn->error);
    }

        $stmt->bind_param("i", $id_user);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $jadwal = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $jadwal[] = $row;
                }
            }

            $stmt->close();
            return $jadwal;
        } else {
            $stmt->close();
            die('Error in SQL statement execution: ' . $conn->error);
        }
    }
    // public function getIdBookingTerbesar()
    // {
    //     global $conn;

    //     $sql = "SELECT * FROM jadwal WHERE id_booking = (SELECT MAX(id_booking) FROM jadwal)";
    //     $result = $conn->query($sql);
    //     $jadwal = [];

    //     if ($result->num_rows > 0) {
    //         while ($row = $result->fetch_assoc()) {
    //             $jadwal[] = $row;
    //     }
    // }

    // return $jadwal;
    // }
    public function getBookingMentor($id_mentor)
    {
        global $conn;

        $sql = "SELECT * FROM mentor WHERE id_mentor = $id_mentor ";
        $result = $conn->query($sql);
        $detail = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $detail[] = $row;
            }
        }

        return $detail;
    }

    public function getDetailMentor($id_mentor)
    {
        global $conn;

        $sql = "SELECT * FROM mentor WHERE id_mentor = $id_mentor";
        $result = $conn->query($sql);
        $detail = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $detail[] = $row;
            }
        }

        return $detail;
    }
    public function tambahBookingMentor($request_topik,$id_user,$id_mentor)
    {
        global $conn;  
    
        $sql = "INSERT INTO booking (request_topik, id_user, id_mentor)
                VALUES (?, ?, ?)";
    
        $stmt = $conn->prepare($sql);
    
        $stmt->bind_param("sii", $request_topik,$id_user,$id_mentor);
    
        if ($stmt->execute()) {
            $stmt->close();
            return ;
        } else {
            $stmt->close();
            return false;
        }
    }
    public function getIdBookingBaru()
{
    global $conn;

    $sql = "SELECT MAX(id_booking) as last_id FROM booking";
    $result = $conn->query($sql);
    $id_baru = 0; // Menginisialisasi dengan nilai integer

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id_baru = (int)$row['last_id'];
        }
    }

    return $id_baru;
}

    public function tambahJadwal($id_booking)
    {
        global $conn;  
    
        $sql = "INSERT INTO jadwal (id_booking)
                VALUES (?)";
    
        $stmt = $conn->prepare($sql);
    
        $stmt->bind_param("i", $id_booking);
    
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
}