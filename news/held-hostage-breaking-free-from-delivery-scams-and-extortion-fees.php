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
    <title>Breaking Free From
        Delivery Scams and Extortion Fees - Consumer Alert News - (CPB)</title>
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
                    <img src="../assets/images/news/stop-delivery-scams.png"
                        alt="Black Friday & Cyber Monday - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            HELD HOSTAGE: <br class="d-lg-block d-none"> <span class="text-alert">Breaking Free From
                                Delivery Scams and Extortion Fees</span>
                        </h1>
                        <h2 class="subtitle-bullet">The Growing Concern of Delivery Scams</h2>
                        <p class="text w-500">
                            Imagine tracking your parcel, only to find it's suddenly stopped overseas. Then you receive
                            an unexpected call demanding a large sum of money to release it — often with no official
                            explanation or documentation. This distressing scenario is becoming increasingly common for
                            consumers worldwide.
                        </p>

                        <p class="text">
                            At the Consumer Protection Bureau (CPB), we have observed a troubling rise in complaints
                            about delivery-related scams and unfair practices. Recently, we assisted a consumer whose
                            shipment was allegedly held at an airport, with unidentified individuals demanding £5,500
                            for "tariffs" — without providing any paperwork or legitimate proof.
                        </p>

                        <img src="../assets/images/news/hidden-fee.jpg" alt="" class="w-100 h-auto">
                        <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                            Common Delivery Issues You Should Be Aware Of
                        </h3>
                        <p class="text">
                            Whether you are ordering goods online or shipping belongings internationally, you might
                            encounter these problematic practices:
                        </p>
                        <p class="text  mb-0">
                            <b> Unfair Tactics On The Rise</b>
                        </p>
                        <ul>
                            <li><strong>Surprise charges after dispatch:</strong> Companies or scammers introducing fees
                                that were not disclosed at purchase</li>
                            <li><strong>Fabricated customs or tariff demands:</strong> False claims about regulatory
                                fees, often requested through unofficial channels</li>
                            <li><strong>Package retention without justification:</strong> Deliveries inexplicably
                                delayed or held hostage until additional payments are made</li>
                            <li><strong>Communication blackouts:</strong> Sudden lack of response when you attempt to
                                inquire about unexpected issues</li>
                            <li><strong>Pressure tactics from unknown "agents":</strong> Urgent calls or messages from
                                individuals claiming to represent delivery services</li>
                        </ul>

                        <p class="text">
                            What makes these practices particularly concerning is that they often target consumers at
                            their most vulnerable—when they're eagerly awaiting important packages and may feel
                            pressured to comply with demands to avoid further delays.
                        </p>




                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-5 bg-primary text-white order-lg-1 order-3">
                                <h3 class="text-md text-bold mt-3 text-inform">
                                    How the Consumer Protection Bureau Can Help
                                </h3>
                                <p class="text2 mb-0">
                                    At the Consumer Protection Bureau, we consistently help consumers meeting these
                                    challenging situations on daily basis. Our support includes:
                                </p>
                                <ul class="text2">
                                    <li><strong>Case assessment and evaluation</strong> to understand the legitimacy of
                                        demands</li>
                                    <li><strong>Direct intervention</strong> on your behalf</li>
                                    <li><strong>Strategic advice</strong> on appropriate response measures</li>
                                    <li><strong>Assistance</strong> with refund claims and dispute resolution</li>
                                    <li><strong>Connection</strong> with relevant authorities when fraud is suspected
                                    </li>
                                </ul>
                                <p class="text2">
                                    Our services operate on a small annual membership fee, providing you with ongoing
                                    consumer protection support and peace of mind when dealing with international
                                    deliveries and online purchases.
                                </p>


                                <h3 class="text2 text-bold mt-3 text-inform">Protecting Yourself: Essential Steps</h3>
                                <p class="text2">
                                    If you find yourself facing suspicious delivery demands or unexpected fees, follow
                                    these crucial steps:
                                </p>
                                <ol class="text2">
                                    <li><strong>Never make immediate payments</strong> without receiving formal written
                                        documentation</li>
                                    <li><strong>Document all communication</strong> including names, times, and contact
                                        information</li>
                                    <li><strong>Verify tracking information</strong> only through official channels such
                                        as the courier's legitimate website</li>
                                    <li><strong>Contact CPB</strong> for guidance before responding to unexpected
                                        demands</li>
                                    <li><strong>Report suspicious activity</strong> to Action Fraud (0300 123 2040) and
                                        relevant authorities</li>
                                </ol>
                                <h3 class="text2 text-bold mt-3 text-inform">When to Be Especially Vigilant</h3>
                                <p class="text2">
                                    Be particularly cautious when:
                                </p>
                                <ul class="text2">
                                    <li>The communication comes from an unfamiliar phone number or email address</li>
                                    <li>There is pressure to pay immediately or face severe consequences</li>
                                    <li>You are directed to make payments through unconventional methods (bank
                                        transfers, gift cards, etc.)</li>
                                    <li>The amount requested seems disproportionate to the value of your shipment</li>
                                    <li>Documentation provided contains grammatical errors or appears unprofessional
                                    </li>
                                </ul>



                            </div>

                            <div class="col-lg-7 order-lg-2 order-1">
                                <!-- <div class="">
                                    <p class="text-lg mb-0 pb-0" style="line-height:30px !important"><b>Essential
                                            Shopping Tips to Keep You Safe and Smart This Black Friday & Cyber
                                            Monday</b></p>
                                </div> -->

                                <h3 class="text-md text-bold text-primary w-700">
                                    Know Your Rights as a Consumer
                                </h3>
                                <p class="text">
                                    If you are based in the UK, your consumer rights are protected under several
                                    important pieces of legislation, including the Consumer Rights Act 2015. These laws
                                    ensure that you are entitled to:
                                </p>
                                <ul>
                                    <li><strong>Transparent pricing information</strong> before completing any purchase
                                    </li>
                                    <li><strong>Protection from unfair contract terms</strong> and hidden fees that were
                                        not clearly disclosed</li>
                                    <li><strong>The right to challenge or cancel transactions</strong> where terms were
                                        not properly communicated</li>
                                    <li><strong>Recourse</strong> when dealing with poor or fraudulent delivery services
                                    </li>
                                </ul>
                                <p class="text">
                                    <b>The law is clear:</b> no company or third party should demand additional payments
                                    without proper documentation or legitimate legal justification. When they do, they
                                    are likely violating consumer protection regulations.
                                </p>
                                <div class="text shadow-sm rounded-2  p-3 border"
                                    style="background-color:#FEE8CF !important;">
                                    <h3 class="text-md-l text-bold text-primary w-700">
                                        Real-Life Impact: Kery T’s Story
                                    </h3>
                                    <p class="text">
                                        <i>
                                            "I was trying to get in touch with someone about my belongings that were
                                            being shipped through Delivery Express World. I had been tracking my package
                                            when it suddenly stopped moving. Then I received a call from a man claiming
                                            that the shipment was being held at Romania Airport. He said I needed to pay
                                            £5,500 to have it returned to the delivery company. When I refused, he told
                                            me it had to do with tariffs. I found the whole situation completely
                                            outrageous."
                                        </i>
                                        <br> <b>— Kery L.</b>
                                    </p>

                                    <p class="text">
                                        Kery did the right thing by not paying the amount immediately. With no
                                        documentation or verification, the demand raised serious red flags. Cases like
                                        this highlight how delivery scams can be both financially and emotionally
                                        distressing — especially when consumers feel powerless or unsure of their legal
                                        standing.
                                    </p>

                                </div>
                                <h3 class="text-md text-bold text-primary w-700 mt-3">
                                    Take Action to Protect Your Rights
                                </h3>
                                <p class="text">
                                    When your delivery experience turns stressful or suspicious, remember that you don't
                                    have to face the problem alone. These situations can be frustrating and confusing,
                                    but with proper support and knowledge of your rights, you can effectively respond.
                                </p>


                            </div>

                            <div class="col-lg-12 order-lg-3 order-2">
                                <p class="text mt-3">
                                    <b>Consumer Protection Bureau</b> stands ready to advocate for your consumer rights,
                                    hold companies accountable for unfair practices, and ensure your concerns receive
                                    the attention they deserve.
                                </p>
                                <p class="text">
                                    If you are currently experiencing delivery issues or have questions about your
                                    rights,
                                </p>
                                <h3 class="text-md text-bold text-primary w-700">Contact Us</h3>
                                <p class="text">If you’ve questions about
                                    your rights, reach out to us:</p>
                                <ul class="text ps-0 ms-0">
                                    <li>+44 (0)2035854002</li>
                                    <li><a href="mailto:info@consumerprotectionbureau.co.uk"
                                            class="text-whit">info@consumerprotectionbureau.co.uk</a></li>

                                </ul>


                                <p class="text">
                                    The Consumer Protection Bureau is engaged to safeguarding consumer rights and
                                    promoting fair business practices. Our expert advisors are here to help you with any
                                    complex consumer issues and find effective resolutions.
                                </p>

                                <div class="text-center py-3 pb-4">
                                    <a href="../contact.php" class="main-btn">Contact CPB</a>
                                </div>
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
    <title>Breaking Free From
        Delivery Scams and Extortion Fees - Consumer Alert News - (CPB)</title>
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
                    <img src="../assets/images/news/stop-delivery-scams.png"
                        alt="Black Friday & Cyber Monday - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            HELD HOSTAGE: <br class="d-lg-block d-none"> <span class="text-alert">Breaking Free From
                                Delivery Scams and Extortion Fees</span>
                        </h1>
                        <h2 class="subtitle-bullet">The Growing Concern of Delivery Scams</h2>
                        <p class="text w-500">
                            Imagine tracking your parcel, only to find it's suddenly stopped overseas. Then you receive
                            an unexpected call demanding a large sum of money to release it — often with no official
                            explanation or documentation. This distressing scenario is becoming increasingly common for
                            consumers worldwide.
                        </p>

                        <p class="text">
                            At the Consumer Protection Bureau (CPB), we have observed a troubling rise in complaints
                            about delivery-related scams and unfair practices. Recently, we assisted a consumer whose
                            shipment was allegedly held at an airport, with unidentified individuals demanding £5,500
                            for "tariffs" — without providing any paperwork or legitimate proof.
                        </p>

                        <img src="../assets/images/news/hidden-fee.jpg" alt="" class="w-100 h-auto">
                        <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                            Common Delivery Issues You Should Be Aware Of
                        </h3>
                        <p class="text">
                            Whether you are ordering goods online or shipping belongings internationally, you might
                            encounter these problematic practices:
                        </p>
                        <p class="text  mb-0">
                            <b> Unfair Tactics On The Rise</b>
                        </p>
                        <ul>
                            <li><strong>Surprise charges after dispatch:</strong> Companies or scammers introducing fees
                                that were not disclosed at purchase</li>
                            <li><strong>Fabricated customs or tariff demands:</strong> False claims about regulatory
                                fees, often requested through unofficial channels</li>
                            <li><strong>Package retention without justification:</strong> Deliveries inexplicably
                                delayed or held hostage until additional payments are made</li>
                            <li><strong>Communication blackouts:</strong> Sudden lack of response when you attempt to
                                inquire about unexpected issues</li>
                            <li><strong>Pressure tactics from unknown "agents":</strong> Urgent calls or messages from
                                individuals claiming to represent delivery services</li>
                        </ul>

                        <p class="text">
                            What makes these practices particularly concerning is that they often target consumers at
                            their most vulnerable—when they're eagerly awaiting important packages and may feel
                            pressured to comply with demands to avoid further delays.
                        </p>




                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-5 bg-primary text-white order-lg-1 order-3">
                                <h3 class="text-md text-bold mt-3 text-inform">
                                    How the Consumer Protection Bureau Can Help
                                </h3>
                                <p class="text2 mb-0">
                                    At the Consumer Protection Bureau, we consistently help consumers meeting these
                                    challenging situations on daily basis. Our support includes:
                                </p>
                                <ul class="text2">
                                    <li><strong>Case assessment and evaluation</strong> to understand the legitimacy of
                                        demands</li>
                                    <li><strong>Direct intervention</strong> on your behalf</li>
                                    <li><strong>Strategic advice</strong> on appropriate response measures</li>
                                    <li><strong>Assistance</strong> with refund claims and dispute resolution</li>
                                    <li><strong>Connection</strong> with relevant authorities when fraud is suspected
                                    </li>
                                </ul>
                                <p class="text2">
                                    Our services operate on a small annual membership fee, providing you with ongoing
                                    consumer protection support and peace of mind when dealing with international
                                    deliveries and online purchases.
                                </p>


                                <h3 class="text2 text-bold mt-3 text-inform">Protecting Yourself: Essential Steps</h3>
                                <p class="text2">
                                    If you find yourself facing suspicious delivery demands or unexpected fees, follow
                                    these crucial steps:
                                </p>
                                <ol class="text2">
                                    <li><strong>Never make immediate payments</strong> without receiving formal written
                                        documentation</li>
                                    <li><strong>Document all communication</strong> including names, times, and contact
                                        information</li>
                                    <li><strong>Verify tracking information</strong> only through official channels such
                                        as the courier's legitimate website</li>
                                    <li><strong>Contact CPB</strong> for guidance before responding to unexpected
                                        demands</li>
                                    <li><strong>Report suspicious activity</strong> to Action Fraud (0300 123 2040) and
                                        relevant authorities</li>
                                </ol>
                                <h3 class="text2 text-bold mt-3 text-inform">When to Be Especially Vigilant</h3>
                                <p class="text2">
                                    Be particularly cautious when:
                                </p>
                                <ul class="text2">
                                    <li>The communication comes from an unfamiliar phone number or email address</li>
                                    <li>There is pressure to pay immediately or face severe consequences</li>
                                    <li>You are directed to make payments through unconventional methods (bank
                                        transfers, gift cards, etc.)</li>
                                    <li>The amount requested seems disproportionate to the value of your shipment</li>
                                    <li>Documentation provided contains grammatical errors or appears unprofessional
                                    </li>
                                </ul>



                            </div>

                            <div class="col-lg-7 order-lg-2 order-1">
                                <!-- <div class="">
                                    <p class="text-lg mb-0 pb-0" style="line-height:30px !important"><b>Essential
                                            Shopping Tips to Keep You Safe and Smart This Black Friday & Cyber
                                            Monday</b></p>
                                </div> -->

                                <h3 class="text-md text-bold text-primary w-700">
                                    Know Your Rights as a Consumer
                                </h3>
                                <p class="text">
                                    If you are based in the UK, your consumer rights are protected under several
                                    important pieces of legislation, including the Consumer Rights Act 2015. These laws
                                    ensure that you are entitled to:
                                </p>
                                <ul>
                                    <li><strong>Transparent pricing information</strong> before completing any purchase
                                    </li>
                                    <li><strong>Protection from unfair contract terms</strong> and hidden fees that were
                                        not clearly disclosed</li>
                                    <li><strong>The right to challenge or cancel transactions</strong> where terms were
                                        not properly communicated</li>
                                    <li><strong>Recourse</strong> when dealing with poor or fraudulent delivery services
                                    </li>
                                </ul>
                                <p class="text">
                                    <b>The law is clear:</b> no company or third party should demand additional payments
                                    without proper documentation or legitimate legal justification. When they do, they
                                    are likely violating consumer protection regulations.
                                </p>
                                <div class="text shadow-sm rounded-2  p-3 border"
                                    style="background-color:#FEE8CF !important;">
                                    <h3 class="text-md-l text-bold text-primary w-700">
                                        Real-Life Impact: Kery T’s Story
                                    </h3>
                                    <p class="text">
                                        <i>
                                            "I was trying to get in touch with someone about my belongings that were
                                            being shipped through Delivery Express World. I had been tracking my package
                                            when it suddenly stopped moving. Then I received a call from a man claiming
                                            that the shipment was being held at Romania Airport. He said I needed to pay
                                            £5,500 to have it returned to the delivery company. When I refused, he told
                                            me it had to do with tariffs. I found the whole situation completely
                                            outrageous."
                                        </i>
                                        <br> <b>— Kery L.</b>
                                    </p>

                                    <p class="text">
                                        Kery did the right thing by not paying the amount immediately. With no
                                        documentation or verification, the demand raised serious red flags. Cases like
                                        this highlight how delivery scams can be both financially and emotionally
                                        distressing — especially when consumers feel powerless or unsure of their legal
                                        standing.
                                    </p>

                                </div>
                                <h3 class="text-md text-bold text-primary w-700 mt-3">
                                    Take Action to Protect Your Rights
                                </h3>
                                <p class="text">
                                    When your delivery experience turns stressful or suspicious, remember that you don't
                                    have to face the problem alone. These situations can be frustrating and confusing,
                                    but with proper support and knowledge of your rights, you can effectively respond.
                                </p>


                            </div>

                            <div class="col-lg-12 order-lg-3 order-2">
                                <p class="text mt-3">
                                    <b>Consumer Protection Bureau</b> stands ready to advocate for your consumer rights,
                                    hold companies accountable for unfair practices, and ensure your concerns receive
                                    the attention they deserve.
                                </p>
                                <p class="text">
                                    If you are currently experiencing delivery issues or have questions about your
                                    rights,
                                </p>
                                <h3 class="text-md text-bold text-primary w-700">Contact Us</h3>
                                <p class="text">If you’ve questions about
                                    your rights, reach out to us:</p>
                                <ul class="text ps-0 ms-0">
                                    <li>+44 (0)2035854002</li>
                                    <li><a href="mailto:info@consumerprotectionbureau.co.uk"
                                            class="text-whit">info@consumerprotectionbureau.co.uk</a></li>

                                </ul>


                                <p class="text">
                                    The Consumer Protection Bureau is engaged to safeguarding consumer rights and
                                    promoting fair business practices. Our expert advisors are here to help you with any
                                    complex consumer issues and find effective resolutions.
                                </p>

                                <div class="text-center py-3 pb-4">
                                    <a href="../contact.php" class="main-btn">Contact CPB</a>
                                </div>
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