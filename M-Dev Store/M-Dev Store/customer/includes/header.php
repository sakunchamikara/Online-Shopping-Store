<?php
include("includes/db.php");
include("functions/functions.php");

?> 
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
                <a href="" class="btn btn-success btn-sm">welcome</a>
                <a href="checkout.php"><?php items(); ?> items in your cart | Total price is <?php total_price(); ?></a>
            </div><!--end col-md-6 offer-->
            <div class="col-md-6"><!--top col-md-6 -->
                <ul class="menu"><!--top cmenu -->
                    <li>
                        <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Go to cart</a>
                    </li>
                    <li>
                        <a href="../checkout.php">Login</a>
                    </li>
                </ul><!--end cmenu -->
            </div><!--end col-md-6 -->
        </div><!-- container end-->
    </div><!--top end-->
    
    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default begin-->
        <div class="container"><!-- container begin-->
            <div class="navbar-header"><!--navbar-header begin-->
                <a href="../index.php" class="navbar-brand home"><!--navbar-brand home begin-->
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
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact</a>
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