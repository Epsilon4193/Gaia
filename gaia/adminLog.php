<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<title>GAIA</title>

</head>

<body>

<?php include "includes/header.php"; ?>

<div class="signup">
<section class="login-form">
<h2>Admin Log-in</h2>
<form action="orgp.php" method="POST">
<label>E-mail</label><br>
<input type="text" class="txt" name="email" placeholder="Enter your E-mail"><br>
<br>
<label>Password</label><br>
<input type="password" class="txt" name="password" placeholder="Enter your Password"><br>
<br>

<input type="submit" class="txt" name="login" value="LOGIN" /><br>
<a href="login.php"><span class="orgL">Go back to Individual Login</a></span>

</form>
</section>
</div>


<?php include "includes/footer.php"; ?>

</body>


</html>