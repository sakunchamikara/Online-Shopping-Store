<div class="box">
    <!-- box Begin -->

    <?php

    $session_email = $_SESSION['customer_email'];

    $select_customer = "select * from customers where customer_email='$session_email'";

    $run_customer = mysqli_query($con, $select_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_id = $row_customer['customer_id'];

    ?>

    <h1 class="text-center">Payment Options For You</h1>

    <p class="lead text-center">
        <!-- lead text-center Begin -->

        <a href="order.php?c_id=<?php echo $customer_id ?>"> Offline Payment </a>

    </p><!-- lead text-center Finish -->

    <center>
        <!-- center Begin -->

        <!-- lead Begin -->
        <!-- <p class="lead">

            <a href="#">

                Paypall Payment
                <img class="img-responsive" src="images/paypall_img.png" alt="img-paypall">
                
            </a>

        </p>  -->
        <!-- lead Finish -->

        <!-- paypal details begin -->
        <script src="https://www.paypal.com/sdk/js?client-id=AXdPFk_VFLTHsTArslR4FuV5NQacG8v8_OdaF5KXheAwOBrkW6LpJ-_zlF3CIObFgmXEN0QKe4QWTTq8">
            // Required. Replace SB_CLIENT_ID with your sandbox client ID.
        </script>
        <!-- paypal details end -->
        <div id="paypal-button-container"></div>

        <script>
            paypal.Buttons({
                createOrder: function(data, actions) {
                    // This function sets up the details of the transaction, including the amount and line item details.
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "<?php total_price(); ?>"
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    // This function captures the funds from the transaction.
                    return actions.order.capture().then(function(details) {
                        // This function shows a transaction success message to your buyer.
                        alert('Transaction completed by ' + details.payer.name.given_name);
                    });
                }
            }).render('#paypal-button-container');
            //This function displays Smart Payment Buttons on your web page.
        </script>

    </center>

    <!-- center Finish -->

</div><!-- box Finish -->