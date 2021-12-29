
<?php

//uploading into DATABASE

	
if(isset($_POST['up']))
{
$degree=$_POST['c'];
$depart=$_POST['co'];
$regulation=$_POST['r'];
$sem=isset($_POST['bt']);
$sem=isset($_POST['mt']);
$examtype=$_POST['ex'];
$subname=$_POST['sname'];
$subcode=$_POST['scode'];
$file=addslashes($_FILES['pdf']['tmp_name']);
$filename=addslashes($_FILES['pdf']['tmp_name']);
$file=file_get_contents($file);
$file=base64_encode($file);
$reg=1;
	
	
	$con=mysqli_connect("localhost","root","","project") or die("no database");
	if($con)
	{
		if(!preg_match("/^([A-Za-z]*)$/",$subname))
		{
			echo("Invalid name <br>");
		}
		else{
	
			$subname=$_POST['sname'];
			$re=$re+1;
			
		}
		if(!preg_match("/^([0-9A-Za-z]*)$/",$subcode))
		{
			echo("Invalid code");
		}
		else{
			$subname=$_POST['scode'];
			$re=$re+1;
		}
		if($re == 3 )
		{
			$q="insert into project(degree,department,regulation,semester,examtype,subname,subcode,file) values('$degree','$department','$regulation','$semester','$examtype','$subname','$subcode','$file')";
			$res=mysqli_query($con,$q);
			echo "<h3>Your details are uploaded..";
		}
		else{
			echo "<br><h3>Your details already there in database";
		}
	mysqli_close($con);
		
	}
	
}else{echo " This is not a find post method";}


?>