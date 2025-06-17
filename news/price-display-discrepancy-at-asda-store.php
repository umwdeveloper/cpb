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
    <link href="https://fonts.googleapis.com/css2?family=Gidugu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="canonical"
        href="https://www.consumerprotectionbureau.co.uk/news/price-display-discrepancy-at-asada-store.php">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php include 'assets/include/header.php'; ?>
<main>

    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto news-wrapper p-0">
                    <img src="assets/images/consumer-protection-bureau-alert-news.png" alt="" class="w-100 h-auto">

                    <div class="px-lg-5 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            Price Display Discrepancy at <span class="text-alert"> Asda Store

                            </span>
                        </h1>
                        <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow ">
                        <div class="row mt-4 mb-4">

                            <div class="col-lg-4 bg-dark text-white order-lg-1 order-2">
                                <h3 class="text-md text-bold mt-4 text-inform">Consumer Rights and Responsibilities
                                </h3>
                                <p class="text2 mb-0">
                                    Under consumer protection laws, retailers must ensure price displays are clear,
                                    accurate, and
                                    not misleading. When discrepancies occur, consumers have the right to:
                                </p>
                                <ul>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Challenge incorrect pricing
                                        </p>
                                    </li>

                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Request verification of displayed prices

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Provide evidence (such as photographs) of displayed prices

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Escalate issues to store management

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Report persistent problems to consumer protection authorities

                                        </p>
                                    </li>

                                </ul>

                                <h3 class="text-md text-bold mt-3 text-inform">Key Takeaways

                                </h3>
                                <p class="text2 mb-1 pb-0">
                                    This case demonstrates several crucial points for consumers:
                                </p>
                                <ol>
                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b>Always check prices: </b>Compare displayed prices with those charged at
                                            checkout

                                        </p>
                                    </li>

                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b>Keep evidence:</b> When possible, photograph price displays if they seem
                                            unusually
                                            low or if you suspect potential issues


                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b> Stand firm:</b> Politely but firmly insist on your consumer rights

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b>Escalate when necessary: </b>Don't hesitate to request supervisor or
                                            manager
                                            intervention

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b> Report violations:</b> Document and report systematic pricing issues to
                                            relevant
                                            consumer protection organisations

                                        </p>
                                    </li>

                                </ol>
                                <h3 class="text-md text-bold mt-4 text-inform">Consumer Action Points </h3>
                                <p class="text2 mb-0 pb-0">
                                    If you encounter price discrepancies:
                                </p>
                                <ul>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Immediately bring it to the attention of store staff

                                        </p>
                                    </li>

                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Request verification of the displayed price


                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Document the discrepancy with photos if possible

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Ask to speak with a manager if initial attempts to resolve the issue are
                                            unsuccessful

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            Report significant or repeated violations to consumer protection authorities

                                        </p>
                                    </li>

                                </ul>

                            </div>

                            <div class="col-lg-8 order-lg-2 order-1">
                                <div class="">
                                    <p class="text-lg mb-0 pb-0" style="line-height:30px !important"><b>Consumer
                                            Watchdog- CPB Calls for Fair Treatment</b></p>
                                    <p class="text-sm text-gray text-secondry">Crawley 24th November 2024</p>
                                </div>
                                <h3 class="text-md text-bold  text-alert text-start">Standing Up for Consumer
                                    Rights: Misleading Pricing at Asda</h3>
                                <p class="text">
                                    In an incident happened today at an Asda store in West Sussex, a vigilant consumer
                                    successfully
                                    challenged misleading price labelling, highlighting the importance of consumer
                                    awareness and
                                    advocacy. The case serves as a reminder that shoppers must remain alert and prepared
                                    to assert
                                    their rights when faced with pricing discrepancies.
                                </p>
                                <div class="">
                                    <h3 class="text-md text-bold text-alert">The Incident</h3>
                                    <p class="text">
                                        A customer visiting the West Sussex Asda store selected pineapples clearly
                                        labelled at £0.99
                                        each (as shown on the photo below). However, upon reaching the checkout, they
                                        were charged £1.91
                                        per pineapple - nearly double the displayed price. When the customer questioned
                                        this
                                        discrepancy, the following events unfolded:
                                    </p>
                                    <ol>
                                        <li>
                                            <p class="text mb-0 pb-0">
                                                The customer immediately raised the issue with the cashier, citing the
                                                displayed price
                                            </p>
                                        </li>

                                        <li>
                                            <p class="text mb-0 pb-0">
                                                A supervisor was called to verify the customer's claim

                                            </p>
                                        </li>
                                        <li>
                                            <p class="text mb-0 pb-0">
                                                The supervisor confirmed the £0.99 price display

                                            </p>
                                        </li>
                                        <li>
                                            <p class="text mb-0 pb-0">
                                                Despite this confirmation, customer service initially refused to honour
                                                the displayed
                                                price

                                            </p>
                                        </li>
                                        <li>
                                            <p class="text mb-0 pb-0">
                                                Only after the customer identified themselves as a Consumer Protection
                                                Bureau (CPB)
                                                member and provided photographic evidence did management agree to honour
                                                the advertised
                                                price

                                            </p>
                                        </li>

                                    </ol>
                                </div>

                                <div class="">
                                    <h3 class="text-md text-bold text-alert">A Pattern of Concern</h3>
                                    <p class="text">
                                        This incident is particularly troubling as it appears to be part of a broader
                                        pattern. Similar
                                        pricing discrepancies have been reported at Asda stores previously, raising
                                        concerns about
                                        systematic issues in price display accuracy. Consumers who don't carefully check
                                        their receipts
                                        may unknowingly pay more than the advertised prices.
                                    </p>
                                </div>
                                <h3 class="text-md text-bold mt-4 text-alert">Moving Forward</h3>
                                <p class="text">
                                    The <b>Consumer Protection Bureau</b> continues to monitor such incidents and
                                    encourages consumers to
                                    report similar experiences. Remember: your vigilance not only protects your own
                                    rights but also
                                    helps maintain fair trading practices for all consumers.
                                </p>

                                <p class="text-md text-alert">
                                    Remember, an informed and assertive consumer is the best defence against unfair
                                    trading
                                    practices. Don't hesitate to stand up for your rights - they exist to protect you.
                                </p>
                                <p class="text2">
                                    This article was published by the Consumer Protection Bureau as part of our ongoing
                                    commitment
                                    to consumer advocacy and education.
                                </p>
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