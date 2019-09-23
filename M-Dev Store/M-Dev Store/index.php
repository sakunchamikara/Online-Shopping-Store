<?php
    $active="Home";
    include("includes/header.php ");
?>
    
    <div class="container" id="slider"><!-- container begin -->

        <div class="center"><!-- col-md-12 begin -->
            
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide begin -->

               <ol class="carousel-indicators">

               <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>

               </ol>

               <div class="carousel-inner"><!-- carousel-inner begin

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

                    </div> -->

               <?php 

               $get_slides = "select * from slider LIMIT 0,1";

               $run_slides = mysqli_query($con,$get_slides);

               while($row_slides=mysqli_fetch_array($run_slides))
               {
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo"
                    
                    <div class='item active'>
                    
                    <img src='admin_area/slides_images/$slide_image'>

                    </div>

                    ";
               } 

               $get_slides = "select * from slider LIMIT 1,3";

               $run_slides = mysqli_query($con,$get_slides);

               while($row_slides=mysqli_fetch_array($run_slides))
               {
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo"
                    
                    <div class='item'>
                    
                    <img src='admin_area/slides_images/$slide_image'>

                    </div>

                    ";
               }
               
               ?>

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

            <?php 

            getPro();

            ?>

        </div><!-- row end-->

    </div><!-- container end-->

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>
