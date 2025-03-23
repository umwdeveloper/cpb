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
    <title>World Consumer Rights Day 2025 - Consumer Alert
        News - (CPB)
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
                <div class="col-lg-10 mx-auto   p-0" style="background-color:#FEE8CF ;">
                    <img src="../assets/images/news/bitcoin-scam-and-fake-reviews.png" alt="" class="w-100 h-auto">

                    <div class="px-lg-5 px-3">
                        <h1 class="news-heading text-uppercase  my-3">
                            <!-- <span class="text-lg">THE FINANCIAL OMBUDSMAN SERVICE: </span> <br> -->
                            <span class="text-alert">How Trustpilot’s Lax Policies Are Costing Consumers Millions</span>
                        </h1>
                        <p class=" text-gray text2">(24/03/2025)</p>

                        <p class="text ">
                            Bitcoin, once hailed as the future of finance, has become a breeding ground for scams that
                            exploit unsuspecting investors. Many individuals, drawn by the promise of high returns and
                            financial freedom, have poured their hard-earned money into fraudulent schemes, only to end
                            up losing everything. Making matters worse, online review platforms like <b>Trustpilot</b>
                            have
                            played an unintended role in enabling these scams by allowing <b>unchecked and fake
                                reviews</b> to
                            mislead potential victims.
                        </p>

                        <div class="row  mb-4">


                            <div class="col-lg-12">

                                <h3 class="text-md-l text-bold  text-primary w-700 text-start ">
                                    How Bitcoin Scams Operate
                                </h3>
                                <p class="text">
                                    Bitcoin scams often follow a similar pattern:
                                </p>


                                <ol>
                                    <li>
                                        <p class="text">
                                            <b> Too-Good-to-Be-True Promises</b> – Scammers advertise investment
                                            opportunities claiming to offer massive profits with little to no risk.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            <b>Fake Testimonials and Reviews</b> – Fraudulent schemes use fabricated
                                            customer reviews on platforms like Trustpilot to build credibility and
                                            attract more victims.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            <b>Initial Payouts to Gain Trust</b> – Some scams pay small amounts to early
                                            investors to create an illusion of legitimacy before disappearing with
                                            larger sums.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            <b>Sudden Collapse</b> – When enough victims have been lured in, the scheme
                                            collapses, leaving investors with empty wallets and no recourse.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text">
                                    Many people, hoping to capitalise on the <b>Bitcoin boom</b>, fall into these traps,
                                    only to realise too late that their money is gone.
                                </p>

                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    Trustpilot’s Role in the Problem
                                </h3>
                                <p class="text">
                                    Trustpilot, a well-known online review platform, is meant to help consumers make
                                    informed decisions. However, its <b>lax verification process</b> has allowed
                                    scammers to
                                    flood the platform with <b>fake positive reviews</b>, making fraudulent investment
                                    schemes
                                    appear trustworthy.
                                </p>
                                <p class="text">
                                    <b>How Fake Reviews Mislead Investors:</b>
                                </p>
                                <ol>
                                    <li>
                                        <p class="text">
                                            <b> False Sense of Security:</b> When potential investors see thousands of
                                            positive Trustpilot reviews, they assume the company is legitimate.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            <b>Influencing Decision-Making:</b> Many consumers rely on Trustpilot as a
                                            trusted source, not realising that many reviews are manipulated or paid for.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            <b>Suppressing Genuine Complaints:</b> Some victims report that their
                                            <b>negative reviews are removed</b>, making it even harder to warn others
                                            about scams.
                                        </p>
                                    </li>
                                </ol>
                                <p class="text">
                                    Instead of <b>protecting consumers</b>, Trustpilot’s unchecked review system has
                                    <b>helped</b> scammers maintain their deception.
                                </p>

                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    Real Victims, Real Losses
                                </h3>

                                <p class="text">
                                    Countless individuals have fallen for Bitcoin scams, losing life savings in the
                                    process. Many victims share a similar story: they found a “highly rated” investment
                                    opportunity on <b>Trustpilot</b>, deposited funds, and initially saw small
                                    returns—only to
                                    later discover they couldn’t withdraw their money.
                                </p>
                                <p class="text">
                                    By the time they realised the truth, the scammers had vanished, and Trustpilot’s
                                    <b>high-rated</b> reviews had only fuelled their trust in the fraudulent scheme.
                                </p>


                                <div class="text shadow-sm rounded-2  p-3 border bg-gold">
                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    How to Protect Yourself from Bitcoin Scams
                                </h3>
                                <p class="text">
                                    With scammers becoming more sophisticated, it’s crucial to take extra precautions
                                    before investing in Bitcoin or any cryptocurrency platform.
                                </p>
                                <p class="text">
                                    <b>Steps to Stay Safe:</b>
                                </p>
                                <ul class="mb-0">
                                    <li class="text">
                                        <p class="text">
                                            <b>Research Independently</b> – Never rely solely on Trustpilot reviews;
                                            cross-check information with <b>independent sources</b>.
                                        </p>
                                    </li>
                                    <li class="text">
                                        <p class="text">
                                            <b>Be Sceptical of High Returns</b> – If an investment promises guaranteed
                                            or <b>extremely high</b> profits, it’s likely a scam.
                                        </p>
                                    </li>
                                    <li class="text">
                                        <p class="text">
                                            <b>Verify the Company’s Legitimacy</b> – Check if the company is
                                            <b>regulated by financial authorities</b> in your country.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            <b>Look for Complaints</b> – Search forums and official consumer protection
                                            websites for <b>scam warnings.</b>
                                        </p>
                                    </li>
                                </ul>
</div>

                              

                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    The Need for Stricter Oversight
                                </h3>
                                <p class="text">
                                    As Bitcoin scams continue to rise, platforms like <b>Trustpilot must be held
                                        accountable</b> for enabling fraud through <b>fake reviews</b>. More rigorous
                                    verification processes are needed to:
                                </p>
                                <ul>
                                    <li>
                                        <p class="text">
                                            <b> Detect and Remove Fake Reviews</b> before they mislead consumers.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            <b> Allow Transparency</b> by ensuring negative reviews are not unfairly
                                            removed.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text">
                                            <b>Cooperate with Regulators</b> to help identify fraudulent businesses.
                                        </p>
                                    </li>
                                </ul>
                                <p class="text">

                                    Without these changes, consumers will continue to fall victim to deceptive schemes
                                    <b>promoted through Trustpilot’s unchecked review system.</b>

                                </p>

                                <p class="text">
                                    Bitcoin scams have robbed thousands of their savings, and platforms like
                                    <b>Trustpilot
                                        have unknowingly contributed</b> to the problem by hosting <b> fake, misleading
                                        reviews.</b>
                                    While cryptocurrency can be a legitimate investment, fraudsters exploit <b>trust and
                                        lack</b> of regulation to deceive the public.
                                </p>

                                <p class="text">
                                    Consumers must be cautious, conduct thorough research, and question <b>overly positive
                                    reviews</b> before making investment decisions. At the same time, review platforms must
                                    take greater responsibility to prevent fraud and protect users from falling into
                                    financial ruin.
                                </p>

                                <p class="text">
                                    <b>Your best protection? Stay informed, stay sceptical, and never trust a review blindly.</b>
                                </p>


                             
                                <h3 class="text-md-l text-bold text-primary w-700 mt-4">
                                    Stay Informed with CPB
                                </h3>
                                <p class="text">
                                    Follow CPB for the latest updates, advocacy efforts, and consumer guidance on
                                    sustainability. Visit our website or engage with us on social media.
                                </p>
                                <ul class="text  ms-0 list-unstyled">
                                    <li><b>Email: </b> <a href="mailto:compliance@trustpilot.com"
                                            class="">info@consumerprotectionbureau.co.uk</a></li>
                                    <li>
                                        <b>Landline Telephone:</b>+44 (0)2035854002
                                    </li>

                                </ul>
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