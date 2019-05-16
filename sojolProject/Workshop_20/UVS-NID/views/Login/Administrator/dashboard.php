
<?php
include_once('dashboard_header.php');
?>
<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- navigation -->
        <?php
        include_once('navigation.php');
        ?>
        <!-- End navigation -->

        <!-- top navigation -->
        <?php
        include_once('top_nav.php');
        ?>
        <!-- /top navigation -->

        <!-- page content -->
        <?php
        // System console routing.....
        //System View Controls
        if(!empty($_GET['page']) && $_GET['page']=='upcomingEventControls_content'){
            include_once('UVSNIDSystemConsole/SystemViewControls/UpcomingEvents/upcomingEvent_content.php');
        }
        elseif(!empty($_GET['page']) &&$_GET['page']=='newsControls_content'){
            include_once('UVSNIDSystemConsole/SystemViewControls/NewsControls/newsControls_content.php');
        }
        elseif(!empty($_GET['page']) &&$_GET['page']=='careerControls_content'){
            include_once('UVSNIDSystemConsole/SystemViewControls/CareerControls/careerControls_content.php');
        }
        elseif(!empty($_GET['page']) &&$_GET['page']=='slidShowControls_content'){
            include_once('UVSNIDSystemConsole/SystemViewControls/SlidShowControls/slidShowControls_content.php');
        }
        // Operation controls
        elseif(!empty($_GET['page']) &&$_GET['page']=='verifyControl_content'){
            include_once('UVSNIDSystemConsole/OperationControls/Verifying/VerifyingControls_content.php');
        }
        elseif(!empty($_GET['page']) &&$_GET['page']=='managerLoginControl_content'){
            include_once('UVSNIDSystemConsole/OperationControls/ManagerLogin/managerLoginControls_content.php');
        }
        elseif(!empty($_GET['page']) &&$_GET['page']=='AgencyLoginControl_content'){
            include_once('UVSNIDSystemConsole/OperationControls/AgencyLogin/agencyLoginControls_content.php');
        }
        // Management controls
        elseif(!empty($_GET['page']) &&$_GET['page']=='currentManagerList_content'){
            include_once('UVSNIDSystemConsole/ManagementControls/CurrentManagerList/currentManagerList_content.php');
        }
        elseif(!empty($_GET['page']) &&$_GET['page']=='removeBlockManager_content'){
            include_once('UVSNIDSystemConsole/ManagementControls/RemoveBlockManager/removeBlockManager_content.php');
        }
        elseif(!empty($_GET['page']) &&$_GET['page']=='managerDashboard_content'){
            include_once('UVSNIDSystemConsole/ManagementControls/ManagerDahsboard/managerDahaboard_content.php');
        }
        // Agency controls
        elseif(!empty($_GET['page']) &&$_GET['page']=='policeDepartment_content'){
            include_once('UVSNIDSystemConsole/AgencyControls/PoliceDepartment/policeDepartmentControls_content.php');
        }
        // System Communication
        elseif(!empty($_GET['page']) && $_GET['page']== 'inbox_content') {
            include_once('SystemActivity/SystemCommunication/Inbox/inbox_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'sendMessage_content') {
            include_once('SystemActivity/SystemCommunication/SendMessage/sendMessage_content.php');
        }
        // Profile Manage
        elseif(!empty($_GET['page']) && $_GET['page']== 'viewProfile_content') {
            include_once('SystemActivity/Profile/ViewProfile/viewProfile_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'updateProfile_content') {
            include_once('SystemActivity/Profile/UpdateProfile/updateProfile_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'changePassword_content') {
            include_once('SystemActivity/Profile/ChangePassword/changePassword_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'deactivateAccount_content') {
            include_once('SystemActivity/Profile/DeactivateAccount/deactivateAccount_content.php');
        }
        else{
            include_once('dashboardMain_content.php');
        }
        ?>
        <!-- /page content -->
        </div>
    </div>

<!-- footer -->
<?php
include_once('dashboard_footer.php');
?>
<!-- End footer -->






