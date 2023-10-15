<?php

	session_start();
	if(isset($_POST['submit'])){
		$name=$_POST['Teacher_name'];
		$Father_name=$_POST['Father_name'];
		$CNIC=$_POST['CNIC'];
		$Address=$_POST['Address'];
		$desigination=$_POST['desigination'];

		include ("db_conection.php");

		$query = "INSERT INTO teacher (name, father_name, Cnic, Address, designation) VALUES ('$name', '$Father_name', '$CNIC', '$Address', '$desigination')";
		$result=mysqli_query($conn,$query);
		if ($result) {
			echo "New Teacher added sucessfully";
		}
		else
			echo "Error";
	 }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>courses</title>
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
	<div class="header" >
		<h2>Add new Teacher</h2>
		<div class="child">
			<form action="Teacher.php" method="post">
				<table>
					<tr><td>Teacher Name:</td><td><input type="text" name="Teacher_name" max="20" required></td></tr>
					<tr><td>Father name:</td><td><input type="text" name="Father_name"></td></tr>
					<tr><td>CNIC:</td><td><input type="number" name="CNIC" maxlength="13" required ></td></tr>
					<tr><td>Address:</td><td><input type="text" name="Address"></td></tr>
					<tr><td>desigination:</td><td><input type="text" name="desigination"></td></tr>
					<tr><td><input type="submit" name="submit" class="button"></td></tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>