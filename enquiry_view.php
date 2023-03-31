<?php

$id = $_GET['id'];
// define database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'enquiryproj';

// establish database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
$query1 = $conn->query("SELECT * FROM tbl_enquiry WHERE enquiryid = $id");
while ($row = $query1->fetch_assoc()) {
    $serviceID = $row['service_type_id'];
}

$query = $conn->query("SELECT * FROM tbl_enquiry WHERE enquiryid = $id");

$sql = "SELECT service_type_name FROM tbl_service WHERE service_type_id=$serviceID";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $serviceName = $row["service_type_name"];
}
while ($row = $query->fetch_assoc()) {



    $image = $row['file_name'];
    $description = $row['remarks'];

    echo '

<html lang="en">
<head>
<meta charset="utf-8">


<title>enquiry details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles3.css">
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
<div class="row">
<div class="col-md-5 ">
<div class="project-info-box mt-0">
<h5>ENQUIRY DETAILS</h5>
<p class="mb-0">' . $description . '</p>

</div>
<div class="project-info-box">
<p><b>Client: </b>' . $row["enquiry_person"] . '</p>
<p><b>Date:</b> 14.02.2020</p>
<p><b>Organisation: </b> ' . $row["org_name"] . '</p>
<p><b>Contact: </b> ' . $row["mobile_no"] . '</p>
<p><b>Service: </b> ' . $serviceName . '</p>

</div>

</div>
<div class="col-md-7">
<img src="' . $image . '" alt="project-image" class="rounded">

</div>
</div>
</div>

<script type="text/javascript">

</script>
</body>
</html>



    ';
}
