<?php

include_once "includes/functions.php";
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

$issueFormSubmitted = false;
if (isset($_POST['issue'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $consumerIssue = $_POST['consumer-issue'];
    $price = $_POST['price'];
    $complaintAbout = $_POST['complaint-about'];
    $reason = $_POST['reason'];

    $subject = "Appointment";

    $body = "<strong>Name: </strong> $name" . "<br>" .
        "<strong>Email: </strong> $email" . "<br>" .
        "<strong>Phone: </strong> $phone" . "<br>" .
        "<strong>Desired Resolution: </strong> $address" . "<br>" .
        "<strong>Consumer Issue: </strong> $consumerIssue" . "<br>" .
        "<strong>Price of Product/Service: </strong> $price" . "<br>" .
        "<strong>Product or Service Complaining about: </strong> $complaintAbout" . "<br>" .
        "<strong>Nature of Complaint Complaint: </strong> $reason";

    $msg = sendMail($email, $name, $subject, $body);

    $issueFormSubmitted = true;
}

$feedbacks = findAll("feedbacks");

?>

<!doctype html>
<html lang="en">

<head>
    <title>Consumer Protection Bureau (CPB)</title>
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
                            <a class="nav-link active-nav" href="index.php" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="why-choose-us.php">Why Choose Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consumer-issues.php">Consumer Issues
                            </a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item nav-link" href="blog/index.php">Blog</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Advocacy</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Success Stories</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="blog/index.php">Blog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="archive.php">Archive
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
    <main class="home-main">
        <!-- acrousel -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item ">
                    <img src="assets/images/Group 1000004718 (5).png" class=" w-100 d-lg-block d-none" alt="Banner-1">
                    <img src="assets/images/iMAGE+1-1920w.webp" class=" w-100 d-lg-none d-block" alt="banner-2">
                </div>
                <div class="carousel-item carousel-item2 active">
                    <img src="assets/images/photo+2-96f6f8ca-1920w.webp" class="d-block w-100" alt="banner-2">
                </div>

            </div>
        </div>
        <!-- carousel-text -->
        <div class="carousel-text">
            <div class="container h-100">
                <div class="row h-100 pt-lg-3">
                    <div
                        class="col-xl-6 ms-auto d-flex align-items-center justify-content-center text-center text-white ">
                        <div>
                            <h1>Consumer Protection Bureau</h1>
                            <h3 class="mt-4">FIGHTING FOR
                                CONSUMER RIGHTS SINCE 2011</h3>
                            <p class>DO YOU CURRENTLY HAVE A COMPLAINT
                                AGAINST

                                A SERVICE PROVIDER, RETAILER OR A PRODUCT
                                MANUFACTURER AND THE OUTCOME IS
                                UNSATISFACTORY?</p>
                            <div class="mt-4 pt-4">
                                <a href="contact.php" class="main-btn">Contact us</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- cards and about -->
        <section class="feature-cards-section pb-lg-5 pb-4">
            <div class="container">
                <div class="row feature-cards">
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-3">
                        <div class="feature-cards-card">
                            <div class="icon">
                                <img src="assets/images/Secure data-bro.png" alt class="img-fluid">
                            </div>
                            <h2 class="mt-3">Safety and Reliability </h2>
                            <p class="mb-0 pb-0">
                                We champion products and services that
                                prioritise your safety.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-3">
                        <div class="feature-cards-card">
                            <div class="icon">
                                <img src="assets/images/Money stress-rafiki.png" alt class="img-fluid">
                            </div>
                            <h2 class="mt-3">Affordability </h2>
                            <p class="mb-0 pb-0">
                                We advocate for reasonably priced offerings
                                to make quality accessible to all and obtain
                                value for money.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-3">
                        <div class="feature-cards-card">
                            <div class="icon">
                                <img src="assets/images/Law firm-amico.png" alt class="img-fluid">
                            </div>
                            <h2 class="mt-3">Compliance</h2>
                            <p class="mb-0 pb-0">
                                We endorse goods and services that meet
                                regulatory standards.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-3">
                        <div class="feature-cards-card">
                            <div class="icon">
                                <img src="assets/images/Environmental audit-pana.png" alt class="img-fluid">
                            </div>
                            <h2 class="mt-3">Sustainability </h2>
                            <p class="mb-0 pb-0">
                                Our commitment extends to environmentally
                                friendly options, promoting a greener
                                future.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-lg-5 pt-3 pb-5">
                <div class="row align-items-center py-lg-4">
                    <div class="col-lg-12">
                        <h1 class="main-heading text-uppercase">
                            About CPB
                        </h1>
                        <p class="text">
                            <b>Who We Are:</b>
                            The Consumer Protection Bureau (CPB) is an independent, non-governmental organisation
                            dedicated to empowering consumers and promoting fairness in the marketplace.
                        </p>
                    </div>
                    <div class="col-lg-6">

                        <!-- <h3 class="tertiary-text py-2">
                                As the consumer advocate, CPB actively fosters
                                fairness while also empowers consumers.
                            </h3> -->

                        <p class="text">
                            <b>What We Do:</b>
                        <ul class="list-unstyled">
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="me-3 ">
                                        <div class="do-icon">
                                            <img src="assets/images/consumer-protection.png" alt="" class="about-icon">
                                        </div>
                                    </div>
                                    <p class="text">
                                        <span style="font-weight: 600;">Safeguard Consumer Rights:</span><br>
                                        We help consumers understand and assert their statutory rights.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="me-3 ">
                                        <div class="do-icon">
                                            <img src="assets/images/income.png" alt="" class="about-icon">
                                        </div>
                                    </div>
                                    <p class="text">
                                        <span style="font-weight: 600;">Protect Economic Interests:</span><br>
                                        We work to ensure fair business practices and protect consumers' financial
                                        well-being.

                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="me-3 ">
                                        <div class="do-icon">
                                            <img src="assets/images/key.png" alt="" class="about-icon">
                                        </div>
                                    </div>
                                    <p class="text">
                                        <sapn style="font-weight: 600;">Provide Effective Remedies: </sapn><br>
                                        When things go wrong, we assist consumers in finding solutions and seeking
                                        appropriate compensation.

                                    </p>
                                </div>
                            </li>
                        </ul>


                        </p>
                        <!-- <p class="text">
                                As a proud member of the <a
                                    href="www.compliance-experts.co.uk">CRC
                                    Group</a> , we endeavour to supporting goods
                                and services that embody the VALUES we hold
                                dear.
                            </p> -->
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/images/about (2).png" alt class="img-fluid ps-lg-4 d-lg-block d-none">
                    </div>
                </div>
            </div>

        </section>
        <section class="fight-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="fight-card text-center px-lg-5">
                            <h1 class="secondry-heading text-white">
                                FIGHTING FOR CONSUMER RIGHTS SINCE 2011

                            </h1>
                            <p class="text py-2 text-white text-center ">
                                Do you currently have a complaint against a
                                service provider, retailer or a product
                                manufacturer and the outcome is
                                unsatisfactory?
                            </p>
                            <div class="mt-4 text-center">
                                <a href="contact.php" class="main-btn text-white">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-lg-5 py-4">
            <div class="container">
                <div class="row justify-content-center align-items-start">
                    <div class="col-lg-12 mb-lg-5 mb-3">
                        <h1 class="main-heading text-center text-uppercase  mt-2">
                            Our Commitment
                        </h1>
                        <p class="text text-center">
                            As a proud member of the <a href="https://www.compliance-experts.co.uk/" class="fi">CRC
                                Group</a>, we support and promote goods and services that meet with our core values:
                        </p>
                    </div>
                    <div
                        class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="commitment-icon">
                            <img src="assets/images/honesty.png" alt class="">

                        </div>
                        <div>
                            <h3 class="mt-3 text-center commitment-text">Integrity</h3>
                        </div>
                    </div>
                    <div
                        class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="commitment-icon">
                            <img src="assets/images/shield.png" alt class="">

                        </div>
                        <div>
                            <h3 class="mt-3 text-center commitment-text">Quality</h3>
                        </div>
                    </div>
                    <div
                        class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="commitment-icon">
                            <img src="assets/images/fairness.png" alt class="">

                        </div>
                        <div>
                            <h3 class="mt-3 text-center commitment-text">Fairness</h3>
                        </div>
                    </div>
                    <div
                        class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="commitment-icon">
                            <img src="assets/images/reliability.png" alt class="">

                        </div>
                        <div>
                            <h3 class="mt-3 text-center commitment-text">Reliability</h3>
                        </div>
                    </div>
                    <div
                        class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="commitment-icon">
                            <img src="assets/images/income.png" alt class="">

                        </div>
                        <div>
                            <h3 class="mt-3 text-center commitment-text">Value for money</h3>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p class="text text-center">
                            Through education, advocacy, and direct assistance, we strive to create a marketplace where
                            consumers are informed, respected, and protected.
                        </p>
                    </div>


                </div>
            </div>
        </section>
        <section class="py-lg-5 py-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="main-heading text-center text-uppercase mb-lg-5 mb-3 mt-2">
                            Our Popular Amenities
                        </h1>

                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-3">
                        <a href="consumer-issues.php#online-shopping" class="text-decoration-none text-dark">
                            <div class="amenity-card">
                                <img src="assets/images/aminities/Online shopping-amico.png" alt class="img-fluid">
                                <h3 class="mt-3">Online Shopping</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mb-3">
                        <a href="consumer-issues.php#tips-for-buy-vehical" class="text-decoration-none text-dark">
                            <div class="amenity-card">
                                <img src="assets/images/aminities/Vehicle Sale-pana.png" alt class="img-fluid">
                                <h3 class="mt-3">Tips for Buying Vehicles</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mb-3">
                        <a href="consumer-issues.php#property-renovation-and-repair"
                            class="text-decoration-none text-dark">
                            <div class="amenity-card">
                                <img src="assets/images/aminities/Build your home-amico (1).png" alt class="img-fluid">
                                <h3 class="mt-3">Property Renovation and
                                    Repair</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mb-3">
                        <a href="consumer-issues.php#faulty-products" class="text-decoration-none text-dark">
                            <div class="amenity-card">
                                <img src="assets/images/aminities/Product iteration-amico.png" alt class="img-fluid">
                                <h3 class="mt-3">Faulty Products</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mb-3">
                        <a href="consumer-issues.php#loans-debt-rights" class="text-decoration-none text-dark">
                            <div class="amenity-card">
                                <img src="assets/images/aminities/Money stress-amico.png" alt class="img-fluid">
                                <h3 class="mt-3">Loans & Debt</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-3">
                        <a href="consumer-issues.php#consumer-rights" class="text-decoration-none text-dark">
                            <div class="amenity-card">
                                <img src="assets/images/aminities/Justice-amico.png" alt class="img-fluid">
                                <h3 class="mt-3">Consumer Rights</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-3">
                        <a href="consumer-issues.php#repair-replace-refund" class="text-decoration-none text-dark">
                            <div class="amenity-card">
                                <img src="assets/images/aminities/Refund-amico.png" alt class="img-fluid">
                                <h3 class="mt-3">Repair, Replace & Refund</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-3">
                        <a href="consumer-issues.php#scam-safe" class="text-decoration-none text-dark">
                            <div class="amenity-card">
                                <img src="assets/images/aminities/Scared-pana.png" alt class="img-fluid">
                                <h3 class="mt-3">Scam Safe</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12">
                        <div class="mt-5 text-center">
                            <a href="consumer-issues.php" class="main-btn">More Consuner
                                Issues</a>
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
                                    <span>Need Help?</span>
                                    <h2>We are Here!</h2>
                                </div>

                                <p class>The Consumer Protection Bureau
                                    fights your consumer battles on your
                                    behalf. We’ll help you get refunds,
                                    replacements, repairs and where
                                    appropriate, compensation for poor
                                    service, faulty products or any form of
                                    failure to deliver expected quality.
                                </p>
                                <span class="date">COMPLETE OUR SHORT
                                    QUESTIONNAIRE TO SEE IF WE CAN HELP YOU
                                    AND PROVIDE A NO OBLIGATION
                                    QUOTE:</span>
                                <br> <img src="assets/images/Internship-amico.png" alt
                                    class="help-form mt-4 mb-lg-0 mb-4">
                            </div>
                        </div>
                        <div class="col col-lg-7 col-md-12 col-sm-12">
                            <div class="contact-content ps-lg-5">
                                <div class="contact-form">
                                    <?php if (isset($_POST['issue'])): ?>
                                    <?php if ($msg['status'] == 'success'): ?>
                                    <p class="alert alert-success text-center"><?php echo $msg['message'] ?></p>
                                    <?php else: ?>
                                    <p class="alert alert-danger text-center"><?php echo $msg['message'] ?></p>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <form method="post" class="contact-validation-active" id="issue-form"
                                        novalidate="novalidate">
                                        <div class="half-col">
                                            <label for="Name" class="text-white">Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="half-col">
                                            <label for="phone" class="text-white">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="Phone">
                                        </div>
                                        <div class="half-col">
                                            <label for="email" class="text-white">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email">
                                        </div>

                                        <div class="half-col">
                                            <label for="consumer-issue" class="text-white">Consumer
                                                Issues</label>
                                            <select name="consumer-issue" id="consumer-issue" class="form-control">
                                                <option selected>Consumer
                                                    Issues</option>
                                                <option value="Travels">Travels</option>
                                                <option value="Energy/Utilities">Energy/Utilities</option>
                                                <option value="Retail">Retail</option>
                                                <option value="Health and
                                                    Foods">Health and
                                                    Foods</option>
                                                <option value="Consumer Rights">Consumer Rights
                                                </option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="price" class="text-white">Price of Product/Service</label>
                                            <input type="text" name="price" id="price" class="form-control"
                                                placeholder="Price of Product/Service">
                                        </div>
                                        <div>
                                            <label for="complaint-about" class="text-white">Product or Service
                                                Complaining about</label>
                                            <input type="text" name="complaint-about" id="complaint-about"
                                                class="form-control" placeholder="Product or Service Complaining about">
                                        </div>
                                        <div>
                                            <label for="address" class="text-white">Desired Resolution</label>
                                            <select name="address" id="address" class="form-control">
                                                <option disabled selected>Desired
                                                    Resolution:</option>
                                                <option value="Refund">Refund</option>
                                                <option value="Repair">Repair</option>
                                                <option value="Replacement">Replacement</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="reason" class="text-white">Nature of Complaint</label>
                                            <textarea class="form-control" name="reason" id="reason"
                                                placeholder="Nature of Complaint..."></textarea>
                                        </div>
                                        <div class="submit-btn-wrapper">
                                            <button type="submit" name="issue" class="main-btn">Submit</button>
                                            <div id="loader">
                                                <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="clearfix error-handling-messages">
                                                <div id="success">Thank you</div>
                                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                                            </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-lg-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                            Why people believe in us
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="slick-slider">
                            <?php foreach ($feedbacks as $count => $feedback): ?>
                            <div class="element element-<?php echo ++$count; ?>">
                                <div class="amenity-card quote-card">
                                    <div class="text-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 0 1664 1792"
                                            id="1076841621" class="svg u_1076841621" data-icon-name="fa-quote-right">
                                            <path fill="#E5BF20"
                                                d="M768 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136zM1664 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136z"
                                                id="1938712236"></path>
                                        </svg>
                                    </div>
                                    <p class="text text-center">
                                        “<?php echo $feedback->feedback; ?>”
                                    </p>
                                    <h3 class="mt-3"><?php echo $feedback->name . ", " . $feedback->location; ?></h3>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>


                </div>
            </div>
            </div>
                  
        </section>
        <section class="py-lg-5 py-4 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h1 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                            Visit Our Subsidiary Companies
                        </h1>

                    </div>

                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="https://www.compliance-experts.co.uk/" target="_blank"
                            class="text-decoration-none text-dark">
                            <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                                <img src="assets/images/CRC-logo.png" alt="CRC logo" style="width:130px; height:auto;">
                                <h1 class="mt-4 text-center text-md" style=" font-weight:500;">Compilance and Risk
                                    Consultancy</h1>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="https://carehomecompliance.com/" target="_blank"
                            class="text-decoration-none text-dark">
                            <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                                <img src="assets/images/Care Home Compilance.png" alt="CHC logo"
                                    style="width:100px; height:auto;">
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
                                    <form method="post" class="contact-validation-active" id="contact-form"
                                        novalidate="novalidate">
                                        <div class="half-col">
                                            <label for="Name" class="text-white">Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="half-col">
                                            <label for="phone" class="text-white">Phone Number</label>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="Phone">
                                        </div>
                                        <div>
                                            <label for="email" class="text-white">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email">
                                        </div>



                                        <div>
                                            <label for="msg" class="text-white">Message</label>
                                            <textarea class="form-control" name="msg" id="msg"
                                                placeholder="Message"></textarea>
                                        </div>
                                        <div class="submit-btn-wrapper">
                                            <button type="submit" name="contact" class="main-btn">Send</button>
                                            <div id="loader">
                                                <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
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
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
    <script src="assets/js/app.js"></script>
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

    issueFormSubmitted = <?php echo json_encode($issueFormSubmitted); ?>;

    if (issueFormSubmitted) {
        const element = document.getElementById("issue-form");
        if (element) {
            element.scrollIntoView({
                behavior: 'smooth', // smooth scrolling
                block: 'start' // align to the top of the element
            });
        }
    }
    </script>
</body>

</html>