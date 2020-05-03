<?php
$active = 'Account';
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
                <li>Register</li>
            </ul>
            <!--breadcrumb end-->

        </div>
        <!--col-md-12 end-->

        <div class="col-md-3">
            <!--col-md-3 begin-->

            <?php

            include("includes/sidebar.php");

            ?>

        </div>
        <!--col-md-3 end-->

        <div class="col-md-9">
            <!--col-md-9 begin-->

            <div class="box">
                <!--box begin-->

                <div class="box-header">
                    <!--boxheader begin-->

                    <center>

                        <h2>Register a new account</h2>

                        <p class="text-muted">
                            If you have any question s,feel free to contact us our customer service work <strong>24/7</strong>
                        </p>

                    </center>

                    <form action="customer_register.php" enctype="multipart/form-data" method="post">

                        <div class="form-group">
                            <!--form-group begin-->

                            <label>Your Name</label>

                            <input type="text" name="c_name" class="form-control" required>

                        </div>
                        <!--form-group end-->

                        <div class="form-group">
                            <!--form-group begin-->

                            <label>Your Email</label>

                            <input type="text" name="c_email" class="form-control" required>

                        </div>
                        <!--form-group end-->

                        <div class="form-group">
                            <!--form-group begin-->

                            <label>Password</label>

                            <input type="password" name="c_pass" class="form-control" required>

                        </div>
                        <!--form-group end-->

                        <div class="form-group">
                            <!--form-group begin-->

                            <label>Your country</label>

                            <input type="text" name="c_country" class="form-control" required>

                        </div>
                        <!--form-group end-->

                        <div class="form-group">
                            <!--form-group begin-->

                            <label>Your city</label>

                            <input type="text" name="c_city" class="form-control" required>

                        </div>
                        <!--form-group end-->

                        <div class="form-group">
                            <!--form-group begin-->

                            <label>Your contact</label>

                            <input type="text" name="c_contact" class="form-control" required>

                        </div>
                        <!--form-group end-->

                        <div class="form-group">
                            <!--form-group begin-->

                            <label>Your Address</label>

                            <input type="text" name="c_address" class="form-control" required>

                        </div>
                        <!--form-group end-->

                        <div class="form-group">
                            <!--form-group begin-->

                            <label>Your Profile picture</label>

                            <input type="file" name="c_image" class="form-control form-height-custom" required>

                        </div>
                        <!--form-group end-->

                        <div class="text-center">

                            <button type="submit" name="register" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Register

                            </button>

                        </div>

                    </form>

                </div>
                <!--boxheader end-->

            </div>
            <!--box end-->

        </div>
        <!--col-md-9 end-->

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

<?php

if (isset($_POST['register'])) {

    $c_name = $_POST['c_name'];

    $c_email = $_POST['c_email'];

    $c_pass = $_POST['c_pass'];

    $c_country = $_POST['c_country'];

    $c_city = $_POST['c_city'];

    $c_contact = $_POST['c_contact'];

    $c_address = $_POST['c_address'];

    $c_image = $_FILES['c_image']['name'];

    $c_image_tmp = $_FILES['c_image']['tmp_name'];

    $c_ip = getRealIpUser();

    move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

    $run_customer = mysqli_query($con, $insert_customer);

    $sel_cart = "select * from cart where ip_add='$c_ip'";

    $run_cart = mysqli_query($con, $sel_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_cart > 0) {

        /// If register have items in cart ///

        $_SESSION['customer_email'] = $c_email;

        echo "<script>alert('You have been Registered Sucessfully')</script>";

        echo "<script>window.open('checkout.php','_self')</script>";
    } else {

        /// If register without items in cart ///

        $_SESSION['customer_email'] = $c_email;

        echo "<script>alert('You have been Registered Sucessfully')</script>";

        echo "<script>window.open('index.php','_self')</script>";
    }
}

?>