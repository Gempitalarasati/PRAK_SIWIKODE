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

                <?php
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://");
                ?>
                <div id="tableCaption" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Content</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <?php $this->load->view('layouts/_alerts') ?>
                            <div class="table-responsive">
                                <a href="<?= base_url('Admin/inputWisata') ?>" class="btn btn-primary mt-3 mb-4">Tambah</a>
                                <?php $no = 1; ?>
                                <table class="table table-hover non-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Foto</th>
                                            <th>Nama Wisata</th>
                                            <!-- <th>Deskripsi</th> -->
                                            <th>Jenis Wisata</th>
                                            <!-- <th>fasilitas</th> -->
                                            <th class="text-center">Bintang</th>
                                            <!-- <th>Kontak</th> -->
                                            <!-- <th>Alamat</th> -->
                                            <!-- <th>Latlong</th> -->
                                            <th>Email</th>
                                            <!-- <th>Web</th> -->
                                            <!-- <th>Jenis Kuliner</th> -->
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($wisatas as $wisata) { ?>
                                            <tr>
                                                <td width="30" class="text-center"><?= $no++ ?></td>
                                                <td width="100" class="text-center"><img src="<?= base_url() ?>upload/<?= $wisata->foto ?>" class="img-fluid" alt=""></td>
                                                <td><?= $wisata->nama ?></td>
                                                <!-- <td><?= $wisata->deskripsi ?></td> -->
                                                <td><?= $wisata->jenis_wisata ?></td>
                                                <!-- <td><?= $wisata->fasilitas ?></td> -->
                                                <td class="text-center"><?= $wisata->bintang ?></td>
                                                <!-- <td><?= $wisata->kontak ?></td> -->
                                                <!-- <td><?= $wisata->alamat ?></td> -->
                                                <!-- <td><?= $wisata->latlong ?></td> -->
                                                <td><?= $wisata->email ?></td>
                                                <!-- <td><?= $wisata->web ?></td> -->
                                                <!-- <td><?= $wisata->jenis_kuliner ?></td> -->
                                                <td width="250" class="text-center">
                                                    <a href="<?= base_url('Admin/deleteWisata/' . $wisata->id) ?>" class="btn btn-danger">Delete</a>
                                                    <a href="<?= base_url('Admin/editWisata/' . $wisata->id) ?>" class="btn btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
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
<?php $this->load->view('admin/tools/footer') ?>