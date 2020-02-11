<div class="container ">

    <div class="row justify-content-center mt-3">
        <div class="col-6">

            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Sekolah
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $sekolah['id']; ?>">
                        <div class="form-group">
                            <label for="wilayah">Wilayah</label>
                            <input type="text" name="wilayah" class="form-control" id="wilayah" value="<?= $sekolah['wilayah']; ?>">
                            <small class="form-text text-danger"><?= form_error('wilayah'); ?></small>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="sd">SD</label>
                                <input type="text" name="sd" class="form-control" id="sd" value="<?= $sekolah['sd']; ?>">
                                <small class="form-text text-danger"><?= form_error('sd'); ?></small>
                            </div>
                            <div class="form-group col">
                                <label for="smp">SMP</label>
                                <input type="text" name="smp" class="form-control" id="smp" value="<?= $sekolah['smp']; ?>">
                                <small class="form-text text-danger"><?= form_error('smp'); ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="sma">SMA</label>
                                <input type="text" name="sma" class="form-control" id="sma" value="<?= $sekolah['sma']; ?>">
                                <small class="form-text text-danger"><?= form_error('sma'); ?></small>
                            </div>
                            <div class="form-group col">
                                <label for="smk">SMK</label>
                                <input type="text" name="smk" class="form-control" id="smk" value="<?= $sekolah['smk']; ?>">
                                <small class="form-text text-danger"><?= form_error('smk'); ?></small>
                            </div>
                            <div class="form-group col">
                                <label for="slb">SLB</label>
                                <input type="text" name="slb" class="form-control" id="slb" value="<?= $sekolah['slb']; ?>">
                                <small class="form-text text-danger"><?= form_error('slb'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jml">JUMLAH</label>
                            <input type="text" name="jml" class="form-control" id="jml" value="<?= $sekolah['jml']; ?>">
                            <small class="form-text text-danger"><?= form_error('jml'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>