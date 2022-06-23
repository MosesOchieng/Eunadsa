<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            box-sizing: border-box;
        }
        /* Position the image container (needed to position the left and right arrows) */
        
        .container3 {
            position: relative;
        }
        /* Hide the images by default */
        
        .mySlides {
            display: none;
        }
        /* Add a pointer when hovering over the thumbnail images */
        
        .cursor {
            cursor: pointer;
        }
        /* Next & previous buttons */
        
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }
        /* Position the "next button" to the right */
        
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        /* On hover, add a black background color with a little bit see-through */
        
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        /* Number text (1/3 etc) */
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* Container for image text */
        
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Six columns side by side */
        
        .column {
            float: left;
            width: 16.66%;
        }
        /* Add a transparency effect for thumnbail images */
        
        .demo {
            opacity: 0.6;
        }
        
        .active,
        .demo:hover {
            opacity: 1;
        }
        /* Style the form element with a border around it */
        
        form {
            border: 4px solid #f1f1f1;
        }
        /* Add some padding and a grey background color to containers */
        
        .container1 {
            padding: 20px;
            background-color: #f1f1f1;
        }
        /* Style the input elements and the submit button */
        
        input[type=text],
        input[type=submit] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        /* Add margins to the checkbox */
        
        input[type=checkbox] {
            margin-top: 16px;
        }
        /* Style the submit button */
        
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            border: none;
        }
        
        input[type=submit]:hover {
            opacity: 0.8;
        }
    </style>
    <title>EUNADSA ~ Human Nutrition </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">EUNADSA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="blog/blog.html" class="nav-link">Courses & Blogs</a></li>
                    <li class="nav-item"><a href="Internship.html" class="nav-link">Internship spaces.</a></li>
                    <li class="nav-item"><a href="event.html" class="nav-link">Events</a></li>
                    <li class="nav-item"><a href="alumni.html" class="nav-link">Alumni Network</a></li>
                    <li class="nav-item"><a href="alumni.html" class="nav-link">Documents and Downloads</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/apple.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-about align-self-stretch" style="background-image: url(images/eu.jpg); width: 100%;"></div>
                </div>
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4">Welcome to EUNADSA</h2>
                    <p>Nutrition and dietetics student association within Egerton Univesity that creates a community around nutrition and dietetics students to relate well with their course and other students.</p>
                    <p>The Nutrition and Dietetics student body has a council of governance and a club Patron who is Mr. Samwel Mbugua.A lecturee within Egerton University.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <div>
        <!-- Container for the image gallery -->
        <div class="container3">

            <!-- Full-width images with number text -->
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="images/t.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="images/abed.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="images/kis.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="images/m.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="images/p.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img src="images/w.JPG" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <!-- Thumbnail images -->
            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="images/t.JPG" style="width:100%" onclick="currentSlide(1)" alt="EUNADSA council representatives">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/abed.JPG" style="width:100%" onclick="currentSlide(2)" alt="3rd year represenatives">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/m.JPG" style="width:100%" onclick="currentSlide(3)" alt="2nd year representatives">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/kis.JPG" style="width:100%" onclick="currentSlide(4)" alt="1st year representative.">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/p.JPG" style="width:100%" onclick="currentSlide(5)" alt="Chairperson EUNADSA">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/w.jpg" style="width:100%" onclick="currentSlide(6)" alt="Exchange program.">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <form action="action_page.php">
        <div class="container1">
            <h2>Subscribe to our Newsletter</h2>
            <p>To get more information kindly subscribe to our newsletter.</p>
        </div>

        <div class="container1" style="background-color:white">
            <input type="text" placeholder="Name" name="name" required>
            <input type="text" placeholder="Email address" name="mail" required>
            <label>
          <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
        </label>
        </div>

        <div class="container1">
            <input type="submit" value="Subscribe">
        </div>
    </form>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    ha

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>

</body>

</html>