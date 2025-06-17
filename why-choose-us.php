<?php
include_once "includes/functions.php";

include_once "includes/mail.php";

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
$feedbacks = findAll("feedbacks");

?>
<!doctype html>
<html lang="en">

<head>
    <title>Why Choose Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name='description'
        content='The Consumer Protection Bureau provides expert guidance on consumer rights, protection laws, and resolving consumer and customer complaints in the UK.' />

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/why-choose-us.php">

</head>

<?php include 'assets/include/header.php'; ?>
<main>

    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-11 mx-auto">
                    <h1 class="main-heading text-center text-uppercase mt-2">
                        Why Choose CPB?
                    </h1>
                    <p class="text-md text-center">
                        The Consumer Protection Bureau (CPB) is an independent non-governmental organisation
                        dedicated to safeguarding consumer rights and ensuring fair business practices. As a leading
                        advocate for consumer protection in the UK, we are committed to upholding consumer
                        protection laws and addressing consumer complaints. Supporting CPB means aligning with a
                        trusted entity focused on resolving customer complaints and promoting fairness in the
                        marketplace.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-lg-5 pb-4 bg-light position-relative " style="z-index: 1;">
        <div class="container pb-5">
            <div class="row pb-4">
                <div class="col-lg-4 px-0 bg-white">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk.png"
                                alt="Consumer Protection Service 1" class="service-img mx-auto">
                        </div>
                        <h2>Consumer Advocacy</h2>
                        <p class="text text-center">
                            At the Consumer Protection Bureau (CPB), our consumer advocacy efforts are central to
                            our mission. We work diligently to uphold consumer rights and provide support when
                            addressing consumer complaints. As part of our commitment, we ensure that you are
                            protected from deceptive practices and have access to the resources needed to resolve
                            issues with products or services.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 px-0 bg-img">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk(1).png"
                                alt="Consumer Protection Service 2" class="service-img mx-auto">
                        </div>
                        <h2 class="text-white">Preventing Unfair Practices</h2>
                        <p class="text text-center text-white">
                            Beyond advocacy, the Consumer Protection Bureau (CPB) actively works to prevent unfair
                            and deceptive practices. We focus on enforcing consumer protection laws to ensure that
                            businesses adhere to fair practices, thus safeguarding consumer protection UK-wide. Our
                            vigilant monitoring helps identify and challenge practices that could harm consumers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 px-0 bg-white">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk(2).svg"
                                alt="Consumer Protection Service 3" class="service-img mx-auto">
                        </div>
                        <h2>Product Safety</h2>
                        <p class="text text-center">
                            CPB is dedicated to ensuring product safety through stringent regulations. We monitor
                            compliance with consumer protection laws to prevent the sale of unsafe or harmful
                            products. By upholding high safety standards, we help protect consumers' rights and
                            address any concerns related to faulty products.
                        </p>
                    </div>
                </div>



                <div class="col-lg-4 px-0 bg-img">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk(3).svg"
                                alt="Consumer Protection Service 4" class="service-img mx-auto">
                        </div>
                        <h2 class="text-white">Financial Protection</h2>
                        <p class="text text-center text-white">
                            At the Consumer Protection Bureau (CPB), we monitor financial institutions to ensure
                            they adhere to fair lending practices and protect consumers from predatory financial
                            activities. Our focus on financial protection helps enforce consumer protection laws and
                            safeguards your economic interests.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 px-0 bg-white">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk(4).png"
                                alt="Consumer Protection Service 5" class="service-img mx-auto">
                        </div>
                        <h2>Dispute Resolution</h2>
                        <p class="text text-center">
                            CPB provides effective mechanisms for dispute resolution between consumers and
                            businesses. This service is crucial when addressing consumer complaints or customer
                            complaints related to unfair treatment or issues with products and services. We help
                            ensure that your consumer rights are upheld.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 px-0 bg-img">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk(5).png"
                                alt="Consumer Protection Service 6" class="service-img mx-auto">
                        </div>
                        <h2 class="text-white">Market Stability</h2>
                        <p class="text text-center text-white">
                            By regulating and monitoring business practices, CPB contributes to the overall
                            stability of the market. Our efforts help maintain a fair and reliable marketplace,
                            benefiting both consumers and businesses. This commitment supports consumer protection
                            UK-wide and fosters an environment of trust.
                        </p>
                    </div>
                </div>




                <div class="col-lg-4 px-0 bg-white">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk(6).png"
                                alt="Consumer Protection Service 7" class="service-img mx-auto">
                        </div>
                        <h2>Legal Framework</h2>
                        <p class="text text-center">
                            The Consumer Protection Bureau (CPB) operates within a robust legal framework that
                            defines the rights and responsibilities of both consumers and businesses. This framework
                            upholds consumer protection laws, ensuring ethical business conduct and the protection
                            of consumer rights across the UK.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 px-0 bg-img">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk(7).png"
                                alt="Consumer Protection Service 8" class="service-img mx-auto">
                        </div>
                        <h2 class="text-white">Transparent</h2>
                        <p class="text text-center text-white">
                            At CPB, we prioritize transparency in all our interactions. We ensure that there are no
                            hidden fees or surprises, offering clear and straightforward assistance to address any
                            consumer complaint or customer complaint effectively.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 px-0 bg-white">
                    <div class="service-white-card service-card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/services/consumer protection uk(8).png"
                                alt="Consumer Protection Service 9" class="service-img mx-auto">
                        </div>
                        <h2>Environmental Stewardship</h2>
                        <p class="text text-center">
                            CPB actively promotes eco-consumption and environmental stewardship. We aim to protect
                            both consumers' economic interests and the planet. Our collaborations with global
                            consumer groups, like Consumers International, highlight our commitment to sustainable
                            practices and adherence to consumer protection UK-wide.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="fight-section position-relative" style="z-index: 10;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="fight-card text-center px-lg-5">

                        <p class="text py-2 text-white text-center text-md ">
                            The Consumer Protection Bureau is not just an advisory body, but an action-oriented
                            organisation that places consumers at the centre of its services. We help and support
                            consumers to assert their statutory rights and achieve effective remedy.
                        </p>
                        <div class="mt-4 text-center">
                            <a href="contact.php" class="main-btn text-white">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-lg-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-3 d-flex align-items-center">
                    <h2 class="main-heading">Our services include:</h2>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="bg-light service-card py-4 rounded-1 shadow-sm h-100">
                        <h3 class="text-start number-bg mb-2">1</h3>
                        <h4 class="text-md text-primary">Face-to face meetings</h4>
                        <p class="text mb-0 pb-0">
                            Face-to face meetings to assist consumers in dealing with any infringements to their
                            legal rights

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="bg-light service-card py-4 rounded-1 shadow-sm h-100">
                        <h3 class="text-start number-bg mb-2">2</h3>
                        <h4 class="text-md text-primary">Legal<br>Representation</h4>
                        <p class="text mb-0 pb-0">
                            Face-to face meetings to assist consumers in dealing with any infringements to their
                            legal rights

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="bg-light service-card py-4 rounded-1 shadow-sm h-100">
                        <h3 class="text-start number-bg mb-2">3</h3>
                        <h4 class="text-md text-primary">Assisting<br>consumers </h4>
                        <p class="text mb-0 pb-0">
                            Assisting consumers to follow complaint procedures

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="bg-light service-card py-4 rounded-1 shadow-sm h-100">
                        <h3 class="text-start number-bg mb-2">4</h3>
                        <h4 class="text-md text-primary">Lobbying<br></h4>
                        <p class="text mb-0 pb-0">
                            Lobbying in favour of good consumer policies and practices

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="bg-light service-card py-4 rounded-1 shadow-sm h-100">
                        <h3 class="text-start number-bg mb-2">5</h3>
                        <h4 class="text-md text-primary">Focus groups</h4>
                        <p class="text mb-0 pb-0">
                            Focus groups for consumers to express their views on common issues and experiences

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="bg-light service-card py-4 rounded-1 shadow-sm h-100">
                        <h3 class="text-start number-bg mb-2">6</h3>
                        <h4 class="text-md text-primary">Drafting<br> communications </h4>
                        <p class="text mb-0 pb-0">
                            Helping with drafting communications and follow up actions

                        </p>
                    </div>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="bg-light service-card py-4 rounded-1 shadow-sm h-100">
                        <h3 class="text-start number-bg mb-2">7</h3>
                        <h4 class="text-md text-primary">Actions <br></h4>
                        <p class="text mb-0 pb-0">
                            Taking concerted actions

                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="py-lg-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                        Why people believe in us
                    </h2>
                </div>
                <div class="col-lg-12">
                    <div class="slick-slider quote-slider">
                        <?php foreach ($feedbacks as $count => $feedback): ?>
                        <div class="element element-<?php echo ++$count; ?>">
                            <div class="amenity-card quote-card">
                                <div class="text-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 0 1664 1792"
                                        id="1076841621" class="svg u_1076841621" data-icon-name="fa-quote-right">
                                        <path fill="#E5BF20"
                                            d="M768 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136zM1664 320v704q0 104-40.5 198.5t-109.5 163.5-163.5 109.5-198.5 40.5h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136v-384q0-80 56-136t136-56h384q80 0 136 56t56 136z"
                                            id="1938712236"></path>
                                    </svg>
                                </div>
                                <p class="text text-center">
                                    “<?php echo $feedback->feedback; ?>”
                                </p>
                                <h3 class="mt-3"><?php echo $feedback->name . ", " . $feedback->location; ?></h3>
                            </div>
                        </div>
                        <?php endforeach; ?>

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

                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="https://www.compliance-experts.co.uk/" target="_blank"
                        class="text-decoration-none text-dark">
                        <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                            <img src="assets/images/CRC-logo.png" alt="CRC logo" style="width:130px; height:auto;">
                            <h3 class="mt-4 text-center text-md" style=" font-weight:500;">Compilance and Risk
                                Consultancy</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="https://carehomecompliance.com/" target="_blank" class="text-decoration-none text-dark">
                        <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                            <img src="assets/images/Care Home Compilance.png" alt="CHC logo"
                                style="width:100px; height:auto;">
                            <h3 class="mt-4 text-center text-md" style=" font-weight:500;">Care Home Compilance</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
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
    </section>
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