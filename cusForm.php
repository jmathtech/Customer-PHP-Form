<!DOCTYPE html>
<html>
<head>
<title>Customer Data Form</title>
<style>
	body {
		
		background-color: #fafafa;
		font-family: Arial;
		color: #2b2b2a;
		margin: 500px;
		margin-left: 5%;
		margin-top: 3px;
		position: relative;
	}	

	table {
		
		border-radius: 10px;
		background-color: #fcfcfc;
		font-family: Verdana;
		font-size: 0.70em;
		padding: 30px;
		box-shadow: 2px 5px 5px 0 #658a8a;
		
		
	}


	td {
		
		border: 1px;
		padding: 15px;
	}

	input {
		
		background-color: #2b2b2a;
		color: #fff;
		border: 0px;
		padding-left: 10px;
		box-shadow: 2px 2px 2px 2px #ccc;
		
	}
	
	input[type=submit] {
		
		padding: 10px 32px;
		box-shadow: 2px 2px 2px 2px #ccc;
	}
	
	input:hover[type=submit] {
		  
		background: #658a8a;
	  
	}
	
	
		/********* BEGIN Scrollbar colors **********/
	  
		 ::-webkit-scrollbar {
		  width: 10px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		  background: #e7f2e6; 
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: #2b2b2a; 
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		  background: #c3c9b5; 
		}
	
		/********* END Scrollbar colors **********/
		  
</style>

</head>

<body>

<form action="cusSubmit.php" method="POST">
	

	<table border="1px"> 	
		<h2>Customer Data Form</h2>
	
		<h4> ENTER DATA </h4>
			<tr>
				<td>First Name: </td> <td><input type="text" name="fn"></td>
			</tr>
			<tr>
				<td>Last Name: </td> <td><input type="text" name="ln"></td>
			</tr>
			<tr>
				<td>Email: </td> <td><input type="text" name="em"></td>
			</tr>
			<tr>
				<td>Address: </td> <td><input type="text" name="ad"></td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" value="Add New Customer"></td>
			</tr>
		</form>
	</table>
</body>
</html>