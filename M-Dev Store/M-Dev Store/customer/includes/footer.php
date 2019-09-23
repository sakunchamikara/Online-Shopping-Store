<div id="footer"><!-- footer begin -->
    <div class="container"><!-- container begin -->
        <div class="row"><!-- row begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin -->

                <h4>Pages</h4>

                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul>

                <h4>User Section</h4>

                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 end -->

            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin -->

                <h4>Top Products Catogories</h4>

                <ul>

                    <?php

                        $get_p_cats="select * from product_categories";

                        $run_p_cats=mysqli_query($con,$get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id=$row_p_cats['p_cat_id'];
                            $p_cat_title=$row_p_cats['p_cat_title'];

                            echo "
                            
                            <li>
                            
                                <a href='shop.php?p_cat=$p_cat_id'>
                                $p_cat_title
                                </a>

                            </li>
                            
                            ";
                        }

                    ?>

                </ul>

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 end -->

            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin -->

                <h4>Find Us:</h4>

                <p>
                    <strong>M Dev midea inc.</strong>
                    <br>Ciber
                    <br>Ciracus
                    <br>0767035245
                    <br>sakun@gmail.com
                    <br><strong>Sakun</strong>
                </p>

                <a href="contact.php">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 end -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin -->

                <h4>Get the NEWS</h4>

                <p class="text-muted">
                    Subscribe to get latest news from us
                </p>

                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=aweber/pMpv', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <span class="input-group-btn">
                            <input type="submit" value="subscribe" class="btn btn-default">
                            <input type="hidden" value="aweber/pMpv" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Keep In Touch</h4>
    
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>

            </div><!-- col-sm-6 col-md-3 end -->


        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- footer end -->

<div id="copyright">
    <div class="container">
        <div class="col-md-6">

            <p class="pull-left">
                <strong>&copy; 2018 M Dev Store All Rights Recerve</strong>
            </p>

        </div>
        
        <div class="col-md-6">

            <p class="pull-right">Theme By: <a href="#">Sakun</a></p>

        </div>
    </div>
</div>