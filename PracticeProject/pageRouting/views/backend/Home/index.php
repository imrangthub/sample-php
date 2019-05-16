<html>
<head>
    <link href="../../../css/custom.css" rel="stylesheet">
    <link rel="../../../stylesheet" type="text/css" href="../../../css/maps/jquery-jvectormap-2.0.3.css" />
    <link href="../../../css/icheck/flat/green.css" rel="stylesheet" />
    <link href="../../../css/floatexamples.css" rel="stylesheet" type="text/css" />
    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/nprogress.js"></script>
</head>
<body>


<?php
//use App\allclasses\profilepic;
//
//include_once '../../vendor/autoload.php';
//
//$ob = new Profilepic();
//
//$data = $ob->view_pp();


?>

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Automic Projects</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="Profilepic/images/<?php echo $data['profilepic']; ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $data['title'];?></h2>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="index.php?page=dashboard">Dashboard</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-edit"></i> Book Project <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none;">
                            <li><a href="index.php?page=create_book">Add New Book</a>
                            </li>
                            <li><a href="index.php?page=manage_books">Manage Books</a>
                            </li>
                            <li><a href="index.php?page=book_trash">Trashed Books</a>
                            </li>
                        </ul>
                    </li>


                    <li><a><i class="fa fa-birthday-cake"></i> Birthday Project <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.php?page=create_birthday">Add Your Birthday</a>
                            </li>
                            <li><a href="index.php?page=manage_birthday">Manage Birthdays</a>
                            </li>
                            <li><a href="index.php?page=birthday_trash">Trashed Birthdays</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-building"></i> City Project <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.php?page=create_city">Add Your City</a>
                            </li>
                            <li><a href="index.php?page=manage_city">Manage Cities</a>
                            </li>
                            <li><a href="index.php?page=city_trash">Trashed Citiess</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-bullseye"></i> Hobby Project <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.php?page=create_hobby">Add Your Hobby</a>
                            </li>
                            <li><a href="index.php?page=manage_hobby">Manage Hobby</a>
                            </li>
                            <li><a href="index.php?page=hobby_trash">Trashed Hobby</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-comments"></i> Gender Project <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.php?page=create_gender">Add gender Info</a>
                            </li>
                            <li><a href="index.php?page=manage_gender">Manage gender</a>
                            </li>
                            <li><a href="index.php?page=gender_trash">Trashed gender</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-image"></i> Profilepic Project <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.php?page=create_profilepic">Add profilepic</a>
                            </li>
                            <li><a href="index.php?page=manage_profilepic">Manage profilepic</a>
                            </li>
                            <li><a href="index.php?page=profilepic_trash">Trashed profilepic</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-envelope"></i> Email Project <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.php?page=create_email">Add Email Id</a>
                            </li>
                            <li><a href="index.php?page=manage_email">Manage Email</a>
                            </li>
                            <li><a href="index.php?page=email_trash">Trashed Email</a>
                            </li>
                        </ul>
                    </li>








                </ul>
            </div>



        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>







<footer>
    <div class="copyright-info">
        <p class="pull-right">Developed by Nirob</a>
        </p>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
<!-- /page content -->

</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="../../../js/bootstrap.min.js"></script>

<!-- gauge js -->
<script type="text/javascript" src="../../../js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="../../../js/gauge/gauge_demo.js"></script>
<!-- bootstrap progress js -->
<script src="../../../js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="../../../js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="../../../js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="../../../js/moment/moment.min.js"></script>
<script type="text/javascript" src="../../../js/datepicker/daterangepicker.js"></script>
<!-- chart js -->
<script src="../../../js/chartjs/chart.min.js"></script>

<script src="../../../js/custom.js"></script>

<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="../../../js/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="../../../js/flot/jquery.flot.js"></script>
<script type="text/javascript" src="../../../js/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="../../../js/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="../../../js/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="../../../js/flot/date.js"></script>
<script type="text/javascript" src="../../../js/flot/jquery.flot.spline.js"></script>
<script type="text/javascript" src="../../../js/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="../../../js/flot/curvedLines.js"></script>
<script type="text/javascript" src="../../../js/flot/jquery.flot.resize.js"></script>
<script>
    $(document).ready(function() {
        // [17, 74, 6, 39, 20, 85, 7]
        //[82, 23, 66, 9, 99, 6, 2]
        var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
        ];

        var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
        ], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
                //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        });

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }
    });
</script>

<!-- worldmap -->
<script type="text/javascript" src="../../../js/maps/jquery-jvectormap-2.0.3.min.js"></script>
<script type="text/javascript" src="../../../js/maps/gdp-data.js"></script>
<script type="text/javascript" src="../../../js/maps/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="../../../js/maps/jquery-jvectormap-us-aea-en.js"></script>
<!-- pace -->
<script src="../../../js/pace/pace.min.js"></script>
<script>
    $(function() {
        $('#world-map-gdp').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionTipShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>
<!-- skycons -->
<script src="../../../js/skycons/skycons.min.js"></script>
<script>
    var icons = new Skycons({
            "color": "#73879C"
        }),
        list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
        ],
        i;

    for (i = list.length; i--;)
        icons.set(list[i], list[i]);

    icons.play();
</script>

<!-- dashbord linegraph -->
<script>
    Chart.defaults.global.legend = {
        enabled: false
    };

    var data = {
        labels: [
            "Symbian",
            "Blackberry",
            "Other",
            "Android",
            "IOS"
        ],
        datasets: [{
            data: [15, 20, 30, 10, 30],
            backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#455C73",
                "#26B99A",
                "#3498DB"
            ],
            hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#34495E",
                "#36CAAB",
                "#49A9EA"
            ]

        }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: data
    });
</script>
<!-- /dashbord linegraph -->
<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function() {

        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
        }

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<script>
    NProgress.done();
</script>
<!-- /datepicker -->
<!-- /footer content -->
</body>

</html>
