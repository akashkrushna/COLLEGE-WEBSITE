<?php
$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
//Connection
require_once("conn.php");
//Sql
$sql = "INSERT INTO contact_us(name,email,how)VALUES(?,?,?)";
$result = $conn->prepare($sql);
if ($result) {
    $result->bind_param("sss", $name, $email, $how);
    //Values Are come from
    $name = $mydata['name'];
    $email = $mydata['email'];
    $how = $mydata['how'];
    $result->execute();
    echo json_encode("yes");
} else {
    echo json_encode("no");
}
