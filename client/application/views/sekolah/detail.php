<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Sekolah
                </div>
                <div class="card-body">
                    <div class="container">
                        <table class="table table-hover">
                            <tr>
                                <th width='100px' ;>Wilayah</th>
                                <td><b>: <?= $sekolah['wilayah']; ?></b></td>
                            </tr>
                            <tr>
                                <th>SD</th>
                                <td>: <?= $sekolah['sd']; ?></td>
                            </tr>
                            <tr>
                                <th>SMP</th>
                                <td>: <?= $sekolah['smp']; ?></td>
                            </tr>
                            <tr>
                                <th>SMA</th>
                                <td>: <?= $sekolah['sma']; ?></td>
                            </tr>
                            <tr>
                                <th>SMK</th>
                                <td>: <?= $sekolah['smk']; ?></td>
                            </tr>
                            <tr>
                                <th>SLB</th>
                                <td>: <?= $sekolah['slb']; ?></td>
                            </tr>
                            <tr>
                                <th>JUMLAH</th>
                                <td>: <?= $sekolah['jml']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url(); ?>sekolah" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>