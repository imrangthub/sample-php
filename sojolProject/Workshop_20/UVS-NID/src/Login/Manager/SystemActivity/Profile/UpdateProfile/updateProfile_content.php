<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h1>Update Profile</h1>


    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Current profile:</h2>
                    <div class="storeMsg">
                        <?php

                        if(!empty($_SESSION['updateMsg'])){
                            echo $_SESSION['updateMsg'];
                            unset($_SESSION['updateMsg']);
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


                    <form class="form-horizontal" action="../../../views/Login/Manager/SystemActivity/Profile/UpdateProfile/updateProfile.php?action=update_profile" method="post">
                        <div class="signUpTableContent">
                            <table class="signUpTable">
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><input type="text" name="name" /></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>:</td>
                                    <td><input type="text" name="birthday" /></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>
                                        <input type="radio" name="gender" value="Male" /> Male.<br/>
                                        <input type="radio" name="gender" value="Female" /> Female.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="email" name="email" /></td>
                                </tr>
                                <tr>
                                    <td>Photo</td>
                                    <td>:</td>
                                    <td><input type="file" name="photo" /></td>
                                </tr>
                            </table>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                <a href="../../../views/Login/Manager/Manage/PoliceDepartment/UpdateProfile/updateProfile.php?action=update_profile"><button id="send" type="submit" class="btn btn-success">Submit</button></a>
                            </div>
                        </div>
                    </form>
            <!-- End update section    -->

    <div class="row">






        </div>

        <!-- End login content -->




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