<?php
    $active='Account';
    include("includes/header.php ");
?>
    
    <div id="content"><!--content begin-->
        <div class="container"><!--container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->

                <ul class="breadcrumb"><!--breadcrumb begin-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Register</li>
                </ul><!--breadcrumb end-->

            </div><!--col-md-12 end-->

            <div class="col-md-3"><!--col-md-3 begin-->

                <?php

                    include("includes/sidebar.php");

                ?>

            </div><!--col-md-3 end-->

            <div class="col-md-9"><!--col-md-9 begin-->

                <div class="box"><!--box begin-->

                    <div class="box-header"><!--boxheader begin-->

                    <center>

                        <h2>Register a new account</h2>

                        <p class="text-muted">
                            If you have any question s,feel free to contact us our customer service work <strong>24/7</strong>
                        </p>

                    </center>

                    <form action="customer_register.php" enctype="multipart/form-data" method="post">

                        <div class="form-group"><!--form-group begin-->

                            <label>Your Name</label>

                            <input type="text" name="c_name" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Your Email</label>

                            <input type="text" name="c_email" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Password</label>

                            <input type="password" name="pass" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Your country</label>

                            <input type="text" name="c_country" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Your city</label>

                            <input type="text" name="c_city" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Your contact</label>

                            <input type="text" name="c_contact" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Your Address</label>

                            <input type="text" name="c_address" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Your Profile picture</label>

                            <input type="file" name="c_image" class="form-control form-height-custom" required>

                        </div><!--form-group end-->

                        <div class="text-center">

                            <button type="submit" name="submit" class="btn btn-primary">
                                
                            <i class="fa fa-user-md"></i> Register

                            </button>
                            
                        </div>

                    </form>
                    
                    </div><!--boxheader end-->

                </div><!--box end-->

            </div><!--col-md-9 end-->

        </div><!--container end-->
    </div><!--content end-->

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>