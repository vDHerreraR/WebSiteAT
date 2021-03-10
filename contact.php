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
                        <h1 class="page-title">Contact</h1>
                        <ul class="page-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

    <!-- contact form start -->
    <div class="contact-form-area pd-top-112">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center w-100">
                        <h2 class="title">Send you <span>inquary</span></h2>
                        <p>Why I say old chap that is, spiffing jolly good a load of old tosh spend a penny tosser arse
                            over tit, excuse my French owt to do with me up the kyver matie boy.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5">
                    <img src="assets/img/others/21.png" alt="blog">
                </div>
                <div class="col-lg-7 offset-xl-1">
                    <form class="riyaqas-form-wrap mt-5 mt-lg-0" method="post"
                        action="<?php htmlspecialchars($_SERVER['PHP_SELF'])  ?>">
                        <div class="row custom-gutters-16">
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input" name="name">
                                    <label>Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input" name="email">
                                    <label>E-mail</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <input type="text" class="single-input" name="subject">
                                    <label>Subject</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-wrap">
                                    <textarea class="single-input textarea" cols="20" name="description"></textarea>
                                    <label class="single-input-label">Message</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-5">
                                <div class="single-input-wrap">
                                    <div class="g-recaptcha" data-sitekey="6LcT4nkaAAAAAMEJeahKHxhKpY1O7iSFuFzpOhhd">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-red mt-0" value="Send" name="enviar">
                            <div class="status bg-green ">
                                <?php
                            if (isset($_POST['enviar'])) {
                                $userName = $_POST['user'];
                                $email = $_POST['email'];
                                $subject = $_POST['subject'];
                                $message = $_POST['description'];

                                $email_from = 'victor_herreraro@fet.edu.co';
                                $email_subject = "Mensaje de contacto";
                                $email_body ="Name: $userName. \n".
                                            "Email: $email. \n".
                                            "Titulo: $subject. \n".
                                            "Message: $message. \n";

                                $email_to = "drogasvargas99@gmail.com";
                                $header = "From: $email_from \r\n";
                                $header .= "Reply-To: $email \r\n"; 

                                $obj = new stdClass();
                                $obj->secret = "6LcT4nkaAAAAAFVQbz4mJxylC8j5RXdTwwDB_gVE";
                                $obj->response = $_POST['g-recaptcha-response'];
                                $obj->remoteip = $_SERVER['REMOTE_ADDR'];
                                $url = 'https://www.google.com/recaptcha/api/siteverify';
                                $options = array(
                                    'http' => array(
                                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                                    'method' => 'POST',
                                    'content' => http_build_query($obj)
                                    )
                                    );

                                $context = stream_context_create($options);
                                $result = file_get_contents($url, false, $context);
                                $validar = json_decode($result);

                                if ($validar->success) {
                                    mail($email_to,$email_subject,$email_body,$header);
                                    echo "Mensaje Enviado";
                                }else {
                                    echo "Mensaje No Enviado, Se presento un error por favor mirar";
                                    
                                }
                            }
                        ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- map area start -->
    <div class="map-area pd-top-120">
        <div class="container">
            <div class="map-area-wrap">
                <div class="row no-gutters">
                    <div class="col-lg-8">
                        <div id="map"></div>
                    </div>
                    <div class="col-lg-4 desktop-center-item">
                        <div>
                            <div class="contact-info">
                                <h4 class="title">Contact info:</h4>
                                <p class="sub-title">Why I say old chap that is, spiffing jolly good a load of old tosh
                                    spend a penny tosser arse over tosh</p>
                                <p>Address: 198 West 21th Street, Suite 721 <br> New York NY 10010</p>
                                <p><span>Mobile:</span> +088 012121240</p>
                                <p><span>E-mail:</span> riyaqas@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map area End -->

    <!--FOOTER -->
    <?php require('utils/footers.php'); ?>
    <!--END FOOTER -->

    <!-- back to top area start -->
    <?php require('utils/arrow.php');?>
    <!-- back to top area end -->

    <!--SCRIPT-->
    <?php require('utils/script.php');?>
</body>

<!-- Mirrored from codingeek.net/html/riyaqas/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 16:44:36 GMT -->

</html>