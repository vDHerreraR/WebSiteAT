<!DOCTYPE html>
<html lang="en">

<!-- <head>-->
<?php 
    require('utils/head.php');
?>
<!-- </head>-->

<body>

    <!--PRELOARD -->
    <?php require('utils/preloard.php'); ?>
    <!--END PRELOARD -->

    <!--NAVBAR -->
    <?php require('utils/navbar.php'); ?>
    <!--END NAVBAR -->

    <!-- //. sign in Popup -->
    <div class="signIn-popup login-register-popup" id="signIn-popup">
        <div class="login-register-popup-wrap">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="thumb">
                        <img src="assets/img/others/signin.png" alt="img">
                    </div>
                </div>
                <div class="col-md-6 desktop-center-item">
                    <form class="riyaqas-form-wrap">
                        <h4 class="widget-title">Sign In</h4>
                        <div class="single-input-wrap">
                            <input type="text" class="single-input">
                            <label class="">E-mail</label>
                        </div>
                        <div class="single-input-wrap">
                            <input type="password" class="single-input">
                            <label class="">Password</label>
                        </div>
                        <div class="d-block check-box-area">
                            <input id="1checkbox" type="checkbox" class="float-left">
                            <label for="1checkbox">Remember me</label>
                            <span class="float-right">Forgot your password?</span>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn btn-green" href="#">Sign In</a>
                            <span>You don't have account?</span>
                            <a class="signup" href="#">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //. sign in Popup End -->

    <!-- //. sign up Popup -->
    <div class="signUp-popup login-register-popup" id="signUp-popup">
        <div class="login-register-popup-wrap">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="thumb">
                        <img src="assets/img/others/signin.png" alt="img">
                    </div>
                </div>
                <div class="col-md-6 desktop-center-item">
                    <form class="riyaqas-form-wrap">
                        <h4 class="widget-title">Sign Up</h4>
                        <div class="single-input-wrap">
                            <input type="text" class="single-input">
                            <label class="">User Name</label>
                        </div>
                        <div class="single-input-wrap">
                            <input type="text" class="single-input">
                            <label class="">E-mail</label>
                        </div>
                        <div class="single-input-wrap">
                            <input type="password" class="single-input">
                            <label class="">Password</label>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn btn-green" href="#">Sign Up</a>
                            <span>Already have an account?</span>
                            <a class="signup" href="#">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //. sign up Popup End -->



    <!-- breadcrumb area start -->
    <div class="breadcrumb-area" style="background-image:url(assets/img/page-title-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Shop</h1>
                        <ul class="page-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

    <div class="checkout-page-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="checkout-form-wrap">
                        <div class="checkout-title">
                            <div class="row">
                                <div class="col-xl-5 col-lg-12 col-md-6">
                                    <h6>Contact information</h6>
                                </div>
                                <div class="col-xl-7 col-lg-12 col-md-6 text-xl-right text-lg-left text-md-right">
                                    <span>Already have an account?</span>
                                    <a id="signIn-btn" href="#">Sign in /</a>
                                    <a id="signUp-btn" href="#">Sign Up</a>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-form">
                            <form class="riyaqas-form-wrap">
                                <div class="row custom-gutters-20">
                                    <div class="col-md-12">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input">
                                            <label>E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input">
                                            <label>First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input">
                                            <label>Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input">
                                            <label>Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input">
                                            <label>City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <select class="select single-select">
                                                <option value="1">Country</option>
                                                <option value="2">Canada</option>
                                                <option value="3">Japan</option>
                                                <option value="3">China</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input">
                                            <label>Postal code</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input">
                                            <label>Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padding-top-50">
                                        <div class="checkout-title">
                                            <h6>Payment Methode</h6>
                                        </div>
                                        <div class="payment-method">
                                            <ul>
                                                <li>
                                                    <a href="#"><img src="assets/img/checkout/1.svg" alt="img"></a>
                                                    <a href="#"><img src="assets/img/checkout/2.svg" alt="img"></a>
                                                    <a href="#"><img src="assets/img/checkout/3.svg" alt="img"></a>
                                                    <a href="#"><img src="assets/img/checkout/4.svg" alt="img"></a>
                                                    <a href="#"><img src="assets/img/checkout/5.svg" alt="img"></a>
                                                </li>
                                                <li><a href="#">Cash On Delivery</a></li>
                                                <li><a href="#">Bank Account Payment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 text-right">
                                        <a class="btn btn-green" href="#">Place Order</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="checkout-form-product">
                        <div class="order-table table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media single-cart-product">
                                                <div class="media-left">
                                                    <img src="assets/img/checkout/7.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <span>Dj Brand Headphone HD quality</span>
                                                    <p>Model No: Dj2019</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart-product-price text-center">$150.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="total-shapping-area-wrap">
                                <div class="total-shapping-area">
                                    <div class="charge">
                                        <span>Shipping Charge:</span>
                                        <span class="amount float-right">$1.00</span>
                                    </div>
                                    <div class="total-amount">
                                        <span>Total:</span>
                                        <span class="amount float-right">$151.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--FOOTER -->
    <?php require('utils/footers.php'); ?>
    <!--END FOOTER -->

    <!-- back to top area start -->
    <?php require('utils/arrow.php');?>
    <!-- back to top area end -->

    <!--SCRIPT-->
    <?php require('utils/script.php');?>
</body>

<!-- Mirrored from codingeek.net/html/riyaqas/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 16:41:28 GMT -->

</html>