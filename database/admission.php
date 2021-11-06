<?php
$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
//Connection 
require_once("conn.php");
//  SQL CALL
$sql = "INSERT INTO admission(name,email,password,address,phone_number,parent_phone_number,previous_college) VALUES(?,?,?,?,?,?,?)";
$result = $conn->prepare($sql);
if ($result) {
    $result->bind_param("ssssiis", $name, $email, $password, $address, $phone_number, $parent_phone_number, $previous_college);
    //Values Are Come From
    $name = $mydata['name'];
    $email = $mydata['email'];
    $password = $mydata['password'];
    $address = $mydata['address'];
    $phone_number = $mydata['phone_number'];
    $parent_phone_number = $mydata['parent_phone_number'];
    $previous_college = $mydata['previous_college'];
    $result->execute();
    echo json_encode("yes");
} else {
    echo json_encode("no");
}
