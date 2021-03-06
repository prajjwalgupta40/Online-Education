<?php
    include_once "user.php";
    include_once "files\database\config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\jquery.mCustomScrollbar.css">

</head>
<style>
    .h{
        color:white;
    }
    .m{
        margin-top: 15px;
        padding:10px;
    }
    </style>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo header-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="new2.php" class="b-brand">
          <div class="b-bg">
            <i class="feather icon-radio"></i>
          </div>
          <span class="b-title">ONLINE EDUCATION</span>
        </a>

                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control" placeholder="search..">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                           
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo $e;?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        
                                        <li>
                                            <a href="new2.php">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="changepass.php">
                                                <i class="feather icon-settings"></i> Change Password
                                            </a>
                                        </li>
                                        
                                        
                                        <li>
                                            <a href="logout.php">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            
            
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu m">
                        <?php
                        include "sidenav.php";
                        ?>
                         
                            
                           
                        </div>
                    </nav>
     
                    <section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="students.php" class="btn drp-icon btn-rounded btn-primary">
                                    <i class="feather icon-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h3 class="m-b-10">Add Student</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="post" action="studentupdate.php">
                                    <article class="card mb-4">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Create or edit Student</h4>
                                        </div>
                                        <div class="card-body">
                                           <div class="form-group">
                                                <label for="LeaveName">Full Name</label>
                                                <input  class="form-control" required type="text" id="LeaveName" name="name" value="" />
                                                <span class="text-danger field-validation-valid" data-valmsg-for="LeaveName" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                        <label for="Gender">Gender</label>
                                                  <select class="select2 form-control" required data-val="true"  id="Gender" name="gender">
                                                      <option disable>Select</option>
                                                     <option value="Male">Male</option>
                                                      <option value="Female">Female</option>
                                                       </select>
                                                        <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                        <span class="text-danger field-validation-valid" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
                                                    </div>
                                            <div class="form-group">
                                                        <label for="Gender">Stream</label>
                                                  <select class="select2 form-control" required data-val="true"  id="Gender" name="stream">
                                                      <option disable>Select</option>
                                                     <option value="Science Student">Science Student</option>
                                                     <option value="Medical Student">Medical Student</option>
                                                     <option value="Commerce Student">Commerce Student</option>
                                                       </select>
                                                        <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                        <span class="text-danger field-validation-valid" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
                                                    </div>
                                            
                                                    <div class="form-group">
                                                        <label for="Gender">Class</label>
                                                  <select class="select2 form-control" required data-val="true"  id="Gender" name="class">
                                                      <option disable>Select</option>
                                                     <option value="11">11</option>
                                                     <option value="12">12</option>
                                                       </select>
                                                        <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                        <span class="text-danger field-validation-valid" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
                                                    </div>
                                            <div class="form-group">
                                                <label for="FromDate">Age</label>
                                                <div class="input-group">
                                                    <input type="text" required id="FromDate" name="age" value="" class="datepicker form-control" data-val="true" data-val-required="The FromDate field is required.">
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="FromDate" data-valmsg-replace="true"></span>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="EmergencyCall">Email</label>
                                                <div class="input-group">
                                                    <input class="form-control" required type="email" required data-val="true" data-val-required="The Emergency Call field is required." id="EmergencyCall" name="email" value="" />
                                                    <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="EmergencyCall" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="EmergencyCall">Password</label>
                                                <div class="input-group">
                                                    <input class="form-control"  type="password" required  data-val="true" data-val-required="The Emergency Call field is required." id="EmergencyCall" name="password" value="" />
                                                    <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="EmergencyCall" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="EmergencyCall">Date of Birth</label>
                                                <div class="input-group">
                                                    <input class="form-control" required type="date" data-val="true" data-val-required="The Emergency Call field is required." id="EmergencyCall" name="dob" value="" />
                                                    <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="EmergencyCall" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="EmergencyCall">Date of Join</label>
                                                <div class="input-group">
                                                    <input class="form-control" required type="date" data-val="true" data-val-required="The Emergency Call field is required." id="EmergencyCall" name="doj" value="" />
                                                    <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="EmergencyCall" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="EmergencyCall">Total Fees</label>
                                                <div class="input-group">
                                                    <input class="form-control" required type="text" data-val="true" data-val-required="The Emergency Call field is required." id="EmergencyCall" name="fees" value="" />
                                                    <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="EmergencyCall" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="EmergencyCall">Phone</label>
                                                <div class="input-group">
                                                    <input class="form-control" required type="text" data-val="true" data-val-required="The Emergency Call field is required." id="EmergencyCall" name="phone" value="" />
                                                    <span class="input-group-addon" aria-hidden="true"><span class="glyphicon glyphicon-ok text-success"></span></span>
                                                </div>
                                                <span class="text-danger field-validation-valid" data-valmsg-for="EmergencyCall" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>

                                        </div>
                                    </article>
                                    </form>
                                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8GNmIqGKUIhGjR2rrHjndk7yF4m1YcCI2L-7oHTDvbpF8PFmF13dK6O9oNlSu9_RfO81blUYiaWEzr8HAlLk7aw5AcK94Z_i2ZzP0RTsRpWxo0KpxNbGDNpM-tYzjB1gu2jvsGZdRYijUJyihSdU7-40z9KJnstkmlVa-YvzqqPJBk2HqhFFcS-oMruHzbtEQg" /><input name="IsPaidLeave" type="hidden" value="false"><input name="IsApproved" type="hidden" value="false"></form>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







                  
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script><script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files\bower_components\modernizr\js\modernizr.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="files\bower_components\chart.js\js\Chart.js"></script>
    <!-- amchart js -->
    <script src="files\assets\pages\widget\amchart\amcharts.js"></script>
    <script src="files\assets\pages\widget\amchart\serial.js"></script>
    <script src="files\assets\pages\widget\amchart\light.js"></script>
    <script src="files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files\assets\js\SmoothScroll.js"></script>
    <script src="files\assets\js\pcoded.min.js"></script>
    <!-- custom js -->
    <script src="files\assets\js\vartical-layout.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\dashboard\custom-dashboard.js"></script>
    <script type="text/javascript" src="files\assets\js\script.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script type="text/javascript">
    

        function notify(message, type) {
            $.growl({
                message: message
            }, {
                    type: type,
                    allow_dismiss: false,
                    label: 'Cancel',
                    className: 'btn-xs btn-inverse',
                    placement: {
                        from: 'bottom',
                        align: 'right'
                    },
                    delay: 5000,
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                    },
                    offset: {
                        x: 30,
                        y: 30
                    }
                });
        };

        // Generate Chart
        function chart(id, type, data, options) {
            var canvas = document.getElementById(id);
            var ctx = canvas.getContext('2d');
            new Chart(ctx, {
                type: type,
                data: data,
                options: options
            });
        }

        $(document).ready(function () {

            var mainTable;

            mainTable = $('#grid').DataTable({
                lengthChange: false,
                info: false,
                searching: true,
                dom: 'lrtip',
                scrollX: false,
                pageLength: 5,
            });

            $('#m-search').keyup(function () {
                mainTable.search($(this).val()).draw();
            })

            //initiate all select2 class
            $('.select2').select2({
                allowClear: true,
                placeholder: "Select"
            });

            //initiate all datepicker class
            $('.datepicker').datepicker({
                todayHighlight: true,
                format: 'yyyy-mm-dd',
                autoclose: true
            });

            //initiate all datepickeryearmonth class
            $('.datepickeryearmonth').datepicker({
                startView: "months",
                format: "yyyy-mm",
                minViewMode: "months",
                autoclose: true
            });


            var message = $("#StatusMessage").text();
            if (message) {
                if (message.includes("Error")) {
                    //error
                    notify(message, 'danger');
                } else {
                    //success
                    notify(message, 'success');
                }
            }
        });
    </script>

    
<script type="text/javascript">
        $(document).ready(function () {

        });

       //Doughnut Chart
        $(function () {
            var doughnutChart = {
                data: {
                    labels: ["Leave","Absence"],
                    datasets: [{
                        label: 'Doughnut chart',
                        data: [0,22],
                        backgroundColor: ["rgba(29, 233, 182, 0.4)","rgba(29, 196, 233, 0.5)"],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: "top"
                    },
                    cutoutPercentage: 50
                }
            }
            chart("doughnutChart", "doughnut", doughnutChart.data, doughnutChart.options);
        });

        function onRefresh() {
            if ($('#Period').val() !== '') {
                location.href = '/SelfService/Leave?period=' + $('#Period').val();
            } else {
                notify('Please select period first!', 'danger');
            }

        }

    </script>


<script type="text/javascript">
        $(document).ready(function () {


            $('.metismenu li:nth-child(4)').addClass('active');


        });
    </script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
