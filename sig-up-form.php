<?php include("header.php");?>

<!-- <link rel="stylesheet" href="css/t1/style.css" title="Theme 1" /> -->

<form action="user-add.php" method="post">
	<fieldset>
		<legend>Sign up</legend>
		
		<label for="username">
			Username
			<input id="username" type="text" name="username"/>
		</label>

        <label for="email">
			Email
			<input id="email" type="text" name="email"/>
		</label>
		
		<label for="secretword">
			Password
			<input id="secretword" type="password" name="password"/>
		</label>
		
		
		<input type="submit" value="Sign up" />
	</fieldset>
</form>

<?php include("footer.php");?>