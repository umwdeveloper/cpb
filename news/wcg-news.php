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
    <title> Are Trustpilot Reviews Moderated Fairly?</title>
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
        href="https://www.consumerprotectionbureau.co.uk/news/are-trustpilot-reviews-moderated-fairly.php">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>


<main>

    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto news-wrapper p-0 border-0" style="background:rgb(94 37 101 / 15%); border:1px solid black">
                    <img src="../assets/images/news/wcg-news.png" alt="Windsor Care Centre CQC Rating"
                        class="w-100 h-auto">

                    <div class="px-lg-4 mx-2 px-3">
                        <h1 class="news-heading text-uppercase my-3" style="color:#610063">
                                Windsor Care Centre Turns the Tide: <span style="color:#E0B632"> CQC Applauds the Turnaround</span>
                        </h1>
                     
                        <h2 class="subtitle-bullet">From Caution to Confidence: Windsor Care Centre Earns “Good” Rating
                            Across the Board in Latest CQC Inspection</h2>

                        <p class="text mt-3"><b>Less than two years ago, Windsor Care Centre was
                            under scrutiny. A “Requires Improvement” rating in 2023 raised serious questions about
                            safety, governance, and oversight. Fast forward to 2025, and the story has changed
                            dramatically.</b></p>

                        <p class="text">Following an unannounced inspection by the Care Quality Commission (CQC) between
                            22 April and 5 May 2025, Windsor Care Centre has now been rated ‘Good’ across all five key
                            criteria: Safe, Effective, Caring, Responsive, and Well-led.</p>

                        <p class="text">The CQC’s new report offers a clear verdict: Windsor Care Centre has cleaned
                            house — literally and structurally — with a focus on safer care, visible leadership, and
                            putting residents firmly at the heart of its decisions.</p>

                        <p class="text">Inspectors praised the home’s quick turnaround on previous breaches, describing
                            staff as well-trained, attentive, and confident in managing risk. Falls and skin injuries
                            among residents have declined, and audit systems are now in place to flag issues early and
                            act fast. Even medication concerns spotted during the inspection were addressed immediately
                            and transparently — something not often seen in care settings under pressure.</p>

                        <p class="text">Inside, the home was found to be “clean, well-maintained,” with strong infection
                            control practices. Outside the paperwork, the real story came from the people living there.
                        </p>

                        <blockquote class="text px-4 py-2 my-3"
                            style="background-color:#FEE8CF; border-left: 5px solid #FF9800;">
                            <em>“It feels different now, we’re listened to,”</em> one resident told inspectors. Others
                            mentioned feeling safe, supported, and respected.
                        </blockquote>

                        <p class="text">The report did note that activity levels had dipped, but residents also
                            confirmed that outings and family visits had resumed, and the manager has since recruited
                            new activity staff in direct response to the feedback.</p>

                        <p class="text">Yousouf Jhugroo, the Nominated Individual for WCC, who took charge during a
                            difficult period, welcomed the results but remained grounded:</p>

                        <blockquote class="text px-4 py-2 my-3"
                            style="background-color:#FEE8CF; border-left: 5px solid #FF9800;">
                            <em>“This isn’t about ticking boxes,”</em> he said. “It’s about culture. The team has worked
                            hard to rebuild trust with residents, with families, and with our staff. This report shows
                            that when you put people first and own your mistakes, real change happens.”
                        </blockquote>

                        <p class="text">The CQC echoed this sentiment, noting that staff knew residents’ needs and life
                            histories well, creating a personalised, dignified care environment. The kitchen team was
                            also recognised for offering “a large range of meal options that respect people’s religious
                            and cultural preferences.”</p>

                        <p class="text">The management team credits the turnaround to a combination of relentless focus,
                            clear accountability, and open collaboration with health and social care partners.</p>

                        <blockquote class="text px-4 py-2 my-3"
                            style="background-color:#FEE8CF; border-left: 5px solid #FF9800;">
                            <strong>In a joint statement, the Centre’s Directors, Dr H. Kumar and Dr P. Anand
                                said:</strong><br>
                            “We know the past wasn’t perfect, and we didn’t hide from it. But we acted and this result
                            is a tribute to the professionalism and resilience of our team. Windsor Care Centre is now a
                            place of safety, compassion, and dignity, and we’re proud to share that with our community.”
                        </blockquote>

                        <p class="text tertiary-text text-center pb-4 pt-3" style="color:#610063"><strong>The message is clear:</strong> Windsor Care Centre has not just
                            improved: <span style="color:#E0B632">It has evolved.</span> </p>
                    </div>
                </div>

            </div>
        </div>
    </section>





</main>


</body>

</html>