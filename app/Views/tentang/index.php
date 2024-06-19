<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="sec-padding mb-5">
    <div class="container p-3">
        <div class="row align-items-center justify-content-center">
            <div class="col-10 col-lg-4 text-center mb-2 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="60">
                <img class="md-padding-30px-right" src="<?= $image ?>" alt="" style="height: auto; width:80%" />
            </div>
            <div class="col-10 col-lg-8 text-start appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="60">
                <div class="top-line-custom"></div>
                <h1 class="title-font alt-font font-weight-500 mt-100"><?= $title ?></h1>
                <p class="lh-13 text-justify"><?= $description ?></p>
            </div>
        </div>
    </div>
</section>

<?= $this->section('javascript') ?>

<?= $this->endSection() ?>

<?= $this->endSection() ?>