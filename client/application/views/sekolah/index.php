<div class="container">

    <div class="text-center">
        <div class="label my-3">
            <h3><b>DAFTAR SEKOLAH KABUPATEN BANDUNG</b></h3>
        </div>
    </div>


    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Sekolah <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- <div id="chart" style="width:100%; height:400px;"></div> -->


    <div class="row mt-3">
        <div class="col">
            <a href="<?= base_url(); ?>sekolah/tambah" class="btn btn-primary float-right">Tambah Data Sekolah</a>
        </div>
    </div>

    <div class="row justify-content-center my-3">
        <div class="col">
            <?php if (empty($sekolah)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Sekolah tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($sekolah as $sekolah) : ?>
                    <li class="list-group-item">
                        <?= $sekolah['wilayah']; ?>
                        <div class="float-right">
                            <a href="<?= base_url(); ?>sekolah/hapus/<?= $sekolah['id']; ?>" class=" btn btn-danger btn-sm tombol-hapus">Hapus</a>
                            <a href="<?= base_url(); ?>sekolah/ubah/<?= $sekolah['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                            <a href="<?= base_url(); ?>sekolah/detail/<?= $sekolah['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>



</div>