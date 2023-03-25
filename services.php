<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/slider.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<h1>Services Available </h1>
<a style="margin-left:62%; margin-top:-72px;" class='btn btn-primary mb-4' href='service_form.php'>Add Service </a>
<a style="margin-left:70%; margin-top:-119px; background-color:#04aa6d; border-color:#04aa6d;" class='btn btn-primary mb-4' href='index.php'> <i class="fa fa-home"> Back</i></a>


<body style="margin: 10px; ">
    <br>
    <table class="table">

        <thead>
            <tr>
                <th>Service ID</th>
                <th>Service Name</th>
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
            $sql = "SELECT * FROM tbl_service  ORDER BY priority ASC";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            // read data of each row
            while ($row = $result->fetch_assoc()) {
                $status = ($row['service_status'] == 1) ? 'checked' : '';
                echo "<tr>

                    <td>" . $row["service_type_id"] . "</td>
                    <td>" . $row["service_type_name"] . "</td>
                    <td>
                       <label class='switch'>
                        <input type='checkbox' class='slider' onclick=servicestatus(" . $row['service_type_id'] . ") id='" . $row['service_status'] . "' data-id='' " . $status . ">
                        <span class='slider round'></span>
                        </label>
                    </td>
                    <td>" . $row["priority"] . "</td>
                  <td>
                        <a href='service_update_form.php?id=" . $row['service_type_id'] . "' class=' btn btn-primary btn-sm'>Update</a>
                        <a href='service_delete.php?id=" . $row['service_type_id'] . "' class='del-btn btn btn-danger btn-sm'>Delete</a>

                    </td>

                </tr>";
            }





            ?>
            <script>
                function servicestatus(id) {
                $(document).ready(function() {
  $('input[type="checkbox"]').click(function() {
    var toggled_on = $(this).prop('checked') ? 1 : 0;
    var id = $(this).data('id');
    $.ajax({
      type: 'POST',
      url: 'service_status.php',
      data: {toggled_on: toggled_on, id: id},
      success: function() {
        location.reload();
      }
    });
  });
})};
            </script>
            <?php $connection->close();
            ?>
        </tbody>
    </table>

</body>
<!-- <button type="button" class="btn btn-primary" onclick="window.location.href='service_form.php';">Add Service</button> -->

</html>
