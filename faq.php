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
    <title>Frequently Asked Questions - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content=") Become a member of the Consumer Protection Bureau and gain access to exclusive resources, support for consumer complaints, and expert advice on UK consumer protection laws. Protect your rights with us today.">
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/membership.php">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php include 'assets/include/header.php'; ?>
<main>


    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-10 mx-auto ">
                    <h1 class="main-heading text-center text-uppercase  mt-2">
                        Frequently Asked Questions
                    </h1>
                    <p class="text-md text-center">
                        Have questions about your rights as a consumer? Our FAQ page covers the most frequently asked
                        questions about consumer protection, complaints, and UK regulations. Whether you’re looking for
                        guidance on filing a complaint or understanding consumer protection laws, we’re here to help.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section class="pb-lg-5 pb-4 bg-light position-relative " style="z-index: 1;">
        <div class="container pb-5 ">
            <div class="row mb-lg-0 mb-4" id="faq-1">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center justify-content-center">
                    <div class="service-white-card service-card py-lg-5 py-3 ">

                        <h2 class="text-start">1. What is the Consumer Protection Bureau (CPB)?</h2>
                        <p class="text ">
                            The Consumer Protection Bureau (CPB) is an organisation dedicated to ensuring the
                            protection of consumer rights. We help consumers who have been misled or dissatisfied
                            with products or services, ensuring they receive fair treatment and redress.
                        </p>

                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center order-lg-2 order-1">
                    <img src="assets/images/FAQ/1.png" alt="Consumer Protection Bureau Membership Benefits"
                        class="consumer-img  object-fit-contain">
                </div>
            </div>
            <div class="row  mb-lg-0 mb-4" id="faq-2">
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                    <img src="assets/images/FAQ/2 (2).png" alt="Expert Guidance from Consumer Protection Bureau"
                        class="consumer-img object-fit-contain">
                </div>
                <div class="col-lg-8 px-0 bg-white d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">2. How does the CPB work?</h2>
                        <p class="text">
                            The CPB works by advocating on behalf of consumers who have experienced issues with faulty
                            goods, poor services, misleading claims, shoddy workmanship, or unfair business practices.
                            We mediate between consumers and suppliers, working to resolve disputes through negotiation
                            and, when necessary, pursuing legal action to ensure compliance with consumer laws.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4" id="faq-3">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">3. What benefits does CPB offer to consumers?</h2>
                        <p class="text">
                            As a member of CPB, you benefit from:
                        </p>
                        <ul class="issues-list">
                            <li>
                                <p class="text mb-0 pb-2">
                                    Assistance in obtaining refunds, replacements, or repairs for faulty goods.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Help with claims related to poor services, shoddy workmanship, or misleading
                                    advertisements.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Expert guidance on consumer rights and how to enforce them.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Representation in disputes with traders, manufacturers, retailers, service
                                    providers, and more.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Regular updates on changes in consumer protection laws and regulations.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                    <img src="assets/images/FAQ/3.png" alt="Consumer Protection for Dispute Resolution"
                        class="consumer-img object-fit-contain">
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4" id="faq-4">
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                    <img src="assets/images/FAQ/4.png" alt="Priority Service for Consumer Protection"
                        class="consumer-img object-fit-contain">
                </div>
                <div class="col-lg-8 px-0 bg-white d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">4. How does CPB help consumers with claims?</h2>
                        <p class="text">
                            We support consumers by:
                        </p>
                        <ul class="issues-list">
                            <li>
                                <p class="text mb-0 pb-2">
                                    Investigating the complaint and gathering evidence.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Contacting the trader, manufacturer, or service provider on your behalf.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Negotiating a fair resolution, such as a refund, repair, or replacement.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    If necessary, we take legal action to ensure compliance with consumer protection
                                    laws.
                                </p>
                            </li>

                        </ul>
                        <p class="text">
                            Our team works with both individuals and businesses to resolve claims in line with
                            applicable legislation.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4" id="faq-5">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">5. How much does CPB charge for its services?</h2>
                        <p class="text mb-0 pb-0">
                            <strong>Yearly membership:</strong>
                        </p>
                        <ul class="text mb-0 pb-2">
                            <li><strong>Individuals:</strong> £50</li>
                            <li><strong>Small companies:</strong> £100</li>
                            <li><strong>Medium-sized companies:</strong> £300</li>
                            <li><strong>Large companies:</strong> £1000</li>
                        </ul>
                        <p class="text">
                            <strong>Service charge:</strong> We charge 15% on any refund or compensation successfully
                            recouped from suppliers or service providers on behalf of unsatisfied consumers. This charge
                            applies only when we secure a successful outcome for your claim.
                        </p>
                    </div>
                </div>

                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                    <img src="assets/images/FAQ/5.png" alt="Protect Your Consumer Rights"
                        class="consumer-img object-fit-contain">
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4" id="faq-6">
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                    <img src="assets/images/FAQ/7.png" alt="Priority Service for Consumer Protection"
                        class="consumer-img object-fit-contain">
                </div>
                <div class="col-lg-8 px-0 bg-white d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">6. What kind of complaints can I bring to CPB?</h2>
                        <p class="text">
                            We handle a wide variety of complaints, including:
                        </p>
                        <ul class="issues-list">
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>Faulty goods</strong> (e.g., defective electronics, damaged products)
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>Poor services</strong> (e.g., bad customer service, incomplete repairs)
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>Misleading claims</strong> (e.g., false advertising, misrepresentation)
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>Shoddy workmanship</strong> (e.g., poor construction, inadequate repairs)
                                </p>
                            </li>

                        </ul>
                        <p class="text">
                            Our team works with both individuals and businesses to resolve claims in line with
                            applicable legislation.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4" id="faq-7">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">7. How do I become a member of CPB?</h2>
                        <p class="text mb-0 pb-0">
                            Becoming a member of CPB is easy! Simply visit our website and complete the membership form
                            or contact us by phone or email. The annual membership fee is £10, and once you are a
                            member, you will have access to all of our services and benefits.
                        </p>
                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                    <img src="assets/images/FAQ/6.png" alt="Protect Your Consumer Rights"
                        class="consumer-img object-fit-contain">
                </div>
            </div>


            <div class="row  mb-lg-0 mb-4" id="faq-8">
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                    <img src="assets/images/FAQ/8.png" alt="Priority Service for Consumer Protection"
                        class="consumer-img object-fit-contain">
                </div>
                <div class="col-lg-8 px-0 bg-white d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">8. What laws and regulations does CPB ensure compliance with?</h2>
                        <p class="text">
                            We work within several key pieces of legislation to protect consumer rights, including:
                        </p>
                        <ul class="issues-list">
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>Consumer Rights Act 2015 – </strong> Ensures goods and services meet
                                    acceptable quality standards and that consumers are entitled to refunds, repairs, or
                                    replacements.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>The Consumer Protection from Unfair Trading Regulations 2008 – </strong>
                                    Prohibits misleading and aggressive commercial practices.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>The Sale of Goods Act 1979 – </strong> Provides rights for consumers to
                                    receive goods that are as described, of satisfactory quality, and fit for purpose.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>The Supply of Goods and Services Act 1982 – </strong> Protects consumers in
                                    service contracts, ensuring services are carried out with reasonable care and skill.
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    <strong>The Consumer Contracts Regulations 2013 –</strong>Governs distance selling,
                                    including online purchases, giving consumers the right to cancel within 14 days.
                            </li>
                        </ul>
                        <p class="text">
                            We ensure that traders, manufacturers, wholesalers, retailers, and service
                            providers—including travel agencies, transport services, insurance companies, car dealers,
                            and banks—adhere to these and other relevant laws.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4" id="faq-9">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">9. Who does CPB work with?</h2>
                        <p class="text mb-0 pb-0">
                            CPB works with a wide range of businesses and industries, including:
                        </p>
                        <ul class="issues-list">
                            <li>
                                <p class="text mb-0 pb-2">
                                    Retailers
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Manufacturers
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Wholesalers
                                </p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2">
                                    Service providers (e.g., travel agencies, banks, insurance companies)
                                </p>
                            </li>

                        </ul>
                        <p class="text">
                            We aim to ensure all these parties comply with consumer protection laws to provide fair and
                            transparent services to their customers.
                        </p>
                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                    <img src="assets/images/FAQ/9.png" alt="Protect Your Consumer Rights"
                        class="consumer-img object-fit-contain">
                </div>
            </div>

            <div class="row  mb-lg-0 mb-4" id="faq-10">
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                    <img src="assets/images/FAQ/10.png" alt="Priority Service for Consumer Protection"
                        class="consumer-img object-fit-contain">
                </div>
                <div class="col-lg-8 px-0 bg-white d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">10. What should I do if I have a complaint?</h2>
                        <p class="text">
                            If you have a complaint about faulty goods, poor services, or any other consumer-related
                            issue, please contact us through our website or call to speak to a member of our team. We
                            will guide you through the claims process and work towards a satisfactory resolution.
                        </p>

                    </div>
                </div>
            </div>

            <div class="row mb-lg-0 mb-4" id="faq-11">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">11. How do I file claims with CPB?</h2>
                        <p class="text mb-0 pb-0">Filing a claim with the Consumer Protection Bureau is a
                            straightforward process:</p>
                        <ul class="issues-list list-unstyled ps-3">
                            <li>
                                <p class="text mb-0 pb-2"><strong>1. Gather all necessary documentation</strong></p>
                                <p class="text mb-0 pb-2">Before filing your claim, make sure you have the following
                                    information ready:</p>
                                <ul class="nested-list">
                                    <li>
                                        <p class="text mb-0 pb-2">Proof of purchase (receipts, invoices, order
                                            confirmations)</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">Details of the product or service (including
                                            descriptions, prices, and terms of service)</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">Any communication with the supplier or service
                                            provider (emails, messages, or phone records)</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">Photographs or evidence of faulty goods or poor
                                            services (if applicable)</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>2. Submit your claim to CPB</strong></p>
                                <p class="text mb-0 pb-2">You can file a claim with us through one of the following
                                    methods:</p>
                                <ul class="nested-list">
                                    <li>
                                        <p class="text mb-0 pb-2"><strong>Online:</strong> Visit our website and fill
                                            out the online claims form. You will need to provide details about your
                                            complaint and upload any supporting documents.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2"><strong>By phone:</strong> Call us on 0203 5854002,
                                            and one of our team members will assist you in submitting your claim.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2"><strong>Email:</strong> Send an email to our claims
                                            department, including all the necessary details and supporting documents.
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>3. Claim review process</strong></p>
                                <p class="text mb-0 pb-2">After receiving your claim, our team will:</p>
                                <ul class="nested-list">
                                    <li>
                                        <p class="text mb-0 pb-2">Review the details and verify the documentation.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">Contact you for any additional information if
                                            necessary.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">Reach out to the trader, manufacturer, or service
                                            provider on your behalf to begin negotiations.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>4. Resolution and updates</strong></p>
                                <ul class="nested-list">
                                    <li>
                                        <p class="text mb-0 pb-2">We’ll keep you informed throughout the process and
                                            update you on the progress of your claim.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">Once we reach a resolution, we will arrange for any
                                            refunds, repairs, or compensation you are entitled to.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">If we are successful in recouping compensation, we
                                            charge a 15% fee based on the amount refunded or recovered.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>5. Legal action (if necessary)</strong></p>
                                <p class="text mb-0 pb-2">If negotiations are unsuccessful, we may pursue further action
                                    by using legal avenues to enforce consumer protection laws and obtain a fair
                                    resolution.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                    <img src="assets/images/FAQ/11.png" alt="Protect Your Consumer Rights"
                        class="consumer-img object-fit-contain">
                </div>
            </div>

            <div class="row mb-lg-0 mb-4" id="faq-12">
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-1 order-2">
                    <img src="assets/images/FAQ/12.png" alt="Protect Your Consumer Rights"
                        class="consumer-img object-fit-contain">
                </div>
                <div class="col-lg-8 px-0 bg-white order-lg-2 order-1 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">12. How long does the claims process take?</h2>
                        <p class="text mb-0 pb-0">The length of the claims process can vary depending on the complexity
                            of the case and the response from the trader or service provider. Here’s an outline of the
                            typical timeline:</p>
                        <ul class="issues-list list-unstyled ps-3">
                            <li>
                                <p class="text mb-0 pb-2"><strong>1. Claim Submission</strong></p>
                                <p class="text mb-0 pb-2">Once you submit your claim and paid the membership fee, it
                                    usually takes 2–3 business days for us to review your documentation and begin the
                                    process.</p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>2. Initial Contact with Trader or Provider</strong>
                                </p>
                                <p class="text mb-0 pb-2">After reviewing your claim, we will reach out to the relevant
                                    trader, manufacturer, or service provider within 5–7 business days of receiving your
                                    claim.</p>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>3. Negotiation and Response</strong></p>
                                <ul class="nested-list">
                                    <li>
                                        <p class="text mb-0 pb-2">In straightforward cases, where the trader responds
                                            promptly, disputes can often be resolved within 2–4 weeks. This includes
                                            securing refunds, repairs, or replacements.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">In more complex cases or where there’s a delay in
                                            communication from the business, the process may take up to 6–8 weeks.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>4. Legal Action (if required)</strong></p>
                                <p class="text mb-0 pb-2">If the issue cannot be resolved through negotiation, dispute
                                    resolution and requires further action (such as legal intervention), the process may
                                    extend to several months, depending on the nature of the case and court timelines.
                                </p>
                            </li>
                        </ul>
                        <p class="text">Throughout the process, we will provide regular updates on the status of your
                            claim and any actions being taken. Our goal is to resolve claims as quickly and efficiently
                            as possible while ensuring a fair outcome for you.</p>
                    </div>
                </div>

            </div>
            <div class="row mb-lg-0 mb-4" id="faq-13">
                <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 d-flex align-items-center">
                    <div class="service-white-card service-card py-lg-5 py-3">
                        <h2 class="text-start">13. Can I cancel my CPB membership?</h2>
                        <p class="text mb-0 pb-0">Yes, you can cancel your membership with the Consumer Protection
                            Bureau (CPB) at any time. Here’s how:</p>
                        <ul class="issues-list list-unstyled ps-3">
                            <li>
                                <p class="text mb-0 pb-2"><strong>1. Contact Us</strong></p>
                                <p class="text mb-0 pb-2">To cancel your membership, you can either:</p>
                                <ul class="nested-list">
                                    <li>
                                        <p class="text mb-0 pb-2"><strong>Email:</strong> Email our membership team with
                                            your cancellation request.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2"><strong>Phone:</strong> Call our customer service
                                            line, and one of our representatives will assist you with the cancellation
                                            process.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>2. Refund Policy</strong></p>
                                <ul class="nested-list">
                                    <li>
                                        <p class="text mb-0 pb-2">If you cancel your membership within 14 days of
                                            joining, you are entitled to a full refund of your membership fee.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">If you cancel after 14 days, the membership fee is
                                            non-refundable, but you will still receive the benefits of membership until
                                            the end of your annual term.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="text mb-0 pb-2"><strong>3. Effect of Cancellation</strong></p>
                                <ul class="nested-list">
                                    <li>
                                        <p class="text mb-0 pb-2">Once your membership is cancelled, you will no longer
                                            have access to CPB’s services, including support with consumer claims,
                                            guidance on your rights, or representation in disputes.</p>
                                    </li>
                                    <li>
                                        <p class="text mb-0 pb-2">If you have an active claim with us at the time of
                                            cancellation, we will continue working on it unless you request otherwise.
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p class="text">If you wish to rejoin in the future, you can sign up again by paying the annual
                            membership fee. Feel free to contact us if you have any questions about cancelling your
                            membership!</p>
                    </div>
                </div>
                <div
                    class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                    <img src="assets/images/FAQ/13.png" alt="Protect Your Consumer Rights"
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