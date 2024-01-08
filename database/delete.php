<?php
include("connection.php");

$id = $_GET['uid'];

$query = $conn->prepare("DELETE FROM customer WHERE customersID = :uid");
$query ->bindParam(':uid', $id);
$query ->execute();

echo "<script>alert('Successfully Deleted!')</script>";
echo "<script>window.open('viewrecords.php','_self')</script>";
?>