<?php

session_start();
$con=mysqli_connect("localhost","root","","prafulta");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "connected to the database";

if( $_POST["clientid"]!="" && $_POST["mob"]!="" )
{
	echo "<br /><br />Case :1";
	$cid=$_POST["client-id"];
	$mob=$_POST["mob"];

	$stmt1="SELECT * FROM client WHERE C_ID=$cid LIMIT 1";
	$stmt2="SELECT * FROM client WHERE Mob_no=$mob LIMIT 1";

	$result1=mysqli_query($con,$stmt1);
	$result2=mysqli_query($con,$stmt2);
	
	if(mysqli_num_rows($result1))
	{	
		echo "<br />in con 1";
		while($row1=mysqli_fetch_array($result1))
		{
			/*echo "<br />result1";
			echo "<br />".$row1['Name'];
			echo "<br />".$row1['C_ID'];*/
			$_SESSION['cid']=$row['C_ID'];
			$_SESSION['cname']=$row['Name'];
			header('location:new.php');
		}
		
		if(mysqli_num_rows($result2))
		{
			while($row2=mysqli_fetch_array($result2))
			{
				echo "<br />result2";
				echo "<br />".$row2['Name'];
				echo "<br />".$row2['C_ID'];
			}
		}
		else
		{
			//echo "<br />result2 returns nothing";
			echo "Res2 not measured";
		}
	}

	if(!mysqli_num_rows($result1))
	{
		/*echo "<br />in con 2";
		echo "<br />result1 returns nothing";*/

		if(mysqli_num_rows($result2))
		{
			while($row=mysqli_fetch_array($result2))
			{
				/*echo "<br />result2";
				echo "<br />".$row['Name'];
				echo "<br />".$row['C_ID'];*/
				$_SESSION['cid']=$row['C_ID'];
				$_SESSION['cname']=$row['Name'];
				header('location:new.php');
			}
		}
		else
		{
			echo "<br />Invalid fields";
		}
	}
}

else if($_POST["clientid"]!="" && $_POST["mob"]=="")
{
	echo "<br /><br />Case: 2";
	echo "<br /><br />result2 is empty";

	$cid=$_POST["clientid"];

	$stmt1="SELECT * FROM client WHERE C_ID='$cid' LIMIT 1";

	$result1=mysqli_query($con,$stmt1);

	if(mysqli_num_rows($result1))
	{
		while($row=mysqli_fetch_array($result1))
		{
			/*echo "<br /><br />result1";
			echo "<br />".$row['Name'];
			echo "<br />".$row['C_ID'];*/
			$_SESSION['cid']=$row['C_ID'];
			$_SESSION['cname']=$row['Name'];
			header('location:new.php');
		}
	}

	else
	{
		echo "<br />result1 returns nothing";
	}
}

else if($_POST["clientid"]=="" && $_POST["mob"]!="")
{
	echo "<br /><br />Case: 3";
	echo "<br />Result1 is empty";

	$phno=$_POST["mob"];
	
	$stmt2="SELECT * FROM client WHERE Mob_no='$phno' LIMIT 1";

	$result2=mysqli_query($con,$stmt2);

	if(mysqli_num_rows($result2))
	{
		while($row=mysqli_fetch_array($result2))
		{
			/*echo "<br /><br />result2";
			echo "<br />".$row['Name'];
			echo "<br />".$row['C_ID'];*/
			$_SESSION['cid']=$row['C_ID'];
			$_SESSION['cname']=$row['Name'];
			header('location:new.php');
		}
	}

	else if(!mysqli_num_rows($result2))
	{
		echo "<br /><br />result2 returns nothing";
	}
}

else if($_POST["clientid"]=="" && $_POST["mob"]=="")
{
	//echo "<br /><br />Case :4<br />Both the dialogs are empty";
	header('location:../client-registration');
}

?>
