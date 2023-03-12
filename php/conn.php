<?php
$servername="localhost";
$username="root";
$password="";
$dbname="chat";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if (!$connection) {
    echo "database created" .mysqli_connect_error();
    # code...
}
?>