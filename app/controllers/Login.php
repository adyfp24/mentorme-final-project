<?php

class Login extends Controller{
    public function index(){
		session_start();
        $data['judul'] = 'login'; 
        $data['session'] = $_SESSION['id_user'];
      	if (isset($_SESSION['id_user'])) {
            header('Location:'.BASEURL);
            
            exit();
        }  
        $this->view('templates/header',$data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }
    public function forget()
    {
        $data['judul'] = 'forget'; 
        $data['session'] = $_SESSION['id_user'];
        $this->view('templates/header',$data);
        $this->view('auth/forget');
        $this->view('templates/footer');
    }

    public function logUser(){
        session_start();
        // $this->logout();

        if (isset($_SESSION['id_user'])) {
            header('Location:'.BASEURL);
            exit();
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $result = $this->model('User_model')->loginUser($username, $password);
            if(!$result){
                echo '<script>alert("Username atau password yang anda masukkan salah");</script>';
                echo '<script>window.location.href="'.BASEURL.'?controller=login";</script>';
            }else{
                session_start();
                header('location:?controller=Home');
            }
        }
    }
    public function logoutUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){    
            session_start();
            session_unset();
            session_destroy();
            header('location:'.BASEURL);
        }
        // exit();
    }
    public function checkUsername()
    {
        session_start();

    if (isset($_SESSION['id_user'])) {
        header('Location:'.BASEURL);
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $result = $this->model('User_model')->userExists($username);

        if ($result) {
            // Username exists, redirect to security questions
            header('Location: ?controller=Login&method=forget&step=security_questions&username=' . urlencode($username));
            exit;
        } else {
            header('Location: ?controller=Login&method=forget&step=username&error=1&message=' . urlencode('eror'));
            exit;
        }
    }
    }
    public function checkSecurityQuestions()
    {
        // Handle the logic to check security questions here
        // You may want to interact with your model to check if the answers are correct

        // For example:
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['nomor'];

        // Check if the security questions are valid
        // Replace this with your actual validation logic
        $areSecurityQuestionsValid = true;

        if ($areSecurityQuestionsValid) {
            // Redirect to reset password section
            header('Location: ?controller=Login&method=forget&step=reset&username=' . urlencode($username));
            exit;
        } else {
            // Redirect back to forget page with an error
            header('Location: ?controller=Login&method=forget&step=security_questions&error=1');
            exit;
        }
    }

    public function updatePassword()
    {
    $username = $_POST['username'];
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if passwords match
    if ($newPassword === $confirmPassword) {
        $result = $this->model('User_model')->updatePassword($username, $newPassword);
        if ($result) {
            // Password updated successfully
            header('Location: ?controller=Login&method=forget&step=reset&success=1&username=' . urlencode($username));
            exit;
        } else {
            // Redirect back to reset password page with an error
            header('Location: ?controller=Login&method=forget&step=reset&error=1&username=' . urlencode($username));
            exit;
        }
    } else {
        // Redirect back to reset password page with an error
        header('Location: ?controller=Login&method=forget&step=reset&error=1&username=' . urlencode($username));
        exit;
    }
    }
}






