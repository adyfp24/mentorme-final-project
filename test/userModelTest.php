<?php

use PHPUnit\Framework\TestCase;

require_once '/Applications/XAMPP/xamppfiles/htdocs/fix-project/app/models/User_model.php';
class user_repo_mock{
    public function loginUser($username){
        if($username =='ady' ){
            return ["id_user"=>"1","nama"=>"ady", "password" => "123"];
        }else{
            return false;
        } 
    }
    public function tambahBookingMentor($request_topik,$id_user,$id_mentor){
        if (
            !empty($request_topik) &&
            !empty($id_user) &&
            !empty($id_mentor) 
        ) {
            return true;
        } else {
            return false;
        }
    }
}

$userRepo = new user_repo_mock();
class UserModelTest extends TestCase
{
    public function testLoginUserCorrectCredentials()
    {
    $userModel = new User_model();

    $username = 'ady';
    $password = '123';

    $result = $userModel->loginUser($username, $password);

    $this->assertTrue($result);
    }

    public function testLoginWrongPassword(){
        $userModel = new User_model();

        $username = 'ady';
        $password = 'jdjjd';

        $result = $userModel->loginUser($username, $password);

        $this->assertFalse($result);
    }

    public function testLoginWrongUsername(){
        $userModel = new User_model();

        $username = 'jscdm';
        $password = '123';

        $result = $userModel->loginUser($username, $password);

        $this->assertFalse($result);
    }
    public function testBookingMentorSuccess(){
        $userModel = new User_model();
        $request_topik = 'ingin membahas AI';
        $id_user = '01';
        $id_mentor = '28';
        $result = $userModel->tambahBookingMentor($request_topik,$id_user,$id_mentor);
        $this->assertTrue($result);
    }
    public function testBookingMentorFailed(){
        $userModel = new User_model();
        $request_topik = '';
        $id_user = '';
        $id_mentor = '';
        $result = $userModel->tambahBookingMentor($request_topik,$id_user,$id_mentor);
        $this->assertFalse($result);
    }
}