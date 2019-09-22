<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sakun chamikara</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <!--top begin-->
    <div id="top">
        <div class="container">    <!--top container-->
            <div class="col-md-6 offer"><!--top col-md-6 offer-->
                <a href="" class="btn btn-success btn-sm">welcom</a>
                <a href="checkout.php">4 items in your cart | Total price is $300</a>
            </div><!--end col-md-6 offer-->
            <div class="col-md-6"><!--top col-md-6 -->
                <ul class="menu"><!--top cmenu -->
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go to cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                </ul><!--end cmenu -->
            </div><!--end col-md-6 -->
        </div><!-- container end-->
    </div><!--top end-->
    
    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default begin-->
        <div class="container"><!-- container begin-->
            <div class="navbar-header"><!--navbar-header begin-->
                <a href="index.php" class="navbar-brand home"><!--navbar-brand home begin-->
                    <img src="images/ecom-store-logo.png" alt="M-dev-store-logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="M-dev-store-logo-mobile" class="visible-xs">
                </a><!--navbar-brand home end-->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div><!--navbar-header end-->
            <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse begin-->
                
                <div class="padding-nav"><!--padding-nav begin-->

                    <ul class="nav navbar-nav left"><!--nav navbar-nav left begin-->

                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li class="active">
                            <a href="cart.php">Shopping cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>

                    </ul><!--nav navbar-nav left end-->

                </div><!--padding-nav end-->

                <a href="cart.php" class="btn btn-primary navbar-btn right"><!--btn navbar-btn primary right begin-->
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in your shopping cart</span>
                </a><!--btn navbar-btn primary right end-->
                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right finish-->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn begin-->

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button><!-- btn btn-primary navbar-btn end -->
                </div><!-- navbar-collapse collapse right end-->
                
                <div class="collapse clearfix" id="search"><!-- collapse clearfix begin-->

                    <form method="get" action="result.php" class="navbar-form"><!-- navbar-form begin-->

                        <div class="input-group"><!-- input-group begin-->

                            <input type="text" name="user_query" placeholder="Search" required class="form-control">

                            <span class="input-group-btn">

                            <button type="submit" name="search" value="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>

                            </span>
 
                        </div><!-- input-group end-->
                    
                    </form><!-- navbar-form end-->

                </div><!-- collapse clearfix end-->

            </div><!--navbar-collapse collapse end--> 
        </div><!-- container end-->
    
    </div><!--navbar navbar-default end-->

    <div id="content"><!--content begin-->
        <div class="container"><!--container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->

                <ul class="breadcrumb"><!--breadcrumb begin-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Cart</li>
                </ul><!--breadcrumb end-->

            </div><!--col-md-12 end-->

            <div id="cart" class="col-md-9"><!--col-md-9 begin-->

                <div class="box"><!--box begin-->

                    <form action="cart.php" method="post" enctype="multipart/form-data">
                
                        <h1>Shopping Cart</h1>
                        <p class="text-muted">You currnetly have 3 items in your cart</p>

                        <div class="table-reponsive"><!--table-reponsive begin-->

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
                                    <tr>

                                        <td>
                                            <img src="admin_area/product_images/product-2.jpg"  alt="Product 1" class="img-responsive">
                                        </td>

                                        <td>
                                            <a href="#">M-Dev polo shitt</a>
                                        </td>

                                        <td>
                                            2
                                        </td>

                                        <td>
                                            $50
                                        </td>

                                        <td>
                                            Large
                                        </td>

                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>

                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>

                                        <td>
                                            <img src="admin_area/product_images/product-2.jpg"  alt="Product 1" class="img-responsive">
                                        </td>

                                        <td>
                                            <a href="#">M-Dev polo shitt</a>
                                        </td>

                                        <td>
                                            2
                                        </td>

                                        <td>
                                            $50
                                        </td>

                                        <td>
                                            Large
                                        </td>

                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>

                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>

                                        <td>
                                            <img src="admin_area/product_images/product-2.jpg"  alt="Product 1" class="img-responsive">
                                        </td>

                                        <td>
                                            <a href="#">M-Dev polo shitt</a>
                                        </td>

                                        <td>
                                            2
                                        </td>

                                        <td>
                                            $50
                                        </td>

                                        <td>
                                            Large
                                        </td>

                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>

                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th colspan="5" >Total</th>
                                        <th colspan="2">$100</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div><!--table-reponsive end-->

                        <div class="box-footer"><!--box-footer end-->

                            <div class="pull-left"><!--pull-left end-->

                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                </a>

                            </div><!--pull-left end-->

                            <div class="pull-right"><!--pull-right end-->

                                <button type="submit" name="update" value="Update Cart" href="" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Update Cart
                                </button>

                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed Checkout <i class="fa fa-chevron-right"></i>
                                </a>

                            </div><!--pull-right end-->

                        </div><!--box-footer end-->
                    </form>

                </div><!--box end-->

                <div id="row same-height-row"><!--row same-height-row begin-->

                    <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6" begin-->

                        <div class="box same-height headline"><!--box same-height headline begin-->

                            <h3 class="text-center">Products you may be like</h3>

                        </div><!--box same-height headline end-->
                        
                    </div><!--col-md-3 col-sm-6" end-->

                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                        <div class="product same-height"><!--product same-height begin-->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/Product-3.jpg" alt="Product 6">
                            </a>

                            <div class="text">
                                <h3><a href="details.php">M dev Tank Top women</a></h3>
                                <p class="price">$40</p>
                            </div>
                        </div><!--product same-height end-->
                    </div><!--col-md-3 col-sm-6 center-responsive end-->

                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                        <div class="product same-height"><!--product same-height begin-->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/Product-2.jpg" alt="Product 6">
                            </a>

                            <div class="text">
                                <h3><a href="details.php">M dev Tank Top women</a></h3>
                                <p class="price">$40</p>
                            </div>
                        </div><!--product same-height end-->
                    </div><!--col-md-3 col-sm-6 center-responsive end-->

                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin-->
                        <div class="product same-height"><!--product same-height begin-->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/Product-1.jpg" alt="Product 6">
                            </a>

                            <div class="text">
                                <h3><a href="details.php">M dev Tank Top women</a></h3>
                                <p class="price">$40</p>
                            </div>
                        </div><!--product same-height end-->
                    </div><!--col-md-3 col-sm-6 center-responsive end-->

                </div><!--row same-height-row end--> 

            </div><!--col-md-9 end-->

            <div class="col-md-3"><!--col-md-3 begin-->
                <div class="box" id="order-summary"><!--box begin-->
                    <div class="box-header"><!--box-header begin-->
                        <h3>Order-Summary</h3>
                    </div>
                    <p class="text-muted">
                        Shiping and adtional cost are clculatrd based on value you have enterd
                    </p>

                    <div class="table-reponsive"><!--table-reponsive begin-->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Sub Total</td>
                                    <th>$200</th>
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
                                    <th>$200</th>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--table-reponsive end-->
                </div><!--box end-->
            </div><!--col-md-3 end-->

        </div><!--container end-->
    </div><!--content end-->

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>