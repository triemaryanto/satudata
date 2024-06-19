<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<style>
    .avatar {
        position: relative;
        display: inline-block;
        width: 4.125rem;
        height: 3.125rem;
        border-radius: 0.3125rem;
    }

    .avatar-circle {
        border-radius: 50%;
    }

    .avatar-img {
        max-width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 0.3125rem;
    }
</style>

<div class="container space-2 space-lg-2">
    <div class="row justify-content-lg-between">
        <div class="col-lg-8 mt-2">
            <div class="border-top border-bottom py-4 mb-5 mt-4">
                <div class="row align-items-md-center">
                    <div class="col-md-7 mb-5 mb-md-0">
                        <div class="d-flex justify-content-left align-items-center">
                            <div class="avatar avatar-circle">
                                <img class="avatar-img" src="https://diskominfo.wonosobokab.go.id/uploads/kominfo.png" alt="Penandatanganan NPHD, Dukung Terwujudnya Pilkada 2024 Berkualitas di Kabupaten Wonosobo" data-uw-rm-alt-original="Penandatanganan NPHD, Dukung Terwujudnya Pilkada 2024 Berkualitas di Kabupaten Wonosobo">
                            </div>
                            <div class="ms-3 font-size-1">
                                <a href="/uploadby/ADMIN" class="d-inline-block text-inherit font-weight-bold">
                                    Admin
                                </a>
                                <span class="d-block text-muted"><?= $berita['updated_at'] ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="d-flex justify-content-md-end align-items-center">
                            <span class="d-block small font-weight-bold text-cap mr-2">
                                <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </span>
                            <span class="d-block small font-weight-bold text-cap me-1"><?= $berita['views'] ?></span>
                            <span class="d-block small font-weight-bold text-cap me-2">views</span>
                            <span class="d-block small font-weight-bold text-cap me-2">|</span>
                            <span class="d-block small font-weight-bold text-cap me-2">Share:</span>

                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://www.facebook.com/sharer/sharer.php?u=https://diskominfo.wonosobokab.go.id/detail/penandatanganan-nphd-dukung-terwujudnya-pilkada-2024-berkualitas-di-kabupaten-wonosobo" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://twitter.com/intent/tweet?url=https://diskominfo.wonosobokab.go.id/detail/penandatanganan-nphd-dukung-terwujudnya-pilkada-2024-berkualitas-di-kabupaten-wonosobo" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://api.whatsapp.com/send?text=https://diskominfo.wonosobokab.go.id/detail/penandatanganan-nphd-dukung-terwujudnya-pilkada-2024-berkualitas-di-kabupaten-wonosobo" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://diskominfo.wonosobokab.go.id/detail/penandatanganan-nphd-dukung-terwujudnya-pilkada-2024-berkualitas-di-kabupaten-wonosobo" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>