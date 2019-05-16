<link rel="stylesheet" href="../../../../../../css/myCSS/managerOperationStyle.css"/>
<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h3>Block UVS-NID Section</h3>


    <!-- End top tiles -->

    <!-- Add photo section    -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Search by ID Number</h2>
                    <div class="storeMsg">
                        <?php

                        if(!empty($_SESSION['blockMsg'])){
                            echo $_SESSION['blockMsg'];
                            unset($_SESSION['blockMsg']);
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

                    <form action="../../../views/Login/Manager/Manage/NIDManagement/BlockUVSNIDsection/blocked.php?action=search_nid" method="post" enctype="multipart/form-data">


                        <div style="position: relative; left: 378px;">
                        </div><br>
                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="nidNo">ID No:<span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input type="number" id="nidNo" class="form-control col-md-7 col-xs-12"  name="nidNo" placeholder="National ID card number"/>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                <button id="send" type="submit" class="btn btn-success">GO</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>




        <!-- Block section    -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Fully Block of National ID card.</h2>
                        <div class="storeMsg">
                            <?php

                            if(!empty($_SESSION['searchMsg'])){
                                echo $_SESSION['searchMsg'];
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

                        <form action="../../../views/Login/Manager/Manage/NIDManagement/BlockUVSNIDsection/blocked.php?action=fullyBlock_nid" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="reset" class="btn btn-primary">Cancel</button>
                                    <button id="send" type="submit" class="btn btn-success">Blocked ?</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- End Block section    -->
        <!-- Block section    -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Secondary section Blocked of UVS-NID.</h2>
                        <div class="storeMsg">
                            <?php

                            if(!empty($_SESSION['searchMsg'])){
                                echo $_SESSION['searchMsg'];
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

                        <form action="../../../views/Login/Manager/Manage/NIDManagement/BlockUVSNIDsection/blocked.php?action=secondaryBlock_nid" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="reset" class="btn btn-primary">Cancel</button>
                                    <button id="send" type="submit" class="btn btn-success">Blocked ?</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- End Block section    -->
        <!-- Block fully section    -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Crime section Blocked of UVS-NID</h2>
                        <div class="storeMsg">
                            <?php

                            if(!empty($_SESSION['searchMsg'])){
                                echo $_SESSION['searchMsg'];
                                unset($_SESSION['searchMsg']);
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

                        <form action="../../../views/Login/Manager/Manage/NIDManagement/BlockUVSNIDsection/blocked.php?action=crimeBlock_nid" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="reset" class="btn btn-primary">Cancel</button>
                                    <button id="send" type="submit" class="btn btn-success">Blocked ?</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- End Block section    -->

    </div>
</div>



