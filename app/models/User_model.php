<?php 

class User_model {
    public function loginUser($username, $password) {
        global $userRepo;
        $user = $userRepo->loginUser($username); 
            if($user == false){
                return false;
            }
                if ($password === $user['password']) {   
                    $_SESSION['id_user'] = $user['id_user'];
                    return true;
                } else {
                    return false;
                }
    }
    public function getUsernameById($id_user)
{
    global $conn;

    try {
        // Gunakan parameter terikat untuk mencegah SQL injection
        $sql = "SELECT username FROM users WHERE id_user = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error dalam persiapan pernyataan SQL");
        }

        $stmt->bind_param("i", $id_user);
        $stmt->execute();
        $stmt->bind_result($username);

        $usernames = [];

        while ($stmt->fetch()) {
            // Ambil nilai dari variabel yang di-bind
            $usernames[] = $username;
        }

        $stmt->close();

        return $usernames;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
    public function getDataUser($id_user){
    global $conn;

    try {
        // Gunakan parameter terikat untuk mencegah SQL injection
        $sql = "SELECT * FROM users WHERE id_user = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error dalam persiapan pernyataan SQL");
        }

        $stmt->bind_param("i", $id_user);
        $stmt->execute();
        
        // Menggunakan bind_result untuk menentukan variabel yang akan menyimpan hasil
        $result = $stmt->get_result();
        
        // Fetch hasil query ke dalam array asosiatif
        $user = $result->fetch_assoc();

        $stmt->close();

        return $user;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

public function insertGambar($gambar, $id_user)
    {
        global $conn;
        $sql = "UPDATE users SET gambar = ? WHERE id_user = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error in SQL statement preparation");
        }

        $stmt->bind_param("si", $gambar, $id_user);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
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
    public function checkUsernameExists($username)
{
    global $conn;

    $sql = "SELECT username FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    $numRows = $stmt->num_rows;
    
    $stmt->close();

    return $numRows > 0;
}
public function tampilDataMentor($page = 1, $perPage = 6)
{
    global $conn;

    $offset = ($page - 1) * $perPage;

    $sql = "SELECT * FROM mentor LIMIT $perPage OFFSET $offset";
    $result = $conn->query($sql);
    $mentor = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mentor[] = $row;
        }
    }

    return $mentor;
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

        global $userRepo;
        $dataMentor = $userRepo->tambahBookingMentor($request_topik,$id_user,$id_mentor);
        if($dataMentor == true){
            return true;
        }else{
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
    public function hapusJadwalById($id_jadwal) {
        global $conn;
    
        $sql = "DELETE FROM jadwal WHERE id_jadwal=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_jadwal);
    
        if ($stmt->execute()) {
            $stmt->affected_rows;
            $stmt->close();
            return true;
        } else {
            return false;
        }
    }
    public function userExists($username)
    {
        global $conn;

        $sql = "SELECT COUNT(*) as count FROM users WHERE username = ?";
        $params = [$username];

        // Assuming $conn is your mysqli connection object
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            // Handle error
            return false;
        }

        $stmt->bind_param("s", ...$params);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
        return $count > 0;
    }

    public function updatePassword($username, $newPassword)
    {
        global $conn;
        $sql = "UPDATE users SET password = ? WHERE username = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error in SQL statement preparation");
        }

        $stmt->bind_param("ss", $newPassword, $username);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    
}