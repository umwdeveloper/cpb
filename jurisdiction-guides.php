<?php
include_once "includes/functions.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Jurisdiction Guides - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name='description'
        content='Understand consumer protection principles across UK, EU, and international jurisdictions. Neutral explanations of consumer rights, legislation, and enforcement mechanisms.' />
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/jurisdiction-guides.php">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="VTs14Xy/Kdyw0NN4JQulEw" defer="true"></script>

    <style>
        .jurisdiction-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 80px 0 60px;
            margin-top: 0;
        }

        .jurisdiction-tabs {
            border-bottom: 2px solid #e5bf20;
            margin-bottom: 30px;
        }

        .jurisdiction-tabs .nav-link {
            color: #223a78;
            font-weight: 600;
            padding: 15px 30px;
            border: none;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
        }

        .jurisdiction-tabs .nav-link:hover {
            color: #e5bf20;
            border-bottom-color: #e5bf20;
        }

        .jurisdiction-tabs .nav-link.active {
            color: #223a78;
            background: #f8f9fa;
            border-bottom-color: #e5bf20;
        }

        .principle-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            border: 1px solid #e9ecef;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .principle-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-3px);
        }

        .principle-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #223a78 0%, #2a5298 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .legislation-box {
            background: #f8f9fa;
            border-left: 4px solid #e5bf20;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }

        .enforcement-body {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s;
        }

        .enforcement-body:hover {
            border-color: #223a78;
        }

        .key-concept {
            background: #e7f3ff;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
        }

        .key-concept h5 {
            color: #223a78;
            margin-bottom: 10px;
        }

        .timeline-comparison {
            position: relative;
            padding: 20px 0;
        }

        .timeline-item {
            padding: 20px;
            background: white;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid #e5bf20;
        }

        .info-badge {
            display: inline-block;
            padding: 5px 12px;
            background: #e5bf20;
            color: #223a78;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 10px;
        }

        .jurisdiction-flag {
            width: 40px;
            height: 30px;
            border-radius: 5px;
            object-fit: cover;
            margin-right: 10px;
        }

        .comparison-table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .comparison-table th {
            background: #223a78;
            color: white;
            padding: 15px;
            font-weight: 600;
        }

        .comparison-table td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
        }

        .accordion-button:not(.collapsed) {
            background-color: #223a78;
            color: white;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: #e5bf20;
        }

        .quick-reference {
            background: linear-gradient(135deg, #e5bf20 0%, #c9a71c 100%);
            color: #223a78;
            padding: 30px;
            border-radius: 12px;
            margin: 30px 0;
        }

        .disclaimer-box {
            background: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
        }

        .disclaimer-box i {
            color: #ffc107;
            font-size: 24px;
            margin-right: 10px;
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

                                <li><a class="dropdown-item nav-link" href="research-policy.php">
                                        Research & Policy Library</a></li>
                                <li><a class="dropdown-item nav-link" href="case-patterns.php">
                                        Consumer Case Patterns</a></li>

                                <li><a class="dropdown-item nav-link active" href="jurisdiction-guides.php">
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
                            Jurisdiction Guides
                        </h1>
                        <p class="text-md text-center">
                            Neutral explanations of consumer protection principles across UK, EU, and international
                            jurisdictions. 
                        </p>

                    </div>

                </div>
            </div>
        </section>


        <!-- Jurisdiction Tabs -->
        <section class="py-5">
            <div class="container">
                <ul class="nav nav-tabs jurisdiction-tabs" id="jurisdictionTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="uk-tab" data-bs-toggle="tab" data-bs-target="#uk"
                            type="button" role="tab" aria-controls="uk" aria-selected="true">
                            <i class="bi bi-flag me-2"></i>United Kingdom
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="eu-tab" data-bs-toggle="tab" data-bs-target="#eu" type="button"
                            role="tab" aria-controls="eu" aria-selected="false">
                            <i class="bi bi-stars me-2"></i>European Union
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="international-tab" data-bs-toggle="tab"
                            data-bs-target="#international" type="button" role="tab" aria-controls="international"
                            aria-selected="false">
                            <i class="bi bi-globe me-2"></i>International
                        </button>
                    </li>
                </ul>

                <div class="tab-content mt-4" id="jurisdictionTabContent">
                    <!-- UK Tab -->
                    <div class="tab-pane fade show active" id="uk" role="tabpanel" aria-labelledby="uk-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="main-heading text-uppercase mb-4">United Kingdom Consumer Protection Framework
                                </h2>
                                <p class="lead mb-4">
                                    The UK operates a comprehensive consumer protection system combining primary
                                    legislation, statutory instruments, common law principles, and regulatory oversight.
                                </p>
                            </div>
                        </div>

                        <!-- Core Principles -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <h3 class="mb-4">Fundamental Principles</h3>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="principle-card h-100">
                                    <div class="principle-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <h4>Right to Safety</h4>
                                    <p>Consumers have the right to protection from products and services that are
                                        hazardous to health or life. Enforced through product safety regulations and
                                        standards.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="principle-card h-100">
                                    <div class="principle-icon">
                                        <i class="bi bi-info-circle"></i>
                                    </div>
                                    <h4>Right to Information</h4>
                                    <p>Consumers must receive accurate, complete information to make informed purchasing
                                        decisions. Includes pricing, terms, and material characteristics.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="principle-card h-100">
                                    <div class="principle-icon">
                                        <i class="bi bi-hand-index"></i>
                                    </div>
                                    <h4>Right to Choose</h4>
                                    <p>Consumers have the right to select from a variety of products and services at
                                        competitive prices, free from coercion or unfair trading practices.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="principle-card h-100">
                                    <div class="principle-icon">
                                        <i class="bi bi-megaphone"></i>
                                    </div>
                                    <h4>Right to be Heard</h4>
                                    <p>Consumers have the right to representation in policy-making and to effective
                                        mechanisms for complaints and redress.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="principle-card h-100">
                                    <div class="principle-icon">
                                        <i class="bi bi-arrow-repeat"></i>
                                    </div>
                                    <h4>Right to Redress</h4>
                                    <p>Consumers are entitled to fair settlement of legitimate grievances, including
                                        compensation for misrepresentation, defective goods, or unsatisfactory services.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <div class="principle-card h-100">
                                    <div class="principle-icon">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <h4>Right to Education</h4>
                                    <p>Consumers have the right to acquire knowledge and skills needed to make informed,
                                        confident choices about goods and services.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Key Legislation -->
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <h3 class="mb-4">Key Legislation</h3>

                                <div class="legislation-box">
                                    <h4>Consumer Rights Act 2015</h4>
                                    <p><strong>Scope:</strong> Consolidates and modernizes consumer law, covering goods,
                                        services, and digital content.</p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>Goods must be of satisfactory quality, fit for purpose, and as described</li>
                                        <li>30-day short-term right to reject faulty goods</li>
                                        <li>Right to repair or replacement within first 6 months</li>
                                        <li>Services must be performed with reasonable care and skill</li>
                                        <li>Digital content must be of satisfactory quality and fit for purpose</li>
                                        <li>Unfair contract terms provisions protecting consumers</li>
                                    </ul>
                                </div>

                                <div class="legislation-box">
                                    <h4>Consumer Protection from Unfair Trading Regulations 2008</h4>
                                    <p><strong>Scope:</strong> Prohibits unfair commercial practices that harm consumer
                                        economic interests.</p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>Prohibits misleading actions and omissions</li>
                                        <li>Bans aggressive commercial practices</li>
                                        <li>Lists 31 practices banned in all circumstances</li>
                                        <li>Provides consumers right to unwind contracts and claim damages</li>
                                    </ul>
                                </div>

                                <div class="legislation-box">
                                    <h4>Consumer Contracts (Information, Cancellation and Additional Charges) Regulations
                                        2013</h4>
                                    <p><strong>Scope:</strong> Governs distance and off-premises contracts between traders
                                        and consumers.</p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>Mandatory pre-contract information requirements</li>
                                        <li>14-day cooling-off period for distance and off-premises sales</li>
                                        <li>Restrictions on additional charges and premium-rate helplines</li>
                                        <li>Delivery obligations and timing requirements</li>
                                    </ul>
                                </div>

                                <div class="legislation-box">
                                    <h4>Data Protection Act 2018 / UK GDPR</h4>
                                    <p><strong>Scope:</strong> Regulates processing of personal data and privacy rights.
                                    </p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>Right to access personal data</li>
                                        <li>Right to rectification and erasure</li>
                                        <li>Data portability rights</li>
                                        <li>Privacy by design requirements for businesses</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

               
                    </div>

                    <!-- EU Tab -->
                    <div class="tab-pane fade" id="eu" role="tabpanel" aria-labelledby="eu-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="main-heading text-uppercase mb-4">European Union Consumer Protection Framework
                                </h2>
                                <p class="lead mb-4">
                                    The EU maintains harmonized consumer protection standards across member states through
                                    directives and regulations, ensuring a consistent baseline of rights.
                                </p>
                            </div>
                        </div>

                        <!-- Legal Hierarchy -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="key-concept">
                                    <h5>Understanding EU Consumer Law Structure</h5>
                                    <p><strong>Regulations:</strong> Directly applicable in all member states without
                                        national implementing legislation</p>
                                    <p><strong>Directives:</strong> Set objectives that member states must achieve through
                                        national legislation</p>
                                    <p class="mb-0"><strong>Principle of Maximum Harmonization:</strong> Some directives
                                        establish uniform rules that member states cannot exceed; others allow higher
                                        national standards</p>
                                </div>
                            </div>
                        </div>

                        <!-- Key Directives -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="mb-4">Key EU Consumer Directives</h3>

                                <div class="legislation-box">
                                    <h4>Consumer Rights Directive (2011/83/EU)</h4>
                                    <p><strong>Purpose:</strong> Harmonizes distance and off-premises contract rules</p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>14-day withdrawal right for distance and off-premises contracts</li>
                                        <li>Mandatory pre-contractual information requirements</li>
                                        <li>Delivery within 30 days unless otherwise agreed</li>
                                        <li>Prohibitions on pre-ticked boxes and hidden charges</li>
                                        <li>Trader bears cost of return if withdrawal right exercised</li>
                                    </ul>
                                </div>

                                <div class="legislation-box">
                                    <h4>Unfair Commercial Practices Directive (2005/29/EC)</h4>
                                    <p><strong>Purpose:</strong> Protects consumers from unfair business-to-consumer
                                        practices</p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>Prohibits misleading actions and omissions</li>
                                        <li>Bans aggressive commercial practices</li>
                                        <li>Blacklist of 31 practices prohibited in all circumstances</li>
                                        <li>General fairness test based on "average consumer" benchmark</li>
                                    </ul>
                                </div>

                                <div class="legislation-box">
                                    <h4>Consumer Sales and Guarantees Directive (2019/771/EU)</h4>
                                    <p><strong>Purpose:</strong> Establishes minimum standards for sale of goods contracts
                                    </p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>Goods must conform to contract for 2 years minimum</li>
                                        <li>Presumption of non-conformity if defect appears within 1 year</li>
                                        <li>Right to repair, replacement, price reduction, or termination</li>
                                        <li>Specific provisions for goods with digital elements</li>
                                    </ul>
                                </div>

                                <div class="legislation-box">
                                    <h4>General Data Protection Regulation (GDPR) (2016/679)</h4>
                                    <p><strong>Purpose:</strong> Directly applicable regulation protecting personal data
                                    </p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>Consent must be freely given, specific, informed, and unambiguous</li>
                                        <li>Right to access, rectification, erasure, and portability</li>
                                        <li>Data breach notification within 72 hours</li>
                                        <li>Fines up to €20 million or 4% of global turnover</li>
                                    </ul>
                                </div>

                                <div class="legislation-box">
                                    <h4>Package Travel Directive (2015/2302/EU)</h4>
                                    <p><strong>Purpose:</strong> Protects consumers buying package holidays and linked
                                        travel arrangements</p>
                                    <p><strong>Key Provisions:</strong></p>
                                    <ul>
                                        <li>Mandatory information before and after booking</li>
                                        <li>Organizer liability for proper performance of all services</li>
                                        <li>Right to terminate before travel with compensation in certain circumstances
                                        </li>
                                        <li>Insolvency protection requirements for organizers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                     
                    </div>

                    <!-- International Tab -->
                    <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="international-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="main-heading text-uppercase mb-4">International Consumer Protection Frameworks
                                </h2>
                                <p class="lead mb-4">
                                    International consumer protection operates through multilateral guidelines, regional
                                    cooperation, and bilateral agreements, as consumer law remains primarily a national
                                    competence.
                                </p>
                            </div>
                        </div>

                        <!-- UN Guidelines -->
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <h3 class="mb-4">United Nations Guidelines for Consumer Protection</h3>

                                <div class="legislation-box">
                                    <h4>UNGCP (Originally adopted 1985, revised 2015)</h4>
                                    <p><strong>Nature:</strong> Non-binding international guidelines providing a framework
                                        for national consumer protection policies</p>
                                    <p><strong>Core Objectives:</strong></p>
                                    <ul>
                                        <li>Assist countries in achieving or maintaining adequate consumer protection</li>
                                        <li>Facilitate production and distribution patterns responsive to consumer needs
                                        </li>
                                        <li>Encourage high levels of ethical conduct for producers and distributors</li>
                                        <li>Assist countries in combating abusive business practices</li>
                                        <li>Facilitate development of independent consumer groups</li>
                                        <li>Promote international cooperation in consumer protection</li>
                                    </ul>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-6 mb-3">
                                        <div class="principle-card">
                                            <h5>Physical Safety</h5>
                                            <p>Protection from products hazardous to life or health, with particular
                                                attention to vulnerable consumers</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="principle-card">
                                            <h5>Economic Interests</h5>
                                            <p>Protection from contractual abuses, misleading marketing, and unfair
                                                commercial practices</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="principle-card">
                                            <h5>Access to Information</h5>
                                            <p>Right to information necessary for informed choices, protection from
                                                dishonest advertising</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="principle-card">
                                            <h5>Access to Redress</h5>
                                            <p>Effective mechanisms for settling consumer disputes, including ADR and small
                                                claims procedures</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="principle-card">
                                            <h5>Consumer Education</h5>
                                            <p>Programs to enable consumers to understand economic, environmental, and
                                                social impacts of choices</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="principle-card">
                                            <h5>Sustainable Consumption</h5>
                                            <p>Policies supporting sustainable consumption patterns and environmental
                                                protection</p>
                                        </div>
                                    </div>
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
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add fade-in animation to principle cards when they come into view
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(20px)';
                entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, 100);

                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.principle-card, .enforcement-body').forEach(card => {
        observer.observe(card);
    });
    </script>
</body>

</html>
