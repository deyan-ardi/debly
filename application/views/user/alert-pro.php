 <?php if ($id_info == true) { ?>
 <div class="alert alert-danger col-lg-12">
     <span>
         <b> Mohon Maaf.. - </b> <?= $info ?></span>
 </div>
 <a href="<?= base_url() ?>user/tautan">
     <button type="button" rel="tooltip" class="btn btn-secondary btn-fill pull-right">Ke Menu</button>
     </button>
 </a>
 <?php } else { ?>
 <div class="alert alert-danger">
     <span>
         <b> Stop.. </b> <?= $info ?></span>
 </div>
 <?php } ?>