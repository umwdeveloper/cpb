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
            font-size: 14px;
            font-weight: 600;
            z-index: 10;
        }

        .case-category {
            display: inline-block;
            background: #e5bf20;
            color: #223a78;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 16px;
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
        .card-title{
            color: #223a78;
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
                    <h4 class="text-center my-2 fw-semibold">Real People. Real Problems. Real Outcomes.</h4>
                    <p class="text-md text-center">
                      Behind every complaint is a real person often stressed, unheard, or unsure where to turn.

At the Consumer Protection Bureau (CPB), we listen first, then act. The case studies below highlight how CPB intervenes, secures redress, and uses real cases to challenge unfair practices and inform national consumer campaigns.

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
                        <button class="filter-btn" data-filter="resolved">Resolved</button>
                        <button class="filter-btn" data-filter="ongoing">Ongoing</button>
                        <button class="filter-btn" data-filter="travel">Travel</button>
                        <button class="filter-btn" data-filter="property">Property</button>
                        <button class="filter-btn" data-filter="business">Business</button>
                        <button class="filter-btn" data-filter="retail">Retail</button>
                        <button class="filter-btn" data-filter="services">Services</button>
                        <button class="filter-btn" data-filter="entertainment">Entertainment</button>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Studies Grid -->
        <section class="py-5">
            <div class="container">
                <div class="row" id="caseStudiesContainer">
                    <!-- Case Study 1: Roofing Complaint -->  
                    <div class="col-lg-6 mb-4 case-item" data-category="property ongoing">
                        <div class="card case-study-card">
                            <span class="case-badge" style="background: #ffc107; color: #000;">Ongoing</span>
                            <div class="card-body p-4">
                                <span class="case-category">Roofing Complaint</span>
                                <h2 class=" fw-bold card-title mt-2 mb-3">"I Trusted the Recommendation and Lost £8,700"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Case Ongoing</p>
                                <p class="card-text">
                                    What began as a modest roof repair quickly spiralled into a financial and emotional ordeal.
                                </p>
                                <p class="card-text">
                                    A homeowner accepted a roofer who had been suggested through a local authority route. The initial quote of £2,500 soon escalated, with repeated claims of "newly discovered problems". Payments were demanded urgently. Cheques were issued. A loan was taken out. The roof was left partially uncovered for days, allowing water to enter the property.
                                </p>
                                <p class="card-text">
                                    By the time the homeowner contacted CPB, £8,700 had been paid, the roof was still leaking, and trust had completely broken down.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>What CPB did</h5>
                                    <p>CPB reviewed bank records, loan documents, flagged cheques, photographs, and correspondence. We engaged with Trading Standards and formally wrote to the local authority once it became clear the trader had been suggested through them.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>Current position</h5>
                                    <p>The case remains open. CPB continues to represent the homeowner and is pursuing full recovery of losses, accountability from all parties, and further action where appropriate.</p>
                                </div>

                                <div class="case-outcome" style="border-left: 4px solid #ffc107;">
                                    <h5 class="mb-3"><i class="bi bi-info-circle-fill text-warning me-2"></i>Why this case matters</h5>
                                    <p class="mb-0">This complaint directly informs CPB's national work on rogue traders, weak referral systems, and the lack of effective protection for homeowners when repairs go wrong.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 2: Beauty Equipment Case -->
                    <div class="col-lg-6 mb-4 case-item" data-category="business resolved">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">£11,520 Beauty Equipment Case</span>
                                <h2 class=" fw-bold card-title mt-2 mb-3">"My Business Was at Risk I Did not Know What Else to Do"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved</p>
                                <p class="card-text">
                                    A professional beauty therapist invested in a high-value treatment machine after being reassured that known defects would be fixed before delivery. Those assurances were never honoured.
                                </p>
                                <p class="card-text">
                                    During training, faults appeared immediately. The therapist was advised to work around the defects rather than address them. Clients were put at risk. One incident nearly resulted in legal action against the business.
                                </p>
                                <p class="card-text">
                                    The supplier refused to accept responsibility. A refund was dismissed as "not possible".
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>What CPB did</h5>
                                    <p>CPB reviewed contracts, training records, videos, photographs, and technical communications. We challenged the supplier's claims, issued a formal legal demand, and engaged directly with their appointed representatives.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>Outcome</h5>
                                    <p>The defective machine was withdrawn.</p>
                                    <p>The therapist received the machine she originally wanted.</p>
                                    <p>The matter was resolved without court proceedings — and the business survived.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-info-circle-fill text-primary me-2"></i>Why this case matters</h5>
                                    <p class="mb-0">This case demonstrates CPB's commitment to protecting small businesses and sole traders, who are too often left exposed when mis-selling occurs.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 3: Hotel Booking Dispute -->
                    <!-- <div class="col-lg-6 mb-4 case-item" data-category="travel resolved">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Overseas Hotel Booking</span>
                                <h2 class=" fw-bold card-title mt-2 mb-3">"I Landed in London and Had Nowhere to Stay"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved</p>
                                <p class="card-text">
                                    An Australian visitor arrived in London after a long international flight only to be refused access to her fully prepaid hotel room.
                                </p>
                                <p class="card-text">
                                    She had notified the hotel in advance of her late arrival. The restriction was buried in a document issued after payment. No alternatives were offered. Communication stopped entirely.
                                </p>
                                <p class="card-text">
                                    She was forced to find emergency accommodation and pay twice, distressed and alone in a foreign country.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>What CPB did</h5>
                                    <p>CPB intervened directly, challenged the hotel's conduct, and warned of escalation to regulators and tourism authorities.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>Outcome</h5>
                                    <p>The booking was cancelled and a full refund issued.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-info-circle-fill text-primary me-2"></i>Why this case matters</h5>
                                    <p class="mb-0">This case highlights how easily overseas consumers can be treated unfairly and why transparency and fairness in travel services remain critical.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Case Study 4: Car Rental Dispute -->
                    <!-- <div class="col-lg-6 mb-4 case-item" data-category="travel resolved">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Expedia Car Rental Dispute</span>
                                <h2 class=" fw-bold card-title mt-2 mb-3">"We Were Abroad With a Toddler and Suddenly Had No Car"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved</p>
                                <p class="card-text">
                                    A family travelling in Italy made two prepaid car rental bookings through a major platform. Both failed.
                                </p>
                                <p class="card-text">
                                    One supplier refused to accept a debit card — a restriction never disclosed at booking. The second could not provide a toddler seat, making the rental unsafe and unusable. Despite recorded calls confirming cancellations, refunds were initially refused.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>What CPB did</h5>
                                    <p>CPB reviewed booking terms, supplier conduct, and call evidence. We challenged the use of post-booking disclaimers and pressed for accountability where services could not be lawfully or safely provided.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>Outcome</h5>
                                    <p>All rental charges were refunded.</p>
                                    <p>Insurance costs were also returned.</p>
                                    <p>The case was resolved without court action.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-info-circle-fill text-primary me-2"></i>Why this case matters</h5>
                                    <p class="mb-0">This complaint supports CPB's wider work on platform accountability, transparency, and fairness in international travel services.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Case Study 5: Cleaning Damage -->
                    <div class="col-lg-6 mb-4 case-item" data-category="retail resolved">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Professional Cleaning Damage</span>
                                <h2 class=" fw-bold card-title mt-2 mb-3">"They Ruined My Scarves Then Offered £50"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved</p>
                                <p class="card-text">
                                    Two designer silk scarves were returned damaged after professional cleaning. The initial compensation offered did not reflect their value or the loss suffered.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>What CPB did</h5>
                                    <p>CPB reviewed the evidence, challenged the offer, and set out what reasonable compensation looks like under consumer standards.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>Outcome</h5>
                                    <p>Compensation was increased and the matter resolved.</p>
                                    <p>Sometimes, fairness is simply about being taken seriously.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 6: Heathrow Parking Charge -->
                    <div class="col-lg-6 mb-4 case-item" data-category="travel resolved">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">APCOA Heathrow Parking Charge</span>
                                <h2 class=" fw-bold card-title mt-2 mb-3">"I Paid the Drop-Off Fee Then Got Fined Anyway"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved</p>
                                <p class="card-text">
                                    A motorist paid the Heathrow terminal drop-off charge correctly and on time — then received a penalty notice weeks later.
                                </p>
                                <p class="card-text">
                                    Attempts to resolve the issue alone led nowhere.
                                </p>

                                <div class="timeline-item mt-4">
                                    <h5>What CPB did</h5>
                                    <p>CPB verified the payment and intervened directly with the operator.</p>
                                </div>

                                <div class="timeline-item">
                                    <h5>Outcome</h5>
                                    <p>The penalty charge was cancelled.</p>
                                    <p>No escalation. No further stress.</p>
                                </div>

                                <div class="case-outcome">
                                    <h5 class="mb-3"><i class="bi bi-info-circle-fill text-primary me-2"></i>Why this case matters</h5>
                                    <p class="mb-0">This case feeds directly into CPB's national campaign on airport drop-off charges and unfair parking enforcement practices.</p>
                                </div>
                            </div>
                        </div>
                    </div>

           


                    <!-- Case Study 12: Beauty Equipment Case (Short Version) -->
                    <!-- <div class="col-lg-6 mb-4 case-item" data-category="business resolved">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">£11,520 Beauty Equipment Case</span>
                                <h2 class="fw-bold card-title mt-2 mb-3">"My Business Was at Risk – I Didn't Know What Else to Do"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved</p>
                                <p class="card-text">
                                    A beauty therapist invested in high-value equipment based on assurances that defects would be resolved. They were not. The machine repeatedly failed, placing clients and the business at risk.
                                </p>
                                <p class="card-text">
                                    CPB challenged the supplier and secured a replacement without court action.
                                </p>
                                <a href="#" class="btn bg-primary text-white mt-3">View Full Case Study</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- Case Study 13: Hotel Booking (Short Version) -->
                    <div class="col-lg-6 mb-4 case-item" data-category="travel resolved">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Overseas Hotel Booking</span>
                                <h2 class="fw-bold card-title mt-2 mb-3">"I Landed in London and Had Nowhere to Stay"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved</p>
                                <p class="card-text">
                                    An overseas visitor was denied access to fully prepaid accommodation due to undisclosed restrictions. Left stranded, she contacted CPB.
                                </p>
                                <p class="card-text">
                                    CPB intervened directly and secured a full refund.
                                </p>
                                <a href="#" class="btn bg-primary text-white mt-3">View Full Case Study</a>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 14: Car Rental (Short Version) -->
                    <div class="col-lg-6 mb-4 case-item" data-category="travel resolved">
                        <div class="card case-study-card">
                            <span class="case-badge">Resolved</span>
                            <div class="card-body p-4">
                                <span class="case-category">Expedia Car Rental Dispute</span>
                                <h2 class="fw-bold card-title mt-2 mb-3">"We Were Abroad With a Toddler – and Suddenly Had No Car"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Resolved</p>
                                <p class="card-text">
                                    A family's prepaid car rentals failed due to undisclosed card restrictions and missing child safety equipment.
                                </p>
                                <p class="card-text">
                                    CPB challenged the platform's refusal to refund and recovered all charges.
                                </p>
                                <a href="#" class="btn bg-primary text-white mt-3">View Full Case Study</a>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 15: Faulty Sofa (Short Version) -->
                    <div class="col-lg-6 mb-4 case-item" data-category="retail ongoing">
                        <div class="card case-study-card">
                            <span class="case-badge" style="background: #ffc107; color: #000;">Ongoing</span>
                            <div class="card-body p-4">
                                <span class="case-category">Faulty Sofa Purchase</span>
                                <h2 class="fw-bold card-title mt-2 mb-3">"They Ignored My Right to Reject"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Case Ongoing</p>
                                <p class="card-text">
                                    Sofas developed faults within days of delivery. Despite lawful rejection within 30 days, both retailer and finance provider refused a refund.
                                </p>
                                <p class="card-text">
                                    CPB confirmed statutory rights and is pursuing escalation.
                                </p>
                                <a href="#" class="btn bg-primary text-white mt-3">View Full Case Study</a>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 16: Emergency Plumbing (Short Version) -->
                    <div class="col-lg-6 mb-4 case-item" data-category="services ongoing">
                        <div class="card case-study-card">
                            <span class="case-badge" style="background: #ffc107; color: #000;">Ongoing</span>
                            <div class="card-body p-4">
                                <span class="case-category">Emergency Plumbing Charges</span>
                                <h2 class="fw-bold card-title mt-2 mb-3">"I Was Pressured to Pay, It Did not Feel Right"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Case Ongoing</p>
                                <p class="card-text">
                                    An emergency plumber demanded upfront payment, refused card payment, and charged over £2,200 for disputed work.
                                </p>
                                <p class="card-text">
                                    CPB is assessing fairness, transparency, and potential legal breaches.
                                </p>
                                <a href="#" class="btn bg-primary text-white mt-3">View Full Case Study</a>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 17: Locksmith Service (Short Version) -->
                    <div class="col-lg-6 mb-4 case-item" data-category="services ongoing">
                        <div class="card case-study-card">
                            <span class="case-badge" style="background: #ffc107; color: #000;">Ongoing</span>
                            <div class="card-body p-4">
                                <span class="case-category">Fraudulent Locksmith Service</span>
                                <h2 class="fw-bold card-title mt-2 mb-3">"My Home Security Was Compromised"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Case Ongoing</p>
                                <p class="card-text">
                                    A locksmith replaced a lock without proper authorisation, charged £1,447, and supplied only one key, raising security concerns.
                                </p>
                                <p class="card-text">
                                    CPB is pursuing refund and accountability.
                                </p>
                                <a href="#" class="btn bg-primary text-white mt-3">View Full Case Study</a>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 18: Viagogo Tickets (Short Version) -->
                    <div class="col-lg-6 mb-4 case-item" data-category="entertainment ongoing">
                        <div class="card case-study-card">
                            <span class="case-badge" style="background: #ffc107; color: #000;">Ongoing</span>
                            <div class="card-body p-4">
                                <span class="case-category">Viagogo Ticket Mis‑Sale</span>
                                <h2 class="fw-bold card-title mt-2 mb-3">"VIP Tickets That Were not VIP"</h2>
                                <p class="text-muted mb-3"><i class="bi bi-calendar-event me-2"></i>Case Ongoing</p>
                                <p class="card-text">
                                    A consumer paid £1,727 for VIP concert tickets that did not deliver the promised experience.
                                </p>
                                <p class="card-text">
                                    CPB is pursuing a full refund and challenging misleading ticket advertising.
                                </p>
                                <a href="#" class="btn bg-primary text-white mt-3">View Full Case Study</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- From Complaints to Campaigns Section -->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="main-heading text-center text-uppercase  mt-2">From Complaints to Campaigns</h2>
                            <p class="lead text-muted">CPB does not treat complaints as isolated incidents.</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="border-start border-4 border-primary ps-4">
                                    <h5 class="fw-bold text-primary mb-4">Each case helps us:</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-3 d-flex align-items-start">
                                            <div class="bg-primary rounded-circle me-3 mt-1" style="width: 8px; height: 8px; min-width: 8px;"></div>
                                            <span class="text-dark">Identify patterns of unfair practice</span>
                                        </li>
                                        <li class="mb-3 d-flex align-items-start">
                                            <div class="bg-primary rounded-circle me-3 mt-1" style="width: 8px; height: 8px; min-width: 8px;"></div>
                                            <span class="text-dark">Build evidence for reform</span>
                                        </li>
                                        <li class="mb-3 d-flex align-items-start">
                                            <div class="bg-primary rounded-circle me-3 mt-1" style="width: 8px; height: 8px; min-width: 8px;"></div>
                                            <span class="text-dark">Strengthen national consumer campaigns</span>
                                        </li>
                                        <li class="mb-3 d-flex align-items-start">
                                            <div class="bg-primary rounded-circle me-3 mt-1" style="width: 8px; height: 8px; min-width: 8px;"></div>
                                            <span class="text-dark">Prevent the same harm happening again</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center py-5">
                                    <h4 class="fw-bold text-primary mb-3">Individual Voices</h4>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <div style="width: 40px; height: 2px; background-color: #e5bf20;"></div>
                                        <div class="mx-3 text-muted">+</div>
                                        <div style="width: 40px; height: 2px; background-color: #e5bf20;"></div>
                                    </div>
                                    <h4 class="fw-bold text-primary mb-3">Collective Change</h4>
                                    <p class="text-muted fst-italic">This is how individual voices become collective change.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What CPB Stands For Section -->
        <section class="py-5" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="main-heading text-center text-uppercase  mt-2">What CPB Stands For</h2>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="border-start border-4 border-warning ps-4 py-3">
                                        <h6 class=" text-dark mb-0">We don't tell people to "read the small print".</h6>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="border-start border-4 border-warning ps-4 py-3">
                                        <h6 class=" text-dark mb-0">We don't close cases because they're inconvenient.</h6>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="border-start border-4 border-warning ps-4 py-3">
                                        <h6 class=" text-dark mb-0">We take the time to understand what really happened.</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="border-start border-4 border-warning ps-4 py-3">
                                        <h6 class=" text-dark mb-0">We challenge unfairness.</h6>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="border-start border-4 border-warning ps-4 py-3">
                                        <h6 class=" text-dark mb-0">We escalate when silence sets in.</h6>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="border-start border-4 border-warning ps-4 py-3">
                                        <h6 class=" text-dark mb-0">And we stand with people who feel ignored or powerless.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Get Involved Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="main-heading text-center text-uppercase  mt-2">Get Involved</h2>
                            <p class="lead text-muted mb-4">If you've experienced unfair treatment — or believe consumers deserve better — you can:</p>
                        </div>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-lg-4">
                                <div class="text-center h-100 p-4 bg-white rounded-4 shadow-sm">
                                    <div class="mb-4">
                                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #e5bf20, #c9a71c); border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                                            <span style="font-size: 24px; font-weight: bold; color: #223a78;">1</span>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold text-primary mb-3">Become a CPB Champion</h5>
                                    <p class="text-muted mb-4">Join our network of advocates fighting for consumer rights.</p>
                                    <a href="cpb-consumer-champion.php" class="btn bg-primary text-white rounded-pill px-4">Learn More</a>
                                </div>
</div>
                            <div class="col-lg-4">
                                <div class="text-center h-100 p-4 bg-white rounded-4 shadow-sm">
                                    <div class="mb-4">
                                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #e5bf20, #c9a71c); border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                                            <span style="font-size: 24px; font-weight: bold; color: #223a78;">2</span>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold text-primary mb-3">Support our national campaigns</h5>
                                    <p class="text-muted mb-4">Help us drive systemic change for all consumers.</p>
                                    <a href="advocacy.php" class="btn bg-primary text-white rounded-pill px-4">Get Involved</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center h-100 p-4 bg-white rounded-4 shadow-sm">
                                    <div class="mb-4">
                                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #e5bf20, #c9a71c); border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                                            <span style="font-size: 24px; font-weight: bold; color: #223a78;">3</span>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold text-primary mb-3">Report a concern</h5>
                                    <p class="text-muted mb-4">Even if you're unsure where it fits, share your experience.</p>
                                    <a href="get-help.php" class="btn bg-primary text-white rounded-pill px-4">Report Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="p-4 bg-white rounded-4 shadow-sm" style="border-left: 4px solid #e5bf20;">
                                <h5 class="fw-bold text-primary mb-3">Because fairness does not improve on its own.</h5>
                                <p class="text-muted mb-0 fs-5">It improves when people speak and when someone listens.</p>
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
