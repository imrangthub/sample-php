<link rel="stylesheet" href="../../../../../../css/myCSS/managerOperationStyle.css"/>
<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h3>Account Setting.</h3>

    <!-- End top tiles -->

    <!-- Emails change section    -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Change Email:</h2>
                    <div class="storeMsg">
                        <?php

                        if(!empty($_SESSION['changeEmailMsg'])){
                            echo $_SESSION['changeEmailMsg'];
                            unset($_SESSION['changeEmailMsg']);
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

                    <form action="../../../views/Login/Manager/SystemActivity/Profile/Settings/settings.php?action=change_email" method="post">


                        <div style="position: relative; left: 378px;">
                        </div><br>
                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="currentEmail">Current Email<span class="required"></span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input type="email" id="currentEmail" class="form-control col-md-7 col-xs-12"  name="currentEmail" placeholder="Enter your current email"/>
                            </div>
                            <!-- profile pic start      -->
                            <div class="clearfix"></div><br/>
                            <label class="col-md-3 col-sm-3 col-xs-12" for="newEmail">New Email:<span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input type="email" id="newEmail" class="form-control col-md-7 col-xs-12"  name="newEmail" placeholder="Enter New Email"/>
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
        <!-- End section    -->
        <!-- Password change section    -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Change Password:</h2>
                        <div class="storeMsg">
                            <?php

                            if(!empty($_SESSION['changePasswordMsg'])){
                                echo $_SESSION['changePasswordMsg'];
                                unset($_SESSION['changePasswordMsg']);
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

                        <form action="../../../views/Login/Manager/SystemActivity/Profile/Settings/settings.php?action=change_password" method="post">


                            <div style="position: relative; left: 378px;">
                            </div><br>
                            <div class="item form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12" for="currentPassword">Current Password<span class="required"></span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input type="password" id="currentPassword" class="form-control col-md-7 col-xs-12"  name="currentPassword" placeholder="Enter your current email"/>
                                </div>
                                <!-- profile pic start      -->
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="newPassword">New Password:<span class="required">*</span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input type="password" id="newPassword" class="form-control col-md-7 col-xs-12"  name="newPassword" placeholder="Enter New Email"/>
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
            <!-- End password section    -->
            <!-- Password change section    -->

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Deactivate Account</h2>
                            <div class="storeMsg">
                                <?php

                                if(!empty($_SESSION['deactivateAccMsg'])){
                                    echo $_SESSION['deactivateAccMsg'];
                                    unset($_SESSION['deactivateAccMsg']);
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

                            <form action="../../../views/Login/Manager/SystemActivity/Profile/Settings/settings.php?action=deactivate_account" method="post">


                                <div style="position: relative; left: 378px;">
                                </div><br>
                                <div class="item form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required"></span>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                        <input type="email" id="email" class="form-control col-md-7 col-xs-12"  name="email" placeholder="Enter your current email"/>
                                    </div>
                                    <!-- profile pic start      -->
                                    <div class="clearfix"></div><br/>
                                    <label class="col-md-3 col-sm-3 col-xs-12" for="password">Password:<span class="required">*</span>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                        <input type="password" id="password" class="form-control col-md-7 col-xs-12"  name="password" placeholder="Enter New Email"/>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button id="send" type="submit" class="btn btn-warning">Deactivate</button>
                                        </div>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End password section    -->



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

