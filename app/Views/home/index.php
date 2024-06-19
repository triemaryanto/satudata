<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<style>
#header .header-nav.header-nav-links nav>ul li:hover>a {
    color: #FCE700 !important;
}

#header .header-nav.header-nav-links nav>ul:not(:hover)>li>a.active {
    color: #FCE700 !important;
}
</style>

<!-- home -->
<section class="position-relative hero-section border-0 overflow-hidden m-0 p-0">
    <div class="container align-items-center ">
        <!-- <svg class="custom-svg-1 d-none d-sm-block custom-svg-cst" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 649 578">
                        <path fill="#FFF"
                            d="M-225.5,154.7l358.45,456.96c7.71,9.83,21.92,11.54,31.75,3.84l456.96-358.45c9.83-7.71,11.54-21.92,3.84-31.75
                                L267.05-231.66c-7.71-9.83-21.92-11.54-31.75-3.84l-456.96,358.45C-231.49,130.66-233.2,144.87-225.5,154.7z" />
                        <path class="animated customLineAnim" fill="none" stroke="#1C5FA8" stroke-width="1.5"
                            stroke-miterlimit="10" d="M416-21l202.27,292.91c5.42,7.85,3.63,18.59-4.05,24.25L198,603"
                            style="animation-delay: 300ms; animation-duration: 5s;" />
                    </svg> -->
        <div class="row p-relative z-index-1">
            <div class="col-md-7 px-5">
                <div class="overflow-hidden mb-1">
                    <h2 class="fw-bolder text-white text-4-5 line-height-2 line-height-sm-7 mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="800">
                        Data Wonosobo di depan anda
                    </h2>
                </div>
                <h1 class="text-white fw-bolder pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="1100">
                    Mencari data tentang <span style="color: #FCE700;">Wonosobo</span> kini bisa dilakukan dari mana
                    saja, kapan saja, siapa saja</h1>

                <div class="sc-hBEYId bwvDcg appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="1100">
                    <form action="<?php echo base_url('sektoral') ?>" method="GET">
                        <input type="text" class="form-control rounded" placeholder="Masukkan kata kunci disini"
                            name="q">
                        <div class="btn-search svg-15">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.88604 10.9924C2.99413 12.1021 4.46977 12.7682 6.03495 12.8654C7.60013 12.9625 9.1468 12.4839 10.3836 11.5198L14.6392 15.7754C14.7901 15.9211 14.9922 16.0018 15.202 16C15.4119 15.9981 15.6126 15.914 15.7609 15.7656C15.9093 15.6173 15.9935 15.4165 15.9953 15.2067C15.9971 14.9969 15.9165 14.7948 15.7707 14.6439L11.5151 10.3883C12.522 9.09605 12.9981 7.46839 12.8462 5.83723C12.6943 4.20608 11.9259 2.6943 10.6977 1.61022C9.46946 0.526132 7.87396 -0.0486034 6.23657 0.00322354C4.59918 0.0550504 3.04323 0.729536 1.88604 1.88912C1.28811 2.48675 0.813791 3.19632 0.490178 3.97731C0.166565 4.7583 0 5.5954 0 6.44078C0 7.28617 0.166565 8.12327 0.490178 8.90425C0.813791 9.68525 1.28811 10.3948 1.88604 10.9924ZM3.01755 3.02224C3.80863 2.23118 4.84952 1.73888 5.96287 1.62921C7.07622 1.51954 8.19316 1.7993 9.12337 2.42081C10.0536 3.04232 10.7395 3.96714 11.0643 5.03769C11.3891 6.10824 11.3327 7.25829 10.9047 8.2919C10.4766 9.32552 9.70343 10.1787 8.71683 10.7062C7.73024 11.2337 6.59128 11.4027 5.49401 11.1846C4.39675 10.9664 3.40905 10.3746 2.69922 9.50991C1.98939 8.6452 1.60133 7.56113 1.60116 6.44238C1.59896 5.80667 1.72304 5.17684 1.96618 4.58946C2.20932 4.00207 2.56669 3.46882 3.01755 3.02064V3.02224Z"
                                    fill="#ED1C24"></path>
                            </svg>
                        </div>
                    </form>
                </div>
                <!-- <a href="#"
                                class="btn btn-primary custom-btn-border-radius custom-btn-arrow-effect-1 font-weight-bold text-3 px-5 btn-py-3 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
                                GET STARTED
                                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17"
                                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF"
                                        points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                </svg>
                            </a> -->
            </div>
            <div class="col-md-5">
                <!-- <div class=""
                                style="background-image: url(img/logos/laporan.png); background-position: center right; animation-duration: 30s;">
                            </div> -->
                <img class="sc-hHfuMS vWFNI animated kenBurnsToRight" style="animation-delay: 600ms;"
                    src="<?= base_url('img/icons/icon-home-v2.png') ?>" width="100%" height="100%">
            </div>
        </div>
    </div>
</section>
<!-- End home -->

<section class="section border-0 m-0 appear-animation" data-appear-animation="fadeIn"
    data-appear-animation-delay="1200">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-9 col-md-12 col-lg-5 text-center text-lg-end mb-4 mb-lg-0">
                <h2 class="font-weight-bold text-dark-emphasis text-7 line-height-1 mb-1 appear-animation"
                    data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1700">
                    Satu Data Wonosobo statistics</h2>
                <!-- <p class="font-weight-bold text-4 mb-0 appear-animation"
                                data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1900">Make An
                                Appointment Today With Our Online Form</p> -->
            </div>
            <div class="col-lg-7 text-center text-lg-start ps-lg-4 d-flex justify-content-around">
                <div class="appear-animation text-center" data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="1700">
                    <h2 class="m-0 text-7 text-body-secondary font-weight-bold"><?= $data_statistik['dataset'] ?></h2>
                    <span class="text-dark-emphasis font-weight-bold">datasets</span>
                </div>
                <div class="appear-animation text-center" data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="1700">
                    <h2 class="m-0 text-7 text-body-secondary font-weight-bold"><?= $data_statistik['organization'] ?>
                    </h2>
                    <span class="text-dark-emphasis font-weight-bold">organizations</span>
                </div>
                <div class="appear-animation text-center" data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="1700">
                    <h2 class="m-0 text-7 text-body-secondary font-weight-bold"><?= $data_statistik['groups'] ?></h2>
                    <span class="text-dark-emphasis font-weight-bold">groups</span>
                </div>
                <div class="appear-animation text-center" data-appear-animation="fadeInLeftShorterPlus"
                    data-appear-animation-delay="1700">
                    <h2 class="m-0 text-7 text-body-secondary font-weight-bold">0</h2>
                    <span class="text-dark-emphasis font-weight-bold">showcases</span>
                </div>
                <!-- <a href="appointment.html"
                                class="btn btn-primary btn-outline custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 ms-lg-2 appear-animation"
                                data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1500">MAKE AN
                                APPOINTMENT</a> -->
            </div>
        </div>
    </div>
</section>


<section class="feature section bg-grey appear-animation" data-appear-animation="fadeIn"
    data-appear-animation-delay="1200">
    <div class="container ">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-lg-9 col-xl-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="250">Data Sektoral</h2>
                </div>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim"
                        data-appear-animation-delay="600">
                </div>
                <!-- <p class="font-weight-light text-3-5 mb-5 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit
                                sit
                                amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis
                                ultrices
                                non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p> -->
            </div>
        </div>
        <div class="row row-gutter-sm mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
            data-appear-animation-delay="750">
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="<?= base_url('sektoral?q=pendidikan') ?>" class="text-decoration-none">
                    <div
                        class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="<?= base_url('img/icons/pendidikan.png') ?>" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">
                            Pendidikan
                        </h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="<?= base_url('sektoral?q=pangan') ?>" class="text-decoration-none">
                    <div
                        class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="<?= base_url('img/icons/pangan.png') ?>" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Pangan
                        </h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="<?= base_url('sektoral?q=sosial') ?>" class="text-decoration-none">
                    <div
                        class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="<?= base_url('img/icons/sosial.png') ?>" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Sosial
                        </h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="<?= base_url('sektoral?q=lingkungan hidup') ?>" class="text-decoration-none">
                    <div
                        class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="<?= base_url('img/icons/lingkungan-hidup.png') ?>" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Lingkungan Hidup
                        </h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="<?= base_url('sektoral?q=infrastruktur') ?>" class="text-decoration-none">
                    <div
                        class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="<?= base_url('img/icons/infrastruktur.png') ?>" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Infrastruktur
                        </h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4 ">
                <a href="<?= base_url('sektoral?q=kependudukan') ?>" class="text-decoration-none">
                    <div
                        class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="<?= base_url('img/icons/kependudukan.png') ?>" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Kependudukan
                        </h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="<?= base_url('sektoral?q=kesehatan') ?>" class="text-decoration-none">
                    <div
                        class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="<?= base_url('img/icons/kesehatan.png') ?>" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Kesehatan
                        </h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="<?= base_url('sektoral?q=pariwisata') ?>" class="text-decoration-none">
                    <div
                        class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="<?= base_url('img/icons/pariwisata-dan-kebudayaan.png') ?>" class="img-fluid"
                                alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">
                            Pariwisata dan Kebudayaan
                        </h3>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- BEGGIN Berita  -->
<section class="shop section section-height-4 border-0 m-0">
    <div class="container">
        <div class="row justify-content-center pb-3 mb-4">
            <div class="col-lg-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="250">Berita Terkini
                    </h2>
                </div>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim"
                        data-appear-animation-delay="600">
                </div>
                <!-- <p class="font-weight-light text-3-5 mb-0 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit
                                sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis
                                ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p> -->
            </div>
        </div>
        <div class="products row row-gutter-sm appear-animation owl-carousel nav-outside nav-style-1 nav-dark nav-arrows-thin nav-font-size-lg custom-carousel-box-shadow-1 mb-0"
            data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 15, 'stagePadding': '75'}""
                        data-appear-animation=" fadeInUpShorter" data-appear-animation-delay="750">

            <?php foreach ($berita as $key => $val) : ?>
            <form action="berita/<?= $val['slug'] ?>" method="POST" accept-charset="utf-8" id="formBerita">
                <input type="hidden" name="id_posting" id="formBeritaId" value="<?= $val['id_posting'] ?>">
                <div class="product mb-5">
                    <div class="product-thumb-info border-0 mb-3 rounded">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce text-bg-danger"><?= $val['updated_at'] ?></span>
                        </div>
                        <a href="https://diskominfo.wonosobokab.go.id/detail/<?= $val['slug'] ?>"
                            class=" quick-view text-uppercase font-weight-semibold">
                            Baca Selengkapnya
                        </a>
                        <a href="https://diskominfo.wonosobokab.go.id/detail/<?= $val['slug'] ?>">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid"
                                    src="https://diskominfo.wonosobokab.go.id/<?= $val['gambar_muka']['path'] ?><?= $val['gambar_muka']['file_name'] ?>">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <!-- <a href="https://diskominfo.wonosobokab.go.id/detail/<?= $val['slug'] ?>" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">
                                categori
                            </a> -->
                            <h3
                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="https://diskominfo.wonosobokab.go.id/detail/<?= $val['slug'] ?>"
                                    class="text-color-dark text-color-hover-primary">
                                    <?= $val['judul_posting'] ?>
                                </a>
                            </h3>

                            <p class="font-weight-light text-start text-3-5 mb-0  text-truncate text-wrap"
                                style="width: 410px; max-height:75px">
                                <?= $val['keterangan'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
            <?php endforeach ?>



            <!-- <div class="product mb-0">
                <div class="product-thumb-info border-0 mb-3">
                    <div class="product-thumb-info-badges-wrapper">
                        <span class="badge badge-ecommerce text-bg-danger">01/02/2023</span>
                    </div>
                    <a href="ajax/product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
                        Baca Selengkapnya
                    </a>
                    <a href="shop-product-sidebar-left.html">
                        <div class="product-thumb-info-image bg-light">
                            <img alt="" class="img-fluid" src="img/demos/auto-services/products/product-4.jpg">
                        </div>
                    </a>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                            <a href="" class="text-color-dark text-color-hover-primary">Product
                                Short
                                Name</a>
                        </h3>
                    </div>
                </div>
            </div> -->

        </div>
        <div class="row mt-5 py-3">
            <div class="col text-center">
                <a href="berita?page=1"
                    class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
                    Lihat Berita Lainnya
                    <i class="ml-1 fas fa-angle-right fa-sm"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END Berita -->

<!-- BEGGIN Data Paling Banyak Di Download -->
<!-- <section class="section border-0 m-0">
    <div class="container pb-3 my-5">
        <div class="row justify-content-center pb-3 mb-4">
            <div class="col text-center">
                <h2 class="font-weight-bold text-color-dark line-height-1 mb-0">
                    Data Paling Banyak di Download
                </h2>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0">
                </div>
                <p class="font-weight-bold text-3-5 mb-1">We are very proud of the service we provide and
                    stand by every product we carry.</p>
                <p class="font-weight-light text-3-5 mb-0">Read our testimonials from our happy customers.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="owl-carousel nav-outside nav-style-1 nav-dark nav-arrows-thin nav-font-size-lg custom-carousel-box-shadow-1 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 15, 'stagePadding': '75'}">
                    <div>
                        <div class="card custom-border-radius-1">
                            <div class="card-body">
                                <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                    <blockquote>
                                        <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
                                            risus porta, tincidunt turpis at, interdum tortor. Suspendisse
                                            potenti. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold">John Smith</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card custom-border-radius-1">
                            <div class="card-body">
                                <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                    <blockquote>
                                        <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
                                            risus porta, tincidunt turpis at, interdum tortor. Suspendisse
                                            potenti. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold">John Doe</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card custom-border-radius-1">
                            <div class="card-body">
                                <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                    <blockquote>
                                        <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
                                            risus porta, tincidunt turpis at, interdum tortor. Suspendisse
                                            potenti. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold">John Smith</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card custom-border-radius-1">
                            <div class="card-body">
                                <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                    <blockquote>
                                        <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
                                            risus porta, tincidunt turpis at, interdum tortor. Suspendisse
                                            potenti. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold">John Doe</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END Data Paling Banyak Di Download -->

<!-- <div class="container my-5 pt-md-4 pt-xl-0">
                <div class="row align-items-center justify-content-center pb-4 mb-5">
                    <div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
                        <div class="overflow-hidden">
                            <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="300">Twenty Years of Top
                                Experience</h2>
                        </div>
                        <div class="custom-divider divider divider-primary divider-small my-3">
                            <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim"
                                data-appear-animation-delay="700">
                        </div>
                        <p class="font-weight-light text-3-5 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Cras a elit sit
                            amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices
                            non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                        <p class="pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="700">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                            hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor,
                            quis sollicitudin. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.</p>
                        <div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row">
                            <a href="about-us.html"
                                class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation"
                                data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="950">VIEW
                                MORE</a>
                            <div class="feature-box align-items-center border border-top-0 border-end-0 border-bottom-0 custom-remove-mobile-xs-border-left ms-sm-4 ps-sm-4 appear-animation"
                                data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1200">
                                <div class="feature-box-icon bg-transparent">
                                    <i class="icons icon-phone text-6 text-color-dark"></i>
                                </div>
                                <div class="feature-box-info line-height-2 ps-1">
                                    <span class="d-block text-1 font-weight-semibold text-color-default">CALL US
                                        NOW</span>
                                    <strong class="text-4-5"><a href="tel:+1234567890"
                                            class="text-color-dark text-color-hover-primary text-decoration-none">+123
                                            4567 890</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-9 col-lg-6 ps-lg-5 pe-5 appear-animation"
                        data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450"
                        data-plugin-options="{'accY': -200}">
                        <div class="position-relative">
                            <div data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                <img src="img/demos/auto-services/generic-1.png" class="img-fluid" alt="" />
                            </div>
                            <div class="position-absolute transform3dxy-n50" style="top: 25%; left: 7%;">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': false}">
                                    <img src="img/demos/auto-services/generic-1-1.png" class="appear-animation" alt=""
                                        data-appear-animation="fadeInUpShorterPlus"
                                        data-appear-animation-delay="1700" />
                                </div>
                            </div>
                            <div class="position-absolute transform3dxy-n50 ms-5 pb-5 ms-xl-0"
                                style="top: 32%; left: 85%;">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1500, 'isInsideSVG': false}">
                                    <img src="img/demos/auto-services/generic-1-2.png" class="appear-animation" alt=""
                                        data-appear-animation="fadeInRightShorterPlus"
                                        data-appear-animation-delay="1900" />
                                </div>
                            </div>
                            <div class="position-absolute transform3dxy-n50" style="top: 90%; left: 19%;">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': false}">
                                    <img src="img/demos/auto-services/generic-1-3.png" class="appear-animation" alt=""
                                        data-appear-animation="fadeInDownShorterPlus"
                                        data-appear-animation-delay="2100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
                        <a href="services-detail.html" class="text-decoration-none">
                            <div class="custom-icon-box-style-1 appear-animation"
                                data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250"
                                data-plugin-options="{'accY': -200}">
                                <div class="custom-icon-style-1 mb-4">
                                    <img width="50" src="img/demos/auto-services/icons/checklist.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                </div>
                                <h3
                                    class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-3 px-xl-5 my-2">
                                    Complete Auto Body and Paint Shop</h3>
                                <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
                        <a href="services-detail.html" class="text-decoration-none">
                            <div class="custom-icon-box-style-1 appear-animation"
                                data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500"
                                data-plugin-options="{'accY': -200}">
                                <div class="custom-icon-style-1 mb-4">
                                    <img width="50" src="img/demos/auto-services/icons/wheel-disk.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                </div>
                                <h3
                                    class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-xl-5 my-2 mx-4">
                                    Free Diagnosis & Brake Checks</h3>
                                <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 text-center px-lg-5">
                        <a href="services-detail.html" class="text-decoration-none">
                            <div class="custom-icon-box-style-1 appear-animation"
                                data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750"
                                data-plugin-options="{'accY': -200}">
                                <div class="custom-icon-style-1 mb-4">
                                    <img width="50" src="img/demos/auto-services/icons/car-safe.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                </div>
                                <h3
                                    class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-4 px-xl-5 my-2">
                                    Car Mechanics You Can Trust</h3>
                                <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div> -->

<!-- <section
                class="section custom-bg-color-grey-1 custom-background-size-1 position-relative overflow-hidden border-0 m-0"
                data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '130%', 'fadeIn': true}"
                data-image-src="img/demos/auto-services/backgrounds/background-2.jpg">
                <svg class="custom-svg-background-1" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 537"
                    data-appear-animation-svg="true">
                    <path fill="#F4F4F4"
                        d="M964.33,189.3L1110.08,0H0v537h1338.31L972.96,255.7C952.24,239.74,948.38,210.02,964.33,189.3z" />
                    <path class="appear-animation" data-appear-animation="customLineAnim2"
                        data-appear-animation-delay="500" data-appear-animation-duration="5s"
                        data-plugin-options="{'accY': -400}" fill="none" stroke="#1C5FA8" stroke-width="2"
                        stroke-miterlimit="10" d="M1854.35,105.63l-485.31-340.84c-18.3-12.85-43.56-8.44-56.42,9.86L971.79,259.96
                            c-12.85,18.3-8.44,43.56,9.86,56.42l485.31,340.84c18.3,12.85,43.56,8.44,56.42-9.86l340.84-485.31
                            C1877.07,143.74,1872.65,118.48,1854.35,105.63z" />
                </svg>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="overflow-hidden">
                                <h2 class="font-weight-bold text-color-dark line-height-3 mb-0 appear-animation"
                                    data-appear-animation="maskUp" data-appear-animation-delay="250">Proudly Serving All
                                    Brands</h2>
                            </div>
                            <div class="custom-divider divider divider-primary divider-small pt-1 mb-3 mt-2">
                                <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim"
                                    data-appear-animation-delay="600">
                            </div>
                            <p class="font-weight-light text-3-5 pb-3 pe-5 me-md-5 me-lg-4 mb-4 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit
                                sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis
                                ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                            <div class="row">
                                <div class="col-5 col-lg-4 order-1 appear-animation"
                                    data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750">
                                    <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 1
                                        </li>
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 2
                                        </li>
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 3
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 order-3 order-lg-2 appear-animation"
                                    data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1000">
                                    <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 4
                                        </li>
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 5
                                        </li>
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 6
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-lg-4 order-2 order-lg-3 appear-animation"
                                    data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1250">
                                    <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 7
                                        </li>
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 8
                                        </li>
                                        <li class="font-weight-semibold text-color-dark">
                                            <i
                                                class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                                            Brand 9
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


<!-- <section class="section section-height-3 bg-primary border-0 m-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-7 text-center text-lg-start mb-4 mb-lg-0">
                            <h2
                                class="text-color-light font-weight-medium text-3-5 line-height-2 line-height-sm-1 ls-0 mb-2 mb-lg-2">
                                LOOKING FOR HONEST AND RELIABLE SERVICES?</h2>
                            <h3
                                class="font-weight-bold text-color-light text-transform-none text-8 line-height-2 line-height-lg-1 mb-1">
                                Best Mechanics Downtown Los Angeles CA</h3>
                            <p class="font-weight-bold text-color-light text-4 opacity-7 mb-0">Make An Appointment Today
                                With Our Online Form</p>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                <div class="feature-box align-items-center mb-3 mb-lg-0">
                                    <div class="feature-box-icon bg-transparent">
                                        <i class="icons icon-phone text-6 text-color-light"></i>
                                    </div>
                                    <div class="feature-box-info line-height-2 ps-1">
                                        <span class="d-block text-1 font-weight-semibold text-color-light mb-1">CALL US
                                            NOW</span>
                                        <strong class="text-4-5"><a href="tel:+1234567890"
                                                class="text-color-light text-decoration-none">+123 4567 890</a></strong>
                                    </div>
                                </div>
                                <a href="appointment.html"
                                    class="btn btn-light btn-outline custom-btn-border-radius font-weight-bold text-color-light text-color-hover-dark bg-color-hover-light btn-px-5 btn-py-3">MAKE
                                    AN APPOINTMENT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

<!-- <div class="lightbox"
                data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-3 px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0"
                                href="img/demos/auto-services/generic/generic-square-1.jpg">
                                <img class="img-fluid rounded-0"
                                    src="img/demos/auto-services/generic/generic-square-1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-6 col-md-3 px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0"
                                href="img/demos/auto-services/generic/generic-square-2.jpg">
                                <img class="img-fluid rounded-0"
                                    src="img/demos/auto-services/generic/generic-square-2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-6 col-md-3 px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0"
                                href="img/demos/auto-services/generic/generic-square-3.jpg">
                                <img class="img-fluid rounded-0"
                                    src="img/demos/auto-services/generic/generic-square-3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-6 col-md-3 px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0"
                                href="img/demos/auto-services/generic/generic-square-4.jpg">
                                <img class="img-fluid rounded-0"
                                    src="img/demos/auto-services/generic/generic-square-4.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->

<div class="container py-5 mb-5">
    <div class="row justify-content-center pb-3 mb-4">
        <div class="col-lg-9 col-xl-8 text-center">
            <div class="overflow-hidden">
                <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="250">Pertanyaan yang sering
                    ditanyakan</h2>
            </div>
            <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim"
                    data-appear-animation-delay="650">
            </div>
            <p class="font-weight-light text-3-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="500">Berikut beberapa
                pertanyaan yang mungkin atau biasanya sering ditanyakan terkait SatuData Wonosobo</p>
        </div>
    </div>
    <div class="row row-gutter-sm">
        <div class="col-md-8 col-lg-9 mb-5 mb-md-0">
            <svg class="custom-svg-2 overflow-visible" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 185 151">
                <g data-plugin-float-element
                    data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}">
                    <path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="850"
                        d="M34.81,102.81L5.18,73.18c-2.13-2.13-2.13-5.59,0-7.72l29.63-29.63c2.13-2.13,5.59-2.13,7.72,0l29.63,29.63
                                        c2.13,2.13,2.13,5.59,0,7.72l-29.63,29.63C40.4,104.94,36.94,104.94,34.81,102.81z" />
                </g>
                <g data-plugin-float-element
                    data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': true}">
                    <path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="1000" d="M92.49,35.35L80.4,23.26c-1.75-1.75-1.75-4.59,0-6.34L92.49,4.83c1.75-1.75,4.59-1.75,6.34,0l12.09,12.09
                                        c1.75,1.75,1.75,4.59,0,6.34L98.83,35.35C97.08,37.1,94.24,37.1,92.49,35.35z" />
                </g>
                <g data-plugin-float-element
                    data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 3000, 'isInsideSVG': true}">
                    <path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus"
                        data-appear-animation-delay="1150"
                        d="M129.88,148.41l-43.21-43.21c-2.13-2.13-2.13-5.59,0-7.72l43.21-43.21c2.13-2.13,5.59-2.13,7.72,0l43.21,43.21
                                        c2.13,2.13,2.13,5.59,0,7.72l-43.21,43.21C135.46,150.54,132.01,150.54,129.88,148.41z" />
                </g>
            </svg>
            <div class="accordion custom-accordion-style-1 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="750" id="accordion1">
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingOne">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1One" aria-expanded="false"
                                aria-controls="collapse1One">
                                1 - Apa itu SatuData Kabupaten Wonosobo?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">
                                SatuData Kabupaten Wonosobo adalah sebuah platform data yang menyediakan informasi
                                terkait Kabupaten Wonosobo, Jawa Tengah. Platform ini bertujuan untuk memberikan akses
                                mudah dan transparan terhadap data-data penting mengenai Kabupaten Wonosobo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingTwo">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Two" aria-expanded="false"
                                aria-controls="collapse1Two">
                                2 - Bagaimana cara mengakses SatuData Kabupaten Wonosobo?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">Anda dapat mengakses SatuData Kabupaten Wonosobo melalui website resminya di
                                https://satudata.wonosobo.go.id.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingThree">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Three" aria-expanded="false"
                                aria-controls="collapse1Three">
                                3 - Apa saja informasi yang dapat saya temukan di SatuData Kabupaten Wonosobo?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Three" class="collapse" aria-labelledby="collapse1HeadingThree"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">SatuData Kabupaten Wonosobo menyediakan berbagai informasi, seperti data
                                demografi, ekonomi, pendidikan, kesehatan, dan sektor lainnya. Anda dapat menemukan
                                statistik dan visualisasi data yang relevan dengan Kabupaten Wonosobo.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingFour">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Four" aria-expanded="false"
                                aria-controls="collapse1Four">
                                4 - Bagaimana cara mencari data tertentu di SatuData Kabupaten Wonosobo?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Four" class="collapse" aria-labelledby="collapse1HeadingFour"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">Anda dapat menggunakan fitur pencarian yang terdapat di situs web. Masukkan
                                kata kunci atau topik yang Anda cari, dan sistem akan menampilkan hasil yang sesuai.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingFive">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Five" aria-expanded="false"
                                aria-controls="collapse1Five">
                                5 - Apakah penggunaan SatuData Kabupaten Wonosobo gratis?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Five" class="collapse" aria-labelledby="collapse1HeadingFive"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">Ya, penggunaan SatuData Kabupaten Wonosobo adalah gratis untuk semua
                                pengguna. Platform ini dirancang untuk memberikan akses bebas kepada masyarakat umum dan
                                pemangku kepentingan.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default d-none" id="card-qne">
                    <div class="card-header" id="collapse1HeadingSix">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Six" aria-expanded="false"
                                aria-controls="collapse1Six">
                                6 - Bagaimana cara mendownload data dari SatuData Kabupaten Wonosobo?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Six" class="collapse" aria-labelledby="collapse1HeadingSix"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">SatuData Kabupaten Wonosobo menyediakan opsi untuk mengunduh data dalam
                                berbagai format. Pilih data yang Anda butuhkan, dan Anda akan menemukan opsi unduhan di
                                setiap halaman data.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default d-none" id="card-qne">
                    <div class="card-header" id="collapse1HeadingSeven">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Seven" aria-expanded="false"
                                aria-controls="collapse1Seven">
                                7 - Apakah SatuData Kabupaten Wonosobo memiliki aplikasi mobile?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Seven" class="collapse" aria-labelledby="collapse1HeadingSeven"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">Saat ini, SatuData Kabupaten Wonosobo belum memiliki aplikasi mobile resmi.
                                Namun, Anda dapat mengakses platform ini melalui browser di perangkat seluler Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default d-none" id="card-qne">
                    <div class="card-header" id="collapse1HeadingEight">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Eight" aria-expanded="false"
                                aria-controls="collapse1Eight">
                                8 - Bagaimana cara memberikan masukan atau pertanyaan terkait data di SatuData Kabupaten
                                Wonosobo?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Eight" class="collapse" aria-labelledby="collapse1HeadingEight"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">Untuk memberikan masukan atau pertanyaan, Anda dapat menghubungi tim
                                dukungan melalui formulir kontak yang tersedia di situs web atau melalui informasi
                                kontak yang tertera.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default d-none" id="card-qne">
                    <div class="card-header" id="collapse1HeadingNine">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Nine" aria-expanded="false"
                                aria-controls="collapse1Nine">
                                9 - Apa langkah-langkah keamanan yang diimplementasikan di SatuData Kabupaten Wonosobo?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Nine" class="collapse" aria-labelledby="collapse1HeadingNine"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">SatuData Kabupaten Wonosobo menjaga keamanan data pengguna dan mematuhi
                                standar keamanan yang tinggi. Semua transmisi data dilakukan melalui koneksi aman
                                (HTTPS).</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default d-none" id="card-qne">
                    <div class="card-header" id="collapse1HeadingTen">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-target="#collapse1Ten" aria-expanded="false"
                                aria-controls="collapse1Ten">
                                10 - Bagaimana saya dapat berkontribusi atau bermitra dengan SatuData Kabupaten
                                Wonosobo?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Ten" class="collapse" aria-labelledby="collapse1HeadingTen"
                        data-bs-parent="#accordion1">
                        <div class="card-body">
                            <p class="mb-0">Untuk informasi lebih lanjut tentang kontribusi atau kemitraan, silakan
                                hubungi tim SatuData Kabupaten Wonosobo melalui formulir kontak atau informasi yang
                                disediakan di situs web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 text-center text-md-start">
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                <h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 mb-3">Tampilkan Lebih
                </h3>
                <p class="pb-1 mb-2">Tampilkan Lebih banyak pertanyaan tentang satudata wonosono.</p>
                <button id="showAllBtn"
                    class="btn btn-primary custom-btn-border-radius font-weight-bold btn-px-5 py-3 mb-2">
                    Tampil Banyak
                </button>

                <hr class="my-4">
            </div>
            <div class="appeappear-animation=" fadeInUpShorter" data-appear-animation-delay="1100">
                <h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 pt-2 mb-3">
                    Ada Pertanyaan?
                </h3>
                <p class="pb-1 mb-2">Kirimkan pertanyaan anda melalui email kami.</p>
                <a href="mailto:diskominfo@wonosobokab.go.id"
                    class="btn btn-primary custom-btn-border-radius font-weight-bold btn-px-5 py-3">
                    Kontak Kami</a>
            </div>
        </div>
    </div>
</div>
<?= $this->section('javascript') ?>
<script>
var header = document.querySelector(".header-logo");
var navLink = document.querySelector(".header-nav-main");

// Misalkan Anda punya HTMLCollection dengan nama 'liCollection'
var liCollection = document.getElementById("header-nav-main").querySelectorAll("nav > ul > li > a");
const addNewColorClass = (element) => {
    element.classList.add("new-color");
};
const removeNewColorClass = (element) => {
    element.classList.remove("new-color");
};

const heroSection = document.querySelector('section.hero-section');
const heroObserver = new IntersectionObserver((entries) => {
    const [entry] = entries;
    if (entry.isIntersecting) {
        document.querySelector('.header-body').classList.add("header-top-orange");
        header.getElementsByTagName("img")[0].src = "<?= base_url('img/logos/logo-satu-data-wonosobo.png') ?>";
        // document.querySelector('.header-nav-top-icon').classList.add("new-color");


        // Gunakan perulangan untuk mengubah kelas pada setiap elemen <li>
        for (var i = 0; i < liCollection.length; i++) {
            // Tambahkan event listener untuk mouseenter (hover)
            liCollection[i].addEventListener("mouseenter", function() {
                // Hapus kelas 'new-color' saat dihover
                removeNewColorClass(this);
            });

            // Tambahkan event listener untuk mouseleave (keluar dari hover)
            liCollection[i].addEventListener("mouseleave", function() {
                // Tambahkan kelas 'new-color' saat dihover
                addNewColorClass(this);
            });

            // Misalkan kondisinya adalah tidak memiliki kelas 'header-nav-light-text'
            if (!liCollection[i].classList.contains("header-nav-light-text") && !liCollection[i].classList
                .contains("active")) {
                liCollection[i].classList.add("new-color"); // Tambah kelas 'new-color'
            }
        }

    } else {
        document.querySelector('.header-body').classList.remove("header-top-orange");
        header.getElementsByTagName("img")[0].src = "<?= base_url('img/logos/logo-satu-data-wonosobo.png') ?>";
        // document.querySelector('.header-nav-top-icon').classList.remove("new-color");

        // Gunakan perulangan untuk mengubah kelas pada setiap elemen <li>
        for (var i = 0; i < liCollection.length; i++) {
            // Misalkan kondisinya adalah tidak memiliki kelas 'header-nav-light-text'
            liCollection[i].classList.remove("new-color"); // Tambah kelas 'new-color'
            // Tambahkan event listener untuk mouseenter (hover)
            liCollection[i].addEventListener("mouseenter", function() {
                // Hapus kelas 'new-color' saat dihover
                removeNewColorClass(this);
            });

            // Tambahkan event listener untuk mouseleave (keluar dari hover)
            liCollection[i].addEventListener("mouseleave", function() {
                // Tambahkan kelas 'new-color' saat dihover
                removeNewColorClass(this);
            });
        }
    }
}, {
    threshold: 0.9
});
heroObserver.observe(heroSection);


//untuk Q&A
document.getElementById('showAllBtn').addEventListener('click', function() {
    // Menampilkan semua elemen dengan class 'card' yang semula tersembunyi
    var cards = document.querySelectorAll('#card-qne');
    var show
    for (var i = 0; i < cards.length; i++) {
        if (cards[i].classList.contains('d-none')) {
            cards[i].classList.remove('d-none');
            show = true;
        } else {
            cards[i].classList.add('d-none');
            show = false;
        }
    }

    // Mengganti textcontent
    this.textContent = show ? "Lebih Sedikit" : "Lebih Banyak";
});
</script>
<?= $this->endSection() ?>
<?= $this->endSection() ?>