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
$name = $_POST['Course_name'];
$Course_decscription = $_POST['Course_decscription'];
$couse_type = $_POST['couse_type'];
$id = $_POST['id'];
// 2. php connect to DB
include ("db_conection.php");

$sql_query = "UPDATE cources SET Course_name = '$name', Course_decscription = '$Course_decscription', couse_type = '$couse_type' WHERE Course_id = '$id'";

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