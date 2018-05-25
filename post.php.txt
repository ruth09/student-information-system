<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'login'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}else{
    




$rollno = $_POST['rollno'];

$subject1 = $_POST['s1'];
$subject2 = $_POST['s2'];
$subject3 = $_POST['s3'];
$subject4 = $_POST['s4'];
$subject5 = $_POST['s5'];
$subject6 = $_POST['s6'];



$user_info = "INSERT INTO marks"."(rollno,subject1,subject2,subject3,subject4,subject5,subject6)". "VALUES ( '$rollno','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6')"; 
 if (!mysqli_query($conn,$user_info)) { die('Error: ' . mysqli_error($conn)); } echo '<script language="javascript">';
			echo 'alert("Awesome!! your INFORMATION  was added to the DATABASE")';
			echo '</script>';
			header( "refresh:1;url=http://localhost/Deepak/mainpage.php" ); 
 mysqli_close($conn); 
}
