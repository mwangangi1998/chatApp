<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="javascript/sign-up.js"></script>
    <title>RealTime Chat Application </title>
</head>
<body>
<div class="wrapper">
    <section class="form signup">
<header>RealTime Chatting Application</header>
<form action="#" method="post">
<div class="error-txt">This is an error Message</div>
<div class="name-details">
    <div class="field input">
        <label >First Name</label>
        <input type="text" placeholder="First name" name="fname">
    </div>
    <div class="field input">
        <label >Last Name</label>
        <input type="text" placeholder="last name" name="lname">
    </div>
    </div>
    <div class="field input">
        <label >Email Name</label>
        <input type="email" placeholder="email name" name="email">
    </div>
    <div class="field image">
        <label >Select Image</label>
        <input type="file" name="file">
    </div>
    <div class="field input">
        <label >password</label>
        <input type="password" placeholder="enter password">
        <i class="fas fa-eye"></i>
    </div>
    <div class="field button">
       
        <input type="button" value="continue to chat" >
    </div>

<div class="link">Already sign up <a href="login.php">sign in</a></div>
</form>
    </section>
</div>
</body>
</html>