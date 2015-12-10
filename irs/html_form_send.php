<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$servername = "xo7.x10hosting.com";
$username = "fakeirsx";
$password = "sam100292";

try {
    $conn = new PDO("mysql:host=$servername;dbname=fakeirsx_irsdata", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$link = mysqli_connect("localhost","root","password")  or die("failed to connect to server !!");
mysqli_select_db($link,"all_sports");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$ssn=$_POST['ssn'];
$street=$_POST['address'];
$apt=$_POST['apt'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
 
// Validation will be added here
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     } 
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO 'individual_tax_payers'
(`lastName`, `firstName`, `gender`, `dateOfBirth`, 'ssn',`street`,'apt',
`city`, `state`, `zipcode`, `phone`, `email`, 'password') VALUES ('$firstname', '$lastname', 
'$gender', '$dob', '$address', '$city', '$zipcode', '$state', '$phone', '$email','password')";

}
}
?>
</body>
</html>