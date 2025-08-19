<?php

include_once "includes/mail.php";

$surveySubmitted = false;
if (isset($_POST['form-survey'])) {
    // Personal Information
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    // Survey Fields
    $country = $_POST['country'];
    $age_group = $_POST['age_group'];
    $taken_repair = $_POST['taken_repair'];
    $product_repaired = isset($_POST['product_repaired']) ? $_POST['product_repaired'] : 'N/A';
    $diagnostic_report = $_POST['diagnostic_report'];
    $repair_cost = $_POST['repair_cost'];
    $repair_currency = $_POST['repair_currency'];
    $proportionate_options = $_POST['proportionate_options'];
    $data_loss_warning = $_POST['data_loss_warning'];
    $refurbished_parts = $_POST['refurbished_parts'];
    $pressure_felt = $_POST['pressure_felt'];
    $satisfaction = $_POST['satisfaction'];
    $support_right_to_repair = $_POST['support_right_to_repair'];
    $experience = isset($_POST['experience']) ? $_POST['experience'] : '';

    $subject = "Apple Repair Survey Submission";

    $body = "<h2>Personal Information</h2>" .
        "<strong>Name: </strong> $name<br>" .
        "<strong>Email: </strong> $email<br>" .
        "<strong>Phone: </strong> $phone<br><br>" .
        
        "<h2>Survey Responses</h2>" .
        "<strong>Country: </strong> $country<br>" .
        "<strong>Age Group: </strong> $age_group<br>" .
        "<strong>Taken Apple Product for Repair: </strong> $taken_repair<br>" .
        "<strong>Product Repaired: </strong> $product_repaired<br>" .
        "<strong>Diagnostic Report Provided: </strong> $diagnostic_report<br>" .
        "<strong>Repair Cost: </strong> $repair_cost $repair_currency<br>" .
        "<strong>Proportionate Repair Options Offered: </strong> $proportionate_options<br>" .
        "<strong>Data Loss Warning Given: </strong> $data_loss_warning<br>" .
        "<strong>Refurbished Parts Mentioned: </strong> $refurbished_parts<br>" .
        "<strong>Felt Pressured: </strong> $pressure_felt<br>" .
        "<strong>Overall Satisfaction: </strong> $satisfaction<br>" .
        "<strong>Support Right to Repair: </strong> $support_right_to_repair<br>" .
        "<strong>Experience Description: </strong><br>$experience";

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

?>

<!doctype html>
<html lang="en">

<head>
    <title>Contact - Consumer Protection Bureau (CPB)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Get in touch with the Consumer Protection Bureau for assistance with consumer complaints and inquiries about UK consumer protection laws. We're here to help protect your rights—contact us today!">
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
    <link rel="canonical" href="https://www.consumerprotectionbureau.co.uk/contact.php">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/utils.js"></script>
</head>


<main>


    <section class="py-lg-5 py-4 bg-light about-hero">
        <div class="container">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-10 mx-auto  ">
                    <div class="d-flex justify-content-center">
                        <a class="navbar-brand" href="/">
                    <img src="assets/images/cpb-logo.png" alt="Consumer Protection Bureau Logo"
                        class="img-fluid ">
                </a>
                    </div>
                    <h1 class="main-heading text-center text-uppercase  mt-4">
                        <span class="text-scondry">Consumer Protection Bureau
                    </h1>
                     <h2 class="main-heading text-center text-uppercase  mt-4">
                        <span class="text-scondry"></span>Consumer Survey  – Apple Repair Practices
                    </h2>
                    <p class="text-md text-center">
                        To collect evidence from consumers worldwide regarding their experiences with Apple
                        repair services, including pricing, data handling, diagnostic transparency, and warranty
                        restrictions. Results will support CPB’s advocacy with regulators and international Right
                        to Repair coalitions.
                    </p>

                </div>

            </div>
        </div>
    </section>

    <section class="pb-lg-5 pb-4 bg-light position-relative">
        <div class="container">
            <div class="row position-relative align-items-center white-bg">
                <div class="contact-area bg-white shadow rounded-2 py-lg-4 py-3 px-lg-4 px-2 ">
                    <div class="container ">
                        <div class="row ">
                            <div class="col col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-content ">
                                    <h2 class="text-lg text-secondry text-uppercase text-center">Apple Repair Survey
                                    </h2>
                                    <p class="text-white text-center mb-lg-4">Please help us understand your Apple
                                        repair experience.</p>
                                    <div class="survey-form">
                                        <?php if (isset($_POST['form-survey'])): ?>
                                        <?php if ($msg['status'] == 'success'): ?>
                                        <p class="alert alert-success text-center"><?php echo $msg['message'] ?></p>
                                        <?php else: ?>
                                        <p class="alert alert-danger text-center"><?php echo $msg['message'] ?></p>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                        <form method="post" class="survey-validation-active" id="survey-form"
                                            novalidate="novalidate">
                                            <h3 class="form-section-title ms-lg-3">Personal Information</h3>

                                            <div class=" div-padding">
                                                <label for="name" class="text-white">Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="name" id="name" class="form-control form-input"
                                                    placeholder="Your Name" required>
                                                <div class="invalid-feedback">Please enter your name</div>
                                            </div>

                                            <div class=" div-padding">
                                                <label for="phone" class="text-white">Phone Number <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="phone" id="phone" class="form-control"
                                                    placeholder="Phone" required>
                                                <div class="invalid-feedback">Please enter a valid phone number</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="email" class="text-white">Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="email" name="email" id="email"
                                                    class="form-control form-input" placeholder="Email" required>
                                                <div class="invalid-feedback">Please enter a valid email address</div>
                                            </div>

                                            <h3 class="form-section-title mt-4 ms-lg-3 mb-4">Survey Questions</h3>

                                            <div class="div-padding">
                                                <label for="country" class="text-white">Which country are you based in?
                                                    <span class="text-danger">*</span></label>
                                                <select name="country" id="country" class="form-control" required>
                                                    <option value="">Select Country</option>
                                                </select>
                                                <div class="invalid-feedback">Please select your country</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="age_group" class="text-white">What is your age group? <span
                                                        class="text-danger">*</span></label>
                                                <select name="age_group" id="age_group" class="form-control" required>
                                                    <option value="">Select Age Group</option>
                                                    <option value="Under 18">Under 18</option>
                                                    <option value="18-24">18-24</option>
                                                    <option value="25-34">25-34</option>
                                                    <option value="35-44">35-44</option>
                                                    <option value="45-54">45-54</option>
                                                    <option value="55-64">55-64</option>
                                                    <option value="65+">65+</option>
                                                </select>
                                                <div class="invalid-feedback">Please select your age group</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="taken_repair" class="text-white">Have you ever taken an
                                                    Apple product for repair? <span class="text-danger">*</span></label>
                                                <select name="taken_repair" id="taken_repair" class="form-control"
                                                    required>
                                                    <option value="">Select Answer</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">Please select an answer</div>
                                            </div>

                                            <div class="div-padding" id="product_repaired_div">
                                                <label for="product_repaired" class="text-white">Which product did you
                                                    take for repair? <span class="text-danger">*</span></label>
                                                <select name="product_repaired" id="product_repaired"
                                                    class="form-control">
                                                    <option value="">Select Product</option>
                                                    <option value="MacBook">MacBook</option>
                                                    <option value="iPhone">iPhone</option>
                                                    <option value="iPad">iPad</option>
                                                    <option value="Watch">Watch</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <div class="invalid-feedback">Please select the product</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="diagnostic_report" class="text-white">Were you provided with
                                                    a written diagnostic report? <span
                                                        class="text-danger">*</span></label>
                                                <select name="diagnostic_report" id="diagnostic_report"
                                                    class="form-control" required>
                                                    <option value="">Select Answer</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">Please select an answer</div>
                                            </div>

                                            <div class=" div-padding">
                                                <label for="repair_cost" class="text-white">What repair cost were you
                                                    quoted? <span class="text-danger">*</span></label>
                                                <input type="number" name="repair_cost" id="repair_cost"
                                                    class="form-control" placeholder="Enter amount" required>
                                                <div class="invalid-feedback">Please enter the repair cost</div>
                                            </div>

                                            <div class=" div-padding">
                                                <label for="repair_currency" class="text-white">Currency <span
                                                        class="text-danger">*</span></label>
                                                <select name="repair_currency" id="repair_currency" class="form-control"
                                                    required>
                                                    <option value="">Select Currency</option>
                                                </select>
                                                <div class="invalid-feedback">Please select the currency</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="proportionate_options" class="text-white">Were you offered
                                                    proportionate repair options? <span
                                                        class="text-danger">*</span></label>
                                                <select name="proportionate_options" id="proportionate_options"
                                                    class="form-control" required>
                                                    <option value="">Select Answer</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">Please select an answer</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="data_loss_warning" class="text-white">Did Apple warn you
                                                    about potential data loss? <span
                                                        class="text-danger">*</span></label>
                                                <select name="data_loss_warning" id="data_loss_warning"
                                                    class="form-control" required>
                                                    <option value="">Select Answer</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">Please select an answer</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="refurbished_parts" class="text-white">Did Apple mention
                                                    replacement parts might be refurbished? <span
                                                        class="text-danger">*</span></label>
                                                <select name="refurbished_parts" id="refurbished_parts"
                                                    class="form-control" required>
                                                    <option value="">Select Answer</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">Please select an answer</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="pressure_felt" class="text-white">Did you feel pressured
                                                    into accepting Apple's repair terms? <span
                                                        class="text-danger">*</span></label>
                                                <select name="pressure_felt" id="pressure_felt" class="form-control"
                                                    required>
                                                    <option value="">Select Answer</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">Please select an answer</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="satisfaction" class="text-white">How satisfied were you with
                                                    the repair process? <span class="text-danger">*</span></label>
                                                <select name="satisfaction" id="satisfaction" class="form-control"
                                                    required>
                                                    <option value="">Select Satisfaction Level</option>
                                                    <option value="Very satisfied">Very satisfied</option>
                                                    <option value="Satisfied">Satisfied</option>
                                                    <option value="Neutral">Neutral</option>
                                                    <option value="Dissatisfied">Dissatisfied</option>
                                                    <option value="Very dissatisfied">Very dissatisfied</option>
                                                </select>
                                                <div class="invalid-feedback">Please select your satisfaction level
                                                </div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="support_right_to_repair" class="text-white">Would you
                                                    support stronger Right to Repair laws? <span
                                                        class="text-danger">*</span></label>
                                                <select name="support_right_to_repair" id="support_right_to_repair"
                                                    class="form-control" required>
                                                    <option value="">Select Answer</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">Please select an answer</div>
                                            </div>

                                            <div class="div-padding">
                                                <label for="experience" class="text-white">Please describe your Apple
                                                    repair experience (Optional)</label>
                                                <textarea class="form-control" name="experience" id="experience"
                                                    rows="5" placeholder="Share your experience here..."></textarea>
                                            </div>

                                            <input type="hidden" name="form-survey">

                                            <div class="g-recaptcha"
                                                data-sitekey="6LeWW5YqAAAAAO7CXW7SvpYQih0o9w_XaILDCy3j"></div>

                                            <div class="submit-btn-wrapper div-padding">
                                                <button type="submit" name="survey" class="main-btn">Submit
                                                    Survey</button>
                                                <div id="loader" class="d-none">
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
            </div>
        </div>
    </section>

    <section class="bg-light pb-5">
        <div class="container">
            <div class="row">
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
        <div class="col-lg-12">
            <div style="overflow:hidden;resize:none;max-width:100%;width: 100%; height:300px;">
                <div id="my-map-display" style="height:100%; width:100%;max-width:100%;"><iframe
                        style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=83+VICTORIA+STREET+WESTMINSTER,+LONDON,+SW1H+0HW&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                </div><a class="googlecoder" href="https://www.bootstrapskins.com/themes" id="enable-map-info">premium
                    bootstrap themes</a>
                <style>
                #my-map-display .text-marker {}

                .map-generator {
                    max-width: 100%;
                    max-height: 100%;
                    background: none;
                }
                </style>
            </div>
        </div>
    </section>

</main>





<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">
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
<script>
// Initialize phone input
const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.21/build/js/utils.js",
    separateDialCode: true,
    preferredCountries: ["gb", "us"],
    initialCountry: "gb",
    formatOnDisplay: true,
    autoPlaceholder: "polite"
});

// Populate countries dropdown
const countries = [
    "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica",
    "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas",
    "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan",
    "Bolivia, Plurinational State of", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina",
    "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria",
    "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Cayman Islands",
    "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands",
    "Colombia", "Comoros", "Congo", "Congo, The Democratic Republic of the", "Cook Islands", "Costa Rica",
    "Croatia", "Cuba", "Curaçao", "Cyprus", "Czechia", "Côte d'Ivoire", "Denmark", "Djibouti", "Dominica",
    "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia",
    "Eswatini", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France",
    "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia",
    "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala",
    "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and McDonald Islands",
    "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia",
    "Iran, Islamic Republic of", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan",
    "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of",
    "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic", "Latvia", "Lebanon",
    "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Madagascar",
    "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania",
    "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco",
    "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal",
    "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island",
    "North Macedonia", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Palestine, State of",
    "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal",
    "Puerto Rico", "Qatar", "Romania", "Russian Federation", "Rwanda", "Réunion", "Saint Barthélemy",
    "Saint Helena, Ascension and Tristan da Cunha", "Saint Kitts and Nevis", "Saint Lucia",
    "Saint Martin (French part)", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa",
    "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone",
    "Singapore", "Sint Maarten (Dutch part)", "Slovakia", "Slovenia", "Solomon Islands", "Somalia",
    "South Africa", "South Georgia and the South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka",
    "Sudan", "Suriname", "Svalbard and Jan Mayen", "Sweden", "Switzerland", "Syrian Arab Republic",
    "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Timor-Leste",
    "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan",
    "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",
    "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu",
    "Venezuela, Bolivarian Republic of", "Viet Nam", "Virgin Islands, British", "Virgin Islands, U.S.",
    "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe", "Åland Islands"
];

const countrySelect = document.getElementById('country');
countries.forEach(country => {
    const option = document.createElement('option');
    option.value = country;
    option.textContent = country;
    countrySelect.appendChild(option);
});


// Populate currencies
const currencies = [
    "GBP", "USD", "EUR", "AUD", "CAD", "CHF", "CNY", "JPY", "NZD", "INR"
];
const currencySelect = document.getElementById('repair_currency');
currencies.forEach(currency => {
    const option = document.createElement('option');
    option.value = currency;
    option.textContent = currency;
    currencySelect.appendChild(option);
});

// Show/hide repair-related fields based on taken_repair answer
document.getElementById('taken_repair').addEventListener('change', function() {
    const repairRelatedDivs = [
        'product_repaired_div',
        'diagnostic_report',
        'repair_cost',
        'repair_currency',
        'proportionate_options',
        'data_loss_warning',
        'refurbished_parts',
        'pressure_felt',
        'satisfaction'
    ];

    if (this.value === 'Yes') {
        // Show and enable all repair-related fields
        repairRelatedDivs.forEach(id => {
            const element = document.getElementById(id);
            const parentDiv = element.closest('.div-padding, .half-col');
            if (parentDiv) {
                parentDiv.style.display = 'block';
                element.required = true;
            }
        });
    } else {
        // Hide and disable all repair-related fields
        repairRelatedDivs.forEach(id => {
            const element = document.getElementById(id);
            const parentDiv = element.closest('.div-padding, .half-col');
            if (parentDiv) {
                parentDiv.style.display = 'none';
                element.required = false;
                // Reset values
                if (element.tagName === 'SELECT') {
                    element.value = '';
                } else if (element.tagName === 'INPUT') {
                    element.value = '';
                }
            }
        });
    }
});

// Form validation
document.getElementById('survey-form').addEventListener('submit', function(event) {
    if (!this.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
    }

    // Phone validation
    if (!phoneInput.isValidNumber()) {
        event.preventDefault();
        document.getElementById('phone').classList.add('is-invalid');
    } else {
        document.getElementById('phone').classList.remove('is-invalid');
    }

    this.classList.add('was-validated');
});

// Initialize all repair-related fields as hidden
const repairRelatedDivs = [
    'product_repaired_div',
    'diagnostic_report',
    'repair_cost',
    'repair_currency',
    'proportionate_options',
    'data_loss_warning',
    'refurbished_parts',
    'pressure_felt',
    'satisfaction'
];

// Hide all repair-related fields initially
repairRelatedDivs.forEach(id => {
    const element = document.getElementById(id);
    const parentDiv = element.closest('.div-padding, .half-col');
    if (parentDiv) {
        parentDiv.style.display = 'none';
        element.required = false;
    }
});

// Add custom styles
const style = document.createElement('style');
style.textContent = `
            .form-section-title {
                color: #fff;
                margin-bottom: 20px;
                font-size: 1.5rem;
                border-bottom: 2px solid #dc3545;
                padding-bottom: 10px;
            }
            .survey-form select.form-control {
                height: 45px;
            }
            .survey-form .half-col {
                width: 48%;
                display: inline-block;
                vertical-align: top;
                margin-right: 2%;
            }
            @media (max-width: 768px) {
                .survey-form .half-col {
                    width: 100%;
                    margin-right: 0;
                }
            }
        `;
document.head.appendChild(style);
</script>
</body>

</html>