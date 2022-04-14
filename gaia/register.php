<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<title>GAIA</title>

</head>

<body>

<?php include "includes/header.php"; ?>
<div class="signup">
<section class="signup-form">
<h2>Sign-up</h2>
<form action="insert.php" method="POST">
<label>Name</label><br>
<input type="text" class="txt" name="fullname" placeholder="Enter your Fullname"><br>
<br>
<label>E-mail</label><br>
<input type="text" class="txt" name="email" placeholder="Enter your E-mail"><br>
<br>
<label>Password</label><br>
<input type="password" class="txt" name="password" placeholder="Enter your Password"><br>
<br>

<label>Are you an Individual or in an Organization</label><br>
<select class="txt" name="type">
<option value="">SELECT</option>
<option value="individual">Individual</option>
<option value="organization">Organization</option>
</select><br>

<br>

<input type="submit" class="txt" name="register" value="REGISTER" />

</form>

</section>
</div>

<?php include "includes/footer.php"; ?>

</body>


</html>