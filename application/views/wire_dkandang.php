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

                <h2 style="color: white;">D'Kandang</h2>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Galeri Foto</h4>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/D.kandang.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/D.kandang.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/dkandang.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/dkandang.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/dkandang1.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/dkandang1.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/dkandang2.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/dkandang2.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/dkandang3.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/dkandang3.jpg" alt="" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <a href="<?= base_url() ?>assets/img/foto/dkandang4.jpg" class="d-block mb-4">
                                    <img class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/img/foto/dkandang4.jpg" alt="" style="width: 150px; height: 150px;">
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
                                <p style="text-align: justify;">Ada berbagai macam wahana yang disediakan di D???Kandang Amazing Farm. Ada wahana yang berhubungan dengan hewan peternakan, ada wahana permainan, serta wahana kreasi. Yang menarik, penempatan wahana di objek wisata ini sangat rapi dan sesuai dengan tema. Misalnya, wahana tangkap ikan yang dulunya ada di kolam empang bawah, sekarang dipindah ke bagian atas area D???Kandang.
                                    Beberapa wahana yang bisa dicoba oleh pengunjung adalah memberi makan kelinci dengan seember wortel dan kangkung, menyusui anak kambing (sudah diberi botol susu kemasan 120 ml), skuter anak, flying fox, naik delman, menangkap ikan, ATV, menunggang kerbau, hingga naik delman dan berkuda. Berikut tarif masing-masing wahana di D???Kandang Amazing Farm.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-header bg-primary text-white">
                                <h4>Alamat dan Peta Lokasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="495" height="251" id="gmap_canvas" src="https://maps.google.com/maps?q=d'kandang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to-org.blogspot.com"></a><br>
                                        <style>
                                            .mapouter {
                                                position: relative;
                                                text-align: right;
                                                height: 251px;
                                                width: 495px;
                                            }
                                        </style><a href="https://google-map-generator.com">google map on website</a>
                                        <style>
                                            .gmap_canvas {
                                                overflow: hidden;
                                                background: none !important;
                                                height: 251px;
                                                width: 495px;
                                            }
                                        </style>
                                    </div>
                                </div>
                                <p style="text-align: center;">Jl. Penarikan, RT.01/RW./02, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-5 pb-3" style="color: white;">Testimoni dan Komentar</h2>
                <div class="row">
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Tri Rismaharini</h4>
                        <img src="assets/img/foto/risma.jpg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Tempat ini sangatlah bagus untuk umum terutama untuk anak-anak karena banyak edukasi yang ada di Dkanang Amazing Farm."
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Irfan Hakim</h4>
                        <img src="assets/img/foto/irfan.jpg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "Tempat ini tidak hanya tempat untuk berlibur tapi juga memberikan edukasi bagi anak-anak kaena di sana mereka di ajarkan untuk belajar bersahabat dengan hewan dan bagaimana cara menanam tumbuhan dengan baik."
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-dark">
                        <h4 style="color: white;">Jaya</h4>
                        <img src="assets/img/foto/tirta7.jpg" alt="image" style="width: 150px; height: 150px; margin-bottom: 7px; border-radius: 10px; object-fit: cover;">
                        <p class="pt-3">
                            <strong style="color: white;">
                                "D'Kandang merupakan tempat liburan baru yang mengandung banyak edukasi di dalamnya, dan tentunya manfaat bagi anak-anak yang belajar sejak dini mengenal lebih dalam satwa dan tumbuhan."
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('tools/footer') ?>