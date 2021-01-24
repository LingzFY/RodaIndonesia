<!-- Footer -->
<footer class="page-footer font-small bg-dark text-white">

    <!--Footer Links-->
    <div class="container pt-5 mb-4">
        <div class="row mt-5">

            <!--First column-->
            <div class="col-12 col-md-6 pe-0 pe-md-5 mb-4">
                <div>
                    <img src="assets/logo/logo.png" width="100px" alt="">
                </div>
                <p class="text-white mt-2">100% Karya Anak Nusantara</p>
                <p class="text-white">Inovatif, Kreatif dan Produktif. Menjadi satu-satunya Aplikasi Karya Anak Nusantara yang Bergerak Mandiri Untuk Nusantara</p>
                <div class="py-4">
                    <!--Facebook-->
                    <a href="#" class="s-icon fb-ic"><i class="ti-facebook"></i></a>
                    <!--Twitter-->
                    <a href="#" class="s-icon tw-ic"><i class="ti-twitter-alt"></i></a>
                    <!--Google +-->
                    <a href="#" class="s-icon gplus-ic"><i class="ti-google"></i></a>
                    <!--Linkedin-->
                    <a href="#" class="s-icon yt-ic"><i class="ti-youtube"></i></a>
                    <!--Instagram-->
                    <a href="#" class="s-icon ins-ic"><i class="ti-instagram"></i></a>
                </div>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-6 col-md-3 mb-4">
                <h6 class="text-uppercase fw-bold">
                    <strong>Menu</strong>
                </h6>
                <hr class="bg-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">Aktivitas</a></p>
                <p><a href="#!">Projek</a></p>
                <p><a href="#!">Info Driver</a></p>
                <p><a href="#!">Info User</a></p>
                <p><a href="#!">Tentang Kami</a></p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-6 col-md-3 mb-4">
                <h6 class="text-uppercase fw-bold">
                    <strong>Info Kontak</strong>
                </h6>
                <hr class="bg-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">Jl. Terusan Buah Batu No.171, Kujangsari, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40287</a></p>
                <p><a href="#!">+62 877 1307 1972</a></p>
                <p><a href="#!">rodaindonesia.1@gmail.com</a></p>
            </div>
            <!--/.Third column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-start pb-4 pb-md-0">
                    <span>Copyright &copy; 2021 by <a href="https://mdbootstrap.com/bootstrap-tutorial/"> Roda Indonesia</a></span>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-end">
                    <span><a href="https://roda-indonesia.com/TermsOfService/">Terms of Service</a> | <a href="https://roda-indonesia.com/PrivacyPolicy/">Privacy Policy</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- To Top -->
<div class="scroll-top-to box-shadow">
    <i class="ti-angle-up"></i>
</div>

<script src="js/jquery_3.5.1.min.js"></script>
<script src="js/jquery_migrate_3.3.2.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/fontawesome/all.min.js"></script>
<script src="js/sweetalert/sweetalert2.js"></script>
<script src="js/aos/aos.js"></script>
<script src="js/home_script.js"></script>

<?php
$page = @$_GET['page'];
switch ($page) {

    case 'kontak':
        echo '<script src="js/leaflet/leaflet.js"></script>';
        echo '<script src="js/page_js/kontak_us.js"></script>';
        break;

    case 'info_user':
        echo '<script src="js/page_js/info_user.js"></script>';
        break;

    case 'about_us':
        echo '<script src="js/page_js/about_us.js"></script>';
        break;

    default:
        echo '';
        break;
}
?>

</body>

</html>