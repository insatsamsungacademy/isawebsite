<?php
include("config.php");
include("connexion.php");

?>


<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Samsung Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="assets/images/favicon.ico"
    <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="assets/css/fonticons.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css"/>


    <link rel="stylesheet" href="assets/css/navmenu.css">

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css"/>

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!--Home page style-->

<div class='preloader'>
    <div class='loaded'>&nbsp;</div>
</div>
<nav id="main-nav">
    <ul>
        <li><a href="#home"><span>Home</span></a></li>
        <li><a href="#about"><span>About Me</span></a></li>
        <li><a href="#register"><span>Register</span></a></li>
        <li><a href="#project"><span>Add project</span></a></li>
        <li><a href="#portfolio"><span>Portfolio</span></a></li>

    </ul>
    <a href="#" class="cd-close-menu">Close<span></span></a>
</nav>


<figure class="main_area">

    <div id="home" class="home home-main-content">
        <div class="home-overlay-fluid">
            <div class="container">
                <div class="row">
                    <div class="main_home_content text-center wow fadeInUp" data-wow-duration="1.5s">
                        <div class="div-menu">
                            <header class="cd-header">
                                <a class="cd-menu-trigger" href="#main-nav"><span></span></a>
                            </header>
                        </div>

                        <div class="logo_img">
                            <a href=""><img src="assets/images/samsunglogosmall.png"  alt=""/></a>
                        </div>
                        <h2>INSAT Samsung Academy</h2>
                        <div class="separator"></div>
                        <p></p>
                    </div>


                </div>
            </div>
        </div>
    </div><!-- End of Banner Section -->


    <section id="about" class="about">
        <div class="about_overlay">
            <div class="container chikobiko">
                <div class="user_seperator text-center">
                    <a href=""><i class="lnr lnr-user"></i></a>
                </div>
                <div class="row">
                    <div class="head_title text-center">
                        <h2><i class="fa fa-star"></i> About Us <i class="lnr lnr-star"></i></h2>
                    </div>

                    <div class="main_about_content text-center wow fadeIn" data-wow-duration="1.5s">
                        <div class="col-md-12">
                            <div class="about_top_content">
                                <i class="fa fa-quote-right"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation...</p>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End of Features Section -->


    <section id="coolautumn" class="coolautumn">
    </section>

    <section id="drivinghome" class="drivinghome">
    </section>

    <section id="pricing" class="pricing">
    </section><!-- End of Pricing Section -->


    <section id="project" class="project">
        <div class="about_overlay">
            <div class="container chikobiko">

                <div class="row">
                    <div class="main_contact">

                        <div class="head_title">
                            <h2><i class="fa fa-star"></i> Add a project <i class="lnr lnr-star"></i></h2>
                        </div>

                        <div class="main_about_content text-center wow fadeIn" data-wow-duration="1.5s">
                            <div class="col-md-6">
                                <form action="addproject.php" method="POST" id="addproject">
                                    <div class="form-group span4 offset4">
                                        <input type="text" class="form-control span4 offset4" name="label"
                                               placeholder="Label" required="">
                                    </div>
                                    <div class="form-group">
											<textarea class="form-control" rows="4" cols="50" name="description">

								Description
										</textarea>
                                    </div>
                                    <div class="form-group">
                                        <select multiple class="form-control" name="membres[]">
                                            <?php
                                            $sql = mysqli_query($connect, "SELECT id,nom, prenom FROM membre");

                                            while ($row = $sql->fetch_assoc()) {

                                                echo "<option value=" . $row['id'] . ">" . $row['prenom'] . " " . $row['nom'] . "</option>";

                                            }

                                            ?>


                                        </select>
                                    </div>


                                    <div class="message_btn text-right">
                                        <a href=""><input type="Submit" class="btn btn-primary" value="submit"/></a>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="register" class="register">

        <div class="about_overlay ">
            <div class="container bangbang">
                <div class="row">

                    <div class="main_contact">
                        <div class="head_title wow fadeInDown" data-wow-duration="1s">
                            <h2><i class="fa fa-star"></i> Register <i class="lnr lnr-star"></i></h2>
                        </div>
                        <div class="contact_content">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="contact_message wow fadeInLeft" data-wow-duration="1.5s">
                                    <form action="addmember.php" id="formid" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                   required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="familyname"
                                                   placeholder="Family Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                   required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone"
                                                   required="">
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" data-style="btn-primary" name="level"
                                                    id="level">
                                                <option value="0" disabled selected>Select your level..</option>
                                                <option value="1">1st year</option>
                                                <option value="2">2nd year</option>
                                                <option value="3">3rd year</option>
                                                <option value="4">4th year</option>
                                                <option value="5">5th year</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="visibility: hidden" id="div-speciality">
                                            <select class="form-control" name="speciality" id="speciality">
                                                <option value="NONE" disabled selected>Select your speciality</option>
                                        </div>
                                        <div class="message_btn text-right">
                                            <a href=""><input type="Submit" class="btn btn-primary" value="Submit"/></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>


    </section>

    <section id="blogs" class="blogs">
    </section>


    <section id="contact" class="contact">
        <div class="about_overlay ">
            <div class="container bangbang">
                <div class="row">
                    <div class="main_contact">
                        <div class="head_title text-center wow fadeInDown" data-wow-duration="1s">
                            <h2><i class="fa fa-star"></i> Get In touch <i class="lnr lnr-star"></i></h2>
                        </div>
                        <div class="contact_content">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="contact_message wow fadeInLeft" data-wow-duration="1.5s">
                                    <form action="#" id="formid">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                   required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                   required="">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="6"
                                                      placeholder="Message"></textarea>
                                        </div>

                                        <div class="message_btn text-right">
                                            <a href="" class="btn btn-primary">Submit</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="contact_socail_bookmark_area wow fadeInRight" data-wow-duration="1.5s">


                                    <div class="single_contact_phone">
                                        <h3>Address:</h3>
                                        <span>Building, 123 Main Street, City Country</span>

                                    </div>

                                    <div class="single_contact_phone">
                                        <h3>Phone:</h3>
                                        <span>+48 202 - 555 - 0114</span>
                                    </div>

                                    <div class="single_contact_phone">
                                        <h3>Email:</h3>
                                        <span>XS@yoursite.com</span>
                                    </div>

                                    <div class="contact_socail_bookmark">
                                        <ul>
                                            <li><a href="" class="s_f_1"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="" class="s_f_2"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="" class="s_f_3"><i class="fa fa-deviantart"></i></a></li>
                                            <li><a href="" class="s_f_4"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="" class="s_f_5"><i class="fa fa-github"></i></a></li>
                                            <li><a href="" class="s_f_6"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="" class="s_f_7"><i class="fa fa-skype"></i></a></li>
                                            <li><a href="" class="s_f_5"><i class="fa fa-tumblr"></i></a></li>
                                            <li><a href="" class="s_f_4"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section><!-- End of contact With Map Section -->

<section>
    <div id="map"></div>
    <script>
        function initMap() {
            var mapOptions = {
                zoom: 8

            };
            var uluru = {lat: 36.8426443, lng: 10.197504200000026};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            }, mapOptions);
            map.setZoom(16);
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCEF0kx16cXIi0PVjMBMayhaagAxEEs_A&callback=initMap">
    </script>
</section>

</figure>

<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="main_footer text-center wow fadeInUp" data-wow-duration="2s">
                <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>
                    2016. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>


<!-- STRAT SCROLL TO TOP -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/isotope.min.js"></script>

<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
