<!-- <h1><?php echo lang('create_user_heading'); ?></h1>
<p><?php echo lang('create_user_subheading'); ?></p>


<?php echo form_open("auth/create_user"); ?>

<p>

    <?php echo form_input($first_name); ?>
</p>

<p>
    <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
    <?php echo form_input($last_name); ?>
</p>


<p>
    <?php echo lang('create_user_company_label', 'company'); ?> <br />
    <?php echo form_input($company); ?>
</p>

<p>
    <?php echo lang('create_user_email_label', 'email'); ?> <br />
    <?php echo form_input($email); ?>
</p>

<p>
    <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
    <?php echo form_input($phone); ?>
</p>

<p>
    <?php echo lang('create_user_password_label', 'password'); ?> <br />
    <?php echo form_input($password); ?>
</p>

<p>
    <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
    <?php echo form_input($password_confirm); ?>
</p>


<p><?php echo form_submit('submit', lang('create_user_submit_btn')); ?></p>

<?php echo form_close(); ?> -->

<!-- main body - start
			================================================== -->
<main>


    <!-- breadcrumb_section - start
				================================================== -->
    <section id="breadcrumb_section"
        class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title">Mendaftar</h1>
                <p class="mb-0">
                    Mendaftar untuk membuka akses ke semua fitur premium yang tersedia. Kami mengutamakan privasi Anda,
                    seluruh data yang diberikan Akan dienkripsi sehingga hanya Anda yang mengetahui data tersebut, tidak
                    ada yang lain diantaranya, bahkan Deb.ly
                </p>
            </div>
        </div>

        <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
            <img src="assets/images/shapes/shape_1.png" alt="spahe_not_found">
        </div>
        <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
            <img src="assets/images/shapes/shape_2.png" alt="spahe_not_found">
        </div>
    </section>
    <!-- breadcrumb_section - end
				================================================== -->


    <!-- register_section - start
				================================================== -->
    <section id="register_section" class="register_section sec_ptb_120 clearfix">
        <div class="container">

            <div class="signup_wrap" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="info_wrap">
                            <h4>Ingin Lebih Banyak Fitur?</h4>
                            <h3>
                                Daftar Sekarang dan <strong>Gratis</strong> menggunakan berbagai produk kami
                            </h3>
                            <div class="info_list ul_li_block mb-50">
                                <ul class="clearfix">
                                    <li>Akses Premium Ke Semua Produk</li>
                                    <li>Histori dan Masa Aktif Tautan yang tak terbatas</li>
                                    <li>Bebas Mengkustomisasi, Melihat Statistik, dan Membuat QR Code pada Tautan</li>
                                    <li>Fitur Unggulan Lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7">
                        <div class="reg_form signup_form">
                            <h2 class="title_text">Selamat Bergabung di Komunitas Kami</h2>
                            <p class="text-justify"><?= $info ?></p>
                            <form action="" method="POST">
                                <div class="form_item">
                                    <input type="hidden" id="email" name="identity" value="<?= $email_user ?>">
                                </div>
                                <button type="submit" name="submit" class="btn bg_default_blue">Mendaftar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- register_section - end
				================================================== -->


</main>
<!-- main body - end
			================================================== -->