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
    <title>The £6 Toll Trap: APCOA's Double-Charging at Heathrow Drop-Off Zone | Consumer Protection Bureau</title>
    <meta name="description"
        content="CPB investigates how APCOA's Heathrow Drop-Off Zone is unfairly charging drivers twice for single visits. Read about the systemic issues and our demands for change.">
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
                <img src="../assets/images/blog/heathrow-dropoff.jpg" alt="Heathrow Airport Drop-Off Zone"
                    class="img-fluid w-100">
            </div>

            <!-- Title & Meta -->
            <div class="mb-4">
                <h1 class="display-5 fw-bold text-uppercase" style="color: #0D47A1;">The Heathrow "Drop-Off" Deception
                </h1>
                <h2 class="fw-semibold" style="font-size: 1.6rem; color: #333;">Why Drivers Are Paying Twice for the
                    Same Journey</h2>
                <p class="text-muted mt-2 small">By the <strong>Consumer Protection Bureau (CPB)</strong> | October 2025
                </p>
            </div>

            <!-- Main Blog Content -->
            <div class="fs-5 lh-lg text-dark">
                <blockquote class="blockquote px-4 py-3"
                    style="background:#fff3cd; border-left: 5px solid #FFC107; border-radius: 6px;">
                    <p class="mb-0 fst-italic text-dark">Behind Heathrow's £6
                        "Drop-Off" charge lies a system that's
                        catching innocent drivers in a costly trap and CPB is demanding answers.</p>
                </blockquote>

                <p class="mt-4">When Heathrow Airport and APCOA Parking
                    rolled out their £6 Drop-Off Zone charge,
                    it was promoted as a simple,
                    eco-friendly measure to ease congestion. In reality,
                    many drivers are finding it's anything but simple and in some cases, they are being charged twice
                    for a single visit.</p>

                <p>One such driver, Chris Tylee, reached out to the Consumer Protection Bureau (CPB) after receiving a
                    second charge just days after paying the first. His case reveals a deeper flaw in how the system is
                    designed and enforced.</p>

                <div class="p-4 rounded bg-white border-start border-4 border-warning mt-4">
                    <h5 class="fw-bold text-warning">A Case of Unfair Double-Charging</h5>
                    <p class="mb-0">Chris had dropped off a passenger at
                        Terminal 3 and promptly paid the £6 fee online.
                        Later, as he tried to reach the short-stay car park,
                        unclear signs and lane layouts led him unintentionally
                        back through the same "Drop-Off Zone."
                        He did not stop. He did not drop off anyone. Yet,
                        he was charged again.</p>
                </div>

                <blockquote class="blockquote px-4 py-3 mt-4"
                    style="background:#fff3cd; border-left: 5px solid #FFC107; border-radius: 6px;">
                    <p class="mb-0 fst-italic text-dark">"Apparently missing a
                        turning and driving round again is now a finable offence,"
                        Chris said. "If that's the case,
                        this is not a drop-off zone — it is a toll road."</p>
                </blockquote>

                <p class="mt-4">CPB's review of APCOA's evidence confirms it: the system charges per camera pass, not
                    per drop-off. There is no requirement for the vehicle to stop or for a passenger to be dropped.</p>

                <div class="p-4 rounded bg-white border-start border-4 border-danger mt-4">
                    <h5 class="fw-bold text-danger mb-3">System Flaws Exposed</h5>
                    <ul class="ps-3 list-unstyled">
                        <li>⬥ A driver who does not stop can still be billed.</li>
                        <li>⬥ A motorist who accidentally re-enters can face another
                            £6 charge.</li>
                        <li>⬥ The label "Drop-Off Zone"
                            misleads drivers — it is effectively a per-use
                            toll road operating under a parking brand.</li>
                    </ul>
                </div>

                <p class="mt-4">This approach does not just confuse motorists
                    , it profits from honest mistakes. Many of those affected are visitors, elderly drivers, or people
                    unfamiliar with Heathrow's complex road layout.</p>

                <div class="p-4 rounded bg-white border-start border-4 border-primary mt-4">
                    <h5 class="fw-bold text-primary">CPB's Formal Demands</h5>
                    <p class="mb-3">Following its investigation, the Consumer Protection Bureau has written formally to
                        APCOA Parking and Heathrow Airport Holdings, calling for:</p>
                    <ul class="ps-3 list-unstyled">
                        <li>⬥ Clearer signage and lane separation between drop-off and short-stay routes.</li>
                        <li>⬥ Transparent terminology that reflects the true nature of the charge — a toll, not a
                            parking fee.</li>
                        <li>⬥ A full review of the system's compliance with the Consumer Protection from Unfair Trading
                            Regulations 2008 and the Consumer Rights Act 2015.</li>
                    </ul>
                </div>

                <p class="mt-4">Although APCOA has since cancelled Chris's
                    additional charge after CPB's intervention, his case is far from unique
                    and it exposes what may be a systemic unfairness in Heathrow's drop-off model.</p>

                <blockquote class="blockquote px-4 py-3 mt-4"
                    style="background:#fff3cd; border-left: 5px solid #FFC107; border-radius: 6px;">
                    <p class="mb-0 fst-italic text-dark">"When enforcement relies on confusion, it is not regulation —
                        it is exploitation," said Yousouf Jhugroo, Managing Director of CPB. "Airport operators must stop
                        passing the blame to contractors and take direct responsibility for how consumers are treated."
                    </p>
                </blockquote>

                <p class="mt-4">Heathrow may justify the charge as part of its environmental strategy, but fairness,
                    clarity, and transparency are non-negotiable principles in consumer policy.</p>

                <div class="alert alert-primary mt-5" role="alert">
                    <h5 class="fw-bold">Have You Been Affected?</h5>
                    <p class="mb-0">If you have experienced similar treatment or been billed twice for a single airport
                        visit, contact <a
                            href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk</a>
                        with the subject line APCOA Drop-Off Case.</p>
                </div>

                <div class="text-center mt-5">
                    <p class="text-uppercase text-danger fw-bold">CPB will continue to press for change — because a fair
                        journey shouldn't come with a double toll.</p>
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