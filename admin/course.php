<?php

	session_start();
	if(isset($_POST['submit'])){
		$name=$_POST['course_name'];
		$discription=$_POST['discription'];
		$type=$_POST['type'];

		include ("db_conection.php");

		$query="INSERT INTO cources(Course_name,Course_decscription,couse_type) VALUES ('$name','$discription','$type'); ";
		$result=mysqli_query($conn,$query);
		if ($result) {
			echo "New course added sucessfully";
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
	<div class="header">
		<h2>Add new course</h2>
		<div class="child">
			<form action="course.php" method="post">
				<table>
					<tr><td>Course Name:</td><td><input type="text" name="course_name"></td></tr>
					<tr><td>Discription:</td><td><input type="text" name="discription"></td></tr>
					<tr><td>Course Type:</td><td><input type="text" name="type"></td></tr>
					<tr><td><input type="submit" name="submit" class="button"></td></tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>