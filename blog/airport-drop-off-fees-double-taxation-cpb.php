<!-- <?php

include_once "./includes/mail.php";

$contactFormSubmitted = false;
if (isset($_POST['form-contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['msg'];
    $subject = "CPB Contact Form";
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
    <title>Quash the Unfair Airport Drop-Off Fees: A Call for Reform</title>
    <meta name="description" content="">
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
    <link href="https://fonts.googleapis.com/css2?family=Gidugu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="canonical"
        href="https://www.consumerprotectionbureau.co.uk/blog/airport-drop-off-fees-double-taxation-cpb.php">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php include 'assets/include/header.php'; ?>
    <main>
        <section class="py-lg-5 py-4 bg-light about-hero">
            <div class="container py-5 px-3 px-md-5" style="max-width: 980px; background: #E3F2FD; border-radius: 12px;">
                <!-- Hero Image -->
                <div class="mb-4 rounded shadow-sm overflow-hidden">
                    <img src="../assets/images/blog/Fair-Travel.png" alt="Airport Drop-Off Fees"
                        class="img-fluid w-100">
                </div>

                <!-- Title & Meta -->
                <div class="mb-4">
                    <h1 class="display-5 fw-bold text-uppercase" style="color: #0D47A1;">End Double Taxation</h1>
                    <h2 class="fw-semibold" style="font-size: 1.6rem; color: #333;">Quash the Unfair Airport Drop-Off Fees: A Call for Reform</h2>
                    <p class="text-muted mt-2 small">By the <strong>Consumer Protection Bureau (CPB)</strong> | September 2025</p>
                </div>

                <!-- Main Blog Content -->
                <div class="fs-5 lh-lg text-dark">
                                <p>Across the UK, drivers are being forced to pay yet another unjust charge: <strong>airport drop-off fees</strong>. These government-backed schemes allow airports to demand payment from drivers who do nothing more than stop for a few minutes to let passengers out.</p>

                                <blockquote class="blockquote px-4 py-3" style="background:#fff3cd; border-left: 5px solid #FFC107; border-radius: 6px;">
                                    <p class="mb-0 fst-italic text-dark"><b>Let's be clear :</b> This is not only unfair — it is double taxation.</p>
                                </blockquote>

                                <div class="p-4 rounded bg-white border-start border-4 border-danger mt-4">
                                    <h5 class="fw-bold text-danger mb-3">The Triple Burden on Consumers</h5>
                                    <ul class="ps-3 list-unstyled">
                                        <li>⬥ Passengers already pay <strong>air passenger duty</strong> through their tickets.</li>
                                        <li>⬥ Drivers already pay <strong>road tax, fuel duty, and insurance premiums.</strong></li>
                                        <li>⬥ Adding a drop-off fee on top of this amounts to charging twice for the same journey.</li>
                                    </ul>
                                </div>

                                <p class="mt-4">Many European countries manage airport traffic without penalising drivers in this way. Why should UK consumers face higher costs for less fairness?</p>

                                <h3 class="fw-bold mt-5 mb-3" style="color: #0D47A1;">The Human Cost: Chris T.'s Case</h3>

                                <p>This week, the Consumer Protection Bureau (CPB) received a complaint that highlights how broken this system is.</p>

                                <div class="p-4 rounded bg-white border-start border-4 border-warning">
                                    <h5 class="fw-bold text-warning mb-3">A Case of System Failure</h5>
                                    <p>On 7 August 2025, Chris T. dropped off a passenger at Heathrow Terminal 3. He did the right thing, going online the same day to pay the £6 charge, and even received a payment reference number.</p>
                                    
                                    <p class="mb-0">Despite this, Chris later received a <strong>Parking Charge Notice (PCN)</strong> from APCOA — the private company managing Heathrow's drop-off scheme.</p>
                                </div>

                                <div class="p-4 rounded bg-white border-start border-4 border-danger mt-4">
                                    <h5 class="fw-bold text-danger mb-3">Failed Resolution Attempts</h5>
                                    <ul class="ps-3 list-unstyled">
                                        <li>⬥ APCOA's helpline was automated and only set up to take payments.</li>
                                        <li>⬥ Emails went unanswered, breaching their own response deadlines.</li>
                                        <li>⬥ His enquiry was eventually marked "closed" without explanation — while the fine escalated.</li>
                                    </ul>
                                </div>

                                <blockquote class="blockquote px-4 py-3 mt-4" style="background:#fff3cd; border-left: 5px solid #FFC107; border-radius: 6px;">
                                    <p class="mb-0 fst-italic text-dark">A consumer who followed the rules was still penalised. This is not enforcement — it is entrapment.</p>
                                </blockquote>

                                <h3 class="fw-bold mt-5 mb-3" style="color: #0D47A1;">Legal Pressure is Mounting</h3>

                                <p>Airport drop-off charges are not just unfair — their legality is already under question.</p>

                                <div class="row g-4 mt-2">
                                    <div class="col-12">
                                        <div class="p-4 rounded bg-white border-start border-4 border-primary">
                                            <h5 class="fw-bold text-primary">Bristol Airport Challenge</h5>
                                            <p class="mb-0">A solicitor has argued that £100 "no-stopping" penalties issued by contractors may be unenforceable under the <strong>Airports Act 1986</strong>. The Act requires byelaw breaches to be pursued in the magistrates' court, not by private invoices. A Guardian Money case showed a driver fined £170 after stopping at a temporary traffic light — a blatant injustice.</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-4 rounded bg-white border-start border-4 border-info">
                                            <h5 class="fw-bold text-info">Heathrow's Legal Retreat</h5>
                                            <p class="mb-0">A senior barrister, Edward Levey KC, challenged a drop-off fine. APCOA dropped the case before it reached court, avoiding scrutiny of the scheme's legal footing. Which? reports that the <strong>legal basis for these charges has been challenged</strong> — but never tested in full court.</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-4 rounded bg-white border-start border-4 border-warning">
                                            <h5 class="fw-bold text-warning">Contractual Questions</h5>
                                            <p class="mb-0">Tribunal rulings such as <em>Vehicle Control Services v HMRC [2012]</em> confirm that private "fines" are not statutory penalties but <strong>contractual charges</strong>. That means they must be transparent and proportionate — a standard many airport schemes fail.</p>
                                        </div>
                                    </div>
                                </div>

                                <blockquote class="blockquote px-4 py-3 mt-4" style="background:#fff3cd; border-left: 5px solid #FFC107; border-radius: 6px;">
                                    <p class="mb-0 fst-italic text-dark">The bottom line? These charges sit on shaky legal ground and are already facing scrutiny from both lawyers and the public.</p>
                                </blockquote>

                                <h3 class="fw-bold mt-5 mb-3" style="color: #0D47A1;">A National Scandal</h3>

                                <div class="p-4 rounded bg-white border-start border-4 border-danger">
                                    <h5 class="fw-bold text-danger mb-3">Key Issues</h5>
                                    <ul class="ps-3 list-unstyled">
                                        <li>⬥ <strong>Drivers and passengers are being double-taxed.</strong></li>
                                        <li>⬥ <strong>Private companies profit from system errors and opaque processes.</strong></li>
                                        <li>⬥ <strong>The legal foundation of these schemes is uncertain.</strong></li>
                                    </ul>
                                </div>

                                <h3 class="fw-bold mt-5 mb-3" style="color: #0D47A1;">The CPB Demands Action</h3>

                                <div class="p-4 rounded bg-white border-start border-4 border-success">
                                    <h5 class="fw-bold text-success mb-3">Our Call for Reform</h5>
                                    <ul class="ps-3 list-unstyled">
                                        <li>⬥ <strong>An urgent government review</strong> of airport drop-off fees.</li>
                                        <li>⬥ <strong>Transparency from operators</strong> like APCOA about their systems and enforcement.</li>
                                        <li>⬥ <strong>A suspension of unfair penalties</strong> until a court rules on their legality.</li>
                                    </ul>
                                </div>

                                <p class="mt-4">Fair travel begins at the very first step of the journey — the drop-off zone. Until these charges are quashed, UK consumers remain trapped in a system that is unjust, exploitative, and legally dubious.</p>

                                <div class="text-center mt-5">
                                    <p class="text-uppercase text-danger fw-bold">It's time to stop double taxation. Scrap airport drop-off fees now.</p>
                                </div>
                            </div>

                           
                        </article>
                    </div>
                </div>
            </div>
        </section>
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