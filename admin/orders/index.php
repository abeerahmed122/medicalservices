<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>


    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Orders</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Service</th>
                    <th scope="col">City</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('orders');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"><?php echo $row['ord_name']; ?></td>
                    <td class="text-center"><?php echo $row['ord_mails']; ?></td>
                    <td class="text-center"><?php echo $row['ord_mobile']; ?></td>
                    <?php

                        $rowCity = getRow('cities',$row['ord_city_id'],'city_id');
                        $rowService = getRow('services','serv_id',$row['ord_serv_id']);
                    ?>
                    <td class="text-center"><?php echo  $rowService['serv_name']; ?></td>
                    <td class="text-center"><?php echo $rowCity['city_name']; ?></td>
                    <td class="text-center"><?php echo $row['ord_notes']; ?></td>
                    
                    <td class="text-center">
                        <a href="#" class="btn btn-danger delete" data-field="order_id" data-id="<?php echo $row['order_id']; ?>" data-table="orders" >Delete</a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>

<?php require BLA.'inc/footer.php';  ?>




   

