<?php 

include "index.php";

$server = "localhost";
$username = "root";
$password = "";
$dbname = "gaia";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['register'])){

    if(!empty($_POST['fullname'])&& !empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['type'])){
        
$name= $_POST['fullname'];
$email= $_POST['email'];
$password= $_POST['password'];
$type= $_POST['type'];

$query = "INSERT INTO users(fullname,email,pwd,type) VALUES ('$name','$email','$password','$type')"; 

$run = mysqli_query($conn,$query);

if($run){
    echo '<script type="text/javascript"> alert("Data Saved")</script> ';
    header("location: login.php");
}
else{
    echo '<script type="text/javascript"> alert("Data Not Saved")</script> ';
    header("location: register.php");
}


    }
    else{
        echo '<script type="text/javascript"> alert("All fields required")</script> '; 
        header("location: register.php");
    }
}



?>