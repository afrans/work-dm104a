<?php include("header.php");
include("conect.php");
include("user-data.php");

if(array_key_exists("removed", $_GET) && $_GET['removed']=='true') { ?>
<p class="alert-success">User was removed !</p>

<?php }
$users = listUsers($conection);
?>
<table >

    <tr>
        <td>User</td>
        <td>Email</td>
        <td>Change</td>
        <td>Remove</td>
    </tr>

<?php
foreach($users as $user) :
?>
    <tr>
        <td><?= $user['user'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
        <form action="sig-up-form-change.php" method="post">
            <input type="hidden" name="id" value="<?=$user['id']?>">    
            <button >Change</button>
        </form>        
        
        </td>
        
        <td>

        <form action="user-remove.php" method="post">
            <input type="hidden" name="id" value="<?=$user['id']?>">    
            <button >Remove</button>
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