<?php

include_once "includes/functions.php";
include_once "includes/mail.php";

$contactFormSubmitted = false;
if (isset($_POST['form-contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['msg'];

    $subject = "CPB Contact Form";

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

   $subject = "New Consumer Complaint";

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

// $feedbacks = findAll("feedbacks");

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
    <link href="https://fonts.googleapis.com/css2?family=Gidugu&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="assets/css/membership-styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://analytics.ahrefs.com/analytics.js" data-key="VTs14Xy/Kdyw0NN4JQulEw" defer="true"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/utils.js"></script>
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
                                <a href="get-help.php" class="main-btn">Submit Complaint</a>
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
 <!-- CPB Friends Network section -->
    <section id="become-frnd" class="friends-network-section py-lg-5 py-4 position-relative overflow-hidden">
        <div class="network-bg-pattern"></div>
        <div class="container position-relative">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="network-content-left">
                        <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill">Join Our Network</span>
                        <h2 class="main-heading text-uppercase mb-4">Join the CPB 
                            Friends Network –<span style="color:#e5bf20"> <i>It’s Free!</i></span></h2>
                        <h3 class="secondry-heading mb-4 gradient-text">Your Card · Your Voice · Your Protection</h3>
                        
                        <p class="text mb-4 lead">
                          Joining the CPB Friends Network means becoming part of a growing community of consumers who believe in fairness, transparency, and accountability. As a Friend of CPB, you add your voice to a movement that protects people across the UK and beyond.
                        </p>

                        <div class="benefits-list mb-4 fight-card px-lg-4 py-4 shadow-lg border-start border-5 border-primary">
                            <h4 class="mb-3 text-white fw-bold">Why Join?</h4>
                            <ul class="list-styled text-white mb-0">
                                <li class="mb-3 d-flex align-items-center">
                                    <span class="me-2">➤</span>
                                    <span>Get your official CPB Friends Card</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                      <span class="me-2">➤</span>
                                    <span>Get exclusive alerts & scam warnings</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                     <span class="me-2">➤</span>
                                    <span>Join campaigns that change policy</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                     <span class="me-2">➤</span>
                                    <span>Priority access to advice & support</span>
                                </li>
                             
                                <li class="mb-3 d-flex align-items-center">
                                     <span class="me-2">➤</span>
                                    <span>Access to ConsuMag, CPB's digital magazine</span>
                                </li>
                            </ul>
                        </div>

                        <div class="highlight-box p-3 bg-light rounded-3 border-start border-5 border-warning mb-4">
                            <p class="text mb-0">
                                <strong>Together, we are stronger. Together, we make markets fairer.</strong>
                            </p>
                        </div>

                        <div class="text-center">
                            <button type="button" class="main-btn btn-lg shadow-sm" onclick="document.getElementById('friendPopup').style.display = 'flex';">
                                <span class="me-2">Join the Network Today</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class=" h-100  position-relative overflow-hidden" style="">
                        <div class="card-shine"></div>
                        <div class="card-body px-lg-4 py-4 text-center">
                            <div class="card-image-wrapper position-relative mb-4">
                                <div class="card-glow"></div>
                                <img src="assets/images/cpb-friends-card.png" 
                                alt="CPB Friends Card Template" class="img-fluid rounded-3 " style="max-width: 90%;">
                            </div>
                            
                            <div class="card-content">
                                <h4 class=" mb-3 " style="color:#223a78">
                                    <b>
                                        Every Friend of CPB Receives a <br>
                                     Digital CPB Friends Card
                                    </b>
                                    </h4>
                                <p class="">This card is more than a symbol – it's a reminder that:</p>
                                <ul class="card-benefits mt-3 text-start">
                                    <li class=" mb-3">You are part of a strong consumer protection community.</li>
                                    <li class=" mb-3">You have added confidence when raising consumer concerns.</li>
                                    <li class=" mb-0">You are never alone – CPB stands with you.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .network-bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0,123,255,0.05) 0%, rgba(0,123,255,0) 100%);
            z-index: 0;
        }

        .gradient-text {
            background: linear-gradient(90deg, #e5bf20, #c9a71c);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .benefit-icon {
            color: #28a745;
            font-size: 1.2rem;
        }

        .card-shine {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.1) 50%,
                rgba(255,255,255,0) 100%
            );
            transform: rotate(45deg);
            pointer-events: none;
            transition: 0.5s;
        }

        .fight-card:hover .card-shine {
            left: 100%;
        }

        .card-glow {
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(
                circle at 50% 50%,
                rgba(255,255,255,0.2) 0%,
                rgba(255,255,255,0) 60%
            );
            pointer-events: none;
            opacity: 0;
            transition: 0.3s;
        }

        .card-image-wrapper:hover .card-glow {
            opacity: 1;
        }

        .hover-effect {
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .hover-lift {
            transition: transform 0.2s;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
        }

        .benefit-icon-wrapper {
            font-size: 1.5rem;
            height: 40px;
            display: flex;
            align-items: center;
        }

        .extra-benefit {
            background: rgba(255,255,255,0.05);
            transition: background 0.3s;
        }

        .extra-benefit:hover {
            background: rgba(255,255,255,0.1);
        }

        @media (max-width: 768px) {
            .gradient-text {
                font-size: 1.5rem;
            }
            
            .benefit-item {
                margin-bottom: 1rem;
            }
        }
    </style>

    <!-- membership section -->
    <section class="membership-section py-lg-5 py-4">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="main-heading text-uppercase">Become a Member of <br> the Consumer Protection Bureau (CPB)
                    </h2>
                    <p class="text mt-3">
                        At CPB, our mission is to protect consumer rights and ensure fair outcomes when companies let
                        you down.
                        By becoming a member, you'll have our expert support for complaints, refunds, and ongoing
                        consumer protection.
                    </p>

                    <div class="how-it-works mt-4 ">
                        <h3 class="text-center mb-4">How it Works</h3>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <strong>Annual Membership:</strong> £50 per year (Silver Membership)
                                    </li>
                                    <li class="mb-3">
                                        <strong>Refunds:</strong> If we recover more than £300, we apply a small success
                                        fee (15% for Bronze & Silver members, reduced to 10% for Gold members)
                                    </li>
                                    <li class="mb-3">
                                        <strong>Voluntary Contribution:</strong> If you do not wish to become a member,
                                        you can still request our help by making a voluntary contribution to support our
                                        work
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header text-center py-4">
                            <h3>Bronze Supporter</h3>
                            <h4 class="price">£15<span class="period">/One-Time</span></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>✓ Casework support for a single complaint</li>
                                <li>✓ We draft and submit challenges on your behalf</li>
                                <li>✓ Case updates until resolution</li>
                                <li>✓ Access to ConsuMag (our online magazine)</li>
                                <li>✓ 15% success fee if refund is recovered</li>
                            </ul>
                        </div>
                        <!-- <div class="card-footer text-center">
                            <a href="membership.php?plan=bronze" class="main-btn">Select Plan</a>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 popular">
                        <div class="popular-badge">Most Popular</div>
                        <div class="card-header text-center py-4">
                            <h3>Silver Member</h3>
                            <h4 class="price">£50<span class="period">/Annual</span></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>✓ Unlimited support for all complaints for 12 months</li>
                                <li>✓ Priority handling of cases</li>
                                <li>✓ Regular campaign updates & alerts</li>
                                <li>✓ Members-only webinars and advice sheets</li>
                                <li>✓ Access to ConsuMag</li>
                                <li>✓ 15% success fee if refund is recovered</li>
                            </ul>
                        </div>
                        <!-- <div class="card-footer text-center">
                            <a href="membership.php?plan=silver" class="main-btn">Select Plan</a>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header text-center py-4">
                            <h3>Gold Champion</h3>
                            <h4 class="price">£100<span class="period">/Annual</span></h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>✓ Everything in Silver PLUS:</li>
                                <li>✓ Personal case manager for faster support</li>
                                <li>✓ Priority access to media campaigns</li>
                                <li>✓ Recognition as a Gold Champion member</li>
                                <li>✓ Complimentary CPB workshop</li>
                                <li>✓ Access to ConsuMag</li>
                                <li>✓ Reduced success fee of 10% on refunds</li>
                            </ul>
                        </div>
                        <!-- <div class="card-footer text-center">
                            <a href="membership.php?plan=gold" class="main-btn">Select Plan</a>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-8 text-center mt-4">
                    <p class="text">
                        Join CPB today and let us stand by your side in every consumer dispute.
                    </p>
                    <div class="mt-4">
                        <a href="membership.php" class="main-btn">Become a Member Today</a>
                    </div>
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
                                        <h2 class="mb-3">Fake or Real? </h2>
                                        <div>
                                            <a href="news/spotting-fake-products.php">
                                                The Truth Behind Counterfeit Products
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
                                            <a href="news/price-display-discrepancy-at-asda-store.php">
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
                            <h1>📢</h1>
                            <h2 class=" text-white" style="font-size:28px">
                                Latest Announcement: CPB Joins Consumers International!
                            </h2>
                        </div>
                        <p class="text py-2 text-white  mb-0 pb-0">
                            We are proud to announce that <b>Consumer Protection Bureau</b> is now a <b>member </b> of
                            <b>Consumers International</b>, the leading global voice for consumer rights. This
                            partnership marks a significant step in our commitment to advocating for fair trade, ethical
                            business practices, and stronger consumer protection worldwide.
                            <br><br>

                        <div class="d-flex  align-items-center ">
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
                                    <a href="Press-Release/Press-Release-11-02-2025.pdf" target="_blank"
                                        class="main-btn home-news-btn text-white" style="font-size:22px">📖 Read Our
                                        Full Press
                                        Release </a>
                                </div>
                            </div>
                            <div class="ps-5 ms-5 d-md-block d-none">
                                <img src="assets/images/Exciting news-pana (2).png" alt="" class="ms-4"
                                    style="height:200px">
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
   

    <section class="fight-section fighiting-for-consumer pt-5 bg-light" style="margin-bottom:-80px">
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
                    <div class="col-lg-4 col-md-12">
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

                    <div class="col col-lg-8 col-md-12 col-sm-12">
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
                                    <div class="half-col pe-lg-2 mb-3">
                                        <label for="Name" class="text-white">Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control form-input"
                                            placeholder="Your Name" required>
                                        <div class="invalid-feedback">Please enter your name</div>
                                    </div>
                                    <div class="half-col ps-lg-2 mb-3">
                                        <label for="phone" class="text-white">Phone <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="phone" id="phone" class="form-control "
                                            placeholder="Phone" required>
                                        <div class="invalid-feedback">Please enter a valid phone number</div>
                                    </div>
                                    <div class=" mb-3">
                                        <label for="email" class="text-white">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control form-input"
                                            placeholder="Email" required>
                                        <div class="invalid-feedback">Please enter a valid email address</div>
                                    </div>
                                    <input type="hidden" name="form-issue">

                                    <div class=" mb-3">
                                        <label for="consumer-issue" class="text-white">Consumer Issues <span
                                                class="text-danger">*</span></label>
                                        <select name="consumer-issue" id="consumer-issue" class="form-control "
                                            required>
                                            <option value="" selected disabled>Select Consumer Issue</option>
                                            <option value="Travels">Travels</option>
                                            <option value="Energy/Utilities">Energy/Utilities</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Health and Foods">Health and Foods</option>
                                            <option value="Consumer Rights">Consumer Rights</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a consumer issue</div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-7 mb-3">
                                            <label for="currency" class="text-white">Currency <span
                                                    class="text-danger">*</span></label>
                                            <select name="currency" id="currency" class="form-control text-white"
                                                required>
                                                <!-- Most common currencies first -->
                                                <option value="GBP" selected>British Pound Sterling (GBP - £)</option>
                                                <option value="EUR">Euro (EUR - €)</option>
                                                <option value="USD">US Dollar (USD - $)</option>

                                                <!-- All other currencies alphabetically -->
                                                <option value="AED">United Arab Emirates Dirham (AED - د.إ.‏)</option>
                                                <option value="AFN">Afghan Afghani (AFN - ؋)</option>
                                                <option value="ALL">Albanian Lek (ALL - Lek)</option>
                                                <option value="AMD">Armenian Dram (AMD - դր.)</option>
                                                <option value="ARS">Argentine Peso (ARS - $)</option>
                                                <option value="AUD">Australian Dollar (AUD - $)</option>
                                                <option value="AZN">Azerbaijani Manat (AZN - ман.)</option>
                                                <option value="BAM">Bosnia-Herzegovina Mark (BAM - KM)</option>
                                                <option value="BDT">Bangladeshi Taka (BDT - ৳)</option>
                                                <option value="BGN">Bulgarian Lev (BGN - лв.)</option>
                                                <option value="BHD">Bahraini Dinar (BHD - د.ب.‏)</option>
                                                <option value="BIF">Burundian Franc (BIF - FBu)</option>
                                                <option value="BND">Brunei Dollar (BND - $)</option>
                                                <option value="BOB">Bolivian Boliviano (BOB - Bs)</option>
                                                <option value="BRL">Brazilian Real (BRL - R$)</option>
                                                <option value="BWP">Botswanan Pula (BWP - P)</option>
                                                <option value="BYN">Belarusian Ruble (BYN - руб.)</option>
                                                <option value="BZD">Belize Dollar (BZD - $)</option>
                                                <option value="CAD">Canadian Dollar (CAD - $)</option>
                                                <option value="CDF">Congolese Franc (CDF - FrCD)</option>
                                                <option value="CHF">Swiss Franc (CHF)</option>
                                                <option value="CLP">Chilean Peso (CLP - $)</option>
                                                <option value="CNY">Chinese Yuan (CNY - CN¥)</option>
                                                <option value="COP">Colombian Peso (COP - $)</option>
                                                <option value="CRC">Costa Rican Colón (CRC - ₡)</option>
                                                <option value="CVE">Cape Verdean Escudo (CVE - CV$)</option>
                                                <option value="CZK">Czech Republic Koruna (CZK - Kč)</option>
                                                <option value="DJF">Djiboutian Franc (DJF - Fdj)</option>
                                                <option value="DKK">Danish Krone (DKK - kr)</option>
                                                <option value="DOP">Dominican Peso (DOP - RD$)</option>
                                                <option value="DZD">Algerian Dinar (DZD - د.ج.‏)</option>
                                                <option value="EGP">Egyptian Pound (EGP - ج.م.‏)</option>
                                                <option value="ERN">Eritrean Nakfa (ERN - Nfk)</option>
                                                <option value="ETB">Ethiopian Birr (ETB - Br)</option>
                                                <option value="GEL">Georgian Lari (GEL)</option>
                                                <option value="GHS">Ghanaian Cedi (GHS - GH₵)</option>
                                                <option value="GNF">Guinean Franc (GNF - FG)</option>
                                                <option value="GTQ">Guatemalan Quetzal (GTQ - Q)</option>
                                                <option value="HKD">Hong Kong Dollar (HKD - $)</option>
                                                <option value="HNL">Honduran Lempira (HNL - L)</option>
                                                <option value="HRK">Croatian Kuna (HRK - kn)</option>
                                                <option value="HUF">Hungarian Forint (HUF - Ft)</option>
                                                <option value="IDR">Indonesian Rupiah (IDR - Rp)</option>
                                                <option value="ILS">Israeli New Sheqel (ILS - ₪)</option>
                                                <option value="INR">Indian Rupee (INR - টকা)</option>
                                                <option value="IQD">Iraqi Dinar (IQD - د.ع.‏)</option>
                                                <option value="IRR">Iranian Rial (IRR - ﷼)</option>
                                                <option value="ISK">Icelandic Króna (ISK - kr)</option>
                                                <option value="JMD">Jamaican Dollar (JMD - $)</option>
                                                <option value="JOD">Jordanian Dinar (JOD - د.أ.‏)</option>
                                                <option value="JPY">Japanese Yen (JPY - ￥)</option>
                                                <option value="KES">Kenyan Shilling (KES - Ksh)</option>
                                                <option value="KHR">Cambodian Riel (KHR - ៛)</option>
                                                <option value="KMF">Comorian Franc (KMF - FC)</option>
                                                <option value="KRW">South Korean Won (KRW - ₩)</option>
                                                <option value="KWD">Kuwaiti Dinar (KWD - د.ك.‏)</option>
                                                <option value="KZT">Kazakhstani Tenge (KZT - тңг.)</option>
                                                <option value="LBP">Lebanese Pound (LBP - ل.ل.‏)</option>
                                                <option value="LKR">Sri Lankan Rupee (LKR - SL Re)</option>
                                                <option value="LYD">Libyan Dinar (LYD - د.ل.‏)</option>
                                                <option value="MAD">Moroccan Dirham (MAD - د.م.‏)</option>
                                                <option value="MDL">Moldovan Leu (MDL)</option>
                                                <option value="MGA">Malagasy Ariary (MGA)</option>
                                                <option value="MKD">Macedonian Denar (MKD)</option>
                                                <option value="MMK">Myanma Kyat (MMK - K)</option>
                                                <option value="MOP">Macanese Pataca (MOP - MOP$)</option>
                                                <option value="MUR">Mauritian Rupee (MUR - MURs)</option>
                                                <option value="MXN">Mexican Peso (MXN - $)</option>
                                                <option value="MYR">Malaysian Ringgit (MYR - RM)</option>
                                                <option value="MZN">Mozambican Metical (MZN - MTn)</option>
                                                <option value="NAD">Namibian Dollar (NAD - N$)</option>
                                                <option value="NGN">Nigerian Naira (NGN - ₦)</option>
                                                <option value="NIO">Nicaraguan Córdoba (NIO - C$)</option>
                                                <option value="NOK">Norwegian Krone (NOK - kr)</option>
                                                <option value="NPR">Nepalese Rupee (NPR - नेरू)</option>
                                                <option value="NZD">New Zealand Dollar (NZD - $)</option>
                                                <option value="OMR">Omani Rial (OMR - ر.ع.‏)</option>
                                                <option value="PAB">Panamanian Balboa (PAB - B/.)</option>
                                                <option value="PEN">Peruvian Nuevo Sol (PEN - S/.)</option>
                                                <option value="PHP">Philippine Peso (PHP - ₱)</option>
                                                <option value="PKR">Pakistani Rupee (PKR - ₨)</option>
                                                <option value="PLN">Polish Zloty (PLN - zł)</option>
                                                <option value="PYG">Paraguayan Guarani (PYG - ₲)</option>
                                                <option value="QAR">Qatari Rial (QAR - ر.ق.‏)</option>
                                                <option value="RON">Romanian Leu (RON)</option>
                                                <option value="RSD">Serbian Dinar (RSD - дин.)</option>
                                                <option value="RUB">Russian Ruble (RUB - ₽)</option>
                                                <option value="RWF">Rwandan Franc (RWF - FR)</option>
                                                <option value="SAR">Saudi Riyal (SAR - ر.س.‏)</option>
                                                <option value="SDG">Sudanese Pound (SDG)</option>
                                                <option value="SEK">Swedish Krona (SEK - kr)</option>
                                                <option value="SGD">Singapore Dollar (SGD - $)</option>
                                                <option value="SOS">Somali Shilling (SOS - Ssh)</option>
                                                <option value="SYP">Syrian Pound (SYP - ل.س.‏)</option>
                                                <option value="THB">Thai Baht (THB - ฿)</option>
                                                <option value="TND">Tunisian Dinar (TND - د.ت.‏)</option>
                                                <option value="TOP">Tongan Paʻanga (TOP - T$)</option>
                                                <option value="TRY">Turkish Lira (TRY - TL)</option>
                                                <option value="TTD">Trinidad and Tobago Dollar (TTD - $)</option>
                                                <option value="TWD">New Taiwan Dollar (TWD - NT$)</option>
                                                <option value="TZS">Tanzanian Shilling (TZS - TSh)</option>
                                                <option value="UAH">Ukrainian Hryvnia (UAH - ₴)</option>
                                                <option value="UGX">Ugandan Shilling (UGX - USh)</option>
                                                <option value="UYU">Uruguayan Peso (UYU - $)</option>
                                                <option value="UZS">Uzbekistan Som (UZS)</option>
                                                <option value="VEF">Venezuelan Bolívar (VEF - Bs.F.)</option>
                                                <option value="VND">Vietnamese Dong (VND - ₫)</option>
                                                <option value="XAF">CFA Franc BEAC (XAF - FCFA)</option>
                                                <option value="XOF">CFA Franc BCEAO (XOF - CFA)</option>
                                                <option value="YER">Yemeni Rial (YER - ر.ي.‏)</option>
                                                <option value="ZAR">South African Rand (ZAR - R)</option>
                                                <option value="ZMK">Zambian Kwacha (ZMK - ZK)</option>
                                                <option value="ZWL">Zimbabwean Dollar (ZWL - ZWL$)</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a currency</div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <label for="price" class="text-white">Price of Product/Service <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" name="price" id="price" class="form-control form-input"
                                                placeholder="Price amount" required min="0" step="0.01">
                                            <div class="invalid-feedback">Please enter a valid price</div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="complaint-about" class="text-white">Product or Service Complaining
                                            about <span class="text-danger">*</span></label>
                                        <input type="text" name="complaint-about" id="complaint-about"
                                            class="form-control form-input"
                                            placeholder="Product or Service Complaining about" required>
                                        <div class="invalid-feedback">Please specify what you are complaining about
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="text-white">Desired Resolution <span
                                                class="text-danger">*</span></label>
                                        <select name="address" id="address" class="form-control" required>
                                            <option value="" disabled selected>Select Desired Resolution</option>
                                            <option value="Refund">Refund</option>
                                            <option value="Repair">Repair</option>
                                            <option value="Replacement">Replacement</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your desired resolution</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="reason" class="text-white">Nature of Complaint <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" name="reason" id="reason"
                                            placeholder="Please provide detailed information about your complaint (minimum 30 words)..."
                                            required rows="5"></textarea>
                                        <div class="invalid-feedback">Please enter a detailed complaint (minimum 30
                                            words)</div>
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
    <!-- <section>
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
    </section> -->
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
<script>
const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
    initialCountry: "gb",
    preferredCountries: ["gb", "us"],
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/utils.js",
    separateDialCode: true,
    formatOnDisplay: true,
    autoPlaceholder: "polite"
});

// Form validation
document.getElementById('issue-form').addEventListener('submit', function(e) {
    let isValid = true;

    // Reset all error states
    this.querySelectorAll('.is-invalid').forEach(el => {
        el.classList.remove('is-invalid');
    });

    // Name validation
    const name = document.getElementById('name');
    if (!name.value.trim()) {
        name.classList.add('is-invalid');
        isValid = false;
    }

    // Phone validation using intl-tel-input
    if (!phoneInput.isValidNumber()) {
        phoneInputField.classList.add('is-invalid');
        isValid = false;
    }

    // Email validation
    const email = document.getElementById('email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
        email.classList.add('is-invalid');
        isValid = false;
    }

    // Consumer issue validation
    const consumerIssue = document.getElementById('consumer-issue');
    if (!consumerIssue.value || consumerIssue.value === "") {
        consumerIssue.classList.add('is-invalid');
        isValid = false;
    }

    // Price validation
    const price = document.getElementById('price');
    if (!price.value || parseFloat(price.value) < 0) {
        price.classList.add('is-invalid');
        isValid = false;
    }

    // Currency validation
    const currency = document.getElementById('currency');
    if (!currency.value) {
        currency.classList.add('is-invalid');
        isValid = false;
    }

    // Complaint about validation
    const complaintAbout = document.getElementById('complaint-about');
    if (!complaintAbout.value.trim()) {
        complaintAbout.classList.add('is-invalid');
        isValid = false;
    }

    // Desired resolution validation
    const resolution = document.getElementById('address');
    if (!resolution.value) {
        resolution.classList.add('is-invalid');
        isValid = false;
    }

    // Nature of complaint validation (minimum 30 words)
    const reason = document.getElementById('reason');
    const wordCount = reason.value.trim().split(/\s+/).length;
    if (!reason.value.trim() || wordCount < 30) {
        reason.classList.add('is-invalid');
        reason.nextElementSibling.textContent = wordCount < 30 ?
            `Please enter at least 30 words (current: ${wordCount})` :
            'Please enter your complaint';
        isValid = false;
    }

    // reCAPTCHA validation
    const recaptchaResponse = grecaptcha.getResponse();
    if (!recaptchaResponse) {
        document.querySelector('.g-recaptcha').classList.add('is-invalid');
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
        // Scroll to the first error
        const firstError = document.querySelector('.is-invalid');
        if (firstError) {
            firstError.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }
    }
});

// Real-time word count for complaint
document.getElementById('reason').addEventListener('input', function() {
    const wordCount = this.value.trim().split(/\s+/).filter(word => word.length > 0).length;
    const minWords = 30;

    if (wordCount < minWords) {
        this.classList.add('is-invalid');
        this.nextElementSibling.textContent = `Please enter at least ${minWords} words (current: ${wordCount})`;
    } else {
        this.classList.remove('is-invalid');
        this.nextElementSibling.textContent = '';
    }
});

// Price input validation - allow only numbers and decimal point
document.getElementById('price').addEventListener('input', function() {
    this.value = this.value.replace(/[^\d.]/g, '');
    if (this.value.split('.').length > 2) {
        this.value = this.value.replace(/\.+$/, '');
    }
});

// Clear validation styling on input
document.querySelectorAll('#issue-form input, #issue-form select, #issue-form textarea').forEach(element => {
    element.addEventListener('input', function() {
        this.classList.remove('is-invalid');
    });
});
</script>

<!-- Friend Request Popup -->
<div id="friendPopup" class="popup-overlay" style="display: none;">
    <div class="popup-content">
        <h3>
            Would you like to be a friend of 
      CPB?
        </h3>
        <div class="popup-buttons">
            <button onclick="showFriendForm()">
                <b>Be friend of CPB</b>
            </button>
            <button onclick="closePopup('friendPopup')">
                <b>No thanks</b>
            </button>
        </div>
    </div>
</div>

<!-- Friend Form Popup -->
<div id="friendFormPopup" class="popup-overlay" style="display: none;">
    <div class="popup-content">
        <div id="friendFormContent">
            <h3>Become a friend/supporter of CPB</h3>
            <form id="friendForm" onsubmit="submitFriendForm(event)">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <button type="submit">
                    <b>Be Friend</b>
                </button>
            </form>
        </div>
        <div id="successMessage" style="display: none;">
            <h2 style="color: var(--secondry);">Congratulations!</h2>
            <p style="color: var(--primary); font-size: 18px; margin: 10px 0;">
                <b>You are now a friend/supporter of CPB</b>
            </p>
            
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><g id="freepik--background-complete--inject-71"><rect y="382.4" width="500" height="0.25" style="fill:#ebebeb"></rect><rect x="52.46" y="391.92" width="33.12" height="0.25" style="fill:#ebebeb"></rect><rect x="171.14" y="389.21" width="46.75" height="0.25" style="fill:#ebebeb"></rect><rect x="112.8" y="399.65" width="19.19" height="0.25" style="fill:#ebebeb"></rect><rect x="312.33" y="395.31" width="30.21" height="0.25" style="fill:#ebebeb"></rect><rect x="351.44" y="395.31" width="19.32" height="0.25" style="fill:#ebebeb"></rect><rect x="391.35" y="399.53" width="58.56" height="0.25" style="fill:#ebebeb"></rect><path d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z" style="fill:#ebebeb"></path><path d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z" style="fill:#ebebeb"></path><rect x="89.51" y="96.33" width="237.93" height="148.89" transform="translate(416.95 341.55) rotate(180)" style="fill:#f0f0f0"></rect><rect x="141.03" y="56.47" width="134.89" height="228.62" transform="translate(379.25 -37.7) rotate(90)" style="fill:#fafafa"></rect><polygon points="292.69 238.22 269.23 103.33 251.94 103.33 275.39 238.22 292.69 238.22" style="fill:#fff"></polygon><polygon points="271.4 238.22 247.95 103.33 240.22 103.33 263.67 238.22 271.4 238.22" style="fill:#fff"></polygon><polygon points="233.56 238.22 210.11 103.33 192.82 103.33 216.27 238.22 233.56 238.22" style="fill:#fff"></polygon><polygon points="189.97 238.22 166.51 103.33 158.78 103.33 182.23 238.22 189.97 238.22" style="fill:#fff"></polygon><rect x="194.68" y="170.19" width="134.89" height="1.18" transform="translate(432.9 -91.35) rotate(90)" style="fill:#e0e0e0"></rect><rect x="254.75" y="170.19" width="134.89" height="1.18" transform="translate(492.97 -151.41) rotate(90)" style="fill:#e0e0e0"></rect><rect x="197.6" y="168.45" width="134.89" height="4.66" transform="translate(435.82 -94.27) rotate(90)" style="fill:#f0f0f0"></rect><rect x="136.96" y="170.19" width="134.89" height="1.18" transform="translate(375.19 -33.63) rotate(90)" style="fill:#e0e0e0"></rect><rect x="139.88" y="168.45" width="134.89" height="4.66" transform="translate(378.1 -36.55) rotate(90)" style="fill:#f0f0f0"></rect><rect x="79.22" y="170.19" width="134.89" height="1.18" transform="translate(317.44 24.11) rotate(90)" style="fill:#e0e0e0"></rect><rect x="82.14" y="168.45" width="134.89" height="4.66" transform="translate(320.36 21.2) rotate(90)" style="fill:#f0f0f0"></rect><rect x="14.47" y="170.19" width="148.89" height="1.18" transform="translate(259.69 81.86) rotate(90)" style="fill:#e0e0e0"></rect><path d="M65.33,86.11H338a1.56,1.56,0,0,0,1.56-1.55h0A1.56,1.56,0,0,0,338,83H65.33a1.56,1.56,0,0,0-1.55,1.56h0A1.56,1.56,0,0,0,65.33,86.11Z" style="fill:#e0e0e0"></path><g style="opacity:0.6000000000000001"><rect x="230.73" y="80" width="103.46" height="271.67" transform="translate(564.92 431.67) rotate(180)" style="fill:#f5f5f5"></rect><polygon points="293.64 353.89 302.31 353.89 299.88 82.22 296 82.22 293.64 353.89" style="fill:#e6e6e6"></polygon><polygon points="312.77 353.89 316.96 353.89 315.78 82.22 313.91 82.22 312.77 353.89" style="fill:#e6e6e6"></polygon><polygon points="268.5 353.89 272.68 353.89 271.51 82.22 269.64 82.22 268.5 353.89" style="fill:#e6e6e6"></polygon><polygon points="247.2 353.89 251.38 353.89 250.21 82.22 248.34 82.22 247.2 353.89" style="fill:#e6e6e6"></polygon></g><g style="opacity:0.6000000000000001"><rect x="70.67" y="80" width="51.73" height="271.67" transform="translate(193.07 431.67) rotate(180)" style="fill:#f5f5f5"></rect><polygon points="102.13 353.89 106.46 353.89 105.25 82.22 103.31 82.22 102.13 353.89" style="fill:#e6e6e6"></polygon><polygon points="111.69 353.89 113.78 353.89 113.2 82.22 112.26 82.22 111.69 353.89" style="fill:#e6e6e6"></polygon><polygon points="89.56 353.89 91.65 353.89 91.06 82.22 90.13 82.22 89.56 353.89" style="fill:#e6e6e6"></polygon><polygon points="78.91 353.89 81 353.89 80.41 82.22 79.47 82.22 78.91 353.89" style="fill:#e6e6e6"></polygon></g><rect x="361.1" y="122" width="68.63" height="85.66" style="fill:#e6e6e6"></rect><rect x="362.13" y="122" width="70.62" height="85.66" style="fill:#f5f5f5"></rect><rect x="360.69" y="134.93" width="73.5" height="59.79" transform="translate(562.27 -232.61) rotate(90)" style="fill:#fafafa"></rect><rect x="390.31" y="164.55" width="73.5" height="0.56" transform="translate(591.89 -262.23) rotate(90)" style="fill:#e6e6e6"></rect><circle cx="411.12" cy="153.89" r="8.64" transform="translate(11.59 335.78) rotate(-45)" style="fill:#f0f0f0"></circle><circle cx="397.31" cy="166.85" r="17.56" transform="translate(-1.61 329.81) rotate(-45)" style="fill:#fff"></circle><circle cx="384.35" cy="153.89" r="8.64" transform="translate(146.27 492.6) rotate(-76.72)" style="fill:#f0f0f0"></circle><rect x="349.68" y="280.36" width="9.38" height="95.62" style="fill:#f0f0f0"></rect><rect x="347.4" y="274.64" width="99.82" height="5.72" style="fill:#f0f0f0"></rect><rect x="353.5" y="375.98" width="87.61" height="6.42" style="fill:#f0f0f0"></rect><rect x="359.06" y="280.36" width="85.88" height="95.62" style="fill:#fafafa"></rect><rect x="366.88" y="291.01" width="70.23" height="29.34" transform="translate(803.99 611.36) rotate(180)" style="fill:#f0f0f0"></rect><rect x="366.88" y="334.17" width="70.23" height="29.34" transform="translate(803.99 697.67) rotate(180)" style="fill:#f0f0f0"></rect><rect x="392.17" y="289.28" width="19.65" height="4.56" rx="1.82" style="fill:#fafafa"></rect><rect x="392.17" y="332.44" width="19.65" height="4.56" rx="1.82" style="fill:#fafafa"></rect><circle cx="188.1" cy="360.84" r="21.56" transform="translate(-55.37 34.79) rotate(-9.22)" style="fill:#ebebeb"></circle><circle cx="154.98" cy="355.49" r="26.91" transform="translate(-54.94 29.42) rotate(-9.22)" style="fill:#f5f5f5"></circle></g><g id="freepik--Shadow--inject-71"><ellipse id="freepik--path--inject-71" cx="250" cy="416.24" rx="193.89" ry="11.32" style="fill:#f5f5f5"></ellipse></g><g id="freepik--Confetti--inject-71"><path d="M126.61,197.54c-6.61,0-9.72-6.65-9.85-6.93a1.32,1.32,0,0,1,2.39-1.1c0,.09,2.63,5.54,7.66,5.4a1.32,1.32,0,0,1,.07,2.63Z" style="fill:#223A78"></path><path d="M213,105.19a12.63,12.63,0,0,1-1.72-.11,1.31,1.31,0,0,1,.39-2.6h0c.06,0,6.08.85,8.72-3.44a1.31,1.31,0,0,1,2.24,1.37C220,104.57,215.45,105.19,213,105.19Z" style="fill:#223A78"></path><path d="M213,105.19a12.63,12.63,0,0,1-1.72-.11,1.31,1.31,0,0,1,.39-2.6h0c.06,0,6.08.85,8.72-3.44a1.31,1.31,0,0,1,2.24,1.37C220,104.57,215.45,105.19,213,105.19Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M64.6,155.27A13.78,13.78,0,0,1,57.48,153,1.31,1.31,0,1,1,59,150.87h0c.05,0,5.09,3.41,9.34.7a1.32,1.32,0,1,1,1.42,2.22A9.44,9.44,0,0,1,64.6,155.27Z" style="fill:#223A78"></path><path d="M64.6,155.27A13.78,13.78,0,0,1,57.48,153,1.31,1.31,0,1,1,59,150.87h0c.05,0,5.09,3.41,9.34.7a1.32,1.32,0,1,1,1.42,2.22A9.44,9.44,0,0,1,64.6,155.27Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M407.63,120.2A13.87,13.87,0,0,1,400.5,118a1.31,1.31,0,0,1,1.49-2.16h0c.05,0,5.1,3.4,9.35.7a1.31,1.31,0,1,1,1.41,2.21A9.34,9.34,0,0,1,407.63,120.2Z" style="fill:#223A78"></path><path d="M407.63,120.2A13.87,13.87,0,0,1,400.5,118a1.31,1.31,0,0,1,1.49-2.16h0c.05,0,5.1,3.4,9.35.7a1.31,1.31,0,1,1,1.41,2.21A9.34,9.34,0,0,1,407.63,120.2Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M246.81,223.49c-6.13,0-9.47-5.94-9.62-6.21a1.31,1.31,0,0,1,2.3-1.27c0,.08,3,5.32,8,4.81a1.32,1.32,0,0,1,.27,2.62C247.46,223.47,247.13,223.49,246.81,223.49Z" style="fill:#223A78"></path><path d="M246.81,223.49c-6.13,0-9.47-5.94-9.62-6.21a1.31,1.31,0,0,1,2.3-1.27c0,.08,3,5.32,8,4.81a1.32,1.32,0,0,1,.27,2.62C247.46,223.47,247.13,223.49,246.81,223.49Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M79,250.2a1.31,1.31,0,0,1-.31-2.58h0c.06,0,5.93-1.55,6.73-6.53a1.31,1.31,0,1,1,2.59.42c-1.07,6.71-8.38,8.58-8.69,8.66A1.73,1.73,0,0,1,79,250.2Z" style="fill:#223A78"></path><path d="M79,250.2a1.31,1.31,0,0,1-.31-2.58h0c.06,0,5.93-1.55,6.73-6.53a1.31,1.31,0,1,1,2.59.42c-1.07,6.71-8.38,8.58-8.69,8.66A1.73,1.73,0,0,1,79,250.2Z" style="opacity:0.6000000000000001"></path><path d="M371,159.05a1.31,1.31,0,0,1-.32-2.59h0c.06,0,5.93-1.54,6.73-6.52a1.32,1.32,0,1,1,2.6.42c-1.08,6.71-8.39,8.58-8.7,8.65A1.1,1.1,0,0,1,371,159.05Z" style="fill:#223A78"></path><path d="M371,159.05a1.31,1.31,0,0,1-.32-2.59h0c.06,0,5.93-1.54,6.73-6.52a1.32,1.32,0,1,1,2.6.42c-1.08,6.71-8.39,8.58-8.7,8.65A1.1,1.1,0,0,1,371,159.05Z" style="opacity:0.6000000000000001"></path><path d="M424.73,208.91l-.22,0c-.32-.06-7.74-1.42-9.27-8a1.31,1.31,0,0,1,1-1.58,1.32,1.32,0,0,1,1.58,1c1.14,4.9,7.1,6,7.16,6a1.32,1.32,0,0,1-.23,2.61Z" style="fill:#223A78"></path><path d="M401.29,257.12a9.6,9.6,0,0,1-6.28-2.21,1.31,1.31,0,1,1,1.68-2c3.87,3.22,9.3.52,9.36.49a1.31,1.31,0,0,1,1.2,2.34A14.24,14.24,0,0,1,401.29,257.12Z" style="fill:#223A78"></path><path d="M340,93a1.29,1.29,0,0,1-.65-.17c-.27-.15-6.8-3.93-6-10.68a1.31,1.31,0,0,1,2.61.3c-.57,5,4.67,8.07,4.72,8.1A1.31,1.31,0,0,1,340,93Z" style="fill:#223A78"></path><path d="M78.79,98.33a1.31,1.31,0,0,1-.11-2.62c5-.44,7-6.18,7-6.24a1.31,1.31,0,0,1,2.49.81c-.09.31-2.49,7.46-9.26,8Z" style="fill:#223A78"></path></g><g id="freepik--character-1--inject-71"><path d="M176.36,137.9c-3.55,1.66-6.68,9.64-5.66,21.1s-22.72,3.42-25.95,16.26c-5.83,23.24,33.26,37.21,49.92,23.24,10.31-8.64,20-37.12,18.58-52.66C211.73,129.13,185.81,117.92,176.36,137.9Z" style="fill:#263238"></path><path d="M213.87,167.22c.44-.13,1.08-.32,1.63-.5l1.72-.58c1.15-.4,2.29-.84,3.42-1.31a64.11,64.11,0,0,0,6.58-3.15A40.93,40.93,0,0,0,238.33,153c2.83-3.36,4.86-7.94,6.45-12.64.81-2.36,1.49-4.79,2.07-7.26s1.13-5,1.55-7.43l4.08.25A73.91,73.91,0,0,1,250.73,142a53.12,53.12,0,0,1-2.41,7.94,33,33,0,0,1-4.17,7.65,44.12,44.12,0,0,1-12.86,11.15,63.25,63.25,0,0,1-7.44,3.76c-1.28.54-2.57,1-3.89,1.49-.65.23-1.31.45-2,.65s-1.3.39-2.12.59Z" style="fill:#7f3e3b"></path><path d="M252.46,127.29l1.7-6.11-6.75.52s-.48,4,1.85,6.41Z" style="fill:#7f3e3b"></path><polygon points="255.17 114.07 249.01 115.68 247.41 121.7 254.16 121.18 255.17 114.07" style="fill:#7f3e3b"></polygon><path d="M206.23,168.78c3.11-2.83,11-5,11-5l8.65,13s-9.87,6.59-14.06,5.06C207.46,180.32,203.33,171.41,206.23,168.78Z" style="fill:#223A78"></path><polygon points="177.74 353.69 183.13 359.61 198.6 348.59 193.21 342.67 177.74 353.69" style="fill:#7f3e3b"></polygon><polygon points="147.32 377.08 154.55 380.67 165.18 365.08 157.95 361.49 147.32 377.08" style="fill:#7f3e3b"></polygon><path d="M155.7,379.78l-5.58-7.15a.64.64,0,0,0-.83-.17l-6.29,3.6a1.29,1.29,0,0,0-.34,1.9c2,2.46,3.07,3.55,5.53,6.7,1.5,1.93,4.56,6.43,6.64,9.1s4.84.76,4.21-.54c-2.82-5.83-3-9.29-2.9-12.07A2.09,2.09,0,0,0,155.7,379.78Z" style="fill:#263238"></path><path d="M184.74,359.72l-3.68-8.84a.77.77,0,0,0-.82-.47l-7.8,1a1.18,1.18,0,0,0-.95,1.66c1.34,3.07,2.15,4.5,3.77,8.39,1,2.39,3.32,8.67,4.69,12s4.89,2.54,4.63,1.08c-1.17-6.54-.77-10.76.2-13.33A1.94,1.94,0,0,0,184.74,359.72Z" style="fill:#263238"></path><polygon points="198.59 348.59 190.62 354.27 184.59 348.81 193.2 342.67 198.59 348.59" style="opacity:0.2"></polygon><polygon points="157.95 361.49 165.18 365.08 159.69 373.12 152.46 369.52 157.95 361.49" style="opacity:0.2"></polygon><path d="M217.12,169.79s.24-.36-4.14,47.42l-32.7,2.29c-.38-13.34.62-22.76-5.61-50.17a96.2,96.2,0,0,1,13.93-1.76,103.45,103.45,0,0,1,14.88.08C209.87,168.26,217.12,169.79,217.12,169.79Z" style="fill:#223A78"></path><path d="M177.13,177.25c-2.43-1.12-4.56-2.32-6.77-3.59s-4.3-2.63-6.38-4.07a76.9,76.9,0,0,1-11.75-9.82l-1.32-1.43-.34-.36a8.88,8.88,0,0,1-.55-.7,8.74,8.74,0,0,1-.8-1.4,12.62,12.62,0,0,1-1-4.94,32.13,32.13,0,0,1,1.08-8,74.57,74.57,0,0,1,5.26-14.16l3.82,1.48c-.59,2.27-1.15,4.63-1.65,6.94s-.92,4.64-1.2,6.92a29.49,29.49,0,0,0-.26,6.48,6,6,0,0,0,.56,2.16c0,.07.1.15.13.16s0,0,0,0l.31.29,1.23,1.17a85.84,85.84,0,0,0,11,8.45c1.95,1.29,4,2.47,6,3.66s4.15,2.32,6.1,3.31Z" style="fill:#7f3e3b"></path><path d="M187.54,171.16c-3.71-5.17-11-5.09-11-5.09l-8.79,13s9.81,6.68,14,5.19C186.19,182.68,189.83,174.34,187.54,171.16Z" style="fill:#223A78"></path><path d="M203.48,167.65l-14.88-.08c-2.28.92-3.6,6.85,11.5,11.87C210.57,173.49,205,168.2,203.48,167.65Z" style="fill:#fff"></path><path d="M190.16,150.82c.91,4.79,1.8,13.57-1.56,16.75,0,0,1.3,4.87,11.5,11.87,7.15-7.17,3.38-11.79,3.38-11.79-5.33-1.31-5.17-5.27-4.22-9Z" style="fill:#7f3e3b"></path><path d="M221,198.38h-.16a2,2,0,0,1-1.83-2.15c.36-4.46-3-7.83-6.86-11.74-4.43-4.47-9.46-9.54-9.66-17.43a2,2,0,0,1,4-.1c.16,6.3,4.4,10.58,8.5,14.72s8.51,8.58,8,14.87A2,2,0,0,1,221,198.38Z" style="fill:#263238"></path><path d="M191.77,208.5a2,2,0,0,1-.48-.06,2,2,0,0,1-1.46-2.42c1.93-7.84-.6-14-3.28-20.48-2.4-5.82-4.88-11.84-3.68-18.88a2,2,0,0,1,3.94.68c-1,5.9,1.15,11.14,3.43,16.68,2.68,6.49,5.71,13.85,3.47,23A2,2,0,0,1,191.77,208.5Z" style="fill:#263238"></path><path d="M197.38,157l-4,.47a9.11,9.11,0,0,0,1.14,3.05c.79,1.19,2.55,1.71,4.29,1.76a13.49,13.49,0,0,1,.5-3.66Z" style="opacity:0.2"></path><path d="M181.31,146c2.93,7.46,4,10.68,9.11,13.34,7.68,4,16.2-1.21,15.56-9.39-.57-7.37-5.26-18.33-13.69-18.95A10.93,10.93,0,0,0,181.31,146Z" style="fill:#7f3e3b"></path><path d="M189.34,129.92c5.69,3.5.82,24.09-8.81,23S180.93,124.75,189.34,129.92Z" style="fill:#263238"></path><path d="M189.13,130c-4.29,2.85-1.36,7.81,13.1,4.87C202.23,134.86,196.25,125.26,189.13,130Z" style="fill:#263238"></path><path d="M182.35,153.25a5.88,5.88,0,0,0,3.24,3.08c1.93.72,3.06-1,2.68-2.87-.35-1.71-1.77-4.16-3.77-4.06A2.63,2.63,0,0,0,182.35,153.25Z" style="fill:#7f3e3b"></path><path d="M213,217.21s17.5,57.13,18.91,81.71c1.46,25.57-36.51,55.91-36.51,55.91l-9.45-10.37s30.85-26.2,26.62-45.18C206.72,273.12,189,218.89,189,218.89Z" style="fill:#263238"></path><path d="M202.09,235.91c-1.6-5-5.16-1.64-6.4,3.66,2.47,8,5.33,17.36,8.05,26.73C204.79,258,205.22,245.71,202.09,235.91Z" style="opacity:0.2"></path><polygon points="183.39 343.96 195.38 356.33 200.5 353.5 187.83 339.71 183.39 343.96" style="fill:#223A78"></polygon><path d="M204.35,217.82s-5,56-10,87.19c-4.05,25.2-31.56,66.36-31.56,66.36l-10.08-4.69s18.49-44.07,21.37-61.2c9.24-54.83-3.24-70.65,6.21-86Z" style="fill:#263238"></path><polygon points="152 366.79 163.37 372.37 167.1 367.74 153.8 361.47 152 366.79" style="fill:#223A78"></polygon><path d="M179.66,217.62l-1.27,3c-.1.23.18.45.56.42l34.3-2.4c.29,0,.53-.18.53-.37l.09-3c0-.2-.26-.35-.58-.33l-33.12,2.32A.57.57,0,0,0,179.66,217.62Z" style="fill:#fff"></path><path d="M184.36,221l-.88.06c-.18,0-.32-.07-.32-.18l.15-3.83c0-.11.16-.22.33-.23l.89-.06c.18,0,.32.07.31.18l-.15,3.83C184.69,220.9,184.54,221,184.36,221Z" style="fill:#263238"></path><path d="M210.78,219.16l-.89.06c-.18,0-.32-.07-.31-.18l.15-3.83c0-.11.15-.21.33-.23l.88-.06c.18,0,.32.07.32.18l-.15,3.84C211.1,219.05,211,219.15,210.78,219.16Z" style="fill:#263238"></path><path d="M197.57,220.09l-.89.06c-.17,0-.31-.07-.31-.18l.15-3.84c0-.11.15-.21.33-.22l.89-.06c.17,0,.31.07.31.18l-.15,3.83C197.9,220,197.75,220.07,197.57,220.09Z" style="fill:#263238"></path><path d="M193.36,143.2c-.48.16-.68.88-.44,1.62l1.75-.56C194.43,143.52,193.84,143,193.36,143.2Z" style="fill:#263238"></path><path d="M201,140.78c-.49.16-.69.89-.45,1.63l1.76-.57C202,141.1,201.43,140.63,201,140.78Z" style="fill:#263238"></path><path d="M200.75,140.89l1.61-1.08S201.9,141.49,200.75,140.89Z" style="fill:#263238"></path><path d="M199,143.8a17.3,17.3,0,0,0,3.48,3.24,2.79,2.79,0,0,1-2.07,1.13Z" style="fill:#630f0f"></path><path d="M199.12,151.28a.2.2,0,0,0,.06-.21.19.19,0,0,0-.24-.12,5.18,5.18,0,0,1-4.62-.62.19.19,0,0,0-.27,0,.18.18,0,0,0,0,.27,5.44,5.44,0,0,0,5,.7Z" style="fill:#263238"></path><path d="M190.83,142.75a.36.36,0,0,0,.11-.16,3,3,0,0,1,1.94-2,.38.38,0,1,0-.18-.74,3.81,3.81,0,0,0-2.48,2.46.38.38,0,0,0,.24.48A.36.36,0,0,0,190.83,142.75Z" style="fill:#263238"></path><path d="M202.81,137.81a.12.12,0,0,0,.05-.05.38.38,0,0,0-.06-.54,3.82,3.82,0,0,0-3.41-.75.38.38,0,0,0-.24.49.39.39,0,0,0,.48.24,3,3,0,0,1,2.69.62A.38.38,0,0,0,202.81,137.81Z" style="fill:#263238"></path><path d="M162.75,131.73a1.36,1.36,0,0,1-.69-.19L131.64,112.8a1.32,1.32,0,0,1,1.38-2.24l30.42,18.74a1.31,1.31,0,0,1-.69,2.43Z" style="fill:#223A78"></path><path d="M138.53,114.87c1.71-.07,3.47-.15,3.7-1.69s-1.42-2.13-3-2.71l-.43-.16c0-.15-.07-.3-.11-.44l.35-.39c1.12-1.24,2.29-2.52,1.38-3.74s-2.47-.5-4,.21l-.47.22c-.13-.09-.26-.16-.4-.24s0-.32,0-.46c-.08-1.7-.16-3.46-1.69-3.69s-2.13,1.42-2.71,3c-.05.13-.1.28-.16.43l-.45.11-.38-.34c-1.24-1.13-2.52-2.29-3.74-1.39s-.5,2.47.21,4l.22.47a4.11,4.11,0,0,0-.24.39l-.46,0c-1.7.08-3.47.16-3.7,1.7s1.43,2.13,3,2.71l.43.16c0,.15.07.3.11.44-.12.14-.24.28-.35.39-1.12,1.24-2.28,2.51-1.38,3.74s2.47.49,4-.21l.48-.22.39.24c0,.16,0,.32,0,.46.08,1.7.16,3.46,1.69,3.69s2.14-1.42,2.72-3c0-.12.1-.27.15-.43a3.69,3.69,0,0,0,.45-.11l.39.35c1.23,1.12,2.51,2.29,3.74,1.39s.49-2.47-.22-4c-.06-.13-.14-.3-.21-.47l.24-.39Z" style="fill:#223A78"></path><path d="M138.53,114.87c1.71-.07,3.47-.15,3.7-1.69s-1.42-2.13-3-2.71l-.43-.16c0-.15-.07-.3-.11-.44l.35-.39c1.12-1.24,2.29-2.52,1.38-3.74s-2.47-.5-4,.21l-.47.22c-.13-.09-.26-.16-.4-.24s0-.32,0-.46c-.08-1.7-.16-3.46-1.69-3.69s-2.13,1.42-2.71,3c-.05.13-.1.28-.16.43l-.45.11-.38-.34c-1.24-1.13-2.52-2.29-3.74-1.39s-.5,2.47.21,4l.22.47a4.11,4.11,0,0,0-.24.39l-.46,0c-1.7.08-3.47.16-3.7,1.7s1.43,2.13,3,2.71l.43.16c0,.15.07.3.11.44-.12.14-.24.28-.35.39-1.12,1.24-2.28,2.51-1.38,3.74s2.47.49,4-.21l.48-.22.39.24c0,.16,0,.32,0,.46.08,1.7.16,3.46,1.69,3.69s2.14-1.42,2.72-3c0-.12.1-.27.15-.43a3.69,3.69,0,0,0,.45-.11l.39.35c1.23,1.12,2.51,2.29,3.74,1.39s.49-2.47-.22-4c-.06-.13-.14-.3-.21-.47l.24-.39Z" style="fill:#fff;opacity:0.7000000000000001"></path><path d="M153.67,132.05l-1.25-8,8.16,4a7.07,7.07,0,0,1-2,3.53,3.3,3.3,0,0,1-3.37,1Z" style="fill:#7f3e3b"></path><polygon points="157 120.13 161.18 123.8 160.58 128 152.42 124.04 157 120.13" style="fill:#7f3e3b"></polygon><path d="M158.32,383.61a2.12,2.12,0,0,0,.24-.2.64.64,0,0,0,.19-.63c-.24-1-3-2-3.31-2.07a.17.17,0,0,0-.2.05.19.19,0,0,0,0,.21c.45,1,1.35,2.64,2.36,2.81A1,1,0,0,0,158.32,383.61Zm-2.57-2.38c1.09.41,2.5,1.11,2.63,1.64a.28.28,0,0,1-.1.27.72.72,0,0,1-.65.27C157.08,383.31,156.4,382.51,155.75,381.23Z" style="fill:#223A78"></path><path d="M158.83,380.94a.63.63,0,0,0,.17-.15.66.66,0,0,0,0-.84,1,1,0,0,0-.7-.48c-1.15-.21-3,1.21-3.07,1.27a.2.2,0,0,0-.07.18.21.21,0,0,0,.11.15A5.06,5.06,0,0,0,158.83,380.94Zm-3-.15a4.21,4.21,0,0,1,2.41-.94.58.58,0,0,1,.44.3c.13.21.07.32,0,.39-.36.43-2,.51-2.91.28Z" style="fill:#223A78"></path><path d="M184.92,364.25a3.13,3.13,0,0,0,1.13,1.56,1.17,1.17,0,0,0,1,.09.55.55,0,0,0,.39-.42c.21-1-2.41-3.47-2.94-4a.2.2,0,0,0-.22,0,.18.18,0,0,0-.09.2A12.08,12.08,0,0,0,184.92,364.25ZM187,365a.7.7,0,0,1,.07.37c0,.05,0,.1-.14.14a.83.83,0,0,1-.72-.06c-.61-.36-1.17-1.56-1.53-3.26A12.1,12.1,0,0,1,187,365Z" style="fill:#223A78"></path><path d="M184.23,361.75a.21.21,0,0,0,0,.06c.82.83,3.27,2.17,4.06,1.71.17-.1.35-.32.21-.8-.51-1.84-4-1.26-4.17-1.23a.18.18,0,0,0-.15.13A.2.2,0,0,0,184.23,361.75Zm3.9.95.05.12c0,.2,0,.32,0,.37-.46.26-2.31-.6-3.29-1.38C185.71,361.72,187.69,361.64,188.13,362.7Z" style="fill:#223A78"></path><path d="M193.16,143.31l1.61-1.09S194.31,143.91,193.16,143.31Z" style="fill:#263238"></path></g><g id="freepik--character-2--inject-71"><polygon points="323.89 405.27 316.14 405.28 314.05 387.34 321.8 387.33 323.89 405.27" style="fill:#ffc3bd"></polygon><polygon points="390.6 371.97 384.73 377.04 371.44 364.81 377.3 359.74 390.6 371.97" style="fill:#ffc3bd"></polygon><path d="M383.59,376.84l7.14-6.18a.65.65,0,0,1,.83,0L397,375a1.19,1.19,0,0,1,0,1.82c-2.33,1.95-4.12,3.26-7,5.76-1.78,1.54-7,6.38-9.46,8.51s-4.79-.12-4-1.22c3.7-4.92,6-9.28,6.36-11.87A2,2,0,0,1,383.59,376.84Z" style="fill:#263238"></path><path d="M316.19,404.38h8.47a.68.68,0,0,1,.66.53l1.54,6.89a1.13,1.13,0,0,1-1.11,1.38c-3.06-.05-7.47-.22-11.31-.22-4.48,0-7.11.12-12.37.13-3.18,0-4.07-3.21-2.74-3.5,6.06-1.34,9.76-1.35,15-4.59A3.58,3.58,0,0,1,316.19,404.38Z" style="fill:#263238"></path><path d="M291,182.51c-1.56-.6-2.9-1.15-4.3-1.79s-2.75-1.27-4.11-1.94q-4.07-2-8-4.46A75.34,75.34,0,0,1,267,169c-.61-.5-1.23-1-1.83-1.51l-1.78-1.63c-.59-.54-1.15-1.16-1.72-1.74-.29-.32-.54-.55-.87-.93s-.65-.75-.94-1.13a24.42,24.42,0,0,1-2.77-4.66,36.46,36.46,0,0,1-1.77-4.65,56.78,56.78,0,0,1-2-9.18,85.29,85.29,0,0,1-.45-18.06l5.82,0c.4,2.71.82,5.56,1.37,8.3s1.13,5.48,1.84,8.12a57.93,57.93,0,0,0,2.54,7.57,21.72,21.72,0,0,0,3.53,6l.49.5c.15.16.45.4.67.6.48.41.92.84,1.43,1.23,1,.8,2,1.59,3.12,2.35,2.16,1.5,4.44,2.93,6.82,4.27s4.81,2.61,7.28,3.81c1.24.61,2.49,1.21,3.74,1.77s2.56,1.15,3.68,1.63Z" style="fill:#ffc3bd"></path><path d="M292.24,189.11a90.53,90.53,0,0,1-12.46-9.32L282.87,164a144.21,144.21,0,0,0,17.49,3.82C310.11,169.08,299.19,193.25,292.24,189.11Z" style="fill:#263238"></path><path d="M258.89,126.87l.55-9.87-8.2,2.63s-1.91,7.07,3.41,8.93Z" style="fill:#ffc3bd"></path><polygon points="258.45 111.69 251.68 114.51 251.24 119.63 259.44 117 258.45 111.69" style="fill:#ffc3bd"></polygon><polygon points="314.06 387.34 315.13 396.59 322.88 396.58 321.81 387.33 314.06 387.34" style="opacity:0.2"></polygon><polygon points="377.31 359.74 371.44 364.81 378.3 371.11 384.16 366.04 377.31 359.74" style="opacity:0.2"></polygon><path d="M330.16,167.5a4.16,4.16,0,0,0-4.06-4.29c-22.12-.41-36.51,5.79-37.5,6.19a2.34,2.34,0,0,0-1.43,1.77c-.92,5.54-3.53,28.76,9.26,65.1l41-5.87C336.88,224.35,329.24,196.59,330.16,167.5Z" style="fill:#263238"></path><path d="M297,166.61c-2.43,3.25-3.53,10.74,4.52,16.22,9.9-7.39,15-15.34,16.51-19.48A102.82,102.82,0,0,0,297,166.61Z" style="fill:#fff"></path><path d="M295.16,169.65a2,2,0,0,1-2-2c0-1.65,1.43-3.07,2.64-4,4.06-3,12-5.29,22-2.4a2,2,0,0,1-1.11,3.84c-11.6-3.35-18.75,1.41-19.52,2.78A2,2,0,0,1,295.16,169.65Z" style="fill:#223A78"></path><path d="M311.78,144.34c-.3,5.77.07,16.21,4.53,19.39-2.62,3.47-6.11,7.54-12.74,8.73-4,.71-5.37-.77-5.54-2.64a4.81,4.81,0,0,1,2.44-4.49c4.31-2.5,3.45-6.52,1.9-10.32Z" style="fill:#ffc3bd"></path><path d="M294.55,215.53a1.92,1.92,0,0,1-.66-.12,2,2,0,0,1-1.22-2.55,5.43,5.43,0,0,0-.16-4.37l-.21-.57a6.64,6.64,0,0,0-1.34-1.8,6.5,6.5,0,0,1-1.71-8.05,5.39,5.39,0,0,0,.43-1.8,6.68,6.68,0,0,0-.91-2,7.91,7.91,0,0,1-1.41-4,7.81,7.81,0,0,1,1.57-4.14,5.43,5.43,0,0,0,.8-1.5,4,4,0,0,0-.32-1.62,6,6,0,0,1-.34-3.6,6.58,6.58,0,0,1,2.38-3.4,3.74,3.74,0,0,0,.83-.87,2.61,2.61,0,0,0,0-1.48,4.58,4.58,0,0,1,.45-3.43c.7-1.1.63-1.38.57-1.61a3.4,3.4,0,0,1-.13-1.08,2,2,0,0,1,4,0l0,.06c.28,1.13.36,2.48-1,4.69a6.1,6.1,0,0,0,.09.7,5.55,5.55,0,0,1-2.15,6c-.64.56-1,.9-1.14,1.39a2.84,2.84,0,0,0,.27,1.34,7.35,7.35,0,0,1,.49,3.37,7.75,7.75,0,0,1-1.4,3.17,4.82,4.82,0,0,0-.94,2,5.57,5.57,0,0,0,.87,1.95,9.3,9.3,0,0,1,1.43,3.56,8.27,8.27,0,0,1-.61,3.52,5,5,0,0,0-.45,2.27,5.64,5.64,0,0,0,1.33,1.83,9.67,9.67,0,0,1,2.16,3.18l.18.52a9.26,9.26,0,0,1,.17,7.05A2,2,0,0,1,294.55,215.53Zm2.61-47.78Z" style="fill:#223A78"></path><path d="M329.79,167.17c1.09,1,2,1.84,2.92,2.8s1.82,1.89,2.71,2.85c1.78,1.92,3.46,3.94,5.08,6a65,65,0,0,1,8.41,13.92,41.54,41.54,0,0,1,1.46,4.07c.21.7.39,1.43.56,2.17l.06.27.09.47c.06.31.09.64.12,1a9.84,9.84,0,0,1-.06,2,10,10,0,0,1-1.07,3.42,13.28,13.28,0,0,1-1.69,2.48,18,18,0,0,1-3.71,3.22,34.13,34.13,0,0,1-7.54,3.7c-1.26.46-2.53.85-3.81,1.18s-2.52.64-3.91.87l-1.8-5.53c1-.56,2.07-1.15,3.08-1.75s2-1.23,3-1.86a36.91,36.91,0,0,0,5.23-4,10.77,10.77,0,0,0,1.63-2c.35-.57.32-.95.22-.83a.23.23,0,0,0,0,.1s0,0,0,0,0,0,0,0l-.06-.18c-.15-.46-.29-.93-.49-1.41a28.46,28.46,0,0,0-1.27-2.86,46.87,46.87,0,0,0-3.42-5.69c-1.27-1.88-2.67-3.72-4.15-5.52s-3-3.57-4.61-5.32c-.79-.87-1.6-1.72-2.42-2.56s-1.68-1.72-2.41-2.42Z" style="fill:#ffc3bd"></path><path d="M327.21,163.38c4.52.67,11.61,12,11.61,12l-11.51,15.43s-6.14-5.85-7.93-11C316,169.93,318.33,162.08,327.21,163.38Z" style="fill:#263238"></path><path d="M321.18,202.22a2,2,0,0,1-1.71-1,8.1,8.1,0,0,1-.86-4.36,5.43,5.43,0,0,0-.16-1.85,6.48,6.48,0,0,0-1.49-1.62,7.88,7.88,0,0,1-2.59-3.34,7.69,7.69,0,0,1,.19-4.42,5.6,5.6,0,0,0,.29-1.68,6.52,6.52,0,0,0-1.08-1.89,6,6,0,0,1-.33-8,5.77,5.77,0,0,0,.65-1.31,6.61,6.61,0,0,0-.54-2.2,6.4,6.4,0,0,1-.56-3.8,9.19,9.19,0,0,1,2.66-4.82l.13-.13a2,2,0,0,1,2.88,2.77l-.23.23a5.42,5.42,0,0,0-1.57,2.93,9.11,9.11,0,0,0,.45,1.47,9.36,9.36,0,0,1,.77,3.84,7.15,7.15,0,0,1-1.19,3.05,4.56,4.56,0,0,0-.83,2,5.9,5.9,0,0,0,1,1.7,9.24,9.24,0,0,1,1.73,3.41,7.72,7.72,0,0,1-.33,3.45,5,5,0,0,0-.27,2.2,5.74,5.74,0,0,0,1.45,1.58,9.4,9.4,0,0,1,2.47,2.94,8.13,8.13,0,0,1,.52,3.53,5.3,5.3,0,0,0,.29,2.3,2,2,0,0,1-.69,2.74A2,2,0,0,1,321.18,202.22Z" style="fill:#223A78"></path><path d="M307.94,148.69,302.38,155a18.31,18.31,0,0,1,1,3c2.34-.69,5.25-3.78,5.15-6.32A8.53,8.53,0,0,0,307.94,148.69Z" style="opacity:0.2"></path><path d="M296.25,127.93c-2.47,4.3-.89,10.42-.89,10.42a4.43,4.43,0,0,0,4.49.2l-.7-11.4Z" style="fill:#263238"></path><path d="M315.72,138.85c-1.89,7.46-2.62,11.92-7.16,15.07-6.83,4.74-15.49-.48-15.86-8.35-.34-7.09,2.81-18.09,10.77-19.69A10.48,10.48,0,0,1,315.72,138.85Z" style="fill:#ffc3bd"></path><path d="M293.94,147.53l-.27,0-16.95-3.59a3.55,3.55,0,1,1,1.47-6.95,1.3,1.3,0,0,1,1,1.55,1.31,1.31,0,0,1-1.55,1,.87.87,0,0,0-.7.13.92.92,0,0,0-.4.58,1,1,0,0,0,.13.7,1,1,0,0,0,.58.4l16.95,3.59a1.31,1.31,0,0,1-.27,2.59Z" style="fill:#223A78"></path><path d="M293.87,147.83l-2.05-.44.65-3,2,.43a1.56,1.56,0,0,1,1.2,1.85h0A1.58,1.58,0,0,1,293.87,147.83Z" style="fill:#fff"></path><path d="M311.09,134.75c0-2.84-2.14-4.91-9.28-4.36-5.83.44-8.67-2.28-7-6.07,4.72,2.46,3.94-.76,12.94-1.15s11.61,3,12.56,8.27c5.51,8.17-4,11.56-4,11.56l-3.72,3.25a4.42,4.42,0,0,1-4.28-1.37S307.58,138.25,311.09,134.75Z" style="fill:#263238"></path><path d="M301.53,121.76l-.23.12a1.38,1.38,0,0,0-.08,2.39l20.88,12.91a1.38,1.38,0,0,0,2.09-1h0a3.33,3.33,0,0,0-1.54-3.33l-17.8-11A3.34,3.34,0,0,0,301.53,121.76Z" style="fill:#223A78"></path><path d="M305.29,123.14l5.34-7.82a1.06,1.06,0,0,1,1.42-.31l14.74,8.83a1.05,1.05,0,0,1,.3,1.55l-6.39,8.44Z" style="fill:#223A78"></path><polygon points="305.29 123.14 307.42 119.33 323.88 130.21 320.7 133.83 305.29 123.14" style="fill:#223A78"></polygon><polygon points="305.29 123.14 307.42 119.33 323.88 130.21 320.7 133.83 305.29 123.14" style="fill:#fff;opacity:0.6000000000000001"></polygon><path d="M316.67,148a6.79,6.79,0,0,1-5,1.08c-2.27-.44-2.27-2.74-.7-4.37,1.41-1.47,4.3-3,6.12-1.73S318.48,146.75,316.67,148Z" style="fill:#ffc3bd"></path><path d="M312.22,394.81l13.12,0s-2.06-46.66-4.89-70.64c-.86-7.3.07-17.3.16-28.47.12-14.07.77-29.4,1.41-41.43.68-12.67,1.25-21.8,1.25-21.8l-26.84,3.83s-2.66,66.43,1.51,89.71C302.28,350.19,312.22,394.81,312.22,394.81Z" style="fill:#223A78"></path><path d="M320.61,295.67c.12-14.07.77-29.4,1.41-41.43l-4-5.35C313.08,258.14,316.51,282.77,320.61,295.67Z" style="opacity:0.2"></path><path d="M309.22,234.44s16.67,65.83,24.59,87.12c8.67,23.3,40.6,50.54,40.6,50.54l8.07-8.88s-16.89-26.33-29.34-51.66c-5.95-32.89-15.67-81.16-15.67-81.16Z" style="fill:#223A78"></path><polygon points="373.33 373.44 385.98 362.51 382.71 358.74 368.36 370.71 373.33 373.44" style="fill:#263238"></polygon><polygon points="310.57 395.11 326.21 395.09 326.2 390.04 308.73 389.8 310.57 395.11" style="fill:#263238"></polygon><path d="M304.2,137.39c-.5-.15-1.09.33-1.33,1.08l1.78.57C304.89,138.29,304.69,137.55,304.2,137.39Z" style="fill:#263238"></path><path d="M296.4,135.92c-.51,0-1,.58-1,1.37l1.86.12C297.29,136.62,296.92,136,296.4,135.92Z" style="fill:#263238"></path><path d="M299.09,138.2a22.47,22.47,0,0,1-3.93,4.7A3.62,3.62,0,0,0,298,144Z" style="fill:#ed847e"></path><path d="M306.74,136.59a.41.41,0,0,0,.19,0,.37.37,0,0,0,.24-.46,3.63,3.63,0,0,0-2.28-2.45.35.35,0,0,0-.45.25.36.36,0,0,0,.25.45h0a2.92,2.92,0,0,1,1.78,2A.39.39,0,0,0,306.74,136.59Z" style="fill:#263238"></path><path d="M294.09,134.87a.37.37,0,0,0,.33-.11,2.93,2.93,0,0,1,2.45-1,.37.37,0,0,0,.42-.31.36.36,0,0,0-.3-.41,3.64,3.64,0,0,0-3.11,1.24.36.36,0,0,0,0,.52A.41.41,0,0,0,294.09,134.87Z" style="fill:#263238"></path><path d="M382.49,379.58a9.37,9.37,0,0,0,1.36-1.55.18.18,0,0,0,0-.2.16.16,0,0,0-.18-.09c-.32,0-3.17.47-3.54,1.38a.62.62,0,0,0,.08.61,1.07,1.07,0,0,0,.9.51A2.27,2.27,0,0,0,382.49,379.58Zm.8-1.4c-.83,1.07-1.63,1.69-2.17,1.69a.71.71,0,0,1-.6-.36.22.22,0,0,1,0-.24C380.66,378.8,382.15,378.38,383.29,378.18Z" style="fill:#223A78"></path><path d="M383.82,378.07a.24.24,0,0,0,.06-.09.21.21,0,0,0,0-.19c-.07-.07-1.6-1.7-2.74-1.69a1,1,0,0,0-.74.33h0a.62.62,0,0,0-.14.76c.41.78,2.64,1.1,3.52.92Zm-3.14-1.44a.62.62,0,0,1,.42-.15c.73,0,1.73.85,2.21,1.3-1,.05-2.53-.31-2.78-.77,0-.05-.07-.15.09-.32h0Z" style="fill:#223A78"></path><path d="M315.43,405.46a.18.18,0,0,0,.12-.15.17.17,0,0,0-.09-.19c-.36-.18-3.47-1.76-4.41-1.23a.58.58,0,0,0-.31.49h0a1,1,0,0,0,.35.89c.85.75,3.07.44,4.32.19Zm-4.14-1.28c.59-.2,2.28.44,3.51,1-1.71.29-3,.22-3.47-.21a.65.65,0,0,1-.22-.59.21.21,0,0,1,.12-.19Z" style="fill:#223A78"></path><path d="M315.43,405.46l.05,0a.21.21,0,0,0,.08-.17c0-.08-.23-2.17-1.21-3a1.33,1.33,0,0,0-1-.31h0c-.51,0-.65.31-.68.51-.14.88,1.71,2.55,2.65,3A.2.2,0,0,0,315.43,405.46Zm-2.25-3.09.19,0h0a.94.94,0,0,1,.74.24,4.27,4.27,0,0,1,1,2.38c-.95-.57-2.22-1.88-2.13-2.41C313,402.51,313,402.42,313.18,402.37Zm.17-.22h0Z" style="fill:#223A78"></path><path d="M328.55,211.54l-7.46,2.36,5.79,5.76s6.76-2.93,4.64-5.91Z" style="fill:#ffc3bd"></path><polygon points="318.02 220.48 323.33 223.7 326.88 219.66 321.09 213.9 318.02 220.48" style="fill:#ffc3bd"></polygon></g></svg>
            <div class="popup-buttons">
                <button onclick="closePopup('friendFormPopup')" style="width: auto;">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(34, 58, 120, 0.85);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.popup-content {
    background-color: white;
    padding: 40px;
    border-radius: 12px;
    max-width: 450px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    font-family: var(--primary-font);
}

.popup-content h3 {
    color: var(--primary);
    font-size: 24px;
    margin-bottom: 25px;
    font-weight: 600;
}

.popup-buttons {
    margin-top: 25px;
    display: flex;
    justify-content: center;
    gap: 15px;
}

.popup-buttons button {
    min-width: 140px;
    padding: 12px 25px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-family: var(--primary-font);
    font-weight: 500;
    transition: all 0.3s ease;
    text-transform: uppercase;
    font-size: 14px;
}

.popup-buttons button:first-child {
    background-color: var(--secondry);
    color: var(--primary);
}

.popup-buttons button:first-child:hover {
    background-color: var(--primary);
    color: white;
}

.popup-buttons button:last-child {
    background-color: #ffffff;
    color: var(--primary);
    border: 2px solid var(--primary);
}

.popup-buttons button:last-child:hover {
    background-color: var(--primary);
    color: white;
}

.form-group {
    margin-bottom: 20px;
}

.form-group input {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e1e1e1;
    border-radius: 6px;
    font-family: var(--primary-font);
    transition: all 0.3s ease;
    font-size: 14px;
}

.form-group input:focus {
    border-color: var(--secondry);
    outline: none;
    box-shadow: 0 0 0 3px rgba(229, 191, 32, 0.1);
}

#friendForm button {
    background-color: var(--secondry);
    color: var(--primary);
    padding: 12px 30px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-family: var(--primary-font);
    font-weight: 500;
    transition: all 0.3s ease;
    text-transform: uppercase;
    font-size: 14px;
    width: 100%;
    margin-top: 10px;
}

#friendForm button:hover {
    background-color: var(--primary);
    color: white;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Show the initial popup after a short delay
    setTimeout(function() {
        document.getElementById('friendPopup').style.display = 'flex';
    }, 1000);
});

function closePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';
}

function showFriendForm() {
    closePopup('friendPopup');
    document.getElementById('friendFormPopup').style.display = 'flex';
}

function submitFriendForm(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    fetch('become-friend.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('friendFormContent').style.display = 'none';
            document.getElementById('successMessage').style.display = 'block';
        } else {
            alert('There was an error. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error. Please try again.');
    });
}
</script>
</body>

</html>