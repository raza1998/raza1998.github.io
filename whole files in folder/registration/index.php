
 

<!DOCTYPE html>
<html>
	<body>

<div class="login-wrap">
	<div class="login-html">
		    <?php
		    session_start();
if(isset($_SESSION['username'])){

echo $_SESSION['username']." ";
echo "You are already logedin please go to <a href='admin.php'>Admin Page</a>";
die();
}
require_once('database.php');?>
		<link rel="stylesheet" href="style.css">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="login.php" method="post">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" name="user" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" name="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign In">
					</div>

				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<form action="signup.php" method="post">

					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" name="user" type="text" class="input">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" name="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass" class="label">Repeat Password</label>
						<input id="repeatPass" name="repeatPass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="pass" class="label">Email Address</label>
						<input id="email" name="email" type="text" class="input">
					</div>
					<div class="group">
						<input type="submit" class="button" value="SignUp">
					</div>

				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
