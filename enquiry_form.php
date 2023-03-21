<!doctype html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style2.css">

</head>

<body>

    <section class="ftco-section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">

                </div>
            </div>
            <div class="row justify-content-center">
                <form action="enquiry.php" class="ml-auto">
                    <input type="submit" value="Go Back " class="btn btn-primary ml-auto">
                </form>
                <form action="enquiry_submit.php" method="post">
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
                                        <form action="enquiry_submit.php" method="POST" id="contactForm" name="contactForm" class="contactForm">
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
                                                            <label class="label" for="subject">Service Type</label>
                                                            <select id="cars" name="cars">
                                                                <input type="option" class="form-control" name="" id="subject" placeholder="Enter your mobile number">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-8 mt-4">
                                                    <div class="form-group">
                                                        <textarea name="remarks" class="form-control" id="remarks" cols="30" rows="4" placeholder="please add your remarks"></textarea>

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

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
