<?php
include 'db.php';
?>

<!DOCTYPE html>
<!--[if IE 7 ]>
	<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
	<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
	<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- =========================================
	head
	========================================== -->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151393624-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-151393624-1');
    </script>

    <!-- =========================================
	    Basic
	    ========================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sashakt Vihar Construction & Security Pvy. Ltd.</title>
    <meta name="keywords" content="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd." />
    <meta name="author" content="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd." />
    <meta name="description" content="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd." />

    <!-- =========================================
	    Mobile Configurations
	    ========================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <?php include 'head.php'; ?>
</head>
<!-- /head -->

<body>
    <div class="wrapper" id="wrapper">
        <div class="offcanvas-pusher">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <section class="header">
                            <?php include 'header.php'; ?>
                            <!-- .header-wrapper-->
                        </section>
                        <!--End .header -->
                    </div>
                    <!-- .row-->
                </div>
                <!-- .container-->
                <div class="container-fluid">
                    <section class="banner-section hidden-xs">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="img/slide1.jpg" alt="slide1">
                                    <div class="carousel-caption">
                                        <h1>Quick Service, Quality Work &amp; Be Happy...
                                        </h1>

                                        <a class="btn" href="about.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/slide1.jpg" alt="slide2">
                                    <div class="carousel-caption">
                                        <h1>Quick Service, Quality Work &amp; Be Happy...
                                        </h1>

                                        <a class="btn" href="about.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/slide1.jpg" alt="slide3">
                                    <div class="carousel-caption">
                                        <h1>Quick Service, Quality Work &amp; Be Happy...
                                        </h1>

                                        <a class="btn" href="about.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- .banner-section-->
                </div>
                <!-- .container-fluid-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="homemarque" style="margin-top:-7px;">
                                <?php
                                mysqli_set_charset($conn, 'utf8');
                                $slidersql = "SELECT * FROM textslider where id = 1";
                                $slideresult = $conn->query($slidersql);

                                if ($slideresult->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $slideresult->fetch_assoc()) {
                                        echo '<marquee onmouseover="stop()" onmouseout="start()"><h3 class="marh3"  style="color:#515253;padding:10px;">' . $row["data"] . '</h3></marquee>';
                                    }
                                } else {
                                    //echo "<img src='img/nojob.png' style='display: block; width:30%; margin-left:auto; margin-right:auto;'>";
                                    //echo "not found";
                                }

                                ?>
                                <?php
                                mysqli_set_charset($conn, 'utf8');
                                $slidersql = "SELECT * FROM textslider where id = 2";
                                $slideresult = $conn->query($slidersql);

                                if ($slideresult->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $slideresult->fetch_assoc()) {
                                        echo '<marquee class="marh31" scrolldelay="100" onmouseover="stop()" onmouseout="start()"><h3 style="color:#515253;padding-top:5px;">' . $row["data"] . '</h3></marquee>';
                                    }
                                } else {
                                    //echo "<img src='img/nojob.png' style='display: block; width:30%; margin-left:auto; margin-right:auto;'>";
                                    //echo "not found";
                                }

                                ?>

                            </div>
                        </div>
                        <!-- .col-md-12-->
                    </div>
                    <!-- .row-->
                </div>
                <!-- .container-->
                <div class="container">
                    <div class="row">
                        <div class="service-section">
                            <div class="col-md-12">
                                <!-- Nav tabs -->
                                <center>
                                    <ul class="tablist" role="tablist">
                                        <!--<li>Service Doese Matter</li>-->
                                        <li role="presentation" class="active"><a href="#residential" aria-controls="residential" role="tab" data-toggle="tab">Job
                                                Vacancies</a></li>
                                    </ul>
                                </center>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="residential">
                                    <div class="column">
                                        <section class="services py-5 bg-light text-center">
                                            <div class="container">
                                                <div class="row">
                                                    <?php
                                                    $sql = "SELECT * FROM job where status='active' ORDER BY id DESC";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            // echo '<div class="job-item"><div class="job-title"><h3>' . $row["title"] . '</h3></div>
                                                            //                           <div class="job-desc"><p>' . $row["short_desc"] . '</p></div><div class="applybtn"><a href="terms.php?id=' . $row["id"] . '"><button>Apply Now
                                                            //                           </button></a></div></div>';

                                                    ?>

                                                            <div class="col-xs-12 col-sm-6 col-md-3" style="margin-bottom: 3px;">
                                                                <a href="#" class="text-body">
                                                                    <div class="card bg-warning mb-3">
                                                                        <div class="card-body">
                                                                            <i class="fa fa-tachometer fa-4x "></i></br>
                                                                            <small class="text-secondary">Mileage (upto)</small>
                                                                            <h5>Full Service</h5>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                    <?php }
                                                    } else {
                                                        echo "<img src='img/nojob.png'
                                                        style='display: block; width:30%; margin-left:auto; margin-right:auto;'>";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .service-section-->
                    </div>
                    <!-- .row-->
                </div>
                <!-- .container-->

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="term-section">
                                <div class="term-thumb">
                                    <img src="img/important-notice.png" alt="welcome apbiharpower" width="360px">
                                </div>
                                <div class="term-content">
                                    <div style="background-color: #E96220;padding:10px 10px 10px 20px;">
                                        <h3 style="color:white;">Important Notice:-</h3>
                                    </div><br>
                                    <ul style="margin-left:20px;">
                                        <?php

                                        $sql = "SELECT * FROM notice";
                                        mysqli_set_charset($conn, 'utf8');
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li style="line-height:40px;font-size:16px;color:#636363;"><i class="fa fa-angle-right" aria-hidden="true"></i> ' . $row["notice"] . '</li>';
                                            }
                                        } else {
                                            echo "No any notice is there";
                                        }
                                        $conn->close();
                                        ?>

                                    </ul>
                                </div>
                            </div>
                            <!-- .welcome-section-->
                        </div>
                        <!-- .col-md-12-->
                    </div>
                    <!-- .row-->
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="welcome-section">
                                <div class="welcome-thumb">
                                    <img src="img/welcome-home.jpg" alt="welcome apbiharpowe">
                                </div>
                                <div class="welcome-content">
                                    <h3>Welcome to Anjali & Poonam Power Services Pvt. Ltd.</h3>
                                    <p>Anjali & Poonam Power Services Pvt. Ltd. is one the leading power maintenance
                                        services providing company in Bihar. we propose and perform periodical
                                        inspections, parts replacements, diagnoses, and renovations of commercial
                                        and non commercial electrical meter. As a professional group on the
                                        maintenace service, we perform consultating services on environmental
                                        survey, diagnoses of the problem, etc. We provide 24*7 technical support
                                        services to provide you uninterrupted electrical supply.</p>
                                    <a class="btn" href="about.html">Read More</a>
                                </div>
                            </div>
                            <!-- .welcome-section-->
                        </div>
                        <!-- .col-md-12-->
                    </div>
                    <!-- .row-->
                </div>



                <div class="container gek-content-padd">
                    <div class="row gek-content">
                        <div class="teamhead">
                            <h1>Our Team in our Company</h1>
                        </div>


                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <!--<ol class="carousel-indicators">-->
                            <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
                            <!--  <li data-target="#myCarousel" data-slide-to="1"></li>-->
                            <!--  <li data-target="#myCarousel" data-slide-to="2"></li>-->
                            <!--</ol>-->

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="col-md-4 col-xs-6 teamitem item">
                                        <div class="teamitem-inner">
                                            <div class="img-team-outer"><img src="img/team/cmd.jpg" class="img-responsive img-team" height="600" width="600" />
                                            </div>
                                            <p class="team-name">Mr. Chandan Kumar</p>
                                            <div class="ourteambtborder"></div>
                                            <p class="team-wichmagazine">C.M.D</p>
                                            <hr />
                                            <p class="team-contactdata"><i class="fa fa-phone"></i> +91
                                                9608255314<br /> <i class="fa fa-envelope"></i> you@yourmail.com</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-6 teamitem item">
                                        <div class="teamitem-inner">
                                            <div class="img-team-outer"><img src="img/team/sweta.jpeg" class="img-responsive img-team" height="600" width="600" />
                                            </div>
                                            <p class="team-name">Mrs. Kumari shweta</p>
                                            <div class="ourteambtborder"></div>
                                            <p class="team-wichmagazine">Senior-HR</p>
                                            <hr />
                                            <p class="team-contactdata"><i class="fa fa-phone"></i> 0612 1800
                                                2121<br /><i class="fa fa-envelope"></i> s.shweta9543@gmail.com</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-6 teamitem item">
                                        <div class="teamitem-inner">
                                            <div class="img-team-outer"><img src="img/team/pm.jpeg" class="img-responsive img-team" height="600" width="600" />
                                            </div>
                                            <p class="team-name">Mrs. Shalini Kumari</p>
                                            <div class="ourteambtborder"></div>
                                            <p class="team-wichmagazine">Project Manager</p>
                                            <hr />
                                            <p class="team-contactdata"><i class="fa fa-phone"></i>+91 94707
                                                83172<br /><i class="fa fa-envelope"></i> sk255910@gmail.com </p>
                                        </div>
                                    </div>
                                </div>




                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div><br><br><br>












                <!-- .container-->
                <div class="quote-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="quote">
                                    <h2>Let's wow you!</h2>
                                    <p>Ready to take it a step further? Let’s start talking about your indoor power
                                        maintenance. We can help you.</p>
                                    <a class="btn" href="contact.html">Request a Quote</a>
                                </div>
                                <!--quote-->
                            </div>
                        </div>
                        <!-- .row-->
                    </div>
                    <!-- .container-->
                </div>
                <!-- .quote-section-->



                <div class="container">
                    <div class="row">

                    </div>
                    <!-- .row -->
                </div>
                <!-- .container-->

                <?php include 'footer.php'; ?>
                <!-- .container-->


            </div>
            <!--content-wrapper-->
        </div>
        <!-- offcanvas-pusher -->

        <?php include 'mobilemenu.php'; ?>
        <!-- offcanvas-menu end -->
    </div>
    <!-- #wrapper -->


    <!-- =========================================
		JAVASCRIPT
		========================================== -->

    <?php include 'foot.php'; ?>

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                async: false,
                url: "tenderdata.php",
                cache: false,
                success: function(html) {
                    $("#post-lists").append(html);
                }
            });
        });
    </script>


    <script type="text/javascript">
        //<![CDATA[
        var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" :
            "http://www.trustlogo.com/");
        document.write(unescape("%3Cscript src='" + tlJsHost +
            "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
        //]]>
    </script>
    <script language="JavaScript" type="text/javascript">
        TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_lg_222x54.png", "POSDV", "none");
    </script>

</body>

</html>