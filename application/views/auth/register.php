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
    <div class="mt-5">
        <!-- Start Main -->
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white"><b>LOGIN</b></div>
                        <div class="card-body">
                            <form action="<?= base_url('Auth/proses_register'); ?>" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan email anda">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan password anda">
                                </div>

                                <button type="submit" class="btn btn-primary">Register</button>
                                <a href="<?= base_url() ?>Auth/login">Sudah Punya Akun?</a>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="text-center pt-2">
                        Belum mempunyai akun? <a href="">Daftar</a>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Start Footer -->
        <footer class="footer bg-transparent">
            <div class="container text-center">
                <span class="text-white font-weight-bold">Develop By Mahasiswa @STT-NF 2020</span>
            </div>
        </footer>
    </div>

</body>

</html>