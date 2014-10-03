<?php


$con= mysqli_connect("localhost","root","","prafulta"); 


if(mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo"Connected to database";


$cid=filter_input(INPUT_POST, 'clientid', FILTER_SANITIZE_STRING);
$cname=filter_input(INPUT_POST, 'clientname', FILTER_SANITIZE_STRING);
$sex=$_POST['sex'];
$mob=filter_input(INPUT_POST, 'mob', FILTER_SANITIZE_STRING);
$dob=$_POST['dob'];
$dob = date('Y-m-d', strtotime($dob));
$address=$_POST['address'];
$occ=filter_input(INPUT_POST, 'occupation', FILTER_SANITIZE_STRING);
$qual=$_POST['qualification'];
$insname=$_POST['insname'];
$insaddress=$_POST['insaddress'];
$insnum=filter_input(INPUT_POST, 'insnum', FILTER_SANITIZE_STRING);


$sql="INSERT INTO client(C_ID,Name,DOB,Sex,Mob_no,Email,Address,Occupation,Qualification,Sch_col,Off_addr,Off_no) 
	VALUES('$cid','$cname','$dob','$sex','$mob','$email','$address','$occ','$qual','$insname','$insaddress','$insnum')";

if(!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}

mysqli_close($con);

?>