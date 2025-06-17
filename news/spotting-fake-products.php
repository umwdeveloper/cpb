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
    <title>Spotting Fake Products: A Consumer’s Guide</title>
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/news/service-charges-in-uk-resturants.php">
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
                    <img src="../assets/images/news/spotting-fake-products.png"
                        alt="Spotting Fake Products" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                        Fake or Real?
                            <br class="d-lg-block d-none"> <span class="text-alert"> The Truth Behind Counterfeit Products
                            </span>
                        </h1>


                        <h2 class="subtitle-bullet">Understanding the Growing Threat of Counterfeit Goods</h2>
                        <p class="text">
                            Counterfeit goods are a growing concern, deceiving consumers and harming legitimate
                            businesses. From electronics and designer clothing to cosmetics and pharmaceuticals, fake
                            products pose significant risks, including financial loss, health hazards, and compromised
                            safety. Identifying counterfeit goods is essential for protecting your consumer rights and
                            making informed purchasing decisions.
                        </p>



                        <img src="../assets/images/news/fake-products.png"
                            alt="Spottig Fake Products" class="w-100 h-auto">

                        <!-- <img src="../assets/images/news/service-charges.jpg"
                            alt="Consumer Protection Bureau uk Advices for Resturent UNjustified Service Charges"
                            class="w-100 h-auto"> -->

                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-12">
                                <h3 class="text-md text-bold text-primary w-700">
                                    How to Identify Fake Products
                                </h3>
                                <p class="text">
                                    Counterfeit goods often mimic genuine items, making detection challenging. However,
                                    by paying close attention to key details, you can reduce the risk of purchasing
                                    fakes.
                                </p>
                            </div>


                            <div class="col-lg-8 ">
                                <h3 class="text-md text-bold text-primary w-700">
                                    1. Examine the Packaging and Labels
                                </h3>
                                <ul>
                                    <li class="text">
                                        Look for <b> misspellings, poor-quality printing, or unusual font styles</b> on
                                        labels.
                                    </li>
                                    <li class="text">
                                        Genuine products typically feature <b>high-quality packaging</b> with clear
                                        branding and security seals.
                                    </li>
                                    <li class="text">
                                        Check barcodes and serial numbers—many brands provide <b>official verification
                                            tools</b> on their websites or apps.
                                    </li>
                                </ul>

                                <h3 class="text-md text-bold text-primary w-700">
                                    2. Inspect Product Quality
                                </h3>
                                <ul>
                                    <li class="text">
                                        Authentic products are made from <b>high-quality materials</b>, whereas
                                        counterfeits often feel lighter, flimsier, or poorly constructed.
                                    </li>
                                    <li class="text">
                                        Pay attention to <b>stitching, finishing, and overall craftsmanship</b>—uneven
                                        seams, loose threads, or peeling paint can be red flags.
                                    </li>
                                    <li class="text">
                                        When possible, compare the item to an <b>authentic version</b> for differences
                                        in design or material.
                                    </li>
                                </ul>

                                <h3 class="text-md text-bold text-primary w-700 mt-3">
                                    3. Analyse the Pricing
                                </h3>
                                <ul>
                                    <li class="text">If a deal seems too good to be true, it probably is—counterfeit
                                        goods are often sold at significantly lower prices than genuine products.</li>
                                    <li class="text">Compare prices across official brand stores and reputable retailers
                                        to spot discrepancies.</li>
                                </ul>

                                <h3 class="text-md text-bold text-primary w-700">
                                    4. Verify Seller Credibility
                                </h3>
                                <ul>
                                    <li class="text">Always buy from <b>authorised dealers, official brand websites, or
                                            well-known retailers.</b></li>
                                    <li class="text">Be extra cautious when purchasing from <b>online
                                            marketplaces—check</b> seller ratings, customer reviews, and return
                                        policies.</li>
                                    <li class="text">Avoid social media ads offering <b>luxury products at
                                            unrealistically low prices.</b></li>
                                </ul>
                           

                            </div>

                            <div class="col-lg-4 bg-primary text-white rounded-2">


                                <h3 class="text-md text-bold text-inform mt-3 ">
                                    How the Consumer Protection Bureau Can Help
                                </h3>
                                <p class="text2 mb-0">
                                    The <b>Consumer Protection Bureau (CPB)</b> is committed to safeguarding consumer
                                    rights and tackling counterfeit trade by:
                                </p>
                                <ul>
                                    <li>
                                        <p class="text2">
                                            Investigating counterfeit <b>product complaints.</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2">
                                            Providing <b>guidance on consumer rights and fraud prevention.</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2">
                                            Collaborating with <b> authorities to combat counterfeit markets.</b>
                                        </p>
                                    </li>

                                </ul>


                                <h3 class="text2 text-bold mt-3 text-inform">Need Assistance? Contact CPB</h3>
                                <p class="text2">
                                    If you have encountered counterfeit goods or need assistance understanding your
                                    consumer rights,
                                    contact us:
                                </p>
                                <ul class="text2 ps-0 ms-0 list-none">
                                    <li>📞 +44 (0)203 585 4002</li>
                                    <li><a href="mailto:info@consumerprotectionbureau.co.uk" class="text-white text-sm">📧info@consumerprotectionbureau.co.uk</a></li>

                                </ul>

                                <p class="text2">By staying informed and vigilant, you can protect yourself from
                                    counterfeit products and support genuine businesses. <b>Shop smart, stay safe, and
                                        defend your rights!</b>
                                </p>


                                <div class="text-center py-3 pb-4 mb-2">
                                    <a href="../contact.php" class="main-btn">Contact CPB</a>
                                </div>

                            </div>

                            <div class="col-lg-12">
                            <h3 class="text-md text-bold text-primary w-700">
                                    5. Check for Authenticity Features
                                </h3>
                                <p class="text mb-0">
                                    Many industries incorporate security measures to help consumers verify authenticity
                                </p>
                                <ul>
                                    <li class="text">
                                        <b>Electronics:</b> Genuine devices include serial numbers that can be
                                        verified on the manufacturer’s website. Fake chargers, batteries, or
                                        accessories may overheat, malfunction, or pose safety risks.
                                    </li>
                                    <li class="text">
                                        <b> Clothing & Accessories:</b> Designer brands often use RFID tags,
                                        holograms, and unique serial numbers. Compare logos, fabric quality, and
                                        stitching.
                                    </li>
                                    <li class="text">
                                        <b>Cosmetics & Perfumes:</b> Fake beauty products may contain harmful
                                        chemicals. Always check batch codes and packaging details on the
                                        manufacturer’s website.
                                    </li>
                                    <li class="text">
                                        <b> Pharmaceuticals:</b> Verify medicines through registered pharmacy
                                        databases or QR codes on packaging. Avoid purchasing medicines from
                                        unverified online sellers.
                                    </li>
                                </ul>
                                <div class="text shadow-sm rounded-2  p-3 border mb-4"
                                style="background-color:#FEE8CF !important;">
                                <h3 class="text-md text-bold text-primary w-700">
                                    Protecting Yourself from Counterfeit Goods
                                </h3>
                                <ul>
                                    <li class="text"><b>Use official verification tools</b> – Many brands offer mobile
                                        apps or online checks to confirm authenticity.</li>
                                    <li class="text"><b>Report counterfeit products</b> – If you come across fake goods,
                                        report them to consumer protection authorities such as the Consumer Protection
                                        Bureau (CPB).</li>
                                    <li class="text"><b>Be cautious when shopping online</b> – Stick to trusted
                                        platforms and avoid sellers with inconsistent information or vague return
                                        policies</li>
                                </ul>
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