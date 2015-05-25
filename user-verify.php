<?php include("header.php");
include("conect.php");
include("user-data.php");
$user=$_POST["username"];
$password = $_POST['password'];

if(verifyUser($conection, $user)) { 

    if (verifyPassword($conection, $password)){
        header("Location: user-main.php");
        die();
    } else {

        $msg = mysqli_error($conection);              
        ?>
        <p class="text-danger">The password <?= $password ?> isn't exist ! <?= $msg ?></p>
        <?php
        }
        
    
    
//header("Location: user-main.php");
//die();
    
} else { 
$msg = mysqli_error($conection);              
?>
<p class="text-danger">The user <?= $user ?> isn't exist ! <?= $msg ?></p>
<?php
}
?>
<?php include("footer.php");?>