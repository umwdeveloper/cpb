<?php

include_once "includes/functions.php";
include_once "includes/mail.php";

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

$issueFormSubmitted = false;
if (isset($_POST['form-issue'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $consumerIssue = $_POST['consumer-issue'];
    $price = $_POST['price'];
    $complaintAbout = $_POST['complaint-about'];
    $reason = $_POST['reason'];

    $subject = "Appointment";

    $body = "<strong>Name: </strong> $name" . "<br>" .
        "<strong>Email: </strong> $email" . "<br>" .
        "<strong>Phone: </strong> $phone" . "<br>" .
        "<strong>Desired Resolution: </strong> $address" . "<br>" .
        "<strong>Consumer Issue: </strong> $consumerIssue" . "<br>" .
        "<strong>Price of Product/Service: </strong> $price" . "<br>" .
        "<strong>Product or Service Complaining about: </strong> $complaintAbout" . "<br>" .
        "<strong>Nature of Complaint Complaint: </strong> $reason";

    $recaptchaSecret = '6LeWW5YqAAAAAEjGUeFCrxd0-lBEUAAZR0v0q9tO';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
        // reCAPTCHA validated
        $msg = sendMail($email, $name, $subject, $body);

        $issueFormSubmitted = true;
    } else {
        // reCAPTCHA failed
        $msg['status'] = 'error';
        $msg['message'] = "Please complete the reCAPTCHA verification.";

        $issueFormSubmitted = true;
    }
}

// $feedbacks = findAll("feedbacks");

?>

<!doctype html>
<html lang="en">

<head>
    <title>Consumer Protection Bureau (CPB) </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name='description'
        content='The Consumer Protection Bureau empowers consumers, upholds consumer rights, enforces consumer protection laws, and addresses consumer and customer complaints with precision.' />
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/complaint.php">


    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://analytics.ahrefs.com/analytics.js" data-key="VTs14Xy/Kdyw0NN4JQulEw" defer="true"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/utils.js"></script>
</head>


<?php include 'assets/include/header.php'; ?>
<main class="home-main">

   <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-10 mx-auto mb-lg-4 mb-3">
                 
                    <h1 class="main-heading text-center text-uppercase  mt-2">
                        <span class="text-scondry">Need Help?</span><br>CPB Is Here to Assist!
                    </h1>
                    <p class="text-md text-center">
                       The Consumer Protection Bureau fights your consumer battles on your behalf. In line
                                with <strong>consumer protection UK</strong> standards, we’ll help you secure
                                refunds, replacements, repairs, and, where appropriate, compensation for poor
                                service, faulty products, or any failure to meet expected quality.
                    </p>

                </div>
                <div class="col-lg-4">
                    <div class="contact-card mt-4 ">
                        <div class="contact-icon mb-3">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Mobile</h3>
                            <a class="date text-dark" href="tel:+44 (0)2035854002"> +44
                                (0)2035854002</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="contact-card mt-4">
                        <div class="contact-icon mb-3"> <i class="bi bi-geo-alt-fill "></i>
                        </div>
                        <div class="contact-text">
                            <h3>Location</h3>

                            <p class="date my-0 py-0 text-center text-dark">
                                83 VICTORIA STREET<br>

                                WESTMINSTER, LONDON,

                                SW1H 0HW
                            </p>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4">

                    <div class="contact-card mt-4 ">
                        <div class="contact-icon mb-3">
                            <i class="bi bi-envelope-fill "></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <a class="date pb-0 mb-0 text-dark"
                                href="mailto:info@consumerprotectionbureau.co.uk">info@consumerprotectionbureau.co.uk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="contact-area py-lg-5 py-4">
            <div class="container py-4">
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="contact-text">
                            <div class="title mb-4">
                                <h2>Get Help</h2>
                            </div>

                            <!-- <p class="text">
                                COMPLETE OUR SHORT QUESTIONNAIRE TO SEE IF WE CAN HELP YOU AND PROVIDE A NO
                                OBLIGATION QUOTE:
                            </p> -->
                            <!-- <span class="date">
                                COMPLETE OUR SHORT QUESTIONNAIRE TO SEE IF WE CAN HELP YOU AND PROVIDE A NO
                                OBLIGATION QUOTE:
                            </span>
                            <br> -->
                            <!-- <img src="assets/images/Internship-amico.png" alt="Contact Consumer Protection Bureau"
                                class="help-form mt-4 mb-lg-0 mb-4"> -->
                        </div>
                    </div>

                    <div class="col col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-content ">
                            <div class="contact-form">
                                <?php if (isset($_POST['form-issue'])): ?>
                                <?php if ($msg['status'] == 'success'): ?>
                                <p class="alert alert-success text-center"><?php echo $msg['message'] ?></p>
                                <?php else: ?>
                                <p class="alert alert-danger text-center"><?php echo $msg['message'] ?></p>
                                <?php endif; ?>
                                <?php endif; ?>
                                <form method="post" class="contact-validation-active" id="issue-form"
                                    novalidate="novalidate">
                                    <div class="half-col pe-lg-2 mb-3">
                                        <label for="Name" class="text-white">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control form-input"
                                            placeholder="Your Name" required>
                                        <div class="invalid-feedback">Please enter your name</div>
                                    </div>
                                    <div class="half-col ps-lg-2 mb-3">
                                        <label for="phone" class="text-white">Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" id="phone" class="form-control "
                                            placeholder="Phone" required>
                                        <div class="invalid-feedback">Please enter a valid phone number</div>
                                    </div>
                                    <div class=" mb-3">
                                        <label for="email" class="text-white">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control form-input"
                                            placeholder="Email" required>
                                        <div class="invalid-feedback">Please enter a valid email address</div>
                                    </div>
                                    <input type="hidden" name="form-issue">

                                    <div class=" mb-3">
                                        <label for="consumer-issue" class="text-white">Consumer Issues <span class="text-danger">*</span></label>
                                        <select name="consumer-issue" id="consumer-issue" class="form-control " required>
                                            <option value="" selected disabled>Select Consumer Issue</option>
                                            <option value="Travels">Travels</option>
                                            <option value="Energy/Utilities">Energy/Utilities</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Health and Foods">Health and Foods</option>
                                            <option value="Consumer Rights">Consumer Rights</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a consumer issue</div>
                                    </div>

                                    <div class="row">
                                       
                                        <div class="col-md-7 mb-3">
                                            <label for="currency" class="text-white">Currency <span class="text-danger">*</span></label>
                                            <select name="currency" id="currency" class="form-control " required>
                                                <!-- Most common currencies first -->
                                                <option value="GBP" selected>British Pound Sterling (GBP - £)</option>
                                                <option value="EUR">Euro (EUR - €)</option>
                                                <option value="USD" >US Dollar (USD - $)</option>

                                                <!-- All other currencies alphabetically -->
                                                <option value="AED">United Arab Emirates Dirham (AED - د.إ.‏)</option>
                                                <option value="AFN">Afghan Afghani (AFN - ؋)</option>
                                                <option value="ALL">Albanian Lek (ALL - Lek)</option>
                                                <option value="AMD">Armenian Dram (AMD - դր.)</option>
                                                <option value="ARS">Argentine Peso (ARS - $)</option>
                                                <option value="AUD">Australian Dollar (AUD - $)</option>
                                                <option value="AZN">Azerbaijani Manat (AZN - ман.)</option>
                                                <option value="BAM">Bosnia-Herzegovina Mark (BAM - KM)</option>
                                                <option value="BDT">Bangladeshi Taka (BDT - ৳)</option>
                                                <option value="BGN">Bulgarian Lev (BGN - лв.)</option>
                                                <option value="BHD">Bahraini Dinar (BHD - د.ب.‏)</option>
                                                <option value="BIF">Burundian Franc (BIF - FBu)</option>
                                                <option value="BND">Brunei Dollar (BND - $)</option>
                                                <option value="BOB">Bolivian Boliviano (BOB - Bs)</option>
                                                <option value="BRL">Brazilian Real (BRL - R$)</option>
                                                <option value="BWP">Botswanan Pula (BWP - P)</option>
                                                <option value="BYN">Belarusian Ruble (BYN - руб.)</option>
                                                <option value="BZD">Belize Dollar (BZD - $)</option>
                                                <option value="CAD">Canadian Dollar (CAD - $)</option>
                                                <option value="CDF">Congolese Franc (CDF - FrCD)</option>
                                                <option value="CHF">Swiss Franc (CHF)</option>
                                                <option value="CLP">Chilean Peso (CLP - $)</option>
                                                <option value="CNY">Chinese Yuan (CNY - CN¥)</option>
                                                <option value="COP">Colombian Peso (COP - $)</option>
                                                <option value="CRC">Costa Rican Colón (CRC - ₡)</option>
                                                <option value="CVE">Cape Verdean Escudo (CVE - CV$)</option>
                                                <option value="CZK">Czech Republic Koruna (CZK - Kč)</option>
                                                <option value="DJF">Djiboutian Franc (DJF - Fdj)</option>
                                                <option value="DKK">Danish Krone (DKK - kr)</option>
                                                <option value="DOP">Dominican Peso (DOP - RD$)</option>
                                                <option value="DZD">Algerian Dinar (DZD - د.ج.‏)</option>
                                                <option value="EGP">Egyptian Pound (EGP - ج.م.‏)</option>
                                                <option value="ERN">Eritrean Nakfa (ERN - Nfk)</option>
                                                <option value="ETB">Ethiopian Birr (ETB - Br)</option>
                                                <option value="GEL">Georgian Lari (GEL)</option>
                                                <option value="GHS">Ghanaian Cedi (GHS - GH₵)</option>
                                                <option value="GNF">Guinean Franc (GNF - FG)</option>
                                                <option value="GTQ">Guatemalan Quetzal (GTQ - Q)</option>
                                                <option value="HKD">Hong Kong Dollar (HKD - $)</option>
                                                <option value="HNL">Honduran Lempira (HNL - L)</option>
                                                <option value="HRK">Croatian Kuna (HRK - kn)</option>
                                                <option value="HUF">Hungarian Forint (HUF - Ft)</option>
                                                <option value="IDR">Indonesian Rupiah (IDR - Rp)</option>
                                                <option value="ILS">Israeli New Sheqel (ILS - ₪)</option>
                                                <option value="INR">Indian Rupee (INR - টকা)</option>
                                                <option value="IQD">Iraqi Dinar (IQD - د.ع.‏)</option>
                                                <option value="IRR">Iranian Rial (IRR - ﷼)</option>
                                                <option value="ISK">Icelandic Króna (ISK - kr)</option>
                                                <option value="JMD">Jamaican Dollar (JMD - $)</option>
                                                <option value="JOD">Jordanian Dinar (JOD - د.أ.‏)</option>
                                                <option value="JPY">Japanese Yen (JPY - ￥)</option>
                                                <option value="KES">Kenyan Shilling (KES - Ksh)</option>
                                                <option value="KHR">Cambodian Riel (KHR - ៛)</option>
                                                <option value="KMF">Comorian Franc (KMF - FC)</option>
                                                <option value="KRW">South Korean Won (KRW - ₩)</option>
                                                <option value="KWD">Kuwaiti Dinar (KWD - د.ك.‏)</option>
                                                <option value="KZT">Kazakhstani Tenge (KZT - тңг.)</option>
                                                <option value="LBP">Lebanese Pound (LBP - ل.ل.‏)</option>
                                                <option value="LKR">Sri Lankan Rupee (LKR - SL Re)</option>
                                                <option value="LYD">Libyan Dinar (LYD - د.ل.‏)</option>
                                                <option value="MAD">Moroccan Dirham (MAD - د.م.‏)</option>
                                                <option value="MDL">Moldovan Leu (MDL)</option>
                                                <option value="MGA">Malagasy Ariary (MGA)</option>
                                                <option value="MKD">Macedonian Denar (MKD)</option>
                                                <option value="MMK">Myanma Kyat (MMK - K)</option>
                                                <option value="MOP">Macanese Pataca (MOP - MOP$)</option>
                                                <option value="MUR">Mauritian Rupee (MUR - MURs)</option>
                                                <option value="MXN">Mexican Peso (MXN - $)</option>
                                                <option value="MYR">Malaysian Ringgit (MYR - RM)</option>
                                                <option value="MZN">Mozambican Metical (MZN - MTn)</option>
                                                <option value="NAD">Namibian Dollar (NAD - N$)</option>
                                                <option value="NGN">Nigerian Naira (NGN - ₦)</option>
                                                <option value="NIO">Nicaraguan Córdoba (NIO - C$)</option>
                                                <option value="NOK">Norwegian Krone (NOK - kr)</option>
                                                <option value="NPR">Nepalese Rupee (NPR - नेरू)</option>
                                                <option value="NZD">New Zealand Dollar (NZD - $)</option>
                                                <option value="OMR">Omani Rial (OMR - ر.ع.‏)</option>
                                                <option value="PAB">Panamanian Balboa (PAB - B/.)</option>
                                                <option value="PEN">Peruvian Nuevo Sol (PEN - S/.)</option>
                                                <option value="PHP">Philippine Peso (PHP - ₱)</option>
                                                <option value="PKR">Pakistani Rupee (PKR - ₨)</option>
                                                <option value="PLN">Polish Zloty (PLN - zł)</option>
                                                <option value="PYG">Paraguayan Guarani (PYG - ₲)</option>
                                                <option value="QAR">Qatari Rial (QAR - ر.ق.‏)</option>
                                                <option value="RON">Romanian Leu (RON)</option>
                                                <option value="RSD">Serbian Dinar (RSD - дин.)</option>
                                                <option value="RUB">Russian Ruble (RUB - ₽)</option>
                                                <option value="RWF">Rwandan Franc (RWF - FR)</option>
                                                <option value="SAR">Saudi Riyal (SAR - ر.س.‏)</option>
                                                <option value="SDG">Sudanese Pound (SDG)</option>
                                                <option value="SEK">Swedish Krona (SEK - kr)</option>
                                                <option value="SGD">Singapore Dollar (SGD - $)</option>
                                                <option value="SOS">Somali Shilling (SOS - Ssh)</option>
                                                <option value="SYP">Syrian Pound (SYP - ل.س.‏)</option>
                                                <option value="THB">Thai Baht (THB - ฿)</option>
                                                <option value="TND">Tunisian Dinar (TND - د.ت.‏)</option>
                                                <option value="TOP">Tongan Paʻanga (TOP - T$)</option>
                                                <option value="TRY">Turkish Lira (TRY - TL)</option>
                                                <option value="TTD">Trinidad and Tobago Dollar (TTD - $)</option>
                                                <option value="TWD">New Taiwan Dollar (TWD - NT$)</option>
                                                <option value="TZS">Tanzanian Shilling (TZS - TSh)</option>
                                                <option value="UAH">Ukrainian Hryvnia (UAH - ₴)</option>
                                                <option value="UGX">Ugandan Shilling (UGX - USh)</option>
                                                <option value="UYU">Uruguayan Peso (UYU - $)</option>
                                                <option value="UZS">Uzbekistan Som (UZS)</option>
                                                <option value="VEF">Venezuelan Bolívar (VEF - Bs.F.)</option>
                                                <option value="VND">Vietnamese Dong (VND - ₫)</option>
                                                <option value="XAF">CFA Franc BEAC (XAF - FCFA)</option>
                                                <option value="XOF">CFA Franc BCEAO (XOF - CFA)</option>
                                                <option value="YER">Yemeni Rial (YER - ر.ي.‏)</option>
                                                <option value="ZAR">South African Rand (ZAR - R)</option>
                                                <option value="ZMK">Zambian Kwacha (ZMK - ZK)</option>
                                                <option value="ZWL">Zimbabwean Dollar (ZWL - ZWL$)</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a currency</div>
                                        </div>
                                         <div class="col-md-5 mb-3">
                                            <label for="price" class="text-white">Price of Product/Service <span class="text-danger">*</span></label>
                                            <input type="number" name="price" id="price" class="form-control form-input"
                                                placeholder="Price amount" required min="0" step="0.01">
                                            <div class="invalid-feedback">Please enter a valid price</div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="complaint-about" class="text-white">Product or Service Complaining about <span class="text-danger">*</span></label>
                                        <input type="text" name="complaint-about" id="complaint-about"
                                            class="form-control form-input" placeholder="Product or Service Complaining about" required>
                                        <div class="invalid-feedback">Please specify what you are complaining about</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="text-white">Desired Resolution <span class="text-danger">*</span></label>
                                        <select name="address" id="address" class="form-control" required>
                                            <option value="" disabled selected>Select Desired Resolution</option>
                                            <option value="Refund">Refund</option>
                                            <option value="Repair">Repair</option>
                                            <option value="Replacement">Replacement</option>
                                             <option value="Compensation">Compensation</option>
                                              <option value="Apology">Apology</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your desired resolution</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="reason" class="text-white">Nature of Complaint <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="reason" id="reason"
                                            placeholder="Please provide detailed information about your complaint (minimum 30 words)..." required rows="5"></textarea>
                                        <div class="invalid-feedback">Please enter a detailed complaint (minimum 30 words)</div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LeWW5YqAAAAAO7CXW7SvpYQih0o9w_XaILDCy3j">
                                    </div>

                                    <div class="submit-btn-wrapper">
                                        <button type="submit" name="issue" class="main-btn">Submit</button>
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
    </section>

    
    <section class="py-lg-5 py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="main-heading text-center text-uppercase mb-5 mt-lg-2">
                        Visit Our Subsidiary Companies
                    </h2>

                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="https://www.compliance-experts.co.uk/" target="_blank"
                        class="text-decoration-none text-dark">
                        <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                            <img src="assets/images/CRC-logo.png" alt="CRC logo" style="width:130px; height:auto;">
                            <h3 class="mt-4 text-center text-md" style=" font-weight:500;">Compilance and Risk
                                Consultancy</h3>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="https://carehomecompliance.com/" target="_blank" class="text-decoration-none text-dark">
                        <div class="amenity-card d-flex justify-content-center align-items-center flex-column">
                            <img src="assets/images/Care Home Compilance.png" alt="CHC logo"
                                style="width:100px; height:auto;">
                            <h3 class="mt-4 text-center text-md" style=" font-weight:500;">Care Home Compilance</h3>
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
                                    <div class="g-recaptcha" data-sitekey="6LeWW5YqAAAAAO7CXW7SvpYQih0o9w_XaILDCy3j">
                                    </div>

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


<div class="modal" tabindex="-1" id="chrismas">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent shadow-none border-0">

            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="chrismas-close text-end ms-auto" data-bs-dismiss="modal"
                        aria-label="Close">x</button>
                </div>
                <img src="assets/images/chrismas.png" alt="Merry Chrismas from Conumer Protection Bureau"
                    class="img-fluid ps-lg-4 d-lg-block d-none">
            </div>

        </div>
    </div>
</div>














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

issueFormSubmitted = <?php echo json_encode($issueFormSubmitted); ?>;

if (issueFormSubmitted) {
    const element = document.getElementById("issue-form");
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth', // smooth scrolling
            block: 'start' // align to the top of the element
        });
    }
}
</script>
<script>
    const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
    initialCountry: "gb",
    preferredCountries: ["gb", "us"],
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/utils.js",
    separateDialCode: true,
    formatOnDisplay: true,
    autoPlaceholder: "polite"
});

// Form validation
document.getElementById('issue-form').addEventListener('submit', function(e) {
    let isValid = true;
    
    // Reset all error states
    this.querySelectorAll('.is-invalid').forEach(el => {
        el.classList.remove('is-invalid');
    });

    // Name validation
    const name = document.getElementById('name');
    if (!name.value.trim()) {
        name.classList.add('is-invalid');
        isValid = false;
    }

    // Phone validation using intl-tel-input
    if (!phoneInput.isValidNumber()) {
        phoneInputField.classList.add('is-invalid');
        isValid = false;
    }

    // Email validation
    const email = document.getElementById('email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
        email.classList.add('is-invalid');
        isValid = false;
    }

    // Consumer issue validation
    const consumerIssue = document.getElementById('consumer-issue');
    if (!consumerIssue.value || consumerIssue.value === "") {
        consumerIssue.classList.add('is-invalid');
        isValid = false;
    }

    // Price validation
    const price = document.getElementById('price');
    if (!price.value || parseFloat(price.value) < 0) {
        price.classList.add('is-invalid');
        isValid = false;
    }

    // Currency validation
    const currency = document.getElementById('currency');
    if (!currency.value) {
        currency.classList.add('is-invalid');
        isValid = false;
    }

    // Complaint about validation
    const complaintAbout = document.getElementById('complaint-about');
    if (!complaintAbout.value.trim()) {
        complaintAbout.classList.add('is-invalid');
        isValid = false;
    }

    // Desired resolution validation
    const resolution = document.getElementById('address');
    if (!resolution.value) {
        resolution.classList.add('is-invalid');
        isValid = false;
    }

    // Nature of complaint validation (minimum 30 words)
    const reason = document.getElementById('reason');
    const wordCount = reason.value.trim().split(/\s+/).length;
    if (!reason.value.trim() || wordCount < 30) {
        reason.classList.add('is-invalid');
        reason.nextElementSibling.textContent = wordCount < 30 
            ? `Please enter at least 30 words (current: ${wordCount})` 
            : 'Please enter your complaint';
        isValid = false;
    }

    // reCAPTCHA validation
    const recaptchaResponse = grecaptcha.getResponse();
    if (!recaptchaResponse) {
        document.querySelector('.g-recaptcha').classList.add('is-invalid');
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
        // Scroll to the first error
        const firstError = document.querySelector('.is-invalid');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }
});

// Real-time word count for complaint
document.getElementById('reason').addEventListener('input', function() {
    const wordCount = this.value.trim().split(/\s+/).filter(word => word.length > 0).length;
    const minWords = 30;
    
    if (wordCount < minWords) {
        this.classList.add('is-invalid');
        this.nextElementSibling.textContent = `Please enter at least ${minWords} words (current: ${wordCount})`;
    } else {
        this.classList.remove('is-invalid');
        this.nextElementSibling.textContent = '';
    }
});

// Price input validation - allow only numbers and decimal point
document.getElementById('price').addEventListener('input', function() {
    this.value = this.value.replace(/[^\d.]/g, '');
    if (this.value.split('.').length > 2) {
        this.value = this.value.replace(/\.+$/, '');
    }
});

// Clear validation styling on input
document.querySelectorAll('#issue-form input, #issue-form select, #issue-form textarea').forEach(element => {
    element.addEventListener('input', function() {
        this.classList.remove('is-invalid');
    });
});
</script>
</body>

</html>