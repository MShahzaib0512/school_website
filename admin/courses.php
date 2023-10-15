<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<style>
				table {
				    width: 100%;
				    border-collapse: collapse;
				    font-family: Arial, sans-serif;
				}
				table th {
				    background-color: #f2f2f2;
				    text-align: left;
				    padding: 12px;
				    border: 1px solid #ddd;
				}
				table td {
				    padding: 12px;
				    border: 1px solid #ddd;
				}
				table tbody tr:nth-child(even) {
				    background-color: #f2f2f2;
				}

	</style>
</head>
<body>
	<table border="1">
		<tr>  <td> ID</td><td> Course_name </td><td> Course_decscription </td><td>couse_type</td><td> Edit </td><td> Delete </td></tr>	
<?php
// 1. db connect 

include ("db_conection.php");
$slelect_query = "SELECT * FROM cources";

$result = $conn->query($slelect_query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

  	echo "<tr><td>".$row["Course_id"]."</td><td>".$row["Course_name"]."</td><td>".$row["Course_decscription"]."</td><td>".$row["couse_type"]."</td><td><a href='edit_cource.php?id=".$row["Course_id"]."'>Edit</a></td><td><a href='del_cource.php?id=".$row["Course_id"]. "'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
// 3. show data in html format


?>
</table>
</body>
</html>