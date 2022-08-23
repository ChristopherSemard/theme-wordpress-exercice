<!-- Footer Start -->
<footer class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-4 mb-5">
            <a href="/" class="navbar-brand">
                <h1 class="m-0 mt-n2 text-white display-4"><?php echo bloginfo('name'); ?></h1>
            </a>
            <p><?php echo bloginfo('description'); ?></p>

            <?php dynamic_sidebar('footer-socials'); ?>
        </div>
        <div class="col-lg-4 mb-5">
            <?php dynamic_sidebar('footer-contact'); ?>
        </div>
        <?php dynamic_sidebar('footer-menu'); ?>

    </div>
</footer>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="mb-2 text-center text-white-50">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
    <p class="m-0 text-center text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script> -->

<!-- Contact Javascript File -->
<!-- <script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script> -->

<!-- Template Javascript -->
<!-- <script src="js/main.js"></script> -->
</body>

</html>

<?php wp_footer(); ?>
</body>

</html>