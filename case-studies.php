<?php
include_once "includes/functions.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Case Studies - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name='description'
        content='Explore real-world case studies showcasing how the Consumer Protection Bureau has successfully resolved consumer disputes and protected consumer rights across various industries.' />
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/case-studies.php">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="VTs14Xy/Kdyw0NN4JQulEw" defer="true"></script>

    <style>
        .case-study-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 80px 0 60px;
            margin-top: 0;
        }

        .case-study-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }

        .case-study-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .case-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #28a745;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            z-index: 10;
        }

        .case-category {
            display: inline-block;
            background: #e5bf20;
            color: #223a78;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .case-outcome {
            background: #f8f9fa;
            border-left: 4px solid #28a745;
            padding: 15px;
            margin-top: 15px;
            border-radius: 5px;
        }

        .stats-section {
            background: linear-gradient(135deg, #e5bf20 0%, #c9a71c 100%);
            color: #223a78;
            padding: 50px 0;
        }

        .stat-card {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 700;
            display: block;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 16px;
            font-weight: 500;
        }

        .filter-btn {
            background: white;
            border: 2px solid #223a78;
            color: #223a78;
            padding: 8px 20px;
            margin: 5px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #223a78;
            color: white;
        }

        .timeline-item {
            border-left: 3px solid #e5bf20;
            padding-left: 25px;
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 0;
            width: 15px;
            height: 15px;
            background: #e5bf20;
            border-radius: 50%;
        }

        .impact-icon {
            width: 60px;
            height: 60px;
            background: #223a78;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin: 0 auto 15px;
        }
    </style>
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
                            href="https://web.facebook.com/profile.php?id=61570163952467" aria-label="Facebook"
                            role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <!-- <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #55acee;"
                                href="https://x.com/i/flow/login?redirect_after_login=%2Fconsume60578813" aria-label="Twitter"
                                role="button"><i class="fab fa-twitter"></i></a> -->

                        <!-- Linkedin -->
                        <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                            style="background-color: #0082ca;"
                            href="https://www.linkedin.com/company/consumer-protection-bureau/" aria-label="LinkedIn"
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
            <a class="navbar-brand" href="/">
                <img src="assets/images/Logo - Source File.png" alt="Consumer Protection Bureau Logo"
                    class="img-fluid ">
            </a>
            <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/" aria-current="page">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="#become-ally">Become a Friend</a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link " href="job-opportunties/">Job Opportunties</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="cpb-consumer-champion.php">CPB Champion
                            </a>
                        </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link news-menu" href="news/">Consumer Alert News
                        </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           Media & Insights
                        </a>
                        <ul class="dropdown-menu px-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-link" href="blog/index.php">
                                Blog</a></li>

                            <li><a class="dropdown-item nav-link" href="news/">
                                Consumer Alert News</a></li>
                                 <li><a class="dropdown-item nav-link" href="case-studies.php">
                            Case Studies</a></li>

                        </ul>
                    </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           Alerts & Research
                        </a>
                        <ul class="dropdown-menu px-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-link" href="consumer-alerts.php">
                                Consumer Alerts & Findings</a></li>

                            <li><a class="dropdown-item nav-link" href="research-policy.php">
                                Research & Policy Library</a></li>
                                 <li><a class="dropdown-item nav-link" href="case-patterns.php">
                           Consumer Case Patterns</a></li>

                             <li><a class="dropdown-item nav-link" href="jurisdiction-guides.php">
                           Jurisdiction Guides</a></li>

                        </ul>
                    </li>
                  
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item nav-link" href="blog/index.php">Blog</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Advocacy</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Success Stories</a></li>
                            </ul>
                        </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Get Involved
                        </a>
                        <ul class="dropdown-menu px-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-link" href="cpb-consumer-champion.php">Become a CPB
                                    Champion</a></li>

                            <li><a class="dropdown-item nav-link" href="#become-ally">Become a CPB Ally</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu px-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-link" href="about.php">About</a></li>
                            <!-- <li><a class="dropdown-item nav-link" href="blog/index.php">Blog</a></li> -->
                            <!-- <li><a class="dropdown-item nav-link" href="news/">Consumer Alert News</a></li> -->
                            <li><a class="dropdown-item nav-link" href="advocacy.php">Advocacy</a></li>

                            <li><a class="dropdown-item nav-link" href="archive.php">Archive</a></li>
                            <li>
                                <a class="dropdown-item nav-link" href="consumer-issues.php">Consumer Issues</a>
                            </li>
                            <li><a class="dropdown-item nav-link" href="why-choose-us.php">Why Choose Us</a></li>
                            <li>
                                <a class="dropdown-item nav-link" href="faq.php">FAQ
                                </a>
                            </li>
                            <!-- <li><a class="dropdown-item nav-link" href="#">Success Stories</a></li> -->
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="blog/">Blog
                            </a>
                        </li> -->

                    <!-- <li class="nav-item">
                            <a class="nav-link" href="archive.php">Archive
                            </a>
                        </li> -->

                    <li class="nav-item pb-xl-0 pb-3">
                        <a class="nav-link" href="contact.php">Contact
                        </a>
                    </li>
                    <li class=" pb-xl-0 pb-3 complaint-btn ms-2 text-center" style="">
                        <a class="text-center" href="get-help.php">Get Help
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
                       CPB Case Studies
                    </h1>
                    <p class="text-md text-center">
                        Real stories of how the Consumer Protection Bureau has helped consumers secure justice,
                            obtain refunds, and hold 
                            businesses accountable.
                    </p>

                </div>
               
            </div>
        </div>
    </section>
   

        <!-- Filter Section -->
        <section class="py-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button class="filter-btn active" data-filter="all">All Cases</button>
                        <button class="filter-btn" data-filter="retail">Retail</button>
                        <button class="filter-btn" data-filter="travel">Travel</button>
                        <button class="filter-btn" data-filter="finance">Finance</button>
                        <button class="filter-btn" data-filter="utilities">Utilities</button>
                        <button class="filter-btn" data-filter="automotive">Automotive</button>
                        <button class="filter-btn" data-filter="property">Property</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Studies Grid -->
        <section class="py-5">
            <div class="container">
                <div class="row" id="caseStudiesContainer">
                    <!-- Case Study 1: Car Finance Overcharging -->
                    <div class="col-lg-6 mb-4 case-item" data-category="finance automotive">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Finance & Automotive</span>
                                <h3 class="card-title mt-2 mb-3">£4,500 Refund: Car Finance Overcharging</h3>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved: December
                                    2024</p>
                                <p class="card-text">
                                    A consumer discovered they were charged excessive interest rates on their car
                                    finance agreement through undisclosed commission arrangements. The dealership failed
                                    to inform them that their broker received a commission that artificially inflated
                                    the interest rate.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>The Challenge</h5>
                                    <p>The finance company initially denied any wrongdoing, claiming all paperwork was
                                        signed and terms were clear. The consumer felt trapped in an unfair agreement
                                        with monthly payments £120 higher than comparable market rates.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>CPB's Action</h5>
                                    <p>We conducted a thorough review of the finance agreement, identified breaches of
                                        FCA regulations regarding commission disclosure, and filed a formal complaint
                                        citing consumer protection laws. We escalated to the Financial Ombudsman when
                                        initial responses were inadequate.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Outcome
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Full refund of £4,500 in overcharged interest</li>
                                        <li>Finance agreement restructured at fair market rate</li>
                                        <li>Monthly payments reduced by £120</li>
                                        <li>Compensation for distress: £350</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 2: Holiday Cancellation -->
                    <div class="col-lg-6 mb-4 case-item" data-category="travel">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Travel & Tourism</span>
                                <h3 class="card-title mt-2 mb-3">£3,200 Holiday Refund After Company Refusal</h3>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved: November
                                    2024</p>
                                <p class="card-text">
                                    A family booked a holiday package worth £3,200, but the tour operator cancelled
                                    their trip just two weeks before departure due to "unforeseen circumstances." The
                                    company offered a voucher instead of a refund, despite the cancellation being their
                                    fault.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>The Challenge</h5>
                                    <p>The tour operator insisted vouchers were the only option and threatened to retain
                                        a 40% "admin fee" if the family pursued a refund. Customer service was
                                        unresponsive to emails and calls.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>CPB's Action</h5>
                                    <p>We invoked the Package Travel Regulations 2018, which clearly state consumers
                                        have the right to a full refund when operators cancel. We submitted a formal
                                        legal letter and reported the company to Trading Standards for unfair practices.
                                    </p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Outcome
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Full refund of £3,200 within 10 days</li>
                                        <li>Additional £400 compensation for inconvenience</li>
                                        <li>Company revised its cancellation policy</li>
                                        <li>Written apology issued to the family</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 3: Faulty Washing Machine -->
                    <div class="col-lg-6 mb-4 case-item" data-category="retail">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Retail & Products</span>
                                <h3 class="card-title mt-2 mb-3">£850 Refund for Repeatedly Faulty Appliance</h3>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved: October
                                    2024</p>
                                <p class="card-text">
                                    A consumer purchased a premium washing machine for £850 that developed faults within
                                    six months. Despite three repair attempts, the appliance continued to malfunction.
                                    The retailer refused a replacement or refund, claiming the warranty only covered
                                    repairs.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>The Challenge</h5>
                                    <p>The retailer's position was that they had fulfilled their obligations by
                                        attempting repairs. They argued the Consumer Rights Act didn't entitle the
                                        customer to a refund since they had "tried to fix it."</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>CPB's Action</h5>
                                    <p>We cited the Consumer Rights Act 2015, specifically the right to reject faulty
                                        goods where repairs fail to resolve the issue. We provided evidence of the
                                        repeated faults and demonstrated the goods were not of satisfactory quality.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Outcome
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Full refund of £850 purchase price</li>
                                        <li>Free collection of faulty appliance</li>
                                        <li>£100 goodwill gesture for inconvenience</li>
                                        <li>Retailer updated staff training on consumer rights</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 4: Energy Bill Overcharging -->
                    <div class="col-lg-6 mb-4 case-item" data-category="utilities">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Utilities</span>
                                <h3 class="card-title mt-2 mb-3">£1,200 Energy Bill Correction & Refund</h3>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved: September
                                    2024</p>
                                <p class="card-text">
                                    An elderly consumer was charged £1,200 in incorrect energy bills due to a faulty
                                    meter reading. Despite providing actual meter readings, the supplier continued to
                                    issue estimated bills and threatened debt collection action.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>The Challenge</h5>
                                    <p>The energy company's automated system kept generating incorrect bills. Customer
                                        service representatives promised corrections that never materialized, and the
                                        consumer received threatening letters about debt recovery.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>CPB's Action</h5>
                                    <p>We submitted a formal complaint to the energy supplier with photographic evidence
                                        of meter readings. When this failed, we escalated to the Energy Ombudsman and
                                        reported the company for breaching the Standards of Conduct regulations.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Outcome
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Account corrected with accurate meter readings</li>
                                        <li>£1,200 refund for overcharging</li>
                                        <li>£300 compensation for distress and inconvenience</li>
                                        <li>Smart meter installed free of charge</li>
                                        <li>All debt recovery action cancelled</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 5: Gym Membership Trap -->
                    <div class="col-lg-6 mb-4 case-item" data-category="retail">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Retail & Services</span>
                                <h3 class="card-title mt-2 mb-3">£680 Gym Membership Refund: Unfair Contract Terms</h3>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved: August
                                    2024</p>
                                <p class="card-text">
                                    A consumer signed up for a 12-month gym membership but needed to cancel after 4
                                    months due to a medical condition. The gym refused to cancel, citing their "no
                                    refund" policy and demanded payment for the remaining 8 months (£680).
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>The Challenge</h5>
                                    <p>The gym's contract included a clause requiring full payment regardless of
                                        circumstances. When the consumer stopped attending, the gym sent debt collectors
                                        and threatened legal action.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>CPB's Action</h5>
                                    <p>We challenged the contract terms under the Consumer Rights Act 2015 and Unfair
                                        Terms in Consumer Contracts Regulations. We provided medical evidence and argued
                                        the "no refund" clause was unfair and unenforceable. We also reported the
                                        aggressive debt collection tactics.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Outcome
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Membership cancelled immediately</li>
                                        <li>Full refund of remaining £680 contract value</li>
                                        <li>Debt collection action withdrawn</li>
                                        <li>£150 compensation for harassment</li>
                                        <li>Gym revised contract terms for future members</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 6: Property Renovation Dispute -->
                    <div class="col-lg-6 mb-4 case-item" data-category="property">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Property & Construction</span>
                                <h3 class="card-title mt-2 mb-3">£8,500 Builder Dispute: Substandard Work</h3>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved: July 2024
                                </p>
                                <p class="card-text">
                                    A homeowner paid a builder £12,000 for a bathroom renovation. The work was completed
                                    poorly with multiple defects: leaking shower, incorrectly fitted tiles, and
                                    plumbing issues. The builder refused to return to fix problems and ignored all
                                    communication.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>The Challenge</h5>
                                    <p>The builder had been paid in full and disappeared once problems were reported. An
                                        independent surveyor estimated £8,500 would be needed to rectify the defects.
                                        The homeowner faced legal costs to pursue the claim.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>CPB's Action</h5>
                                    <p>We obtained the independent surveyor's report and sent a Letter Before Action
                                        citing breach of contract and the Supply of Goods and Services Act 1982. We
                                        reported the builder to Trading Standards and initiated small claims court
                                        proceedings.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Outcome
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Court judgment awarded £8,500 in damages</li>
                                        <li>Builder required to pay legal costs of £1,200</li>
                                        <li>Homeowner hired reputable contractor to fix work</li>
                                        <li>Trading Standards launched investigation</li>
                                        <li>Warning issued to prevent similar cases</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 7: Online Shopping Scam -->
                    <div class="col-lg-6 mb-4 case-item" data-category="retail">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Retail & E-commerce</span>
                                <h3 class="card-title mt-2 mb-3">£2,300 Refund: Counterfeit Designer Goods</h3>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved: June 2024
                                </p>
                                <p class="card-text">
                                    A consumer purchased a designer handbag online for £2,300 from what appeared to be a
                                    legitimate retailer. Upon authentication, the item was confirmed as counterfeit. The
                                    seller refused a refund and claimed they sold "inspired by" items, not counterfeits.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>The Challenge</h5>
                                    <p>The website looked professional with security badges and positive reviews (which
                                        were later found to be fake). The seller claimed the "terms and conditions"
                                        stated items were "replicas," buried in small print. Payment was made via bank
                                        transfer.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>CPB's Action</h5>
                                    <p>We identified the listing violated the Consumer Protection from Unfair Trading
                                        Regulations 2008 by misleading advertising. We contacted the payment processor,
                                        Action Fraud, and Trading Standards. We obtained authentication evidence from
                                        the genuine brand.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Outcome
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Full refund of £2,300 recovered through payment processor</li>
                                        <li>Website shut down by hosting provider</li>
                                        <li>Action Fraud investigation launched</li>
                                        <li>Consumer compensated for distress: £250</li>
                                        <li>Warning published about similar scam sites</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 8: Subscription Trap -->
                    <div class="col-lg-6 mb-4 case-item" data-category="retail">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Retail & Subscriptions</span>
                                <h3 class="card-title mt-2 mb-3">£540 Recovery: Hidden Subscription Charges</h3>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved: May 2024
                                </p>
                                <p class="card-text">
                                    A consumer signed up for a "free trial" of a weight loss product, only to discover
                                    they were enrolled in a subscription charging £45/month. The consumer never
                                    authorized ongoing payments and was unaware until £540 had been taken over 12
                                    months.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>The Challenge</h5>
                                    <p>The company claimed the terms were clearly stated (they weren't). Customer
                                        service was non-existent, with calls going unanswered and emails ignored. The
                                        consumer's bank initially refused to help, stating the payments were authorized.
                                    </p>
                                </div>

                                <div class="timeline-item">
                                    <h5>CPB's Action</h5>
                                    <p>We reviewed the sign-up process and found multiple violations of the Consumer
                                        Contracts Regulations 2013, including no clear subscription information at point
                                        of sale. We filed complaints with both the company and the payment processor,
                                        and reported to the Advertising Standards Authority.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Outcome
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Full refund of £540 unauthorized charges</li>
                                        <li>Subscription cancelled immediately</li>
                                        <li>Company issued formal warning by ASA</li>
                                        <li>Required to revise sign-up process</li>
                                        <li>Additional £100 compensation awarded</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

      

        <!-- CTA Section -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="fight-card text-center px-lg-5 py-5">
                            <h2 class="text-white mb-4">Do You Have a Consumer Complaint?</h2>
                            <p class="text-white lead mb-4">
                                Don't suffer in silence. If you're facing a consumer dispute, the Consumer Protection
                                Bureau can help. We have a proven track record of securing justice and compensation for
                                consumers across all sectors.
                            </p>
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                <a href="get-help.php" class="main-btn">Get Help Now</a>
                                <a href="cpb-consumer-champion.php" class="main-btn"
                                    style="background: white; color: #223a78;">Become a Champion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    

    </main>

   <?php include 'assets/include/footer.php'; ?>


    <script>
    // Filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const caseItems = document.querySelectorAll('.case-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                caseItems.forEach(item => {
                    if (filter === 'all') {
                        item.style.display = 'block';
                        setTimeout(() => item.style.opacity = '1', 10);
                    } else {
                        const categories = item.getAttribute('data-category');
                        if (categories.includes(filter)) {
                            item.style.display = 'block';
                            setTimeout(() => item.style.opacity = '1', 10);
                        } else {
                            item.style.opacity = '0';
                            setTimeout(() => item.style.display = 'none', 300);
                        }
                    }
                });
            });
        });

        // Add fade-in animation to case items
        caseItems.forEach((item, index) => {
            item.style.opacity = '0';
            setTimeout(() => {
                item.style.transition = 'opacity 0.5s ease-in-out';
                item.style.opacity = '1';
            }, index * 100);
        });
    });
    </script>
</body>

</html>
