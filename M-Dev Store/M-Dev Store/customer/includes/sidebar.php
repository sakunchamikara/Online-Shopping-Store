<div class="panel panel-default sidebar-menu"><!--panel panel-default sidebar-menu begin-->

    <div class="panel-heading"><!--panel-heading begin-->

        <center>

            <img src="customer_images/download.jpg" alt="Mdev Profile">

        </center>

        <br>

        <h3 align="center" class="panel-title">Name: Mr. sakun</h3>
    </div><!--panel-heading end-->
    <div class="panel-body"><!--panel-body begin-->
        <ul class="nav-pills nav-stacked nav">
            <li class="<?php if(isset($_GET['my_orders'])){echo"active";}?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> My Orders
                </a>
            </li>

            <li class="<?php if(isset($_GET['pay_offline'])){echo"active";}?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Pay Offline 
                </a>
            </li>

            <li class="<?php if(isset($_GET['edit_account'])){echo"active";}?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Edit Account
                </a>
            </li>

            <li class="<?php if(isset($_GET['change_pass'])){echo"active";}?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Change Password
                </a>
            </li>            
            
            <li class="<?php if(isset($_GET['delete_account'])){echo"active";}?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i> Delete Account
                </a>
            </li>

            <li>
                <a href="logout.php">
                    <i class="fa fa-sigh-out"></i> Log Out
                </a>
            </li>
        </ul>
    </div><!--panel-body end-->
</div><!--panel panel-default sidebar-menu end-->