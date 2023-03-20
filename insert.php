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
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $lol= "SELECT COUNT(enquiryid) FROM tbl_enquiry;";
        $id = $lol++;
        $name =  $_REQUEST['enquiry_person'];
        $org_name = $_REQUEST['org_name'];
        $mobile =  $_REQUEST['mobile_no'];
        $remarks = $_REQUEST['remarks'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO tbl_enquiry  VALUES ('$id', '$name',
            '$org_name','$mobile','$remarks')";
         
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>