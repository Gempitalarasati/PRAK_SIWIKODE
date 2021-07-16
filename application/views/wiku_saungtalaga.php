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

<body style="background-repeat: no-repeat; background-size: cover;" background="assets/img/bg.jpeg">
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

                <h2 style="color: white;">Saung Talaga</h2>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Galeri Foto</h4>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/Talaga 1.jpeg" class="d-block mb-4">
                                    <img class="<?= base_url() ?>img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/Talaga 1.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/talaga 2.jpeg" class="d-block mb-4">
                                    <img class="<?= base_url() ?>img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/talaga 2.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/talaga 4.jpeg" class="d-block mb-4">
                                    <img class="<?= base_url() ?>img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/talaga 4.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/talaga 5.jpeg" class="d-block mb-4">
                                    <img class="<?= base_url() ?>img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/talaga 5.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/talaga 6.jpeg" class="d-block mb-4">
                                    <img class="<?= base_url() ?>img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/talaga 6.jpeg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/img/talaga.jpeg" class="d-block mb-4">
                                    <img class="<?= base_url() ?>img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/img/talaga.jpeg" alt="" style="width: 150px; height: 150px;">
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
                                <p style="text-align: justify;">Saung Talaga Depok adalah rumah makan yang menyedikan berbagai makanan cukup beragam mulai dari ikan-ikanan, seafood , daging-dagingan dan masih banyak lainnya. Rumah Makan Saung Talaga buka jam 08-00 s/d 20.30 WIB. Wisata kuliner Saung Talaga ini sangat cocok untuk makan bersama dengan keluarga, pasangan, ataupun teman. Dengan dekorasi bangunannya yang bisa dibilang sederhana dan ada danaunya yang membuat kita saat makan merasa nyaman.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-header bg-primary text-white">
                                <h4>Alamat dan Peta Lokasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="495" height="255" id="gmap_canvas" src="https://maps.google.com/maps?q=saung%20talaga&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to-org.blogspot.com"></a><br>
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
                                <p style="text-align: center;">Jln. Raya Sawangan No.1, Rangkap Jaya kec.Pancoran Mas, Kota Depok, Jawa Barat 16435</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-5 pb-3" style="color: white;">Testimoni dan Komentar</h2>
                <div class="row">
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Umay Shahab</h4>
                        <img src="<?= base_url() ?>assets/img/img/t no1.jpeg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "saya sangat puas dengan yang disajukan oleh rumah makan Saung Talaga, makannya enak-enak belom lagi suasananya wam mantapdehhh"
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Abdul Ajis Ali</h4>
                        <img src="<?= base_url() ?>assets/img/img/t no.2.jpeg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Saya makan berdua dengan pasangan saya dan dilayani dengan baik oleh pegawainya saya sangat suka dekorasi tempat makannya terlebihhh pada danauya jadi terkesan sangat sejuk."
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Lee Min Ho</h4>
                        <img src="<?= base_url() ?>assets/img/img/t no.3.jpeg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Saya di ajak oleh teman saya makan di restoran ini memang sedikit aneh di lidah saya karna saya baru pertama memakan pepes ikan tpi rasanya matappp bikin saya ketagihan."
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('tools/footer') ?>