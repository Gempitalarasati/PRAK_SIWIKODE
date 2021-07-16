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
    <?php $this->load->view('tools/navbar.php') ?>

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
        <h2 class="text-center" style="font-weight: bold; color:white;">Wisata Rekreasi & Kuliner Unggulan Kota Depok</h2>

        <div class="row mt-5">
            <?php foreach ($wisatas as $wisata) { ?>
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="text-center"><?= $wisata->nama ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="<?= base_url() ?>upload/<?= $wisata->foto ?>" style="max-width: 250px;" alt="image">
                            </div>

                            <div class="deskripsi">
                                <p class="pt-2 text-center font-weight-bold"><?= $wisata->deskripsi  ?>.</p>
                                <a href="<?= base_url('Welcome/detail/' . $wisata->id) ?>" class="btn btn-primary col-md-12">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php $this->load->view('tools/footer.php') ?>