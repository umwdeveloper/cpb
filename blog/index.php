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
    <title>Blog - (CPB)</title>
    <meta name="description" content="">
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/blog/index.php">

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
                        Blog - Consumer Protection Bureau
                    </h1>
                    <p class="text-md text-center">
                        Welcome to the Consumer Protection Bureau's blog, where we share insights, updates, and
                        discussions on consumer rights, advocacy, and the latest developments in consumer protection.
                        Join us in our mission to empower consumers and promote fair practices across various sectors.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-lg-5 pb-4 bg-light position-relative " style="z-index: 1;">
        <div class="container pb-5 ">
            <div class="row mb-lg-0 mb-4 justify-content-center">
                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/blog/digital-card.png"
                                style="object-fit:contain; object-position:center;" alt="" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                The Dark Side of Digital Gift Card Marketplaces
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(25 NOV 2025)</span>
                                <b>LONDON </b> –
                                Digital gift cards have quietly become one of the fastest-growing online purchases in
                                the UK. But
                                beneath the glossy convenience lies an unregulated ecosystem. One where hundreds of
                                pounds can
                                disappear in seconds, with neither the seller nor the platform accepting responsibility.
                                A recent
                                case brought to the Consumer Protection Bureau (CPB) is a textbook example of what is
                                going wrong.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="
                           dark-side-of-digital-card-marketplace.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/blog/office-trap.png"
                                style="object-fit:contain; object-position:center;" alt="" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                Scrap the Drop-Off Charges: Ending the Hidden Airport Tax on Drivers
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(12 NOV 2025)</span>
                                <b>LONDON </b> –
                                In recent months, CPB has received reports from small and medium-sized enterprises
                                (SMEs) describing aggressive and unjustified demands from IW Group Services (UK) Ltd
                                (trading as Regus), a global provider of flexible workspace solutions.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="
                           flexible-offices-financial-traps-regus.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/blog/Fair-Travel.png"
                                style="object-fit:contain; object-position:center;" alt="" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                Scrap the Drop-Off Charges: Ending the Hidden Airport Tax on Drivers
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(30 OCT 2025)</span>
                                <b>LONDON </b> –
                                British travellers are being unfairly penalised by airport "drop-off charges", a
                                practice
                                that amounts to double taxation on consumers and exposes deep flaws in the way motorists
                                are treated at UK airports. The Consumer Protection Bureau (CPB) is calling for an
                                immediate end to these unjust charges, which punish both drivers and passengers simply
                                for reaching the terminal.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="
                           airport-drop-off-fees-double-taxation-cpb.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/blog/The Heathrow ‘Drop-Off.png"
                                style="object-fit:contain; object-position:center;" alt="" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                The Heathrow "Drop-Off" Deception
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(8 OCT 2025)</span>
                                <b>LONDON </b> –
                                When Heathrow Airport and APCOA Parking rolled out their £6 Drop-Off Zone charge, it was
                                promoted as a simple, eco-friendly measure to ease congestion. In reality, many drivers
                                are finding it's anything but simple and in some cases, they are being charged twice for
                                a single visit.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="
                            apcoa-heathrow-drop-off-toll-trap.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/cpb-vs-expedia.png"
                                style="object-fit:contain; object-position:center;"
                                alt="CPB calls out Expedia for failing to protect customers from fraud" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                CPB Calls Out Expedia Failings
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(18 August 2025)</span>
                                <b>LONDON </b> –
                                A CPB member and his family endured unnecessary stress, contradictory communications,
                                and weeks of frustration after two separate car rental bookings through Expedia in
                                Bergamo, Italy went badly wrong.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="CPB-calls-out-Expedia-failing.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/apple-under-file.png"
                                style="object-fit:contain; object-position:center;" alt="join cpb  For Just £5 a Month!"
                                class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                Cracks in the Apple: iCloud, Repairs, and Consumer Rights
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(19 August 2025)</span>
                                <b>LONDON </b> –
                                Apple’s dominance in the tech market has once again come under fire. Consumer group
                                Which? has already launched a landmark £3 billion collective action in the UK over
                                alleged iCloud overcharging. Building on this wider scrutiny, the Consumer Protection
                                Bureau (CPB) has now launched its own campaign, focusing on Apple’s restrictive and
                                overpriced repair policies, further highlighting systemic issues with the company’s
                                treatment of consumers.


                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="apple-uk-icloud-overcharge-right-to-repair-cpb.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/blog/trustpilot-complaints.png"
                                style="object-fit:contain; object-position:center;" alt="join cpb  For Just £5 a Month!"
                                class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                CPB Seeks Legal Action
                                Over Unfair Review Removals
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(13 August 2025)</span>
                                <b>LONDON </b> –
                                The Government’s decision to scrap Ofwat and replace it with a single, integrated water
                                regulator is not just welcome, it’s long overdue. For too long, water regulation in
                                England and Wales has suffered from fragmentation, toothless oversight, and a disjointed
                                approach that left consumers footing the bill while water companies polluted rivers and
                                raked in profits.


                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="trustpilot-complaints-cpb-legal-action.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/Landmark Car Finance.png"
                                style="object-fit:contain; object-position:center;" alt="join cpb  For Just £5 a Month!"
                                class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                Landmark Car Finance Ruling: CPB Helps You Claim Without Hefty Lawyers’ Fees
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(13 August 2025)</span>
                                <b>LONDON </b> –
                                Millions of UK Drivers May Still Be Eligible for Refunds. A recent UK Supreme Court
                                ruling has limited the scope of certain car finance compensation claims but it has not
                                closed the door for millions of drivers who may still be owed money.

                                If your finance agreement taken out before January 2021 included undisclosed
                                discretionary commissions, you could be entitled to up to £950 in compensation. This is
                                because dealers and brokers were able to set higher interest rates to increase their
                                commission, without clearly telling customers.


                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="landmark-car-finance.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 ">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/jobs/cpb-ofwat.png"
                                style="object-fit:contain; object-position:center;" alt="join cpb  For Just £5 a Month!"
                                class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>9 July 2025</span> -->
                            <h2 class="mb-0 pb-0">
                                Welcoming the End of Ofwat and the Birth of a Unified Water Regulator
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(24 July 2025)</span>
                                <b>LONDON </b> –
                                The Government’s decision to scrap Ofwat and replace it with a single, integrated water
                                regulator is not just welcome, it’s long overdue. For too long, water regulation in
                                England and Wales has suffered from fragmentation, toothless oversight, and a disjointed
                                approach that left consumers footing the bill while water companies polluted rivers and
                                raked in profits.


                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="cpb-welcomes-new-unified-water-regulator-end-ofwat.php"
                                    class="news-alert-btn">Read
                                    More</a>
                            </div>
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
                   <h2 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                       Visit Our Subsidiary Companies
                   </h2>

               </div>

               <div class="col-lg-6 mx-auto  col-md-6 mb-3">
                   <a href="https://www.compliance-experts.co.uk/" target="_blank"
                       class="text-decoration-none text-dark">
                       <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                           <h3 class="mb-4 text-center text-md" style=" font-weight:500;">CPB is part of</h3>
                           <img src="../assets/images/CRC-logo.png" alt="CRC logo" style="width:130px; height:auto;">
                           <h3 class="mt-4 text-center text-md" style=" font-weight:500;">Compilance and Risk
                               Consultancy</h3>
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