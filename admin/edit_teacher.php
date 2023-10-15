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
$slelect_query = "SELECT * FROM teacher WHERE id= $id ";

$result = $conn->query($slelect_query);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	?>
  	<div class="header">
  		
  	<table>
		   <form action="Update_teacher.php" method="post" enctype="multipart/form-data">
		   	<tr><td><input type="hidden" name="id" value="<?php echo $row["id"]; ?>"></td></tr>
		   	<tr><td>Name:</td><td><input type="text" name="name" placeholder="name" value="<?php echo $row["name"]; ?>" required> </td></tr>
		   	<tr><td>Father name:</td><td><input type="text" name="father_name" placeholder="father_name" value="<?php echo $row["father_name"]; ?>" required></td></tr>
		   	<tr><td>Cnic:</td><td><input type="text" name="Cnic"  placeholder="B_form"  value="<?php echo $row["Cnic"]; ?>" required></td></tr>
		   	<tr><td>designation:</td><td><input type="text" name="designation"  placeholder="designation"  value="<?php echo $row["designation"]; ?>" required></td></tr>
		   	<tr><td>Phone NO:</td><td><input type="text" name="phone"  value="<?php echo $row["phone"]; ?>" required></td></tr>
				<tr><td>Address:</td><td><textarea name="Address"  ><?php echo $row["Address"]; ?></textarea></td></tr>
				<tr><td><input type="submit" name="submit" class="button"></td></tr>	
		   </form>
  	</table>
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