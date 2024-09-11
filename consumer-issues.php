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
    <title>Consumer Issues - Consumer Protection Bureau (CPB)</title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="header d-md-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  py-2">
                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="d-flex align-items-center contact-details">
                            <div class="d-flex align-items-center me-2">
                                <i class="bi bi-telephone-fill me-2"></i>
                                <a href="tel:+44 (0)2035854002"> +44
                                    (0)2035854002</a>
                            </div>
                            <div class="d-flex align-items-center ms-2">
                                <i class="bi bi-envelope-fill me-2"></i>
                                <a href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk
                                </a>
                            </div>
                        </div>

                        <div class="text-white social-icon">
                            <!-- Facebook -->
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #3b5998;"
                                href="https://web.facebook.com/people/Consumer-Protection-Bureau/100089017255764/"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #55acee;"
                                href="https://x.com/i/flow/login?redirect_after_login=%2Fconsume60578813"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Linkedin -->
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #0082ca;"
                                href="https://www.linkedin.com/in/consumer-protection-bureau-595632261/"
                                role="button"><i class="fab fa-linkedin-in"></i></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-header">
        <nav class="navbar navbar-expand-xl navbar-light ">
            <div class="container menu-header-container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/Logo - Source File.png" alt class="img-fluid ">
                </a>
                <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="why-choose-us.php">Why Choose Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active-nav" href="consumer-issues.php">Consumer Issues
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog/index.php">Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archive.php">Archive
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="membership.php">membership
                            </a>
                        </li>
                        <li class="nav-item pb-xl-0 pb-3">
                            <a class="nav-link" href="contact.php">Contact
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

    </div>
    <main>


        <section class="py-lg-5 py-4 bg-light about-hero">
            <div class="container">
                <div class="row justify-content-center align-items-start">
                    <div class="col-lg-10 mx-auto ">
                        <h1 class="main-heading text-center text-uppercase  mt-2">
                            Consumer Issues
                        </h1>
                        <p class="text-md text-center">
                            As an independent non-governmental organisation,
                            CPB stands as your advocate in safeguarding consumer rights and ensuring
                            fair business practices. We are dedicated to empowering you by helping assert
                            your statutory rights and providing effective remedies when needed.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-lg-5 pb-4 bg-light position-relative " style="z-index: 1;">
            <div class="container pb-5 ">
                <div class="row mb-lg-0 mb-4" id="consumer-rights">
                    <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 ">
                        <div class="service-white-card service-card py-lg-5 py-3">

                            <h2 class="text-start">Consumer Rights</h2>
                            <p class="text ">
                                The law protects your consumer rights when you buy goods or services.

                                You can get help if you’re treated unfairly or when things go wrong. below are the
                                issues that we can help you with:
                            </p>
                            <ul class="issues-list">
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Credit and store cards
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Faulty goods
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Counterfeit goods
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Poor service
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Contracts
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Builders
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Rogue traders
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center order-lg-2 order-1">
                        <img src="assets/images/aminities/Justice-amico.png" alt=""
                            class="consumer-img  object-fit-contain">
                    </div>
                </div>
                <div class="row  mb-lg-0 mb-4" id="online-shopping">
                    <div
                        class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                        <img src="assets/images/aminities/Online shopping-amico.png" alt=""
                            class="consumer-img  object-fit-contain">
                    </div>
                    <div class="col-lg-8 px-0 bg-white ">
                        <div class="service-white-card service-card py-lg-5 py-3">

                            <h2 class="text-start">Online Shopping</h2>
                            <p class="text ">
                                Online Shopping is convenient, but it can be harder to sort out problems, especially if
                                you buy from online locally or internationally.
                                <br>
                                <br>
                                <b>How it works</b><br>
                                Online shopping includes buying things through:
                            </p>
                            <ul class="issues-list">
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Websites or smartphone apps
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Emails
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Text messaging
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Social media
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Daily deal and group buying websites.
                                    </p>
                                </li>
                            </ul>
                            <p class="text mb-0 pb-0">
                                The Fair Trading Act and the Consumer Guarantees Act apply to offers and sales made
                                through all of these channels, except when you buy from a private seller.
                                When you buy something online, you and the seller have entered into a contract
                                electronically. You're bound by the same rules and laws as if you received a paper
                                contract.


                            </p>
                        </div>
                    </div>

                </div>
                <div class="row  mb-lg-0 mb-4" id="tips-for-buy-vehical">
                    <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 ">
                        <div class="service-white-card service-card py-lg-5 py-3">

                            <h2 class="text-start">Tips for Buying Vehicles</h2>
                            <p class="text ">
                                In the UK we have strong consumer law, and if you’ve bought a new car, you’re well
                                protected by comprehensive legislation. Not everyone knows just how far-reaching this
                                legislation is, though, meaning if a car is faulty, both buyers and dealers can make
                                assumptions that can potentially undermine customer satisfaction.
                            </p>
                            <p class="text">
                                if you signed a contract to buy a blue car with a sunroof and a self-parking system, the
                                car should be blue and come with these features. Adverts for secondhand cars should
                                accurately reflect their condition and features.
                            </p>
                            <p class="text">
                                While secondhand cars bought privately are exempt from the ‘fit for purpose’ and ‘of
                                satisfactory quality’ clauses, if you’ve bought from a dealer and any one of these
                                conditions isn’t met, you have the following options under the Consumer Rights Act:
                            </p>
                            <ul class="issues-list">
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Finding the right car
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Before buying a used car
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Pre-purchase inspections and checks
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Paying for, registering and insuring your car
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Private parking tickets, clamping and towing
                                    </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                        <img src="assets/images/aminities/Vehicle Sale-pana.png" alt=""
                            class="consumer-img  object-fit-contain">
                    </div>
                </div>
                <div class="row  mb-lg-0 mb-4" id="property-renovation-and-repair">
                    <div
                        class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                        <img src="assets/images/aminities/Build your home-amico (1).png" alt=""
                            class="consumer-img  object-fit-contain">
                    </div>
                    <div class="col-lg-8 px-0 bg-white ">
                        <div class="service-white-card service-card py-lg-5 py-3">

                            <h2 class="text-start">Property Renovation and Repair</h2>

                            <ul class="issues-list">
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Emergency repairs Steps to make your building safe and what to check before you
                                        make repairs.
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Estimates and quotes an estimate is a best guess of how much a job might cost.
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Building contracts you must have a written contract for any building work that
                                        costs.
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Plan a renovation Things to check and consider for your building project before
                                        you can start hiring designers.
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Building materials, fixtures and fittings before choosing any materials or
                                        fixtures, talk to your contractor and do your research.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Keeping projects on track when building work is about to start, make sure
                                        everyone knows what is happening.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Communicate for a smooth job Keep things on track with your tradesperson with
                                        regular, open communication.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Sign off and certificates Collect proof that work completed is authorised and
                                        safe.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Dealing with disputes how to resolve issues with a tradesperson and how to take
                                        your dispute further.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Report a tradesperson If you think a tradesperson is unregistered, has behaved
                                        unethically or done a poor job.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Issues after your building work has finished you have rights if things go wrong
                                        – the law provides protection if building work
                                    </p>
                                </li>
                            </ul>


                        </div>
                    </div>

                </div>
                <div class="row  mb-lg-0 mb-4" id="faulty-products">
                    <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 ">
                        <div class="service-white-card service-card py-lg-5 py-3">

                            <h2 class="text-start">Faulty Products</h2>
                            <p class="text ">
                                It's good to know your rights on faulty products.
                                <br>
                                Any products you buy should be of acceptable quality. This means the products should:
                            </p>

                            <ul class="issues-list">
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Be satisfactory in look and finish
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        be free from small faults
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Last for a reasonable time
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        be safe to use
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Do everything they are commonly used for.
                                    </p>
                                </li>

                            </ul>
                            <p class="text mt-3">
                                These factors are used to test whether a reasonable person would think a product is
                                faulty or not, taking into account:
                            </p>
                            <ul class="issues-list">
                                <li>
                                    <p class="text">
                                        Who supplied the products, eg an established chain vs flea market trader
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Age and type of products — second-hand products are more likely to show signs of
                                        use and may be less durable


                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Price — poor-quality products are usually cheaper
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Statements made about quality or condition by the salesperson or in advertising.
                                    </p>
                                </li>
                            </ul>
                            <p class="text mt-3">
                                If you are specifically told about any faults when you buy the product, you can’t claim
                                because of them later on.
                            </p>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                        <img src="assets/images/aminities/Product iteration-amico.png" alt=""
                            class="consumer-img  object-fit-contain">
                    </div>
                </div>
                <div class="row  mb-lg-0 mb-4" id="loans-debt-rights">
                    <div
                        class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                        <img src="assets/images/aminities/Money stress-amico.png" alt=""
                            class="consumer-img  object-fit-contain">
                    </div>
                    <div class="col-lg-8 px-0 bg-white ">
                        <div class="service-white-card service-card py-lg-5 py-3">

                            <h2 class="text-start">Loans & Debt Rights</h2>

                            <ul class="issues-list">
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Loans and debt Solve problems when you owe money for loans, fines or if you buy
                                        on credit.
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Payment problems What to do if it's hard to repay loans, credit contracts, fines
                                        and other debt.
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Debt collection and repossession Your options when debt collectors act on
                                        overdue debt from loans, credit contracts or fines.
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Unfair fees Banks and other lenders can charge fees. What's fair and when do
                                        common fees apply?
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        Credit checks, scores and history How credit scores work, the impact of bad
                                        credit, and how to improve your score.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Loans and lenders Secured and payday loans, guarantors and overdrafts.
                                        Understand the best credit options for you.
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Mortgages and home loans Your rights and choices in this common and complicated
                                        financial arrangement, and what to do...
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Guarantors A guarantor repays someone's debts if they don't pay. It's risky, so
                                        know your rights.


                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Bankruptcy and insolvency If you're in serious debt and cannot meet your
                                        repayments, insolvency can be an option....
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        Credit contracts: Plain English definitions Loan documents set out rules you and
                                        your lender must follow until money is repaid...
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        What lenders must do Rules banks and other lenders must follow to make sure
                                        loans and credit are affordable...
                                    </p>
                                </li>
                            </ul>


                        </div>
                    </div>

                </div>
                <div class="row  mb-lg-0 mb-4" id="repair-replace-refund">
                    <div class="col-lg-8 px-0 bg-white order-lg-1 order-2 ">
                        <div class="service-white-card service-card py-lg-5 py-3">

                            <h2 class="text-start">Repair, Replace & Refund</h2>
                            <p class="text ">
                                If a customer has ‘accepted’ an item, but later discovers a fault, you may have to
                                repair or replace it. The customer can still reject the item after it’s been repaired or
                                replaced.
                                <br>
                                A customer has accepted an item if they’ve:
                            </p>

                            <ul class="issues-list">
                                <li>
                                    <p class="text mb-0 pb-2">
                                        told you they’ve accepted it (having had enough opportunity to inspect the item
                                        before confirming they’ve received it)

                                        altered the item
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        You must repair or replace an item if a customer returns it within 6 months -
                                        unless you can prove it was not faulty when they bought it.
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        You can ask a customer to prove an item was faulty when they bought it if they
                                        ask for a repair or replacement after 6 months.
                                    </p>
                                </li>

                        </div>
                    </div>
                    <div
                        class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3 order-lg-2 order-1">
                        <img src="assets/images/aminities/Refund-amico.png" alt=""
                            class="consumer-img  object-fit-contain">
                    </div>
                </div>
                <div class="row" id="scam-safe">
                    <div
                        class="col-lg-4 p-0 bg-light d-flex justify-content-center white-md align-items-center py-lg-0 py-3">
                        <img src="assets/images/aminities/Scared-pana.png" alt=""
                            class="consumer-img  object-fit-contain">
                    </div>
                    <div class="col-lg-8 px-0 bg-white ">
                        <div class="service-white-card service-card py-lg-5 py-3">

                            <h2 class="text-start">Scam Safe</h2>
                            <p class="text">
                                <b>Common financial scams </b>
                            </p>
                            <p class="text">
                                Scams are increasingly sophisticated – but if it sounds too good to be true, it probably
                                is.<br>
                                Scammers will usually call you out of the blue, but contact can also come by email, text
                                message, post, word of mouth or at a seminar or exhibition.<br>
                                Always be wary if you’re contacted unexpectedly, pressured to act quickly or give
                                personal financial details, or promised returns that sound too good to be true.
                            </p>

                            <ul class="issues-list">
                                <li>
                                    <p class="text mb-0 pb-2">
                                        fake FCA emails, letters and phone calls (phishing) pension and investment scams
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        banking and online account scams
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        foreign money transfer scams
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        insurance and warranty schemes
                                    </p>
                                </li>
                                <li>
                                    <p class="text mb-0 pb-2">
                                        loan fee fraud
                                    </p>
                                </li>
                                <li>
                                    <p class="text">
                                        money transfer scams
                                    </p>
                                </li>

                            </ul>


                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-lg-5 py-4 ">
             <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                        <h2 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                        Visit Our Subsidiary Companies
                        </h2>
                  
                </div>
           
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="https://www.compliance-experts.co.uk/" target="_blank" class="text-decoration-none text-dark">
                            <div class="amenity-card d-flex justify-content-center align-items-center flex-column"> 
                                <img
                                    src="assets/images/CRC-logo.png"
                                    alt="CRC logo"   style="width:130px; height:auto;">
                                <h3 class="mt-4 text-center text-md"  style=" font-weight:500;">Compilance and Risk Consultancy</h3>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="https://carehomecompliance.com/" target="_blank" class="text-decoration-none text-dark">
                            <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                                <img
                                    src="assets/images/Care Home Compilance.png"
                                    alt="CHC logo"  style="width:100px; height:auto;">
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
                                    <form method="post"
                                        class="contact-validation-active"
                                        id="contact-form"
                                        novalidate="novalidate">
                                        <div class="half-col">
                                            <label for="Name" class="text-white">Name</label>
                                            <input type="text" name="name"
                                                id="name"
                                                class="form-control"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="half-col">
                                            <label for="phone" class="text-white">Phone Number</label>
                                            <input type="text" name="phone"
                                                id="phone"
                                                class="form-control"
                                                placeholder="Phone">
                                        </div>
                                        <div>
                                            <label for="email" class="text-white">Email</label>
                                            <input type="email" name="email"
                                                id="email"
                                                class="form-control"
                                                placeholder="Email">
                                        </div>



                                        <div>
                                            <label for="msg" class="text-white">Message</label>
                                            <textarea class="form-control"
                                                name="msg" id="msg"
                                                placeholder="Message"></textarea>
                                        </div>
                                        <div class="submit-btn-wrapper">
                                            <button type="submit" name="contact"
                                                class="main-btn">Send</button>
                                            <div id="loader">
                                                <i
                                                    class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
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

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white footer-text" style="background-color: #223a78ef;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <div class="text-uppercase mb-1 font-weight-bold bg-white p-3 rounded-2 mb-lg-0 mb-2">
                            <img src="assets/images/Logo - PNG.png" alt="" class="img-fluid footer-img">
                        </div>
                        <p>
                            BUSINESS HOURS:<br> MONDAY TO FRIDAY 9:00-5:00
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Quick Links</h6>
                        <p>
                            <a href="index.php" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="about.php" class="text-white">About Us</a>
                        </p>
                        <p>
                            <a href="why-choose-us.php" class="text-white">Why Choose Us</a>
                        </p>
                        <p>
                            <a href="contact.php" class="text-white">Contact</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Other
                        </h6>
                        <p class="">
                            <a href="consumer-issues.php" class="text-white">Consumer Issues</a>
                        </p>
                        <p>
                            <a href="blog/index.php" class="text-white">Blog</a>
                        </p>
                        <p>
                            <a href="archive.php" class="text-white">Archive</a>
                        </p>
                        <p>
                            <a href="membership.php" class="text-white">Membership</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p class=""><i class="fas fa-envelope mr-3"></i> <span
                                class="text-sm">info@consumerprotectionbureau.co.uk</span> </p>
                        <p class=""><i class="fas fa-phone mr-3"></i> +44 (0)2035854002</p>
                        <p class=""><i class="fas fa-home mr-3"></i> 83 VICTORIA STREET

                            WESTMINSTER, LONDON,

                            SW1H 0HW</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2024 Copyright:
                            <a class="text-white" href="index.php">CONSUMER PROTECTION BUREAU</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a href="https://web.facebook.com/people/Consumer-Protection-Bureau/100089017255764/"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"
                            target="_blank"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fconsume60578813"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"
                            target="_blank"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a href="https://www.linkedin.com/in/consumer-protection-bureau-595632261/" target="_blank"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-linkedin"></i></a>


                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
         <script src="assets/js/app.js"></script>
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