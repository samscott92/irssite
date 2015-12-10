<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
include 'db-connect.php';

$link = mysqli_connect("localhost","root","password")  or die("failed to connect to server !!");
mysqli_select_db($link,"all_sports");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$zipcode=$_POST['zipcode'];
$region=$_POST['region'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `all_sports`.`members`
(`firstname`, `lastname`, `gender`, `dob`, `address`,
`city`, `zipcode`, `region`, `phone`, `email`) VALUES ('$firstname', '$lastname', 
'$gender', '$dob', '$address', '$city', '$zipcode', '$region', '$phone', '$email')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
?>
</body>
</html>