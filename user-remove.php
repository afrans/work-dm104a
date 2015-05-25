<?php 
include("header.php");
include("conect.php");
include("user-data.php");

$id = $_POST['id'];
removeUser($conection, $id);

header("Location: user-list.php?removed=true");
die();

include("footer.php");
?>
