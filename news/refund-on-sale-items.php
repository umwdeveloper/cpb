<!-- <?php

include_once "./includes/mail.php";

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

?> -->
<!doctype html>
<html lang="en">

<head>
    <title>Refund on Salde Items - Consumer Alert News - (CPB)</title>
    <meta name="description"
        content="Learn about service charges in UK restaurants and your rights with updates from the Consumer Protection Bureau.">
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/news/refund-on-sale-items.php">
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
                <div class="col-lg-10 mx-auto news-wrapper p-0 " style="background:#E3F2FD">
                    <img src="../assets/images/news/refund-on-sale-items.png"
                        alt="Black Friday & Cyber Monday - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            Refunds on Sale Items: <br class="d-lg-block d-none"> <span class="text-alert">Know Your
                                Rights</span>
                        </h1>

                        <p class="text">
                            Shopping during a sale can be exciting, with retailers offering various discounts. However,
                            many consumers are unsure about their rights when it comes to returning sale items. A common
                            myth is that discounted items cannot be refunded—but is that really true? Let’s break down
                            what the law says about refunds on sale items in the UK.
                        </p>
                        <h2 class="subtitle-bullet">Do You Have the Right to a Refund on Sale Items?</h2>
                        <p class="text">
                            Yes, in certain circumstances. The <b>Consumer Rights Act 2015</b> protects UK consumers,
                            ensuring that the products they buy are:
                        </p>
                        <ul>
                            <li>
                                Of satisfactory quality
                            </li>
                            <li>
                                Fit for purpose
                            </li>
                            <li>
                                As described
                            </li>
                        </ul>
                        <p class="text">
                            If a sale item is <b>faulty, not as described, or unfit</b> for purpose, you have the same
                            rights as you would with a
                            full-price item. The retailer is legally required to offer a <b>refund, repair, or
                                replacement</b>. The discount or sale does not affect these rights.
                        </p>


                        <img src="../assets/images/news/refund.jpg"
                            alt="Consumer Protection Bureau uk Advices for Resturent UNjustified Service Charges"
                            class="w-100 h-auto">

                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-5 bg-primary text-white order-lg-1 order-2">
                                <h3 class="text-md text-bold mt-3 text-inform">
                                    How the Consumer Protection Bureau Can Help
                                </h3>
                                <p class="text2 mb-0">
                                    At the <b>Consumer Protection Bureau (CPB)</b>, we ensure that businesses comply
                                    with UK consumer laws and that consumers are treated fairly. If a retailer refuses
                                    to refund a faulty sale item, we can help by:
                                </p>
                                <ul class="text2">
                                    <li><strong>Explaining your legal rights</strong> clearly.</li>
                                    <li><strong>Providing complaint letter templates </strong> to communicate with
                                        retailers.</li>
                                    <li>
                                        <strong>Advising on escalation steps,</strong>including Trading Standards
                                        involvement.
                                    </li>
                                    <li>
                                        <strong>Supporting you through the dispute process</strong>to ensure fair
                                        treatment.
                                    </li>
                                </ul>
                                <h3 class="text2 text-bold mt-3 text-inform">Final Thoughts</h3>
                                <p class="text2">
                                    A discount should never mean compromising your consumer rights.
                                    Whether an item is full-price or on sale, retailers
                                    must provide goods that meet <b>legal standards</b>.
                                    If a retailer refuses a refund unfairly, stand your ground and assert your rights.

                                    For more help with a refund dispute, visit <a class="text-inform"
                                        href="www.consumerprotectionbureau.co.uk">www.consumerprotectionbureau.co.uk</a>.
                                </p>

                                <h3 class="text2 text-bold mt-3 text-inform">Contact Us</h3>
                                <p class="text2">If you’ve questions about
                                    your rights, reach out to us:</p>
                                <ul class="text2 ps-0 ms-0">
                                    <li>+44 (0)2035854002</li>
                                    <li><a href="mailto:info@consumerprotectionbureau.co.uk"
                                            class="text-whit">info@consumerprotectionbureau.co.uk</a></li>

                                </ul>




                                <div class="text-center py-3 pb-4">
                                    <a href="../contact.php" class="main-btn">Contact CPB</a>
                                </div>

                            </div>

                            <div class="col-lg-7 order-lg-2 order-1">
                                <!-- <div class="">
                                    <p class="text-lg mb-0 pb-0" style="line-height:30px !important"><b>Essential
                                            Shopping Tips to Keep You Safe and Smart This Black Friday & Cyber
                                            Monday</b></p>
                                </div> -->

                                <h3 class="text-md text-bold text-primary w-700">
                                    When Can a Retailer Refuse a Refund?
                                </h3>
                                <p class="text">
                                    While you have strong consumer rights, there are times when a retailer can legally
                                    refuse a refund:
                                </p>
                                <ul>
                                    <li>
                                        <strong>
                                            Change of Mind:
                                        </strong>
                                        If you simply decide you don’t want the item, the retailer is not required to
                                        offer a refund—unless their return policy allows it.
                                    </li>
                                    <li>
                                        <strong>
                                            Known Faults:
                                        </strong>
                                        If the item was discounted due to a known defect, and this was clearly stated at
                                        the time of purchase, you cannot claim a refund for that specific issue.
                                    </li>
                                </ul>
                                <h3 class="text-md text-bold text-primary w-700">
                                    What to Do If a Retailer Refuses a Refund
                                </h3>
                                <p class="text">
                                    If a retailer wrongly refuses a refund for a faulty sale item, take these steps:
                                </p>
                                <ul>
                                    <li>
                                        <strong> Know Your Rights</strong> – Politely refer to the <b>Consumer Rights
                                            Act 2015</b> and explain why you are entitled to a refund.
                                    </li>
                                    <li>
                                        <strong>Provide Proof of Purchase </strong> A <b>receipt or bank statement</b>
                                        serves as valid evidence of purchase.
                                    </li>
                                    <li>
                                        <strong>Escalate the Complaint</strong>Ask to speak to a <b>manager</b> if the
                                        store refuses to comply.
                                    </li>
                                    <li>
                                        <strong>Seek Support</strong>If needed, organisations like the <b>Consumer
                                            Protection Bureau (CPB)</b> can help you challenge unfair retail policies.
                                    </li>
                                </ul>

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