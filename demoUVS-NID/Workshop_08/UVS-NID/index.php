<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrapCSS/bootstrap.min.css" />
    <link rel="stylesheet" href="css/myCSS/styleBasicHome.css" />

</head>

<body>
 <!-- Header section -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="header well">


                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

<!-- MenuBar section -->
<section>
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="menuBar">

                <nav>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="views/UVSNIDsection/index.php">UVS-NID section</a>
                    <!--UVS-NID dropdown -->
                        <nav>
                            <li><a href="views/UVSNIDsection/PrimarySection/index.php">Primary section</a> </li>
                            <li><a href="views/UVSNIDsection/SecondarySection/index.php">Secondary section</a> </li>
                            <li><a href="views/UVSNIDsection/CrimeSection/index.php">Crime section</a> </li>
                        </nav>
                    </li>
                    <!-- End UVS-NID dropdown -->
                            <li><a href="views/News/index.php">News</a></li>
                            <li><a href="views/UpcomingEvent/index.php">Upcoming event</a> </li>
                    <li><a href="#">Login</a>
                        <!--Login dropdown -->
                        <nav>
                            <li><a href="views/Login/NIDholder/index.php">NID holder</a> </li>
                <li><a href="#">Government agency.</a>
                    <nav>
                <li><a href="views/Login/GovernmentAgency/PoliceDepartment/index.php">Police Department</a></li>
                <li><a href="views/Login/GovernmentAgency/RAB/index.php">RAB</a></li>
                </nav>
                </li>
                            <li><a href="views/Login/Manager/index.php">System manager</a> </li>


                        </nav>
                    </li>
                       <!-- End login dropdown -->
                    </li>
                    <li><a href="views/Location/index.php">Location</a></li>
                    <li><a href="#">Career</a>
                        <!--Career dropdown -->
                        <nav>
                            <li><a href="views/Career/Circular/index.php">Circular</a> </li>
                            <li><a href="views/Career/Result/index.php">Result</a> </li>
                         </nav>
                     </li>
                      <!-- End login dropdown -->
                    </li>
                </nav>

            </div>
        </div>
        </div>
    </div>
</section>
 <!-- End menuBar section -->

 <!-- Content Section -->
<section>
    <div class="container">
        <div class="row">
            <!-- Left sidebar -->
            <div class="col-md-3 col-sm-12">
                <div class="left_sidebar well">
                    <div class="leftSubSidebar1">
                        <label>UVS-NID:</label>
                        <ul>
                            <li><a href="views/LeftSideBarUVS-NID/IntroductionUVSNID/index.php">Introduction of UVS-NID.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/UserManual/index.php">User manual.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/WhyWhen/index.php">Why and when use.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/RolesRegulation/index.php">Roles and regulation.</a></li>
                            <li>
                                <label><a href="views/UVSNIDsection/index.php">About:</a></label>
                                <ul>
                                    <li><a href="views/UVSNIDsection/PrimarySection/index.php">Primary section.</a></li>
                                    <li><a href="views/UVSNIDsection/SecondarySection/index.php">Secondary section.</a></li>
                                    <li><a href="views/UVSNIDsection/CrimeSection/index.php">Creame section.</a></li>
                                </ul>
                            </li>
                            <li><a href="views/LeftSideBarUVS-NID/BangladeshGoverment/index.php">Bangladesh Government.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/UsefulLink/index.php">Useful Government link.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/AboutBangladesh/index.php">About Bangladesh.</a></li>
                        </ul>


                    </div>
                </div>
            </div>
            <!-- End left sidebar -->

            <!-- Middle content -->
            <div class="col-md-9 col-sm-12">
                <div class="middleContent well">
                    <!-- Sub Middle content_1 -->
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="middleSubContent1 well">
                                <!--  NID form part -->
                                <div>
                                    <form class="form-horizontal" action="views/Verify/verifications.php" method="get">
                                        <div class="form-group">
                                            <label for="inputNidNumber" class="col-sm-2 control-label">NID No:</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="nid_number" id="inputNidNumber" placeholder="Enter NID number" required/>
                                                <button type="submit" class="submitButton" style="vertical-align:middle;"><span>Verify Now </span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End NID form part -->

                            <!-- slid show -->
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="slidShow well">
                                        <div>

                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">

                                                    <div class="item active">
                                                        <img src="imageFiles/indexSlidShowImages/nid1.jpg" alt="Chania">
                                                        <div class="carousel-caption">
                                                            <h3>Chania</h3>
                                                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="imageFiles/indexSlidShowImages/farmer.jpg" alt="Chania">
                                                        <div class="carousel-caption">
                                                            <h3>Chania</h3>
                                                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="imageFiles/indexSlidShowImages/desi-girls1.jpg" alt="Flower">
                                                        <div class="carousel-caption">
                                                            <h3>Flowers</h3>
                                                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="imageFiles/indexSlidShowImages/fising2.jpg" alt="Flower">
                                                        <div class="carousel-caption">
                                                            <h3>sweet girl</h3>
                                                            <p>Beatiful flowers in Kolymbari, Crete.</p>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End slid show -->
                        </div>

                    <!-- End sub Middle content_1 -->
                    <!-- Middle content right sidebar -->
                    <div class="col-md-4 col-sm-12">
                        <div class="middleContentMainRightSidebar well">
                            <!-- Sub Right_1 -->
                            <div class="RightSubContent1">
                                <h4 style="text-align:center; font-family:'Berlin Sans FB Demi'">Up cumming event</h4>

                                <div class="RightSubContent1_1">
                                    <marquee scrollamount=2 direction=up loop="1" behavior="slide" width=100% height=100%>
                                <ul>
                                    <li><a href="views/UpcomingEvent/index.php">No event.</a></li>

                                </ul>
                                        </marquee>
                                </div>

                            </div>
                            <!-- Sub Right_2 -->
                            <div class="RightSubContent2">
                                <h4 style="text-align:center; font-family:'Berlin Sans FB Demi'">News</h4>

                                <div class="RightSubContent2_1">
                                    <marquee scrollamount=2 direction=up loop="1" behavior="slide" width=100% height=100%>

                                        <ul>
                                            <li><a href="views/News/collectedPassword.php">Collected Password.</a></li>
                                            <li><a href="views/News/updateInformation.php">Update Information.</a></li>
                                            <li><a href="views/News/smartCard.php">Smart card.</a></li>
                                        </ul>

                                    </marquee>
                                </div>

                            </div>
                            <!-- Sub Right_3 -->
                            <div class="RightSubContent3">
                                <label>News</label>
                                <ul>
                                    <li>Start using Master card</li>
                                    <li>Less cost Master card</li>
                                </ul>
                            </div>
                            <!-- end -->

                        </div>
                    </div>

                    <!-- End Middle content right sidebar -->
                    </div>
                </div>
            </div>
            <!-- End middle content -->
        </div>
    </div>

</section>
 <!-- End content Section -->

 <!-- Footer part -->
 <footer>
     <div class="container">
         <div class="row">
             <div class="col-sm-12 col-md-12">
                 <div class=" footer well">
                     <div class="footerSub1">
                         Final semester project<br/>
                         Daffodil International University.
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- End of footer part -->

 <!--JavaScript file -->
<!--Bootstrap JS-->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
<!--myJS-->
 <script src="js/HomePageJS.js"></script>






</body>
</html>
