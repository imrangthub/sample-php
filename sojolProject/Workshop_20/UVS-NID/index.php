<?php
include_once('src/Login/Manager/Manage/HomeViews/SlidShow/slidShowCls.php');
include_once('src/Utility/debugs.php');
$debugHObj=new debugs();
$slidShowHObj=new slidShowCls();
$allData=$slidShowHObj->selectedImages();
$allImage=array_reverse($allData);




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
                    <li><a href="index.php">HOME</a></li>

                    <!-- End UVS-NID dropdown -->
                            <li><a href="views/NoticeBoard/index.php">NOTICE BOARD</a></li>
                            <li><a href="views/UpcomingEvent/index.php">UPCOMING EVENT</a> </li>
                    <li><a href="#">LOGIN</a>
                        <!--Login dropdown -->
                        <nav>
                            <li><a href="views/Login/NIDholder/index.php">Patient signIn</a> </li>
                <li><a href="#">Doctor signIn </a> </li>
                            <li><a href="views/Login/Manager/index.php">System manager</a> </li>


                        </nav>
                    </li>
                       <!-- End login dropdown -->
                    </li>
                    <li><a href="views/Location/index.php">LOCATION</a></li>
                    <li><a href="#">CAREER</a>
                        <!--Career dropdown -->
                        <nav>
                            <li><a href="views/Career/Circular/index.php">Circular</a> </li>
                            <li><a href="views/Career/Result/index.php">Result</a> </li>
                         </nav>
                     </li>
                <li><a href="views/LeftSideBarUVS-NID/AboutBangladesh/index.php">ABOUT US</a></li>
                      <!-- End login dropdown -->
                    </li>
                <!-- Search field  -->

<!--                <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search menuBarSearchField">-->
<!--                    <div class="input-group">-->
<!--                        <input type="text" class="form-control" placeholder="Search for...">-->
<!--                                    <span class="input-group-btn">-->
<!--                            <button class="btn btn-default" type="button">Go!</button>-->
<!--                        </span>-->
<!--                    </div>-->
<!--                </div>-->

                <!-- End Search field  -->
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
                        <label>Instruction:</label>
                        <ul>
                            <li><a href="views/LeftSideBarUVS-NID/IntroductionUVSNID/index.php">Introduction Health care.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/UserManual/index.php">User manual.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/WhyWhen/index.php">Why and when use.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/RolseRegulation/index.php">Roles and regulation.</a></li>
                        </ul>
                        <label>Service:</label>
                        <ul>
                            <li><a href="views/UVSNIDsection/PrimarySection/index.php">Domestic patient service.</a></li>
                            <li><a href="views/UVSNIDsection/SecondarySection/index.php">Foreign patient service.</a></li>
                            <li><a href="views/UVSNIDsection/CrimeSection/index.php">Support service.</a></li>
                        </ul>
                        <label>Information:</label>
                        <ul>
                            <li><a href="views/LeftSideBarUVS-NID/BangladeshGoverment/index.php">Government Health care.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/UsefulLink/index.php">Hospital link BD.</a></li>
                            <li><a href="views/LeftSideBarUVS-NID/AboutBangladesh/index.php">About us.</a></li>
                        </ul>


                    </div>
                </div>
            </div>
            <!-- End left sidebar -->

            <!-- Middle content -->
            <div class="col-md-9 col-sm-12">
                <div class="middleContent well">
                    <!-- Sub Middle content_1 -->

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
                                                    <?php
                                                    foreach($allImage as $singleImage){
                                                        $serial=1;
                                                        ?>
                                                        <li data-target="#myCarousel" data-slide-to="<?php $serial++ ?>"></li>
                                                        <?php
                                                    }
                                                    ?>

                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">

                                                    <div class="item active">
                                                        <img src="imageFiles/homePageSlidShowImages/slid.jpg" alt="Chania">
                                                        <div class="carousel-caption">
                                                            <h3>NID</h3>
                                                        </div>
                                                    </div>


                                                    <?php
                                                    foreach($allImage as $singleImage){
                                                        ?>
                                                        <div class="item">
                                                            <img src="imageFiles/slid.jpg">

<!--                                                            <img src="imageFiles/homePageSlidShowImages/--><?php //echo $singleImage['name']; ?><!--" alt="Slider Photo">-->
                                                            <div class="carousel-caption">
                                                                <p><?php echo $singleImage['view_text'];  ?></p>
                                                            </div>
                                                        </div>


                                                        <?php
                                                    }
                                                    ?>

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
                    <div style="font-family: 'Times New Roman'; padding: 8px">
                        <p>
                            Changes in the health care system coupled with increased infiltration and use of the Internet have resulted in heavier reliance on the Internet for disease and health education. Eighteen percent of American adult Internet users currently go online to find health care information for themselves and their loved ones, with health searches one of the most popular uses of the Internet. Existing medical and health websites, such as WebMD and Health Cloud, have recognized that they will have more visitors if they offer interactive community features such as discussion or Internet forums.
                        </p>
                        <p>
                            Social networking and online communities have become popular for virtually all business and personal interests and needs. This trend has increased the expectation for and reliance on peer education and support for many areas, including medical, to precede, supplement, or, in some cases, replace, that of professionals. In many cases, people do not use the best judgment when relying on online communities, but the consequences of poor information depends on what the information is and how it is used. Peer reviews and ratings in an online bookseller at worst lead to a poor purchasing decision with the option for a return. Medical information can have graver consequences when poor advice is taken or is erroneously applied; or when professional treatment is not sought.
                        </p>
                    </div>


                            <!-- End slid show -->
                        </div>

                    <!-- End sub Middle content_1 -->
                    <!-- Middle content right sidebar -->


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
 <?php
 include_once('index_footer.php');
 ?>
 <!-- End of footer part -->

 <!--JavaScript file -->
<!--Bootstrap JS-->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
<!--myJS-->
 <script src="js/HomePageJS.js"></script>






</body>
</html>
