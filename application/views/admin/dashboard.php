<?php include 'partials/header.php'?>
<!-- Header -->
<header class="masthead" style="background-image: url('https://www.mountelizabeth.com.sg/images/default-source/default-album/school-canteen-main-d.jpg?sfvrsn=0'); image-resolution:from-image" >
    <div class="container">
        <div class="intro-text">
            <span class="name">wellcome</span>
            <hr class="star-light">
            <!-- <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>-->
        </div>
    </div>
</header>

<!--menu section-->
<section id="Menu">
    <div class="container">
        <h2 class="text-center">Menu</h2>
        <hr class="star-primary">
        <div class="content-menu"  style="position: relative;left:120px;">
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
            </section>

<?php include 'partials/footer.php'?>

