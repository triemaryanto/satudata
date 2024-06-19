<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container p-3 mb-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 col-lg-4 text-center mb-2">
            <img class="md-padding-30px-right" src="<?= base_url('public/img/icons/standar-pelayanan.png') ?>" alt="" style="height: auto; width:80%" />

        </div>
        <div class="col-10 col-lg-6 text-left">
            <h1 class="title-font alt-font font-weight-500 mt-100">Open Data | Group</h1>
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
            <h5 class="fw-bolder text-light-emphasis">List Group</h5>
        </div>
        <hr>
    </div>
    <section id="gallery" class="gallery-section gallery-style-4 bg-white">
        <div class="container">

            <div class="row">
                <?php foreach ($data as $key => $val) : ?>
                    <div class="col-lg-4 col-md-6">
                        <a href="<?= base_url('opendata/detail_group/') . $val['name'] ?>">
                            <div class="services-item wow fadeInRight animated p-3" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="icon">
                                    <img src="<?= $val['image_display_url'] ?>" alt="" class="logo-organisasi">
                                </div>
                                <div class="services-content text-center">
                                    <span class="badge badge-primary"><?= $val['package_count'] ?> Dataset</span>
                                    <h3><a href="<?= base_url('opendata/detail_group/') . $val['name'] ?>"><?= $val['title'] ?></a></h3>
                                </div>
                            </div>
                        </a>
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