<?php
include("connection.php");
session_start();
include_once("session.php");

$id = $_GET['uid'];

$query = $conn->prepare("DELETE FROM customers WHERE customerID = :uid");
$query ->bindParam(':uid', $id);
$query ->execute();

echo "<script>alert('Successfully Deleted!')</script>";
echo "<script>window.open('viewrecord.php','_self')</script>";
?>