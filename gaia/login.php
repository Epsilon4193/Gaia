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
<h2>Log-in</h2>
<form action="logsert.php" method="POST">
    <?php if(isset($_GET['error'])){ ?>
        <p class="error"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
    
<label>E-mail</label><br>
<input type="text" class="txt" name="email" placeholder="Enter your E-mail"><br>
<br>
<label>Password</label><br>
<input type="password" class="txt" name="password" placeholder="Enter your Password"><br>
<br>

<input type="submit" class="txt" name="login" value="LOGIN" /> <a href="orgLog.php"><br>
<span class="orgL">Organization Login</a></span><br>
<a href="adminLog.php"><span class="orgL">Admin Login</a></span>

</form>
</section>
</div>


<?php include "includes/footer.php"; ?>

</body>

</html>