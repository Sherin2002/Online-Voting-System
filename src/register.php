<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name1=$_POST['firstname'];
    $Name2=$_POST['lastname'];
    $Gender=$_POST['gender'];
    $MNumber=$_POST['mnumber'];
	$Email=$_POST['email'];
    $Address=$_POST['address'];
    $DOB=$_POST['DOB'];
	$Password=$_POST['password'];
	$Password2=$_POST['repassword'];

    
    $sql = "INSERT INTO signup_details (firstname,lastname,gender,mnumber,email,address,DOB,password,repassword) VALUES ('$Name1','$Name2','$Gender','$MNumber','$Email','$Address','$DOB','$Password','$Password2')";

    if (mysqli_query($conn,$sql)) {
        echo "Registration successful!";
       
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>