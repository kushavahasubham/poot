<?php

$name= $_POST ['Name'] ;
$email = $_POST['Email'];
$phone =$_POST ['Message'];

$conn = new mysqli('localhost','root','','pootf');
if($conn-> connect_error){
    die('connection failed :'. $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into poot(Name,Email, Message) values(?,?,?)");
    $stmt->bind_param("sss",$Name,$Email, $Message);
    $stmt->execute();
    echo " succefull.";
    $stmt->close();
    $conn->close();
}




?>