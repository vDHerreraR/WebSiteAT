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

    <!-- Ui element start -->
    <div class="job-listing-page pd-top-190">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center">
                        <h2 class="title">Apply Now</h2>
                        <p>Please upload your resume and fill in the fields below to apply for your desired position.
                        </p>
                    </div>
                    <div class="job-apply-area">
                        <form class="riyaqas-form-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input-wrap">
                                        <input type="text" class="single-input">
                                        <label>Applying for the of</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input-wrap">
                                        <textarea class="single-input" cols="20"></textarea>
                                        <label>Portfolio Link</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input-wrap">
                                        <textarea class="single-input" cols="20"></textarea>
                                        <label>Write Your Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-file riyaqas-file-input-wrap">
                                        <input type="file" class="riyaqas-file-input" id="sb-file-input">
                                        <label class="custom-file-label" for="sb-file-input">Upload Your Resume</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <a class="btn btn-blue" href="#">Submit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ui element End -->

    <!--FOOTER -->
    <?php require('utils/footers.php'); ?>
    <!--END FOOTER -->

    <!-- back to top area start -->
    <?php require('utils/arrow.php');?>
    <!-- back to top area end -->


    <!--SCRIPT-->
    <?php require('utils/script.php');?>
</body>

<!-- Mirrored from codingeek.net/html/riyaqas/job-apply.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 16:44:35 GMT -->

</html>