<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog-adventure
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="js no-svg">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
              <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>

<body <?php body_class(); ?>>

    <?php if (function_exists('wp_body_open')) {
        wp_body_open();
    } else {
        do_action('wp_body_open');
    } ?>

    <div id="page" class="site-wrapper site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'blog-adventure'); ?></a>
        <?php
        $show_topheader = get_theme_mod('blogwaves_top_header_display', true);
        $show_topheader_menu = get_theme_mod('blogwaves_top_header_menu_display', true);
        $show_topheader_menu_date = get_theme_mod('blogwaves_top_header_menu_date_display', true);
        $show_topheader_social_icon = get_theme_mod('blogwaves_top_header_social_icon_display', true);
        $facebook_url = get_theme_mod('blogwaves_social_icon_fb_url', '');
        $twitter_url = get_theme_mod('blogwaves_social_icon_twitter_url', '');
        $linkedin_url = get_theme_mod('blogwaves_social_icon_linkedin_url', '');
        $instagram_url = get_theme_mod('blogwaves_social_icon_insta_url', '');
        $social_icon_target = get_theme_mod('blogwaves_social_icon_target_display', true);
        ?>
        <header class="header2 d-md-block d-none">
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
                                <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="https://web.facebook.com/people/Consumer-Protection-Bureau/100089017255764/" role="button"><i class="fab fa-facebook-f"></i></a>

                                <!-- Twitter -->
                                <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="https://x.com/i/flow/login?redirect_after_login=%2Fconsume60578813" role="button"><i class="fab fa-twitter"></i></a>

                                <!-- Linkedin -->
                                <a data-mdb-ripple-init target="_blank" class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="https://www.linkedin.com/in/consumer-protection-bureau-595632261/" role="button"><i class="fab fa-linkedin-in"></i></a>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <div class="menu-header">
            <nav class="navbar navbar-expand-xl navbar-light ">
                <div class="container menu-header-container">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo ROOT_PATH ?>assets/images/Logo - Source File.png" alt class="img-fluid ">
                    </a>
                    <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " href="<?php echo ROOT_PATH ?>index.php" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo ROOT_PATH ?>about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo ROOT_PATH ?>why-choose-us.php">Why Choose Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo ROOT_PATH ?>consumer-issues.php">Consumer Issues
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active-nav" href="<?php echo ROOT_PATH ?>blog">Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo ROOT_PATH ?>archive.php">Archive
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo ROOT_PATH ?>membership.php">membership
                                </a>
                            </li>
                            <li class="nav-item pb-xl-0 pb-3">
                                <a class="nav-link" href="<?php echo ROOT_PATH ?>contact.php">Contact
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>

        </div>

        <div id="primary" class="site-content">