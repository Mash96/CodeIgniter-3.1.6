<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()."home_page/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()."home_page/"; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href=https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href=https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()."home_page/"; ?>css/freelancer.min.css" rel="stylesheet">
    <script>href="<?php echo base_url() ."home_page/"; ?>vendor/popper/popper.js" </script>

    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title:{
                    text:"income "
                },
                axisX: {
                    valueFormatString: "DD "
                },
                axisY: {
                    title: "Income (in /Rs)",
                    includeZero: false,
                    suffix: " Rs"
                },
                legend:{
                    cursor: "pointer",
                    fontSize: 16,
                    itemclick: toggleDataSeries
                },
                toolTip:{
                    shared: true
                },
                data: [{
                    name: "june",
                    type: "spline",
                    yValueFormatString: "#0.## /Rs",
                    showInLegend: true,
                    dataPoints: [
                        { x: new Date(2017,6,24), y: 2000 },
                        { x: new Date(2017,6,25), y: 3000 },
                        { x: new Date(2017,6,26), y: 4000 },
                        { x: new Date(2017,6,27), y: 5000 },
                        { x: new Date(2017,6,28), y: 6000 },
                        { x: new Date(2017,6,29), y: 3043 },
                        { x: new Date(2017,6,30), y: 7000 }
                    ]
                }
                ]
            });
            chart.render();

            function toggleDataSeries(e){
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                }
                else{
                    e.dataSeries.visible = true;
                }
                chart.render();
            }

        }
    </script>

    <style>
        #firstname {
            height: 370px;
            width:500px;
            margin: auto;
            border: 3px solid #73AD21;
        }
    </style>




</head>

<body id="page-top">
<?php
if(!($this->session->userdata('loggedin')and ($this->session->userdata('status')=='admin') )){
    redirect('Home/index');
}
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url("index.php/owner/index")?>">ucsc canteen </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo base_url("index.php/owner/loadBillView")?>">Bill</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo base_url("index.php/owner/loadEditCustomersView")?>">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo base_url("index.php/owner/loadOrdersView")?>">View Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo base_url("index.php/owner/loadEditMenuView")?>">edit  Menu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin <?php echo  $this->session->userdata('userName');?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url('index.php/login/logoutUser')?>">Logout</a>

                    </div>
                </li>
            </ul>
        </div>

    </div>

</nav>




