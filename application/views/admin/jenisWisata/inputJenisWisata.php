<?php $this->load->view('admin/tools/header') ?>
<?php $this->load->view('admin/tools/loader') ?>
<?php $this->load->view('admin/tools/navbar') ?>
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <?php $this->load->view('admin/tools/sidebar') ?>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-md-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <?php $this->load->view('layouts/_alerts') ?>
                        <form method="POST" class="form-vertical" action="<?= base_url('Admin/addJenisWisata') ?>" enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <label class="control-label">Nama Jenis Wisata</label>
                                <div class="input-group mb-4">
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                            </div>
                            <input type="submit" value="Publish" class="btn btn-primary">
                        </form>
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
<?php $this->load->view('admin/tools/footer') ?>