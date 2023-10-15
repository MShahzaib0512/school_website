<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
// 1. data received confirmation
// print_r($_POST);
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$Cnic = $_POST['Cnic'];
$id = $_POST['id'];
$Address = $_POST['Address'];
$phone = $_POST['phone'];
$designation=$_POST['designation'];
// 2. php connect to DB
include ("db_conection.php");

$sql_query = "UPDATE teacher SET name = '$name', father_name = '$father_name', Cnic = '$Cnic', Address = '$Address', designation = '$designation', phone = '$phone' WHERE id = '$id'";

if ($conn->query($sql_query) === TRUE) {
  echo "Record updated successfully";
} 
else {
  echo "Error: " . $sql_query . "<br>" . $conn->error;
}

$conn->close();
// 4. confirmation message

?>
</body>
</html>