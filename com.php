<?php


//session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="kabbu";


//connect to dtabase
$db=mysqli_connect($servername,$username,$password,$dbname);

//check connection
if($db->connect_error){
	die("connection failed;".$db);
}
else{
	echo"connected sucessfuly";
}