<?php
include_once "includes/functions.php";
include_once "includes/mail.php";

$contactFormSubmitted = false;
if (isset($_POST['contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $subject = "Contact";

    $body = "<strong>Name: </strong> $name" . "<br>" .
        "<strong>Email: </strong> $email" . "<br>" .
        "<strong>Phone: </strong> $phone" . "<br>" .
        "<strong>Message: </strong> $msg";

    $msg = sendMail($email, $name, $subject, $body);

    $contactFormSubmitted = true;
}

$membershipFormSubmitted = false;
if (isset($_POST['membership'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $sign = $_POST['sign'];
    $date = $_POST['date'];

    $subject = "Membership";

    $body = "<strong>Name: </strong> $name<br>" .
        "<strong>Email: </strong> $email<br>" .
        "<strong>Phone: </strong> $phone<br>" .
        "<strong>Date of Birth: </strong> $dob<br>" .
        "<strong>Address: </strong> $address<br>" .
        "<strong>Signature: </strong> $sign<br>" .
        "<strong>Date: </strong> $date";

    $msg2 = sendMail($email, $name, $subject, $body);

    $membershipFormSubmitted = true;
}

$feedbacks = findAll("feedbacks");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Membership - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content=") Become a member of the Consumer Protection Bureau and gain access to exclusive resources, support for consumer complaints, and expert advice on UK consumer protection laws. Protect your rights with us today.">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/membership.php">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php include 'assets/include/header.php'; ?>
<main>


    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-10 mx-auto ">
                    <h1 class="main-heading text-center text-uppercase  mt-2">
                        Membership: Peace of Mind
                    </h1>
                    <p class="text-md text-center">
                        Are you tired of dealing with the complexities of consumer issues alone? <br>
                        Allow us to introduce the Consumer Protection Bureau (CPB),
                        your steadfast partner in helping you coping with these complexities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-lg-5 pb-4 bg-light position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">

                    <form method="post" class="membership-form bg-white rounded-2 shadow" id="membership-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex  mb-4 mt-3">
                                    <img src="assets/images/CPB-membership.png" alt="" class="me-auto membership-logo">
                                </div>
                                <h3 class="text-decoration-underline mb-4">Consumer Protection Bureau </h3>
                                <p class="text">
                                    Consumer Protection Bureau (CPB) is a UK-registered Community Interest Company
                                    (CIC)
                                    operating under the <a href="" class="text-decoration-none text-secondry">CRC
                                        Group</a>. As an independently financed
                                    organisation, we are wholly supported by our member contributions.
                                </p>
                                <p class="text">
                                    Our mission is to achieve justice and fairness for our members, empowering them
                                    to effectively
                                    defend their consumer rights. All membership fees directly support our important
                                    work in this area.
                                    As a member-driven organisation, we rely on individuals who share our vision to
                                    join and support our
                                    cause. Your membership not only provides you with valuable services but also
                                    contributes to our
                                    broader efforts in consumer advocacy and protection.
                                </p>
                                <p class="text">
                                    If you are interested in learning more about how CPB membership can benefit you
                                    and support our
                                    mission, we would be happy to provide further details on our services.

                                </p>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <h2 class="text-center membership-heading mb-4">MEMBERSHIP APPLICATION FORM</h2>
                                <p class="text">Please complete this form and return it electronically
                                    to: <a href=""
                                        class="text-decoration-none text-primary">info@consumerprotectionbureau.co.uk.</a>
                                </p>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <h2 class="membership-heading text-center mb-4">CONTACT
                                    INFORMATION
                                </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input required type="text" name="name" id="name" class="form-control"
                                        placeholder="" aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input required type="email" name="email" id="email" class="form-control"
                                        placeholder="" aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telephone Number</label>
                                    <input required type="text" name="phone" id="phone" class="form-control"
                                        placeholder="" aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input required type="date" name="dob" id="dob" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Home Address</label>
                                    <input required type="text" name="address" id="address" class="form-control"
                                        placeholder="" aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h2 class="membership-heading text-center mb-3 mt-4">HANDLING FEE & PAYMENT
                                    INFORMATION
                                </h2>


                            </div>
                            <div class="col-lg-6">
                                <div class="form-check border p-3 ps-5">
                                    <input required class="form-check-input" type="checkbox" value="" id="fee" />
                                    <label class="form-check-label" for="fee"> Experience exceptional value with
                                        CPB’s
                                        services! For just £10.00 annually, enjoy expert
                                        dispute resolution with a transparent 15% handling
                                        fee on the disputed amount.<br>
                                        Compared to the high cost of hiring a lawyer, CPB
                                        offers premier support at a fraction of the price. </label>
                                </div>
                            </div>
                            <div class="col-lg-6   ">
                                <div class="padding p-4 border">
                                    <h2 class="text-md  text-primary  mb-2 mt-0 pt-0"><b>PAYMENT INFORMATION</b>
                                    </h2>
                                    <p class="text  mb-0 pb-0">
                                        Transfer to Santander<br>
                                        Compliance and Risk Consultancy (CRC) The
                                        Compli<br>
                                        Account Number 96293501<br>
                                        Sort Code 09-01-28

                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h2 class="membership-heading text-center mb-3  mt-4">Member’s Declaration
                                </h2>
                                <p class="text text-center">As a member of CPB I undertake to abide by the rules and
                                    regulations of the organization and will help it
                                    to achieve its objectives of being a consumer advocate.</p>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="sign" class="form-label text-primary"><b>SIGN</b>
                                    </label>
                                    <input required type="text" name="sign" id="sign"
                                        class="form-control border-0 border-bottom rounded-0 " placeholder=""
                                        aria-describedby="helpId" />
                                    <!--   <canvas id="signaturePad" class="signature-pad"></canvas>
                                        <div class="button-container d-flex justify-content-end">
                                            <button id="clear">Clear</button> -->
                                    <!-- <button id="save" class="ms-2">Save</button> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="date" class="form-label text-primary"><b>Date</b></label>
                                    <input required type="date" name="date" id="date"
                                        class="form-control border-0 border-bottom rounded-0 " placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="col-lg-12 my-3">
                                <?php if (isset($_POST['membership'])): ?>
                                <?php if ($msg2['status'] == 'success'): ?>
                                <p class="alert alert-success text-center"><?php echo $msg2['message'] ?></p>
                                <?php else: ?>
                                <p class="alert alert-danger text-center"><?php echo $msg2['message'] ?></p>
                                <?php endif; ?>
                                <?php endif; ?>
                                <div class="d-flex justify-content-end">
                                    <button class="main-btn" name="membership">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-lg-5 pb-4 bg-light position-relative " style="z-index: 1;">
        <div class="container pb-5 ">
            <div class="row mb-lg-0 mb-4">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 ">
                    <div class="service-white-card service-card py-lg-5 py-3">

                        <h2 class="text-start">Membership Benefits</h2>
                        <p class="text ">
                            Join the CPB family by becoming a member.<br>

                            As a member, you gain exclusive access to a plethora of benefits, including:
                        </p>
                        <ul class="issues-list">
                            <li>
                                <p class="text mb-0 pb-2">
                                    Expert Guidance
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Dispute Resolution
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Priority Service
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Protect Your Rights
                                </p>
                            </li>

                        </ul>
                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center order-lg-2 order-1">
                    <img src="assets/images/contact consumer protection.png" alt="Consumer Protection Bureau Membership Benefits"
                        class="consumer-img  object-fit-contain">
                </div>
            </div>
            <div class="row  mb-lg-0 mb-4">
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                    <img src="assets/images/contact consumer protection uk.png" alt="Expert Guidance from Consumer Protection Bureau"
                        class="consumer-img object-fit-contain">
                </div>
                <div class="col-lg-8 px-0 bg-white d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">Expert Guidance</h2>
                        <p class="text">
                            Our panel of experts is here to provide comprehensive advice on consumer protection
                            laws, legal matters, product or service-related concerns, and assistance with consumer
                            complaints. Whether you’re dealing with a customer complaint or need help understanding
                            your consumer rights, we are here to support you.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">Dispute Resolution</h2>
                        <p class="text">
                            Whether it's a contractual issue or a dispute over faulty goods, CPB stands as your
                            reliable resource for swift and effective resolutions, helping with consumer complaints
                            and ensuring businesses adhere to consumer protection laws.
                        </p>
                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                    <img src="assets/images/contact consumer protection uk(1).png" alt="Consumer Protection for Dispute Resolution"
                        class="consumer-img object-fit-contain">
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4">
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                    <img src="assets/images/Service 24_7-amico.png" alt="Priority Service for Consumer Protection" class="consumer-img object-fit-contain">
                </div>
                <div class="col-lg-8 px-0 bg-white d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">Priority Service</h2>
                        <p class="text">
                            As a CPB member, you receive priority service, ensuring your concerns, such as consumer
                            complaints or customer complaints, are addressed with the urgency they rightfully
                            deserve.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row  mb-lg-4 mb-4">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">Protect Your Rights</h2>
                        <p class="text">
                            Our mission is to empower you—the consumer—in making informed decisions and asserting
                            your consumer rights. CPB is not just an organisation; we are your advocate, working
                            tirelessly to ensure fairness and justice in your consumer journey, backed by strong
                            consumer protection laws.
                        </p>
                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                    <img src="assets/images/services/consumer protection uk(6).png" alt="Protect Your Consumer Rights"
                        class="consumer-img object-fit-contain">
                </div>
            </div>


        </div>
    </section>
    <section class="fight-section position-relative" style="z-index: 10;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="fight-card text-center px-lg-5">
                        <h2 class="secondry-heading text-white">
                            Take Action Today

                        </h2>
                        <p class="text py-2 text-white text-center ">
                            Ready to experience a consumer journey with a partner by your side? Join CPB as a member
                            or make a voluntary contribution – We understand that not everyone can commit to
                            membership, and that's okay! Non-members are welcome to benefit from our services by
                            making a voluntary contribution. For consumer issues under £1,000, a suggested
                            contribution of £50 is appreciated. <b>The choice is yours!</b>
                            <br>
                            Visit our website or call us at +44 (0)203 5854002 to take the first step towards
                            consumer empowerment.
                            <br>
                            <br>
                            <b class="text-md">At CPB, we are not just protecting consumers; we are empowering
                                lives.</b>
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
                    <div class="slick-slider">
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
                                <?php if (isset($_POST['contact'])): ?>
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



                                    <div>
                                        <label for="msg" class="text-white">Message</label>
                                        <textarea class="form-control" name="msg" id="msg"
                                            placeholder="Message"></textarea>
                                    </div>
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
window.onload = function() {
    const canvas = document.getElementById('signaturePad');
    const ctx = canvas.getContext('2d');

    let isDrawing = false;

    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;

    // Set up the drawing context
    ctx.strokeStyle = '#000';
    ctx.lineWidth = 2;

    // Start drawing on mouse down
    canvas.addEventListener('mousedown', (e) => {
        isDrawing = true;
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    });

    // Draw on mouse move
    canvas.addEventListener('mousemove', (e) => {
        if (isDrawing) {
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
        }
    });

    // Stop drawing on mouse up
    canvas.addEventListener('mouseup', () => {
        isDrawing = false;
    });

    // Clear the canvas
    document.getElementById('clear').addEventListener('click', () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    });

    // Save the signature as an image
    document.getElementById('save').addEventListener('click', () => {
        const dataURL = canvas.toDataURL('image/png');
        const link = document.createElement('a');
        link.href = dataURL;
        link.download = 'signature.png';
        link.click();
    });
};
</script>
<script>
contactFormSubmitted = <?php echo json_encode($contactFormSubmitted); ?>;

if (contactFormSubmitted) {
    const element = document.getElementById("contact-form");
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    }
}

membershipFormSubmitted = <?php echo json_encode($membershipFormSubmitted); ?>;

if (membershipFormSubmitted) {
    const element = document.getElementById("membership-form");
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'end'
        });
    }
}
</script>
</body>

</html>