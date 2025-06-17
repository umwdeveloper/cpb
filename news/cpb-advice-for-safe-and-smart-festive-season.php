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
    <title>Stay Safe and Smart This Festive Season with CPB | Consumer Protection Advice
    </title>
    <meta name="description"
        content="Stay safe this festive season with CPB. Get expert advice on shopping smart, avoiding scams, and protecting your consumer rights.">
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
        href="https://www.consumerprotectionbureau.co.uk/news/cpb-advice-for-safe-and-smart-festive-season.php">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php include 'assets/include/header.php'; ?>
<main class="baskervville-regular">

    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto bg-gold p-0">
                    <img src="../assets/images/news/festive-season.png" alt="Merry Crismis shopping tips"
                        class="w-100 h-auto">

                    <div class="px-lg-5 px-3">
                        <h1 class="news-heading text-primary  my-3 baskervville-regular">

                            CPB Advice for a Safe and Smart Festive Season
                            </span>
                        </h1>
                        <p class="text " >
                            <b>At the Consumer Protection Bureau (CPB), we want to ensure your festive season is filled
                            with joy, not financial stress or disappointment. Christmas and New Year sales are a great
                            opportunity for deals, but they also come with risks like overspending and scams. Follow our
                            practical advice to shop smart, protect your money from scams, and enjoy a stress-free
                            holiday season.</b>
                        </p>

                        <div class="row mt-4 ">
                            <div class="col-lg-12 mb-4">
                                <img src="../assets/images/news/holiday-tips1.jpg"
                                    alt="Festive shopping tips with a budget checklist and gift items on a table."
                                    class="w-100  shadow rounded-2  mb-3" style="border: 2px solid #223a78">
                            </div>
                            <div class="col-lg-8 ">
                                <ol>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Create a Festive
                                            Budget and Stick to It</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Plan your expenses, including gifts, food, travel, and decorations.</li>
                                            <li>Set a realistic budget for each category and avoid dipping into savings.
                                            </li>
                                            <li>Use budgeting tools or apps to monitor your spending.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Make a Shopping
                                            List and Prioritise Needs Over Wants</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Write down essential purchases and stick to your list.</li>
                                            <li>Resist emotional marketing tactics designed to encourage impulse buys.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Start Early to
                                            Avoid Last-Minute Panic Buying</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Prices tend to rise closer to Christmas and New Year.</li>
                                            <li>Early shopping gives you time to compare prices and secure better deals.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Stay Alert to
                                            Festive Season Scams</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Be cautious with offers that seem too good to be true.</li>
                                            <li>Shop only on trusted websites with secure payment gateways (look for
                                                'https').
                                            </li>
                                            <li>Avoid clicking on suspicious links or responding to phishing emails.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Compare Prices
                                            Across Retailers</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Don’t trust discounts at face value; compare prices across multiple
                                                platforms.
                                            </li>
                                            <li>Use reliable price comparison tools to verify savings.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Know Your Consumer
                                            Rights and Retailer Policies</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Understand return, exchange, and refund policies before making a
                                                purchase.</li>
                                            <li>Check warranty terms for electronics and appliances.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Support Local
                                            Businesses</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Shopping locally supports small businesses and often ensures better
                                                customer
                                                service.</li>
                                            <li>Look for unique, handcrafted gifts from local artisans.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Manage Credit Card
                                            Spending Responsibly</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Credit cards can make overspending easy—stay within your budget.</li>
                                            <li>Pay off your credit card bills on time to avoid interest charges.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Stay Cyber-Secure
                                            While Shopping Online</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Use h3, unique passwords for your shopping accounts.</li>
                                            <li>Enable two-factor authentication.</li>
                                            <li>Avoid shopping on public Wi-Fi networks.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Plan Financially
                                            for the New Year</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Set realistic financial goals for the coming year.</li>
                                            <li>Start a savings plan to recover from festive expenses.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Avoid Counterfeit
                                            Goods</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Verify the authenticity of luxury products and branded items.</li>
                                            <li>Check product reviews and seller ratings.</li>
                                        </ul>
                                    </li>
                                    <li class="mb-5">
                                        <h3 class="text-md text-bold  text-festive w-700 text-start ">Protect Your
                                            Personal Information</h3>
                                        <ul style="list-style:initial !important;" class="mb-2">
                                            <li>Share only necessary details when making purchases.</li>
                                            <li>Be cautious of promotional offers requiring sensitive data.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>


                            <div class="col-lg-4 mt-3  order-lg-1 order-2 mb-4">
                                <div class="px-3 py-3 rounded-2 bg-primary text-white order-lg-1 order-2 ">
                                    <h3 class="text-md text-bold  text-inform baskervville-regular"><b>
                                            How CPB Can Help
                                        </b>
                                    </h3>
                                    <p class="text2 mb-0">
                                        If you encounter issues during the festive season, such as scams, fraudulent
                                        transactions, or disputes with retailers, CPB is here to support you. Here's how
                                        we can assist:
                                    </p>
                                    <ul class="ps-3">
                                        <li>
                                            <strong>Reporting Scams and Fraudulent Activity:</strong> Our team can guide
                                            you on how to report scams, recover lost funds, and prevent further loss.
                                        </li>
                                        <li>
                                            <strong>Understanding Your Rights:</strong> We provide clear advice on your
                                            consumer rights, including return, refund, and warranty policies, to help
                                            you resolve disputes.
                                        </li>
                                        <li>
                                            <strong>Trusted Retailer Verification:</strong> Not sure if a website or
                                            seller is legitimate? CPB can help verify the credibility of retailers and
                                            ensure your shopping is safe.
                                        </li>
                                        <li>
                                            <strong>Complaint Resolution:</strong> For unresolved complaints, we act as
                                            an intermediary between consumers and businesses to achieve fair outcomes.
                                        </li>
                                    </ul>


                                    <h3 class="text-md text-bold  text-inform baskervville-regular"><b>
                                            Final Thought from CPB:
                                        </b>
                                    </h3>
                                    <p class="text2 mb-0">
                                        The festive season should be about creating cherished memories, not dealing with
                                        financial regrets or scams. Follow these tips to shop confidently, stay safe,
                                        and make the most of the holidays.
                                    </p>

                                    <h3 class="text-md text-bold  text-inform mt-3 baskervville-regular"><b>
                                            We Are Here:</b>
                                    </h3>
                                    <p class="text2 mb-0">
                                        For advice, assistance, or to report any scams or fraudulent activity, contact
                                        the <b>Consumer Protection Bureau (CPB)</b>. We are here to help ensure your
                                        festive season stays joyful and secure.
                                    </p>

                                    <h3 class="text-md text-bold  text-inform mt-3 baskervville-regular"><b>Contact Us
                                            Today:</b>
                                    </h3>
                                    <ul class="text2 ps-0 ms-0 list-unstyled">
                                        <li>+44 (0)2035854002</li>
                                        <li><a href="mailto:info@consumerprotectionbureau.co.uk"
                                                class="text-white">info@consumerprotectionbureau.co.uk</a></li>

                                    </ul>
                                    <p class="text2">
                                        Your trust and satisfaction are our top priorities. Don’t hesitate to get in
                                        touch—we’re here to ensure you receive the support and justice you deserve.


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


<div class="modal" tabindex="-1" id="chrismas">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent shadow-none border-0">

            <div class="modal-body">
                <div class="d-flex justify-content-end">
                <button type="button" class="chrismas-close text-end ms-auto" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <img src="../assets/images/chrismas.png" alt="Merry Chrismas from Conumer Protection Bureau"
                    class="img-fluid ps-lg-4 d-lg-block d-none">
            </div>

        </div>
    </div>
</div>

<script>
// Show the modal on page load
document.addEventListener("DOMContentLoaded", function() {
    const pageLoadModal = new bootstrap.Modal(document.getElementById('chrismas'));
    pageLoadModal.show();
    setTimeout(() => {
    pageLoadModal.hide();
}, 4000); // Show modal after 3 seconds
});

</script>


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