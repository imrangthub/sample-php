<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UVS-NID | crime</title>
    <link rel="stylesheet" href="../../../css/bootstrapCSS/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../css/myCSS/styleBasicHome.css"/>
    <link rel="stylesheet" href="../../../css/myCSS/sectionInformationViewsStyle.css"/>

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
                        <li><a href="../../UVSNIDsection/index.php">UVS-NID SECTION</a>
                            <!--About dropdown -->
                            <nav>
                        <li><a href="../../UVSNIDsection/PrimarySection/index.php">Primary section</a> </li>
                        <li><a href="../../UVSNIDsection/SecondarySection/index.php">Secondary section</a> </li>
                        <li><a href="../../UVSNIDsection/CrimeSection/index.php">Crime section</a> </li>
                    </nav>
                    </li>
                    <!-- End about dropdown -->
                    <li><a href="../../NoticeBoard/index.php">NOTICE BOARD</a></li>
                    <li><a href="../../UpcomingEvent/index.php">UPCOMING EVENT</a> </li>
                    <li><a href="#">LOGIN</a>
                        <!--Login dropdown -->
                        <nav>
                    <li><a href="../../Login/NIDholder/index.php">NID holder</a> </li>
                    <li><a href="#">Government agency.</a>
                        <nav>
                    <li><a href="../../Login/GovernmentAgency/PoliceDepartment/index.php">Police Department</a></li>
                    <li><a href="../../Login/GovernmentAgency/RAB/index.php">RAB</a></li>
                    </nav>
                    </li>
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
                            <li><a href="../../LeftSideBarUVS-NID/IntroductionUVSNID/index.php">Introduction of UVS-NID.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/UserManual/index.php">User manual.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/WhyWhen/index.php">Why and when use.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/RolseRegulation/index.php">Roles and regulation.</a></li>
                        </ul>
                        <label>About:</label>
                        <ul>
                            <li><a href="../../UVSNIDsection/PrimarySection/index.php">Primary section.</a></li>
                            <li><a href="../../UVSNIDsection/SecondarySection/index.php">Secondary section.</a></li>
                            <li><a href="../../UVSNIDsection/CrimeSection/index.php">Creame section.</a></li>
                        </ul>
                        <label>Information:</label>
                        <ul>
                            <li><a href="../../LeftSideBarUVS-NID/BangladeshGoverment/index.php">Bangladesh Government.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/UsefulLink/index.php">Useful Government link.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/AboutBangladesh/index.php">About Bangladesh.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End left sidebar -->

            <!-- Middle content -->
            <div class="col-md-9 col-sm-12">
                <div class="middleContent well">
                    <!-- show data -->
                    <div class="bodyContent">
                        <div class="pageContent">
                            <div class="uvsnidHeading">
                                <h4>UVS-NID</h4>
                                <h5>Universal verification system with National ID card.</h5>
                                <h5>About Crime section.</h5>
                            </div>
                            <div class="dataSection">
                                This is Main part of UVS-NIS system and this section is velidity by government different agency like police department.
                            </div>

                        </div>
                    </div>

                    <!-- End Show data -->
                </div>
            </div>
            <!-- End middle content -->
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
