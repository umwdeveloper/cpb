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
            <div class="col-lg-10 mx-auto news-wrapper p-0" style="background:#E3F2FD;">
                 <img src="../assets/images/news/Join the Fight for Fairness.png"
                        alt="Join Consumer Protection Bureau - Consumer protection bureau" class="w-100 h-auto">
    <div class="px-lg-4 mx-3 px-3 py-4">
        <h1 class="news-heading text-uppercase mb-4">
            <span class="text-alert d-block" style="font-size: 2rem; line-height: 1.3;">
                
                Lead Fundraising for National Impact and Global Reach
            </span>
        </h1>

        <div class="mb-4">
            <p><strong>Position:</strong> Senior Fundraising Strategist – Governmental &amp; Intergovernmental Partnerships</p>
            <p><strong>Organisation:</strong> Consumer Protection Bureau (CPB), United Kingdom</p>
            <p><strong>Location:</strong> London (with flexible remote working considered)</p>
            <p><strong>Salary:</strong> Competitive + performance-based incentives</p>
            <p><strong>Contract:</strong> Permanent | Full-time</p>
        </div>

        <h3 class="text-primary fw-bold mb-3">About Us</h3>
        <p class="text mb-3">The <strong>Consumer Protection Bureau (CPB)</strong> is the UK’s independent voice for consumers—driving national campaigns, influencing policy, and standing up to systemic injustice in banking, energy, transport, retail, and digital markets.</p>
        <p class="text mb-3">With an expanding public mandate and national media presence, CPB is now entering a bold new phase: establishing international partnerships and securing long-term funding to scale up our mission.</p>
        <p class="text mb-4">We are seeking a <strong>highly successful, connected, and visionary Fundraiser</strong> to take charge of building strategic funding partnerships with <strong>UK government bodies, global development institutions, and intergovernmental organisations</strong> such as the World Trade Organisation, UNCTAD, the European Commission, and Commonwealth secretariats.</p>

        <h3 class="text-primary fw-bold mb-3">The Role</h3>
        <p class="text mb-3">This is not your average fundraising post. As our <strong>Senior Fundraising Strategist</strong>, you will operate at the intersection of <strong>policy, impact, and international influence</strong>.</p>
        <p class="text mb-3">You will craft compelling funding bids, lead high-level engagement with public sector stakeholders and global institutions, and open doors to sustainable, multi-year funding for our cutting-edge campaigns on:</p>
        <ul class="ps-3 mb-4">
            <li>Credit agency reform</li>
            <li>Public transport fairness</li>
            <li>Digital market transparency</li>
            <li>Consumer rights in post-Brexit Britain</li>
            <li>Global supply chain accountability</li>
        </ul>

        <h3 class="text-primary fw-bold mb-3">Key Responsibilities</h3>
        <ol class="ps-3 mb-4">
            <li>Design and execute CPB’s fundraising strategy targeting:
                <ul class="ps-3">
                    <li>UK government departments (e.g. DfT, BEIS, DLUHC)</li>
                    <li>Public sector grant frameworks</li>
                    <li>Supranational bodies (e.g. WTO, UNCTAD, EC, OECD)</li>
                </ul>
            </li>
            <li>Develop high-impact grant proposals, concept notes, and advocacy pitches aligned with CPB’s core mission and current campaigns</li>
            <li>Build trusted relationships with senior decision-makers across public and intergovernmental networks</li>
            <li>Monitor international funding calls and position CPB to respond ahead of time</li>
            <li>Forge strategic alliances with NGOs, think tanks, and legal networks to co-leverage funding consortia</li>
        </ol>

        <h3 class="text-primary fw-bold mb-3">Person Specification</h3>
        <ol class="ps-3 mb-4">
            <li>Proven track record in securing £6- to 7-figure funding from public or multilateral sources</li>
            <li>Deep understanding of public funding mechanisms (e.g. EU Horizon, UN calls, UKRI, FCDO)</li>
            <li>Excellent written communication and proposal-writing skills, with the ability to tailor complex ideas to different funders’ expectations</li>
            <li>Strategic thinker with a solid grasp of policy advocacy, international development, or consumer protection frameworks</li>
            <li>Existing network in civil society, UK government, or international donor agencies is a strong advantage</li>
            <li>Confident, persuasive communicator able to operate at Board and institutional levels</li>
        </ol>

        <h3 class="text-primary fw-bold mb-3">Why Join CPB?</h3>
        <ul class="ps-3 mb-4">
            <li>Work with a mission-driven team at the forefront of consumer justice</li>
            <li>Be part of high-profile campaigns influencing public policy and media agendas</li>
            <li>Flexible working arrangements</li>
            <li>Opportunity to shape a national institution's international funding footprint from the ground up</li>
        </ul>

        <div class="text shadow-sm rounded-2 p-4 border mb-4" style="background-color:#FEE8CF !important;">
            <h3 class="text-primary fw-bold mb-3">How to Apply</h3>
            <p class="text mb-2">Send your <strong>CV</strong>, a <strong>short cover letter</strong>outlining relevant achievements, and one example of a successful fundraising bid or concept note to:</p>
            <p class="text mb-3">
                <strong>Eamil:</strong> <a href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk</a><br>
                <strong>Deadline:</strong> 5<sup>th</sup> August 2025
            </p>
        </div>

        <div class="col-lg-10 mx-auto">
            <p class="text text-center text-danger text-uppercase text-lg fw-bold fs-5 mb-0">
                Let’s build a fairer future, together.
               
            </p>
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