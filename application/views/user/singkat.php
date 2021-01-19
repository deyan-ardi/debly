<!-- main body - start
			================================================== -->
<main>

    <!-- breadcrumb_section - start
				================================================== -->
    <section id="breadcrumb_section"
        class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title">Singkat Tautan</h1>
                <p class="mb-0">
                    Anda sedang menikmati versi non-registrasi dari produk kami, Tautan yang anda buat akan aktif selama
                    90 Hari. Untuk menikmati fitur lainnya, silahkan melakukan registrasi.
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

    <?php if (!empty($data[0])) { ?>
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
                            <div class="form_item">
                                <h4 class="input_title">Tautan Asli</h4>
                                <input type="text" name="" disabled placeholder="Tautan Asli"
                                    value="<?= $this->encryption->decrypt($data[0]['url_old']) ?>">
                            </div>

                            <div class="form_item">
                                <h4 class="input_title">Tautan Singkat</h4>
                                <input type="email" name="" id="tautan_0" readonly placeholder="Tautan Baru"
                                    value="<?= $this->encryption->decrypt($data[0]['new_url']) ?>">
                            </div>
                            <button type="button" onclick="copy_text_1()" id="btn_1" class="btn bg_default_blue">Salin
                                Tautan
                                Baru</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section id="register_section" class="register_section clearfix mt-5">
        <div class="container">

            <div class="signup_wrap" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-center mb-5">
                    Histori Tautan
                </h3>
                <?php if (empty($data[1]) && empty($data[2])) { ?>
                <h3 class="text-center mb-5 mt-5">
                    <i>Histori Masih Kosong</i>
                </h3>
                <?php } ?>
                <?php if (!empty($data[1])) { ?>
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-5">
                        <div class="reg_form signup_form">
                            <div class="form_item">
                                <h4 class="input_title">Tautan Asli</h4>
                                <input type="text" name="" disabled placeholder="Tautan Asli"
                                    value="<?= $this->encryption->decrypt($data[1]['url_old']) ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7">
                        <div class="reg_form signup_form">
                            <div class="form_item">
                                <h4 class="input_title">Tautan Singkat</h4>
                                <input type="email" name="" id="tautan_1" readonly placeholder="Tautan Baru"
                                    value="<?= $this->encryption->decrypt($data[1]['new_url']) ?>">
                            </div>
                            <button type="button" onclick="copy_text_2()" id="btn_2" class="btn bg_default_blue">Salin
                                Tautan
                                Baru</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if (!empty($data[2])) { ?>
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-5">
                        <div class="reg_form signup_form">
                            <div class="form_item">
                                <h4 class="input_title">Tautan Asli</h4>
                                <input type="text" name="" disabled placeholder="Tautan Asli"
                                    value="<?= $this->encryption->decrypt($data[2]['url_old']) ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7">
                        <div class="reg_form signup_form">
                            <div class="form_item">
                                <h4 class="input_title">Tautan Singkat</h4>
                                <input type="email" name="" id="tautan_2" readonly placeholder="Tautan Baru"
                                    value="<?= $this->encryption->decrypt($data[2]['new_url']) ?>">
                            </div>
                            <button type="button" onclick="copy_text_3()" id="btn_3" class="btn bg_default_blue">Salin
                                Tautan
                                Baru</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <!-- process_section - start
				================================================== -->
    <section id="process_section" class="process_section sec_ptb_120 clearfix">
        <div class="container line_bg" data-background="<?= base_url() ?>assets/images/line_1.png">

            <div class="process_item clearfix" data-aos="fade-up" data-aos-delay="300">
                <div
                    class="row align-items-center justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-lg-5 col-md-5 col-sm-7 order-last">
                        <div class="item_image">
                            <img src="<?= base_url() ?>assets/images/process/img_1.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-7">
                        <div class="item_content">
                            <span class="serial_number">01</span>
                            <h3 class="item_title">Lakukan Pendaftaran Pada Website Kami</h3>
                            <p class="mb-0 text-justify">
                                Kami mengutamakan privasi pengguna, untuk menikmati berbagai fitur dan produk yang telah
                                kami buat secara tak terbatas,
                                silahkan melakukan registrasi. Segala data yang Anda berikan akan dienkripsi, sehingga
                                benar-benar hanya Anda yang dapat melihatnya, dan tidak ada seorangpun diantaranya,
                                bahkan Deb.ly sendiri.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="process_item clearfix" data-aos="fade-up" data-aos-delay="100">
                <div
                    class="row align-items-center justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <div class="item_image">
                            <img src="<?= base_url() ?>assets/images/process/img_2.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-7">
                        <div class="item_content">
                            <span class="serial_number">02</span>
                            <h3 class="item_title">Login ke dashboard</h3>
                            <p class="mb-0 text-justify">
                                Jika Anda telah berhasil melakukan pendaftaran, silahkan melakukan login ke dashboard
                                pengguna, segala produk dan fitur-fitur premium akan tersedia gratis untuk Anda.
                                Interface dashboard yang kami tawarkan adalah interface dengan tampilan yang
                                sangat mudah dipahami, Anda dapat berdiskusi dengan kami kapanpun Anda mau melalui fitur
                                diskusi yang ada pada Dashboard.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="process_item clearfix" data-aos="fade-up" data-aos-delay="100">
                <div
                    class="row align-items-center justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-lg-5 col-md-5 col-sm-7 order-last">
                        <div class="item_image">
                            <img src="<?= base_url() ?>assets/images/process/img_3.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-7">
                        <div class="item_content">
                            <span class="serial_number">03</span>
                            <h3 class="item_title">Nikmati harimu dengan berbagai fitur dan produk yang up to date</h3>
                            <p class="mb-0 text-justify">
                                Kami menghadirkan inovasi-inovasi terbaru dengan memanfaatkan tren dan mengikuti
                                perkembangan zaman. Kami tak henti-hentinya melakukan pembaharuan dan penambahan produk
                                dan fitur terbaru. Daftar sekarang untuk menjadi bagian dari kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- process_section - end
				================================================== -->


</main>
<!-- main body - end
			================================================== -->