<link rel="stylesheet" href="../../../../../../css/myCSS/managerOperationStyle.css"/>
<?php
include_once('../../../src/Login/Manager/Manage/HomeViews/SlidShow/slidShowCls.php');
include_once('../../../src/Utility/debugs.php');
$debugObj=new debugs();
$slidShowObj=new slidShowCls();
$allData=$slidShowObj->index();
$allImages=array_reverse($allData);

//$debugObj->debug($allImages);
//die();

?>
<!-- page content -->
<div class="right_col" role="main">

    <!-- top tiles -->


    <h3>Slid show Management</h3>


    <!-- End top tiles -->

    <!-- Add photo section    -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add slider photo</h2>
                    <div class="storeMsg">
                        <?php

                        if(!empty($_SESSION['storeMsg'])){
                            echo $_SESSION['storeMsg'];
                            unset($_SESSION['storeMsg']);
                        }
                        if(!empty($_SESSION['storeErrorMsg'])){
                            echo $_SESSION['storeErrorMsg'];
                            unset($_SESSION['storeErrorMsg']);
                        }
                        if(!empty($_SESSION['updateMsg'])){
                            echo $_SESSION['updateMsg'];
                            unset($_SESSION['updateMsg']);
                        }
                        if(!empty($_SESSION['updateErrorMsg'])){
                            echo $_SESSION['updateErrorMsg'];
                            unset($_SESSION['updateErrorMsg']);
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

                    <form action="../../../views/Login/Manager/Manage/HomeViews/SlidShow/slidShowOperation.php?action=store_sliderPhoto" method="post" enctype="multipart/form-data">


                        <div style="position: relative; left: 378px;">
                        </div><br>
                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="phTitle">Photo Title <span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input id="phTitle" class="form-control col-md-7 col-xs-12"  name="title" placeholder="photo title"/>
                            </div>
                        <!-- profile pic start      -->
                            <div class="clearfix"></div><br/>
                            <label class="col-md-3 col-sm-3 col-xs-12" for="viewText">View Text<span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <!-- <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="Name of the profilepic" required="required" type="text"> -->
                                <input id="viewText" class="form-control col-md-7 col-xs-12"  name="viewText" placeholder="view text"/>
                            </div>
                            <div class="clearfix"></div><br/>
                        <div class="item form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12" for="name">Upload a picture <span class="required">*</span>
                            </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <input id="file-0a" class="file" type="file" name="image">

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
                        <h2>Manage slider Images.</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- Table start -->

                        <table id="datatable-fixed-header" class="table table-striped  table-bordered">
                            <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>View Text</th>
                                <th>Stored At</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $serialNo=1;
                            foreach($allImages as $singleImage){
                            ?>
                            <tr>
                                <td><?php echo $serialNo++; ?></td>
                                <td><?php echo $singleImage['title']; ?></td>
                                <td><img src="../../../imageFiles/homePageSlidShowImages/<?php echo $singleImage['name']; ?>" width="200p" height="180"</td>
                                <td><?php echo $singleImage['view_text']; ?></td>
                                <td><?php echo $singleImage['created_at']; ?></td>
                                <td>
                                <!--Operation -->
                                    <form action="../../../views/Login/Manager/Manage/HomeViews/SlidShow/slidShowOperation.php?action=edit_sliderPhoto" method="post">
                                        <input type="hidden" name="id" value="<?php echo $singleImage['id'] ?>"/>
                                        <button type="submit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        </form>
                                    <form action="../../../views/Login/Manager/Manage/HomeViews/SlidShow/slidShowOperation.php?action=active_sliderPhoto" method="post">
                                        <input type="hidden" name="id" value="<?php echo $singleImage['id'] ?>"/>
                                        <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-check-square"></i> Active</button>
                                    </form>
                                    <form action="../../../views/Login/Manager/Manage/HomeViews/SlidShow/slidShowOperation.php?action=block_sliderPhoto" method="post">
                                        <input type="hidden" name="id" value="<?php echo $singleImage['id'] ?>"/>
                                        <button type="submit"  class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Blocked</button>
                                    </form>
                                    <form action="../../../views/Login/Manager/Manage/HomeViews/SlidShow/slidShowOperation.php?action=delete_sliderPhoto" method="post">
                                        <input type="hidden" name="id" value="<?php echo $singleImage['id'] ?>"/>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Remove</button>
                                    </form>

                                    <!--End Operation -->
                                </td>
                            </tr>
                            <?php
                            }
                            ?>


                            </tbody>
                            </table>

                            <!-- Table End -->

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

