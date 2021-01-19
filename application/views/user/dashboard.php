<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Statistik Tautan</h4>
                        <p class="card-category">Informasi Status Tautan</p>
                    </div>
                    <div class="card-body ">
                        <input type="hidden" id="aktif" value="<?= $aktif ?>">
                        <input type="hidden" id="non-aktif" value="<?= $non_aktif ?>">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Tautan Aktif
                            <i class="fa fa-circle text-danger"></i> Tautan Non Aktif
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Diperbaharui Terakhir Pukul
                            <?= date("H:i") ?>
                            WITA
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Statistik Klik Tautan</h4>
                        <p class="card-category">Informasi Klik Tautan</p>
                    </div>
                    <div class="card-body ">
                        <!-- <div id="chartHours" class="ct-chart"></div> -->
                        <h4 class="text-center"><i>Akan Segera Hadir</i></h4>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            <i class="fa fa-circle text-warning"></i> Tautan Di Klik
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Diperbaharui Terakhir Pukul
                            <?= date("H:i") ?>
                            WITA
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Produk Ganatech</h4>
                        <p class="card-category mt-2 mb-2">Terimakasih telah mendaftar pada laman ini, sebagai rasa
                            terimakasih kami berikut produk
                            premium
                            yang
                            dapat Anda gunakan</p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Youtube Converter</h4>
                                <p class="card-category">Platform yang membantu dalam mengunduh video dari youtube</p>
                            </div>
                            <div class="card-footer ">
                                <div class="legend mt-3">
                                    <i>
                                        <h5>Segera Hadir</h5>
                                    </i>
                                </div>
                                <hr>
                                <div class="stats">
                                    <a href="#"><i class="fa fa-link"></i> Coba Gratis >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Twibbon Maker</h4>
                                <p class="card-category">Platform yang membantu dalam membuat twibbon bagi pengguna</p>
                            </div>
                            <div class="card-footer ">
                                <div class="legend mt-3">
                                    <i>
                                        <h5>Segera Hadir</h5>
                                    </i>
                                </div>
                                <hr>
                                <div class="stats">
                                    <a href="#"> <i class="fa fa-link"></i> Coba Gratis >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Manajemen Tautan</h4>

                            </div>
                            <div class="card-footer ">
                                <div class="legend mt-3">
                                    <p class="card-category">Platform yang membantu dalam melakukan manajemen tautan
                                        terpadu
                                    </p>
                                </div>
                                <hr>
                                <div class="stats">
                                    <a href="<?= base_url() ?>user/tautan"> <i class="fa fa-link"></i> Coba Gratis
                                        >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  card-tasks">
                    <div class="card-header ">
                        <h4 class="card-title">Notifikasi Sistem</h4>
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <div class="purple bg-btn">
                                                <div class="btn-simple">
                                                    <i class="fa fa-bell"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                                Tautan <span
                                                    class="text-info">""<?= $this->encryption->decrypt($ditambahkan[0]['new_url']) ?>"</span>
                                                Telah
                                                Berhasil Ditambahkan
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="purple bg-btn">
                                                <div class="btn-simple">
                                                    <i class="fa fa-bell"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                                Tautan <span
                                                    class="text-info">"<?= $this->encryption->decrypt($dihapus[0]['new_url']) ?>"</span>
                                                Telah
                                                Berhasil Dinon-aktifkan
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="purple bg-btn">
                                                <div class="btn-simple">
                                                    <i class="fa fa-bell"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p> Pengguna <span
                                                    class="text-info">"<?= $bergabung[0]['first_name'] ?>"</span>
                                                Baru Saja
                                                Begabung dengan
                                                Deb.ly
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="purple bg-btn">
                                                <div class="btn-simple">
                                                    <i class="fa fa-bell"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                                <span class="text-info"> "<?= number_format($tautan = $tautan + 22575, 0, "", ".");
                                                                            ?>"</span> Tautan Disingkat Oleh Deb.ly
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Diperbaharui Terakhir Pukul
                            <?= date("H:i") ?>
                            WITA
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>