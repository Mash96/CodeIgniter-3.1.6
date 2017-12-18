<?php include 'partials/header.php'?>


<div id="sidebar2">




<section id="register">
    <br>
    <br>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Username</th>
                <th>Order_id</th>
                <th>Food_id</th>
                <th>Main item</th>
                <th>Side item</th>
                <th>Quantity</th>
                <th>Actor</th>
            </tr>
            </thead>
            <tbody>

            <?php
            if($order->num_rows()>0)
            {
                foreach ($order->result() as $row){
                    ?>
                    <tr>
                        <td><?php echo $row->username;?></td>
                        <td><?php echo $row->order_id;?></td>
                        <td><?php echo $row->food_id;?></td>
                        <td><?php echo $row->main_item;?></td>
                        <td><?php echo $row->side_item;?></td>
                        <td><?php echo $row->quantity;?></td>
                        <td><?php echo $row->actor;?>
                           <form  action="<?php echo base_url('index.php/owner/buttonRun/')?><?php echo $row->username,'/',$row->order_id,'/',$row->food_id,'/',$row->actor;?>" method="POST">
                               <button type="submit" class="btn btn-primary  btn-xs">
                                <?php
                                if($row->actor=='false') {
                                    echo 'Make True';
                                }
                                else{
                                    echo 'Make false';
                                };
                                ?>
                            </button>
                           </form>
                        </td>

                    </tr>
                    <?php
                }
            }
            else{
                ?>
                <tr>
                    <td colspan="3">No Data Found</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>
</section>


</div>
<?php include 'partials/footer.php'?>

