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
        $lol = "SELECT COUNT(service_type_id) FROM tbl_service;";
        $id = $lol++;
        $name =  $_REQUEST['service_type_name'];
        $priority = $_REQUEST['priority'];


        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO tbl_service  VALUES ('$id', '$name', '', '$priority')";
        if (mysqli_query($conn, $sql)) {
            header('Location: services.php');
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
