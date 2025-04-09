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
    <title>Watchdog or Lapdog? The Changing Role of Consumer Protection - Consumer Alert
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
                <div class="col-lg-10 mx-auto bg-gold p-0">
                    <img src="../assets/images/news/lapdog.png" alt="" class="w-100 h-auto">

                    <div class="px-lg-5 px-3">
                    <div class="news-heading text-uppercase  mt-3">
                            <span class="text-lg">THE FINANCIAL OMBUDSMAN SERVICE: </span> 
                        </div>
                        <h1 class="news-heading text-uppercase text-alert  mb-3">
                             A WATCHDOG TURNED TOOTHLESS LAPDOG? 
                        </h1>
                        <h2 class="subtitle-bullet w-700">UNMASKING SYSTEMIC BIAS AND CONSUMER BETRAYAL</h2>
                        <p class="text w-700">
                            The Financial Ombudsman Service (FOS) was established with the noble intention of providing
                            consumers with an independent, fair, and impartial platform to resolve disputes with
                            financial institutions, including insurance companies and registered lenders regulated by
                            the Financial Conduct Authority (FCA). However, the stark reality is that the FOS has
                            devolved into a compromised institution that routinely prioritises the interests of powerful
                            financial corporations leaving countless consumers disillusioned and betrayed. Evidence
                            continues to mount of systemic bias, a lack of transparency, and decisions tainted by
                            financial dependency. This blog tears down the facade and exposes the FOS as more of a
                            smokescreen than a genuine protector of consumer rights.
                        </p>

                        <div class="row mt-4 mb-4">
                            <div class="col-md-6">
                                <img src="../assets/images/news/FOC.png" alt="Financial Ombudsman Service "
                                    class="w-100  shadow rounded-2  mb-3 h-100" style="border: 2px solid #223a78">
                            </div>
                            <div class="col-md-6">
                                <img src="../assets/images/news/FCA.png" alt="FCA" class="w-100  shadow rounded-2"
                                    style="border: 2px solid #223a78">
                            </div>
                            <div class="col-lg-12">
                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    THE FOS FUNDING SCANDAL- WHO PULLS THE STRINGS?
                                </h3>
                                <p class="text">
                                    At the heart of the problem lies the funding structure, the Achilles’ heel of the
                                    Financial Ombudsman Service. FOS derives its income directly from levies and case
                                    fees paid by the financial firms it claims to regulate. In 2023, financial
                                    corporations funnelled over <b>£250 million</b> into the FOS coffers through these
                                    fees. This dependency creates an undeniable <b>conflict of interest</b>—how can the
                                    FOS deliver impartial verdicts when its financial lifeline depends on the very
                                    entities it is meant to police?
                                </p>
                                <p class="text">
                                    The result is a system rigged to protect those with deep pockets. Decisions against
                                    influential financial firms are diluted, delayed, or outright dismissed, while
                                    smaller firms are used as scapegoats to maintain an appearance of fairness. It is
                                    hard to ignore the reality that biting the hand that feeds it could have financial
                                    repercussions for the ombudsman service. This dependency creates a structural bias,
                                    where rulings too critical of financial organisations risk upsetting the very
                                    stakeholders funding the service.
                                </p>


                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    <span class="text-alert">THE NUMBERS REVEAL THE TRUTH:</span> A SYSTEM STACKED
                                    AGAINST CONSUMERS
                                </h3>

                                <ul>
                                    <li class="text">
                                        According to the <b>FOS’s 2023 Annual Report</b>, only <b>34%
                                            of complaints were upheld in favour of consumers</b>—a shocking decline over
                                        the past five years.
                                    </li>
                                    <li class="text">
                                        Complaints against <b>major insurance providers and high-street lenders</b> were
                                        rejected in over <b>70% of cases</b>, even when complainants presented
                                        irrefutable evidence.
                                    </li>
                                    <li class="text">
                                        Conversely, smaller financial firms, with weaker financial leverage, saw a
                                        significantly higher percentage of complaints rulings against them.
                                    </li>
                                </ul>
                                <p class="text">
                                    These figures expose a system carefully calibrated to protect financial powerhouses
                                    while leaving ordinary consumers and smaller players out in the cold.
                                </p>


                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    <span class="text-alert"> Case Review 1:</span>
                                    The Insurance Fraud Whitewashed by the FOS
                                </h3>
                                <p class="text">
                                    A homeowner, after suffering devastating flood damage,
                                    filed a claim with a prominent UK insurance provider.
                                    Despite <b>clear evidence of policy coverage</b> and independent assessments
                                    supporting the claim, the insurer rejected it on vague technical grounds.
                                    When the homeowner escalated the case to the FOS, they expected justice.
                                </p>
                                <p class="text">
                                    Instead, the FOS dismissed key evidence, accepted
                                    contradictory information from the insurer, and ruled against the consumer.
                                    Investigative journalists later revealed <b>emails showing insurer lobbying
                                        within the FOS investigation process</b>.
                                    Even with such glaring misconduct, the FOS refused to reopen the case.
                                </p>
                                <p class="text">
                                    <b>This was not just negligence—it was complicity.</b>
                                </p>
                                <div class="text shadow-sm rounded-2  p-3 border"
                                    style="background-color:#FEE8CF !important;">
                                    <h3 class="text-md-l text-bold text-primary w-700">
                                        Case Review 1: The Insurance Scandal That FOS Ignored
                                    </h3>
                                    <p class="text">
                                        In this case, a homeowner submitted a claim to their insurer after significant
                                        flood damage left their property uninhabitable. Despite the homeowner having
                                        full flood insurance coverage and submitting third-party assessment reports
                                        confirming the validity of the claim, the insurer denied responsibility, citing
                                        ambiguous policy wording. The consumer escalated the issue to the Financial
                                        Ombudsman Service (FOS), expecting impartial resolution.
                                    </p>
                                    <p class="text">
                                        During the FOS investigation, the insurer submitted conflicting accounts of
                                        their findings and inconsistencies in their communication were evident. The
                                        ombudsman, however, ruled in favour of the insurer, dismissing key pieces of
                                        evidence provided by the complainant. Months later, independent investigative
                                        journalists revealed internal communication showing the insurer had actively
                                        lobbied the FOS caseworker to dismiss critical evidence. Despite this
                                        revelation, the FOS refused to reopen the case, raising serious questions about
                                        the transparency and impartiality of their decision-making process.
                                    </p>

                                </div>

                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    <span class="text-alert"> Case Review 2:</span>
                                    Personal Loan Scam Rubber-Stamped by the FOS- A Classic Case of Bias
                                </h3>
                                <p class="text">
                                    A borrower took out a personal loan from an FCA-registered lender, only to discover
                                    <b>hidden fees and exploitative interest rates</b> buried in the fine print. The
                                    borrower filed a complaint, backed by clear contractual breaches and financial
                                    evidence. The lender dismissed it, and the case moved to the FOS.
                                </p>
                                <p class="text">
                                    Despite overwhelming evidence, the FOS sided with the lender, claiming the terms
                                    were ‘within industry norms.’ Months later, leaked emails exposed internal
                                    communications instructing FOS caseworkers to <b>prioritise lender relationships
                                        over impartial investigation outcomes.</b>
                                </p>

                                <div class="text shadow-sm rounded-2  p-3 border"
                                    style="background-color:#FEE8CF !important;">
                                    <h3 class="text-md-l text-bold text-primary w-700">
                                        Case Review 2: Personal Loan Dispute – A Classic Case of Bias
                                    </h3>
                                    <p class="text">
                                        In this example, a borrower took out a personal loan with a well-known
                                        FCA-registered lender. The terms of the loan included hidden fees and excessive
                                        interest charges that were not disclosed transparently at the outset. When the
                                        borrower realised they were being overcharged, they filed a complaint with the
                                        lender, which was swiftly dismissed.
                                    </p>
                                    <p class="text">
                                        The borrower then escalated the complaint to the FOS, providing documentary
                                        evidence, including copies of the original loan agreement and financial
                                        breakdowns showing clear breaches of FCA regulations. However, the FOS sided
                                        with the lender, claiming the terms were 'within standard industry practice.'
                                        Months later, leaked internal emails exposed a pattern where high-value lenders
                                        were given preferential treatment in FOS complaint reviews, with caseworkers
                                        instructed to prioritise preserving lender relationships over consumer fairness.
                                    </p>

                                </div>
                                <p class="text mt-3">
                                    Both cases are not isolated incidents—they are damning evidence of a pattern of <b>
                                        bias, incompetence, and wilful negligence</b>. They highlight critical failures
                                    in oversight, transparency, and impartiality within the FOS complaint handling
                                    system, reinforcing concerns about its structural bias and accountability.
                                </p>



                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    THE CONSUMER EXPERIENCE: DELAYS, STONEWALLING, AND FRUSTRATION
                                </h3>
                                <p class="text">
                                    Beyond biased rulings, consumers face an infuriatingly opaque and sluggish complaint
                                    resolution process:
                                </p>
                                <ul>
                                    <li class="text">
                                        Complaints routinely drag on for <b>over 18 months.</b>
                                    </li>
                                    <li class="text">
                                        Caseworkers lack specialised knowledge of financial regulations.
                                    </li>
                                    <li class="text">
                                        Updates are sporadic, and communication is abysmal.
                                    </li>
                                </ul>
                                <p class="text">
                                    The FOS seems to rely on one tactic: <b>delay and exhaust the complainant until they
                                        give up.</b>
                                </p>
                                <p class="text">
                                    The process feels less like an independent arbitration and more like a bureaucratic
                                    exercise designed to wear consumers down.
                                </p>
                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    SYSTEMIC FAILURES: ACCOUNTABILITY DEFICIT AND LACK OF OVERSIGHT
                                </h3>
                                <p class="text">
                                    Unlike the financial firms it regulates, the FOS faces minimal oversight. While its
                                    decisions are subject to judicial review, the cost and complexity of pursuing such
                                    actions make them impractical for the average consumer.
                                </p>
                                <p class="text">
                                    The FCA, which oversees the FOS, has shown little appetite for holding the ombudsman
                                    accountable, perpetuating a cycle of ineffectiveness and bias.
                                </p>
                                <div class="text shadow-sm rounded-2  p-3 border"
                                    style="background-color:#FEE8CF !important;">
                                    <h3 class="text-md-l text-bold text-primary w-700">
                                        Who Regulate the Regulator?
                                    </h3>
                                    <p class="text">
                                        The FCA nominally oversees the FOS but has shown little interest in enforcing
                                        meaningful oversight. While FOS decisions can technically be challenged through
                                        judicial review, the prohibitive cost and complexity make this route
                                        inaccessible for most consumers.
                                    </p>

                                </div>
                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    TIME TO END THE CHARADE
                                </h3>
                                <p class="text">
                                    The Financial Ombudsman Service was designed to be a guardian of fairness in
                                    financial disputes, but it has morphed into an institution marred by conflicts of
                                    interest, systemic bias, and a lack of accountability. Consumers deserve better than
                                    a toothless watchdog.
                                </p>
                                <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-4">
                                    WHAT MUST CHANGE? REAL REFORMS, NOT COSMETIC TWEAKS
                                </h3>
                                <ol>
                                    <li>
                                        <b>Independent Funding:</b> The FOS must be funded by a neutral body, not the
                                        firms it regulates.
                                    </li>
                                    <li>
                                        <b>Real Oversight:</b> The FCA must conduct regular, independent audits of FOS
                                        decisions.
                                    </li>
                                    <li>
                                        <b>Full Transparency:</b> Publish anonymised but detailed case data, including
                                        the rationale behind decisions.
                                    </li>
                                    <li>
                                        <b>Time Limits:</b> Strict timelines must be enforced for resolving complaints.
                                    </li>
                                    <li>
                                        <b> Consumer Representation: </b>Create a panel of independent consumer
                                        advocates to monitor systemic biases.
                                    </li>
                                </ol>
                                <p class="text">
                                    The Financial Ombudsman Service, once a beacon of hope for consumer fairness, has
                                    become a <b>corporate puppet</b>, complicit in perpetuating financial injustice. The
                                    FCA and Parliament must act decisively to dismantle the current framework, root out
                                    systemic corruption, and rebuild the FOS into an institution that serves its true
                                    purpose: <b>protecting consumers, not corporations</b>.
                                </p>
                                <p class="text">
                                    The time for excuses is over. The time for change is now. Consumers must demand
                                    transparency, accountability, and justice—not empty promises and bureaucratic
                                    smokescreens.
                                </p>
                                <div class="text shadow-sm rounded-2  p-3 border"
                                    style="background-color:#90d5ff !important;">
                                    <h3 class="text-md-l text-bold  text-primary w-700 text-start mt-2">
                                        Insights and Reports Highlighting FOS Failures in Consumer Protection
                                    </h3>
                                    <p class="text">
                                        Recent investigations and reports have shed light on the challenges faced by
                                        consumers due to the inefficiencies of the Financial Ombudsman Service (FOS) and
                                        other bodies tasked with protecting consumer rights. Key findings include:
                                    </p>
                                    <ol>
                                        <li>
                                            <b>Delays in Resolving Complaints:</b>
                                            A <a class="text-primary" target="_blank"
                                                href="https://www.telegraph.co.uk/money/consumer-affairs/financial-victims-let-body-should-protect/?utm">Telegraph
                                                article </a> highlights how the FOS has struggled to resolve complaints
                                            promptly, leaving financial victims without justice for extended periods.
                                        </li>
                                        <li>
                                            <b>Cases Pending for Years:</b>
                                            According to a <a class="text-primary" target="_blank"
                                                href="https://www.telegraph.co.uk/money/consumer-affairs/financial-victims-kept-waiting-eight-years-justice/">Telegraph
                                                investigation</a> , some victims have waited over eight years for their
                                            complaints to be addressed, exposing systemic delays in the process.
                                        </li>
                                        <li>
                                            <b>Concerns Raised by Major Media Outlets: </b>
                                            A <a class="text-primary" target="_blank"
                                                href="https://www.bbc.co.uk/news/business-55858137?">BBC report</a>
                                            underscores the growing challenges faced by consumers, emphasizing the lack
                                            of
                                            timely resolutions.
                                        </li>
                                        <li>
                                            <b>Surge in Complaints:</b>
                                            Complaints to the FOS have surged by 40%, as reported by <a
                                                class="text-primary" target="_blank"
                                                href="https://www.ftadviser.com/fos/2024/10/24/complaints-received-by-fos-rise-40/?utm">FT
                                                Adviser</a>. This indicates a growing lack of trust in the system's
                                            efficiency.
                                        </li>
                                        <li>
                                            <b>Criticism from Think Tanks:</b>
                                            A <a class="text-primary" target="_blank"
                                                href="https://www.moneymarketing.co.uk/news/fos-slammed-as-unfit-for-purpose-by-think-tank/?utm">Money
                                                Marketing article</a> reveals that a leading think tank has labeled the
                                            FOS
                                            'unfit for purpose,' calling for major reforms to improve its functionality.
                                        </li>
                                    </ol>
                                    <p class="text">
                                        These reports collectively demonstrate the urgent need for reforms to restore
                                        consumer trust in organizationz meant to safeguard their rights.
                                    </p>
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