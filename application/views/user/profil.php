 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-8">
                 <?php if (isset($message)) { ?>
                 <div class="alert alert-danger col-lg-12">
                     <span><?php echo $message; ?></span>
                 </div>
                 <?php } ?>
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Ubah Profil</h4>
                     </div>
                     <div class="card-body">
                         <form action="" method="POST">
                             <div class="row">
                                 <!-- <div class="col-md-3 pr-1">
                                     <div class="form-group">
                                         <label>Upload Profil</label>
                                         <input type="file" class="form-control">
                                     </div>
                                 </div> -->
                                 <div class="col-md-5 pr-1">
                                     <div class="form-group">
                                         <label>Email (disabled)</label>
                                         <input type="text" class="form-control" disabled=""
                                             placeholder="example@mail.com"
                                             value="<?= strtolower($group[0]['email']); ?>">
                                     </div>
                                 </div>
                                 <div class="col-md-3 px-1">
                                     <div class="form-group">
                                         <label>Nama Pengguna</label>
                                         <input type="text" id="first_name" name="first_name" class="form-control"
                                             placeholder="Nama Pengguna"
                                             value="<?= ucwords($group[0]['first_name']); ?>">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6 pr-1">
                                     <div class="form-group">
                                         <label>Kata Sandi Baru(Jika Ingin Mengganti)</label>
                                         <input type="password" id="password" name="password" class="form-control"
                                             placeholder="********">
                                     </div>
                                 </div>
                                 <div class="col-md-6 pl-1">
                                     <div class="form-group">
                                         <label>Konfirmasi Kata Sandi Baru (Jika Ingin Mengganti)</label>
                                         <input type="password" id="password_confirm" name="password_confirm"
                                             class="form-control" placeholder="********">
                                     </div>
                                 </div>
                             </div>
                             <input type="hidden" name="id" id="id" value="<?= $group[0]['id']; ?>">
                             <?php echo form_hidden($csrf); ?>
                             <button type="submit" class="btn btn-info btn-fill pull-right">Perbaharui
                                 Profil</button>
                             <div class="clearfix"></div>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="card card-user">
                     <div class="purple" id="bg-profil">
                         <div class="card-image">
                         </div>
                     </div>
                     <div class="card-body">
                         <div class="author">
                             <a href="#">
                                 <img class="avatar border-gray" src="<?= base_url() ?>assets/images/logo/debly.png"
                                     alt="...">
                                 <h5 class="title"> <?= ucwords($group[0]['first_name']); ?></h5>
                             </a>
                             <p class="description">
                                 <?= strtolower($group[0]['email']); ?>
                             </p>
                         </div>
                         <p class="description text-center">
                             Bergabung pada <?= date("d F Y, H:i", $group[0]['created_on']) ?> WITA
                         </p>
                         <p class="description text-center">
                             <i class="fa fa-check text-success"></i> Sedang Aktif
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>