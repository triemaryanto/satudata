<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container p-3 mb-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 col-lg-4 text-center mb-2">
            <img class="md-padding-30px-right" src="<?= base_url('public/img/icons/standar-pelayanan.png') ?>" alt="" style="height: auto; width:80%" />

        </div>
        <div class="col-10 col-lg-6 text-left">
            <h1 class="title-font alt-font font-weight-500 mt-100">Open Data | Detail Group</h1>
            <p class="lh-13">
                Selamat datang di sistem Open Data Kabupaten Wonosobo, untuk menuju Wonosobo Smart City dan mendukung
                keterbukaan data dan informasi di Kabupaten Wonosobo
            </p>
        </div>
    </div>
    <div class="row pt-5">


        <div class="row" id="list_all">
            <?php foreach ($data as $key => $val) : ?>
                <div class="col-md-12">
                    <div class="services-item wow fadeInRight animated p-3" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                        <div class="d-flex">
                            <div style="background-image: url('https://data.wonosobokab.go.id/uploads/group/2017-11-29-025552.549508organisasi.jpg')" class="logo-detail-organisasi mr-4">
                            </div>
                            <div style="width:100%; padding-left:12px">
                                <a href="<?= base_url('opendata/detail_dataset/' . $val['name']) ?>" class="fs-6 fw-bolder link_hover" style="color:#2f3542;" rel="noopener noreferrer">
                                    <?= $val['title'] ?>
                                </a>
                                <p class="mb-0 text-truncate" style="max-width: 985px;"><?= $val['notes'] ?></p>
                                <div>
                                    <span class="me-2 text-success"><i class="fas fa-building mr-1"></i> <?= $val['organization']['title'] ?></span>
                                    <span class="me-2"><i class="far fa-calendar-alt mr-1"></i> <?= $val['metadata_modified'] ?></span>
                                    <span class="fw-600"><i class="fas fa-database mr-1"></i>Resources : <?= $val['num_resources'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>

<?= $this->endSection() ?>