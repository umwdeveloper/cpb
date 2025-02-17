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
    <title>A Growing Global Threat to Consumers and Businesses</title>
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
                    <img src="../assets/images/news/countryfeid-goods.png"
                        alt="Black Friday & Cyber Monday - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                        A Growing Global Threat to 
                        <br class="d-lg-block d-none"> <span class="text-alert">Consumers and Businesses</span>
                        </h1>


                        <h2 class="subtitle-bullet">Billions Lost Annually as Fake Products Flood the Market</h2>
                        <p class="text">
                        Counterfeit goods pose a serious threat to consumers, businesses, and economies
worldwide, with illicit trade accounting for an estimated 3.3% of global commerce.
According to the International Chamber of Commerce (ICC), counterfeiting costs the
global economy over £500 billion annually. From luxury handbags and
pharmaceuticals to electronics and automobile parts, counterfeit products deceive
consumers, violate intellectual property rights, and often fail to meet safety
standards.
                        </p>



                        <img src="../assets/images/news/Counterfeiting-Goods-Is-a-Serious-Crime.png"
                        alt="Uk Resturents Service Charges" class="w-100 h-auto">

                        <!-- <img src="../assets/images/news/service-charges.jpg"
                            alt="Consumer Protection Bureau uk Advices for Resturent UNjustified Service Charges"
                            class="w-100 h-auto"> -->

                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-4 bg-primary text-white order-lg-1 order-2">


                                <h3 class="text-md text-bold text-inform mt-3 ">
                                    How the Consumer Protection Bureau Can Help
                                </h3>
                                <p class="text2 mb-0">
                                    The <b>Consumer Protection Bureau (CPB)</b> plays a crucial role in protecting
                                    consumers
                                    from counterfeit goods. Through its services, CPB:
                                </p>
                                <ul>
                                    <li>
                                        <p class="text2">
                                            <b>Investigates Consumer Complaints:</b> If you have purchased a counterfeit
                                            product, CPB can investigate the matter and work to hold fraudulent sellers
                                            accountable.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2">
                                            <b> Provides Legal Assistance: </b>CPB helps consumers understand their
                                            rights under
                                            consumer protection laws and guides them on legal actions they can take.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2">
                                            <b> Raises Awareness:</b> CPB educates consumers about the risks of
                                            counterfeit
                                            goods and provides tips on how to identify fake products.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2">
                                            <b> Collaborates with Authorities: </b>By working with regulatory bodies and
                                            law
                                            enforcement, CPB assists in cracking down on counterfeit trade and ensuring
                                            safer
                                            markets.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2">
                                            <b> Supports Businesses:</b> CPB helps legitimate businesses protect their
                                            brands
                                            from counterfeit threats by providing guidance on intellectual property
                                            rights and
                                            reporting mechanisms.
                                        </p>
                                    </li>
                                </ul>


                                <h3 class="text2 text-bold mt-3 text-inform">Contact Us</h3>
                                <p class="text2">
                                    If you have encountered counterfeit goods or need assistance understanding your
                                    consumer rights,
                                    contact us:
                                </p>
                                <ul class="text2 ps-0 ms-0">
                                    <li>+44 (0)2035854002</li>
                                    <li><a href="mailto:info@consumerprotectionbureau.co.uk"
                                            class="text-whit">info@consumerprotectionbureau.co.uk</a></li>

                                </ul>

                                <p class="text2">At CPB, we are dedicated to protecting consumers from fraudulent
                                    products and ensuring a fair marketplace. Let us help you stay informed and
                                    safeguard your rights against counterfeit threats."
                                </p>


                                <div class="text-center py-3 pb-4">
                                    <a href="../contact.php" class="main-btn">Contact CPB</a>
                                </div>

                            </div>

                            <div class="col-lg-8 order-lg-2 order-1">
                                <h3 class="text-md text-bold text-primary w-700">
                                Consumers at Risk: Health Hazards, Financial Loss, and Data Theft
                                </h3>
                                <p class="text">
                                Fake products are not just about poor quality—they can be dangerous. Counterfeit
pharmaceuticals, cosmetics, and electrical goods often contain harmful substances
or faulty components, posing significant health and safety risks.
                                </p>
                                <p class="text">
                                Beyond physical harm, consumers also face financial losses. Counterfeit goods tend
to be of substandard quality, leading to quick deterioration and wasted money.
Additionally, counterfeit electronics and software can contain malware, exposing
users to data breaches and financial fraud.
                                </p>
                            
                           
                                <h3 class="text-md text-bold text-primary w-700 mt-3">
                                Businesses Under Siege: Lost Revenue and Brand Damage
                                </h3>
                                <p class="text">
                                Legitimate businesses suffer substantial losses due to counterfeit products flooding
the market. Fake goods divert revenue from authentic brands, weaken customer
trust, and tarnish reputations. Companies must also invest heavily in legal battles to
protect their intellectual property rights, increasing operational costs.
                                </p>
                              
                                <h3 class="text-md text-bold text-primary w-700">
                                Consumer Protection Laws: A Global Crackdown on Counterfeits
                                </h3>
                                <p class="text">
                                Governments worldwide have implemented strict regulations to combat counterfeit
trade, but enforcement remains challenging due to online sales and cross-border
smuggling. Key legal measures include:
                                </p>
                                <ul>
                                    <li>
                                        <p class="text">
                                      <b>  UK Consumer Protection from Unfair Trading Regulations 2008:</b> Prohibits
                                        misleading commercial practices, including counterfeit sales.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                        <b>US Stop Counterfeiting in Manufactured Goods Act:</b> Criminalises
                                        trafficking in counterfeit labels and packaging.
                                        </p>
                                    </li>
                                    <li>
                                   <b> EU Directive on Intellectual Property Rights Enforcement:</b> Strengthens
                                    measures to combat counterfeit production and sales.
                                    </li>
                                </ul>
                                <p class="text">
                                Despite these laws, counterfeiters continue to exploit loopholes, making consumer
                                awareness a crucial line of defence.
                                </p>
                                <h3 class="text-md text-bold text-primary w-700">
                                    How Consumers Can Protect Themselves
                                </h3>
                                <p class="text">
                                Experts advise consumers to take the following precautions to avoid falling victim to
                                counterfeit goods:
                                </p>
                                <ol>
                                    <li>
                                        <p class="text">
                                       <b> Buy from Trusted Retailers:</b> Purchase only from authorised sellers, official
                                        brand stores, and reputable online platforms.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                        <b>Verify Authenticity:</b> Check serial numbers, packaging details, and brand
                                        holograms.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                       <b> Beware of Unrealistically Low Prices:</b> If a deal seems too good to be true, it
                                        probably is.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                        <b>Report Suspected Counterfeits:</b> Notify consumer protection agencies or
                                        brand manufacturers.
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                              
                                <h3 class="text-md text-bold  text-primary w-700">
                                Consumer Protection Bureau: Fighting Back Against Counterfeits
                                    </h3>
                                    <p class="text">
                                    The Consumer Protection Bureau (CPB) is at the forefront of the fight against
                                    counterfeit goods, providing critical support to consumers and businesses. The CPB:
                                    </p>
                                    <ul>
                                        <li>
                                            <p class="text">
                                            Investigates consumer complaints and holds fraudulent sellers accountable.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                            Offers legal assistance to consumers navigating counterfeit-related disputes.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                            Educates the public about the dangers of counterfeit goods.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                            Collaborates with law enforcement and regulatory bodies to dismantle
                                            counterfeit networks.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                            Assists businesses in protecting their brands from intellectual property theft.
                                            </p>
                                        </li>
                                    </ul>
                                <div class="text shadow-sm rounded-2  p-3 border mb-4"
                                    style="background-color:#FEE8CF !important;">
                                    <h3 class="text-md text-bold  text-primary w-700">
                                    The Fight Against Counterfeits Continues
                                    </h3>
                                  <p class="text">
                                  As counterfeit goods continue to infiltrate global markets, consumer vigilance and
strict enforcement of anti-counterfeit laws remain essential. Strengthening consumer
protection measures and raising awareness are critical to ensuring a safer, more
transparent marketplace.

                                  </p>
<p class="text">
The <b>Consumer Protection Bureau</b> urges consumers and businesses to remain
alert, report counterfeit activity, and support efforts to eliminate fraudulent trade.
</p>
<p class="text">
For more information on counterfeit protection and consumer rights, visit
the <b>Consumer Protection Bureau </b> website:  <a href="https://www.consumerprotectionbureau.co.uk/" target="_blank">https://www.consumerprotectionbureau.co.uk/</a>
</p>
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