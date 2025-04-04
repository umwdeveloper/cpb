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
    <title>How Their Actions Can Be Detrimental to Consumers
    </title>
    <meta name="description"
        content="Explore how consumer watchdogs are losing their bite in protecting consumer rights. Learn what this shift means for you and how to stay informed.">
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
    <link rel="canonical"
        href="https://www.consumerprotectionbureau.co.uk/news/adgm-fines-wazim-nazir-following-consumer-protection-bureau-intervention.php">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php include 'assets/include/header.php'; ?>
<main class="">

    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto bg-gold p-0">
                    <img src="../assets/images/news/credit-agencies.png" alt="CREDIT RATING AGENCIES" class="w-100 h-auto">

                    <div class="px-lg-5 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            <span class="text-lg">CREDIT RATING AGENCIES: </span> <br>
                            <span class="text-alert">WHEN THE WATCHDOGS BITE THE CONSUMERS THEY SHOULD PROTECT</span>
                        </h1>
                        <!-- <p class=" text-gray text2">(10/03/2025)</p> -->
                        <!-- <h2 class="subtitle-bullet w-700">Is Trustpilot Silencing Negative Reviews?</h2>
                        <h2 class="subtitle-bullet w-700">What Consumers Need to Know </h2> -->
                        <p class="text ">
                            <b> In the intricate web of modern financial systems, UK credit rating agencies like
                                Equifax, Experian, and TransUnion wield enormous power over consumers' financial lives.
                                What happens when these institutions, designed to assess creditworthiness, become tools
                                that unfairly penalise legitimate consumer actions? Recent cases under Consumer
                                Protection Bureau (CPB) investigation highlight this troubling dynamic.
                            </b>
                        </p>

                        <div class="row mt-4 mb-4">
                            <!-- <div class="col-md-12">
                                <img src="../assets/images/news/trustpilot.png"
                                    alt="Are Trustpilot Reviews Truly Unbiased? "
                                    class="w-100  shadow rounded-2  mb-3 h-100" style="border: 2px solid #223a78">
                            </div> -->
                            <h2 class="subtitle-bullet w-700"> When Standing Up for Your Rights Gets You Blacklisted
                            </h2>
                            <!-- <h3 class="text-md-l text-bold  text-primary w-700 text-start ">
                            Understanding the Role of Credit Agencies
                                </h3> -->
                            <p class="text ">
                                <b>Consider this scenario:</b> a consumer notices unjustified price hikes from their water
                                supplier and exercises their right to pause direct debit payments while disputing the
                                charges. Rather than viewing this as a legitimate consumer dispute, Experian, One of the three major credit agencies,  flags this
                                action with a negative mark on their credit report. The consequences are immediate and
                                severe—their bank denies them loans despite their demonstrable ability to repay.
                            </p>
                            <p class="text">
                                This case illustrates a fundamental imbalance in our financial system. Credit agencies
                                operate with minimal oversight yet possess the power to drastically impact consumers'
                                financial futures based on reports from service providers without thorough investigation
                                of the circumstances.
                            </p>

                            <h3 class="text-md-l text-bold  text-primary w-700 text-start ">
                                The Structural Problems with Credit Rating Systems
                            </h3>

                            <p class="text">
                                Several key issues plague the current UK credit rating system:
                            </p>
                            <ol class="ps-4 ms-4 mb-0">
                                <li>
                                    <p class="text">
                                        <b> Unilateral Decision-Making:</b> Credit agencies can apply negative ratings
                                        without adequately investigating disputes between consumers and service
                                        providers.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        <b> Power Imbalance:</b> Companies can effectively weaponise credit reports
                                        against consumers who challenge their practices.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        <b> Limited Recourse:</b> Consumers face an uphill battle when trying to correct
                                        inaccurate information, with bureaucratic processes that can take months to
                                        resolve.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        <b> Opacity of Systems:</b> Many consumers remain unaware of how credit scoring
                                        works or what actions might trigger negative reports.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        <b> Disproportionate Consequences:</b> Minor payment disputes can result in
                                        years of impaired credit access, affecting everything from mortgage applications
                                        to employment opportunities.
                                    </p>
                                </li>

                            </ol>
                            <div class="col-lg-12">
                                <h3 class="text-md-l text-bold  text-primary w-700 text-start ">
                                    The Need for Regulatory Reform
                                </h3>
                                <p class="text">
                                    The UK financial regulatory framework needs significant strengthening to address
                                    these imbalances. The Financial Conduct Authority (FCA), Competition and Markets
                                    Authority (CMA), and Financial Ombudsman Service should consider:
                                </p>
                                <ul>
                                    <li>
                                        <p class="text">
                                            Requiring credit agencies to implement fair dispute resolution processes
                                            before applying negative marks
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            Limiting the impact of single disputes on overall credit scores, especially
                                            when related to contested charges
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            Creating faster, more accessible remediation processes for consumers
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            Implementing stronger penalties for companies that misuse credit reporting
                                            systems as leverage in disputes
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            Mandating greater transparency in how credit scores are calculated and
                                            applied
                                        </p>
                                    </li>
                                </ul>



                                <div class="text shadow-sm rounded-2  p-3 border"
                                    style="background-color:#FEE8CF !important;">
                                    <h3 class="text-md-l text-bold text-primary w-700">
                                        What Consumers Can Do Now
                                    </h3>
                                    <p class="text">
                                        While systemic change is needed, UK consumers can take steps to protect
                                        themselves:
                                    </p>
                                    <ol>
                                        <li>
                                            <p class="text">
                                                Document all communications with service providers
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                                Submit formal complaints to both the company and relevant regulatory
                                                bodies
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                                Request your credit reports regularly to monitor for unfair markings
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                                Consider contacting your MP to raise awareness of these issues
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text">
                                                Join consumer advocacy groups such as CPB, that are fighting for credit reporting
                                                reform
                                            </p>
                                        </li>
                                    </ol>

                                </div>


                                <p class="text mt-4">
                                    Cases currently under CPB investigations represent just one example of how UK
                                    credit reporting agencies can become tools of consumer control rather than fair
                                    arbiters of creditworthiness. As more such cases come to light, the pressure for
                                    meaningful reform will continue to build.
                                </p>
                                <p class="text">
                                    Only through robust regulatory action can we ensure that UK credit rating systems
                                    serve their intended purpose of facilitating fair access to credit—rather than
                                    becoming weapons that silence legitimate consumer disputes and unfairly restrict
                                    financial opportunities.
                                </p>
                                <div class="py-3 pb-4">
                                    <a href="../contact.php" class="main-btn">Contact CPB</a>
                                </div>

                            </div>

                            <!-- <div class="col-lg-4 mt-3  order-lg-1 order-2">
                                <div class="px-3 py-3 rounded-2 bg-primary text-white order-lg-1 order-2 ">
                                    <h3 class="text-md text-bold  text-inform baskervville-regular"><b>
                                            Need Assistance or Have Questions?
                                            Contact Us
                                        </b>
                                    </h3>
                                    <p class="text2 mb-0">
                                        At the Consumer Protection Bureau, we are dedicated to safeguarding consumer
                                        rights and promoting fairness across all industries. If you believe you have
                                        been affected by unfair practices or need guidance in navigating consumer rights
                                        issues, our team is here to assist you.
                                    </p>
                                    <p class="text2">
                                        Whether it's related to financial misconduct, fraud prevention, or disputes with
                                        businesses, we provide expert advice and hands-on support to ensure your
                                        concerns are addressed effectively.
                                    </p>
                                    <h3 class="text-md text-bold  text-inform mt-3 baskervville-regular"><b>How We Can
                                            Help:</b>
                                    </h3>
                                    <ul class="ps-0 ms-3">
                                        <li>
                                            <p class="text2 mb-0 pb-0">
                                                <b>Report Issues:</b> Share details about your experience, and we’ll
                                                investigate potential violations.

                                            </p>
                                        </li>

                                        <li>
                                            <p class="text2 mb-0 pb-0">
                                                <b> Claim Assistance:</b> If you’ve been financially impacted, we can
                                                help guide you through filing claims.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text2 mb-0 pb-0">
                                                <b>Guidance on Rights:</b> Understand your rights as a consumer and the
                                                actions you can take.

                                            </p>
                                        </li>
                                        <li>
                                            <p class="text2 mb-0 pb-0">
                                                <b>Support in Disputes:</b> Our specialists can mediate disputes between
                                                you and businesses or entities.

                                            </p>
                                        </li>
                                    </ul>
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

                            <div class="col-lg-8 order-lg-2 order-1">

                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    CPB's Role in Exposing the Fraud
                                </h3>
                                <p class="text">
                                    This case came to light only after the <b>Compliance and Risk Consultancy (CRC)</b>
                                    group,
                                    through its <b>Consumer Protection Bureau (CPB)</b>, intervened. When <b>Wazim
                                        Nazir, Owner of ACW</b>
                                    sought to
                                    voluntarily wind up HSQ and PL1, <b>CRC raised formal objections </b> and mobilised
                                    affected
                                    property owners to challenge the application. Many owners provided statements and
                                    depositions to ADGM with CPB's assistance, exposing Nazir's misconduct and systemic
                                    violations. Without this organised and strategic push, Nazir and his entities might
                                    have escaped scrutiny entirely.

                                </p>
                                <p class="text">
                                    The ADGM Registration Authority's investigation unveiled Nazir's deliberate
                                    misrepresentation and obstruction, culminating in hefty fines and public censure.
                                    This is not just a victory for justice but also a stark reminder of the power of
                                    unified consumer action when supported by organisations like CPB.
                                </p>
                                <div>
                                    <h3 class="text-md-l text-bold text-primary w-700">Fighting for Consumer Rights and
                                        Justice
                                    </h3>
                                    <p class="text">
                                        While the ADGM decision serves as a critical win, the plight of property owners
                                        at <b> Hanover Square Central and Platinum One (PL1) </b> remains unresolved.
                                        CPB has
                                        identified significant consumer rights violations stemming from the exploitative
                                        <b>Sales and Purchase Agreement (SPA)</b> imposed by ACW, a company owned by
                                        Wazim
                                        Nazir.
                                    </p>
                                    <p class="text">
                                        This SPA binds owners to ACW's management for <b>20 years</b> with no exit
                                        options—a
                                        clause that not only deprives owners of their legal rights but also locks them
                                        into years of financial distress. ACW continues to rent out the apartments
                                        without providing owners with any meaningful <b>Return on Investment (ROI)</b>.
                                        Frustration is widespread: only a small fraction of owners receive minimal
                                        returns, while the majority have suffered losses with no clear remedy in sight.
                                    </p>
                                </div>
                                <div class="">
                                    <h3 class="text-md-l text-bold text-primary w-700">ACW: The Next Battle for Consumer
                                        Rights
                                    </h3>
                                    <p class="text">
                                        While this decision marks progress, the fight is far from over. The property
                                        owners of HSQ and PL1 remain in a dire situation. Their apartments are managed
                                        by ACW, owned by Wazim Nazir, a company operating under a deeply flawed Sales
                                        and Purchase Agreement (SPA). This SPA includes abusive clauses, denying owners
                                        any exit option and binding them to ACW's management for an astonishing 20
                                        years.
                                    </p>
                                    <p class="text">
                                        Most owners are angry and disappointed. Their properties are rented out, yet
                                        they have received little to no ROI for several years. Only a small handful are
                                        receiving minimal returns, which amount to little more than peanuts compared to
                                        market expectations. This untenable situation has shattered trust and further
                                        exacerbated financial losses for already frustrated owners.
                                    </p>


                                </div>



                            </div>

                            <div class="col-lg-12  order-lg-3 order-3">
                                <h3 class="text-md-l text-bold text-primary w-700">CPB Will Take Action</h3>
                                <p class="text">
                                    The Consumer Protection Bureau, as part of the CRC Group, is committed to
                                    ensuring that consumer rights prevail. We are launching a vigorous campaign to
                                    challenge ACW's abusive management practices.
                                </p>

                                <div class="text shadow-sm rounded-2  p-3 border"
                                    style="background-color:#FEE8CF !important;">
                                    <h3 class="text-md-l text-bold text-primary w-700">CPB’s Consumer Rights Campaign
                                    </h3>
                                    <p class="text">
                                        <b>As the consumer protection advocate, CPB will:</b>
                                    </p>
                                    <ol>
                                        <li>
                                            <p class="text mb-0 pb-0">
                                                <b>ACW is ousted</b> as the manager of <b>Hanover Square Central and
                                                    Platinum One (PL1)</b> properties.
                                            </p>
                                        </li>

                                        <li>
                                            <p class="text mb-0 pb-0">
                                                <b>Dubai authorities</b> step in to dismantle exploitative SPAs that
                                                lock owners into long-term, one-sided agreements.

                                            </p>
                                        </li>
                                        <li>
                                            <p class="text mb-0 pb-0">
                                                <b>Property owners</b> take over their apartments as they rightfully
                                                and legally deserve.
                                            </p>
                                        </li>

                                    </ol>

                                </div>
                                <p class="text mt-3">
                                    This case highlights a growing need for stringent oversight, transparent
                                    management
                                    agreements, and stronger consumer protection mechanisms in the UAE property
                                    sector.
                                    CPB will continue working with DLD and other UAE authorities to fight
                                    relentlessly
                                    for fairness, accountability, and justice for all affected property owners.
                                </p>
                            </div> -->

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