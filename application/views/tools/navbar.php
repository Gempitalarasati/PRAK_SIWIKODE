<!-- Start Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-primary">
    <a href="<?= base_url() ?>" class="navbar-brand text-white"><b>SIWIKODE</b></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse" style="padding: 0 70px 0 70px;">
        <div class="navbar-nav">
            <a href="<?= base_url() ?>" class="nav-item nav-link text-white <?php $this->uri->segment(1) == "" ? print("active") : "" ?>">Home</a>
            <a href="<?= base_url() ?>Welcome/team" class="nav-item nav-link text-white <?php $this->uri->segment(2) == "team" ? print("active") : "" ?>">Team</a>
        </div>
        <div class="navbar-nav ml-auto">
            <!-- <li class="dropdown">
                    <a class="nav-item nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Daftar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="">Daftar Wisata Rekreasi</a>
                        <a class="dropdown-item" href="registrasi_kuliner.html">Daftar Wisata Kuliner</a>
                    </div>
                </li> -->
            <a href="<?= base_url('Auth/register') ?>" class="nav-item nav-link text-white">Daftar</a>
            <a href="<?= base_url('Auth/login') ?>" class="nav-item nav-link text-white">Masuk</a>
        </div>
    </div>
</nav>