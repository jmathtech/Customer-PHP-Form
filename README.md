# Customer-PHP-Form
A customer form written in PHP.

### What I've learned
* Using variables in PHP to connect to the SQL database.
```php
  $firstName = $_POST["fn"];  
	$lastName = $_POST["ln"];  
	$email = $_POST["em"];
	$address = $_POST["ad"];

```

* 'INSERT INTO' is used input those variables onto the customers table.
```php
$sql = "INSERT INTO customers (FirstName, LastName, Email, Address)
		VALUES('$firstName', '$lastName', '$email', '$address')";
```
* Create an error message if the data fails to connect to the SQL database
```php

if(!$con)
		{
			die("Connection unsuccessful: " . mysql_error());
			// stops the program if the connection is unsuccessful and displays the error message.
		}
```

```php
if(mysqli_query($con, $sql)) // function that runs the query. Needs the two arguments.
		{
			echo "System updated!";
		}
	else 
		{
			echo "Error!" . mysqli_error($con);
		}
	
```
* Closing and securing the database connection after a new record has been initiated.
```php

	mysqli_close($con);
```

### Example Screenshots
![cusform](https://user-images.githubusercontent.com/36749450/96346649-f4870800-106a-11eb-99fa-fe0ff2cda59f.PNG)
![cus_SQL](https://user-images.githubusercontent.com/36749450/96346644-ee912700-106a-11eb-9c5c-f575cd8c70dc.PNG)
