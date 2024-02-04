<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
<h1 class="logo"> Krypto<span>Code</span></h1>

	<div class="login" style="center">
     <form action="loginfile.php" method="get">
     	<h2 class="head">LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?><br><br>
		<div class="position">
     	<label>User Name</label><br>
     	<input type="text" name="username" placeholder="User Name"><br><br>

     	<label>Password</label><br>
     	<input type="password" name="password" placeholder="Password"><br><br>
		 <button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
	</div>

     	
     </form>
	</div>
</body>
</html>