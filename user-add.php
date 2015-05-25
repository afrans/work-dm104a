<?php include("header.php");
include("conect.php");
include("user-data.php");
$user=$_POST["username"];
$email=$_POST["email"];
$password = $_POST['password'];

if(insertUser($conection, $user, $email, $password )) { ?>
<p class="text-success">The user <?= $user ?> was created ! </p>
<?php } else { 
$msg = mysqli_error($conection);              
?>
<p class="text-danger">The user <?= $user ?> didn't was created ! <?= $msg ?></p>
<?php
}
?>
<?php include("footer.php");?>