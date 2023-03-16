<?php 
session_start();
include_once "conn.php";
$fname=mysqli_real_escape_string($connection,$_POST['fname']);
$lname=mysqli_real_escape_string($connection,$_POST['lname']);
$email=mysqli_real_escape_string($connection,$_POST['email']);
//$file=mysqli_real_escape_string($connection,$_POST['image']);
$password=mysqli_real_escape_string($connection,$_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) )
{
  if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
$sql=mysqli_query($connection,"SELECT email from users WHERE email ='{$email}'");

if(mysqli_num_rows($sql)>0){
    // check  if email already exists
    echo "$email -already exists";
}else {
    if(isset($_FILES['image'])){
        $img_name=$_FILES['image']['name'];
        $img_type=$_FILES['image']['type'];
        $tmp_name=$_FILES['image']['tmp_name'];

        // explode image and get last extension of file i.e jpg,png
        $img_explode=explode('.', $img_name);
        $img_ext=end($img_explode);
//image extension png,jpeg,jpg

$img_extensions=['PNG','png','JPG','jpg','JPEG','jpeg'];
if(in_array($img_ext,$img_extensions)==true){
    // image will return current time
    $time=time();
 
    $new_image_name=$time.$img_name;
    if (move_uploaded_file($tmp_name,'images/'.$new_image_name)) {
        $status ="Active now";
        $random_id=rand(time(),1000000);
         // insertig user data   
         //status
         $sql2=mysqli_query($connection,"INSERT into users (unique_id,fname,lname,email,password,file,status)
         values('{$random_id}','{$fname}','{$lname}','{$email}','{$password}','{$new_image_name}','{$status}' )   ");
 
    if($sql2) {
    # code...
    $sql3=mysqli_query($connection,"SELECT * FROM users WHERE email ='{$email}'");
    if(mysqli_num_rows($sql3)>0){
        $row=mysqli_fetch_assoc($sql3);
        $_SESSION['unique_id']=$row['unique_id'];
        echo "success";
    }
}else{
    echo "Something went wrong!";
}
}else{
    echo "please select image file - jpg, png,jpeg";
}
    }else {
        echo "please select image file";
    }
}
 
  }

}
}
else {
    //check all input
    echo "all fields inputs are required";
}

?>