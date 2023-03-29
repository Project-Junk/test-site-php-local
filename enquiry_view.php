

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

// define SQL query to fetch image and description
$query = $conn->query("SELECT * FROM tbl_enquiry WHERE enquiryid = $id");


while ($row = $query->fetch_assoc()) {



    $image = $row['file_name'];
    $description = $row['remarks'];

    echo '
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> ' . $row["enquiry_person"] . '</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles3.css" rel="stylesheet" />
</head
 <body>
    <!-- Navigation-->

    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" style="border:2px #d4d4d4; border-radius:25px ;"
                        src="' . $image . '" alt="..." /></div>
                <div class="col-md-6">

                    <h1 class="display-5 fw-bolder">' . $row["enquiry_person"] . '</h1>
                    <div class="fs-5 mb-5">

                        <span>' . $row["enquiry_person"] . '</span>
                    </div>
                    <p class="lead">' . $row["remarks"] . '</p>
                    <div class="d-flex">
                        <a  style="border-radius:25px;" class="btn btn-outline-dark flex-shrink-0" href="enquiry.php"> <i class="fa-sharp fa-solid fa-circle-arrow-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->

    <!-- Footer-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
</body>


    ';
}
?>
