<?php
$conn = new mysqli("localhost", "root", "", "college_website_new");
if ($conn->connect_error) {
    die("Sorry Connection Failed");
}
