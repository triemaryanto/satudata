<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container p-3 mb-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 col-lg-4 text-center mb-2">
            <img class="md-padding-30px-right" src="<?= base_url('public/img/icons/standar-pelayanan.png') ?>" alt="" style="height: auto; width:80%" />

        </div>
        <div class="col-10 col-lg-6 text-left">
            <h1 class="title-font alt-font font-weight-500 mt-100">Open Data | Organisasi</h1>
            <p class="lh-13">
                Selamat datang di sistem Open Data Kabupaten Wonosobo, untuk menuju Wonosobo Smart City dan mendukung
                keterbukaan data dan informasi di Kabupaten Wonosobo
            </p>
            <p class="fw-medium mt-0 text-success mb-3">Jumlah Organisasi</p>
            <p class="font-weight-500 mt-0 text-success" style="font-size: 50px;" id="tot_data"><?= $total ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h5 class="fw-bolder text-light-emphasis">List Organisasi</h5>
        </div>
        <hr>
        <!-- <div class="row" id="list_all">
            <div class="col-md-4">
                <div class="services-item wow fadeInRight animated p-3" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                    <div class="icon">
                        <img src="" alt="" class="logo-organisasi">
                    </div>
                    <div class="services-content">
                        <h3><a href=""></a></h3>
                    </div>
                    <span class="badge badge-primary">Dataset</span>
                </div>
            </div>
        </div> -->
    </div>
    <section id="gallery" class="gallery-section gallery-style-4 bg-white">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
                    <div class="section-title text-center mb-60">
                        <h3 class="mb-15 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Recent Works</h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <?php foreach ($data as $key => $val) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="image">
                                <img src="<?= $val['image_display_url'] ?>" alt="">
                                <div class="overlay">
                                    <div class="action">
                                        <a href="<?= base_url('opendata/detail_organisasi/') . $val['name'] ?>"> <i class="lni lni-link"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <h5><?= $val['title'] ?></h5>
                                <p> <?= $val['package_count'] ?> Dataset</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <div class="row align-items-center justify-content-md-between mt-4">
        <div class="col-md-auto mb-3 mb-md-0">
            <p class="mb-0">Showing <?= $row_form ?>-<?= $row_to ?> of <?= $total ?></p>
        </div>
        <div class="col-md-auto">
            <?= $pager_links ?>
        </div>
    </div>
</div>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>

<?= $this->endSection() ?>