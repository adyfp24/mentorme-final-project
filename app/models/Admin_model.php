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
    public function masukkanDataMentor()
    {
        global $conn;
        
    }
 
}