<?php

$serverName = "127.0.0.1";
$dbUsername = "cid_accounts";
$dbPassword = "root";
$dbName = "dbAccounts";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed: " + mysqli_connect_error());
}