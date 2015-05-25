<?php include("header.php");
include("conect.php");
include("user-data.php");

$user=$_POST["username"];
$email=$_POST["email"];
$password = $_POST["password"];
$id = $_POST['id'];

if(changeUser($conection, $id, $user, $email , $password )) { ?>
<p class="text-success"> User <?= $user ?> changed with success ! </p>
<?php } else { 
$msg = mysqli_error($conection);              
?>
<p class="text-danger"> User <?= $user ?> was not changed ! <?= $msg ?></p>
<?php
}
?>
<?php include("footer.php");?>