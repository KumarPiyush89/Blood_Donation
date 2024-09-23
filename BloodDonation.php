<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png" />

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet" />
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
    <!--FontAwesome-->
    <link rel="stylesheet" href="bloodDonation.css" />
    <style>
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
    </style>
    <title>Blood Donation</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php"; ?><br /><br /><br /></div>
        </div>

        <!-- <div class="row">
            <div class="col-sm-12"><img src="images/customLogo.jpg" alt="" title=""
                    style="height: 350px; width:100%;" /></div>
        </div> -->

        <!-- Slid start -->

        <div class="testimonial-section" id="testimonials">

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                        class="active bg-danger" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2" class="bg-danger"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3" class="bg-danger"></button>
                </div>

                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active text-center">
                        <img src="./images/Banner1.jpg" alt="Person 1" style="height: 450px; width: 100%;">
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="carousel-item text-center">
                        <img src="./images/Banner2.jpg" alt="Person 2" style="height: 450px; width: 100%;">
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="carousel-item text-center">
                        <img src="./images/Banner3.jpg" alt="Person 3" style="height: 450px; width: 100%;">
                    </div>
                </div>

                <!-- Carousel Controls --><br>
                <button class="carousel-control-prev " type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
                    <span class="visually-hidden ">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Slid End -->

        <div class="row">
            <div class="col-sm-12">
                <h1><b
                        style="font-size: xx-large; text-align: center; color: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        Life is
                        not just about
                        Living,
                        Its
                        about
                        bringing a Change
                        !</b></h1>
            </div>
        </div>

        <div class="container text-center mt-5">
            <marquee behavior="slide" scroolamount="20" direction="left">
                <h1 style="color: red;">Welcome to the Blood Donation Platform</h1>
            </marquee>
            <!-- <merq>Welcome to the Blood Donation Platform</merq> -->
            <p>Find the blood group you need, register as a donor, or search for available blood in your area.</p>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/images (1).png" class="card-img-top" alt="Search for Blood"
                            style="height: 250px; width: 100%; box-shadow: 0 0 0 2px rgba(218,102,123,1), 8px 8px 0 0 rgba(218,102,123,1), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3);">
                        <div class="card-body">
                            <h4 class="card-title"><b>Search for Blood</b></h4>
                            <a href="Searc.php" class="btn btn-danger">Search Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./images/blood4.jpg" class="card-img-top" alt="Register as Donor"
                            style="height: 250px; width: 100%; box-shadow: 0 0 0 2px rgba(218,102,123,1), 8px 8px 0 0 rgba(218,102,123,1), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3);">
                        <div class="card-body">
                            <h4 class="card-title"><b> Register as a Donor</b></h4>
                            <a href="RegisterDonor.php" class="btn btn-danger">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./images/needHelp.png" class="card-img-top" alt="Need Help"
                            style="height: 250px; width: 100%; box-shadow: 0 0 0 2px rgba(218,102,123,1), 8px 8px 0 0 rgba(218,102,123,1), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3);">
                        <div class="card-body">
                            <h4 class="card-title"><b> Need Help?</b></h4>
                            <a href="help.php" class="btn btn-danger">Get Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center mt-5">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/blood10.jpg" class="card-img-top" alt="Search for Blood"
                            style="height: 250px; width: 100%; box-shadow: 0 0 0 2px rgba(218,102,123,1), 8px 8px 0 0 rgba(218,102,123,1), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3);">
                        <div class="card-body">
                            <h4 class="card-title"><b> View Donar</b></h4>
                            <a href="AllRecord.php" class="btn btn-danger">View Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./images/blood2.jpg" class="card-img-top" alt="Register as Donor"
                            style="height: 250px; width: 100%; box-shadow: 0 0 0 2px rgba(218,102,123,1), 8px 8px 0 0 rgba(218,102,123,1), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3);">
                        <div class="card-body">
                            <h4 class="card-title"><b> Update Donar</b></h4>
                            <a href="ViewUpdate.php" class="btn btn-danger">Update Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./images/blood3.jpg" class="card-img-top" alt="Need Help"
                            style="height: 250px; width: 100%;box-shadow: 0 0 0 2px rgba(218,102,123,1), 8px 8px 0 0 rgba(218,102,123,1), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3);">
                        <div class="card-body">
                            <h4 class="card-title"><b> Delet Donar</b></h4>
                            <a href="DeleteDonor.php" class="btn btn-danger">Delete Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center mt-5">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="./images/blood5.jpg" class="card-img-top" alt="Search for Blood"
                            style="height: 250px; width: 100%; box-shadow: 0 0 0 2px rgba(218,102,123,1), 8px 8px 0 0 rgba(218,102,123,1), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3);">
                        <div class="card-body">
                            <h4 class="card-title"><b> Say The Doctor</b></h4>
                            <a href="SayDoctor.php" class="btn btn-danger">What Say's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/Certificate.png" class="card-img-top" alt="Need Help"
                            style="height: 250px; width: 100%; box-shadow: 0 0 0 2px rgba(218,102,123,1), 8px 8px 0 0 rgba(218,102,123,1), 0 60px 80px rgba(0,0,0,0.60), 0 45px 26px rgba(0,0,0,0.14),0px 9px 30px rgba(255, 149, 5, 0.3);">
                        <div class="card-body">
                            <h4 class="card-title"><b> Certificate</b></h4>
                            <a href="Certificate.php" class="btn btn-danger">Get Certificate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr> <br>
        <hr><br>
        <div class="row">
            <div class="col-sm-12">
                <div class="wrap-map"><iframe
                        src="https://www.google.com/maps/place/Krishna+Nagar/@28.65804,77.2874551,17z/data=!3m1!4b1!4m6!3m5!1s0x390cfb6171cda38d:0xef98236bc85e8f1d!8m2!3d28.65804!4d77.29003!16s%2Fg%2F11bzsgm5p2?entry=ttu&g_ep=EgoyMDI0MDkxNi4wIKXMDSoASAFQAw%3D%3D"
                        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><?php include "footer.php";?></div>
        </div>

    </div>
    </script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>