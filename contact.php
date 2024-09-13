<?php

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

?>

<!doctype html>
<html lang="en">

<head>
    <title>Contact - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="Get in touch with the Consumer Protection Bureau for assistance with consumer complaints and inquiries about UK consumer protection laws. We're here to help protect your rights—contact us today!">
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
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/contact.php">

    <link rel="stylesheet" href="assets/css/style.css">
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
                                    <h2 class="text-lg text-secondry text-uppercase text-center">Contact Form</h2>
                                    <p class="text-white text-center mb-lg-4">Please Fill the form to get in touch
                                        Now.</p>
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