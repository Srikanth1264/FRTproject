
	<?php
		$id=" ";
		$sname=" ";
		$scode=" ";
		$re=1;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
if(isset($_POST['b1']) )
{
	$sname=$_POST['sname'];
	$con=mysqli_connect("localhost","root","","project") or die("no database");
	if($con)
	{
		if(!empty($sname ))
		{
			$check=mysqli_query($con,"select * from project where subname='$sname'; ");
			$row=mysqli_fetch_array($check);
			if( $row['subname']==$sname and !empty($sname) ) 
			{
				echo "<html><body><table border='1'><tr><td>".$row['degree']."</td><td>".$row['department']."</td><td>".$row['regulation']."</td><td>".$row['semester']."</td><td>".$row['subname']."</td><td>".$row['subcode']."</td><td>".$row['file']."</td>";
			}
			else
			{
				echo "<h2>Access denied";
			}
		}
		else{ 
				echo "<h3>Please enter valid details";
			}
	}
	mysqli_close($con);
}
	if(isset($_POST['b2']) )
{
	$scode=$_POST['scode'];
	$con=mysqli_connect("localhost","root","","project") or die("no database");
	if($con)
	{
		if(!empty($scode ))
		{
			$check=mysqli_query($con,"select * from project where subcode='$scode'; ");
			$row=mysqli_fetch_array($check);
			if( $row['subcode']==$scode and !empty($scode) ) 
			{
				echo "<html><body><table border='1'><tr><td>".$row['degree']."</td><td>".$row['department']."</td><td>".$row['regulation']."</td><td>".$row['semester']."</td><td>".$row['subname']."</td><td>".$row['subcode']."</td><td>".$row['file']."</td>";
			}
			else
			{
				echo "<h2>Access denied";
			}
		}
		else{ 
				echo "<h3>Please enter valid details";
			}
	}
	mysqli_close($con);
}
}
 ?>
