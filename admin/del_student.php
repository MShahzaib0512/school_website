<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
<?php
$id = $_GET['id'];
	
// 1. db connect 
include ("db_conection.php");


// 2. delete fron db
$sql_query = "DELETE FROM student WHERE student.Roll_num = $id";


if ($conn->query($sql_query) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
// 3. show data in html format


?>

</body>
</html>