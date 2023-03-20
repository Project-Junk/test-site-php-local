
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <h1>service enquiries</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>service_type_id</th>
				<th>service_type_name</th>
				<th>status</th>
				<th>priority</th>
				
			</tr>
		</thead>

        <tbody>
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
			$sql = "SELECT * FROM tbl_service";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["service_type_id"] . "</td>
                    <td>" . $row["service_type_name"] . "</td>
                    <td>" . $row["status"] . "</td>
                    <td>" . $row["priority"] . "</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='update'>Update</a>
                        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                    </td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
</body>
</html> 