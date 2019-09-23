<?php
    include("includes/header.php ");
?>
    
    <div id="content"><!--content begin-->
        <div class="container"><!--container begin-->
            <div class="col-md-12"><!--col-md-12 begin-->

                <ul class="breadcrumb"><!--breadcrumb begin-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Shop</li>
                </ul><!--breadcrumb end-->

            </div><!--col-md-12 end-->

            <div class="col-md-3"><!--col-md-3 begin-->

                <?php

                    include("includes/sidebar.php");

                ?>

            </div><!--col-md-3 end-->

            <div class="col-md-9"><!--col-md-9 begin-->

                <div id="productMain" class="row"><!--row begin-->
                    <div class="col-sm-6"><!--col-sm-6 begin-->
                        <div id="mainImage"><!--mainImage begin-->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--carousel slide begin-->
                                <ol class="carousel-indicators"><!--carousel-indicators begin-->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol><!--carousel-indicators end-->

                                <div class="carousel-inner mainImage">
                                    <div class="item active">
                                        <img src="admin_area/product_images/Product-3.jpg" alt="Product 3-a">
                                    </div>
                                    <div class="item">
                                        <img src="admin_area/product_images/Product-1.jpg" alt="Product 3-b">
                                    </div>
                                    <div class="item">
                                        <img src="admin_area/product_images/Product-7.jpg" alt="Product 3-c">
                                    </div>
                                </div>

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a href="#myCarousel" class="right carousel-control"data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div><!--carousel slide end-->
                        </div><!--mainImage end-->
                    </div><!--col-sm-6 end-->

                    <div class="col-sm-6"><!--col-sm-6 begin-->
                        <div class="box"><!--box begin-->
                            <h1 class="text-center">M Dev Polo Shirt Men</h1>

                            <form action="details.php" class="form-horizontal" method="post"><!--form-horizontal begin-->
                                <div class="form-group"><!--form-group begin-->
                                    <label for="" class="col-md-5 control-label">product Quantity</label>

                                    <div class="col-md-7">
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                </div><!--form-group end-->

                                <div class="form-group"><!--form-group begin-->
                                    <label for="" class="col-md-5 control-label">Product Size</label>

                                    <div class="col-md-7">
                                        <select name="product_size" id="" class="form-control">
                                            <option>Select a size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>
                                </div>    <!--form-group end-->
                                <p class="price">$50</p>
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">Add to cart</button></p>

                            </form><!--form-horizontal end-->

                        </div><!--box end-->

                        <div class="row nxtImages" id="thumbs"><!-- row begin -->
                            
                            <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb begin -->
                                    <img src="admin_area/product_images/Product-1.jpg" alt="product 1" class="img-responsive">
                                </a><!--thumb end-->
                            </div><!--col-xs-4 end-->
                            
                            <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb begin -->
                                    <img src="admin_area/product_images/Product-2.jpg" alt="product 1" class="img-responsive">
                                </a><!--thumb end-->
                            </div><!--col-xs-4 end-->
                            
                            <div class="col-xs-4"><!-- col-xs-4 begin -->
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!-- thumb begin -->
                                    <img src="admin_area/product_images/Product-3.jpg" alt="product 1" class="img-responsive">
                                </a><!--thumb end-->
                            </div><!--col-xs-4 end-->

                        </div><!-- row end -->
                    </div><!--col-sm-6 end-->

                </div><!--row end-->

                <div class="box" id="details"><!--box begin-->

                    <h4>Product details</h4>
                    <p>
                    ohg0ajrfa oajrf0aer knffoiv if ii gopa gparf apsrgv sdgobjaprvo dfovapdfgaskrgekjt goemtp ep rvpaienrfkja eraeo afkvvj oa rv
                    </p>

                    <h4>Size</h4>

                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>

                    <hr>

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

        </div><!--container end-->

    </div><!--content end-->

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>