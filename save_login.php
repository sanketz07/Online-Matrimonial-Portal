<?php
include('connect.php');

$name=isset($_POST['name']) ? $_POST['name']  : '';
$contact=isset($_POST['contact']) ? $_POST['contact']  : '';
$email=isset($_POST['email']) ? $_POST['email']  : '';
$password=isset($_POST['password']) ? $_POST['password']  : '';
$profilefor=isset($_POST['profilefor']) ? $_POST['profilefor']  : '';
$gender=isset($_POST['gender']) ? $_POST['gender']  : '';
$dob=isset($_POST['dob']) ? $_POST['dob']  : '';
$religion=isset($_POST['religion']) ? $_POST['religion']  : '';
$community=isset($_POST['community']) ? $_POST['community']  : '';
$subcommunity=isset($_POST['subcommunity']) ? $_POST['subcommunity']  : '';


$sql = "INSERT INTO login(name,contact,email,password,profilefor,gender,dob,religion,community,subcommunity)
VALUES('$name','$contact','$email','$password','$profilefor','$gender','$dob','$religion','$community','$subcommunity')";

if ($conn->query($sql) == TRUE) 
{ echo '<script>alert("Data Submitted !")</script>';
    header("Location:login.html");
}
else 
{
    echo '<script>alert("Error !")</script>';
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>