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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<?php include 'index.php' ?>
<h1 style="padding-top:5%; font-size:20px;">Services Available </h1>



<body style="margin: 50px; padding:auto; ">

    <table class="table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Service Name</th>
                <th>status</th>
                <th>priority</th>
                <th><a style="border-radius:15px; font-size:13px; padding: 4px 5px; background-color:#81A1C1; border-color:#81A1C1;" class='btn btn-primary mb-4' href='service_form.php'><i class="fa-solid fa-plus"></i> Add Service </a>
                    <a style="padding: 4px 5px; font-size:13px; background-color:#A3BE8C; border-color:#A3BE8C;margin-left:1%; border-radius:15px" class='btn btn-primary mb-4' href='index.php'> <i class="fa-sharp fa-solid fa-circle-arrow-left"></i> Back</a>
                </th>

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
            $initialID = 1;
            // read data of each row
            while ($row = $result->fetch_assoc()) {

                $status = ($row['service_status'] == 1) ? 'checked' : '';
                echo "<tr>

                    <td>" . $initialID . "</td>
                    <td>" . $row["service_type_name"] . "</td>
                    <td>
                       <label class='switch'>
                        <input type='checkbox'  class='slider' data-id='" . $row['service_type_id'] . "' " . $status . ">
                        <span class='slider round' style='background-color:#5E81AC;'></span>
                        </label>
                    </td>
                    <td>" . $row["priority"] . "</td>
                  <td>
                        <a  href='service_update_form.php?id=" . $row['service_type_id'] . "' class=' btn btn-primary btn-sm' style='background-color:#EBCB8B; border-color:#ebcb8b'><i class='fa-solid fa-pen-to-square'></i> Update</a>
                        <a  href='service_delete.php?id=" . $row['service_type_id'] . "' class='del-btn btn btn-danger btn-sm' style='background-color:#BF616A;border-color:#bf616a;'><i class='fa-solid fa-trash'></i> Delete</a>

                    </td>

                </tr>";
                $initialID++;
            }





            ?>
            <script>
                $(document).ready(function() {
                    $('.slider').click(function() {
                        var id = $(this).data('id');
                        $.ajax({
                            type: 'POST',
                            url: 'service_status.php',
                            data: {
                                id: id
                            },
                            success: function() {
                                location.reload();
                            }
                        });
                    });
                });
            </script>
            <script>
                $('.del-btn').on('click', function(e) {
                    e.preventDefault();
                    const href = $(this).attr('href')
                    Swal.fire({
                        title: 'Are you sure to delete?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#81A1C1',
                        cancelButtonColor: '#D08770',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {
                            document.location.href = href;

                        }
                    })
                })

                const flashdata = $('.flash-data').data('flashdata')
                if (flashdata) {
                    swal.fire({
                        type: 'success',
                        title: 'Record Deleted',
                        text: 'Record has been deleted'
                    })
                }
            </script>
            <?php $connection->close();
            ?>
        </tbody>
    </table>

</body>
<!-- <button type="button" class="btn btn-primary" onclick="window.location.href='service_form.php';">Add Service</button> -->
<?php include 'resources/footer.php' ?>

</html>
