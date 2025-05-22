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
    <title>Consumer Alert News - (CPB)</title>
    <meta name="description"
        content="Stay updated with the Consumer Protection Bureau UK. Explore the latest consumer alerts, UK consumer laws, and protection tips from a trusted agency.">
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/news/index.php">

    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php include 'assets/include/header.php'; ?>
<main>
    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-10 mx-auto ">
                    <h1 class="main-heading text-center text-uppercase  mt-2">
                        Consumer Alerts and News
                    </h1>
                    <p class="text-md text-center">
                        Stay informed with the latest updates on UK consumer protection laws, scam alerts, product
                        recalls, and industry news to help safeguard your rights and make informed decisions.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-lg-5 pb-4 bg-light position-relative " style="z-index: 1;">
        <div class="container pb-5 ">
            <div class="row mb-lg-0 mb-4">
                 <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/alert-news.png"
                                style="object-fit:contain; object-position:center;"
                                alt="CPB Campaign Leads to Stronger Consumer Protection Laws" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="mb-0 pb-0">
                                NEF Hijacked :  When Politics Betrays the Poor

                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(22 May 2025)</span>
                                <b>LONDON </b> –
                                If the NEF becomes a political stronghold, the credibility of the State’s entire social
                                policy collapses. The fight against poverty cannot and must not be placed under the
                                control of any political party.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="nef-hijacked-politics-betrays-poor.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/cpb-camphign.png"
                                style="object-fit:contain; object-position:center;"
                                alt="CPB Campaign Leads to Stronger Consumer Protection Laws" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="mb-0 pb-0">
                                CPB Campaign Success:<br>GOVERNMENT ADOPTS TOUGHER CONSUMER PROTECTION LAWS UNDER
                                STRENGTHENED DIGITAL MARKETS ACT
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(07 April 2025)</span>
                                <b>LONDON</b> –
                                The Consumer Protection Bureau (CPB) is proud to declare a <b>major victory for
                                    consumers
                                    and a
                                    direct success</b> of our recent campaigns aimed at strengthening transparency,
                                fairness, and
                                accountability across UK markets. We welcome the UK Government’s adoption of tougher
                                consumer protection measures under the newly reinforced Digital Markets, Competition and
                                Consumers Act, and applaud the leadership of Justin Madders MP, Minister for Competition
                                and
                                Markets, for taking decisive action.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="cpb-campaign-success.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/credit-agencies.png"
                                style="object-fit:contain; object-position:center;"
                                alt="CPB Investigates Unfair Practices by Credit Rating Agencies" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="mb-0 pb-0">
                                WHEN THE WATCHDOGS BITE THE CONSUMERS THEY SHOULD PROTECT
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(04 April 2025)</span>
                                <b>LONDON</b> –
                                In the intricate web of modern financial systems, UK credit rating agencies like
                                Equifax, Experian, and TransUnion wield enormous power over consumers' financial lives.
                                What happens when these institutions, designed to assess creditworthiness, become tools
                                that unfairly penalise legitimate consumer actions? A recent case under Consumer
                                Protection Bureau (CPB) investigation highlights this troubling dynamic.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="the-role-of-credit-agencies-like-equifax-and-experian.php"
                                    class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/bitcoin-scam-and-fake-reviews.png"
                                style="object-fit:contain; object-position:center;"
                                alt="Bitcoin Scam and Fake Reviews Costing Consumers Millions" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="mb-0 pb-0">
                                How Trustpilot’s Lax Policies Are Costing Consumers Millions
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(25 March 2025)</span>
                                <b>LONDON</b> –
                                Bitcoin, once hailed as the future of finance, has become a breeding ground for scams
                                that exploit unsuspecting investors. Many individuals, drawn by the promise of high
                                returns and financial freedom, have poured their hard-earned money into fraudulent
                                schemes, only to end up losing everything. Making matters worse, online review platforms
                                like Trustpilot have played an unintended role in enabling these scams by allowing
                                unchecked and fake reviews to mislead potential victims.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="are-trustpilot-reviews-truly-unbiased.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/trustpilot.jpeg"
                                style="object-fit:cover; object-position:center;"
                                alt="CPB Challenges Trustpilot Over Unfair Review Moderation" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="mb-0 pb-0">
                                CPB DEMANDS TRANSPARENCY IN REVIEW PRACTICES
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(18 March 2025)</span>
                                <b>LONDON</b> –
                                The CPB has issued a formal challenge to Trustpilot regarding the platform's review
                                moderation processes, citing significant concerns about transparency and fairness.
                                Despite multiple engagement attempts dating back to February 2025, Trustpilot has
                                remained unresponsive to requests for clarification, casting doubt on its claims of
                                operating an open and unbiased review platform.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="trustpilot-under-scrutiny.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>












                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/world-consumers-rights-day.png"
                                style="object-fit:contain; object-position:center;"
                                alt="World Consumer Rights Day 2025: Consumers at the Heart of the Green Transition"
                                class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="mb-0 pb-0">
                                World Consumer Rights Day 2025: Consumers at the Heart of the Green
                                Transition
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(11 March 2025)</span>
                                <b>LONDON –</b> As the world grapples with climate change and the cost-of-living crisis,
                                World Consumer
                                Rights Day 2025 calls for urgent action to empower consumers in shaping a greener,
                                fairer
                                economy. Under the theme "A Just Transition to Sustainable Lifestyles," this year's
                                campaign
                                emphasises the need for sustainable, affordable, and accessible choices that protect
                                both
                                people and the planet.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="world-consumer-rights-day.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/trustpilot.png"
                                style="object-fit:contain; object-position:center;"
                                alt="Trustpilot logo indicating concerns over removal of negative reviews" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="mb-0 pb-0">
                                Concerns Grow Over Trustpilot’s Alleged Removal of Negative Reviews
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(5 March 2025)</span>
                                <b>LONDON</b> – Consumers are raising concerns over Trustpilot’s review moderation
                                practices, alleging that the platform selectively removes negative reviews, potentially
                                misleading the public and compromising its credibility.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="concerns-grow-over-trustpilot-alleged-removel-of-negative-reviews.php"
                                    class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image  justify-content-center" style="background-color:#84B578;">
                            <img src="../assets/images/news/CPB joins CI.png" style="object-fit:contain;"
                                alt="Consumer Protection Bureau UK joins Consumers International" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="mb-0 pb-0">
                                CPB JOINS CONSUMERS INTERNATIONAL
                            </h2>
                            <p class="text mb-0 pb-0">
                                <span>(11th February 2025)</span> <b>LONDON</b> –
                                CPB is proud to announce its official
                                membership in Consumers International, the world’s leading consumer
                                advocacy network. This milestone underscores CPB’s commitment to
                                championing consumer rights, promoting ethical business practices, and
                                driving policy change in the UK and beyond.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="../Press-Release/Press-Release-11-02-2025.pdf" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image  justify-content-center">
                            <img src="../assets/images/news/FOC.png" style="object-fit:contain;"
                                alt="Financial Ombudsman Service (FOS) watchdog criticism article image" class="">
                        </div>
                        <div class="news-card-text">
                            <!-- <span>24th November 2024</span> -->
                            <h2 class="text-uppercase">
                                A WATCHDOG TURNED TOOTHLESS LAPDOG?
                            </h2>
                            <p class="text mb-0 pb-0">

                                The Financial Ombudsman Service (FOS) was established with the noble intention of
                                providing
                                consumers with an independent, fair, and impartial platform to resolve disputes with
                                financial institutions, including insurance companies and registered lenders regulated
                                by
                                the Financial Conduct Authority (FCA). However, the stark reality is that the FOS has
                                devolved into a compromised institution that routinely prioritises the interests of
                                powerful
                                financial corporations leaving countless consumers disillusioned and betrayed. Evidence
                                continues to mount of systemic bias, a lack of transparency, and decisions tainted by
                                financial dependency. This blog tears down the facade and exposes the FOS as more of a
                                smokescreen than a genuine protector of consumer rights.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="financial-ombudsman-services-watchdog-turned-toothless-lapdog.php"
                                    class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>






                <div class="col-lg-4 mb-3">
                    <article class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/consumer-protection-bureau-alert-news-Asda Store.jpeg"
                                alt="Consumer Protection Bureau UK report on Asda store price discrepancy"
                                loading="lazy">
                        </div>
                        <div class="news-card-text">
                            <h2 class="text-uppercase">Price Display Discrepancy at Asda Store</h2>
                            <p class="text mb-0 pb-0">
                                <span>(24th November 2024)</span> <strong>LONDON</strong> – In an incident at an Asda
                                store in West Sussex,
                                a vigilant consumer successfully challenged misleading price labelling, highlighting the
                                importance of
                                consumer awareness and advocacy. This case reminds shoppers to remain alert and assert
                                their rights when
                                facing pricing discrepancies.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="price-display-discrepancy-at-asda-store.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/Hanover Square in JVC dubai.jpg"
                                alt="Consumer Protection Bureau UK: ADGM Fines Wazim Nazir Over Regulatory Compliance Breach">
                        </div>
                        <div class="news-card-text">
                            <h2 class="text-uppercase">
                                ADGM Fines Wazim Nazir Following Action by Consumer Protection Bureau
                            </h2>
                            <p class="text mb-0 pb-0">
                                In a major win for regulatory compliance and consumer rights, the Abu Dhabi Global
                                Market (ADGM) Registration Authority has fined HSQ Holdings Ltd, PL1 Holdings Ltd, and
                                director Mohammed Wazim Nazir for severe violations. The action follows a formal
                                intervention by the Consumer Protection Bureau UK.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="adgm-fines-wazim-nazir-following-consumer-protection-bureau-intervention.php"
                                    class="news-alert-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image justify-content-center">
                            <img src="../assets/images/news/refund.jpg" style="object-fit:contain;"
                                alt="Consumer Protection Bureau UK: Know Your Rights on Refunds for Sale Items">
                        </div>
                        <div class="news-card-text">
                            <h2 class="mb-0 pb-0 text-uppercase">
                                Refunds on Sale Items: Know Your Rights
                            </h2>
                            <p class="text mb-0 pb-0">
                                Sales season brings great deals, but do you know your rights when it comes to refunds?
                                Contrary to popular belief, UK consumer protection laws may still entitle you to a
                                refund on discounted items. The Consumer Protection Bureau breaks down the facts.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="refund-on-sale-items.php" class="news-alert-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/service-charges.jpg"
                                alt="Consumer Protection Bureau UK: Understanding Service Charges in UK Restaurants">
                        </div>
                        <div class="news-card-text">
                            <h2 class="text-uppercase">
                                Service Charges in UK Restaurants
                            </h2>
                            <p class="text mb-0 pb-0">
                                Are service charges mandatory in the UK? The Consumer Protection Bureau explains your
                                rights when dining out, including whether restaurants must clearly disclose fees and if
                                you're legally obliged to pay them.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="service-charges-in-uk-resturants.php" class="news-alert-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/Counterfeiting-Goods-Is-a-Serious-Crime.png"
                                alt="Consumer Protection Bureau: Counterfeit Goods and Consumer Safety">
                        </div>
                        <div class="news-card-text">
                            <h2 class="text-uppercase">
                                A Growing Global Threat to Consumers and Businesses
                            </h2>
                            <p class="text mb-0 pb-0">
                                Counterfeit goods threaten consumers and businesses worldwide, accounting for over 3.3%
                                of global trade. The Consumer Protection Bureau highlights the risks, from fake
                                electronics to unsafe pharmaceuticals, and urges stronger enforcement to protect
                                consumer rights and ensure product safety.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="understanding-counterfeit-goods.php" class="news-alert-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/fake-products.png" alt="Spotting Fake Products">
                        </div>
                        <div class="news-card-text">
                            <h2 class="text-uppercase">
                                Fake or Real? The Truth Behind Counterfeit Products
                            </h2>
                            <p class="text mb-0 pb-0">
                                Counterfeit goods are a growing concern in the UK, deceiving consumers and harming
                                reputable businesses. From electronics and designer clothing to cosmetics and
                                pharmaceuticals, fake products undermine consumer trust and pose serious risks to health
                                and safety. Being able to identify counterfeit items is vital for protecting your
                                consumer rights and avoiding financial loss. The Consumer Protection Bureau offers
                                guidance to help you avoid falling victim to these scams.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="spotting-fake-products.php" class="news-alert-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/black-friday.webp"
                                alt="Consumer Protection Bureau UK alert about Black Friday and Cyber Monday shopping tips">
                        </div>
                        <div class="news-card-text">
                            <h2 class="text-uppercase">
                                Avoid Overspending and Protect Yourself from Scams
                            </h2>
                            <p class="text mb-0 pb-0">
                                Black Friday (29th Nov 24) and Cyber Monday (2nd Dec 24) offer exciting deals, but also
                                attract scams and low-quality products. To safeguard your consumer rights during these
                                high-pressure sales events, it's important to shop smart and verify sellers. The
                                Consumer Protection Bureau encourages UK shoppers to plan ahead and avoid impulsive
                                purchases that may lead to consumer complaints or regret.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="black-friday-tips.php" class="news-alert-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image">
                            <img src="../assets/images/news/holiday-tips1.jpg"
                                alt="Festive shopping tips with a budget checklist and gift items on a table">
                        </div>
                        <div class="news-card-text">
                            <h2 class="text-uppercase">
                                CPB Advice for a Safe and Smart Festive Season
                            </h2>
                            <p class="text mb-0 pb-0">
                                At the Consumer Protection Bureau, we want to ensure your festive season is safe,
                                joyful, and free from consumer complaints. During Christmas and New Year, sales are
                                tempting, but scams and financial traps are common. Protect yourself by following our
                                practical advice on budgeting, recognising legitimate retailers, and reporting
                                suspicious activity under consumer protection laws in the UK.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="cpb-advice-for-safe-and-smart-festive-season.php" class="news-alert-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/trustpilot.png"
                                style="object-fit:contain; object-position:center;"
                                alt="Consumer Protection Bureau UK news about review platform transparency">
                        </div>
                        <div class="news-card-text">
                            <h2 class="mb-0 pb-0">
                                Are Trustpilot Reviews Truly Unbiased?
                            </h2>
                            <p class="text mb-0 pb-0">
                                Online reviews significantly impact consumer decisions. Trustpilot, a widely used review
                                platform, claims transparency, but growing concerns about biased moderation are
                                surfacing. Are negative reviews being filtered unfairly? The Consumer Protection Bureau
                                explores the implications for consumer protection and how UK shoppers can make informed
                                choices even when faced with potentially skewed ratings.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="are-trustpilot-reviews-truly-unbiased.php" class="news-alert-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/consumer-powe.png"
                                style="object-fit:contain; object-position:center;"
                                alt="Consumer Protection Bureau UK on World Consumer Rights Day 2025">
                        </div>
                        <div class="news-card-text">
                            <h2 class="mb-0 pb-0">
                                Revolutionising Consumer Power
                            </h2>
                            <p class="text mb-0 pb-0">
                                Celebrated on March 15, World Consumer Rights Day highlights the global push for
                                consumer rights and sustainable choices. The 2025 theme, "A Just Transition to
                                Sustainable Lifestyles," promotes accessible and equitable living without compromising
                                individual needs. As a UK advocate for consumer protection, the Consumer Protection
                                Bureau supports this mission and urges all stakeholders to help build a fairer, more
                                responsible market.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="revolutionising-consumer-power.php" class="news-alert-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="news-card shadow-sm">
                        <div class="news-card-image d-flex justify-content-center align-items-center"
                            style="background-color:#000032;">
                            <img src="../assets/images/news/stop-delivery-scams.png"
                                style="object-fit:contain; object-position:center;"
                                alt="Consumer Protection Bureau UK alert on delivery scams and extortion threats">
                        </div>
                        <div class="news-card-text">
                            <h2 class="mb-0 pb-0">
                                Breaking Free From Delivery Scams and Extortion Fees
                            </h2>
                            <p class="text mb-0 pb-0">
                                Have you ever received a demand for money to release a parcel held abroad? This alarming
                                scam is becoming increasingly common. Victims are often misled without documentation or
                                legal basis. The Consumer Protection Bureau is raising awareness across the UK, helping
                                individuals file a consumer complaint and take action against delivery scams and
                                exploitative practices.
                            </p>
                            <div class="news-card-btn mt-4 mb-2 text-end">
                                <a href="held-hostage-breaking-free-from-delivery-scams-and-extortion-fees.php"
                                    class="news-alert-btn">Read More</a>
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
    <!-- 
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