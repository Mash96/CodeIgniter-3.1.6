<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row text-center">
                <div class="footer-col col-md-12">
                    <h3>Location</h3>
                    <p>University of Colombo School of Computing
                        <br>Ground Floor</p>
                </div>


            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2017
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top d-lg-none">
    <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<!--<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" mx-auto">
                        <div class="modal-body">
                            <h2>Breakfast Meals</h2>
                            <hr class="star-primary">
                            <!-- Item starts -->
                            <!--<div class="row menu-item ">

                                <a class="btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-6" id="mymenu" href="#makeorder" data-toggle="modal" data-target="#Modal"role="button"  style="background-color: #e28dc6;margin-bottom: 20px;" data-rel="popup">
                                    <div class="content" >
                                        <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/menu/nood.jpg" alt="">
                                        <p style="font-size: 20px; background-color: #333333;opacity: 0.9;color: white; margin-top: 0;height: 50px;">Noodles</p>
                                        <div class="clearfix"></div>
                                    </div>


                                </a>
                                <div  id="myModel1" class="modal" >

                                    <!-- Modal content -->
                                   <!-- <div class="modal-content">
                                        <span class="close1">&times;</span>

                                        <h3>Order Your Items</h3>
                                        <?php if($this->session->flashdata('success')){?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo $this->session->flashdata('success');?>
                                            </div>
                                        <?php }   ?>
                                        <?php echo form_open('register/addOrder');?>
                                        <table class="table">
                                            <tr>
                                                <td>Noodles<input type="hidden" name="noodles" value="Noodles"/></td>
                                                <td>One Plate</td>
                                                <td>40/=</td>
                                            </tr>
                                            <tr>
                                                <td>Choose your quantity</td>
                                                <td>
                                                    <div class="col-xs-5 selectContainer">
                                                        <select class="form-control" name="size">
                                                            <option value="01" >01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>

                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Choose your side dishes</td>
                                                <td>
                                                    <div class="col-xs-5 selectContainer">
                                                        <select class="form-control" name="side">
                                                            <option value="Polsumbola">Polsumbola</option>
                                                            <option value="Kiri Hodda">Kiri Hodda</option>
                                                            <option value="Additional Curries">Additional Curries</option>

                                                        </select>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Your Name</td>
                                                <td><input type="text" name="name" required></td>
                                            </tr>

                                            <tr>
                                                <td> </td>
                                                <td></td>
                                                <td colspan="2"><input type="submit"class="btn btn-primary" style="background-color: #2e6da4; color: white" value="Insert"></td>
                                            </tr>
                                        </table>

                                        <?php echo form_close();?>
                                    </div>
                                </div>


                                <a class="btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-6 " id="mymenu2" href="#makeorder" data-toggle="model"role="button"style="background-color: #e28dc6;margin-bottom: 20px;" data-rel="popup">
                                    <div class="content">
                                        <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/menu/rice2.jpg" alt="" >
                                        <p style="font-size: 20px; background-color: #333333;opacity: 0.9;color: white; margin-top: 0;height: 50px;">Rice</p>
                                        <div class="clearfix"></div>
                                    </div>

                                </a>

                                <div  id="myModel2" class="modal" style="width: 50%;height:50%">

                                    <!-- Modal content -->
                                  <!--  <div class="modal-content">
                                        <span class="close2">&times;</span>
                                        <h3>Order Your Items</h3>
                                        <?php if($this->session->flashdata('success')){?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo $this->session->flashdata('success');?>
                                            </div>
                                        <?php }   ?>
                                        <?php echo form_open('register/addOrder');?>
                                        <table class="table">
                                            <tr>
                                                <td>Rice<input type="hidden" name="rice" value="Rice"/></td>
                                                <td>One Plate</td>
                                                <td>50/=</td>
                                            </tr>
                                            <tr>
                                                <td>Choose your quantity</td>
                                                <td>
                                                    <div class="col-xs-5 selectContainer">
                                                        <select class="form-control" name="size">
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>

                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Choose your side dishes</td>
                                                <td>
                                                    <div class="col-xs-5 selectContainer">
                                                        <select class="form-control" name="side">
                                                            <option value="Polsumbola">Polsumbola</option>
                                                            <option value="Kiri Hodda">Kiri Hodda</option>
                                                            <option value="Additional Curries">Additional Curries</option>

                                                        </select>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Your Name</td>
                                                <td><input type="text" name="name" required></td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td></td>
                                                <td colspan="2"><input type="submit"class="btn btn-primary" style="background-color: #2e6da4; color: white" value="Insert"></td>
                                            </tr>
                                        </table>

                                        <?php echo form_close();?>
                                    </div>
                                </div>


                                <a class="btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-6 " id="mymenu3" href="#makeorder" data-toggle="model"role="button"style="background-color: #e28dc6;margin-bottom: 20px;" data-rel="popup">

                                    <div class="content">
                                        <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/menu/bread.jpg" alt="" >
                                        <p style="font-size: 20px; background-color: #333333;opacity: 0.9;color: white; margin-top: 0;height: 50px;">Bread</p>
                                        <div class="clearfix"></div>
                                    </div>

                                </a>
                                <div  id="myModel3" class="modal" style="width: 50%;height:50%">
                                <!-- Modal content -->
                                <!--<div class="modal-content">
                                    <span class="close3">&times;</span>

                                    <h3>Order Your Items</h3>
                                    <?php if($this->session->flashdata('success')){?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo $this->session->flashdata('success');?>
                                        </div>
                                    <?php }   ?>
                                    <?php echo form_open('register/addOrder');?>
                                    <table class="table">
                                        <tr>
                                            <td>Bread<input type="hidden" name="bread" value="Bread"/></td>
                                            <td>Half</td>
                                            <td>50/=</td>
                                        </tr>
                                        <tr>
                                            <td>Choose your quantity</td>
                                            <td>
                                                <div class="col-xs-5 selectContainer">
                                                    <select class="form-control" name="size">
                                                        <option value="01" >01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                    </select>
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Choose your side dishes</td>
                                            <td>
                                                <div class="col-xs-5 selectContainer">
                                                    <select class="form-control" name="side">
                                                        <option value="Polsumbola">Polsumbola</option>
                                                        <option value="Kiri Hodda">Kiri Hodda</option>
                                                        <option value="Additional Curries">Additional Curries</option>

                                                    </select>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Your Name</td>
                                            <td><input type="text" name="name" required></td>
                                        </tr>

                                        <tr>
                                            <td> </td>
                                            <td></td>
                                            <td colspan="2"><input type="submit"class="btn btn-primary" style="background-color: #2e6da4; color: white" value="Insert"></td>
                                        </tr>
                                    </table>

                                    <?php echo form_close();?>
                                </div>
                            </div>

                            <a class="btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-6" id="mymenu4"href="#makeorder" data-toggle="model" role="button" style="background-color: #e28dc6;margin-bottom: 20px;" data-rel="popup">

                                    <div class="content">
                                        <img class="img-fluid" src="<?php echo base_url()."home_page/"; ?>img/menu/string.jpg" alt="" >
                                        <p style="font-size: 20px; background-color: #333333;opacity: 0.9;color: white; margin-top: 0;height: 50px;">String Hoppers</p>
                                        <div class="clearfix"></div>
                                    </div>

                                </a>
                                <div  id="myModel4" class="modal" style="width: 50%;height:50%">
                                    <!-- Modal content -->
                                  <!--  <div class="modal-content">
                                        <span class="close4">&times;</span>

                                        <h3>Order Your Items</h3>
                                        <?php if($this->session->flashdata('success')){?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo $this->session->flashdata('success');?>
                                            </div>
                                        <?php }   ?>
                                        <?php echo form_open('register/addOrder');?>
                                        <table class="table">
                                            <tr>
                                                <td>String Hoppers<input type="hidden" name="string" value="String Hoppers"/></td>
                                                <td>One Plate</td>
                                                <td>40/=</td>
                                            </tr>
                                            <tr>
                                                <td>Choose your quantity</td>
                                                <td>
                                                    <div class="col-xs-5 selectContainer">
                                                        <select class="form-control" name="size">
                                                            <option value="01" >01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                        </select>
                                                    </div>

                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Choose your side dishes</td>
                                                <td>
                                                    <div class="col-xs-5 selectContainer">
                                                        <select class="form-control" name="side">
                                                            <option value="Polsumbola">Polsumbola</option>
                                                            <option value="Kiri Hodda">Kiri Hodda</option>
                                                            <option value="Additional Curries">Additional Curries</option>

                                                        </select>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Your Name</td>
                                                <td><input type="text" name="name" required></td>
                                            </tr>

                                            <tr>
                                                <td> </td>
                                                <td></td>
                                                <td colspan="2"><input type="submit"class="btn btn-primary" style="background-color: #2e6da4; color: white" value="Insert"></td>
                                            </tr>
                                        </table>

                                        <?php echo form_close();?>
                                    </div>
                                </div>


                        <script src="<?php echo base_url()."home_page/"; ?>js/model.js"></script>

                            </div>
                            <!-- Item ends -->
                            <!-- Item starts -->

                          <!---  <h2>Side Dishes</h2>
                            <hr class="star-primary">
                            <!-- Item starts
                            <div class="row text-center menu-item">
                                <a class="btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-6 " href="#makeorder" data-toggle="model" role="button" style="background-color: #e28dc6;margin-bottom: 20px;" data-rel="popup">
                                    <div class="content">
                                        <img class="img-fluid"  src="<?php echo base_url()."home_page/"; ?>img/menu/pol.jpg" alt="">
                                        <p style="font-size: 20px; background-color: #333333;opacity: 0.9;color: white; margin-top: 0;height: 50px;">Polsumbola</p>
                                        <div class="clearfix"></div>
                                    </div>


                                </a>
                                <a class=" btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-6" href="#makeorder" data-toggle="model" role="button" style="background-color: #e28dc6;margin-bottom: 20px;" data-rel="popup">
                                    <div class="content">
                                        <img class="img-fluid"  src="<?php echo base_url()."home_page/"; ?>img/menu/kiri.jpg" alt="">
                                        <p style="font-size: 20px; background-color: #333333;opacity: 0.9;color: white; margin-top: 0;height: 50px; ">Kiri Hodda</p>
                                        <div class="clearfix"></div>
                                    </div>


                                </a>
                                <a class="btn btn-default col-lg-4 col-md-4 col-sm-4 col-xs-6"  href="#makeorder" data-toggle="model" role="button" style="background-color: #e28dc6;margin-bottom: 20px;" data-rel="popup">
                                    <div class="content">
                                        <img class="img-fluid"  src="<?php echo base_url()."home_page/"; ?>img/menu/add.jpg" alt="">
                                        <p style="font-size: 20px; background-color: #333333;opacity: 0.9;color: white; margin-top: 0;height: 50px; ">Additional Curries</p>
                                        <div class="clearfix"></div>
                                    </div>


                                </a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>-->


<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url()."home_page/"; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()."home_page/"; ?>vendor/popper/popper.min.js"></script>
<script src="<?php echo base_url()."home_page/"; ?>vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url()."home_page/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo base_url()."home_page/"; ?>js/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url()."home_page/"; ?>js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url()."home_page/"; ?>js/freelancer.min.js"></script>


</body>

</html>
