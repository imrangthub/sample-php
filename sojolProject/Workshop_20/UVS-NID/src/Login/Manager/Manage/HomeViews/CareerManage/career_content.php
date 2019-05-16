<link rel="stylesheet" href="../../../../../../css/myCSS/managerOperationStyle.css"/>
<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h3>Career Management.</h3>


    <!-- End top tiles -->

    <!-- Add photo section    -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add circular files</h2>
                    <div class="storeMsg">
                        <?php

                        if(!empty($_SESSION['storeMsg1'])){
                            echo $_SESSION['storeMsg1'];
                            unset($_SESSION['storeMsg1']);
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

                    <form action="../../../views/Login/Manager/Manage/HomeViews/CareerManage/store.php?action=storeCircular" method="post" enctype="multipart/form-data">


                        <div style="position: relative; left: 378px;">
                        </div><br>
                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="careerTitle">Circular Title <span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input id="careerTitle" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Event title"/>
                            </div>

                            <div class="clearfix"></div><br/>
                            <div class="item form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12" for="name">Upload file <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">

                                    <input id="file-0a" class="file" type="file" name="eventFile">

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
        <!-- End Circular section    -->

        <!-- Manage Resulat section    -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Manage Result</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        Here you can manage your circular.

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Result files</h2>
                                <div class="storeMsg">
                                    <?php

                                    if(!empty($_SESSION['storeMsg2'])){
                                        echo $_SESSION['storeMsg2'];
                                        unset($_SESSION['storeMsg2']);
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

                                <form action="../../../views/Login/Manager/Manage/HomeViews/CareerManage/store.php?action=storeResult" method="post" enctype="multipart/form-data">


                                    <div style="position: relative; left: 378px;">
                                    </div><br>
                                    <div class="item form-group">
                                        <label class="col-md-3 col-sm-3 col-xs-12" for="resultTitle">Result sheet Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                            <input id="resultTitle" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Result sheet title"/>
                                        </div>

                                        <div class="clearfix"></div><br/>
                                        <div class="item form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12" for="name">Upload file <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <input id="file-0a" class="file" type="file" name="eventFile">

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
                                    <h2>Manage Result sheet</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    Here you can manage your Result sheet here

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

