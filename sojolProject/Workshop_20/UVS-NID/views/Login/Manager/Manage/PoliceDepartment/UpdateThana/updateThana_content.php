<link rel="stylesheet" href="../../../../../../css/myCSS/managerOperationStyle.css"/>
<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h3>Bangladesh Police station / Thana.</h3>


    <!-- End top tiles -->

    <!-- Add photo section    -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Search by Police station or Thana Code:</h2>

                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <form action="../../../views/Login/Manager/Manage/PoliceDepartment/UpdateThana/update.php?action=search_Thana" method="post" enctype="multipart/form-data">


                        <div style="position: relative; left: 378px;">
                        </div><br>
                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="thanaCode">Thana Code:<span class="required"></span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input type="number" id="thanaCode" class="form-control col-md-7 col-xs-12"  name="thanaCode" placeholder="Police thana or station registration number"/>
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
                        <h2>Update Police station or Thana:</h2>

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <form action="../../../views/Login/Manager/Manage/PoliceDepartment/UpdateThana/update.php?action=update_Thana" method="post" enctype="multipart/form-data">


                            <div style="position: relative; left: 378px;">
                            </div><br>
                            <div class="item form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12" for="thanaCode">Thana Code:<span class="required"></span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input type="number" id="thanaCode" class="form-control col-md-7 col-xs-12"  name="thanaCode" placeholder="Police thana or station registration number"/>
                                </div>
                                <!-- profile pic start      -->
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="thanaName">Thana Name:<span class="required">*</span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input id="thanaName" class="form-control col-md-7 col-xs-12"  name="thanaName" placeholder="Police Thana or station name"/>
                                </div>
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="districe">District:<span class="required">*</span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input id="districe" class="form-control col-md-7 col-xs-12"  name="districe" placeholder="District "/>
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

