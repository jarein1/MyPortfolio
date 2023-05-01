<?php
$name = $_POST['name']
$email = $_POST['email']
$number = $_POST['number']
$msg = $_POST['msg']

// database connection
$conn = new mysqli('localhost','root','mysql','contact');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(Name,email,number,msg) values(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$number,$msg);
    $stmt->execute();
    echo "Submitted successful.";
    $stmt->close();
    $conn->close();
}

?> 