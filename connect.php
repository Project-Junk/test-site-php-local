<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquiryproj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tbl_enquiry";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["enquiryid"] . " - Name: " . $row["mobile_no"] . " " . $row["enquiry_person"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
