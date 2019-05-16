<link rel="stylesheet" href="../../../../../../css/myCSS/managerOperationStyle.css"/>
<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h3>Bangladesh Police Officer.</h3>


    <!-- End top tiles -->

    <!-- Add photo section    -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Search by Officer zip code:</h2>
                    <div class="storeMsg">
                        <?php

                        if(!empty($_SESSION['searchMsg'])){
                            echo $_SESSION['searchMsg'];
                            unset($_SESSION['searchMsg']);
                        }
                        if(!empty($_SESSION['operationMsg'])){
                            echo $_SESSION['operationMsg'];
                            unset($_SESSION['operationMsg']);
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

                    <form action="../../../views/Login/Manager/Manage/PoliceDepartment/DeleteBlockOfficer/deleteBlockOfficer.php?action=search_officer" method="post" enctype="multipart/form-data">


                        <div style="position: relative; left: 378px;">
                        </div><br>
                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="officerZipCode">Officer zip Code:<span class="required"></span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input type="number" id="officerZipCode" class="form-control col-md-7 col-xs-12"  name="officerZipCode" placeholder="Police thana or station registration number"/>
                            </div>
                            <!-- profile pic start      -->
                            <div class="clearfix"></div><br/>


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
        <!-- End search section    -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Removed or Block Police station / Thana:</h2>


                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">


                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="thanaCode">Officer Zip Code<span class="required"></span></label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <label class="col-md-3 col-sm-3 col-xs-12" for="thanaCode">:
                                    <?php

                                    if(!empty($_SESSION['officerZipCode'])){
                                        echo $_SESSION['officerZipCode'];
                                        $thanaCode= $_SESSION['officerZipCode'];
                                        unset($_SESSION['officerZipCode']);
                                    }
                                    ?>
                                    <span class="required"></span></label>
                            </div>
                            <!-- profile pic start      -->
                            <div class="clearfix"></div><br/>
                            <label class="col-md-3 col-sm-3 col-xs-12" for="thanaName">Thana Name:<span class="required">*</span></label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <label class="col-md-3 col-sm-3 col-xs-12" for="thanaCode">:
                                    <?php

                                    if(!empty($_SESSION['officerZipCode'])){
                                        echo $_SESSION['officerZipCode'];
                                        unset($_SESSION['officerZipCode']);
                                    }
                                    ?>
                                    <span class="required"></span></label>
                            </div>
                            <div class="clearfix"></div><br/>
                            <label class="col-md-3 col-sm-3 col-xs-12" for="districe">Email:<span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <label class="col-md-3 col-sm-3 col-xs-12" for="thanaCode">:
                                    <?php

                                    if(!empty($_SESSION['thanaCode'])){


                                        unset($_SESSION['thanaCode']);


                                    }

                                    ?>
                                    <span class="required"></span></label>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">


                                    <a href="../../../views/Login/Manager/Manage/PoliceDepartment/DeleteBlockOfficer/deleteBlockOfficer.php?operation=delete_officer"><button  class="btn btn-danger">Delete</button></a>
                                    <a href="../../../views/Login/Manager/Manage/PoliceDepartment/DeleteBlockOfficer/deleteBlockOfficer.php?operation=block_officer"><button class="btn btn-warning">Block</button></a>
                                    <a href="../../../views/Login/Manager/Manage/PoliceDepartment/DeleteBlockOfficer/deleteBlockOfficer.php?operation=active_officer"><button  class="btn btn-success">Active</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End update section    -->



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

