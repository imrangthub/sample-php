<?php
session_start();
?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="dashboard.php" class="site_title"><!-- logo --><span>UVS-NID</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="../../../imageFiles/ManagerProfile/imran.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome to</span>
              <br/>
                <span>MD IMRAN HOSSAIN</span>
            </div>
            <span>============================</span>
        </div>
        <!-- /menu prile quick info -->

        <br/>


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>Managing area</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home Views <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="dashboard.php?page=events_content">Upcoming Event</a>
                            </li>
                            <li><a href="dashboard.php?page=noticeBoard_content">Notice board Manage</a>
                            </li>
                            </li>
                            <li><a href="dashboard.php?page=career_content">Career Manage</a>
                            </li>
                            <li><a href="dashboard.php?page=slidShow_content">Home page slid show</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-credit-card"></i>NID Management<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="dashboard.php?page=addNid_content">Add  new NID card</a>
                            </li>
                            <li><a href="dashboard.php?page=editNid_content">Edit NID card</a>
                            </li>
                            <li><a href="dashboard.php?page=removeNid_content">Removed NID card</a>
                            </li>
                            <li><a href="dashboard.php?page=blockSection_content">Block UVS-NID section</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-shield"></i>Police Department<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="dashboard.php?page=addThana_content">Add new Thana</a>
                            </li>
                            <li><a href="dashboard.php?page=updateThana_content">Update Thana</a>
                            </li>
                            <li><a href="dashboard.php?page=removedBlockThana_content">Remove / Block Thana</a>
                            </li>
                            <li><a href="dashboard.php?page=addOfficer_content">Add new Officer</a>
                            </li>
                            <li><a href="dashboard.php?page=updateOfficer_content">Update Officer</a>
                            </li>
                            <li><a href="dashboard.php?page=deleteBlockOfficer_content">Delete / Block Officer</a>
                            </li>

                        </ul>
                    </li>

                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="chartjs.html">Chart JS</a>
                            </li>
                            <li><a href="chartjs2.html">Chart JS2</a>
                            </li>
                            <li><a href="morisjs.html">Moris JS</a>
                            </li>
                            <li><a href="echarts.html">ECharts </a>
                            </li>
                            <li><a href="other_charts.html">Other Charts </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>SYSTEM ACTIVITY</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-meh-o"></i> Profile <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="dashboard.php?page=viewProfile_content">View Profile</a>
                            </li>
                            <li><a href="dashboard.php?page=updateProfile_content">Update Profile</a>
                            </li>
                            <li><a href="dashboard.php?page=setting_content">Settings</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-sitemap"></i>System Communication<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="dashboard.php?page=inbox_content">Inbox</a>
                            </li>
                            <li><a href="dashboard.php?page=sendMessage_content">Send Message</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="dashboard.php?page=setting_content">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>