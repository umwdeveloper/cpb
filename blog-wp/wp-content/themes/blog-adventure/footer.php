<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogwaves
 */

?>
</div><!-- #content -->

<?php $show_copyright = get_theme_mod('blogwaves_footer_copyright_display', true);  ?>
<footer class="text-center text-lg-start text-white footer-text" style="background-color: #223a78ef;">
    <!-- Grid container -->
    <div class="container pt-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-1 font-weight-bold bg-white p-3 rounded-2 mb-lg-0 mb-2">
                        <img src="<?php echo ROOT_PATH ?>assets/images/Logo - PNG.png" alt="" class="img-fluid footer-img">
                    </h6>
                    <p>
                        BUSINESS HOURS:<br> MONDAY TO FRIDAY 9:00-5:00
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-75 mx-auto clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Quick Links</h6>
                    <p>
                            <a href="<?php echo ROOT_PATH ?>index.php" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="<?php echo ROOT_PATH ?>about.php" class="text-white">About Us</a>
                        </p>
                        <p>
                            <a href="<?php echo ROOT_PATH ?>why-choose-us.php" class="text-white">Why Choose Us</a>
                        </p>
                        <p>
                            <a href="<?php echo ROOT_PATH ?>contact.php" class="text-white">Contact</a>
                        </p>
                </div>
                <!-- Grid column -->

                <hr class="w-75 mx-auto clearfix d-md-none" />

                <!-- Grid column -->
                <div class=" col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                        Other
                    </h6>
                    <p class="">
                            <a href="<?php echo ROOT_PATH ?>consumer-issues.php" class="text-white">Consumer Issues</a>
                        </p>
                        <p>
                            <a href="<?php echo ROOT_PATH ?>blog" class="text-white">Blog</a>
                        </p>
                        <p>
                            <a href="<?php echo ROOT_PATH ?>archive.php" class="text-white">Archive</a>
                        </p>
                        <p>
                            <a href="<?php echo ROOT_PATH ?>membership.php" class="text-white">Membership</a>
                        </p>
                </div>

                <!-- Grid column -->
                <hr class="w-75 mx-auto clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p class=""><i class="fas fa-envelope mr-3"></i> <span class="text-sm">info@consumerprotectionbureau.co.uk</span> </p>
                    <p class=""><i class="fas fa-phone mr-3"></i> +44 (0)2035854002</p>
                    <p class=""><i class="fas fa-home mr-3"></i> 83 VICTORIA STREET

                        WESTMINSTER, LONDON,

                        SW1H 0HW</p>

                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <!-- Copyright -->
                    <div class="p-3 ">
                        © 2024 Copyright:
                        <a class="text-white " href="<?php echo ROOT_PATH ?>index.html">CONSUMER PROTECTION BUREAU</a>
                    </div>
                    <!-- Copyright -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                    <!-- Facebook -->
                    <a href="https://web.facebook.com/profile.php?id=61570163952467" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <!-- <a href="https://x.com/i/flow/login?redirect_after_login=%2Fconsume60578813" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" target="_blank"><i class="fab fa-twitter"></i></a> -->

                    <!-- Google -->
                    <a href="https://www.linkedin.com/company/consumer-protection-bureau/" target="_blank" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-linkedin"></i></a>


                </div>
                <!-- Grid column -->
            </div>
        </section>
        <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
</footer>
 <!-- Bootstrap JavaScript Libraries -->
 <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
</div><!-- #page -->

<button onclick="blogwavesTopFunction()" id="myBtn" title="Go to top">
    <i class="fa fa-angle-up"></i>
</button>

<?php wp_footer(); ?>

</body>

</html>