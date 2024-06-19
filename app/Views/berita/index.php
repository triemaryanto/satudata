<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container">
    <div class="border-top border-bottom py-4 mb-5 mt-4">
        <div class="row align-items-center">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-5 mb-md-0 text-center">
                <span class="fs-2 fw-bold text-primary-emphasis">Berita Seputar Wonosobo</span>
            </div>

            <div class="col-md-2">
                <div class="d-flex justify-content-md-end align-items-center">

                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://www.facebook.com/sharer/sharer.php?u=https://diskominfo.wonosobokab.go.id/detail/lembaga-kemasyarakatan-berperan-aktif-bagi-kehidupan-masyarakat" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://twitter.com/intent/tweet?url=https://diskominfo.wonosobokab.go.id/detail/lembaga-kemasyarakatan-berperan-aktif-bagi-kehidupan-masyarakat" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://api.whatsapp.com/send?text=https://diskominfo.wonosobokab.go.id/detail/lembaga-kemasyarakatan-berperan-aktif-bagi-kehidupan-masyarakat" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://diskominfo.wonosobokab.go.id/detail/lembaga-kemasyarakatan-berperan-aktif-bagi-kehidupan-masyarakat" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <?php foreach ($carousel_berita as $key => $val) : ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $key ?>" class="<?php if ($key == 0) : echo 'active' ?> <?php endif ?>" aria-current="true" aria-label="Slide <?= $key + 1 ?>"></button>
                    <?php endforeach ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($carousel_berita as $key => $val) : ?>
                        <div class="carousel-item <?php if ($key == 0) : echo 'active' ?> <?php endif ?>">
                            <article>
                                <a class="flex-row flex-wrap card align-items-start h-380rem gradient-x-overlay-sm-dark js-slide bg-img-hero rounded-lg-pseudo transition-3d-hover mb-7" href="berita/<?= $val['slug'] ?>" style="background-image: url(https://diskominfo.wonosobokab.go.id/<?= $val['gambar_muka']['path'] ?><?= $val['gambar_muka']['file_name'] ?>); height:550px; background-size: cover; background-position: center center;" tabindex="0">
                                    <div class="bg-transparent border-0 card-header w-100">
                                        <div class="media align-items-center">
                                            <span class="mr-3 avatar avatar-sm avatar-circle">
                                                <img class="avatar-img " src="https://diskominfo.wonosobokab.go.id/uploads/kominfo.png" alt="<?= $val['judul_posting'] ?>" data-uw-rm-alt-original="<?= $val['judul_posting'] ?>">
                                            </span>
                                            <div class="media-body">
                                                <span class="text-white d-inline-block font-weight-bold small">Admin</span>
                                                <small class="text-white d-block"><span class="badge bg-dark"><?= $val['publish_at'] ?></span></small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="text-white" style="font-size: 23px;"><?= $val['judul_posting'] ?></h3>
                                <p class="mb-0 text-white"><?= $val['keterangan'] ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


    <!-- LIST BERITA -->
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($list_berita as $key => $val) : ?>
                <article class="row mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                    <div class="col-md-5 custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <a href="https://diskominfo.wonosobokab.go.id/detail/<?= $val['slug'] ?>" target="_blank">
                            <img class="card-img hvr-wobble-vertical " src="https://diskominfo.wonosobokab.go.id/<?= $val['gambar_muka']['path'] ?><?= $val['gambar_muka']['file_name'] ?>" alt="<?= $val['kata_kunci'] ?>" style="min-height: 350px;">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="px-0 card-body d-flex flex-column h-100">
                            <span class="mb-2 d-block">
                                <a class="font-weight-bold hvr-underline-from-left" href="https://diskominfo.wonosobokab.go.id/kategori/seputar-wonosobo" target="_blank">Seputar Wonosobo</a>
                            </span>
                            <h3 style="font-size: 20px;">
                                <a class="text-inherit hvr-underline-from-left" href="https://diskominfo.wonosobokab.go.id/detail/<?= $val['slug'] ?>" target="_blank"><?= $val['judul_posting'] ?></a>
                            </h3>
                            <p><?= $val['keterangan'] ?></p>
                            <div class="mt-auto d-flex align-items-center">
                                <a class="mt-2 avatar avatar-sm avatar-circle ">
                                    <img class="avatar-img" src="https://diskominfo.wonosobokab.go.id/uploads/kominfo.png" alt="Admin" style="max-width: 80%; height: 80%;" data-uw-rm-alt-original="Admin">
                                </a>
                                <div class="media-body">
                                    <span class="text-dark">
                                        <a class="d-inline-block text-inherit font-weight-bold small" href="https://diskominfo.wonosobokab.go.id/uploadby/ADMIN" target="_blank">Admin</a>
                                    </span>
                                    <!-- isoFormat('dddd, D MMMM Y H') -->
                                    <small class="d-block small"><?= $val['publish_at'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach ?>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row align-items-center justify-content-md-between mt-4">
        <div class="col-md-auto mb-3 mb-md-0">
            <p class="mb-0">Showing <?= $row_form ?>-<?= $row_to ?> of <?= $total ?></p>
        </div>
        <div class="col-md-auto">
            <?= $pager_links ?>
        </div>
    </div>
</div>


<?= $this->endSection() ?>