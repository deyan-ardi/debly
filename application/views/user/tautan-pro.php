 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-6">
                 <div class="row" id="result">
                     <div class="card col-md-12" id="form-input">
                         <div class="card-header">
                             <h4 class="card-title">Buat Tautan Baru</h4>
                         </div>
                         <div class="card-body">

                             <form id="child-form-input">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Masukkan Tautan Anda</label>
                                             <input type="url" required class="form-control" id="url_old" name="url_old"
                                                 placeholder="Sertakan https:// atau http://">
                                         </div>
                                     </div>
                                 </div>
                                 <button type="button" name="submit" class="btn btn-info btn-fill pull-right"
                                     id="singkat">Singkat</button>
                                 <div class="clearfix"></div>
                             </form>
                         </div>
                     </div>

                 </div>
             </div>

             <div class="col-md-6">
                 <div class="card card-user">
                     <div class="card-header ">
                         <h4 class="card-title">Histori Tautan</h4>
                         <p class="card-category mb-3">Tautan Anda Bersifat Permanen, Hanya Non-Aktif Ketika Anda
                             Menghapusnya. Untuk berganti histori, silahkan pilih tanggal pembuatan tautan</p>
                         <div class="text-center mb-3">
                             <i class="fa fa-circle text-success"></i> Tautan Aktif
                             <i class="fa fa-circle text-danger"></i> Tautan Non Aktif
                         </div>
                         <?= $this->pagination->create_links(); ?>
                     </div>
                 </div>
                 <?php
                    $i = 0;
                    foreach ($histori as $data) {

                    ?>

                 <?php if ($data['status'] == 1) { ?>
                 <div class="card" style="border:3px solid green">
                     <?php } else { ?>
                     <div class="card" style="border:3px solid red">
                         <?php } ?>
                         <div class="card-header ">
                             <h4 class="card-title"><?php
                                                        $old_date = strtotime($data['create_date']);
                                                        $new_date = date("d F Y, H:i", $old_date);
                                                        echo $new_date . " WITA";
                                                        ?>
                             </h4>
                         </div>
                         <div class="card-body">
                             <form>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <input type="text" disabled class="form-control"
                                                 value="<?= $this->encryption->decrypt($data['url_old']) ?>">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-8">
                                         <div class="form-group">
                                             <input type="text" readonly class="form-control"
                                                 value="<?= $this->encryption->decrypt($data['new_url']) ?>">
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="row">
                                             <div class="form-group">

                                                 <?php if ($data['status'] == 1) { ?>

                                                 <a
                                                     href="<?= base_url() ?>user/ubah/<?= base64_encode($data['id']); ?>">
                                                     <button type="button" rel="tooltip" title="Ubah"
                                                         class="btn btn-info btn-simple btn-link">
                                                         <i class="fa fa-edit"></i>
                                                     </button>
                                                 </a>
                                                 <a
                                                     href="<?= base_url() ?>user/copy/<?= base64_encode($data['id']); ?>"><button
                                                         type="button" rel="tooltip" title="Salin"
                                                         class="btn btn-warning btn-simple btn-link">
                                                         <i class="fa fa-copy"></i>
                                                     </button>
                                                 </a>
                                                 <a
                                                     href="<?= base_url() ?>user/hapus/<?= base64_encode($data['id']); ?>">
                                                     <button type="button" rel="tooltip" title="Hapus"
                                                         class="btn btn-danger btn-simple btn-link">
                                                         <i class="fa fa-times"></i>
                                                     </button>
                                                 </a>
                                                 <?php } else { ?>

                                                 <a href="#"><button type="button" disabled rel="tooltip" title="Ubah"
                                                         class="btn btn-info btn-simple btn-link">
                                                         <i class="fa fa-edit"></i>
                                                     </button>
                                                 </a>
                                                 <a href="#"><button type="button" disabled rel="tooltip" title="Salin"
                                                         class="btn btn-warning btn-simple btn-link">
                                                         <i class="fa fa-copy"></i>
                                                     </button>
                                                 </a>
                                                 <a href="#">
                                                     <button type="button" disabled rel="tooltip" title="Hapus"
                                                         class="btn btn-danger btn-simple btn-link">
                                                         <i class="fa fa-times"></i>
                                                     </button>
                                                 </a>
                                                 <?php } ?>

                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                     <?php

                        } ?>

                 </div>

             </div>
         </div>
     </div>