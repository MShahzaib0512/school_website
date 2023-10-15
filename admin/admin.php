<?php 
	session_start();
if(isset($_POST['submit'])){


$email = $_POST['email'];
$password = $_POST['password'];

include ("db_conection.php");
 $slelect_query = "SELECT * FROM employee WHERE user_name='$email' AND password='$password'";
$result = $conn->query($slelect_query);

if ($result->num_rows > 0){
echo "helo";
  // redirect to dashboard page
	$_SESSION["islogin"] = "true";

	header('Location: dashboard.php');
  				// echo "user found";
	} 
else {
  $message = "Login info is incorrect. Please try again or contact admin.";
  // show error above login form
	}

$conn->close();

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin panel</title>

			<style>
		input[type="text"],
		input[type="password"],
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
<body style="background: #d6ccc2;">
	<div style="color: red;"> <?php if (isset($message)) echo $message; ?> </div>
	<section>
				<div class="header">
					<form action="admin.php" method="post">
						<table align="center">
							<h2>Verify you are admin:</h2>
							<tr><td>Enter user name:</td><td><input class="input" type="text" name="email"></td></tr>
							<tr><td>Enter your password:</td><td><input class="input" type="password" name="password"></td></tr>
							<tr><td><input type="submit" name="submit" value="submit" class="button"></td></tr>
						</table>
					</form>
				</div>
	</section>

	
</body>
</html>