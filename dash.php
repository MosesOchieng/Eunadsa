<!DOCTYPE html>
<html lang="en">

<head>
    <style>
* {
  box-sizing: border-box;
}

.fab-wrapper {
  position: fixed;
  bottom: 3rem;
  right: 3rem;
}
.fab-checkbox {
  display: none;
}
.fab {
  position: absolute;
  bottom: -1rem;
  right: -1rem;
  width: 4rem;
  height: 4rem;
  background: blue;
  border-radius: 50%;
  background: #126ee2;
  box-shadow: 0px 5px 20px #81a4f1;
  transition: all 0.3s ease;
  z-index: 1;
  border-bottom-right-radius: 6px;
  border: 1px solid #0c50a7;
}

.fab:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.1);
}
.fab-checkbox:checked ~ .fab:before {
  width: 90%;
  height: 90%;
  left: 5%;
  top: 5%;
  background-color: rgba(255, 255, 255, 0.2);
}
.fab:hover {
  background: #2c87e8;
  box-shadow: 0px 5px 20px 5px #81a4f1;
}

.fab-dots {
  position: absolute;
  height: 8px;
  width: 8px;
  background-color: white;
  border-radius: 50%;
  top: 50%;
  transform: translateX(0%) translateY(-50%) rotate(0deg);
  opacity: 1;
  animation: blink 3s ease infinite;
  transition: all 0.3s ease;
}

.fab-dots-1 {
  left: 15px;
  animation-delay: 0s;
}
.fab-dots-2 {
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  animation-delay: 0.4s;
}
.fab-dots-3 {
  right: 15px;
  animation-delay: 0.8s;
}

.fab-checkbox:checked ~ .fab .fab-dots {
  height: 6px;
}

.fab .fab-dots-2 {
  transform: translateX(-50%) translateY(-50%) rotate(0deg);
}

.fab-checkbox:checked ~ .fab .fab-dots-1 {
  width: 32px;
  border-radius: 10px;
  left: 50%;
  transform: translateX(-50%) translateY(-50%) rotate(45deg);
}
.fab-checkbox:checked ~ .fab .fab-dots-3 {
  width: 32px;
  border-radius: 10px;
  right: 50%;
  transform: translateX(50%) translateY(-50%) rotate(-45deg);
}

@keyframes blink {
  50% {
    opacity: 0.25;
  }
}

.fab-checkbox:checked ~ .fab .fab-dots {
  animation: none;
}

.fab-wheel {
  position: absolute;
  bottom: 0;
  right: 0;
  border: 1px solid #;
  width: 10rem;
  height: 10rem;
  transition: all 0.3s ease;
  transform-origin: bottom right;
  transform: scale(0);
}

.fab-checkbox:checked ~ .fab-wheel {
  transform: scale(1);
}
.fab-action {
  position: absolute;
  background: #0f1941;
  width: 3rem;
  height: 3rem;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: White;
  box-shadow: 0 0.1rem 1rem rgba(24, 66, 154, 0.82);
  transition: all 1s ease;

  opacity: 0;
}

.fab-checkbox:checked ~ .fab-wheel .fab-action {
  opacity: 1;
}

.fab-action:hover {
  background-color: #f16100;
}

.fab-wheel .fab-action-1 {
  right: -1rem;
  top: 0;
}

.fab-wheel .fab-action-2 {
  right: 3.4rem;
  top: 0.5rem;
}
.fab-wheel .fab-action-3 {
  left: 0.5rem;
  bottom: 3.4rem;
}
.fab-wheel .fab-action-4 {
  left: 0;
  bottom: -1rem;
}

    </style>
    <title>EUNADSA ~ Health sciences,Egerton UNiversity</title>
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

    <script src="https://kit.fontawesome.com/43cfcad3c5.js" crossorigin="anonymous"></script>
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
                    <li class="nav-item active"><a href="dash.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="blog/blog.php" class="nav-link">Learning blog</a></li>
                    <li class="nav-item"><a href="Intern.php" class="nav-link">Internship spaces</a></li>
                    <li class="nav-item"><a href="event.php" class="nav-link">Events & Programs</a></li>
                    <li class="nav-item"><a href="courses/course.php" class="nav-link">Online Courses Dashboard</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/pic.jpeg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Good Nutrition and Better Health are Siamese Twins</h1>
                    <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="#"></a>
                    </p>

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="images/eu.mp4" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            <span>Website Users.</span>
                            <strong class="number" data-number="1435">0</strong>
                            <span>We are happy to have you as a member of our community.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Become a member </h3>
                            <p>By becoming a member of EUNADSA you not only become part of its activities but you help run the student association through your funds in planning and making it secure.</p>
                            <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Contact Us</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-3 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Support what we do.</h3>
                            <p>EUNASDA aims at fostering nutrition health and education among communities in Kenya making the learning experienced based for students and also helpful to the general communities.</p>
                            <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Connecting you</h3>
                            <p>EUNADSA aims at connecting the different stakeholders that are the main backbone of Nutrition and Dietetics course across Egerton and the world .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Become A Volunteer</h3>
                            <p>Participate in different events we design for you to make an important student and an upcoming professional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Sponsorship</h3>
                            <p>Be part of the larger community by contributing in every way in fostering Nutrition and Dietetics knowdledge across the globe.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section"></div>
            </div>

            <section class="ftco-gallery">
                <div class="d-md-flex">
                    <a href="images/preserve.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/preserve.JPG);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <a href="images/prof.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/prof.JPG);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <a href="images/advice.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/advice.JPG);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <a href="images/banner.jpeg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/banner.jpeg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="d-md-flex">
                    <a href="images/consu.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/consu.JPG);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <a href="images/full.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/full.JPG);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <a href="images/food.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/food.JPG);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                    <a href="images/12.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/12.JPG);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </section>

            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-3">
                        <div class="col-md-7 heading-section ftco-animate text-center">
                            <h2 class="mb-4">Online Health Nutrition courses</h2>
                            <p>Online courses from a range of different sites online sites the link will open a tab to the left or right depending on your browser settings..</p>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20" style="background-image: url('images/DHS.png');">
                                </a>
                                <div class="text p-4 d-block">
                                    <div class="meta mb-3">
                                        <div><a href="#">Agora Unicef Courses</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span>certificates</a></div>
                                    </div>
                                    <h3 class="heading mt-3"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwje_eOWivH3AhUsSvEDHSZGAQYQFnoECA4QAQ&url=https%3A%2F%2Fagora.unicef.org%2F&usg=AOvVaw3pOyYxxWtjmbxvRwMsez8F">Agora Courses</a></h3>
                                    <p>Courses that are statistical and health related are found in this site.Click on the link to get access to the courses of your choice.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20" style="background-image: url('images/fao.png');">
                                </a>
                                <div class="text p-4 d-block">
                                    <div class="meta mb-3">
                                        <div><a href="#" target="blank">Food and agricultural courses</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span>Certificates available</a></div>
                                    </div>
                                    <h3 class="heading mt-3"><a href="https://www.google.com/aclk?sa=l&ai=DChcSEwjN9byfivH3AhU4GgYAHdcYCpIYABABGgJ3cw&sig=AOD64_0LaqgV8T2UYtB0BCvnMAP1KBVwig&q&adurl&ved=2ahUKEwij97OfivH3AhUyRfEDHcw3ApIQ0Qx6BAgCEAE">Food Agricultural courses</a></h3>
                                    <p>This are courses that are related to food science and Agriculture related online courses from Food Agricultural organisation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20" style="background-image: url('images/global.png');">
                                </a>
                                <div class="text p-4 d-block">
                                    <div class="meta mb-3">
                                        <div><a href="#">Global health elearning courses.</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading mt-3"><a href="#">Global health elarning courses</a></h3>
                                    <p>This a varied number of courses that deals with a number of issues like Diarrhoea and other related illnesses.Access it by clicking on the link.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="ftco-section bg-light">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-3">
                        <div class="col-md-7 heading-section ftco-animate text-center">
                            <h2 class="mb-4">Our Latest Events</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20" style="background-image: url('images/13.JPG');">
                                </a>
                                <div class="text p-4 d-block">
                                    <div class="meta mb-3">
                                        <div><a href="#">Sep. 10, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading mb-4"><a href="#">Food managers at work</a></h3>
                                    <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                                    <p>Food and dietetics students engaged at Egerton University held a learning session on cooking different nutritious foods..</p>
                                    <p><a href="videos/cook.mp4">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="#" class="block-20" style="background-image: url('images/2.jpg');">
                                </a>
                                <div class="text p-4 d-block">
                                    <div class="meta mb-3">
                                        <div><a href="#">March. 22, 2022</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading mb-4"><a href="https://youtu.be/WoTi3Zf4EGc">Food systems ~live Frontrow</a></h3>
                                    <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 8:30pm-10:30pm</span><span><i class="icon-map-o"></i> Venue KTN livestream</span></p>
                                    <p>Join the Live disccusion on roles of the youth in the currentfood systems and their impacts. </p>
                                    <p><a href="#">Join Event by clicking this to get the recording. <i class="ion-ios-arrow-forward"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20" style="background-image: url('images/1.jpg');">
                                </a>
                                <div class="text p-4 d-block">
                                    <div class="meta mb-3">
                                        <div><a href="#">Sep. 10, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading mb-4"><a href="#">Maternal Infant nutrition and young child nutrition</a></h3>
                                    <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 12:00pm-13:00pm</span> <span><i class="icon-map-o"></i> OAyouth Kenya</span></p>
                                    <p>Join the event on twitter spaces through following @Ouayouth Kenya.</p>
                                    <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section-3 img" style="background-image: url(images/height.JPG);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex">
                        <div class="col-md-6 d-flex ftco-animate">
                            <div class="img img-2 align-self-stretch" style="background-image: url(images/juice.jpg);"></div>
                        </div>
                        <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                            <h3 class="mb-3">Be a volunteer</h3>
                            <form action="#" class="volunter-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="fab-wrapper">
  <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
  <label class="fab" for="fabCheckbox">
    <span class="fab-dots fab-dots-1"></span>
    <span class="fab-dots fab-dots-2"></span>
    <span class="fab-dots fab-dots-3"></span>
  </label>
  <div class="fab-wheel">
    <a class="fab-action fab-action-1">
      <i class="fa-solid fa-circle-question" ></i>
    </a>
    <a class="fab-action fab-action-2">
      <i  class="fa-solid fa-thumbs-up"></i>
    </a>
        <a class="fab-action fab-action-3">
      <i class="fas fa-address-book"></i>
    </a>
        <a class="fab-action fab-action-4">
      <i class="fas fa-info"></i>
    </a>
  </div>
</div>
            </section>

            <footer class="ftco-footer ftco-section img">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">About Us</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Recent Blog</h2>
                                <div class="block-21 mb-4 d-flex">
                                    <a class="blog-img mr-4" style="background-image: url(images/prof.jpg);"></a>
                                    <div class="text">
                                        <h3 class="heading"><a href="#">Professor Ojienda who is the founder and fisrt chairperson of KNDI.</a></h3>
                                        <div class="meta">
                                            <div><a href="#"><span class="icon-calendar"></span> July 12, 2007</a></div>
                                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-21 mb-4 d-flex">
                                    <a class="blog-img mr-4" style="background-image: url(images/mh.png);"></a>
                                    <div class="text">
                                        <h3 class="heading"><a href="#">KNDI committee members which is all about the instititues that licenses and trains Nutritionist and dietitians across the country.</a></h3>
                                        <div class="meta">
                                            <div><a href="#"><span class="icon-calendar"></span> JUly 12, 2019</a></div>
                                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="ftco-footer-widget mb-4 ml-md-4">
                                <h2 class="ftco-heading-2">Site Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Home</a></li>
                                    <li><a href="#" class="py-2 d-block">About</a></li>
                                    <li><a href="#" class="py-2 d-block">Online courses</a></li>
                                    <li><a href="#" class="py-2 d-block">Internship spaces.</a></li>
                                    <li><a href="#" class="py-2 d-block">Event</a></li>
                                    <li><a href="#" class="py-2 d-block">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Have a Questions?</h2>
                                <div class="block-23 mb-3">
                                    <ul>
                                        <li><span class="icon icon-map-marker"></span><span class="text">Human Nutrition ~ Health scineces, Egerton University,main campus ,Njoro</span></li>
                                        <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                        <li><a href="#"><span class="icon icon-envelope"></span><span class="text">eunadsaclub@gmail.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Moses O. Opiyo</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </footer>




            <di1 3 item: $150.00v id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></di1>


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

</body>

</html>