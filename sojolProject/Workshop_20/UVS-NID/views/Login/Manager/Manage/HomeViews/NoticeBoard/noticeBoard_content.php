<link rel="stylesheet" href="../../../../../../css/myCSS/managerOperationStyle.css"/>
<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h3>Notice Board Management</h3>


    <!-- End top tiles -->

    <!-- Add photo section    -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add new Notice</h2>
                    <div class="storeMsg">
                        <?php

                        if(!empty($_SESSION['storeMsg'])){
                            echo $_SESSION['storeMsg'];
                            unset($_SESSION['storeMsg']);
                        }
                        ?>
                    </div>

                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <form action="../../../views/Login/Manager/Manage/HomeViews/NoticeBoard/store.php?action=store_notice" method="post" enctype="multipart/form-data">


                        <div style="position: relative; left: 378px;">
                        </div><br>
                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="noticeTitle">Notice Title <span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input id="noticeTitle" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Notice title"/>
                            </div>
                            <div class="clearfix"></div><br/>
                            <div class="item form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12" for="name">Upload file <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">

                                    <input id="file-0a" class="file" type="file" name="noticeFile">

                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                <button id="send" type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- End add photo section    -->

        <!-- Manage photo section    -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Manage Notice Files</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        Here you can manage your Notice files here

                    </div>
                </div>
                <!-- End add photo section    -->

                <div class="row">

                    <!-- add more row -->
                </div>
            </div>

            <!-- footer content -->
            <!--    <footer>-->
            <!--        <div class="">-->
            <!--            <p class="pull-right">www.uvs-nid.gov.bd<a> click</a>. for facebook |-->
            <!--                <span class="lead"> <i class="fa fa-paw"></i>Universal verification system with National ID card.</span>-->
            <!--            </p>-->
            <!--        </div>-->
            <!--        <div class="clearfix"></div>-->
            <!--    </footer>-->
            <!-- /footer content -->
        </div>
        <!-- /page content -->

