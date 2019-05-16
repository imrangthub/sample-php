<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career | circular</title>
    <link rel="stylesheet" href="../../../css/bootstrapCSS/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../css/myCSS/styleBasicHome.css"/>
    <link rel="stylesheet" href="../../../css/myCSS/careerPageStyle.css"/>

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
                        <li><a href="../../../index.php">HOME</a></li>

                        <!-- End about dropdown -->
                        <li><a href="../../NoticeBoard/index.php">NOTICE BOARD</a></li>
                        <li><a href="../../UpcomingEvent/index.php">UPCOMING EVENT</a> </li>
                        <li><a href="#">LOGIN</a>
                            <!--Login dropdown -->
                            <nav>
                        <li><a href="../../Login/NIDholder/index.php">Patient</a> </li>
                        <li><a href="#">Doctor</a></li>
                        <li><a href="../../Login/Manager/index.php">System manager</a> </li>
                    </nav>
                    </li>
                    <!-- End login dropdown -->
                    </li>
                    <li><a href="../../Location/index.php">LOCATION</a></li>
                    <li><a href="#">CAREER</a>
                        <!--Career dropdown -->
                        <nav>
                    <li><a href="../../Career/Circular/index.php">Circular</a> </li>
                    <li><a href="../../Career/Result/index.php">Result</a> </li>
                    </nav>
                    </li>
                    <li><a href="../../../views/LeftSideBarUVS-NID/AboutBangladesh/index.php">ABOUT US</a></li>
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
                        <label>Instruction:</label>
                        <ul>
                            <li><a href="../../LeftSideBarUVS-NID/IntroductionUVSNID/index.php">Introduction Health care.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/UserManual/index.php">User manual.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/WhyWhen/index.php">Why and when use.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/RolseRegulation/index.php">Roles and regulation.</a></li>
                        </ul>
                        <label>Service</label>
                        <ul>
                            <li><a href="../../UVSNIDsection/PrimarySection/index.php">Domestic patient service.</a></li>
                            <li><a href="../../UVSNIDsection/SecondarySection/index.php">Foreign patient service.</a></li>
                            <li><a href="../../UVSNIDsection/CrimeSection/index.php">Support service.</a></li>
                        </ul>
                        <label>Information:</label>
                        <ul>
                            <li><a href="../../LeftSideBarUVS-NID/BangladeshGoverment/index.php">Government Health care.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/UsefulLink/index.php">Hospital link BD.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/AboutBangladesh/index.php">About us.</a></li>
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
                        <div class="col-md-12 col-sm-12">
                            <div class="middleSubContent well">

                                <div class="middleSubContent1 ">
                                    <h3>UVS-NID</h3>
                                    <h4>Universal verification system with National ID card</h4>
                                    <h4><u>Circular</u></h4>
                                    <hr>
                                </div>

                                <div class="middleSubContent2 well">
                                    <ul>
                                        <li>No current circular !</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!-- End sub Middle content_1 -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End content Section -->

<!-- Footer part -->
<?php
include_once('../../../index_footer.php');
?>
<!-- End of footer part -->



</body>
</html>
