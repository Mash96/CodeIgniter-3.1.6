<?php include 'partials/header.php'?>
    <!-- Header -->
    <header class="masthead"style="background-image: url('https://www.mountelizabeth.com.sg/images/default-source/default-album/school-canteen-main-d.jpg?sfvrsn=0'); image-resolution:from-image" >
      <div class="container">
        <!--<img class="img-fluid" src="<?php //echo base_url()."home_page/"; ?>img/kitchen.jpeg" alt="">-->
        <div class="intro-text">
          <span class="name">wellcome</span>
          <hr class="star-light">
           </div>
         </div>
       </header>

       <!-- Portfolio Grid Section -->
    <section id="Menu">
      <div class="container">
        <h2 class="text-center">Menu</h2>
        <hr class="star-primary">
            <div class="content-menu" style="position: relative;left:120px;" >
                    <p>Welcome to UCSC Canteen Menu!!</p>
                    <p>We have main meals with side dishes and in addition to the snacks and drinks.</p>

                    <hr>

                    <h3>Breakfast</h3>
                        <hr>
                    <h4>Main Meals</h4>
                    <br>
                    <div class="content">

                        <table  class="table">
                            <?php foreach($records1 as $rec1)
                            echo "<tr>"
                                ."<td style='width:200px;'>". $rec1['items']."</td>"
                                ."<td>................................................................................................................................................................................</td>"
                                ."<td style='width:100px;' >".$rec1['price']. " Rs</td>"
                            ."</tr> ";?>

                        </table>
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
                            <table  class="table">
                                <?php foreach($records2 as $rec2)
                                    echo "<tr>"
                                         ."<td style='width:400px;'>". $rec2['items']."</td>"
                                         ."<td>................................................................................................................................................................................</td>"
                                         ."<td style='width:200px;' >".$rec2['price']. " Rs</td>"
                                         ."</tr> ";?>

                            </table>
                        </div>

                            <hr>
                            <h3>Evening</h3>
                            <hr>
                            <h4>Main Meals</h4>
                            <br>
                            <div class="content">
                                <table  class="table">
                                    <?php foreach($records3 as $rec3)
                                        echo "<tr>"
                                             ."<td style='width:200px;'>". $rec3['items']."</td>"
                                             ."<td>................................................................................................................................................................................</td>"
                                             ."<td style='width:100px;' >".$rec3['price']. " Rs</td>"
                                             ."</tr> ";?>

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
                                    <table  class="table">
                                        <?php foreach($records4 as $rec4)
                                            echo "<tr>"
                                                 ."<td style='width:400px;'>". $rec4['items']."</td>"
                                                 ."<td>................................................................................................................................................................................</td>"
                                                 ."<td style='width:200px;' >".$rec4['price']. " Rs</td>"
                                                 ."</tr> ";?>


                                    </table>
                                </div>
                                    <hr>
                                    <h3>Beverages </h3>
                                    <br>
                                    <div class="content">
                                        <table  class="table">
                                            <?php foreach($records5 as $rec5)
                                                echo "<tr>"
                                                     ."<td style='width:400px;'>". $rec5['items']."</td>"
                                                     ."<td>................................................................................................................................................................................</td>"
                                                     ."<td style='width:200px;' >".$rec5['price']. " Rs</td>"
                                                     ."</tr> ";?>

                                        </table>
                                    </div>
                     </div>
                </div>
    </section>


      <!--</div>-->



    <!-- register Section -->
<section id="register">
    <div class="container">
        <h1 class="text-center">register</h1>
        <hr class="star-primary">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <?php if($this->session->flashdata('msg')){
                    echo"<h3>".$this->session->flashdata('msg')."</h3>";
                } ?>
                <?php echo form_open('register/addUser');?>
               <!-- <form name="sentMessage" id="contactForm" novalidate> -->
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Username</label>
                            <p>  <font color="red" size="3"> <?php echo form_error('username'); ?></font></p>
                            <input class="form-control" id="name" type="text" placeholder="Username"  name="userName" value="<?php echo set_value('userName'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <p>  <font color="red" size="3"><?php echo form_error('name'); ?></font></p>
                            <input class="form-control" id="Name" type="text" placeholder="Name" name="name"value="<?php echo set_value('name'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>NIC</label>
                            <p>  <font color="red" size="3"><?php echo form_error('nic'); ?></font></p>
                            <input class="form-control" id="phone" type="tel" placeholder="NIC"required name="nic" value="<?php echo set_value('nic'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Phone Number</label>
                            <p>  <font color="red" size="3"> <?php echo form_error('phoneNumber'); ?></font></p>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required name="phoneNumber" value="<?php echo set_value('phoneNumber'); ?>" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <p>  <font color="red" size="3"> <?php echo form_error('password'); ?></font></p>
                            <input class="form-control" id="Password" type="Password" placeholder="Password" required name="password" value="<?php echo set_value('password'); ?>">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Conform Password</label>
                            <p>  <font color="red" size="3">  <?php echo form_error('conformPassword'); ?></font></p>
                            <input class="form-control" id="Conform_Password" type="Password" placeholder="Conform Password" required name="conformPassword" value="<?php echo set_value('conformPassword'); ?>" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">submit</button>
                    </div>
                <!--</form>-->
                <?php echo form_close();?>


            </div>
        </div>
    </div>
</section>


<?php include 'partials/footer.php'?>

