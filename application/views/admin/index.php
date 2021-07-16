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