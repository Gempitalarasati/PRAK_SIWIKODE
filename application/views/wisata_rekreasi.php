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
        <h2 class="text-center" style="font-weight: bold;color: white;">Daftar Wisata Rekreasi Kota Depok</h2>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">Margo City</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/img/margocity.jpeg" alt="image">
                        </div>

                        <div class="deskripsi">
                            <p class="pt-2 text-center font-weight-bold">Salah satu pusat perbelanjaan yang juga menjadi
                                icon kota Depok.</p>
                            <a href="<?= base_url() ?>Welcome/wire_margocity" class="btn btn-primary col-md-12">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">Taman Herbal Insani</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/img/foto/herbalinsani.jpg" alt="image">
                        </div>

                        <div class="deskripsi">
                            <p class="pt-2 text-center font-weight-bold">Tempat wisata favorit untuk menikmati alam
                                sembari belajar tanaman obat.</p>
                            <a href="<?= base_url() ?>Welcome/wire_tamanherbal" class="btn btn-primary col-md-12">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">D'Kandang</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/img/foto/D.kandang.jpg" alt="image">
                        </div>

                        <div class="deskripsi">
                            <p class="pt-2 text-center font-weight-bold">Mengusung wisata keluarga edukasi D'Kandang Amazing Farm Depok begitu diminati wisatawan.</p>
                            <a href="<?= base_url() ?>Welcome/wire_dkandang" class="btn btn-primary col-md-12">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('tools/footer') ?>