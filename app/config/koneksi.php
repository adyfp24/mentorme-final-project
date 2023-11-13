<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_pweb';

$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    die('koneksi gagal'.mysqli_connect_error());
}


define('BASEURL', '/fix-project/app');
