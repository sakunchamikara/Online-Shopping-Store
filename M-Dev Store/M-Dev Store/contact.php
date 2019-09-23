<?php
    $active='Contact';
    include("includes/header.php ");
?>
    
    <div id="content"><!--content begin-->
        <div class="container"><!--container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->

                <ul class="breadcrumb"><!--breadcrumb begin-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Contact us</li>
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

                        <h2>Feel free to contact us</h2>

                        <p class="text-muted">
                            If you have any question s,feel free to contact us our customer service work <strong>24/7</strong>
                        </p>

                    </center>

                    <form action="contact.php" method="post">

                        <div class="form-group"><!--form-group begin-->

                            <label>Name</label>

                            <input type="text" name="name" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Emain</label>

                            <input type="text" name="email" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Subject</label>

                            <input type="text" name="subject" class="form-control" required>

                        </div><!--form-group end-->

                        <div class="form-group"><!--form-group begin-->

                            <label>Message</label>

                            <textarea name="message" class="form-control"></textarea>

                        </div><!--form-group end-->

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user-md"></i> Send Massage
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