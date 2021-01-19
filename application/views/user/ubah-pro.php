 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-6">
                 <div class="row" id="result">
                     <div class="card col-md-12" id="form-input">
                         <div class="card-header">
                             <h4 class="card-title">Ubah Tautan Lama</h4>
                         </div>
                         <div class="card-body">

                             <form id="child-form-input" action="" method="post">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Masukkan Tautan Baru</label>
                                             <input type="url" required class="form-control" id="data-url-old"
                                                 name="old"
                                                 value="<?= $this->encryption->decrypt($data_link[0]['url_old']) ?>">
                                         </div>
                                     </div>
                                 </div>
                                 <input type="hidden" id="id_url" name="id_url" value="<?= $data_link[0]['id'] ?>">
                                 <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Simpan
                                     Tautan</button>
                                 <div class="clearfix"></div>
                             </form>
                         </div>
                     </div>

                 </div>
             </div>

             <div class="col-md-6">

                 <div class="card">
                     <div class="card-header ">
                         <h4 class="card-title">Ubah Tautan Baru
                         </h4>
                     </div>
                     <div class="card-body">
                         <label>Kustomisasi Tautan (Opsional)</label>

                         <form method="post" action="">
                             <div class="row">
                                 <div class="col-md-12" id="alert-information"></div>
                             </div>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <input type="text" disabled class="form-control" value="https://debly.cc/">
                                     </div>
                                 </div>
                                 <?php
                                    $eks = $this->encryption->decrypt($data_link[0]['new_url']);
                                    $pisah = explode("https://debly.cc/", $eks);
                                    $pisah = $pisah[1];
                                    ?>
                                 <div class="col-md-8">
                                     <div class="form-group">
                                         <input type="text" class="form-control" onkeyup="kirim()" id="url_custom"
                                             value="<?= $pisah ?>" name="new"
                                             placeholder="Kustomisasi Bersifat Opsional">
                                     </div>
                                     <button type="submit" name="simpan" value="1"
                                         class="btn btn-info btn-fill pull-right" id="kustom">Simpan Tautan</button>
                                 </div>
                                 <input type="hidden" id="id_url" name="id_url" value="<?= $data_link[0]['id'] ?>">
                             </div>
                         </form>
                         <div class="clearfix"></div>
                     </div>
                 </div>
             </div>
             <a href="<?= base_url() ?>user/tautan"><button type="button" name="submit"
                     class="btn btn-secondary btn-fill pull-right">Ke
                     Menu</button></a>
         </div>

     </div>
 </div>