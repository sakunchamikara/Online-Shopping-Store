<?php
$active = 'Cart';
include("includes/header.php ");
?>

<div id="content">
    <!--content begin-->
    <div class="container">
        <!--container begin-->
        <div class="col-md-12">
            <!--col-md-12 begin-->

            <ul class="breadcrumb">
                <!--breadcrumb begin-->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>Cart</li>
            </ul>
            <!--breadcrumb end-->

        </div>
        <!--col-md-12 end-->

        <div id="cart" class="col-md-9">
            <!--col-md-9 begin-->

            <div class="box">
                <!--box begin-->

                <form action="cart.php" method="post" enctype="multipart/form-data">

                    <h1>Shopping Cart</h1>

                    <?php

                    $ip_add = getRealIpUser();
                    $select_cart = "select * from cart where ip_add='$ip_add'";
                    $run_cart = mysqli_query($con, $select_cart);
                    $count = mysqli_num_rows($run_cart);

                    ?>

                    <p class="text-muted">You currnetly have <?php echo $count; ?> items in your cart</p>

                    <div class="table-reponsive">
                        <!--table-reponsive begin-->

                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Quentity</th>
                                    <th>Unit Price</th>
                                    <th>size</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="2">Sub-total</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php

                                $total = 0;

                                while ($row_cart = mysqli_fetch_array($run_cart)) {

                                    $pro_id = $row_cart['p_id'];

                                    $pro_size = $row_cart['size'];

                                    $pro_qty = $row_cart['qty'];

                                    $get_products = "select * from products where product_id='$pro_id'";

                                    $run_products = mysqli_query($db, $get_products);

                                    while ($row_products = mysqli_fetch_array($run_products)) {

                                        $product_title = $row_products['product_title'];
                                        $product_img1 = $row_products['product_img1'];
                                        $only_price = $row_products['product_price'];
                                        $product_title = $row_products['product_title'];
                                        $sub_total = $row_products['product_price'] * $pro_qty;
                                        $total += $sub_total;


                                ?>
                                        <tr>

                                            <td>
                                                <img src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 1" class="img-responsive">
                                            </td>

                                            <td>
                                                <a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title ?></a>
                                            </td>

                                            <td>
                                                <?php echo $pro_qty ?>
                                            </td>

                                            <td>
                                                <?php echo $only_price ?>
                                            </td>

                                            <td>
                                                <?php echo $pro_size ?>
                                            </td>

                                            <td>
                                                <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>" </td> <td>
                                                <?php echo $sub_total; ?>
                                            </td>
                                        </tr>

                                <?php }
                                } ?>

                            </tbody>

                            <tfoot>

                                <tr>

                                    <th colspan="5">Total</th>

                                    <th colspan="2"><?php echo $total; ?></th>

                                </tr>

                            </tfoot>

                        </table>

                    </div>
                    <!--table-reponsive end-->

                    <div class="box-footer">
                        <!--box-footer end-->

                        <div class="pull-left">
                            <!--pull-left end-->

                            <a href="index.php" class="btn btn-default">
                                <i class="fa fa-chevron-left"></i> Continue Shopping
                            </a>

                        </div>
                        <!--pull-left end-->

                        <div class="pull-right">
                            <!--pull-right end-->

                            <button type="submit" name="update" value="Update Cart" href="" class="btn btn-default">
                                <i class="fa fa-refresh"></i> Update Cart
                            </button>

                            <a href="checkout.php" class="btn btn-primary">
                                Proceed Checkout <i class="fa fa-chevron-right"></i>
                            </a>

                        </div>
                        <!--pull-right end-->

                    </div>
                    <!--box-footer end-->
                </form>

            </div>
            <!--box end-->

            <?php

            function update_cart()
            {

                global $con;

                if (isset($_POST['update'])) {

                    foreach ($_POST['remove'] as $remove_id) {

                        $delete_product = "delete from cart where p_id='$remove_id'";

                        $run_delete = mysqli_query($con, $delete_product);

                        if ($run_delete) {

                            echo "<script>window.open('cart.php','_self')</script>";
                        }
                    }
                }
            }

            echo $up_cart = update_cart();

            ?>
            <div id="row same-height-row">
                <!--row same-height-row begin-->

                <div class="col-md-3 col-sm-6">
                    <!--col-md-3 col-sm-6" begin-->

                    <div class="box same-height headline">
                        <!--box same-height headline begin-->

                        <h3 class="text-center">Products you may be like</h3>

                    </div>
                    <!--box same-height headline end-->

                </div>
                <!--col-md-3 col-sm-6" end-->

                <?php

                $get_products = "select * from products order by rand() LIMIT 0,3";
                $run_products = mysqli_query($con, $get_products);

                while ($row_products = mysqli_fetch_array($run_products)) {

                    $pro_id = $row_products['product_id'];
                    $pro_title = $row_products['product_title'];
                    $pro_price = $row_products['product_price'];
                    $pro_img1 = $row_products['product_img1'];

                    echo "
                        
                        <div class='col-md-3 col-sm-6 center-responsive'><!--col-md-3 col-sm-6 center-responsive begin-->
                            <div class='product same-height'><!--product same-height begin-->
                                <a href='details.php?pro_id=$pro_id'>
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 6'>
                                </a>

                                <div class='text'>
                                    <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                                    <p class='price'>$pro_price</p>
                                </div>
                            </div><!--product same-height end-->
                        </div><!--col-md-3 col-sm-6 center-responsive end-->

                        ";
                }

                ?>
            </div>
            <!--row same-height-row end-->

        </div>
        <!--col-md-9 end-->

        <div class="col-md-3">
            <!--col-md-3 begin-->
            <div class="box" id="order-summary">
                <!--box begin-->
                <div class="box-header">
                    <!--box-header begin-->
                    <h3>Order-Summary</h3>
                </div>
                <p class="text-muted">
                    Shiping and adtional cost are clculatrd based on value you have enterd
                </p>

                <div class="table-reponsive">
                    <!--table-reponsive begin-->
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Order Sub Total</td>
                                <th>$<?php echo $total; ?></th>
                            </tr>
                            <tr>
                                <td>Shipping and handling</td>
                                <th>$0</th>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <th>$0</th>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th>$<?php echo $total; ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--table-reponsive end-->
            </div>
            <!--box end-->
        </div>
        <!--col-md-3 end-->

    </div>
    <!--container end-->
</div>
<!--content end-->

<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>

</html>