<!doctype html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style2.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body>

    <section class="ftco-section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">

                </div>
            </div>
            <div class="row justify-content-center" style="margin-top:-140px;">
                <form action="enquiry.php" class="ml-auto">
                    <div class="row justify-content-center ml-auto">
                        <input type="submit" value="Go Back " class="btn btn-primary ml-auto" style="padding-bottom:5px; padding-top:5px; padding-left:5px; padding-right:5px; ">
                    </div>
                </form>
                <form action="enquiry_submit.php" method="post" enctype=multipart/form-data>
                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                    <div class="contact-wrap w-100 p-md-5 p-4">
                                        <h3 class="mb-4">Enter Enquiry Details</h3>
                                        <div id="form-message-warning" class="mb-4"></div>
                                        <div id="form-message-success" class="mb-4">
                                            Your enquiry has been sent, thank you!
                                        </div>
                                        <form action="enquiry_submit.php" method="POST"  enctype=multipart/form-data>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="name">Full Name</label>
                                                        <input type="text" class="form-control" name="enquiry_person" id="enquiry_person" placeholder="Enter your Name">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="name">Org Name</label>
                                                        <input type="text" class="form-control" name="org_name" id="org_name" placeholder="Enter Organisation name">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="subject">Mobile Number</label>
                                                        <input type="number" class="form-control" name="mobile_no" id="mobile_no" placeholder="Enter mobile number">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <div class="form-group">
                                                            <?php

                                                            // Connect to database
                                                            $con = mysqli_connect("localhost", "root", "", "enquiryproj");

                                                            // mysqli_connect("servername","username","password","database_name")

                                                            // Get all the categories from category table
                                                            $sql = "SELECT * FROM `tbl_service`";
                                                            $all_categories = mysqli_query($con, $sql);

                                                            // The following code checks if the submit button is clicked
                                                            // and inserts the data in the database accordingly
                                                            if (isset($_POST['submit'])) {
                                                                // Store the Product name in a "name" variable
                                                                $name = mysqli_real_escape_string($con, $_POST['service_type_name']);

                                                                // Store the Category ID in a "id" variable


                                                                // Creating an insert query using SQL syntax and
                                                                // storing it in a variable.
                                                                $sql_insert =
                                                                    "INSERT INTO `product`(`service_type_name`)
            VALUES ('$name')";

                                                                // The following code attempts to execute the SQL query
                                                                // if the query executes with no errors
                                                                // a javascript alert message is displayed
                                                                // which says the data is inserted successfully
                                                                if (mysqli_query($con, $sql_insert)) {
                                                                    echo '<script>alert("Product added successfully")</script>';
                                                                }
                                                            }
                                                            ?>





                                                            <label class="label">Select the service</label>
                                                            <select class="form-control" name="service_type_name">
                                                                <?php
                                                                // use a while loop to fetch data
                                                                // from the $all_categories variable
                                                                // and individually display as an option
                                                                while ($category = mysqli_fetch_array(
                                                                    $all_categories,
                                                                    MYSQLI_ASSOC
                                                                )) :;
                                                                ?>
                                                                    <option value="<?php echo $category["service_type_name"];
                                                                                    // The value we usually set is the primary key
                                                                                    ?>">
                                                                        <?php echo $category["service_type_name"];
                                                                        // To show the category name to the user
                                                                        ?>
                                                                    </option>
                                                                <?php
                                                                endwhile;
                                                                // While loop must be terminated
                                                                ?>
                                                            </select>
                                                            <br>

                                                            <br>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-6">
                                                    <div class="form-group col-md-12 mb-6">
                                                    <label><strong>Long Description :</strong></label>
                                        <textarea id='makeMeSummernote' name='long_desc' class="form-control"></textarea><br>
                                                    </div>
                                                    <div class="form-group col-md-12 mb-6">
                                                    <input class="form-control" type="file" name="uploadfile" value="" />
                                                    </div>

                                                
  
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Submit" class="btn btn-primary">
                                                        <div class="submitting"></div>
                                                    </div>
                                        </form>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                <h3>Enquiry Portal</h3>
                <p class="mb-4">service enquiry and submission portal for metamint clients</p>
                <div class="dbox w-100 d-flex align-items-start">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="text pl-3">
                        <p><span>Address:</span> Shibnagar, Modern Club Chowmuhani,, Agartala, Tripura.</p>
                    </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="text pl-3">
                        <p><span>Phone:</span> <a href="tel://9366744376"> +91 9366744376</a></p>
                    </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text pl-3">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@metamintindia.com</a></p>
                    </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-globe"></span>
                    </div>
                    <div class="text pl-3">
                        <p><span>Website</span> <a href="https://www.metamintindia.com/">www.metamintindia.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <script type="text/javascript">
        $('#makeMeSummernote').summernote({
            height:100,
        });

    </script>
   

</body>

</html>
