<!-- <!DOCTYPE html>
<html>

<head>
    <title>Membuat login dengan codeigniter</title>
</head>

<body>
    <h1>Login berhasil !</h1>
    <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
    <a href="<?php echo base_url('Auth/logout'); ?>">Logout</a>
</body>

</html> -->

<?php $this->load->view('user/tools/header') ?>
<?php $this->load->view('user/tools/loader') ?>
<?php $this->load->view('user/tools/navbar') ?>
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <?php $this->load->view('user/tools/sidebar') ?>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="faq container">
                    <div class="faq-layouting layout-spacing">
                        <div class="fq-article-section">
                            <h2 class="text display-4">Wisata</h2>
                            <?php $this->load->view('layouts/_alerts.php'); ?>
                            <div class="row">
                                <?php
                                foreach ($wisatas as $wisata) { ?>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="card">
                                            <a href="<?= base_url('User/detail/' . $wisata->id) ?>">
                                                <img width="300" height="315" style="border-radius:10px" src="<?= base_url() ?>upload/<?= $wisata->foto ?>" class="card-img-top" alt="faq-video-tutorials">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?= $wisata->nama ?></h5>
                                                    <p class="meta-text"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                                        </svg><?= $wisata->kontak ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright &copy; <?= date('Y') ?> <a target="_blank" href="">SIWIKODE</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">GEMPITA <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->


</div>
<?php $this->load->view('user/tools/footer') ?>