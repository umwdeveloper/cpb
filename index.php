<?php

include_once "includes/functions.php";
include_once "includes/mail.php";

$contactFormSubmitted = false;
if (isset($_POST['form-contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['msg'];

    $subject = "Contact";

    $body = "<strong>Name: </strong> $name" . "<br>" .
        "<strong>Email: </strong> $email" . "<br>" .
        "<strong>Phone: </strong> $phone" . "<br>" .
        "<strong>Message: </strong> $message";

    $recaptchaSecret = '6LeWW5YqAAAAAEjGUeFCrxd0-lBEUAAZR0v0q9tO';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
        // reCAPTCHA validated
        $msg = sendMail($email, $name, $subject, $body);

        $contactFormSubmitted = true;
    } else {
        // reCAPTCHA failed
        $msg['status'] = 'error';
        $msg['message'] = "Please complete the reCAPTCHA verification.";

        $contactFormSubmitted = true;
    }
}

$issueFormSubmitted = false;
if (isset($_POST['form-issue'])) {
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

    $recaptchaSecret = '6LeWW5YqAAAAAEjGUeFCrxd0-lBEUAAZR0v0q9tO';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
        // reCAPTCHA validated
        $msg = sendMail($email, $name, $subject, $body);

        $issueFormSubmitted = true;
    } else {
        // reCAPTCHA failed
        $msg['status'] = 'error';
        $msg['message'] = "Please complete the reCAPTCHA verification.";

        $issueFormSubmitted = true;
    }
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
    <meta name='description'
        content='The Consumer Protection Bureau empowers consumers, upholds consumer rights, enforces consumer protection laws, and addresses consumer and customer complaints with precision.' />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/">


    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://analytics.ahrefs.com/analytics.js" data-key="VTs14Xy/Kdyw0NN4JQulEw" defer="true"></script>

</head>


<?php include 'assets/include/header.php'; ?>
<main class="home-main">
    <section>
        <!-- acrousel -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item ">
                    <img src="assets/images/consumer-protection-bureau.png" class=" w-100 d-lg-block d-none"
                        alt="Consumer Protection Bureau Top slider">
                    <img src="assets/images/consumer-protection-bureau-mobile.webp" class=" w-100 d-lg-none d-block"
                        alt="Consumer Protection Bureau Top slider Mobile">
                </div>
                <div class="carousel-item carousel-item2 active">
                    <img src="assets/images/consumer-rights.webp" class="d-block w-100" alt="Consumer Rights">
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
                            <h2 class="mt-4">FIGHTING FOR CONSUMER RIGHTS SINCE 2011</h2>
                            <p class="text-uppercase">Do you currently have a consumer complaint against a service
                                provider, retailer, or product manufacturer, and the outcome is unsatisfactory?</p>

                            <div class="mt-4 pt-4">
                                <a href="contact.php" class="main-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- cards and about -->
    <section class="feature-cards-section pb-lg-5 pb-4">
        <div class="container">
            <div class="row feature-cards">
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3">
                    <div class="feature-cards-card">
                        <div class="icon">
                            <img src="assets/images/consumer protection uk.png" alt="Consumer protection UK 1"
                                class="img-fluid">
                        </div>
                        <h2 class="mt-3">Safety and Reliability </h2>
                        <p class="mb-0 pb-0">
                            We champion products and services that prioritize your safety, ensuring compliance with
                            consumer protection laws.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3">
                    <div class="feature-cards-card">
                        <div class="icon">
                            <img src="assets/images/consumer protection uk (2).png" alt="Consumer protection UK 2"
                                class="img-fluid">
                        </div>
                        <h2 class="mt-3">Affordability </h2>
                        <p class="mb-0 pb-0">
                            We advocate for reasonably priced offerings to make quality accessible, helping you get
                            value for money while exercising your consumer rights.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3">
                    <div class="feature-cards-card">
                        <div class="icon">
                            <img src="assets/images/consumer protection uk (3).png" alt="Consumer protection UK 3"
                                class="img-fluid">
                        </div>
                        <h2 class="mt-3">Compliance</h2>
                        <p class="mb-0 pb-0">
                            We endorse goods and services that meet regulatory standards under UK consumer
                            protection laws.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3">
                    <div class="feature-cards-card">
                        <div class="icon">
                            <img src="assets/images/Environmental audit-pana.png" alt="Consumer protection UK 4"
                                class="img-fluid">
                        </div>
                        <h2 class="mt-3">Sustainability</h2>
                        <p class="mb-0 pb-0">
                            Our commitment extends to environmentally friendly options, ensuring compliance with
                            sustainable practices while protecting consumer rights.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="container pt-lg-5 pt-3 pb-5">
            <div class="row align-items-center py-lg-4">
                <div class="col-lg-12">
                    <h2 class="main-heading text-uppercase">
                        About CPB
                    </h2>
                    <p class="text">
                        <b>Who We Are:</b>
                        The Consumer Protection Bureau (CPB) is an independent, non-governmental organisation
                        dedicated to empowering consumers and promoting fairness in the marketplace. We are
                        committed to upholding consumer protection laws and advancing consumer rights in the UK and
                        beyond.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text">
                        <b>What We Do:</b>
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <div class="do-icon">
                                        <img src="assets/images/consumer-protection.png"
                                            alt="Safeguard Consumer Rights icon" class="about-icon">
                                    </div>
                                </div>
                                <p class="text">
                                    <span class="font-weight-bold">Safeguard Consumer Rights:</span><br>
                                    We help consumers understand and assert their statutory rights, ensuring that
                                    they are fully informed about their consumer protection rights.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <div class="do-icon">
                                        <img src="assets/images/consumer financial law.png"
                                            alt="consumer protection Economic interests icon" class="about-icon">
                                    </div>
                                </div>
                                <p class="text">
                                    <span class="font-weight-bold">Protect Economic Interests:</span><br>
                                    We work to ensure fair business practices and protect consumers' financial
                                    well-being. Our efforts include addressing consumer complaints and ensuring
                                    compliance with consumer protection laws.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <div class="do-icon">
                                        <img src="assets/images/consumer rights.png"
                                            alt="Consumer protection Effective remedies icon" class="about-icon">
                                    </div>
                                </div>
                                <p class="text">
                                    <span class="font-weight-bold">Provide Effective Remedies:</span><br>
                                    When things go wrong, we assist consumers in finding solutions and seeking
                                    appropriate compensation. Our role includes handling both consumer and customer
                                    complaints effectively.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/about consumer protection bureau.png" alt="About Conumer Protection Bureau"
                        class="img-fluid ps-lg-4 d-lg-block d-none">
                </div>
            </div>
        </div>


    </section>


    <section class="alert-news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-slick slick-slider  ">
                        <div>
                            <div class="home-alert d-flex align-items-center ">
                                <div class="d-flex flex-lg-row flex-column align-items-center">
                                    <div class="announcement-iameg" style="min-width:280px">
                                        <img src="assets/images/cpb-announcement.png" alt="Festive Shopping Tips"
                                            class="img-fluid cpb-announcement">
                                    </div>
                                    <div class="home-alert-text ms-lg-4">
                                        <h2 class="mb-3">Refund on Sale Items</h2>
                                        <div>
                                            <a href="news/refund-on-sale-items.php">
                                                Know Your Rights
                                                <span><i class="bi bi-chevron-double-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="home-alert d-flex align-items-center ">
                                <div class="d-flex flex-lg-row flex-column align-items-center">
                                    <div class="announcement-iameg" style="min-width:280px">
                                        <img src="assets/images/cpb-announcement.png" alt="Festive Shopping Tips"
                                            class="img-fluid cpb-announcement">
                                    </div>
                                    <div class="home-alert-text ms-lg-4">
                                        <h2 class="mb-3">THE FINANCIAL OMBUDSMAN SERVICE</h2>
                                        <div>
                                            <a
                                                href="news/financial-ombudsman-services-watchdog-turned-toothless-lapdog.php">
                                                A WATCHDOG TURNED TOOTHLESS LAPDOG?
                                                <span><i class="bi bi-chevron-double-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="home-alert d-flex align-items-center ">
                                <div class="d-flex flex-lg-row flex-column align-items-center">
                                    <div class="announcement-iameg" style="min-width:280px">
                                        <img src="assets/images/news/chrismas.png" alt="Festive Shopping Tips"
                                            class="img-fluid cpb-announcement">
                                    </div>
                                    <div class="home-alert-text ms-lg-4">
                                        <h2 class="mb-3">Stay Protected and Spend Wisely</h2>
                                        <div>
                                            <a href="news/cpb-advice-for-safe-and-smart-festive-season.php">
                                                CPB Advice for a Safe and Smart Festive Season
                                                <span><i class="bi bi-chevron-double-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="home-alert d-flex align-items-center ">
                                <div class="d-flex flex-lg-row flex-column align-items-center">
                                    <div class="announcement-iameg" style="min-width:280px">
                                        <img src="assets/images/cpb-announcement.png"
                                            alt="consumer protection bureau uk news alrts"
                                            class="img-fluid cpb-announcement">
                                    </div>
                                    <div class="home-alert-text ms-lg-4">
                                        <h2 class="mb-3">Justice Served</h2>
                                        <div>
                                            <a
                                                href="news/adgm-fines-wazim-nazir-following-consumer-protection-bureau-intervention.php">
                                                ADGM Fines Wazim Nazir, Owner of ACW Following Consumer Protection
                                                Bureau's Intervention
                                                <span><i class="bi bi-chevron-double-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="home-alert d-flex align-items-center ">
                                <div class="d-flex flex-lg-row flex-column align-items-center">
                                    <div class="announcement-iameg">
                                        <img src="assets/images/cpb-announcement.png"
                                            alt="consumer protection bureau uk news alrts"
                                            class="img-fluid cpb-announcement">
                                    </div>
                                    <div class="home-alert-text ms-lg-4">
                                        <h2 class="mb-3">CONSUMER <span>ALERT</span> NEWS</h2>
                                        <div>
                                            <a href="news/price-display-discrepancy-at-asada-store.php">
                                                Price Display Discrepancy at <span>Asda Store</span> <span><i
                                                        class="bi bi-chevron-double-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="home-alert d-flex align-items-center ">
                                <div class="d-flex flex-lg-row flex-column align-items-center">
                                    <div class="announcement-iameg">

                                        <img src="assets/images/black-friday-sale.png"
                                            alt="Black Friday & Cyber Monday - Consumer protection bureau"
                                            class="img-fluid cpb-announcement">
                                    </div>
                                    <div class="home-alert-text ms-lg-4">
                                        <a href="news/black-friday-tips.php">
                                            Smart Shopping Tips for
                                            <h2 class="mb-3">
                                                <span class="text-alert"> Black Friday (29th Nov
                                                    24)
                                                    /Cyber Monday(2nd Dec 24) </span>

                                            </h2>
                                            <div>

                                                Avoid Overspending and Protect Yourself from <span>Scams</span>
                                                <span><i class="bi bi-chevron-double-right"></i></span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="home-alert d-flex align-items-center ">
                                <div class="d-flex flex-lg-row flex-column align-items-center">
                                    <div class="announcement-iameg">

                                        <img src="assets/images/resturaents-service-charges.png"
                                            alt="Learn about service charges in UK restaurants and your rights with updates from the Consumer Protection Bureau."
                                            class="img-fluid ">
                                    </div>
                                    <div class="home-alert-text ms-lg-4">
                                        <a href="news/black-friday-tips.php">
                                            Know Your Rights
                                            <h2 class="mb-3">
                                                <span class="text-alert"> Service Charges in UK Restaurants </span>

                                            </h2>
                                            <div>
                                                Learn about service charges in UK restaurants and your rights with
                                                updates from the Consumer Protection Bureau...
                                                <span><i class="bi bi-chevron-double-right"></i></span>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                    <h2 class="main-heading text-center text-uppercase mt-2">
                        Our Commitment
                    </h2>
                    <p class="text text-center">
                        As a proud member of the <a href="https://www.compliance-experts.co.uk/" class="fi">CRC
                            Group</a>, we support and promote goods and services that align with our core values of
                        consumer protection. Our commitment includes advocating for consumer rights and ensuring
                        compliance with consumer protection laws.
                    </p>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                    <div class="commitment-icon">
                        <img src="assets/images/honesty.png" alt="Consumer protection Honesty icon">
                    </div>
                    <div>
                        <h3 class="mt-3 text-center commitment-text">Integrity</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                    <div class="commitment-icon">
                        <img src="assets/images/shield.png" alt="Consumer protection Quality icon">
                    </div>
                    <div>
                        <h3 class="mt-3 text-center commitment-text">Quality</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                    <div class="commitment-icon">
                        <img src="assets/images/fairness.png" alt="Consumer protection Fairness icon">
                    </div>
                    <div>
                        <h3 class="mt-3 text-center commitment-text">Fairness</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                    <div class="commitment-icon">
                        <img src="assets/images/reliability.png" alt="Consumer protection Reliability icon">
                    </div>
                    <div>
                        <h3 class="mt-3 text-center commitment-text">Reliability</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                    <div class="commitment-icon">
                        <img src="assets/images/consumer financial law.png"
                            alt="Consumer protection Value for money icon">
                    </div>
                    <div>
                        <h3 class="mt-3 text-center commitment-text">Value for Money</h3>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <p class="text text-center">
                        Through education, advocacy, and direct assistance, we strive to create a marketplace where
                        consumers are informed, respected, and protected under consumer protection laws. Our
                        dedication ensures that every consumer complaint is addressed with utmost care and that the
                        principles of consumer protection are upheld.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="fight-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="fight-card px-lg-5 home-alert-text">
                  <div class="d-flex align-items-center">
                  <h1>📢</h1><h2 class=" text-white" style="font-size:28px">
                         Latest Announcement: CPB Joins Consumers International!
                        </h2>
                  </div>
                        <p class="text py-2 text-white  mb-0 pb-0">
                        We are proud to announce that <b>Consumer Protection Bureau</b> is now a <b>member </b> of<b>Consumers International</b>, the leading global voice for consumer rights. This partnership marks a significant step in our commitment to advocating for fair trade, ethical business practices, and stronger consumer protection worldwide.
                       <br><br>
                      
                      <div class="d-flex align-items-center ">
                      <div>
                      <span class="text-md"><b>🔹 What This Means for You?</b></span>
                      <ul style="list-style:none">
                        <li>
                        ✔ Greater influence in global consumer policies
                        </li>
                        <li>
                        ✔ Stronger advocacy for consumer rights
                        </li>
                        <li>
                        ✔ Collaborative efforts to protect consumers internationally
                        </li>
                       </ul>
                       <div class="mt-4 pt-3 pb-3">
                            <a href="assets/Press-Release/Press-Release-11-02-2025.pdf" target="_blank" class="main-btn  text-white" style="font-size:22px">📖 Read Our Full Press Release </a>
                        </div>
                      </div>
                       <div class="ps-5 ms-5">
                        <img src="assets/images/Exciting news-pana (2).png" alt="" class="ms-4" style="height:200px">
                       </div>
                      </div>
                    </p>

                     
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-lg-5 py-4 bg-light">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="main-heading text-center text-uppercase mb-lg-5 mb-3 mt-2">
                        Our Popular Amenities
                    </h2>

                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <a href="consumer-issues.php#online-shopping" class="text-decoration-none text-dark">
                        <div class="amenity-card">
                            <img src="assets/images/aminities/Online shopping-consumer rights uk.png"
                                alt="consumer protection laws UK Online Shopping" class="img-fluid">
                            <h3 class="mt-3">Online Shopping</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <a href="consumer-issues.php#tips-for-buy-vehical" class="text-decoration-none text-dark">
                        <div class="amenity-card">
                            <img src="assets/images/aminities/Vehicle Sale-consumer rights uk.png"
                                alt="consumer protection Tips for Buying Vehicles " class="img-fluid">
                            <h3 class="mt-3">Tips for Buying Vehicles</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <a href="consumer-issues.php#property-renovation-and-repair" class="text-decoration-none text-dark">
                        <div class="amenity-card">
                            <img src="assets/images/aminities/consumer rights uk .png" alt="Consumer Rights for Property Renovation and
                                Repair" class="img-fluid">
                            <h3 class="mt-3">Property Renovation and
                                Repair</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <a href="consumer-issues.php#faulty-products" class="text-decoration-none text-dark">
                        <div class="amenity-card">
                            <img src="assets/images/aminities/consumer rights uk (4).png"
                                alt="Consumer Protection laws for Faulty Products" class="img-fluid">
                            <h3 class="mt-3">Faulty Products</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <a href="consumer-issues.php#loans-debt-rights" class="text-decoration-none text-dark">
                        <div class="amenity-card">
                            <img src="assets/images/aminities/consumer rights uk (5).png"
                                alt="Consumer Rights for Loans & Debt " class="img-fluid">
                            <h3 class="mt-3">Loans & Debt</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <a href="consumer-issues.php#consumer-rights" class="text-decoration-none text-dark">
                        <div class="amenity-card">
                            <img src="assets/images/aminities/consumer rights uk.png" alt="Consumer Rights Protection"
                                class="img-fluid">
                            <h3 class="mt-3">Consumer Rights</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <a href="consumer-issues.php#repair-replace-refund" class="text-decoration-none text-dark">
                        <div class="amenity-card">
                            <img src="assets/images/aminities/Refund-amico.png"
                                alt="Consumer Rights to Repair, Replace & Refund" class="img-fluid">
                            <h3 class="mt-3">Repair, Replace & Refund</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-3">
                    <a href="consumer-issues.php#scam-safe" class="text-decoration-none text-dark">
                        <div class="amenity-card">
                            <img src="assets/images/aminities/Scared-pana.png" alt="Consumer Protection for Scam "
                                class="img-fluid">
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
   <section class="fight-section" style="margin-bottom:-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="fight-card text-center px-lg-5 position-relative " style="z-index:30;">
                        <h2 class="secondry-heading text-white">
                            FIGHTING FOR CONSUMER RIGHTS SINCE 2011

                        </h2>
                        <p class="text py-2 text-white text-center ">
                            Do you currently have a consumer complaint against a service provider, retailer, or
                            product manufacturer,
                            and the outcome is unsatisfactory?We can help you exercise your consumer rights and
                            navigate consumer
                            protection laws to get the resolution you deserve.

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

    <section class="pt-5">
        <div class="contact-area py-lg-5 py-4">
            <div class="container py-4">
                <div class="row ">
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-text">
                            <div class="title">
                                <span>Need Help?</span>
                                <h2>We Are Here to Assist!</h2>
                            </div>

                            <p class="text">
                                The Consumer Protection Bureau fights your consumer battles on your behalf. In line
                                with <strong>consumer protection UK</strong> standards, we’ll help you secure
                                refunds, replacements, repairs, and, where appropriate, compensation for poor
                                service, faulty products, or any failure to meet expected quality.
                            </p>
                            <span class="date">
                                COMPLETE OUR SHORT QUESTIONNAIRE TO SEE IF WE CAN HELP YOU AND PROVIDE A NO
                                OBLIGATION QUOTE:
                            </span>
                            <br>
                            <img src="assets/images/Internship-amico.png" alt="Contact Consumer Protection Bureau"
                                class="help-form mt-4 mb-lg-0 mb-4">
                        </div>
                    </div>

                    <div class="col col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-content ps-lg-5">
                            <div class="contact-form">
                                <?php if (isset($_POST['form-issue'])): ?>
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
                                    <input type="hidden" name="form-issue">

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
                                    <div class="g-recaptcha" data-sitekey="6LeWW5YqAAAAAO7CXW7SvpYQih0o9w_XaILDCy3j">
                                    </div>

                                    <div class="submit-btn-wrapper">
                                        <button type="submit" name="issue" class="main-btn">Submit</button>
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
    <section class="py-lg-5 py-4 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                        Why people believe in us
                    </h2>
                </div>
                <div class="col-lg-12">
                    <div class="slick-slider quote-slider">
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
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="main-heading text-uppercase mb-3 ">
                        Frequently Asked Questions
                    </h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="faq.php#faq-1" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> What is the Consumer Protection
                                Bureau (CPB)?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-2" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> How does the CPB work?
                            </a>
                        </li>

                        <li>
                            <a href="faq.php#faq-3" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> What benefits does CPB offer to
                                consumers?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-4" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> How does CPB help consumers with
                                claims?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-5" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> How much does CPB charge for its
                                services?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-6" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> How do I become a member of CPB?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-7" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> What kind of complaints can I bring
                                to CPB?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-8" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i>What laws and regulations does CPB
                                ensure compliance with?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-9" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> Who does CPB work with?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-10" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> What should I do if I have a
                                complaint?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-11" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> How do I file claims with CPB?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-12" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> How long does the claims process
                                take?
                            </a>
                        </li>
                        <li>
                            <a href="faq.php#faq-13" class="faq-text text-decoration-none ">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i> Can I cancel my CPB membership?
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <img src="assets/images/FAQ/Problem solving-pana.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="py-lg-5 py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                        Visit Our Subsidiary Companies
                    </h2>

                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="https://www.compliance-experts.co.uk/" target="_blank"
                        class="text-decoration-none text-dark">
                        <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                            <img src="assets/images/CRC-logo.png" alt="CRC logo" style="width:130px; height:auto;">
                            <h3 class="mt-4 text-center text-md" style=" font-weight:500;">Compilance and Risk
                                Consultancy</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="https://carehomecompliance.com/" target="_blank" class="text-decoration-none text-dark">
                        <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                            <img src="assets/images/Care Home Compilance.png" alt="CHC logo"
                                style="width:100px; height:auto;">
                            <h3 class="mt-4 text-center text-md" style=" font-weight:500;">Care Home Compilance</h3>
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
                                <?php if (isset($_POST['form-contact'])): ?>
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
                                    <input type="hidden" name="form-contact">

                                    <div>
                                        <label for="msg" class="text-white">Message</label>
                                        <textarea class="form-control" name="msg" id="msg"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LeWW5YqAAAAAO7CXW7SvpYQih0o9w_XaILDCy3j">
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
<?php include 'assets/include/footer.php'; ?>


<div class="modal" tabindex="-1" id="chrismas">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent shadow-none border-0">

            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="chrismas-close text-end ms-auto" data-bs-dismiss="modal"
                        aria-label="Close">x</button>
                </div>
                <img src="assets/images/chrismas.png" alt="Merry Chrismas from Conumer Protection Bureau"
                    class="img-fluid ps-lg-4 d-lg-block d-none">
            </div>

        </div>
    </div>
</div>














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