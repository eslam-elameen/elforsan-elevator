<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الفرسان</title>
    <!-----------website favicon ------------------>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!---------- font awesome --------------->
    <script src="https://kit.fontawesome.com/e9c094e37f.js" crossorigin="anonymous"></script>
    <!-----------bootstrap ------------------>
    <link rel="stylesheet" id="lang" href="./css/bootstrap.min.css">
    <!--------------lightbox---------------->
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="css/animate.min.css" rel="stylesheet" />
    <!------------magnific poup------------->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-------------animate css-------------->
    <link rel="stylesheet" href="css/aos.css">
    <!--------------owl--------------->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!--------------style css--------------->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- preloader -->
    <div class="preloader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <!-- preloader -->

    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light" dir="ltr">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="assets/logo/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent" dir="rtl">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.html">الـرئيسية</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.html#about">من نحن</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.html#why">لماذا نحن</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.html#products">منتجات الفرسان</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.html#agents">نحن وكلاء</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.html#clients">آراء العملاء</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.html#contact">تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end navbar -->

    <style>
        body {
            position: static
        }
        .header_area .navbar {
            background-color: #1B2B5D;
        }

        footer {
            position: absolute;
            width: 100%;
            bottom: 0;
            background-color: #1b2b5d
        }

        h3 {
            text-align: center;
            width: 100%;
            line-height: 2;
            color: #000;
        }

    </style>


    <main id="main" style="margin-top: 150px;">
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>
                        <?php
                            $email= "SALES@elforsan-elevator.com";

                            if (!empty($_POST)){

                                if(empty($_POST['name']) or empty($_POST['tel']) or empty($_POST['email']) or empty($_POST['message'])){
                                    echo("لم تقم بتعبئة جميع الخانات <br>");

                                }
                                $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                                if(!preg_match($regex, $_POST['email'])){
                                    echo("بريد خاطئ");

                                }
                                else{
                                    $message  = "الاسم :\n{$_POST["name"]}\n";
                                    $message .= "الموبايل :\n{$_POST["tel"]}\n";
                                    $message .= "البريد الإلكتروني :\n{$_POST["email"]}\n";
                                    $message .= "الرسالة :\n{$_POST["message"]}\n";
                                    $message .= "أي بي :\n{$_SERVER['REMOTE_ADDR']}\n";
                                    $message = stripslashes($message);
                                    $message = wordwrap($message, 70);
                                    mail($email,"Alforsan landing Page SMS",$message,"From: {$_POST["name"]} <{$_POST["email"]}>");

                                    echo("تم استلام رسالتك وسيتم التواصل معك في أقرب وقت، شكرا لك");
                                }
                            }
                            ?>
                    </h3>
                </header>
            </div>
        </section><!-- #contact -->
    </main>

    <!-- footer -->
    <footer>
        <div class="contaner">
            <div class="footer-area text-center">
                <div class="social-icons">
                    <a href="https://www.facebook.com/ForsanElevators/ "><i class="fab fa-facebook-f "></i></a>
                    <a href="https://play.google.com/store/apps/details?id=komandaemaaraljanoub.web.app "><i class="fab fa-google-play "></i></a>
                </div>
                <p><span>&copy;</span> 2020 <a href=" https://www.advensco.com/ ">ADVENSCO</a> ALL RIGHT RESERVED </p>
            </div>
        </div>
    </footer>

    <!-- end of main container -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js "></script> -->
    <script src="js/jquery-3.5.1.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/mixitup.min.js "></script>
    <script src="js/jquery.magnific-popup.min.js "></script>
    <script src="js/lightbox.js "></script>
    <script src="js/aos.js "></script>
    <script src="js/owl.carousel.js "></script>
    <script src="js/wow.min.js"></script>
    <script src="js/script.js "></script>
</body>

</html>
