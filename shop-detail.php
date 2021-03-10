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


    <!-- breadcrumb area start -->
    <div class="breadcrumb-area" style="background-image:url(assets/img/page-title-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Shop Details</h1>
                        <ul class="page-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Shop Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

    <div class="single-product-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="product-thumbnail-wrapper">
                        <div class="row custom-gutters-16">
                            <div class="col-3">
                                <div class="product-thumbnail-carousel">
                                    <div class="single-thumbnail-item">
                                        <img src="assets/img/shop-details/01.png" alt="shop">
                                    </div>
                                    <div class="single-thumbnail-item">
                                        <img src="assets/img/shop-details/02.png" alt="shop">
                                    </div>
                                    <div class="single-thumbnail-item">
                                        <img src="assets/img/shop-details/03.png" alt="shop">
                                    </div>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="single-thumbnail-slider">
                                    <div class="slider-item">
                                        <img src="assets/img/shop-details/1.png" alt="shop">
                                    </div>
                                    <div class="slider-item">
                                        <img src="assets/img/shop-details/2.png" alt="shop">
                                    </div>
                                    <div class="slider-item">
                                        <img src="assets/img/shop-details/3.png" alt="shop">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product-description">
                        <span class="customer-review"><i class="fa fa-star"></i>4.8 <span>(10 Customer
                                review)</span></span>
                        <h4 class="title">Stylish Watch Red color</h4>
                        <div class="price">
                            <span>$160.00</span>
                            <del>$190.00</del>
                        </div>
                        <p class="content">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form.</p>
                        <div class="quantity-wrap">
                            <div class="quantity float-left">
                                <input type="number" step="1" min="0" max="100" value="1" title="Qty"
                                    class="input-text qty text">
                            </div>
                            <button class="btn btn-gray ml-xl-5 ml-sm-4 cart-btn" type="button" id="cart-btn">Add to
                                cart <i class="fa fa-shopping-cart"></i></button>
                        </div>
                        <span class="d-block check-box-area">
                            <input id="1checkbox" type="checkbox">
                            <label for="1checkbox">I Agree with the terms and conditions</label>
                        </span>
                        <div class="row">
                            <div class="col-sm-6 col-7">
                                <button class="w-100 btn btn-gray" type="button">Buy it now</button>
                            </div>
                        </div>
                        <div class="category">
                            <span>Category: </span>
                            <a href="#">Watch</a>
                        </div>
                        <div class="tags">
                            <span>Tag: </span>
                            <a href="#">Watch,</a>
                            <a href="#">Smart Watch,</a>
                            <a href="#">Time</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product-information">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="descr-tab" data-toggle="tab" href="#descr" role="tab"
                                    aria-controls="descr" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                    aria-controls="reviews" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="descr" role="tabpanel"
                                aria-labelledby="descr-tab">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <div class="description-tab-content">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. There are
                                                many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration.</p>
                                            <p class="mb-0">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="review-area">
                                            <h6 class="review-title">Reviews (32)</h6>
                                            <div class="single-review">
                                                <div class="media">
                                                    <img class="media-left" src="assets/img/blog/comments/1.png"
                                                        alt="img">
                                                    <div class="media-body">
                                                        <span>Jabel Ali</span>
                                                        <p>CEO</p>
                                                    </div>
                                                </div>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even
                                                    slightly believable.</p>
                                            </div>
                                        </div>
                                        <div class="review-area">
                                            <div class="single-review">
                                                <div class="media">
                                                    <img class="media-left" src="assets/img/blog/comments/1.png"
                                                        alt="img">
                                                    <div class="media-body">
                                                        <span>Jabel Ali</span>
                                                        <p>CEO</p>
                                                    </div>
                                                </div>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even
                                                    slightly believable.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="review-title">Your Reviews</h6>
                                <form class="riyaqas-form-wrap">
                                    <div class="row custom-gutters-16">
                                        <div class="col-md-6">
                                            <div class="single-input-wrap">
                                                <textarea class="single-input textarea" cols="20"></textarea>
                                                <label class="single-input-label">Review</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input-wrap">
                                                <input type="text" class="single-input">
                                                <label>Name</label>
                                            </div>
                                            <div class="single-input-wrap">
                                                <input type="text" class="single-input">
                                                <label>E-mail</label>
                                            </div>
                                        </div>
                                        <div class="col-12 text-right">
                                            <a class="btn btn-green" href="#">Submit</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-page-area single-shop-related-product mg-top-105">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Related Products</h2>
            </div>
            <div class="row custom-gutters-16">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-shop">
                        <div class="thumb">
                            <a class="product-badge btn-blue" href="#">New</a>
                            <img src="assets/img/shop/5.png" alt="shop">
                            <div class="cart-btn">
                                <div class="cart-btn-wrap">
                                    <a class="btn btn-red" href="#">Add to card <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <a href="#">Stylish Watch Red color</a>
                            <div class="price">
                                <span>$160.00</span><del>$190.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-shop">
                        <div class="thumb">
                            <img src="assets/img/shop/6.png" alt="shop">
                            <div class="cart-btn">
                                <div class="cart-btn-wrap">
                                    <a class="btn btn-red" href="#">Add to card <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <a href="#">Stylish Watch Red color</a>
                            <div class="price">
                                <span>$160.00</span><del>$190.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-shop">
                        <div class="thumb">
                            <img src="assets/img/shop/7.png" alt="shop">
                            <div class="cart-btn">
                                <div class="cart-btn-wrap">
                                    <a class="btn btn-red" href="#">Add to card <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <a href="#">Stylish Watch Red color</a>
                            <div class="price">
                                <span>$160.00</span><del>$190.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-shop">
                        <div class="thumb">
                            <img src="assets/img/shop/8.png" alt="shop">
                            <div class="cart-btn">
                                <div class="cart-btn-wrap">
                                    <a class="btn btn-red" href="#">Add to card <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <a href="#">Stylish Watch Red color</a>
                            <div class="price">
                                <span>$160.00</span><del>$190.00</del>
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
<!-- Mirrored from codingeek.net/html/riyaqas/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 16:44:02 GMT -->

</html>