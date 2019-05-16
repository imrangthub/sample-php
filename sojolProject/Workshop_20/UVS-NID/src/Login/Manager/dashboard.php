

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
       // Home Views //
        if(!empty($_GET['page']) && $_GET['page']== 'career_content') {
            include_once('Manage/HomeViews/CareerManage/career_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'noticeBoard_content') {
            include_once('Manage/HomeViews/NoticeBoard/noticeBoard_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'nid_content') {
            include_once('Manage/HomeViews/NIDManagement/nid_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'slidShow_content') {
            include_once('Manage/HomeViews/SlidShow/slidShow_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'events_content') {
            include_once('Manage/HomeViews/UpcomingEvents/events_content.php');
        }
        //NID Management
        elseif(!empty($_GET['page']) && $_GET['page']== 'addNid_content') {
            include_once('Manage/NIDManagement/AddNewNID/addNid_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'blockSection_content') {
            include_once('Manage/NIDManagement/BlockUVSNIDsection/blockSection_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'editNid_content') {
            include_once('Manage/NIDManagement/EditNID/editNid_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'removeNid_content') {
            include_once('Manage/NIDManagement/RemovedNID/removeNid_content.php');
        }

        // Police Department
        elseif(!empty($_GET['page']) && $_GET['page']== 'addOfficer_content') {
            include_once('Manage/PoliceDepartment/AddOfficer/addOfficer_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'addThana_content') {
            include_once('Manage/PoliceDepartment/AddThana/addThana_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'deleteBlockOfficer_content') {
            include_once('Manage/PoliceDepartment/DeleteBlockOfficer/deleteBlockOfficer_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'removedBlockThana_content') {
            include_once('Manage/PoliceDepartment/RemoveBlockThana/removedBlockThana_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'updateOfficer_content') {
            include_once('Manage/PoliceDepartment/UpdateOfficer/updateOfficer_content.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page']== 'updateThana_content') {
            include_once('Manage/PoliceDepartment/UpdateThana/updateThana_content.php');
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
        elseif(!empty($_GET['page']) && $_GET['page']== 'setting_content') {
            include_once('SystemActivity/Profile/Settings/setting_content.php');
        }


        else{
            include_once('dashboardMain_content.php');
        }

        ?>
        <!-- /page content -->
        </div>
    </div>
<br/>
<!-- footer -->
<?php
include_once('dashboard_footer.php');
?>
<!-- End footer -->








