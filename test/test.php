<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>How to add Summernote Editor in PHP? - Nicesnippets.com/</title>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

    <!-- include summernote css-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- include summernote js-->

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

</head>

<body>

    <?php 

        include "config.php";


        if(isset($_POST['submit'])){

            $title = $_POST['title'];

            $long_desc = $_POST['long_desc'];


            if($title != ''){

                mysqli_query($con, "INSERT INTO tbl_test(title,long_desc) VALUES('".$title."','".$long_desc."') ");

                header('location: test.php');

            }

        }

    ?>

    <div class="container mt-4">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header text-center bg-primary text-white">

                        <h4>How to add Summernote Editor in PHP? - Nicesnippets.com</h4>

                    </div>

                    <div class="card-body">

                        <form method='post' action=''>

                            <div class="mb-3">

                                <label><strong>Title :</strong></label>

                                <input type="text" name="title" class="form-control">

                            </div>

                            <div class="mb-1">

                                <label><strong>Long Description :</strong></label>

                                <textarea id='makeMeSummernote' name='long_desc' class="form-control"></textarea><br>

                            </div>

                            <div class="d-flex justify-content-center">

                                <input type="submit" name="submit" value="Submit" class="btn btn-success">

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Script -->

    <script type="text/javascript">

        $('#makeMeSummernote').summernote({

            height:200,

        });

    </script>

</body>

</html>