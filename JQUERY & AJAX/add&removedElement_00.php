<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>jQuery |start </title>

    <!-- Bootstrap -->
    <link href="Templating_01/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="Templating_01/css/style.css">
    <script src="jquery.min.js"></script>

    <style>
        .para {
            height: 300px;
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background: #fff;
            border: 1px solid #ddd;
            position: relative;
        }
        .inside {
            height: 200px; width: 200px; background: salmon; position: absolute; margin: auto; padding: 15px; border-radius: 50% ;
        }


    </style>

</head>
<body>

<div class="main_container">
    <div class="container">

        <header class="header_area">
            <div class="row">
                <div class="col-xs-12">
                    <div class="logo">
                        <h2>jQuery</h2>
                        <P>Learning jQuery and Ajax</P>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navigation">
            <div class="row">
                <div class="col-xs-12 col-md-11 col-md-offset-1">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">contact</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </nav>
        <section class="content_area">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="custom_nav">
                        <ul>
                            <li class="bar"></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Registration</a></li>
                            <li><a href="#">Requirements</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="search">
                        <div class="bar"></div>
                        <form action="#" class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control" placeholder="Search..">
                                <input type="submit" class="btn btn-default" value="GO >>">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <div class="about_us" style=" height: 500px">
                            <h2>Element add .before() .after() Remove Empty() attr()</h2>

                            <button class=" btn btn-success" id="btn1">Add Before</button>
                            <button class=" btn btn-success" id="btn2">Add After</button>
                            <button class=" btn btn-success" id="btn3">Remove Attribute</button>
                            <button class=" btn btn-success" id="btn4">Empty Attribute</button>

                            <div class="para">
                                <h1>Hello World</h1>

                                <p id="p1">My paragraph</p>

                            </div>

                            <?php
                            function addBefore(){
                                echo "This is ";
                            }
                            function addAfter(){
                                echo" for Example.";
                            }
                            ?>

                            <script>
                                $(document).ready(function(){

                                    $("#btn1").click(function(){
                                       $("#p1").before("<?php addBefore(); ?>");
                                    });

                                    $("#btn2").click(function(){
                                      $("#p1").after("<?php addAfter(); ?>");
                                    });

                                    $("#btn3").click(function(){
                                        $(".para").remove();
                                    });

                                    $("#btn4").click(function(){
                                        $(".para").empty();
                                    });




                                });



                            </script>























                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer_area">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright">
                        <p>&copy; Copyright Md Imran hossain.</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Templating_01/js/bootstrap.min.js"></script>
</body>
</html>