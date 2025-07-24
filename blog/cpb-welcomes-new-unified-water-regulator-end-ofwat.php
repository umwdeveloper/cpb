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
    <title>Lead Fundraising for National Impact and Global Reach</title>
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
        href="https://www.consumerprotectionbureau.co.uk/blog/cpb-welcomes-new-unified-water-regulator-end-ofwat.php">
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
                <img src="../assets/images/jobs/cpb-ofwat.png" alt="CPB Unified Water Regulator"
                    class="img-fluid w-100">
            </div>

            <!-- Title & Meta -->
            <div class="mb-4">
                <h1 class="display-5 fw-bold text-uppercase" style="color: #0D47A1;">A Watershed Moment</h1>
                <h2 class="fw-semibold" style="font-size: 1.6rem; color: #333;">Welcoming the End of Ofwat and the Birth
                    of a Unified Water Regulator</h2>
                <p class="text-muted mt-2 small">By the <strong>Consumer Protection Bureau (CPB)</strong> | July 2025
                </p>
            </div>

            <!-- Main Blog Content -->
            <div class="fs-5 lh-lg text-dark">
                <p>The Government’s decision to scrap Ofwat and replace it with a single, integrated water regulator is
                    not just welcome, it’s long overdue. For too long, water regulation in England and Wales has
                    suffered from fragmentation, toothless oversight, and a disjointed approach that left consumers
                    footing the bill while water companies polluted rivers and raked in profits.</p>

                <blockquote class="blockquote px-4 py-3"
                    style="background:#fff3cd; border-left: 5px solid #FFC107; border-radius: 6px;">
                    <p class="mb-0 fst-italic text-dark">Today marks the beginning of a much-needed reset.</p>
                </blockquote>

                <p class="mt-4">Under the proposed reforms, the functions of Ofwat, the Environment Agency, the Drinking
                    Water Inspectorate, and Natural England will be brought together under one powerful regulatory body.
                    This new authority will have the reach and remit to ensure that water companies finally deliver what
                    the public expects and deserves: cleaner water, fairer prices, and meaningful accountability.</p>

                <!-- Why it matters -->
                <h3 class="fw-bold mt-5 mb-3" style="color: #0D47A1;">Why this decision matters</h3>
                <p>For years, consumers have been calling out rising bills, relentless sewage discharges, and opaque
                    regulatory processes. Households have been asked to pay more—up to 36% increases are predicted—while
                    water firms distribute dividends, accumulate debt, and dodge responsibility for chronic pollution.
                </p>
                <p>The scrapping of Ofwat is not simply about replacing a failed regulator. It’s about resetting
                    priorities. It’s about putting consumers and the environment first.</p>

                <!-- What we welcome most -->
                <h3 class="fw-bold mt-5 mb-3" style="color: #0D47A1;">What we welcome most in this reform</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="p-4 rounded bg-white border-start border-4 border-success h-100">
                            <h5 class="fw-bold text-success">Cleaner Waterways and a Healthier Environment</h5>
                            <p class="mb-0">Sewage in our rivers and seas has become a national scandal. With a single
                                body now overseeing environmental and infrastructure compliance, polluters will no
                                longer hide behind regulatory confusion.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 rounded bg-white border-start border-4 border-warning h-100">
                            <h5 class="fw-bold text-warning">Fairer, More Transparent Pricing</h5>
                            <p class="mb-0">For too long, bills have gone up without justification. We welcome the
                                pledge to introduce affordable social tariffs and stronger pricing oversight, so
                                households aren't punished for the failures of the industry.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 rounded bg-white border-start border-4 border-info h-100">
                            <h5 class="fw-bold text-info">A Strong, Independent Ombudsman Service</h5>
                            <p class="mb-0">Complaints handling must no longer be a tick-box exercise. The creation of
                                an independent water ombudsman, with teeth, backed by the new regulator, will give
                                consumers the right to swift, fair redress when companies fall short.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 rounded bg-white border-start border-4 border-danger h-100">
                            <h5 class="fw-bold text-danger">Safe, Reliable Drinking Water for All</h5>
                            <p class="mb-0">Merging water quality oversight ensures that public health will no longer be
                                sacrificed to corporate convenience. One regulator will mean clearer standards and
                                better enforcement.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="p-4 rounded bg-white border-start border-4 border-primary h-100">
                            <h5 class="fw-bold text-primary">Restored Public Trust Through Unified Oversight</h5>
                            <p class="mb-0">Trust in the sector has reached an all-time low. This new model creates a
                                single line of accountability, where the buck stops, and where enforcement will no
                                longer be delayed by bureaucratic wrangling between agencies.</p>
                        </div>
                    </div>
                </div>

                <!-- What comes next -->
                <h3 class="fw-bold mt-5 mb-3" style="color: #0D47A1;">What comes next?</h3>
                <p>We at the Consumer Protection Bureau (CPB) will be watching this transition closely. We want to
                    ensure this is not just a cosmetic change but a structural shift. We urge the Government to:</p>
                <ul class="ps-3 list-unstyled">
                    <li>⬥ Appoint truly independent leadership for the new regulator.</li>
                    <li>⬥ Guarantee consumer voices are embedded at every level of the new body.</li>
                    <li>⬥ Ensure transparent pricing models that reward efficiency—not corporate excess.</li>
                    <li>⬥ Fund the Ombudsman service properly to support timely resolutions.</li>
                    <li>⬥ Publish a clear implementation timetable and hold water companies to account throughout the
                        transition.</li>
                </ul>

                <!-- Final thoughts -->
                <h3 class="fw-bold mt-5 mb-3" style="color: #0D47A1;">A brighter future is possible</h3>
                <p>This reform is not just a policy win—it’s a victory for every household that pays a water bill, every
                    swimmer who’s avoided the sea due to pollution, and every community that’s been ignored when raising
                    valid concerns.</p>
                <p>If done right, this is a chance to build a modern, consumer-first regulatory system, one that treats
                    water not as a profit centre for a few, but as a public necessity for all.</p>

                <div class="text-center mt-5">
                    <p class="text-uppercase text-danger fw-bold">We welcome this decision. Now, the real work begins.
                    </p>
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