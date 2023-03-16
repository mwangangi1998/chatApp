<?
session_start();
include_once "conn.php";
$email=mysqli_real_escape_string($connection,$_POST['email']);
$password=mysqli_real_escape_string($connection,$_POST['password']);

echo "hello form login";
?>