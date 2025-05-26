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
    <title>Join Consumer Protection Bureau Today</title>
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/news/join-consumer-protection-bureau.php">
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
                    <img src="../assets/images/news/join-cpb.png"
                        alt="Join Consumer Protection Bureau - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            <span class="text-alert">
                                For Just £5 a Month!
                            </span>
                        </h1>


                        <h2 class="subtitle-bullet">Help Keep Consumer Rights Independent and Strong</h2>
                        <p class="text">
                            The <b>Consumer Protection Bureau (CPB)</b> is proud to announce the launch of our <b>Open
                                Membership
                                Campaign</b> – a nationwide initiative to grow our movement and strengthen our
                            independence in
                            defending consumer rights.
                        </p>
                        <p class="text">
                            For a modest <b> £5 per month</b> (payable by Direct Debit) or a discounted rate of <b>£50
                                annually</b>,
                            members will gain access to a wide range of exclusive benefits – all while supporting the
                            vital work we do to protect consumers from unfair practices, exploitation, and scams.
                        </p>


                        <img src="../assets/images/news/join-cpn-now.png"
                            alt="oin Consumer Protection Bureau - Consumer protection bureau" class="w-100 h-auto">

                        <!-- <img src="../assets/images/news/service-charges.jpg"
                            alt="Consumer Protection Bureau uk Advices for Resturent UNjustified Service Charges"
                            class="w-100 h-auto"> -->

                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-4 bg-primary text-white order-lg-1 order-2">


                                <h3 class="text-md text-bold text-inform mt-3 ">
                                    Why Join CPB?
                                </h3>
                                <p class="text2 mb-0">
                                    Your membership fee – equivalent to the price of a coffee – helps us remain a
                                    <b>fully
                                        independent</b> watchdog, free from the influence of corporate or political
                                    funding.
                                    With your support, we can continue to act without fear or favour.
                                </p>

                                <h3 class="text-md text-bold mt-3 text-inform">Your membership powers action. Your voice
                                    strengthens justice.
                                </h3>

                                <p class="text2">
                                    Join us today – because consumers deserve better.
                                </p>
                                <h3 class="text-md text-bold mt-3 text-inform">Sign Up Now
                                </h3>
                                <p class="text2">
                                    at <a href="www.consumerprotectionbureau.org.uk/membership"
                                        class="text-white">Consumer Protection bureau</a>
                                </p>


                            </div>

                            <div class="col-lg-8 order-lg-2 order-1">
                                <h3 class="text-md text-bold text-primary w-700">
                                    Member Benefits Include:
                                </h3>
                                <ul style="padding-left: 20px;" class="text">
                                    <li>
                                        <strong>Dedicated Member Portal</strong> with exclusive legal guides, complaint
                                        templates, case updates, and video explainers.
                                    </li>
                                    <li>
                                        <strong>Free complaint handling</strong> against traders, utility providers,
                                        service companies, or scam operators – let our expert team advocate on your
                                        behalf.
                                    </li>
                                    <li>
                                        <strong>Priority access</strong> to consumer support via email and online chat
                                        for members only.
                                    </li>
                                    <li>
                                        <strong>Monthly digital magazine</strong> featuring:
                                        <ul style="list-style-type: circle; margin-left: 20px;">
                                            <li>Expert commentary on key consumer issues</li>
                                            <li>Case studies</li>
                                            <li>Updates on legislation and your rights</li>
                                            <li>Investigative features</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Member-only campaigns and offers</strong>, including access to
                                        workshops, webinars, and digital events.
                                    </li>
                                    <li>
                                        <strong>Recognition as a supporter of consumer justice</strong> – your name will
                                        be included (optional) in our annual report as a proud contributor to the cause.
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <h3 class="text-md text-bold text-primary w-700">
                                    Proposed CPB Member Benefits
                                </h3>
                                <ol style="padding-left: 20px;">
                                    <li>
                                        <strong>Priority Support for Complaints</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Members get priority handling of their complaints, including faster
                                                response and resolution times.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Unlimited Complaint Submissions</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Members can submit as many complaints as they need help with during
                                                their membership period.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Direct Access to Consumer Rights Experts</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Get direct access to advisors via email or scheduled calls to understand
                                                your rights and the best course of action.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Legal Guidance & Templates</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Access to complaint drafts, and guidance on how to escalate issues
                                                legally.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Monthly Consumer Awareness Newsletter</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Stay informed with a members-only newsletter covering consumer rights,
                                                scams to watch out for, and tips for safe purchasing.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Annual Report of Actions Taken</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Transparent yearly report showing what CPB has done to help members
                                                collectively—this builds trust and credibility.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Access to the Membership Portal</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Members can directly access the membership portal.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <h3 class="text-md text-bold  text-primary w-700">
                                    Membership Portal Benefits & Features
                                </h3>
                                <ol style="padding-left: 20px;">
                                    <li>
                                        <strong>Submit & Track Complaints</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Members can submit complaints online through an easy form.</li>
                                            <li>Track complaint progress in real-time (e.g., Submitted → In Progress →
                                                Escalated → Resolved).</li>
                                            <li>Upload evidence (receipts, screenshots, letters, etc.).</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Complaint History Dashboard</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Access to a personal complaint history log with resolution outcomes.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Request a Callback / Expert Chat</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Schedule a callback with a case handler or chat with a support advisor
                                                for faster help.</li>
                                            <li>Choose your preferred date/time.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Member-Only Alerts & News</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Real-time updates on:
                                                <ul style="padding-left: 20px; margin-top: 5px;">
                                                    <li>Recalls and scams</li>
                                                    <li>Policy changes in consumer law</li>
                                                    <li>Company blacklist warnings</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Ask an Expert (Q&A Forum)</strong>
                                        <ul style="margin-top: 5px; padding-left: 20px;">
                                            <li>Post consumer questions in a moderated forum.</li>
                                            <li>Receive accurate guidance from experts or CPB staff.</li>
                                            <li>Community can upvote helpful answers.</li>
                                        </ul>
                                    </li>
                                </ol>
                                <div class="text shadow-sm rounded-2  p-3 border mb-4"
                                    style="background-color:#FEE8CF !important;">

                                    <h3 class="text-md text-bold  text-primary w-700">
                                        Be Part of a National Movement
                                    </h3>
                                    <p class="text">
                                        The more members we have, the louder our voice becomes – whether it's
                                        challenging unfair banking practices, tackling rising energy costs, or holding
                                        large corporations to account.

                                    </p>
                                    <p class="text">
                                        CPB has already helped thousands of consumers fight back – but to stay <b>bold,
                                            fearless, and independent,</b> we need people like you.
                                    </p>

                                    <h3 class="text-md text-bold text-primary w-700">Sign Up Now
                                    </h3>
                                    <p class="text">
                                        at <a href="www.consumerprotectionbureau.org.uk/membership" class="">Consumer
                                            Protection bureau</a>
                                    </p>






                                    <h3 class="text-md text-bold text-primary w-700 ">Contact Us</h3>

                                    <ul class="text">
                                        <li>+44 (0)2035854002</li>
                                        <li><a href="mailto:info@consumerprotectionbureau.co.uk"
                                                class="text-whit">info@consumerprotectionbureau.co.uk</a></li>

                                    </ul>



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