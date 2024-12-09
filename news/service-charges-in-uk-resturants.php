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
    <title>Service Charges in UK Restaurants - Consumer Alert News - (CPB)</title>
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/news/service-charges-in-uk-resturants.php">
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
                    <img src="../assets/images/news/service-charges-in-uk-resturants.png"
                        alt="Black Friday & Cyber Monday - Consumer protection bureau" class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            Service Charges in <br class="d-lg-block d-none"> <span class="text-alert">UK
                                Restaurants</span>
                        </h1>

                        <p class="text">
                            Service charges have become a standard feature of dining out in the UK, but many customers
                            remain unclear about their legal obligations when it comes to paying them. Are they
                            compulsory?
                            And what happens if they are not clearly stated on the menu or on display?
                        </p>
                        <h2 class="subtitle-bullet">What UK Law Says</h2>
                        <p class="text">
                            In this article,
                            we provide a breakdown of what UK law says about service charges and
                            cross-reference the relevant sections of the laws to give consumer/diners a clearer
                            understanding of their rights.
                        </p>

                        <h3 class="text-md text-bold text-primary w-700">
                                    What Is a Service Charge?
                                </h3>
                                <p class="text">
                                    A service charge is an additional amount added to a restaurant bill, typically as a
                                    percentage of the total cost of the meal, often ranging from 10% to 15%. This is
                                    distinct from tipping, which is discretionary and left at the customer’s discretion.
                                    Service charges, however, can be automatically added, leaving some diners confused
                                    about whether they have a choice in the matter.
                                </p>
                                <img src="../assets/images/news/uk-resturents-service-charges.jpg"
                        alt="Uk Resturents Service Charges" class="w-100 h-auto">
                                <h3 class="text-md text-bold text-primary w-700 mt-3">
                                    The Legal Framework on Service Charges in the UK
                                </h3>
                                <p class="text">
                                    There is no law in the UK that compels restaurants to charge a service fee. However,
                                    there are specific legal principles and regulations that govern how these charges
                                    should be communicated to customers, and under what circumstances they must be paid.
                                </p>
                                <h3 class="text-md text-bold text-primary w-700">
                                    Transparency and Consumer Protection
                                </h3>
                                <p class="text">
                                    Under the Consumer Protection from Unfair Trading Regulations 2008, restaurants are
                                    required to ensure that any charges added to a bill are clear and transparent.
                                    Section 5 of the regulations states that businesses must not engage in unfair
                                    commercial practices, including failing to disclose important information that could
                                    influence a consumer’s decision to buy a product or service. This means that if a
                                    service charge is added to the bill, it must be clearly stated on the menu, a sign
                                    in the restaurant, or at the point of ordering. If a customer is not informed about
                                    the charge in advance, it could be considered a misleading practice, violating the
                                    regulations.
                                </p>
                              
                                <h3 class="text-md text-bold text-primary w-700">
                                    Compulsory vs. Discretionary Charges
                                </h3>
                                <p class="text">
                                    While restaurants are allowed to add a service charge to bills, they are not allowed
                                    to make it compulsory unless it is explicitly communicated. The Consumer Rights Act
                                    2015 provides further clarity here, particularly in its provisions regarding
                                    “contract terms.” Section 62 of the Act outlines that any terms of a contract (in
                                    this case, the terms of dining at a restaurant) must be clear, fair, and
                                    transparent.
                                </p>
                                <img src="../assets/images/news/service-charges.jpg"
                                alt="Consumer Protection Bureau uk Advices for Resturent UNjustified Service Charges" class="w-100 h-auto">
                                <p class="text mt-3">
                                    If a service charge is optional, the customer should be given the opportunity to
                                    choose whether to pay it or not. If it is mandatory, this must be clearly
                                    communicated ahead of time. If a service charge is not mentioned on the menu or in a
                                    visible location, customers cannot be forced to pay it once they receive the bill.
                                    This protects consumers from hidden costs and ensures that they are aware of all
                                    charges before they agree to dine.
                                </p>
                                <h3 class="text-md text-bold text-primary w-700">
                                    Handling of Service Charge Payments
                                </h3>
                                <p class="text">
                                    Another key concern revolves around the distribution of service charge payments.
                                    While UK law does not mandate how restaurants must handle service charge funds,
                                    there are still rules regarding fair pay for employees. According to the Employment
                                    Rights Act 1996, employees must receive their agreed-upon wages, and if a service
                                    charge is meant to be distributed to staff, it should be done transparently.
                                    Restaurants that fail to pass on service charges to employees could be in breach of
                                    their obligations to fairly compensate workers.
                                </p>
                        <!-- <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                            alt="Consumet Protection Bureau Uk Alert News about Asda Store "
                            class="w-100 asada-image shadow "> -->
                        <div class="row mt-4 mb-4">
                            <div class="col-lg-4 bg-primary text-white order-lg-1 order-2">
                                <h3 class="text-md text-bold mt-3 text-inform">
                                    How CPB Can Help with Unjustified Restaurant Service Charges
                                </h3>
                                <p class="text2 mb-0">
                                    If you encounter any issues with service charges at restaurants, the
                                    <strong>Consumer Protection Bureau (CPB)</strong>
                                    is here to support you. Our goal is to ensure your rights are upheld and you receive
                                    fair treatment. Here's how we can help:

                                </p>
                                <h3 class="text2 text-bold mt-3 text-inform">1. Dispute Resolution</h3>
                                <ul class="text2">
                                    <li><strong>Mediation with Restaurants:</strong> We assist in resolving disputes by
                                        communicating directly with the restaurant on your behalf to clarify or contest
                                        unfair service charges.</li>
                                    <li><strong>Formal Complaints:</strong> If the issue remains unresolved, we guide
                                        you through filing formal complaints to higher authorities or consumer bodies.
                                    </li>
                                </ul>
                                <h3 class="text2 text-bold mt-3 text-inform">2. Legal Guidance</h3>
                                <ul class="text2">
                                    <li><strong>Understanding Your Rights:</strong> We provide clear information about
                                        your rights under the <em>Consumer Protection from Unfair Trading Regulations
                                            2008</em> and the <em>Consumer Rights Act 2015</em>, ensuring you know how
                                        to handle unfair practices.</li>
                                    <li><strong>Challenging Unfair Charges:</strong> If a restaurant imposes a service
                                        charge without disclosure, we help you challenge the validity of the charge
                                        based on legal provisions.</li>
                                </ul>
                                <h3 class="text2 text-bold mt-3 text-inform">3. Refund Assistance</h3>
                                <ul class="text2">
                                    <li><strong>Recovering Unjust Charges:</strong> We work with you to secure refunds
                                        for charges that were applied unfairly or without proper communication.</li>
                                    <li><strong>Ensuring Transparency:</strong> We ensure restaurants follow transparent
                                        policies for refunds and clearly communicate whether service charges are
                                        discretionary or mandatory.</li>
                                </ul>
                                <h3 class="text2 text-bold mt-3 text-inform">4. Consumer Awareness</h3>
                                <ul class="text2">
                                    <li><strong>Educational Resources:</strong> CPB provides easy-to-understand
                                        resources to educate you about restaurant practices and how to avoid common
                                        issues with service charges.</li>
                                    <li><strong>Regular Updates:</strong> Stay informed with our updates on changes to
                                        consumer laws, common unfair practices, and how to handle disputes effectively.
                                    </li>
                                </ul>
                                <h3 class="text2 text-bold mt-3 text-inform">5. Reporting Unethical Practices</h3>
                                <ul class="text2">
                                    <li><strong>Scam Reporting:</strong> If you suspect fraudulent activity or unethical
                                        practices in restaurants, CPB can investigate and report them to the relevant
                                        authorities.</li>
                                    <li><strong>Advocacy for Better Practices:</strong> We advocate for greater
                                        transparency in restaurant billing practices to protect all consumers.</li>
                                </ul>
                                <h3 class="text2 text-bold mt-3 text-inform">Contact Us</h3>
                                <p class="text2">If you’ve experienced unfair service charges or have questions about
                                    your rights, reach out to us:</p>
                                <ul class="text2 ps-0 ms-0">
                                    <li>+44 (0)2035854002</li>
                                    <li><a href="mailto:info@consumerprotectionbureau.co.uk" class="text-whit">info@consumerprotectionbureau.co.uk</a></li>
                                    
                                </ul>

                                <p class="text2">At CPB, we are committed to helping you enjoy your dining experience
                                    without unnecessary stress or unfair treatment. Let us be your partner in ensuring
                                    fairness and transparency in all consumer dealings.</p>


                                <div class="text-center py-3 pb-4">
                                    <a href="../contact.php" class="main-btn">Contact CPB</a>
                                </div>

                            </div>

                            <div class="col-lg-8 order-lg-2 order-1">
                                <!-- <div class="">
                                    <p class="text-lg mb-0 pb-0" style="line-height:30px !important"><b>Essential
                                            Shopping Tips to Keep You Safe and Smart This Black Friday & Cyber
                                            Monday</b></p>
                                </div> -->
                             
                                <h3 class="text-md text-bold text-primary w-700">
                                    What Happens If There’s No Mention of a Service Charge?
                                </h3>
                                <p class="text">
                                    If a service charge is not mentioned at any point before the bill is presented, the
                                    customer is generally not required to pay it. The Unfair Terms in Consumer Contracts
                                    Regulations 1999 protects consumers from unfair or hidden charges in contracts,
                                    making it clear that any charges added to a bill must be disclosed in advance. This
                                    means that if a restaurant adds a service charge without informing the customer
                                    beforehand, it could be seen as an unfair term.
                                </p>
                                <h3 class="text-md text-bold text-primary w-700">
                                    What Should Diners Do?
                                </h3>
                                <p class="text">
                                    If you are ever in doubt about a service charge, always ask the restaurant staff for
                                    clarification. They should be able to explain whether the charge is compulsory or
                                    discretionary. If a service charge is included automatically but was not made clear
                                    on the menu or in the restaurant, you are entitled to challenge it. Simply asking
                                    for it to be removed or reduced is your right, as outlined under the Consumer
                                    Protection from Unfair Trading Regulations 2008.
                                </p>
                                <div class="text shadow-sm rounded-2  p-3 border" style="background-color:#FEE8CF !important;">
                                    While service charges are common in UK restaurants, they are not mandatory unless
                                    explicitly communicated. The law requires transparency, meaning that if a charge is
                                    to be added, it must be made clear to customers at the outset. If a service charge
                                    is not mentioned before the bill is presented, diners are not obliged to pay it.
                                    Understanding these legal protections ensures a fair dining experience and helps
                                    consumers make informed decisions when eating out.
                                </div>

                                <h3 class="text-md text-bold text-primary w-700 mt-3">1. Consumer Protection from Unfair
                                    Trading Regulations 2008</h3>
                                <ul class="text">
                                    <li>This legislation governs the fairness of commercial practices towards consumers.
                                        It requires businesses to provide clear, accurate, and transparent information,
                                        including the total price to be paid by consumers for goods and services.</li>
                                    <li>Section 5 specifically addresses "misleading actions" and "misleading
                                        omissions," meaning businesses must not hide or fail to disclose important
                                        information like service charges. If a service charge is applied, it must be
                                        clearly communicated to the consumer before the transaction takes place.</li>
                                    <li>You can find the full text of the regulations here:
                                        <a class="" href="https://www.legislation.gov.uk/uksi/2008/1277/contents/made"
                                            target="_blank">Consumer Protection from Unfair Trading Regulations
                                            2008</a>.
                                    </li>
                                </ul>

                                <h3 class="text-md text-bold text-primary w-700">2. Consumer Rights Act 2015</h3>
                                <ul class="text">
                                    <li>The Consumer Rights Act 2015 sets out the general rules about how businesses
                                        must treat consumers and lays down principles regarding fairness and clarity in
                                        contracts, including restaurant transactions.</li>
                                    <li>Section 62 specifies that contract terms (like the service charge in a
                                        restaurant) must be fair, transparent, and communicated clearly. If a restaurant
                                        includes a service charge, it must make it clear whether it’s compulsory or
                                        discretionary before the customer is bound by the contract (e.g., agreeing to
                                        dine there).</li>
                                    <li>You can access the full text of the Act here:
                                        <a class="" href="https://www.legislation.gov.uk/ukpga/2015/15/contents/enacted"
                                            target="_blank">Consumer Rights Act 2015</a>.
                                    </li>
                                </ul>

                                <h3 class="text-md text-bold text-primary w-700">3. Unfair Terms in Consumer Contracts
                                    Regulations 1999</h3>
                                <ul class="text">
                                    <li>These regulations protect consumers against unfair contract terms, particularly
                                        when they are not transparent or are imposed without clear prior agreement.</li>
                                    <li>Regulation 5 outlines that terms not properly communicated or disclosed to
                                        consumers are deemed unfair and unenforceable. If a service charge is not
                                        disclosed on a menu or prior to presenting the bill, the consumer is not legally
                                        obliged to pay it.</li>
                                    <li>You can access the full text of the regulations here:
                                        <a class="" href="https://www.legislation.gov.uk/uksi/1999/2083/contents/made"
                                            target="_blank">Unfair Terms in Consumer Contracts Regulations 1999</a>.
                                    </li>
                                </ul>

                                <h3 class="text-md text-bold text-primary w-700">4. Employment Rights Act 1996</h3>
                                <ul class="text">
                                    <li>This act ensures that employees are paid fairly for the work they do. While it
                                        doesn’t specifically regulate service charges, it’s relevant when discussing the
                                        distribution of tips and service charges. Employees must be paid at least their
                                        agreed wages, and if service charges are part of that agreement, they must be
                                        handled transparently.</li>
                                    <li>You can access the full text of the Act here:
                                        <a class="" href="https://www.legislation.gov.uk/ukpga/1996/18/contents"
                                            target="_blank">Employment Rights Act 1996</a>.
                                    </li>
                                </ul>

                                <p class="text">By referencing these key regulations, customers can better understand
                                    their rights and take action if they feel they’ve been unfairly charged. Always
                                    ensure service charges are clearly displayed or mentioned before your bill is
                                    presented, as required by the <strong>Consumer Protection from Unfair Trading
                                        Regulations 2008</strong> and the <strong>Consumer Rights Act 2015</strong>.</p>

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