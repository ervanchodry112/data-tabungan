<?php
echo $this->extend('layout/navbar');

echo $this->section('content');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">History</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body py-2">
                    <div class="row">
                        <div class="col-2">
                            <!-- <a href="" class="btn btn-sm btn-success my-3 w-100">

                            </a> -->
                            <button type="button" class="btn btn-sm btn-success my-3 w-100" data-bs-toggle="modal" data-bs-target="#setorModal">
                                <i class="bi bi-file-arrow-up"></i>
                                <span>Setor</span>
                            </button>
                        </div>
                        <div class="col-2">
                            <a href="<?= base_url('transactions/tarik') ?>" class="btn btn-sm btn-danger my-3 w-100">
                                <i class="bi bi-file-arrow-down"></i>
                                <span>Tarik</span>
                            </a>
                        </div>
                        <div class="col-8 d-flex justify-content-end">
                            <a href="<?= base_url('transactions/laporan') ?>" class="btn btn-secondary my-3 w-25">
                                <i class="bi bi-clipboard2-data"></i>
                                <span>Laporan</span>
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID Transaksi</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Jenis Transaksi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($transaction as $t) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i++ ?></th>
                                    <td><?= $t->id_history ?></td>
                                    <td><?= $t->amount ?></td>
                                    <td><?= $t->jenis_transaksi ?></td>
                                    <td><?= $t->tanggal ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->


<div class="modal fade" id="setorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>