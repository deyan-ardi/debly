 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-6">
                 <div class="row" id="result">
                     <div class="card col-md-12" id="form-input">
                         <div class="card-header">
                             <h4 class="card-title">Salin Tautan Lama</h4>
                         </div>
                         <div class="card-body">

                             <form id="child-form-input">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Masukkan Tautan Anda</label>
                                             <input type="url" readonly required class="form-control" id="data-url-old"
                                                 value="<?= $this->encryption->decrypt($data_link[0]['url_old']) ?>">
                                         </div>
                                     </div>
                                 </div>
                                 <button type="button" name="submit" onclick="copyOld()"
                                     class="btn btn-info btn-fill pull-right">Salin</button>
                                 <div class="clearfix"></div>
                             </form>
                         </div>
                     </div>

                 </div>
             </div>

             <div class="col-md-6">

                 <div class="card">
                     <div class="card-header ">
                         <h4 class="card-title">Salin Tautan Baru
                         </h4>
                     </div>
                     <div class="card-body">
                         <form id="child-form-input">
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label>Masukkan Tautan Anda</label>
                                         <input type="url" readonly required class="form-control" id="data-url-new"
                                             value="<?= $this->encryption->decrypt($data_link[0]['new_url']) ?>">
                                     </div>
                                 </div>
                             </div>
                             <button type="button" name="submit" onclick="copyNew()"
                                 class="btn btn-info btn-fill pull-right" id="copy-new">Salin</button>
                             <div class="clearfix"></div>
                         </form>
                     </div>
                 </div>
             </div>
             <a href="<?= base_url() ?>user/tautan"><button type="button" name="submit"
                     class="btn btn-secondary btn-fill pull-right">Ke
                     Menu</button></a>
         </div>

     </div>
 </div>