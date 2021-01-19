<div class="card col-md-12" id="result-pro">
    <div class="card-header">
        <h4 class="card-title">Tautan Anda</h4>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tautan Asli</label>
                        <input type="url" disabled class="form-control" id="url_old" name="url_old"
                            value="<?= $this->encryption->decrypt($links[0]['url_old']) ?>">
                    </div>
                </div>
            </div>
            <a href="<?= base_url() ?>user/tautan"><button type="button" name="submit"
                    class="btn btn-info btn-fill pull-right">Singkat
                    Lagi</button></a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
<div class="card col-md-12">
    <div class="card-header">
        <h4 class="card-title">Tautan Singkat</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <label>Kustomisasi Tautan</label>
                <form>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" readonly class="form-control"
                                    value="<?= $this->encryption->decrypt($links[0]['new_url']) ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="button" name="submit" value="1"
                                    class="btn btn-info btn-fill pull-right">Salin
                                    Tautan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="alert-information"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label>Kustomisasi Tautan (Opsional)</label>
                <form method="post" action="<?= base_url() ?>user/proses_kustom_tautan">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" disabled class="form-control" value="https://debly.cc/">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" class="form-control" onkeyup="kirim()" id="url_custom"
                                    name="url_custom" placeholder="Kustomisasi Bersifat Opsional">
                            </div>
                        </div>
                        <input type="hidden" id="id_url" name="id_url" value="<?= $links[0]['id'] ?>">
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="submit" name="simpan" value="1" class="btn btn-info btn-fill pull-right"
                                    id="kustom">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>