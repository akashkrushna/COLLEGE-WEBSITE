<?php
if (!isset($_SESSION)) {
    session_start();
}
$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
//Connection 
require_once("conn.php");
//Values Are Come From
$email = $mydata['email'];
$password = $mydata['password'];


$sql = "SELECT email,password FROM student WHERE email = '" . $email . "'  AND password = '" . $password . "'   ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo json_encode("yes");
    $_SESSION['is_true'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
} else {
    echo json_encode("no");
}
