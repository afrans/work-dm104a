<?php include("header.php");?>

<!-- <link rel="stylesheet" href="css/t1/style.css" title="Theme 1" /> -->

<form action="user-verify.php" method="post">
	<fieldset>
		<legend>Sign in</legend>
		
		<label for="username">
			Username
			<input id="username" type="text" name="username"/>
		</label>
		
		<label for="secretword">
			Password
			<input id="secretword" type="password" name="password" />
		</label>
		
		<!-- <label for="remember-me">
		    <input id="remember-me" type="checkbox" />
		    Remember me
		</label> -->
		
		<input type="submit" value="Sign in" />
	</fieldset>
</form>

<?php include("footer.php");?>