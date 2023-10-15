<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
			<style>
		input[type="text"],
		input[type="email"],
		input[type="number"],
		textarea {
		    width: 92%;
		    padding: 10px;
		    border: 1px solid #ccc;
		    border-radius: 5px;
		    font-weight: bold;
		}
		.header{
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			border: 2px solid black;
			width: 50%;
			margin-left: 25%;
			margin-top: 15%;
			padding: 20px;
			background-color: #ddbea9;
		}
		.button {
			        margin-left: 71px;
				    display: block;
				    width: 130%;
				    padding: 10px;
				    background-color: #8a817c;
				    color: #fff;
				    border: none;
				    border-radius: 5px;
				    cursor: pointer;
				    margin-top: 30px;
			}

			.button:hover {
			    background-color:#716c69 ;
			    
			}

				</style>
</head>
<body style="background-color: #ffe8d6;">
	<?php
$id = $_GET['id'];
// 1. db connect 
include ("db_conection.php");


// 2. pick fron db
$slelect_query = "SELECT * FROM cources WHERE Course_id= $id ";

$result = $conn->query($slelect_query);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	?>
  	<div class="header">
		<form action="update_course.php" method="post" enctype="multipart/form-data">
			<table>
						<input type="hidden" name="id" value="<?php echo $row["Course_id"]; ?>">				
				<tr><td>Course Name:</td><td><input type="text" name="Course_name" placeholder="Course_name" value="<?php echo $row["Course_name"]; ?>" required></td></tr>
				<tr><td>Course Discription:</td><td><input type="text" name="Course_decscription" placeholder="Course_decscription" value="<?php echo $row["Course_decscription"]; ?>" required></td></tr>
				<tr><td>Course Type</td><td><input type="text" name="couse_type"  placeholder="couse_type"  value="<?php echo $row["couse_type"]; ?>" required></td></tr>
				<tr><td><input type="submit" name="submit" class="button"></td></tr>
			</table>
		</form>
  		
  	</div>

		<?php
  }
} else {
  echo "0 results";
}

$conn->close();
?>
</body>
</html>