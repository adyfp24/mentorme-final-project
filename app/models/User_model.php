<?php 

class User_model {
    // public function loginUser($username, $password) {
    //     global $conn;
    
    //     $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        
    //     if ($stmt === false) {
    //         die('Error in SQL statement preparation: ' . $conn->error);
    //     }
    
    //     $stmt->bind_param("s", $username);
    //     $stmt->execute();
        
    //     $result = $stmt->get_result();
    
    //     if ($result->num_rows > 0) {
    //         $user = $result->fetch_assoc();
    //         if (password_verify($password, $user['password'])) {
    //             echo "Login berhasil!";
    //         } else {
    //             echo "Password salah!";
    //         }
    //     } else {
    //         echo "Username tidak ditemukan!";
    //     }
    
    //     $stmt->close();
    // }
    public function loginUser($username, $password) {
        global $conn;
    
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        if ($stmt === false) {
            die('Error in SQL statement preparation: ' . $conn->error);
        }
    
        // $stmt->bind_param("s", $username);
    
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                // var_dump($user['username'],$user['password'],$password,$username);
                if ($password === $user['password']) {
                    $stmt->close();
                    return true;
                } else {
                    $stmt->close();
                    return false;
                }
            } else {
                $stmt->close();
                echo false; // Username tidak ditemukan
            }
        } else {
            $stmt->close();
            return false; // Eksekusi query gagal
        }
    }
    
}