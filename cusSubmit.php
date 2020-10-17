<!DOCTYPE html>
<html>
<body>

<?php
	
	// data from form being stored in variable
	$firstName = $_POST["fn"];  
	$lastName = $_POST["ln"];  
	$email = $_POST["em"];
	$address = $_POST["ad"];
	
	$con = mysqli_connect("localhost", "root", "", "CIS224_php");
	
	if(!$con)
		{
			die("Connection unsuccessful: " . mysql_error());
			// stops the program if the connection is unsuccessful and displays the error message.
		}
		
	$sql = "INSERT INTO customers (FirstName, LastName, Email, Address)
		VALUES('$firstName', '$lastName', '$email', '$address')";
		
	if(mysqli_query($con, $sql)) // function that runs the query. Needs the two arguments.
		{
			echo "System updated!";
		}
	else 
		{
			echo "Error!" . mysqli_error($con);
		}
	
	mysqli_close($con); // close connect


?>

<a href="cusForm.php">Go back to form</a>
<br />

</body>
</html>