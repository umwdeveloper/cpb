<!-- <?php

include_once "./includes/mail.php";

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


?> -->
<!doctype html>
<html lang="en">

<head>
    <title>Price Display Discrepancy at Asda Store - Consumer Alert News - (CPB)</title>
    <meta name="description"
        content="Stay updated with the Consumer Protection Bureau UK. Explore the latest consumer alerts, UK consumer laws, and protection tips from a trusted agency.">
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
    <link rel="canonical"
        href="https://www.consumerprotectionbureau.co.uk/news/price-display-discrepancy-at-asada-store.php">

    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php include 'assets/include/header.php'; ?>
<main>


    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-10 mx-auto ">
                    <h1 class="main-heading text-center text-uppercase  mt-2">
                        Consumer Alerts and News
                    </h1>
                    <p class="text-md text-center">
                        Stay informed with the latest updates on UK consumer protection laws, scam alerts, product
                        recalls, and industry news to help safeguard your rights and make informed decisions.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-lg-5 pb-4 bg-light position-relative " style="z-index: 1;">
        <div class="container pb-5 ">
            <div class="row mb-lg-0 mb-4">
                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                                alt="Consumet Protection Bureau Uk Alert News about Asda Store " class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2>
                                Price Display Discrepancy at Asda Store
                            </h2>
                            <p class="text mb-0 pb-0">
                            <span>(24th November 2024)</span>  In an incident happened today at an Asda store in West Sussex, a vigilant consumer
                                successfully challenged misleading price labelling, highlighting the importance of
                                consumer awareness and advocacy. The case serves as a reminder that shoppers must remain
                                alert and prepared to assert their rights when faced with pricing discrepancies.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="price-display-discrepancy-at-asada-store.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/black-friday.webp"
                                alt="Consumet Protection Bureau Uk Alert News about Black Friday (29th Nov 24) /Cyber Monday(2nd Dec 24)  " class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span class="" style="opacity:0">Black Friday (29th Nov 24) </span> -->
                            <h2>
                            Avoid Overspending and Protect Yourself from Scams
                            </h2>
                            <p class="text mb-0 pb-0">
                            Black Friday (29th Nov 24) /Cyber Monday(2nd Dec 24) present a fantastic opportunity to
                            score big savings, but it’s
                            important to approach the sales with caution. With a little planning and awareness, you can
                            make wise purchases, avoid poor-quality products, and steer clear of fraud.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="black-friday-tips.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/service-charges.jpg"
                                alt="Learn about service charges in UK restaurants and your rights with updates from the Consumer Protection Bureau." class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span class="" style="opacity:0">Black Friday (29th Nov 24) </span> -->
                            <h2>
                            Service Charges in UK Restaurants
                            </h2>
                            <p class="text mb-0 pb-0">
                            Service charges have become a standard feature of dining out in the UK, but many customers remain unclear about their legal obligations when it comes to paying them. Are they compulsory? And what happens if they are not clearly stated on the menu or on display?


                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="service-charges-in-uk-resturants.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                         
                                <img src="../assets/images/news/Hanover Square in JVC dubai.jpg"
                                    alt="Consumet Protection Bureau Uk Alert News about ADGM Fines Wazim Nazir Following Consumer Protection Bureau's Intervention "
                                  >
                            </div>
                        <div class="news-card-text">
                            <!-- <span class="" style="opacity:0">Black Friday (29th Nov 24) </span> -->
                            <h2>
                            ADGM Fines Wazim Nazir, Owner of ACW Following Consumer Protection Bureau's Intervention
                            </h2>
                            <p class="text mb-0 pb-0">
                            In a significant victory for consumer protection and regulatory integrity, the Abu Dhabi Global Market (ADGM) Registration Authority has imposed financial penalties on HSQ Holdings Ltd, PL1 Holdings Ltd, and their director, Mohammed Wazim Nazir, for egregious breaches of regulatory compliance.

                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="adgm-fines-wazim-nazir-following-consumer-protection-bureau-intervention.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                         
                                <img src="../assets/images/news/holiday-tips1.jpg"
                                    alt="Festive shopping tips with a budget checklist and gift items on a table. "
                                  >
                            </div>
                        <div class="news-card-text">
                            <!-- <span class="" style="opacity:0">Black Friday (29th Nov 24) </span> -->
                            <h2>
                            CPB Advice for a Safe and Smart Festive Season
                            </h2>
                            <p class="text mb-0 pb-0">
                            At the Consumer Protection Bureau (CPB), we want to ensure your festive season is filled
                            with joy, not financial stress or disappointment. Christmas and New Year sales are a great
                            opportunity for deals, but they also come with risks like overspending and scams. Follow our
                            practical advice to shop smart, protect your money from scams, and enjoy a stress-free
                            holiday season.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="cpb-advice-for-safe-and-smart-festive-season.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

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
                    <a href="https://www.compliance-experts.co.uk/" target="_blank"
                        class="text-decoration-none text-dark">
                        <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                            <img src="../assets/images/CRC-logo.png" alt="CRC logo" style="width:130px; height:auto;">
                            <h1 class="mt-4 text-center text-md" style=" font-weight:500;">Compilance and Risk
                                Consultancy</h1>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="https://carehomecompliance.com/" target="_blank" class="text-decoration-none text-dark">
                        <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                            <img src="../assets/images/Care Home Compilance.png" alt="CHC logo"
                                style="width:100px; height:auto;">
                            <h1 class="mt-4 text-center text-md" style=" font-weight:500;">Care Home Compilance</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<!-- 
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
                                    <div class="g-recaptcha" data-sitekey="6LeWW5YqAAAAAO7CXW7SvpYQih0o9w_XaILDCy3j"></div>

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