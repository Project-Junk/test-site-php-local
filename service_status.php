<?php
$dbname = "enquiryproj";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record

else {
    if (isset($_POST['id'])) {
        $id = $_REQUEST['id'];
        $sql = "Select service_status from tbl_service where service_type_id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $status = $row['service_status'];
        if ($status == 1) {
            $sql = "UPDATE tbl_service SET service_status = 0 WHERE service_type_id = $id";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            $sql = "UPDATE tbl_service SET service_status = 1 WHERE service_type_id = $id";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
}
