<link rel="stylesheet" href="../../../../../../css/myCSS/managerOperationStyle.css"/>
<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h3>Update National ID card Information</h3>


    <!-- End top tiles -->

    <!-- Add photo section    -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Search by ID Number</h2>
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

                    <form action="../../../views/Login/Manager/Manage/NIDManagement/EditNID/update.php?action=edit_Nid" method="post" enctype="multipart/form-data">


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




        <!-- Edit section    -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update</h2>
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

                        <form action="../../../views/Login/Manager/Manage/NIDManagement/EditNID/update.php?action=update_Nid" method="post" enctype="multipart/form-data">


                            <div style="position: relative; left: 378px;">
                            </div><br>
                            <div class="item form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12" for="nidNo">ID No:<span class="required">*</span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input type="number" id="nidNo" class="form-control col-md-7 col-xs-12"  name="nidNo" placeholder="National ID card number"/>
                                </div>
                                <!-- profile pic start      -->
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="idHolderName">Name:<span class="required">*</span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input id="idHolderName" class="form-control col-md-7 col-xs-12"  name="idHolderName" placeholder="Card holder name"/>
                                </div>
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="fatherName">Father Name:<span class="required">*</span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input id="fatherName" class="form-control col-md-7 col-xs-12"  name="fatherName" placeholder="Father name"/>
                                </div>
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="motherName">Mother Name:<span class="required">*</span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input id="motherName" class="form-control col-md-7 col-xs-12"  name="motherName" placeholder="Mother name"/>
                                </div>
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="dateOfBirth">Date of Birth:<span class="required">*</span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                    <input id="dateOfBirth" class="form-control col-md-7 col-xs-12"  name="dateOfBirth" placeholder="Date of birth"/>
                                </div>

                                <!--ID card Opposite part -->

                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="villageRoad">Village / Road:<span class="required"></span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <input id="villageRoad" class="form-control col-md-7 col-xs-12"  name="villageRoad" placeholder="Village or road"/>
                                </div>
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="postOffice">Post Office:<span class="required"></span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <input id="postOffice" class="form-control col-md-7 col-xs-12"  name="postOffice" placeholder="Post office"/>
                                </div>
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="postCode">Post Code:<span class="required"></span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <input type="number" id="postCode" class="form-control col-md-7 col-xs-12"  name="postCode" placeholder="Post code"/>
                                </div>

                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="thana">Thana / Upazila:<span class="required"></span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <input type="number" id="thana" class="form-control col-md-7 col-xs-12"  name="thana" placeholder="Thana / Upazilas"/>
                                </div>
                                <div class="clearfix"></div><br/>
                                <label class="col-md-3 col-sm-3 col-xs-12" for="districts">District:<span class="required"></span>
                                </label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <input type="number" id="districts" class="form-control col-md-7 col-xs-12"  name="districts" placeholder="Districts"/>
                                </div>

                                <div class="clearfix"></div><br/>
                                <div class="item form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-12" for="photo">Photo<span class="required">*</span>
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input id="file-0a" class="file" type="file" name="photo">
                                    </div>
                                </div>
                                <div class="clearfix"></div><br/>
                                <div class="item form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-12" for="photo">Signature:<span class="required">*</span>
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input id="file-0a" class="file" type="file" name="signature">
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

        </div>
    </div>
    </div>


        <!-- End Edit section    -->
