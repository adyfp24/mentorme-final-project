<?php

$userRepo = new User_repo();

class User_repo{

    public function loginUser($username){
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
                $stmt->close();
                return $user;
            }
        }
        $stmt->close();
        return false;
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
}
