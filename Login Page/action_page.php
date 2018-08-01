<?php
	//get values from Page_2.html page
	$username = $_POST["name"];
	$password = $_POST["password"];

	//connect to server and select database
	//mysql_connect("localhost","admin","admin");
	mysqli_connect("localhost","admin","admin","user accounts");
	//mysql_select_db("Page_3.html");

	//Query the database
	$result = mysql_query("SELECT * from user accounts where username = '{$username}' and password = '{$password}' ) or die("Failed to query database" .mysql_error());

>