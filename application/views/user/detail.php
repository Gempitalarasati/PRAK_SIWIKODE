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
                            <a href="<?= base_url('User') ?>" class="btn btn-danger">Back</a>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-6 mb-4">
                                    <h2 class="text display-4"><?= $wisata[0]['nama'] ?></h2>
                                    <div class="card">
                                        <img height="315" style="border-radius:10px; max-width: 100%;" src="<?= base_url() ?>upload/<?= $wisata[0]['foto'] ?>" class="card-img-top" alt="faq-video-tutorials">
                                        <div class="card-body">
                                            <h5 class="card-title">Nama : <?= $wisata[0]['nama'] ?></h5>
                                            <p class="meta-text">Jenis Wisata : <?= $wisata[0]['jenis_wisata'] ?></p>
                                            <p class="meta-text">Jenis Kuliner: <?= $wisata[0]['jenis_kuliner'] ?></p>
                                            <p class="meta-text">Kontak : <?= $wisata[0]['kontak'] ?></p>
                                            <p class="meta-text">Latlong : <?= $wisata[0]['latlong'] ?></p>
                                            <p class="meta-text">Kontak : <?= $wisata[0]['kontak'] ?></p>
                                            <p class="meta-text">Email : <?= $wisata[0]['email'] ?></p>
                                            <p class="meta-text">Web : <?= $wisata[0]['web'] ?></p>
                                            <p class="meta-text">Alamat : <?= $wisata[0]['alamat'] ?></p>
                                            <p class="meta-text">Deskripsi : <?= $wisata[0]['deskripsi'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-6 mb-4">
                                    <h2 class="text display-4">Komentar</h2>
                                    <div class="card">
                                        <div class="card-body">

                                            <?php
                                            // echo '<pre>';
                                            // print_r($testimonis);
                                            // echo '</pre>';
                                            // die();
                                            foreach ($testimonis as $testimoni) { ?>
                                                <div class="form-group mb-4">
                                                    <label class="control-label"><?= $testimoni['nama'] ?></label>
                                                    <div class="input-group mb-4">
                                                        <?php
                                                        $rating = ['Tidak Puas', 'Cukup', 'Bagus', 'Puas', 'Sangat Puas'];
                                                        for ($i = 0; $i < 5; $i++) {
                                                            if ($rating[$i] == $testimoni['rating']) {
                                                        ?>
                                                                <p><?= $testimoni['rating'] ?></p>
                                                        <?php  }
                                                        } ?>
                                                        <br>
                                                        <br>
                                                        <p><?= $testimoni['komentar'] ?></p>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="card pt-4">
                                        <div class="card-body">
                                            <form method="POST" class="form-vertical" action="<?= base_url('User/addTestimoni') ?>">
                                                <input type="hidden" name="nama" value="<?= $this->session->userdata("nama"); ?>">
                                                <input type="hidden" name="email" value="<?= $this->session->userdata("email"); ?>">
                                                <input type="hidden" name="wisata_id" value="<?= $wisata[0]['id'] ?>">
                                                <input type="hidden" name="user_id" value="<?= $this->session->userdata("id_users"); ?>">
                                                <div class="form-group mb-4">
                                                    <label class="control-label">Rating</label>
                                                    <div class="input-group mb-4">
                                                        <select name="rating" class="form-control">
                                                            <?php
                                                            $rating = ['Tidak Puas', 'Cukup', 'Bagus', 'Puas', 'Sangat Puas'];
                                                            for ($i = 0; $i < 5; $i++) { ?>
                                                                <option value="<?= $i ?>"><?= $rating[$i] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="control-label">Komentar</label>
                                                    <div class="input-group mb-4">
                                                        <textarea name="komentar" class="form-control" cols="5" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <input type="submit" value="Publish" class="btn btn-primary">
                                            </form>

                                        </div>
                                    </div>
                                </div>
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