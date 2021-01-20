<!-- main body - start
			================================================== -->
<main id="resend-id">


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
                                <button type="submit" name="submit" class="btn bg_default_blue">Kirim
                                    Ulang </button>
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