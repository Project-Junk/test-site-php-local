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
        $id = $_GET['id'];

        $name =  $_REQUEST['enquiry_person'];
        $orgname =  $_REQUEST['org_name'];
        $mobile = $_REQUEST['mobile_no'];
        $remarks = $_REQUEST['long_desc'];
        $servicename = $_REQUEST['service_type_name'];
        $serviceid = $conn->query("SELECT service_type_id FROM tbl_service WHERE service_type_name ='$servicename' ");


        while ($row = $serviceid->fetch_assoc()) {
            $serviceid2 = $row['service_type_id'] . "<br>";
        }
        $sql = "UPDATE  tbl_enquiry  SET  enquiryid='$id', enquiry_person='$name',
            org_name='$orgname', mobile_no='$mobile', service_type_id='$serviceid2', remarks='$remarks' WHERE enquiryid=$id";

        if (mysqli_query($conn, $sql)) {
            header('Location: enquiry.php');
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
