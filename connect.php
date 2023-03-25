<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "enquiryproj";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
$result = mysqli_query($conn, "SELECT * FROM tbl_service WHERE service_type_id = $id");
$row = mysqli_fetch_array($result);

?>
//
