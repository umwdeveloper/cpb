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
    <title>Trustpilot Complaints — CPB seeks legal action & requests evidence</title>
    <meta name="description" content="CPB is seeking legal action over unfair review removals.
     If your Trustpilot review was removed 
    or unfairly moderated, share screenshots and correspondence to support our case.">
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
        href="https://www.consumerprotectionbureau.co.uk/blog/trustpilot-complaints-cpb-legal-action.php">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php include 'assets/include/header.php'; ?>
<main>

    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container py-5 px-3 px-md-5" style="max-width: 980px; background: #E3F2FD; border-radius: 12px;">
            <!-- Hero Image -->
            <div class="mb-4 rounded shadow-sm overflow-hidden">
                <img src="../assets/images/blog/trustpilot-complaints.png" alt="Trustpilot Complaints"
                    class="img-fluid w-100">
            </div>

            <!-- Title & Meta -->
            <div class="mb-4">
                <span class="fw-semibold" style="font-size: 1.6rem; color: #333;"> Trustpilot Complaints:</span>

                <h1 class="display-5 fw-bold text-uppercase" style="color: #223a78;">
                    <span style="color:#e5bf20">CPB Seeks Legal Action</span><br>
                    Over Unfair Review Removals
                </h1>
                <!-- <h2 class="fw-semibold" style="font-size: 1.6rem; color: #333;"> Over Unfair Review Removals</h2> -->
                <p class="text-muted mt-2 small">
                    By the <strong>Consumer Protection Bureau (CPB)</strong> | August 2025
                </p>
            </div>

            <!-- Main Blog Content -->
            <div class="fs-5 lh-lg text-dark">
                <p>Over recent months, the Consumer Protection Bureau (CPB) has been contacted by an increasing number
                    of consumers and small businesses raising serious concerns about Trustpilot’s review moderation
                    practices. Many have reported that genuine reviews based on verified customer experiences were
                    removed without clear justification, often following challenges by the businesses reviewed.</p>

                <h3 class="fw-bold mt-4 mb-3" style="color: #223a78;">Key Issues Reported to CPB</h3>
                <p>Our investigation has highlighted troubling patterns, including:</p>

                <ul class="ps-3">
                    <li>Unfair review removals and lack of clear reasoning</li>
                    <li>Over-reliance on automated moderation systems that make mistakes</li>
                    <li>Lack of transparency in how moderation decisions are made</li>
                    <li>Potential bias towards paying business subscribers</li>
                    <li>Consumers being left without a voice despite following Trustpilot’s guidelines</li>
                </ul>

                <p>These issues raise serious questions about consumer rights and the integrity of online reviews.
                    Review platforms should
                    protect honest feedback, not silence it.</p>

                <h3 class="fw-bold mt-5 mb-3" style="color: #223a78;">CPB Seeking Legal Action Against Trustpilot</h3>
                <p>CPB is now filing formal complaints with the competent authorities to hold Trustpilot accountable for
                    its handling of
                    consumer reviews and its review removal process. This step is being taken to protect effective
                    transparency, fairness,
                    and trust in the online review industry.</p>

                <p>To build a strong legal case, we are calling on consumers and business owners who have experienced
                    unfair review
                    moderation to come forward.</p>

                <h3 class="fw-bold mt-5 mb-3" style="color: #223a78;">Have You Experienced Trustpilot Review Removal?
                </h3>
                <p>We want to hear from you if:</p>

                <ul class="ps-3">
                    <li>Your Trustpilot review was removed or hidden despite being genuine</li>
                    <li>You provided proof of purchase or documentation, yet your review was still deleted</li>
                    <li>You believe your review was taken down due to business influence or bias</li>
                    <li>You experienced pressure to amend or delete your review</li>
                </ul>

                <h3 class="fw-bold mt-5 mb-3" style="color: #223a78;">How to Share Your Trustpilot Experience</h3>
                <p>Please send us:</p>
                <ol class="ps-3">
                    <li>A copy or screenshot of your original review</li>
                    <li>Any emails or messages from Trustpilot explaining the removal</li>
                    <li>A brief summary of your experience with the business in question</li>
                </ol>

                <p>Submit your evidence via our <a href="../get-help.php" class="fw-semibold" style="color:#e5bf20">
                        CPB Complaints Form</a> or email it to
                    <a href="mailto:info@consumerprotectionbureau.co.uk"
                        style="color:#e5bf20">info@consumerprotectionbureau.co.uk</a>.
                </p>

                <h3 class="fw-bold mt-5 mb-3" style="color: #223a78;">Why Your Voice Matters</h3>
                <p>By coming forward, you will help CPB present clear evidence of systemic issues in online review
                    platforms. Together,
                    we can push for stronger protections to ensure that negative reviews are not silenced and that
                    consumers’ rights are
                    respected.</p>



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