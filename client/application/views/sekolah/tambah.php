<div class="container">

    <div class="row justify-content-center mt-3">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Sekolah
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="wilayah">Wilayah :</label>
                            <input type="text" name="wilayah" class="form-control" id="wilayah">
                            <small class="form-text text-danger"><?= form_error('wilayah'); ?></small>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="sd">SD</label>
                                <input type="text" name="sd" class="form-control" id="sd">
                                <small class="form-text text-danger"><?= form_error('sd'); ?></small>
                            </div>
                            <div class="form-group col">
                                <label for="smp">SMP</label>
                                <input type="text" name="smp" class="form-control" id="smp">
                                <small class="form-text text-danger"><?= form_error('smp'); ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="sma">SMA</label>
                                <input type="text" name="sma" class="form-control" id="sma">
                                <small class="form-text text-danger"><?= form_error('sma'); ?></small>
                            </div>
                            <div class="form-group col">
                                <label for="smk">SMK</label>
                                <input type="text" name="smk" class="form-control" id="smk">
                                <small class="form-text text-danger"><?= form_error('smk'); ?></small>
                            </div>
                            <div class="form-group col">
                                <label for="slb">SLB</label>
                                <input type="text" name="slb" class="form-control" id="slb">
                                <small class="form-text text-danger"><?= form_error('slb'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jml">JUMLAH</label>
                            <input type="text" name="jml" class="form-control" id="jml">
                            <small class="form-text text-danger"><?= form_error('jml'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>