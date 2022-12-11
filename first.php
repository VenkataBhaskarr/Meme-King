<?php
$user =filter_input(INPUT_POST,'user');
$pass =filter_input(INPUT_POST,'pass');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="meme_maker";

$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
$username=$_POST['user'];
$password=$_POST['pass'];
if(mysqli_connect_error() ){
    die('Connect Error ('. mysqli_connect_errno().')'
    .mysqli_connect_error());
}
else{
$sql="SELECT * from signup where username='$user' and password='$pass'";
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1){
include_once "userpage.html";
}
else{
echo"<h1> INVALID CREDENTIALS </h1>";
}
$conn->close();
}
?>
