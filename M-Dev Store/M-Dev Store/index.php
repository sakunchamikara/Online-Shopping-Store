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
                        <a href="checkout.php">My Account</a>
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

                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
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
    
    <div class="container" id="slider"><!-- container begin -->

        <div class="center"><!-- col-md-12 begin -->
            
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide begin -->

               <ol class="carousel-indicators">

               <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>

               </ol>

               <div class="carousel-inner"><!-- carousel-inner begin -->

                    <div class="item active ">

                        <img class="center-block" src="admin_area/slides_images/1.jpg" alt="Slider Image 1">

                    </div>
                    
                    <div class="item">

                        <img src="admin_area/slides_images/2.jpg" alt="Slider Image 2">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/3.jpg" alt="Slider Image 1">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/4.jpg" alt="Slider Image 4">

                    </div>

               </div><!-- carousel-inner end -->

               <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
               </a>
               <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
               </a>

            </div><!-- carousel slide end -->

        </div><!-- col-md-12 end -->

    </div><!-- container end-->

    <div id="advantages"><!-- advantages end-->

        <div class="container"><!-- container begin -->

            <div class="same-height-row"><!-- same-height-row begin -->

                <div class="col-sm-4"><!-- col-sm-4 begin -->

                    <div class="box same-height"><!-- box same-height begin -->

                        <div class="icon"><!-- icon begin -->

                            <i class="fa fa-heart"></i>

                        </div><!-- icon end -->

                        <h3><a href="#">We love our customer</a></h3>

                        <p>we know to provide thee best servicwe know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service evere ever</p>

                    </div><!-- box same-height end -->

                </div><!-- col-sm-4 end-->

                <div class="col-sm-4"><!-- col-sm-4 begin -->

                    <div class="box same-height"><!-- box same-height begin -->

                        <div class="icon"><!-- icon begin -->

                            <i class="fa fa-tag"></i>

                        </div><!-- icon end -->

                        <h3><a href="#">Best Prices</a></h3>

                        <p>we know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service we know to provide thee best service everever</p>

                    </div><!-- box same-height end -->

                </div><!-- col-sm-4 end-->

                <div class="col-sm-4"><!-- col-sm-4 begin -->

                    <div class="box same-height"><!-- box same-height begin -->

                        <div class="icon"><!-- icon begin -->

                            <i class="fa fa-thumbs-up"></i>

                        </div><!-- icon end -->

                        <h3><a href="#">100% Original</a></h3>

                        <p>we know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service everwe know to provide thee best service ever</p>

                    </div><!-- box same-height end -->

                </div><!-- col-sm-4 end-->

            </div><!-- same-height-row end-->

        </div><!-- container end-->


    </div><!-- advantages end-->

    <div id="hot"><!-- hot begin-->

        <div class="box">

            <div class="container">

                <div class="col-md-12">

                    <h2>Our latest product</h2>

                </div>

            </div>

        </div>

    </div><!-- hot end-->

    <div class="container" id="content"><!-- container begin -->

        <div class="row"><!-- row begin -->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single begin -->

                <div class="product"><!-- product begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text begin -->

                        <h3>

                            <a href="details.php">M-dev-store-logo T-shirt</a>

                        </h3>

                        <p class="price">$30</p>

                        <p class="button">

                            <a href="details.php" class="btn btn-default">Veiw details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>

                            </a>


                        </p>
                    </div><!-- text end-->

                </div><!-- product end-->

            </div><!-- col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single begin -->

                <div class="product"><!-- product begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text begin -->

                        <h3>

                            <a href="details.php">M-dev-store-logo T-shirt</a>

                        </h3>

                        <p class="price">$30</p>

                        <p class="button">

                            <a href="details.php" class="btn btn-default">Veiw details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>

                            </a>


                        </p>
                    </div><!-- text end-->

                </div><!-- product end-->

            </div><!-- col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single begin -->

                <div class="product"><!-- product begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area/product_images/product-6.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text begin -->

                        <h3>

                            <a href="details.php">M-dev-store-logo T-shirt</a>

                        </h3>

                        <p class="price">$30</p>

                        <p class="button">

                            <a href="details.php" class="btn btn-default">Veiw details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>

                            </a>


                        </p>
                    </div><!-- text end-->

                </div><!-- product end-->

            </div><!-- col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single begin -->

                <div class="product"><!-- product begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area/product_images/product-5.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text begin -->

                        <h3>

                            <a href="details.php">M-dev-store-logo T-shirt</a>

                        </h3>

                        <p class="price">$30</p>

                        <p class="button">

                            <a href="details.php" class="btn btn-default">Veiw details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>

                            </a>


                        </p>
                    </div><!-- text end-->

                </div><!-- product end-->

            </div><!-- col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single begin -->

                <div class="product"><!-- product begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area/product_images/product-3.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text begin -->

                        <h3>

                            <a href="details.php">M-dev-store-logo T-shirt</a>

                        </h3>

                        <p class="price">$30</p>

                        <p class="button">

                            <a href="details.php" class="btn btn-default">Veiw details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>

                            </a>


                        </p>
                    </div><!-- text end-->

                </div><!-- product end-->

            </div><!-- col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single begin -->

                <div class="product"><!-- product begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area/product_images/product-9.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text begin -->

                        <h3>

                            <a href="details.php">M-dev-store-logo T-shirt</a>

                        </h3>

                        <p class="price">$30</p>

                        <p class="button">

                            <a href="details.php" class="btn btn-default">Veiw details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>

                            </a>


                        </p>
                    </div><!-- text end-->

                </div><!-- product end-->

            </div><!-- col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single begin -->

                <div class="product"><!-- product begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area/product_images/product-4.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text begin -->

                        <h3>

                            <a href="details.php">M-dev-store-logo T-shirt</a>

                        </h3>

                        <p class="price">$30</p>

                        <p class="button">

                            <a href="details.php" class="btn btn-default">Veiw details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>

                            </a>


                        </p>
                    </div><!-- text end-->

                </div><!-- product end-->

            </div><!-- col-sm-4 col-sm-6 single end-->

            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single begin -->

                <div class="product"><!-- product begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area/product_images/product-8.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text begin -->

                        <h3>

                            <a href="details.php">M-dev-store-logo T-shirt</a>

                        </h3>

                        <p class="price">$30</p>

                        <p class="button">

                            <a href="details.php" class="btn btn-default">Veiw details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add to cart
                                </i>

                            </a>


                        </p>
                    </div><!-- text end-->

                </div><!-- product end-->

            </div><!-- col-sm-4 col-sm-6 single end-->

        </div><!-- row end-->

    </div><!-- container end-->

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>