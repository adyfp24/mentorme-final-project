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

    public function testLoginCorrectUsername(){
        $userModel = new User_model();

        $username = 'wodikdism';
        $password = '123';

        $result = $userModel->loginUser($username, $password);

        $this->assertFalse($result);
    }

    public function testLoginCorrectPassword(){
        $userModel = new User_model();

        $username = 'ady';
        $password = '857845094';

        $result = $userModel->loginUser($username, $password);

        $this->assertFalse($result);
    }
}