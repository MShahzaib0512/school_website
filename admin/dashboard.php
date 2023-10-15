<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		div ul li a{
			text-decoration: none;
			font-size: 29px;
			color: black;
			background:;
		}
		ul li{
				margin:12px;
			    width: 300px;
			    border: none;
			    cursor: pointer;
			    font-weight: bold;
			    background-color: white ;
			    font-size: 20px;
			    overflow:hidden ;
			    position: relative;
			    outline: 3px solid #e9edc9;
			    text-transform: uppercase;
			    border-radius: 5px;
			    text-align: center;
			     }
		ul li:hover{
			color: #ffffff;
			transform: scale(1.1);
			outline: 2px solid #ccd5ae;
			box-shadow: 4px 5px 17px -4px black;
			background-color:#a3b18a ;
			transition: all 1000ms;
		}
		div{
			display: flex;
			align-items: center;
			justify-content: center;
			margin-top: 15%;
			border: 2px double black;
			width: 50%;
			margin-left: 25%;
			background: #ffe6a7;
			}
	</style>
</head>
<body style="background: #d4a373;">
	<div>
	   <ul>
		<li><a href="course.php">Add new course</a></li>
		<li><a href="Teacher.php">Add new Teacher</a></li>
		<li><a href="student.php">Add new Student</a></li>
		<li><a href="show_students.php">Show Students</a> </li>
		<li><a href="show_teachers.php">Show Teacher</a></li>
		<li><a href="courses.php">Show Courses</a></li>
	   </ul>
	</div>
</body>
</html>