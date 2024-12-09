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
    <title>Shopping Tips for Black Friday  / Cyber Monday - Consumer Alert News - (CPB)</title>
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
        href="https://www.consumerprotectionbureau.co.uk/news/black-friday-tips.php">
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
                <div class="col-lg-10 mx-auto news-wrapper p-0 bg-gold">
                    <img src="../assets/images/news/shopping-tips-black-friday.png"
                        alt="Black Friday & Cyber Monday - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            Smart Shopping Tips for <span class="text-alert"> Black Friday & Cyber Monday </span>

                        </h1>
                        <h2 class="subtitle-bullet">Avoid Overspending and Protect Yourself from Scams</h2>
                        <p class="text">
                            Black Friday (29th Nov 24) /Cyber Monday(2nd Dec 24) present a fantastic opportunity to
                            score big savings, but it’s
                            important to approach the sales with caution. With a little planning and awareness, you can
                            make wise purchases, avoid poor-quality products, and steer clear of fraud.
                        </p>
                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->
                        <div class="row mt-4 mb-4">

                            <div class="col-lg-4 bg-primary text-white order-lg-1 order-2">
                                <h3 class="text-md text-bold mt-3 text-inform">Consumer Rights
                                </h3>
                                <p class="text2 mb-0">
                                    At the <b>Consumer Protection Bureau</b>, we believe that informed consumers are
                                    empowered consumers. Understanding your rights and responsibilities is key to making
                                    confident purchasing decisions and resolving any issues that arise.


                                </p>
                                <ul>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            <b>Safety:</b> Buy products that are safe and meet quality standards.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            <b>Information:</b> Access clear and accurate details about products and
                                            services.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            <b> Choice:</b> Enjoy a variety of options at fair prices.

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            <b>Redress:</b> Request repair, replacement, or refunds for defective items.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            <b>Education:</b> Learn about your rights to make informed decisions.

                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-0 pb-0">
                                            <b>Be Heard:</b> Raise concerns and have them addressed fairly.
                                        </p>
                                    </li>
                                </ul>

                                <h3 class="text-md text-bold mt-3 text-inform"> How CPB Can Help with Consumer Rights

                                </h3>
                                <p class="text2 mb-1 pb-0">
                                    At the Consumer Protection Bureau, we are dedicated to protecting and empowering
                                    you:

                                </p>
                                <ol>


                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b> Educate You:</b> Provide resources on your rights and smart shopping
                                            tips.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b>Resolve Complaints:</b> Help settle disputes with sellers or service
                                            providers.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b>Legal Support:</b> Offer guidance on legal options for serious issues.


                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b> Raise Awareness:</b> Keep you updated on scams and new consumer
                                            protections.


                                        </p>
                                    </li>
                                    <li>
                                        <p class="text2 mb-1 pb-0">
                                            <b>Assist with Refunds: </b>Support you in securing returns, refunds, or
                                            compensation.






                                        </p>
                                    </li>
                                </ol>

                                <div class="text-center py-3 pb-4">
                                    <a href="../contact.php" class="main-btn">Contact CPB</a>
                                </div>

                            </div>

                            <div class="col-lg-8 order-lg-2 order-1">
                                <div class="">
                                    <p class="text-lg mb-0 pb-0" style="line-height:30px !important"><b>Essential
                                            Shopping Tips to Keep You Safe and Smart This Black Friday & Cyber
                                            Monday</b></p>
                                </div>
                                <ul class="list-unstyled mt-4 shopping-tips">
                                    <li><span class="text-md text-bold text-primary w-700">1. Set a Budget and Stick to
                                            It:</span>
                                        <ul class="">
                                            <li class="text2">Decide on a maximum spending limit before shopping.</li>
                                            <li class="text2">Focus on items you genuinely need or have been planning to
                                                purchase.</li>
                                            <li class="text2">Avoid impulse buying by comparing deals with your planned
                                                list.</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">2. Research Prices to Spot
                                            Genuine
                                            Deals:</span>
                                        <ul>
                                            <li class="text2">Use price comparison tools or apps to verify discounts.
                                            </li>
                                            <li class="text2">Look out for inflated original prices and misleading
                                                “deals.”</li>
                                            <li class="text2">Monitor product prices before the sale period to identify
                                                true savings.</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">3. Prioritise Quality Over
                                            Discounts:</span>
                                        <ul>
                                            <li class="text2">A low price doesn’t always mean good value.</li>
                                            <li class="text2">Read product reviews, check ratings, and assess brand
                                                reputations.</li>
                                            <li class="text2">Avoid buying items solely because they’re discounted.</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">4. Be Cautious About Faulty
                                            or
                                            Low-Quality Products:</span>
                                        <ul>
                                            <li class="text2">Watch out for sellers who offload defective or refurbished
                                                items.</li>
                                            <li class="text2">Check for a valid manufacturer warranty.</li>
                                            <li class="text2">Confirm the store’s return and refund policies.</li>
                                            <li class="text2">Review the product condition carefully (new vs.
                                                refurbished).</li>
                                            <li class="text2">Read genuine customer reviews on third-party platforms.
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">5. Beware of Flash Sales and
                                            Deceptive Tactics:</span>
                                        <ul>
                                            <li class="text2">Flash sales can create a sense of urgency—don’t rush.</li>
                                            <li class="text2">Evaluate if the deal is genuine. If it feels “too good to
                                                be true,” it likely is.</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">6. Inspect Products Before
                                            Buying
                                            (In-Store & Online):</span>
                                        <ul>
                                            <li class="text2">Examine physical items for damage or defects.</li>
                                            <li class="text2">Understand the store’s return and exchange policies for
                                                online purchases.</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">7. Factor in Hidden
                                            Costs:</span>
                                        <ul>
                                            <li class="text2">Be mindful of additional fees like shipping or handling
                                                charges.</li>
                                            <li class="text2">Calculate the total cost before completing your purchase.
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">8. Resist the Pressure to
                                            Rush:</span>
                                        <ul>
                                            <li class="text2">Take time to assess the deal and its value.</li>
                                            <li class="text2">A better offer might be available later in the sale
                                                period.</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">9. Understand Return and
                                            Refund
                                            Policies:</span>
                                        <ul>
                                            <li class="text2">Always review return policies, especially for discounted
                                                items.</li>
                                            <li class="text2">Reliable retailers should offer a clear and fair return
                                                process.</li>
                                        </ul>
                                    </li>
                                    <li><span class="text-md text-bold text-primary w-700">10. Protect Yourself from
                                            Scams:</span>
                                        <ul>
                                            <li class="text2">Shop only on secure websites (look for “https” and the
                                                padlock icon).</li>
                                            <li class="text2">Avoid clicking on links from unsolicited emails or unknown
                                                retailers.</li>
                                            <li class="text2">Trust your instincts: if an offer seems suspicious, it’s
                                                best to skip it.</li>
                                        </ul>
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