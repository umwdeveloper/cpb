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
    <title> Are Trustpilot Reviews Moderated Fairly?</title>
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
    <link rel="canonical"
        href="https://www.consumerprotectionbureau.co.uk/news/are-trustpilot-reviews-moderated-fairly.php">
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
                    <img src="../assets/images/news/trustpilot-review-moderation.png"
                        alt="Join Consumer Protection Bureau - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            <span class="text-alert">
                                Are Trustpilot Reviews Moderated Fairly?
                            </span>
                        </h1>


                        <h2 class="subtitle-bullet">CPB Demands Answers Amid Escalating Complaints</h2>
                        <p class="text">
                            <b>LONDON, 18 July 2025</b> — The Consumer Protection Bureau (CPB) has launched a formal
                            public
                            inquiry following a significant surge in complaints about Trustpilot — the online review
                            platform relied upon by millions of UK consumers.
                        </p>
                        <p class="text">
                            Consumers have contacted CPB raising serious concerns that Trustpilot is removing negative
                            reviews without justification, particularly when those reviews target businesses that pay
                            for premium listings or services. These complaints call into question the integrity,
                            transparency, and neutrality of Trustpilot’s moderation system.
                        </p>



                        <p class="text">
                            To address these concerns, CPB wrote directly to Trustpilot demanding a full explanation of
                            its internal practices, including whether paying businesses are treated more favourably and
                            how genuine consumer voices are protected from being silenced. Trustpilot’s Content
                            Integrity Team, in a formal reply dated 12 June 2025, has denied any commercial influence
                            over moderation decisions and outlined a multi-layered system involving both automated and
                            manual review processes.
                        </p>
                        <div class="row mt-4 mb-4">


                            <div class="col-lg-12  py-3" style="background-color:#FEE8CF; border-left: 5px solid #FF9800;">

                                <h3 class="text-md text-bold text-primary w-700">
                                    What Trustpilot Told Us
                                </h3>
                                <p class="text">
                                    Trustpilot claims that its moderation process is governed by clear and consistent
                                    rules for all users, regardless of commercial arrangements. Key points include:
                                </p>
                                <ul>
                                    <li><strong>Automated Fraud Detection:</strong> Proprietary software flags
                                        suspicious reviews using behavioural data, device information, and IP tracking.
                                    </li>
                                    <li><strong>Human Oversight:</strong> A dedicated Content Integrity Team manually
                                        investigates flagged content to determine whether a breach of Trustpilot's
                                        guidelines occurred.</li>
                                    <li><strong>No Preferential Treatment:</strong> Paid accounts do not receive any
                                        special consideration in the moderation process.</li>
                                    <li><strong>Right to Appeal:</strong> If a review is removed, the reviewer is
                                        notified and offered the opportunity to amend or appeal the decision.</li>
                                </ul>

                                <p class="text">
                                    Trustpilot insists these procedures ensure fairness, impartiality, and
                                    accountability.

                                </p>


                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <h3 class="text-md text-bold text-primary w-700">
                                    But the Complaints Tell Another Story
                                </h3>
                                <p class="text">
                                    Despite Trustpilot’s explanation, consumers continue to come forward with troubling
                                    accounts of legitimate reviews being taken down with little or no explanation. Many
                                    believe that critical reviews of businesses paying for enhanced profiles are more
                                    likely to be removed, while positive ones are promoted or protected.
                                </p>
                                <p class="text">
                                    These recurring allegations raise fundamental questions:
                                </p>
                                <ul>
                                    <li>Is Trustpilot’s system truly fair?</li>
                                    <li>Are paying clients shielded from scrutiny?</li>
                                    <li>Is consumer trust being compromised for commercial gain?</li>
                                </ul>






                                <div class="text shadow-sm rounded-2  p-3 border mb-4"
                                    style="background-color:#FEE8CF !important;">

                                    <h3 class="text-md text-bold  text-primary w-700">
                                        CPB Wants to Hear From You
                                    </h3>
                                    <p class="text">
                                        If your Trustpilot review was removed unfairly, we want to hear your side of the
                                        story. Your evidence will help us determine whether further regulatory or legal
                                        action is needed.
                                    </p>
                                    <p class="text">
                                        Submit your complaint through our CPB Complaints Form, and include if possible:
                                    </p>
                                    <ul>
                                        <li>A copy of your original review</li>
                                        <li>Any emails from Trustpilot about its removal</li>
                                        <li>Screenshots of the review before it was deleted</li>
                                        <li>Any communication with the business concerned</li>
                                    </ul>



                                    <div class="mb-3 mt-4 pt-2">
                                        <a href="../contact.php" class="main-btn">Complaint Form</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">


                                <h3 class="text-md text-bold  text-primary w-700">
                                    What Happens Next?
                                </h3>
                                <p class="text">
                                    If widespread abuse or bias is confirmed,
                                    CPB will escalate the matter to appropriate regulatory bodies and demand reform.
                                    Platforms that claim to be built on trust must be held accountable when they betray
                                    it.

                                </p>




                            </div>
                            <div class="col-lg-10 mx-auto">
                                <p class="text-lg text-center text-danger py-4">
                                    <b>
                                        We thank Trustpilot for responding — <br> but talk is not enough. Action and
                                        transparency must follow.
                                    </b>

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