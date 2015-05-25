<?php include("header.php");
include("conect.php");
include("user-data.php");

if(array_key_exists("remove", $_GET) && $_GET['remove']=='true') { ?>
<p class="alert-success">User was removed !</p>

<?php }
$users = listUsers($conection);
?>
<table class="table table-striped table-bordered">
<?php
foreach($users as $user) :
?>
    <tr>
        <td><?= $user['user'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><a class="btn btn-primary" href="user-change.php?id=<?=$user['id']?>">Change</a>
        <td>

        <form action="user-remove.php" method="post">
            <input type="hidden" name="id" value="<?=$user['id']?>">    
            <button class="btn btn-danger">removed</button>
        </form>
        </td>    
    </tr>

<?php
endforeach
?>
</table>
<?php
include("footer.php");
?>