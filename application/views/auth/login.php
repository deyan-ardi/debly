<!-- main body - start
			================================================== -->
<main>


    <!-- breadcrumb_section - start
				================================================== -->
    <section id="breadcrumb_section"
        class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title">Masuk</h1>
                <p class="mb-0">
                    Mendaftar untuk membuka akses ke semua fitur premium yang tersedia. Kami mengutamakan privasi Anda,
                    seluruh data yang diberikan Akan dienkripsi sehingga hanya Anda yang mengetahui data tersebut, tidak
                    ada yang lain diantaranya, bahkan Deb.ly
                </p>
            </div>
        </div>

        <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
            <img src="<?= base_url() ?>assets/images/shapes/shape_1.png" alt="spahe_not_found">
        </div>
        <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
            <img src="<?= base_url() ?>assets/images/shapes/shape_2.png" alt="spahe_not_found">
        </div>
    </section>
    <!-- breadcrumb_section - end
				================================================== -->


    <!-- register_section - start
				================================================== -->
    <section id="register_section" class="register_section sec_ptb_120 bg_gray half_bg_white clearfix">
        <div class="container">
            <div
                class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-6 col-md-7 order-last">
                    <div class="signin_image" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= base_url() ?>assets/images/register/img_1.png" alt="image_not_found">
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-8">
                    <div class="section_title increase_size mb-80" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="title_text mb-30">Masuk Akun Deb.ly</h2>
                    </div>
                    <?php if(isset($message)){?>
                    <div class="alert alert-danger col-lg-12">
                        <span><?php echo $message; ?></span>
                    </div>
                    <?php }?>
                    <div class="reg_form signin_form" data-aos="fade-up" data-aos-delay="500">
                        <?php echo form_open("auth/login"); ?>
                        <div class="form_item">
                            <h4 class="input_title">Email</h4>
                            <?php echo form_input($identity); ?>
                        </div>

                        <div class="form_item">

                            <h4 class="input_title">Kata Sandi</h4>
                            <?php echo form_input($password); ?>
                        </div>

                        <div class="row mb-50">
                            <div class="col-6">
                                <div class="check_box">
                                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                                    <label for="remember">Biarkan Saya Tetap Masuk</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <a href="<?= base_url() ?>forgot_password" class="forget_btn">Lupa Password?</a>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn bg_default_blue mb-30">Masuk</button>

                        <p class="mb-0 text-center">
                            Pengguna Baru? <a href="<?= base_url() ?>register"><u>Daftar Disini</u></a>
                        </p>
                        <?php echo form_close(); ?>
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