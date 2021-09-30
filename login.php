<?php
include('connect.php');

$email=isset($_POST['email']) ? $_POST['email']  : '';
$password=isset($_POST['password']) ? $_POST['password']  : '';

$sql = "SELECT email,password FROM login WHERE email='$email' AND password='$password'";

if ($conn->query($sql) == TRUE) 
{ echo '<script>alert("Data Submitted !")</script>';
    header("Location:search.html");
}
else 
{
    echo '<script>alert("Error !")</script>';
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>