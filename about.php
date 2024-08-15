<?php

include_once "includes/mail.php";

$contactFormSubmitted = false;
if (isset($_POST['contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $subject = "Contact";

    $body = "<strong>Name: </strong> $name" . "<br>" .
        "<strong>Email: </strong> $email" . "<br>" .
        "<strong>Phone: </strong> $phone" . "<br>" .
        "<strong>Message: </strong> $msg";

    $msg = sendMail($email, $name, $subject, $body);

    $contactFormSubmitted = true;
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>About - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="header d-md-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  py-2">
                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="d-flex align-items-center contact-details">
                            <div class="d-flex align-items-center me-2">
                                <i class="bi bi-telephone-fill me-2"></i>
                                <a href="tel:+44 (0)2035854002"> +44
                                    (0)2035854002</a>
                            </div>
                            <div class="d-flex align-items-center ms-2">
                                <i class="bi bi-envelope-fill me-2"></i>
                                <a href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk
                                </a>
                            </div>
                        </div>

                        <div class="text-white social-icon">
                            <!-- Facebook -->
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #3b5998;"
                                href="https://web.facebook.com/people/Consumer-Protection-Bureau/100089017255764/"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #55acee;"
                                href="https://x.com/i/flow/login?redirect_after_login=%2Fconsume60578813"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Linkedin -->
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #0082ca;"
                                href="https://www.linkedin.com/in/consumer-protection-bureau-595632261/"
                                role="button"><i class="fab fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="menu-header">
        <nav class="navbar navbar-expand-xl navbar-light ">
            <div class="container menu-header-container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/Logo - Source File.png" alt class="img-fluid ">
                </a>
                <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active-nav" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="why-choose-us.php">Why Choose Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consumer-issues.html">Consumer Issues
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog/index.php">Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archive.html">Archive
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="membership.php">membership
                            </a>
                        </li>
                        <li class="nav-item pb-xl-0 pb-3">
                            <a class="nav-link" href="contact.php">Contact
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

    </div>
    <main>


        <section class="py-lg-5 py-4 bg-light about-hero">
            <div class="container">
                <div class="row justify-content-center align-items-start">
                    <div class="col-lg-9 mx-auto mb-lg-5 mb-3">
                        <h1 class="main-heading text-center text-uppercase  mt-2">
                            the Consumer Protection Bureau (CPB)
                        </h1>
                        <p class="text-lg text-center">
                            Founded in 2011, Stands as a community-focused organiSation and serves as the corporate
                            social responsibility arm of <a href="" class="text-decoration-none text-secondry">CRC</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-lg-5 pb-4 bg-light position-relative">
            <div class="white-background"></div>
            <div class="container">
                <div class="row position-relative align-items-center white-bg">

                    <div class="col-lg-7">
                        <h1 class="main-heading text-uppercase text-white mt-2">
                            About Us
                        </h1>
                        <p class="text mt-4 text-white">
                            Established in 2011, the Consumer Protection Bureau (CPB) is a Community Interest Company,
                            incorporated and registered in the United Kingdom. As the Social Corporate Responsibility
                            wing of CRC, CPB emerged under the visionary leadership of Yousouf Jhugroo, former CEO of
                            the Institute for Consumer Protection (ICP), bringing with it a legacy of over three decades
                            in the consumer protection arena.
                        </p>
                        <p class="text text-white">
                            CPB is not just an organisation; we are your ally in the consumer world. Our sole focus is
                            protection of your economic interest and safety. We are not influenced by industry funding,
                            ensuring that our dedication is solely to you, the consumer.
                        </p>
                        <p class="text text-white">
                            At CPB, we are deeply committed, driven by a passion to empower consumers and drive fairness
                            in the marketplace. With a rich heritage and a forward-looking approach, we continue to
                            evolve, ensuring your rights are protected, and your voice is heard.
                        </p>
                        <a href="membership.php" class="secondry-heading text-uppercase text-center text-white">
                            Join us on this transformative journey
                        </a>
                        <p class="text-md mt-3 text-white">
                            CPB, where consumer empowerment meets a legacy of experience.
                        </p>
                    </div>
                    <div class="col-lg-4 ms-auto d-flex justify-content-center mt-lg-0 mt-4">
                        <div class="about-card">
                            <img src="assets/images/yousaf-consumer-protection-bureau-ceo.webp" alt=""
                                class="mx-auto img-fluid">
                            <h3 class="mt-3 text-center ">Yousouf Jhugroo</h3>
                            <p class="text-md  text-center mb-0 ">
                                Chairman and CEO
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-lg-5 py-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                            Why people believe in us
                        </h1>
                    </div>
                     <div class="col-lg-12">
                        <div class="slick-slider">
                            <div class="element element-1">
                                <div class="amenity-card quote-card bg-light">
                                    <div class="text-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 0 1664 1792"
                                            id="1076841621" class="svg u_1076841621" data-icon-name="fa-quote-right">
                                            <path fill="#E5BF20"
                                                d="M768 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136zM1664 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136z"
                                                id="1938712236"></path>
                                        </svg>
                                    </div>
                                    <p class="text text-center">
                                        “one of the best Consumer rights solution
                                        company in the market, you will find best
                                        experience here highly friendly and
                                        professional team”
                                    </p>
                                    <h3 class="mt-3">Jane Faber, London</h3>
                                </div>
                            </div>
                            <div class="element element-2">
                                <div class="amenity-card quote-card bg-light">
                                    <div class="text-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 0 1664 1792"
                                            id="1076841621" class="svg u_1076841621" data-icon-name="fa-quote-right">
                                            <path fill="#E5BF20"
                                                d="M768 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136zM1664 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136z"
                                                id="1938712236"></path>
                                        </svg>
                                    </div>
                                    <p class="text text-center">
                                        “If you are looking for a high quality
                                        company, I highly recommend this one. They
                                        are the very best in the field, no
                                        compromise.”
                                    </p>
                                    <h3 class="mt-3">John Smith, Manchester </h3>
                                </div>
                            </div>
                            <div class="element element-3">
                                <div class="amenity-card quote-card bg-light">
                                    <div class="text-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 0 1664 1792"
                                            id="1076841621" class="svg u_1076841621" data-icon-name="fa-quote-right">
                                            <path fill="#E5BF20"
                                                d="M768 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136zM1664 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136z"
                                                id="1938712236"></path>
                                        </svg>
                                    </div>
                                    <p class="text text-center">
                                        “The service is friendly and the results are
                                        always of the highest quality. This is the
                                        best company I have ever worked with.”
                                    </p>
                                    <h3 class="mt-3">Madelaine Taylor, Leeds</h3>
                                </div>
                            </div>
                            <div class="element element-4">
                                <div class="amenity-card quote-card bg-light">
                                    <div class="text-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 0 1664 1792"
                                            id="1076841621" class="svg u_1076841621" data-icon-name="fa-quote-right">
                                            <path fill="#E5BF20"
                                                d="M768 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136zM1664 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136z"
                                                id="1938712236"></path>
                                        </svg>
                                    </div>
                                    <p class="text text-center">
                                        “The first time I tried this company, I was
                                        hooked. Everything was so fabulous and easy.
                                        I’ll never go back to anyone else.”
                                    </p>
                                    <h3 class="mt-3">Sheila Marks, Nottingham</h3>
                                </div>
                            </div>
                            
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="contact-area py-lg-5 py-4">
                <div class="container py-4">
                    <div class="row ">
                        <div class="col-lg-5 col-md-12">
                            <div class="contact-text">
                                <div class="title">
                                    <h2>CONTACT US</h2>
                                </div>

                                <p class>We’d love to hear from you.

                                    <b>Just choose the most convenient method and we’ll get back to you as soon as we
                                        can.</b>


                                </p>
                                <span class="date">

                                    <div class="d-flex align-items-center date">
                                        <i class="bi bi-telephone-fill me-2"></i>
                                        <a class="date" href="tel:+44 (0)2035854002"> +44
                                            (0)2035854002</a>
                                    </div>
                                    <div class="d-flex align-items-center date my-3">
                                        <i class="bi bi-envelope-fill me-2"></i>
                                        <a class="date pb-0 mb-0"
                                            href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-start date">
                                        <i class="bi bi-geo-alt-fill me-2"></i>
                                        <p class="date my-0 py-0"> 83 VICTORIA STREET

                                            WESTMINSTER, LONDON,

                                            SW1H 0HW
                                        </p>
                                    </div>
                                </span>


                            </div>
                        </div>
                          <div class="col col-lg-7 col-md-12 col-sm-12">
                            <div class="contact-content ps-lg-5">
                                <div class="contact-form">
                                    <?php if (isset($_POST['contact'])): ?>
                                        <?php if ($msg['status'] == 'success'): ?>
                                            <p class="alert alert-success text-center"><?php echo $msg['message'] ?></p>
                                        <?php else: ?>
                                            <p class="alert alert-danger text-center"><?php echo $msg['message'] ?></p>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <form method="post"
                                        class="contact-validation-active"
                                        id="contact-form"
                                        novalidate="novalidate">
                                        <div class="half-col">
                                            <label for="Name" class="text-white">Name</label>
                                            <input type="text" name="name"
                                                id="name"
                                                class="form-control"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="half-col">
                                            <label for="phone" class="text-white">Phone Number</label>
                                            <input type="text" name="phone"
                                                id="phone"
                                                class="form-control"
                                                placeholder="Phone">
                                        </div>
                                        <div>
                                            <label for="email" class="text-white">Email</label>
                                            <input type="email" name="email"
                                                id="email"
                                                class="form-control"
                                                placeholder="Email">
                                        </div>



                                        <div>
                                            <label for="msg" class="text-white">Message</label>
                                            <textarea class="form-control"
                                                name="msg" id="msg"
                                                placeholder="Message"></textarea>
                                        </div>
                                        <div class="submit-btn-wrapper">
                                            <button type="submit" name="contact"
                                                class="main-btn">Send</button>
                                            <div id="loader">
                                                <i
                                                    class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white footer-text" style="background-color: #223a78ef;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-1 font-weight-bold bg-white p-3 rounded-2 mb-lg-0 mb-2">
                            <img src="assets/images/Logo - PNG.png" alt="" class="img-fluid footer-img">
                        </h6>
                        <p>
                            BUSINESS HOURS:<br> MONDAY TO FRIDAY 9:00-5:00
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Quick Links</h6>
                        <p>
                            <a href="index.php" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="about.php" class="text-white">About Us</a>
                        </p>
                        <p>
                            <a href="why-choose-us.php" class="text-white">Why Choose Us</a>
                        </p>
                        <p>
                            <a href="contact.php" class="text-white">Contact</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Other
                        </h6>
                        <p class="">
                            <a href="consumer-issues.html" class="text-white">Consumer Issues</a>
                        </p>
                        <p>
                            <a href="blog/index.php" class="text-white">Blog</a>
                        </p>
                        <p>
                            <a href="archive.html" class="text-white">Archive</a>
                        </p>
                        <p>
                            <a href="membership.php" class="text-white">Membership</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p class=""><i class="fas fa-envelope mr-3"></i> <span
                                class="text-sm">info@consumerprotectionbureau.co.uk</span> </p>
                        <p class=""><i class="fas fa-phone mr-3"></i> +44 (0)2035854002</p>
                        <p class=""><i class="fas fa-home mr-3"></i> 83 VICTORIA STREET

                            WESTMINSTER, LONDON,

                            SW1H 0HW</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2024 Copyright:
                            <a class="text-white" href="index.php">CONSUMER PROTECTION BUREAU</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a href="https://web.facebook.com/people/Consumer-Protection-Bureau/100089017255764/"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"
                            target="_blank"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fconsume60578813"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"
                            target="_blank"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a href="https://www.linkedin.com/in/consumer-protection-bureau-595632261/" target="_blank"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-linkedin"></i></a>


                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
  <script src="/assets/js/app.js"></script>
   <script>
        contactFormSubmitted = <?php echo json_encode($contactFormSubmitted); ?>;

        if (contactFormSubmitted) {
            const element = document.getElementById("contact-form");
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth', // smooth scrolling
                    block: 'center' // align to the top of the element
                });
            }
        }

      
    </script>
</body>

</html>