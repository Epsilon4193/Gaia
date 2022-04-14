<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "gaia";

$conn = mysqli_connect($server,$username,$password,$dbname);

if (isset($_POST['email']) && isset($_POST['password'])){
function validate($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);

if(empty($email)){
    header("Location: login.php?error=Email is required");
    exit();
}else if (empty($password)){
    header("Location: login.php?error=Password is required");
    exit();

}else{
$sql = "SELECT * FROM users WHERE email='$email' AND pwd='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)){
    header("Location: indivp.php");
}

else{
    header("Location: login.php?error=E-mail or Password is incorrect");
    exit();
}

}

}