<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "enquiryproj";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            // read all row from database table
            $sql = "SELECT * FROM tbl_service  ORDER BY priority ASC";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }
            $initialID = 1;
            // read data of each row
            while ($row = $result->fetch_assoc()) {
             $serviceName=$row["service_type_name"];
    $servicePriority = $row["priority"];
            }
