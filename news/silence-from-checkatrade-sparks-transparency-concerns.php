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
    <title>Silence from Checkatrade Sparks
        Transparency Concerns</title>
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
    <link rel="canonical"
        href="https://www.consumerprotectionbureau.co.uk/news/silence-from-checkatrade-sparks-transparency-concerns.php">
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
                    <img src="../assets/images/news/checkatrade-vs-CPB.png"
                        alt="Join Consumer Protection Bureau - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            <span class="text-alert">
                                Silence from Checkatrade Sparks
                                Transparency Concerns
                            </span>
                        </h1>


                        <h2 class="subtitle-bullet">CPB to speak directly with traders and consumers
                            amid rising concerns over the platform’s reliability
                            and accountability</h2>
                        <p class="text">
                            <b>WESTMINSTER, UK</b> – The Consumer Protection Bureau (CPB) has escalated its
                            inquiry into Checkatrade, one of the UK’s most prominent online directories for
                            vetted tradespeople, after the platform failed to respond to a formal proposal for
                            an independent audit aimed at strengthening consumer protection and verifying its
                            trader vetting processes.
                        </p>
                        <p class="text">
                            In March 2025, CPB wrote directly to Checkatrade CEO Jambu Palaniappan,
                            proposing a detailed third-party audit to review how the platform selects, monitors,
                            and certifies the reliability of traders listed on its site. Budgeted at £35,000 to cover
                            compliance evaluations, trader sampling, consumer feedback analysis, and
                            regulatory benchmarking – the proposed audit was designed to reinforce public trust
                            and support Checkatrade’s market leadership.
                        </p>


                        <!-- <img src="../assets/images/news/join-cpn-now.png"
                            alt="oin Consumer Protection Bureau - Consumer protection bureau" class="mb-3 w-100 h-auto"> -->

                        <!-- <img src="../assets/images/news/service-charges.jpg"
                            alt="Consumer Protection Bureau uk Advices for Resturent UNjustified Service Charges"
                            class="w-100 h-auto"> -->

                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->

                        <p class="text">
                            More than four months later, Checkatrade has still not issued any response – a
                            silence CPB has labelled “concerning and deeply irresponsible.”
                        </p>
                        <p class="text">
                            “We made a credible and transparent offer to help Checkatrade enhance its
                            accountability and reputation,” said Yousouf Jhugroo, CPB Managing Director. “This
                            wasn&#39;t a marketing pitch – it was a public interest initiative. Their lack of engagement
                            suggests reluctance to open up their processes to proper scrutiny.”
                        </p>
                        <div class="row mt-4 mb-4">


                            <div class="col-lg-12 order-lg-2 order-1">
                                <h3 class="text-md text-bold text-primary w-700">
                                    CPB to Speak Directly with Registered Traders
                                </h3>
                                <p class="text">
                                    As Checkatrade remains unresponsive, CPB is now taking the unprecedented step
                                    of engaging directly with tradespeople listed on the platform to gain insight into
                                    its
                                    internal practices. Key areas of inquiry will include:
                                </p>
                                <ul style="padding-left: 20px;" class="text">
                                    <li>Fees paid by traders to join or advertise on the platform</li>
                                    <li>Verification processes before and after registration</li>
                                    <li>Complaint handling procedures when disputes arise</li>
                                    <li>Checks on reviews and ongoing performance monitoring</li>
                                </ul>
                                <p class="text">
                                    CPB will also gather statements from consumers who have used Checkatrade to
                                    document unresolved complaints, misrepresentation issues, or financial losses.
                                </p>
                                <p class="text">
                                    “If Checkatrade won&#39;t be transparent, we will gather the truth from those who
                                    use
                                    and fund the system — the traders and the public,” CPB said.
                                </p>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <h3 class="text-md text-bold text-primary w-700">
                                    A Missed Opportunity for Checkatrade
                                </h3>
                                <p class="text">
                                    The audit, if accepted, would have examined Checkatrade’s internal processes
                                    across seven key compliance areas, including trader qualifications, complaint
                                    resolution, post-registration monitoring, and adherence to consumer protection laws.
                                    CPB also offered to provide a full audit report, actionable recommendations, and —
                                    if
                                    warranted — a consumer trust endorsement.
                                </p>
                                <p class="text">
                                    “Checkatrade had a chance to lead by example and stand apart from the crowd.
                                    Instead, they chose silence,” added the CPB Managing Director.
                                </p>

                                <div class="text shadow-sm rounded-2  p-3 border mb-4"
                                    style="background-color:#FEE8CF !important;">

                                    <h3 class="text-md text-bold  text-primary w-700">
                                        Next Actions: Independent Review and Public Disclosure
                                    </h3>
                                    <p class="text">
                                        CPB will now proceed with its own independent investigation and intends to
                                        publish
                                        a public report later this year outlining the platform’s shortcomings,
                                        stakeholder
                                        experiences, and recommendations for reform. The findings will be shared
                                        with consumer rights organisations, such as Citizens Advice and Which?, as well
                                        as
                                        with relevant regulatory bodies, including Trading Standards.

                                    </p>
                                    <p class="text">
                                        Consumers and trades people who wish to share
                                        their experiences can contact CPB.

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