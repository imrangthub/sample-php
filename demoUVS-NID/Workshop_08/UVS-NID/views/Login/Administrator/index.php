<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NID holder | Administrator</title>
    <link rel="stylesheet" href="../../../css/bootstrapCSS/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../css/myCSS/styleBasicHome.css"/>
    <!--    <link rel="stylesheet" href="../../css/myCSS/styleNewBasic.css"/>-->

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
                        <li><a href="../../../index.php">Home</a></li>
                        <li><a href="../../UVSNIDsection/index.php">UVS-NID section</a>
                            <!--About dropdown -->
                            <nav>
                        <li><a href="../../UVSNIDsection/PrimarySection/index.php">Primary section</a> </li>
                        <li><a href="../../UVSNIDsection/SecondarySection/index.php">Secondary section</a> </li>
                        <li><a href="../../UVSNIDsection/CrimeSection/index.php">Crime section</a> </li>
                    </nav>
                    </li>
                    <!-- End about dropdown -->
                    <li><a href="../../News/index.php">News</a></li>
                    <li><a href="../../UpcomingEvent/index.php">Upcoming event</a> </li>
                    <li><a href="#">Login</a>
                        <!--Login dropdown -->
                        <nav>
                    <li><a href="../../Login/NIDholder/index.php">NID holder</a> </li>
                    <li><a href="#">Government agency.</a>
                        <nav>
                    <li><a href="../GovernmentAgency/PoliceDepartment/index.php">Police Department</a></li>
                    <li><a href="../../Login/GovernmentAgency/RAB/index.php">RAB</a></li>
                    </nav>
                    </li>
                    <li><a href="../../Login/Manager/index.php">System manager</a> </li>
                    </nav>
                    </li>
                    <!-- End login dropdown -->
                    </li>
                    <li><a href="../../Location/index.php">Location</a></li>
                    <li><a href="#">Career</a>
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
                            <li><a href="../../LeftSideBarUVS-NID/RolesRegulation/index.php">Roles and regulation.</a></li>
                            <li>
                                <label><a href="../../UVSNIDsection/index.php">About:</a></label>
                                <ul>
                                    <li><a href="../../UVSNIDsection/PrimarySection/index.php">Primary section.</a></li>
                                    <li><a href="../../UVSNIDsection/SecondarySection">Secondary section.</a></li>
                                    <li><a href="../../UVSNIDsection/CrimeSection/index.php">Creame section.</a></li>
                                </ul>
                            </li>
                            <li><a href="../../LeftSideBarUVS-NID/BangladeshGoverment/index.php">Bangladesh Government.</a></li>
                            <li><a href="../../LeftSideBarUVS-NID/UsefulLink/index.php">Useful Government link.</a></li>
                            <li><a href="index.php">About Bangladesh.</a></li>
                        </ul>


                    </div>
                </div>
            </div>
            <!-- End left sidebar -->
            <!-- Login content -->
            <div class="col-md-9 col-sm-12 ">
                <div class="middleContent well">
                    <form class="form-horizontal" action="logOns.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Enter your NID number." name="emailID">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-default" value="Sign in">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- End login content -->

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



</body>
</html>
