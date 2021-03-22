<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- <link href="style.css" rel="stylesheet"> -->
</head>
<body>
	<div class="main-section">
		<div class="content-section">
			<div class="head-section">
				<h3>Login</h3>
			</div>
			<div class="body-section">
				<form>
                    <div class="row">
                        <label for="user">Username</label>
                        <input type="text" name="txtUser" value=" "><br>
                    </div>
					<div class="row">
                        <label for="user">PassWord</label>
                        <input type="text" name="txtPass" value=" "><br>
                    </div>
					<div class="row">
						<input type="button" name="btnLogin" value="login"/>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<html>

<?php
	if($_POST['txtUser'] == "admin" && $_POST['txtPass'] == "admin" && isset($_POST['btnLogin'])) {
		echo "Login success";
	}
	else echo "Login fail"
?>

