<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png" />

    <!--Fonts-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet" /> -->
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
    <!--FontAwesome-->
    <title>footer</title>
    <link rel="stylesheet" href="./footer.css">
    <script>
    // svg-up smooth scroll
    svgUp.addEventListener("click", () => {
        window.scroll({
            top: 0,
            behavior: "smooth"
        });
    });

    window.onscroll = function() {
        // make navbar fixed & change logo color
        if (window.pageYOffset > headerSection.offsetHeight - 75) {
            nav.classList.add("active");
            logoImage.src = "https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988525/logo-rosa.png";
        } else {
            nav.classList.remove("active");
            logoImage.src =
                "https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/logo-rosa-white.png";
        }



        // box model functions
        function boxModelFun(e) {
            // close box model
            if (
                e.code === "Escape" ||
                (e.target.tagName === "DIV" && !e.target.classList.contains("arrow")) ||
                e.target.classList.contains("close")
            ) {
                boxModel.classList.remove("active");
                body.classList.remove("hide-scroll");
            }

            if (boxModel.classList.contains("active")) {
                if (
                    e.code === "ArrowRight" ||
                    e.code === "ArrowLeft" ||
                    e.target.classList.contains("arrow-right") ||
                    e.target.classList.contains("arrow-left")
                ) {
                    const arr = Array.from(menuImageContainer.children);
                    const active = arr.find(div => div.classList.contains("active"));

                    // change box model image
                    if (
                        e.target.classList.contains("arrow-right") ||
                        e.code === "ArrowRight"
                    ) {
                        if (active.nextElementSibling === null) {
                            active.parentElement.firstElementChild.classList.add("active");
                            boxModelImage.src =
                                active.parentElement.firstElementChild.firstElementChild.src;
                        } else {
                            active.nextElementSibling.classList.add("active");
                            boxModelImage.src = active.nextElementSibling.firstElementChild.src;
                        }
                    }

                    // change box model image
                    else if (
                        e.target.classList.contains("arrow-left") ||
                        e.code === "ArrowLeft"
                    ) {
                        if (active.previousElementSibling === null) {
                            active.parentElement.lastElementChild.classList.add("active");
                            boxModelImage.src =
                                active.parentElement.lastElementChild.lastElementChild.src;
                        } else {
                            active.previousElementSibling.classList.add("active");
                            boxModelImage.src =
                                active.previousElementSibling.firstElementChild.src;
                        }
                    }
                    active.classList.remove("active");
                }
            }
        }

        window.addEventListener("keydown", boxModelFun);
        window.addEventListener("click", boxModelFun);
        boxModelArrow.addEventListener("click", boxModelFun);
    }
    </script>
</head>

<body>
    <!--Start Footer-->
    <footer>
        <div class="text">
            <h2>ABOUT PIYUSH</h2>
            <div><i class="fas fa-asterisk"></i></div>
            <p>
                PIYUSH is an enchanting and easy-to-use parallax Restaurant WordPress
                theme that allows you to tell your story in a dynamic, narrative and
                enjoyable way, making it perfect for restaurants, bakeries, bars or
                coffee shops.
            </p>
        </div>
        <div class="contact-container">
            <div class="social-media">
                <h3>Follow Along</h3>
                <div class="links">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="newsletter">
                <h3>NewsLetter</h3>
                <form method="post">
                    <input type="email" name="email" placeholder="Type Your Email" />
                    <i class="fas fa-envelope"></i>
                </form>
            </div>
        </div>
    </footer>
    <!--End Footer-->

    <!--Start Copy-Right-->
    <div class="copyright">
        <svg class="svg-up" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve">
            <path fill="#262526"
                d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z">
            </path>
        </svg>
        <i class="fas fa-angle-double-up arrow-up"></i>
        <ul class="info">
            <li>&copy; PIYUSH 2024</li>
            <li>Delhi , India</li>
            <li>Tel: 6205059314</li>

        </ul>
        <ul class="CTA">
            <li><a href="#">PERMISSIONS AND COPYRIGHT</a></li>
            <li><a href="#">CONTACT THE TEAM</a></li>
            <li>
                <img src="https://res.cloudinary.com/dbsezikux/image/upload/w_1000,c_fill,ar_1:1,g_auto,r_max,bo_5px_solid_red,b_rgb:262c35/v1686984378/WhatsApp_Image_2023-05-02_at_21.51.57_yykoqs.jpg"
                    alt="" style="height: 50px; width: 50px" />
            </li>
        </ul>
    </div>
    <!--End Copy-Right-->
</body>

</html>