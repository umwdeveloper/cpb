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
    <title>Archives - Consumer Protection Bureau (CPB)</title>
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
                            <a class="nav-link " href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="why-choose-us.php">Why Choose Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="consumer-issues.php">Consumer Issues
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog/index.php">Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active-nav" href="archive.php">Archive
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
                    <div class="col-lg-10 mx-auto ">
                        <h1 class="main-heading text-center text-uppercase  mt-2">
                            Archives
                        </h1>
                        <p class="text-md text-center">
                            Explore to find valuable PDFs on various consumer rights and fair business practices.
                            These resources offer detailed information and insights to support your needs.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-lg-5 pb-4 bg-light position-relative " style="z-index: 1;">
            <div class="container pb-5 ">
                <div class="row mb-lg-0 mb-4">
                    <div class="col-lg-12 ">
                        <div class="bg-white service-card py-3 px-4 shadow rounded-2">
                            <h1 class="main-heading mb-2">CONSOMAG 12</h1>
                            <iframe src="assets/PDFs/CONSO-JAN 12.pdf" frameborder="0" width="100%"
                                height="500px"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-4">
                        <div class="bg-white service-card py-3  shadow rounded-2">
                            <h1 class="main-heading mb-2">CONSOMAG 04</h1>
                            <iframe src="assets/PDFs/Cosno4.pdf" frameborder="0" width="100%" height="500px"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-4">
                        <div class="bg-white service-card py-3  shadow rounded-2">
                            <h1 class="main-heading mb-2">CONSOMAG 07</h1>
                            <iframe src="assets/PDFs/cosno7.pdf" frameborder="0" width="100%" height="500px"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-4">
                        <div class="bg-white service-card py-3  shadow rounded-2">
                            <h1 class="main-heading mb-2">CONSOMAG 08</h1>
                            <iframe src="assets/PDFs/COSNO-8.pdf" frameborder="0" width="100%" height="500px"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-4">
                        <div class="bg-white service-card py-3  shadow rounded-2">
                            <h1 class="main-heading mb-2">CONSOMAG 10</h1>
                            <iframe src="assets/PDFs/Conso-10.pdf" frameborder="0" width="100%" height="500px"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <div class="bg-white service-card py-3  shadow rounded-2">
                            <h1 class="main-heading mb-2">CONSOMAG 11</h1>
                            <iframe src="assets/PDFs/Conso-11.pdf" frameborder="0" width="100%" height="500px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-lg-5 py-4 ">
             <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                        <h1 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                        Visit Our Subsidiary Companies
                        </h1>
                  
                </div>
           
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="https://www.compliance-experts.co.uk/" target="_blank" class="text-decoration-none text-dark">
                            <div class="amenity-card d-flex justify-content-center align-items-center flex-column"> 
                                <img
                                    src="assets/images/CRC-logo.png"
                                    alt="CRC logo"   style="width:130px; height:auto;">
                                <h1 class="mt-4 text-center text-md"  style=" font-weight:500;">Compilance and Risk Consultancy</h1>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="https://carehomecompliance.com/" target="_blank" class="text-decoration-none text-dark">
                            <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                                <img
                                    src="assets/images/Care Home Compilance.png"
                                    alt="CHC logo"  style="width:100px; height:auto;">
                                <h1 class="mt-4 text-center text-md" style=" font-weight:500;">Care Home Compilance</h1>
                            </div>
                        </a>
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
                            <a href="consumer-issues.php" class="text-white">Consumer Issues</a>
                        </p>
                        <p>
                            <a href="blog/index.php" class="text-white">Blog</a>
                        </p>
                        <p>
                            <a href="archive.php" class="text-white">Archive</a>
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