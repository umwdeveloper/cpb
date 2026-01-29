<?php
include_once "includes/functions.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Research & Policy Library - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name='description'
        content='Access the Consumer Protection Bureau\'s comprehensive research and policy library featuring position papers, regulatory briefs, and evidence-based notes on consumer protection issues.' />
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
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/research-policy.php">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="VTs14Xy/Kdyw0NN4JQulEw" defer="true"></script>

    <style>
        .research-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 80px 0 60px;
            margin-top: 0;
        }

        .document-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
            background: white;
        }

        .document-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .doc-type-badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .doc-type-position {
            background: #e5bf20;
            color: #223a78;
        }

        .doc-type-regulatory {
            background: #28a745;
            color: white;
        }

        .doc-type-evidence {
            background: #17a2b8;
            color: white;
        }

        .doc-type-report {
            background: #6f42c1;
            color: white;
        }

        .doc-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 14px;
            color: #6c757d;
            margin-top: 10px;
        }

        .doc-meta i {
            color: #223a78;
        }

        .filter-section {
            background: #f8f9fa;
            padding: 30px 0;
            border-bottom: 2px solid #e9ecef;
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
            font-size: 14px;
            font-weight: 500;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #223a78;
            color: white;
        }

        .search-box {
            position: relative;
            max-width: 500px;
            margin: 0 auto 30px;
        }

        .search-box input {
            width: 100%;
            padding: 12px 45px 12px 20px;
            border: 2px solid #dee2e6;
            border-radius: 30px;
            font-size: 15px;
        }

        .search-box input:focus {
            outline: none;
            border-color: #223a78;
        }

        .search-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .topic-tag {
            display: inline-block;
            background: #f8f9fa;
            color: #495057;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            margin: 2px;
        }

        .download-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #223a78;
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .download-btn:hover {
            background: #1a2d5a;
            color: white;
            transform: translateX(3px);
        }

        .featured-research {
            background: linear-gradient(135deg, rgba(229, 191, 32, 0.1) 0%, rgba(201, 167, 28, 0.1) 100%);
            border-left: 4px solid #e5bf20;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 40px;
        }

        .stats-bar {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .stat-item {
            text-align: center;
            padding: 15px;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 700;
            color: #223a78;
            display: block;
        }

        .stat-label {
            font-size: 13px;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .policy-area {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #e5bf20;
            transition: all 0.3s;
        }

        .policy-area:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transform: translateX(5px);
        }

        .impact-quote {
            background: #f8f9fa;
            border-left: 4px solid #28a745;
            padding: 20px 25px;
            margin: 20px 0;
            font-style: italic;
            border-radius: 5px;
        }

        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e5bf20;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 25px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -35px;
            top: 5px;
            width: 12px;
            height: 12px;
            background: #e5bf20;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 2px #e5bf20;
        }

        .methodology-box {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 10px;
            padding: 25px;
            margin: 30px 0;
        }

        .key-finding {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #28a745;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .regulatory-gap {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px 20px;
            margin: 15px 0;
            border-radius: 5px;
        }

        .recommendation {
            background: #d1ecf1;
            border-left: 4px solid #17a2b8;
            padding: 15px 20px;
            margin: 15px 0;
            border-radius: 5px;
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
                                <a
                                    href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk
                                </a>
                            </div>
                        </div>

                        <div class="text-white social-icon">
                            <!-- Facebook -->
                            <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1"
                                style="background-color: #3b5998;"
                                href="https://web.facebook.com/profile.php?id=61570163952467" aria-label="Facebook"
                                role="button"><i class="fab fa-facebook-f"></i></a>

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
                        <li class="nav-item">
                            <a class="nav-link " href="job-opportunties/">Job Opportunties</a>
                        </li>
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

                                <li><a class="dropdown-item nav-link active" href="research-policy.php">
                                        Research & Policy Library</a></li>
                                <li><a class="dropdown-item nav-link" href="case-patterns.php">
                                        Consumer Case Patterns</a></li>

                                <li><a class="dropdown-item nav-link" href="jurisdiction-guides.php">
                                        Jurisdiction Guides</a></li>

                            </ul>
                        </li>

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
                            </ul>
                        </li>

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

                <!-- Hero Section -->
        <section class="py-lg-5 py-4 bg-light about-hero">
            <div class="container">
                <div class="row justify-content-center align-items-start">
                    <div class="col-lg-10 mx-auto ">
                        <h1 class="main-heading text-center text-uppercase  mt-2">
                            Research & Policy Library
                        </h1>
                        <p class="text-md text-center">
                             Evidence-led research, policy analysis, and regulatory insights that inform consumer
                            protection advocacy. Our library provides comprehensive documentation on consumer issues,
                            regulatory gaps, and policy recommendations backed by rigorous research and real-world case
                            data.
                        </p>

                    </div>

                </div>
            </div>
        </section>


        <!-- Search and Filter Section -->
        <section class="filter-section">
            <div class="container">
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Search research papers, topics, or keywords...">
                    <i class="bi bi-search"></i>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button class="filter-btn active" data-filter="all">All Documents</button>
                        <button class="filter-btn" data-filter="position">Position Papers</button>
                        <button class="filter-btn" data-filter="regulatory">Regulatory Briefs</button>
                        <button class="filter-btn" data-filter="evidence">Evidence Notes</button>
                        <button class="filter-btn" data-filter="report">Research Reports</button>
                    </div>
                </div>
            </div>
        </section>

  

        <!-- Documents Grid -->
        <section class="pb-5 mt-3">
            <div class="container">
                <div class="row" id="documentsContainer">

                    <!-- Position Paper 1 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="position"
                        data-keywords="subscription hidden charges consumer rights">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-position">Position Paper</span>
                                <h4 class="card-title mt-3 mb-3">The Subscription Trap Economy: Reforming Auto-Renewal
                                    Practices</h4>
                                <p class="card-text">Analysis of deceptive subscription practices affecting 4.2 million
                                    UK consumers annually. Proposes legislative amendments to the Consumer Contracts
                                    Regulations to mandate explicit renewal consent.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Subscriptions</span>
                                    <span class="topic-tag">Digital Economy</span>
                                    <span class="topic-tag">Consumer Contracts</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Dec 2025</span>
                                    <span><i class="bi bi-file-text"></i> 28 pages</span>
                                </div>

                                <div class="key-finding mt-3">
                                    <strong>Key Finding:</strong> 67% of consumers are unaware they're enrolled in
                                    auto-renewing subscriptions until charged.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                        data-bs-target="#detailModal1">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Regulatory Brief 1 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="regulatory"
                        data-keywords="energy bills pricing transparency regulation">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-regulatory">Regulatory Brief</span>
                                <h4 class="card-title mt-3 mb-3">Energy Pricing Transparency: Bridging the Regulatory
                                    Gap</h4>
                                <p class="card-text">Examines inadequacies in Ofgem's price cap mechanism and proposes
                                    enhanced transparency requirements for energy suppliers. Based on analysis of 1,800
                                    consumer complaints.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Energy</span>
                                    <span class="topic-tag">Utilities</span>
                                    <span class="topic-tag">Price Regulation</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Nov 2025</span>
                                    <span><i class="bi bi-file-text"></i> 18 pages</span>
                                </div>

                                <div class="regulatory-gap mt-3">
                                    <strong>Regulatory Gap:</strong> Current regulations lack enforcement mechanisms for
                                    billing accuracy standards.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                        data-bs-target="#detailModal2">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Evidence Note 1 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="evidence"
                        data-keywords="online reviews trustpilot fake reviews platform accountability">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-evidence">Evidence Note</span>
                                <h4 class="card-title mt-3 mb-3">Review Platform Manipulation: Evidence from the
                                    Trustpilot Investigation</h4>
                                <p class="card-text">Documentation of systematic review manipulation practices on major
                                    platforms. Presents evidence of selective review removal and incentivized positive
                                    reviews affecting consumer decision-making.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Online Reviews</span>
                                    <span class="topic-tag">Digital Platforms</span>
                                    <span class="topic-tag">Market Manipulation</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Oct 2025</span>
                                    <span><i class="bi bi-file-text"></i> 15 pages</span>
                                </div>

                                <div class="key-finding mt-3">
                                    <strong>Evidence Summary:</strong> Analysis of 450 businesses shows 73% engagement
                                    in review manipulation practices.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                        data-bs-target="#detailModal3">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Research Report 1 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="report"
                        data-keywords="property rental deposits schemes landlord tenant">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-report">Research Report</span>
                                <h4 class="card-title mt-3 mb-3">Rental Deposit Protection: A System Under Strain</h4>
                                <p class="card-text">Comprehensive study of deposit protection scheme failures and
                                    landlord non-compliance. Surveys 3,500 tenants and examines adjudication outcomes
                                    from three years of disputes.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Property</span>
                                    <span class="topic-tag">Rental Market</span>
                                    <span class="topic-tag">Deposit Protection</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Sep 2025</span>
                                    <span><i class="bi bi-file-text"></i> 56 pages</span>
                                </div>

                                <div class="key-finding mt-3">
                                    <strong>Key Finding:</strong> £127 million in deposits unlawfully retained annually
                                    due to scheme non-compliance.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Position Paper 2 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="position"
                        data-keywords="travel package holidays consumer rights refunds">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-position">Position Paper</span>
                                <h4 class="card-title mt-3 mb-3">Package Travel Regulations: Post-Pandemic Reform
                                    Agenda</h4>
                                <p class="card-text">Critical analysis of regulatory gaps exposed during COVID-19
                                    cancellations. Proposes strengthened protections and clearer refund obligations for
                                    tour operators.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Travel</span>
                                    <span class="topic-tag">Package Holidays</span>
                                    <span class="topic-tag">Consumer Rights</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Aug 2025</span>
                                    <span><i class="bi bi-file-text"></i> 34 pages</span>
                                </div>

                                <div class="recommendation mt-3">
                                    <strong>Recommendation:</strong> Mandatory refund processing within 14 days for
                                    operator cancellations.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Regulatory Brief 2 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="regulatory"
                        data-keywords="telecommunications broadband switching consumer protection">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-regulatory">Regulatory Brief</span>
                                <h4 class="card-title mt-3 mb-3">Broadband Switching: Implementing One Touch Switch
                                    Protections</h4>
                                <p class="card-text">Assessment of Ofcom's One Touch Switch implementation and
                                    identification of remaining barriers to seamless provider switching in the
                                    telecommunications sector.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Telecommunications</span>
                                    <span class="topic-tag">Broadband</span>
                                    <span class="topic-tag">Switching</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Jul 2025</span>
                                    <span><i class="bi bi-file-text"></i> 22 pages</span>
                                </div>

                                <div class="regulatory-gap mt-3">
                                    <strong>Regulatory Gap:</strong> Exit fee transparency requirements insufficient to
                                    prevent consumer lock-in.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Evidence Note 2 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="evidence"
                        data-keywords="dark patterns ecommerce consumer choice manipulation">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-evidence">Evidence Note</span>
                                <h4 class="card-title mt-3 mb-3">Dark Patterns in E-Commerce: Quantifying Consumer
                                    Detriment</h4>
                                <p class="card-text">Empirical study documenting prevalence of manipulative design
                                    practices across 200 major UK retail websites. Measures impact on consumer
                                    decision-making and overspending.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">E-commerce</span>
                                    <span class="topic-tag">Dark Patterns</span>
                                    <span class="topic-tag">Consumer Psychology</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Jun 2025</span>
                                    <span><i class="bi bi-file-text"></i> 26 pages</span>
                                </div>

                                <div class="key-finding mt-3">
                                    <strong>Evidence Summary:</strong> 89% of e-commerce sites employ at least one dark
                                    pattern technique.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Position Paper 3 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="position"
                        data-keywords="financial services affordability vulnerability consumer credit">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-position">Position Paper</span>
                                <h4 class="card-title mt-3 mb-3">Consumer Credit Affordability: Strengthening FCA
                                    Standards</h4>
                                <p class="card-text">Policy recommendations for enhanced affordability assessments in
                                    consumer credit. Addresses regulatory gaps allowing over-indebtedness and proposes
                                    vulnerability screening requirements.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Financial Services</span>
                                    <span class="topic-tag">Consumer Credit</span>
                                    <span class="topic-tag">Affordability</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> May 2025</span>
                                    <span><i class="bi bi-file-text"></i> 38 pages</span>
                                </div>

                                <div class="recommendation mt-3">
                                    <strong>Recommendation:</strong> Mandatory real-time income verification for all
                                    consumer credit applications over £1,000.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Research Report 2 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="report"
                        data-keywords="warranties insurance extended warranties consumer protection">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-report">Research Report</span>
                                <h4 class="card-title mt-3 mb-3">Extended Warranties: Value for Money Analysis</h4>
                                <p class="card-text">Comprehensive evaluation of extended warranty products across
                                    electronics, appliances, and automotive sectors. Compares warranty costs against
                                    actual repair claims data.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Warranties</span>
                                    <span class="topic-tag">Insurance Products</span>
                                    <span class="topic-tag">Consumer Value</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Apr 2025</span>
                                    <span><i class="bi bi-file-text"></i> 44 pages</span>
                                </div>

                                <div class="key-finding mt-3">
                                    <strong>Key Finding:</strong> Average warranty costs 3.2x the expected value of
                                    claims, representing poor consumer value.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Evidence Note 3 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="evidence"
                        data-keywords="parking tickets private parking enforcement consumer rights">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-evidence">Evidence Note</span>
                                <h4 class="card-title mt-3 mb-3">Private Parking Enforcement: Evidence of Systematic
                                    Abuse</h4>
                                <p class="card-text">Documentation of unfair practices by private parking companies
                                    including deliberately confusing signage, excessive charges, and aggressive debt
                                    collection tactics.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Parking</span>
                                    <span class="topic-tag">Private Enforcement</span>
                                    <span class="topic-tag">Consumer Detriment</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Mar 2025</span>
                                    <span><i class="bi bi-file-text"></i> 19 pages</span>
                                </div>

                                <div class="key-finding mt-3">
                                    <strong>Evidence Summary:</strong> 54% of parking charge notices issued contain
                                    procedural irregularities.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Regulatory Brief 3 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="regulatory"
                        data-keywords="water sector bills regulation consumer protection utilities">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-regulatory">Regulatory Brief</span>
                                <h4 class="card-title mt-3 mb-3">Water Sector Reform: Consumer Protections in a New
                                    Regulatory Framework</h4>
                                <p class="card-text">Analysis of proposed water sector regulatory changes and their
                                    implications for consumer protection. Identifies necessary safeguards for vulnerable
                                    customers.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Water Sector</span>
                                    <span class="topic-tag">Utilities</span>
                                    <span class="topic-tag">Regulatory Reform</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Feb 2025</span>
                                    <span><i class="bi bi-file-text"></i> 30 pages</span>
                                </div>

                                <div class="regulatory-gap mt-3">
                                    <strong>Regulatory Gap:</strong> Proposed reforms lack adequate protections for
                                    customers in debt or facing disconnection.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Position Paper 4 -->
                    <div class="col-lg-6 mb-4 document-item" data-category="position"
                        data-keywords="right to repair sustainability consumer rights products">
                        <div class="card document-card">
                            <div class="card-body p-4">
                                <span class="doc-type-badge doc-type-position">Position Paper</span>
                                <h4 class="card-title mt-3 mb-3">Right to Repair: Empowering Consumers and Reducing
                                    Waste</h4>
                                <p class="card-text">Comprehensive policy framework for expanding right to repair
                                    legislation across all consumer product categories. Addresses planned obsolescence
                                    and sustainable consumption.</p>

                                <div class="mt-3">
                                    <span class="topic-tag">Right to Repair</span>
                                    <span class="topic-tag">Sustainability</span>
                                    <span class="topic-tag">Product Standards</span>
                                </div>

                                <div class="doc-meta mt-3">
                                    <span><i class="bi bi-calendar3"></i> Jan 2025</span>
                                    <span><i class="bi bi-file-text"></i> 46 pages</span>
                                </div>

                                <div class="recommendation mt-3">
                                    <strong>Recommendation:</strong> Mandatory availability of spare parts for 10 years
                                    post-purchase for all electronic goods.
                                </div>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <small>View Details <i class="bi bi-arrow-right"></i></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="noResults" class="text-center py-5" style="display: none;">
                    <i class="bi bi-search" style="font-size: 48px; color: #6c757d;"></i>
                    <h4 class="mt-3">No documents found</h4>
                    <p class="text-muted">Try adjusting your search or filter criteria</p>
                </div>
            </div>
        </section>

    

    </main>

     <?php include 'assets/include/footer.php'; ?>

    <script>
    // Filter and Search functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const documentItems = document.querySelectorAll('.document-item');
        const searchInput = document.getElementById('searchInput');
        const noResults = document.getElementById('noResults');

        let currentFilter = 'all';

        // Filter functionality
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                currentFilter = this.getAttribute('data-filter');
                applyFilters();
            });
        });

        // Search functionality
        searchInput.addEventListener('input', function() {
            applyFilters();
        });

        function applyFilters() {
            const searchTerm = searchInput.value.toLowerCase();
            let visibleCount = 0;

            documentItems.forEach(item => {
                const category = item.getAttribute('data-category');
                const keywords = item.getAttribute('data-keywords').toLowerCase();
                const text = item.textContent.toLowerCase();

                const matchesFilter = currentFilter === 'all' || category.includes(currentFilter);
                const matchesSearch = searchTerm === '' ||
                    keywords.includes(searchTerm) ||
                    text.includes(searchTerm);

                if (matchesFilter && matchesSearch) {
                    item.style.display = 'block';
                    setTimeout(() => item.style.opacity = '1', 10);
                    visibleCount++;
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });

            // Show/hide no results message
            noResults.style.display = visibleCount === 0 ? 'block' : 'none';
        }

        // Add fade-in animation to document items
        documentItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => {
                item.style.opacity = '1';
            }, index * 50);
        });

        // Prevent form submission and show alert for download buttons
        document.querySelectorAll('.download-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                alert('This is a demo. In production, this would download the PDF document.');
            });
        });
    });
    </script>
</body>

</html>
