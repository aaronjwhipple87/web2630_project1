<?php
$msg = "";

//db connection
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'W01254652';
$DATABASE_PASS = 'Aaroncs!';
$DATABASE_NAME = 'W01254652';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno() ) {

// If there is an error with the connection, stop the script and display the error.
    die ('Failed to connect to database!');
}



if(isset($_POST["submit"])){

    //field validations
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $msg = 'Email is not valid';
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    //email content
    $toEmail = 'aaronwhipple@mail.weber.edu';
    $from = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    $bodyParagraphs = ["Name: {$from}", "Email: {$email}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    mail($toEmail,$subject,$body,$headers);

//    $to      = 'aaronwhipple@mail.weber.edu';
//    $subject = 'the subject';
//    $message = 'hello';
//    $headers = 'From: me@example.com' . "\r\n" .
//        'Reply-To: me@example.com' . "\r\n" .
//        'X-Mailer: PHP/' . phpversion();
//
//    mail($to, $subject, $message, $headers);

    $msg = 'Your message has been submitted successfully!';
    echo "<script type='text/javascript'>alert('$msg');</script>";



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aaron Whipple</title>
    <!--- icon link -->
    <link rel="icon" href="img/icon-original.png" type="image/icon type">
    <!-- bootstrap css-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- font-awesome -->
    <script src="./js/all.js"></script>
    <script src="https://kit.fontawesome.com/9067a2ef5b.js" crossorigin="anonymous"></script>
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Monda:wght@400;700&display=swap" rel="stylesheet">
    <!--main css-->
    <link rel="stylesheet" href="./css/main.css">
    


</head>
<body>
<!-- navbar -->
<nav class="navbar py-1 navbar-dark navbar-expand-sm bg-info fixed-top">
    <div class="container">
        <!-- logo -->
        <img src="img/icon.png" class="nav-logo" alt="AW Logo">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarLinks">
            <ul class="navbar-nav mr-auto" >
                <li class="nav-item">
                    <a href="index.html" class="nav-link pl-1 ">Home</a></li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link pl-1">About</a></li>
                <li class="nav-item">
                    <a href="projects.html" class="nav-link pl-1">Projects</a></li>
                <li class="nav-item pb-1">
                    <a href="contact.php" class="nav-link pl-1 active">Contact</a></li>
            
            </ul>
            <a href="whipple_resume2.pdf" class="btn" download><i class="fas fa-download "></i>&nbsp;&nbsp;Download Resum&#233;</a>
        </div>
    </div>
</nav>
<!-- end of navbar -->

<!-- contact -->
<section class="bg-primary ">
    <div class="container">
        <!-- title -->
        <div class="row ">
            <div class="col text-center">
                <h1 class="text-uppercase mt-4">
                    <strong>Contact me</strong>
                </h1>
                <hr class="title-line bg-secondary">
                <h3 class="text-capitalize">I'd Love to get the opportunity to work with you! </h3>
            </div>
        </div>
        <!-- end of title -->
        <div class="row p-5" id="appearAnimate">
            <div class="col-lg-5 mb-4">
                <!-- form -->
                <form id="contact-form" method="post" action="contact.php" role="form">
                    <div class="card">
                        <div class="card-body bg-info">
                            <div class="form-header text-success text-center">
                                <h3><i class="fas fa-envelope"></i> Get in touch:</h3>
                            </div>
                            <br>
                            <div class="md-form">
                                <div class="form-group row"> 
                                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm"><i class="fad fa-user fa-2x text-success"></i></label>
                                    <div class="col-sm-11">
                                        <input type="text" id="form-name" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="md-form">
                                <div class="form-group row"> 
                                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm"><i class="fad fa-envelope fa-2x text-success"></i></label>
                                    <div class="col-sm-11">
                                        <input type="text" id="form-email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="md-form">
                                <div class="form-group row"> 
                                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm"><i class="fas fa-tag fa-2x text-success"></i></label>
                                    <div class="col-sm-11">
                                        <input type="text" id="form-Subject" name="subject" class="form-control" placeholder="Subject" required>
                                    </div>
                                </div>
                            </div>   
                            <div class="md-form">
                                <div class="form-group row"> 
                                    <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm"><i class="fad fa-pencil-alt fa-2x text-success"></i></label>
                                    <div class="col-sm-11">
                                        <textarea id="form-text" name="message" class="form-control md-textarea" rows="3" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                            </div>             
                            <div class="text-center mt-4">
                                <button class="btn" type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <!--Google map-->
            <div class="col-lg-7">
              <div class="map" style="height: 440px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d145759.34371449126!2d-111.9199561466403!3d40.670761982353795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1606409683800!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>

              </div>
            </div>
        </div>


    </div>
</section>
<!-- end of contact -->

<!-- footer section -->
<footer id="footer" class="bg-secondary pt-5">
    <div class="container">
        <!-- section-title -->
        <div class="col-md-12 col-xs-12 col-sm-12 text-center">
            <img src="img/icon-white.png" class="footer-logo" alt="AW Logo">
        </div>
        <!-- end of section-title -->
        <div class="row py-2 justify-content-center">
            <ul class="footer-links d-flex flex-row" >
                <li class="">
                    <a href="index.html" class="footer-link ">Home</a></li>
                <li class="pl-3 text-info">|</li>
                <li class="">
                    <a href="about.html" class="footer-link pl-3">About</a></li>
                <li class="pl-3 text-info">|</li>
                <li class="">
                    <a href="projects.html" class="footer-link pl-3">Projects</a></li>
                <li class="pl-3 text-info">|</li>
                <li class="">
                    <a href="contact.php" class="footer-link pl-3">Contact</a></li>
            </ul>
        </div>
        <div class="row py-2">
            <div class="col-md-6 col-xs-12 col-sm-12 text-center text-info">
                <p>Contact Info: <br>
                <a href="mailto:aaronjwhipple@gmail.com">aaronjwhipple@gmail.com</a> <br>
                (786)229-2752</p>

            </div>
            <!-- social media -->
            <div class="col-md-6 col-xs-12 col-sm-12">
                <div class="row social-media">
                    <div class="col text-center ">
                        <a href="https://www.facebook.com/ohhellwhipple" target="_blank">
                            <i class="fab fa-facebook fa-3x m-2"></i>
                        </a>
                        <a href="https://github.com/aaronjwhipple87" target="_blank">
                            <i class="fab fa-github fa-3x m-2"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/aaron-whipple-84790" target="_blank">
                            <i class="fab fa-linkedin fa-3x m-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-2 text-center text-info">
            <div class="col-md-12 col-xs-12 col-sm-12 ml-auto">
                <p><span class="pr-2">&#169;&nbsp;2020 AaronJWhipple</span> 
                <span class="pl-2"><a href="#">Privacy Policy</a> and <a href="#">Terms of Use</a></span> </p>
            </div>
        </div>
        
        
    </div>
</footer>
<!-- jquery-->   
<script src="./js/jquery-3.5.1.min.js"></script>
<!-- bootstrap  js  -->
<script src="./js/bootstrap.bundle.min.js"></script>
</body>


<script>
    var isiOS = /iPhone|iPad|iPod/i.test(navigator.userAgent)
    if (!isiOS){
    window.addEventListener('scroll', function(){ // on page scroll
     requestAnimationFrame(parallaxbubbles) // call parallaxbubbles() on next available screen paint
    }, false)
    window.addEventListener('resize', function(){ // on window resize
     var scrolltop = window.pageYOffset // get number of pixels document has scrolled vertically
     var scrollamount = (scrolltop / (scrollheight-windowheight)) * 100 // get amount scrolled (in %)
     fish.style.left = -100 + scrollamount + '%' // set position of fish in percentage (starts at -100%)
    }, false)
    }


</script>


</html>