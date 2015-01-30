<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 29.01.2015
 * Time: 2:33
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sporttv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

