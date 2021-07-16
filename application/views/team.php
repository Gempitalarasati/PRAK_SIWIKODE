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
        <h2 class="text-center" style="font-weight: bold; color:white;">Our Team</h2>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">Gempita Larasati
                            </br> 0110120088
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/img/gempita.jpeg" alt="image">
                        </div>

                        <div class="deskripsi">
                            <img src="<?= base_url() ?>assets/img/Ig.png" style="height: 1cm; width: 1cm;"><a href="https://www.instagram.com/gmptlrst/">@gmptrst</a>
                            </br>
                            <img src="<?= base_url() ?>assets/img/fb.png" style="height: 1cm; width: 1cm;"><a href="https://web.facebook.com/gempitalarasati">Gempita Larasati</a></li>
                            </br>
                            <img src="<?= base_url() ?>assets/img/twitter.png" style="height: 1cm; width: 1cm;"><a href="https://twitter.com/gmptlrst">@gmptrst</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">Muhamad Irfan Maulana
                            </br>
                            0110120108
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/img/irfan.jpeg" alt="image">
                        </div>

                        <div class="deskripsi">
                            <img src="<?= base_url() ?>assets/img/Ig.png" style="height: 1cm; width: 1cm;"><a href="https://www.instagram.com/muhamadirfan_703/">@muhamadirfan_703</a>
                            </br>
                            <img src="<?= base_url() ?>assets/img/fb.png" style="height: 1cm; width: 1cm;"><a href="https://web.facebook.com/profile.php?id=100026773597058">Muhammad Irfan</a></li>
                            </br>
                            <img src="<?= base_url() ?>assets/img/twitter.png" style="height: 1cm; width: 1cm;"><a href="https://twitter.com/muhamad05073844">@muhamad05073844</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">Vina Nurhasanah
                            </br> 0110120122
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/img/vina2.jpeg" alt="image">
                        </div>

                        <div class="deskripsi">
                            <img src="<?= base_url() ?>assets/img/Ig.png" style="height: 1cm; width: 1cm;"><a href="https://www.instagram.com/vinanurhasanah12">@vinanurhasanah12</a>
                            </br>
                            <img src="<?= base_url() ?>assets/img/fb.png" style="height: 1cm; width: 1cm;"><a href="https://www.facebook.com/vina.n.hasanah.9">Devin Nurhasanah</a></li>
                            </br>
                            <img src="<?= base_url() ?>assets/img/twitter.png" style="height: 1cm; width: 1cm;"><a href="https://twitter.com/VinanurHasanah9?s=08">@VinanurHasanah9</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('tools/footer') ?>