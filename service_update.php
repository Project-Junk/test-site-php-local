<?php
$id = $_GET['id'];

$serviceName = $_REQUEST['service_type_name'];
$servicePriority = $_REQUEST['priority'];

//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "enquiryproj";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "UPDATE tbl_service SET service_type_name='$serviceName' WHERE service_type_id =$id;";
$sql .= "UPDATE tbl_service SET priority='$servicePriority' WHERE service_type_id =$id";


if (mysqli_multi_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: services.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error updating record";
}
