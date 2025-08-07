<?php

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

?>

<!doctype html>
<html lang="en">

<head>
    <title>Contact - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Get in touch with the Consumer Protection Bureau for assistance with consumer complaints and inquiries about UK consumer protection laws. We're here to help protect your rights—contact us today!">
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
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/contact.php">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/utils.js"></script>
</head>

<?php include 'assets/include/header.php'; ?>
<main>


    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-10 mx-auto mb-lg-5 mb-3">
                    <h1 class="main-heading text-center text-uppercase  mt-2">
                        <span class="text-scondry">CONTACT</span> Consumer Protection Bureau (CPB)
                    </h1>
                    <p class="text-md text-center">
                        We’d love to hear from you. Just choose the most convenient method and we’ll get back to you
                        as soon as we can.
                    </p>

                </div>
                <div class="col-lg-4">
                    <div class="contact-card mt-4 ">
                        <div class="contact-icon mb-3">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Mobile</h3>
                            <a class="date text-dark" href="tel:+44 (0)2035854002"> +44
                                (0)2035854002</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="contact-card mt-4">
                        <div class="contact-icon mb-3"> <i class="bi bi-geo-alt-fill "></i>
                        </div>
                        <div class="contact-text">
                            <h3>Location</h3>

                            <p class="date my-0 py-0 text-center text-dark">
                                83 VICTORIA STREET<br>

                                WESTMINSTER, LONDON,

                                SW1H 0HW
                            </p>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4">

                    <div class="contact-card mt-4 ">
                        <div class="contact-icon mb-3">
                            <i class="bi bi-envelope-fill "></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <a class="date pb-0 mb-0 text-dark"
                                href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-lg-5 pb-4 bg-light position-relative">
        <div class="container">
            <div class="row position-relative align-items-center white-bg">
                <div class="contact-area bg-white shadow rounded-2 py-lg-4 py-3 px-lg-4 px-2 ">
                    <div class="container ">
                        <div class="row ">
                            <div class="col col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-content ">
                                    <h2 class="text-lg text-secondry text-uppercase text-center">Contact </h2>
                                    <p class="text-white text-center mb-lg-4">Please Contact using Email/Phone Number.
                                    </p>
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
                                            <div class="half-col div-padding">
                                                <label for="Name" class="text-white">Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control form-input"
                                                    placeholder="Your Name" required>
                                                <div class="invalid-feedback">Please enter your name</div>
                                            </div>
                                            <div class="half-col div-padding">
                                                <label for="phone" class="text-white">Phone Number <span
                                                        class="text-danger">*</span></label> <br>
                                                <input type="text" name="phone" id="phone" class="form-control"
                                                    placeholder="Phone" required>
                                                <div class="invalid-feedback">Please enter a valid phone number</div>
                                            </div>
                                            <div class="div-padding">
                                                <label for="email" class="text-white">Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="email" name="email" id="email"
                                                    class="form-control form-input" placeholder="Email" required>
                                                <div class="invalid-feedback">Please enter a valid email address</div>
                                            </div>
                                            <input type="hidden" name="form-contact">
                                            <div class="div-padding">
                                                <label for="msg" class="text-white">Message <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" name="msg" id="msg" rows="5" required
                                                    placeholder="Message (minimum 30 words)"></textarea>
                                                <div class="invalid-feedback">Please enter a message with at least 30
                                                    words</div>
                                            </div>
                                            <div class="g-recaptcha"
                                                data-sitekey="6LeWW5YqAAAAAO7CXW7SvpYQih0o9w_XaILDCy3j"></div>

                                            <div class="submit-btn-wrapper div-padding">
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
            </div>
        </div>
    </section>


    <section class="">
        <div class="col-lg-12">
            <div style="overflow:hidden;resize:none;max-width:100%;width: 100%; height:300px;">
                <div id="my-map-display" style="height:100%; width:100%;max-width:100%;"><iframe
                        style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=83+VICTORIA+STREET+WESTMINSTER,+LONDON,+SW1H+0HW&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                </div><a class="googlecoder" href="https://www.bootstrapskins.com/themes" id="enable-map-info">premium
                    bootstrap themes</a>
                <style>
                #my-map-display .text-marker {}

                .map-generator {
                    max-width: 100%;
                    max-height: 100%;
                    background: none;
                }
                </style>
            </div>
        </div>
    </section>

</main>



<?php include 'assets/include/footer.php'; ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">
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
<script>
const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
    initialCountry: "gb",
    preferredCountries: ["gb", "us"],
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/utils.js",
    separateDialCode: true,
    formatOnDisplay: true,
    autoPlaceholder: "polite"
});

// Form validation
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    let form = this;
    let isValid = true;

    // Reset previous validation states
    form.classList.remove('was-validated');

    // Validate name
    let nameInput = form.querySelector('#name');
    if (!nameInput.value.trim()) {
        // alert("Please enter your name");
        isValid = false;
        nameInput.classList.add('is-invalid');
    }

    // Validate phone
    if (!phoneInputField.value.trim()) {
        // alert("Please enter a phone number");
        isValid = false;
        phoneInputField.classList.add('is-invalid');
    } else if (!phoneInput.isValidNumber()) {
        // alert("Please enter a valid phone number for the selected country");
        isValid = false;
        phoneInputField.classList.add('is-invalid');
    } else {
        // Store the full international number in the form
        phoneInputField.value = phoneInput.getNumber();
    }

    // Validate email
    let emailInput = form.querySelector('#email');
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(emailInput.value.toLowerCase())) {
        // alert("Please enter a valid email address");
        isValid = false;
        emailInput.classList.add('is-invalid');
    }

    // Validate message (minimum 30 words)
    let messageInput = form.querySelector('#msg');
    let wordCount = messageInput.value.trim().split(/\s+/).length;
    if (wordCount < 30) {
        // alert("Please enter a message with at least 30 words");
        isValid = false;
        messageInput.classList.add('is-invalid');
    }

    // Prevent form submission if validation fails
    if (!isValid) {
        event.preventDefault();
        form.classList.add('was-validated');

        // alert(isValid);

        return; // Stop further execution if validation fails
    }

    form.submit(); // Submit the form if all validations pass
});

// Clear validation state when inputs change
document.querySelectorAll('#contact-form input, #contact-form textarea').forEach(input => {
    input.addEventListener('input', function() {
        this.classList.remove('is-invalid');
    });
});
</script>
</body>

</html>