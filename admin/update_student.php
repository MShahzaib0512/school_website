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
$B_form = $_POST['B_form'];
$Address = $_POST['Address'];
$phone = $_POST['phone'];
$id = $_POST['id'];
// 2. php connect to DB
include ("db_conection.php");

$sql_query = "UPDATE student SET name = '$name', father_name = '$father_name', B_form = '$B_form', phone = '$phone', Address = '$Address' WHERE student.Roll_num = '$id'";


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