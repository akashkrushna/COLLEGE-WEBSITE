<?php
$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
//Connection 
require_once("conn.php");

$sql = "INSERT INTO student(name,email,password,address)  VALUES(?,?,?,?)";
$result = $conn->prepare($sql);
if ($result) {
    $result->bind_param("ssss", $name, $email, $password, $address);
    //Values Are come From
    $name = $mydata['name'];
    $email = $mydata['email'];
    $password = $mydata['password'];
    $address = $mydata['address'];

    $result->execute();
    echo json_encode("yes");
} else {
    echo json_encode("no");
}
