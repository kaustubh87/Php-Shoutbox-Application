<?php
//Connect to MYSQL

$con = mysqli_connect("127.0.0.1","admin","password","shout_it");

if(mysqli_connect_errno())
{
	echo 'Failed to connect to Mysql' .mysqli_connect_errno();

}




?>