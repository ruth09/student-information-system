<?php
$conn=mysqli_connect("localhost","root","","login");
if(!$conn){
die("connection failed:".mysqli_connect_error());
}
$a=0;
echo "success in connection";
if(isset($_POST["submit"])){
$id = $_POST['id'];
$password = $_POST['password'];
echo $id;
echo $password;}
$id=stripcslashes($id);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($conn,$id);
$password=mysqli_real_escape_string($conn,$password);
mysqli_select_db($conn,"login");
$result=mysqli_query($conn,"SELECT * from login");
while($row=mysqli_fetch_assoc($result)){
if($row["id"]==$id && $row["password"]==$password){
echo "login success"; $a = 1;
break;
}
}
if($a==0) echo "failed";

?>