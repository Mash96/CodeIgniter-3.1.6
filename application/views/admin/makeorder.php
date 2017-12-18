<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 12/14/2017
 * Time: 11:49 PM
 */

?>
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

	<!-- Custom fonts and icons for this template -->

	<link href="<?php echo base_url()."home_page/"; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href=https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href=https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url()."home_page/"; ?>css/freelancer.min.css" rel="stylesheet">
	<script>href="<?php echo base_url() ."home_page/"; ?>vendor/popper/popper.js" </script>
    <link href="<?php echo base_url()."home_page/"; ?>css/admin.css" rel="stylesheet" type="text/css">


    <style>

    </style>
</head>
<body>
	<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<div class="container">
	<a class="navbar-brand js-scroll-trigger" href="#page-top">Make Order </a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

		<i class="fa fa-bars"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav ml-auto">
	<li class="nav-item">
		<a class="nav-link js-scroll-trigger" href="<?php echo base_url('index.php/admin/')?>">Home</a>
	</li>
	</ul>
	</div>
	</div>
</nav>

		<!--menu section-->
	<section id="Menu">
        <div class="container">
			<h2 class="text-center">Menu</h2>
			<hr class="star-primary">
            <div class="row">
                    <div class="content-menu col-md-8 col-lg-8">
                        <p>Welcome to UCSC Canteen Menu!!</p>
                        <p>We have main meals with side dishes and in addition to the snacks and drinks.</p>

                        <hr>

                        <h3>Breakfast</h3>
                        <hr>
                        <h4>Main Meals</h4>
                        <br>

                            <div class="content">
                                <table  class="table table-responsive ">
                                    <?php foreach($records1 as $rec1):
	                                    echo form_open('order/get_Order');
                                        echo "<tr  id=". $rec1['foodid'].">"
                                             ."<td style='width:200px;'>". $rec1['items']."</td>"
                                             ."<td>..................................................................................</td>"
                                             ."<td style='width:100px;' >".$rec1['price']." Rs</td>"
                                             ."</tr>"
                                            ."<input type='hidden' name = 'item' value='".$rec1['items']."'>"
                                             ."<input type='hidden' name = 'price' value='".$rec1['price']."'>"
                                            ."<input type='hidden' name = 'id' value='".$rec1['foodid']."'>";

                                              echo "<tr>
                                                    <td> <label>Add Side Items</label></td>"
                                                    ."<td>
                                                    <div class='col-xs-5 selectContainer'>
                                                        <select class='form-control' name='side'>
                                                            <option value='Polsumbola' >Polsumbola</option>
                                                            <option value='Kirihodda'>Kirihodda</option>
                                                            <option value='Additional curries'>Additional curries</option>
                                                        </select>
                                                    </div>
                                                    </td>
                                                </tr>"
                                                ."<tr><td><label>Quantity</label></td>"
                                                ."<td><div class='col-xs-5 selectContainer'>
                                                    <select class='form-control' name='size'>
                                                        <option value='01' >01</option>
                                                        <option value='02'>02</option>
                                                        <option value='03'>03</option>
                                                        <option value='04'>04</option>
                                                        <option value='05'>05</option>
                                                    </select>
                                                </div></td>
                                                </tr>"
                                               ."<tr>
                                                    <td> <button type='submit' name='submit' class='btn btn-default'>Add Order</button></td>
                                                </tr>";
                                              echo form_close();

                                    endforeach;?>

                                </table>

                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $("tr").click(function() {
                                            var id = $(this).attr("id"); // Using a custom attribute.
                                            //  $("#pages div").hide(); // gather all the div tags under the element with the id pages and hide them.
                                            $(".modal" + id).show(); // Show the div with the class of .divX where X is the number stored in the data-id of the object that was clicked.
                                        });
                                    });
                                </script>​​​​
                            </div>

                                <h4>Side Meals</h4>
                                <br>
                                <div class="content">
                                    <table  class="table">
                                        <tr>
                                            <td>Polsumbola</td>
                                            <td>Kirihodda</td>
                                            <td>Additional curries</td>
                                        </tr>

                                    </table>
                                </div>


                                <hr>
                                <h3>Lunch</h3>
                                <hr>
                                <h4>Main Meals</h4>
                                <br>
                                <div class="content">
                                    <table  class="table table-responsive">
                                        <?php foreach($records2 as $rec2):
	                                        echo form_open('order/get_Order');
                                            echo "<tr id=".$rec2['foodid'].">"
                                                 ."<td style='width:200px;'>". $rec2['items']."</td>"
                                                 ."<td>.................................................................................................................</td>"
                                                 ."<td style='width:200px;' >".$rec2['price']. " Rs</td>"
                                                 ."</tr> "
                                                 ."<input type='hidden' name = 'item' value='".$rec2['items']."'>"
                                                 ."<input type='hidden' name = 'price' value='".$rec2['price']."'>"
                                                 ."<input type='hidden' name = 'id' value='".$rec2['foodid']."'>";

	                                        echo
	                                             "<tr><td><label>Quantity</label></td>"
	                                             ."<td><div class='col-xs-5 selectContainer'>
                                                    <select class='form-control' name='size'>
                                                        <option value='01' >01</option>
                                                        <option value='02'>02</option>
                                                        <option value='03'>03</option>
                                                        <option value='04'>04</option>
                                                        <option value='05'>05</option>
                                                    </select>
                                                </div></td>
                                                </tr>"
	                                             ."<tr>
                                                    <td> <button type='submit' name='submit' class='btn btn-default'>Add Order</button></td>
                                                </tr>";
	                                        echo form_close();
                                        endforeach;?>

                                    </table>
                                </div>

                                    <hr>
                                    <h3>Evening</h3>
                                    <hr>
                                    <h4>Main Meals</h4>
                                    <br>
                                    <div class="content">
                                        <table  class="table table-responsive">
                                            <?php foreach($records3 as $rec3):
	                                            echo form_open('order/get_Order');
                                                echo "<tr id=".$rec3['foodid'].">"
                                                     ."<td style='width:200px;'>". $rec3['items']."</td>"
                                                     ."<td>.......................................................................................</td>"
                                                     ."<td style='width:100px;' >".$rec3['price']. " Rs</td>"
                                                     ."</tr> "
                                                     ."<input type='hidden' name = 'item' value='".$rec3['items']."'>"
                                                     ."<input type='hidden' name = 'price' value='".$rec3['price']."'>"
                                                     ."<input type='hidden' name = 'id' value='".$rec3['foodid']."'>";

	                                            echo "<tr>
                                                    <td> <label>Add Side Items</label></td>"
	                                                 ."<td>
                                                    <div class='col-xs-5 selectContainer'>
                                                        <select class='form-control' name='side'>
                                                            <option value='Pol Mallum' >Pol Mallum</option>
                                                            <option value='Miris Hodi'>Miris Hodi</option>
                                                            <option value='Lunu Miris'>Lunu Miris</option>
                                                        </select>
                                                    </div>
                                                    </td>
                                                </tr>"
	                                                 ."<tr><td><label>Quantity</label></td>"
	                                                 ."<td><div class='col-xs-5 selectContainer'>
                                                    <select class='form-control' name='size'>
                                                        <option value='01' >01</option>
                                                        <option value='02'>02</option>
                                                        <option value='03'>03</option>
                                                        <option value='04'>04</option>
                                                        <option value='05'>05</option>
                                                    </select>
                                                </div></td>
                                                </tr>"
	                                                 ."<tr>
                                                    <td> <button type='submit' name='submit' class='btn btn-default'>Add Order</button></td>
                                                </tr>";
	                                            echo form_close();;
                                            endforeach;?>

                                        </table>
                                    </div>
                                        <h4>Side Meals</h4>
                                        <br>
                                        <div class="content">
                                            <table  class="table">
                                                <tr>
                                                    <td>Pol Mallum</td>
                                                    <td>Miris Hodi</td>
                                                    <td>Lunu Miris</td>
                                                </tr>

                                            </table>
                                        </div>

                                        <hr>
                                        <h3>Short Eats</h3>
                                        <br>
                                        <div class="content">
                                            <table  class="table table-responsive">
                                                <?php foreach($records4 as $rec4):
	                                                echo form_open('order/get_Order');
                                                    echo "<tr id=".$rec4['foodid'].">"
                                                         ."<td style='width:400px;'>". $rec4['items']."</td>"
                                                         ."<td>........................................................................................................</td>"
                                                         ."<td style='width:200px;' >".$rec4['price']. " Rs</td>"
                                                         ."</tr> "
                                                         ."<input type='hidden' name = 'item' value='".$rec4['items']."'>"
                                                         ."<input type='hidden' name = 'price' value='".$rec4['price']."'>"
                                                         ."<input type='hidden' name = 'id' value='".$rec4['foodid']."'>";

	                                                echo
		                                                "<tr><td><label>Quantity</label></td>"
		                                                ."<td><div class='col-xs-5 selectContainer'>
                                                    <select class='form-control' name='size'>
                                                        <option value='01' >01</option>
                                                        <option value='02'>02</option>
                                                        <option value='03'>03</option>
                                                        <option value='04'>04</option>
                                                        <option value='05'>05</option>
                                                    </select>
                                                </div></td>
                                                </tr>"
		                                                ."<tr>
                                                    <td> <button type='submit' name='submit' class='btn btn-default'>Add Order</button></td>
                                                </tr>";
	                                                echo form_close();
                                                endforeach;?>

                                            </table>
                                        </div>
                                            <hr>
                                            <h3>Beverages </h3>
                                            <br>
                                            <div class="content">
                                                <table  class="table table-responsive">
                                                    <?php foreach($records5 as $rec5):
	                                                    echo form_open('order/get_Order');
                                                        echo "<tr id=".$rec4['foodid'].">"
                                                             ."<td style='width:400px;'>". $rec5['items']."</td>"
                                                             ."<td>...............................................................................................</td>"
                                                             ."<td style='width:200px;' >".$rec5['price']. " Rs</td>"
                                                             ."</tr> "
                                                             ."<input type='hidden' name = 'item' value='".$rec5['items']."'>"
                                                             ."<input type='hidden' name = 'price' value='".$rec5['price']."'>"
                                                             ."<input type='hidden' name = 'id' value='".$rec5['foodid']."'>";

	                                                    echo
		                                                    "<tr><td><label>Quantity</label></td>"
		                                                    ."<td><div class='col-xs-5 selectContainer'>
                                                                <select class='form-control' name='size'>
                                                                    <option value='01' >01</option>
                                                                    <option value='02'>02</option>
                                                                    <option value='03'>03</option>
                                                                    <option value='04'>04</option>
                                                                    <option value='05'>05</option>
                                                                </select>
                                                            </div></td>
                                                            </tr>"
                                                            ."<tr>
                                                                <td> <button type='submit' name='submit' class='btn btn-default'>Add Order</button></td>
                                                            </tr>";
	                                                    echo form_close();
                                                    endforeach;?>

                                                </table>
                                            </div>
                                        </div>


                <div class="content-menu col-md-4 col-lg-4">
                    <div class="vl">
                        <?php if(isset($res1)&& isset($res2)){?>
                        <table class="table table-responsive ">
                            <tr style="color: white">
                                <td><h5 >My Order</h5></td>
                                <td>(<?php echo $res2 ?> items)</td>
                            </tr>
                            <tr style="color: white">
                                <td>Sub Total</td>
                                <td><?php echo $res1[0]['price'] ?> Rs</td>
                            </tr>
                            <tr><td><button class="btn btn-default">Order Now</button> </td></tr>
                        </table>
                        <?php }?>
                    </div>


                </div>
            </div>
    </div>

    </section>


<?php include 'partials/footer.php';?>