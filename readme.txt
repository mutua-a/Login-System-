## Create a Login System Using HTML, PHP, and MySQL

1) Building a Sign-up system
	# register.php file
	~ create a signup (registration) form to create a new account.
	~ HOW: html + css + js
	~ Fields: ~ name 
		    ~ email
	          ~ password
	          ~ confirm password
	``It's time to create a PHP code that allows users to register their accounts.
	``This PHP code will alert users with an error if any user is already registered 
	  with the same email address.


2) Creating the MySQL Database Table
	~ create database :: user_data
	~ Fields: ~ id int (autoincrement)
	          ~ name  varchar (200)
		    ~ email varchar (200)
	          ~ password varchar (200)

3) Creating Database Configuration File
	<?php 
		
		define(); // variable_names
	
	?>

4) Creating a Session File
	~ In this file, we will start the session and check if a user is already logged in, 
	  if yes then we will redirect the user to the dashboar.php (welcome page) file.
	          
