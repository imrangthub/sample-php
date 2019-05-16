<?php
if(isset($_GET['page']) && !empty($_GET['page']) ) {
    ?>

    <?php
    $page = explode('_', $_GET['page']);
    $folder = $page[0];
    $content = $page[0] . '_' . $page[1];
    $page_header = $content . '_header.php';
    $page_content = $content . '_content.php';
    $page_footer = $content . '_footer.php';

    ?>

    <?php
    include_once $folder . '/' . $page_header;
    ?>
    <body class="nav-md">

    <div class="container body">


        <div class="main_container">
            <?php
            include_once 'navigation.php';
            ?>

            <!-- top navigation -->
            <?php
            include_once 'top_nav.php';
            ?>
            <!-- /top navigation -->


            <!-- page content -->
            <?php
            include_once $folder . '/' . $page_content;
            ?>
            <!-- /page content -->

        </div>

    </div>
    <?php
    include_once $folder . '/' . $page_footer;
    ?>

    <?php

}
else {
?>
    <?php
    include_once 'index_header.php';
    ?>
    <body class="nav-md">

    <div class="container body">


        <div class="main_container">
            <?php
            include_once 'navigation.php';
            ?>

            <!-- top navigation -->
            <?php
            include_once 'top_nav.php';
            ?>
            <!-- /top navigation -->


            <!-- page content -->
            <?php
            include_once 'main_content.php';
            ?>
            <!-- /page content -->

        </div>

    </div>
    <?php
    include_once 'index_footer.php';
    ?>




    <?php } ?>
