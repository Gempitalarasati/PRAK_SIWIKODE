<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SIWIKODE</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
</head>

<body style="background-repeat: no-repeat; background-size: cover;" background="<?= base_url() ?>assets/img/bg.jpeg">
    <!-- Start Navbar -->
    <?php $this->load->view('tools/navbar') ?>

    <!-- Start Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <marquee>
            <div class="container">
                <h1 class="text-center">Sistem Informasi Wisata Kota Depok - SIWIKODE</h1>
            </div>
        </marquee>
    </div>

    <!-- Start Main -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item">Wisata Rekreasi</li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>

                <h2 style="color: white;" class="text-capitalize"><?= $wisata[0]['nama'] ?></h2>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Galeri Foto</h4>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/margocity.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/margocity.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/margocity2.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/margocity2.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/margocity3.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/margocity3.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/margocity4.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/margocity4.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/margocity5.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/margocity5.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/margocity6.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/margocity6.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3 p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-header bg-primary text-white">
                                <h4>Deskripsi Lokasi</h4>
                            </div>
                            <div class="card-body">
                                <p style="text-align: justify;"><?= $wisata[0]['deskripsi'] ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-header bg-primary text-white">
                                <h4>Alamat dan Peta Lokasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="495" height="269" id="gmap_canvas" src="https://maps.google.com/maps?q=margo%20city&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br>
                                        <style>
                                            .mapouter {
                                                position: relative;
                                                text-align: right;
                                                height: 269px;
                                                width: 495px;
                                            }
                                        </style><a href="https://google-map-generator.com">google-map-generator.com</a>
                                        <style>
                                            .gmap_canvas {
                                                overflow: hidden;
                                                background: none !important;
                                                height: 269px;
                                                width: 495px;
                                            }
                                        </style>
                                    </div>
                                </div>
                                <p style="text-align: center;"><?= $wisata[0]['alamat'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-5 pb-3" style="color: white;">Testimoni dan Komentar</h2>
                <div class="row">
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Galih Montana</h4>
                        <img src="<?= base_url() ?>assets/img/foto/galih.jpg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Tempatnya sangat luas dan nyaman. Tak hanya itu, disini juga memiliki banyak sekali fasilitas yang dapat kita nikmati."
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Ridwan Kamil</h4>
                        <img src="<?= base_url() ?>assets/img/foto/ridwan.jpg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Saya menyukai tempat ini karena bersih dan nyaman. Banyak sekali toko-toko yang dapat kita kunjungi."
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Vira</h4>
                        <img src="<?= base_url() ?>assets/img/foto/warga2.jpg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Saya suka pergi kesini, karena semuanya ada disini. Margo City sangat lengkap."
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer -->
    <footer class="footer bg-primary">
        <div class="container text-center">
            <span class="text-white font-weight-bold">Develop By Mahasiswa @STT-NF 2020</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>