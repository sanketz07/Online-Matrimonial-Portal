<?php
include('connect.php');

$name=isset($_POST['name']) ? $_POST['name']  : '';
$contact=isset($_POST['contact']) ? $_POST['contact']  : '';
$email=isset($_POST['email']) ? $_POST['email']  : '';
$age=isset($_POST['age']) ? $_POST['age']  : '';
$gender=isset($_POST['gender']) ? $_POST['gender']  : '';
$city=isset($_POST['city']) ? $_POST['city']  : '';
$state=isset($_POST['state']) ? $_POST['state']  : '';
$withfamily=isset($_POST['withfamily']) ? $_POST['withfamily']  : '';
$maritalstatus=isset($_POST['maritalstatus']) ? $_POST['maritalstatus']  : '';
$child=isset($_POST['child']) ? $_POST['child']  : '';
$diet=isset($_POST['diet']) ? $_POST['diet']  : '';
$height=isset($_POST['height']) ? $_POST['height']  : '';
$weight=isset($_POST['weight']) ? $_POST['weight']  : '';
$religion=isset($_POST['religion']) ? $_POST['religion']  : '';
$community=isset($_POST['community']) ? $_POST['community']  : '';
$subcommunity=isset($_POST['subcommunity']) ? $_POST['subcommunity']  : '';
$qualification=isset($_POST['qualification']) ? $_POST['qualification']  : '';
$clg=isset($_POST['clg']) ? $_POST['clg']  : '';
$workswith=isset($_POST['workswith']) ? $_POST['workswith']  : '';
$company=isset($_POST['company']) ? $_POST['company']  : '';
$aas=isset($_POST['aas']) ? $_POST['aas']  : '';
$income=isset($_POST['income']) ? $_POST['income']  : '';
$about=isset($_POST['about']) ? $_POST['about']  : '';
$image=isset($_POST['image']) ? $_POST['image']  : '';

$sql = "INSERT INTO profile(name,contact,email,age,gender,city,state,withfamily,maritalstatus,child,diet,height,weight,religion,community,subcommunity,qualification,clg,workswith,company,aas,income,about,image)
VALUES('$name','$contact','$email','$age','$gender','$city','$state','$withfamily','$maritalstatus','$child','$diet','$height','$weight','$religion','$community','$subcommunity','$qualification','$clg','$workswith','$company','$aas','$income','$about','$image')";

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