<div class="col-lg-12 row mb-4">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Laporan Pengunjung</h6>
            </div>
            <div class="card-body">

                <h4 class="small font-weight-bold">Cetak Berdasarkan Tanggal</h4>
                    <form action="<?= base_url('admin/Claporan/filter') ?>" method="POST" target="_blank">
                        <input type="hidden" name="nilaifilter" value="1">
                        <div class="row form-group">
                            <label class="col-lg-3 text-lg-right" for="tanggal">Tanggal Awal</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tanggalawal">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                </div>
                                <?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-lg-3 text-lg-right" for="tanggal">Tanggal Akhir</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tanggalakhir">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                </div>
                                <?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col offset-md-4">
                                <button type="submit" class="btn btn-primary">Cetak</button>
                            </div>
                        </div>
                    </form><br>

                <h4 class="small font-weight-bold">Cetak Berdasarkan Bulan</h4>
                    <form action="<?= base_url('admin/Claporan/filter') ?>" method="POST" target="_blank">
                        <input type="hidden" name="nilaifilter" value="2">
                        <div class="row form-group">
                            <label class="col-lg-3 text-lg-right" for="tanggal">Tahun</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <select class="form-control" name="tahun1" required="">
                                        <?php foreach ($tahun as $row): ?>
                                            <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
                                        <?php endforeach ?>
                                    </select><br>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-lg-3 text-lg-right" for="tanggal">Bulan Awal</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <select class="form-control" name="bulanawal" required="">
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select> <br>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        <div class="row form-group">
                            <label class="col-lg-3 text-lg-right" for="tanggal">Bulan Akhir</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <select class="form-control" name="bulanakhir" required="">
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select> <br>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col offset-md-4">
                                <button type="submit" class="btn btn-primary">Cetak</button>
                            </div>
                        </div>
                    </form><br>

                <h4 class="small font-weight-bold">Cetak Berdasarkan Tahun</h4>
                    <form action="<?= base_url('admin/Claporan/filter') ?>" method="POST" target="_blank">
                        <input type="hidden" name="nilaifilter" value="3">
                        <div class="row form-group">
                            <label class="col-lg-3 text-lg-right" for="tanggal">Tahun</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <select class="form-control" name="tahun2" required="">
                                        <?php foreach ($tahun as $row): ?>
                                            <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
                                        <?php endforeach ?>
                                    </select><br>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col offset-md-4">
                                <button type="submit" class="btn btn-primary">Cetak</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>