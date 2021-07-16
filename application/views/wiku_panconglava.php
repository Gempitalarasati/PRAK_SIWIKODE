<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SIWIKODE</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
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
                        <li class="breadcrumb-item">Wisata Kuliner</li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>

                <h2 style="color: white;">Kue Pancong Lava</h2>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Galeri Foto</h4>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/pancong.jpeg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/pancong.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/pancong1.jpeg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/pancong1.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/pancong2.jpeg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/pancong2.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/pancong3.jpeg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/pancong3.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/pacong4.jpeg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/pacong4.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/pacong5.jpeg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/pacong5.jpeg" alt="" style="width: 150px; height: 150px;">
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
                                <p style="text-align: justify;">Toko ini menyiapkan berbagai macam jenis Kue Pancong Lava dengan berbagai varian rasa yang sangat lumer, selain itu kami memfasilitasi wifi secara gratis dengan suasana ruangan yang cukup klasik membuat para pengunjung merasa nyaman, toko buka mulai pukul 12.00 s/d 22.00.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-header bg-primary text-white">
                                <h4>Alamat dan Peta Lokasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="495" height="255" id="gmap_canvas" src="https://maps.google.com/maps?q=kue%20pancong%20lava&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to-org.blogspot.com"></a><br>
                                        <style>
                                            .mapouter {
                                                position: relative;
                                                text-align: right;
                                                height: 255px;
                                                width: 495px;
                                            }
                                        </style><a href="https://google-map-generator.com">google map on website</a>
                                        <style>
                                            .gmap_canvas {
                                                overflow: hidden;
                                                background: none !important;
                                                height: 255px;
                                                width: 495px;
                                            }
                                        </style>
                                    </div>
                                </div>
                                <p style="text-align: center;">Jln. Margonda Raya No. 493 Pondok Cina Kec. Beji, Kota Depok, Jawa Barat</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-5 pb-3" style="color: white;">Testimoni dan Komentar</h2>
                <div class="row">
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Yoona</h4>
                        <img src="<?= base_url() ?>assets/img/img/foto1 (1).jpeg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Lumer nya toping coklat pada kue pancong ini behhhh mantulll."
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Angga Yunanda</h4>
                        <img src="<?= base_url() ?>assets/img/img/foto1 (2).jpeg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Kue pancong rasa stwoberry enak bangett bikin saya ketagihan."
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Kim Hyun Joong</h4>
                        <img src="<?= base_url() ?>assets/img/img/foto1 (3).jpeg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Kue pancongnya sangat unik. Saya sangat menyukainya."
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('tools/footer') ?>