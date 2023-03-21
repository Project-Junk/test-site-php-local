<!DOCTYPE html>
<html>

<head>
    <title>Insert Page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "enquiryproj");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $lol = "SELECT COUNT(enquiryid) FROM tbl_enquiry;";
        $lol++;
        $name =  $_REQUEST['enquiry_person'];
        $orgname =  $_REQUEST['org_name'];
        $mobile = $_REQUEST['mobile_no'];
        $remarks = $_REQUEST['remarks'];
        $serviceid = "Select COUNT(service_type_id) FROM tbl_service; ";



        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO tbl_enquiry  VALUES ('$lol', '$name',
            '$orgname','$mobile', '$remarks', '$serviceid')";

        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
