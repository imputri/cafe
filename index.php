<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUAI CAFE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="aset/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="aset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="aset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="aset/css/style.min.css" rel="stylesheet">
</head>

<body>
<?php
include('navbar.php');
?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="aset/img/Background/bg.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">WELCOME TO</h2>
                        <h1 class="display-1 text-white m-0">CAFE BUAI</h1>
                
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="aset/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">BUAI</h2>
                        <h1 class="display-1 text-white m-0">CAFE</h1>
                        <h2 class="text-white m-0">* RASAKAN BEDANYA *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="aset/img/mieayambakso.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">BUAI</h2>
                        <h1 class="display-1 text-white m-0">CAFE</h1>
                        <h2 class="text-white m-0">* RASAKAN NIKMAT NYA *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Buai Cafe Sudah Berdiri Sejak 2022</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <h5 class="mb-3">Buai Cafe menyediakan berbagai macam menu makanan dan minuman. Buai Cafe mampu bersaing dengan bisnis lainnya.</h5>
                    <p></p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="aset/img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Address</h1>
                    <p> Buai Cafe berlokasi di Jln Sutan Syahrir, Mata Air, Padang Selatan</p>
                    <div id="map" style="height: 500px;"></div>    
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php
    include('footer.php');
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="aset/lib/easing/easing.min.js"></script>
    <script src="aset/lib/waypoints/waypoints.min.js"></script>
    <script src="aset/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="aset/lib/tempusdominus/js/moment.min.js"></script>
    <script src="aset/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="aset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        function initMap() {
            // Koordinat lokasi Buai Cafe
            var buaiCafe = { lat: -0.9370649, lng: 100.3618569 };

            // Membuat objek peta
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: buaiCafe
            });

            // Membuat marker pada lokasi Buai Cafe
            var marker = new google.maps.Marker({
                position: buaiCafe,
                map: map,
                title: 'Buai Cafe'
            });

            // Membuat info window
            var infoWindow = new google.maps.InfoWindow({
                content: '<h3>Buai Cafe</h3><p>Jl. Sutan Syahrir No.155, Mata Air, Kec. Padang Sel., Kota Padang, Sumatera Barat 25216</p>'
            });

            // Menampilkan info window saat marker diklik
            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7oM23nNejxSzYEtIW8ONg1Ube3kzBjLw&callback=initMap"></script>

    <!-- Contact Javascript File -->
    <script src="aset/mail/jqBootstrapValidation.min.js"></script>
    <script src="aset/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="aset/js/main.js"></script>
</body>

</html> 