<?php
// update data
if (isset($_POST['id'])) {
    $id = $_GET['id'];
    $serviceName = $_POST['service_type_name'];
    $query   =  "UPDATE developers SET
                service_type_name='$serviceName',
                WHERE id = '$id'";

    $execute = $conn->query($query);
    if ($execute == true) {
        header("location:display-data.php");
    } else {
        echo  $conn->error;
    }
    echo  $conn->error;
}
