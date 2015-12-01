<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "fakeirs";
$username = "fakeirsx";
$password = "sam100292";

// Create connection
$conn = new mysqli(fakeirs, fakeirsx, sam100292);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
</body>
</html>