<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Form Validation</title>
</head>

<?php

$connect= mysqli_connect("localhost", "root","","moviesite") or die("Connection Failed");

if(!empty($_POST['submit']))
{

$email=$_POST['email']; 
$upswd1=$_POST['upswd1'];

$query="select * from register where email='$email' and upswd1='$upswd1'"; 
$result=mysqli_query($connect, $query); 
$count=mysqli_num_rows ($result);

if($count>0)

{ 
  header('location:movie.html');
}
else
{
  echo "Username and Password does not match!";
}
}

?>

<body background-img="movie/narutobg.jpg">
    <div class="container">
        <div class="header">
            <h2>LOGIN TO FLIX</h2>
        </div>
        <form method="POST" class="form">
            <div class="form-group">
                <label for="">Email : </label>
                <input type="email" name="email" placeholder="email" required="">
                <i class="ion-ios-checkmark"></i>
                <i class="ion-android-alert"></i>
                <span></span>
            </div>
            <div class="form-group">
                <label for="">Password : </label>
                <input type="password" name="upswd1" placeholder="Password" required="">
                <i class="ion-ios-checkmark"></i>
                <i class="ion-android-alert"></i>
                <span></span>
            </div>


           <input type="submit" name="submit" value="Signin" />

        </form>
    </div>

</body>

</html>