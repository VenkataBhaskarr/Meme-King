<?php
$uname=$_POST["name"];
$email=$_POST["email"];
$insta=$_POST["insta_id"];
$pw=$_POST["pw"];
$rpw=$_POST["rpw"];


include_once "connection.php";
if(mysqli_connect_error()){
    die();
}else{
    $sql="insert into signup(username,email,insta,password) values ('$uname','$email','$insta','$rpw')";
}
if($pw===$rpw){
    if($conn->query($sql)){
        include_once "index.html";
    }
    else{
        echo "connection error";
    }

}else{
    echo "password and re-password should match";
}
?>