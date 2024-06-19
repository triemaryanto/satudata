<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="sektoral position-relative border-0 overflow-hidden m-0 p-0 bg-primary-subtle">
    <div class="container position-relative py-sm-3 my-3">
        <div class="row p-relative z-index-1">
            <div class="col-md-8 px-5">
                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-bold text-color-grey text-4-5 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">
                        Data Wonosobo di depan anda
                    </h2>
                </div>
                <h1 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Mencari data
                    tentang <span style="color: #f05d0e;">Wonosobo</span> kini bisa dilakukan dari mana saja, kapan saja, siapa saja</h1>

                <div class="sc-hBEYId bwvDcg appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">

                    <form action="<?php echo base_url('sektoral') ?>" method="GET">
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $q ?>" placeholder="kata kunci pencarian" required="" minlength="3" name="q" id="searcing">
                            <button type="submit" class="btn btn-primary" id="inputGroup-sizing-default"><i class="uil uil-search"></i> &nbsp; Telusuri</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <img class="sc-hHfuMS vWFNI animated kenBurnsToRight" style="animation-delay: 600ms;" src="<?= base_url('public/img/icons/icon-home-v2.png') ?>" width="100%" height="100%">
            </div>
        </div>
    </div>
</section>
<hr>
<div class="container p-3 mb-5">
    <h4><?= $total ?> Hasil Pencarian dengan Kata Kunci <span class="text-danger font-weight-bold">"<?= $q ?>" </span></h4>
    <?php foreach ($data as $key => $val) : ?>
        <div class="row">
            <div class="col-12 pt-5">
                <div class="card bg-body-tertiary shadow" style="width: 100%;">
                    <div class="card-body">
                        <h4 class="card-title"><?= $val['indikator'] ?></h4>
                        <h6 class="card-subtitle mb-2 text-body-secondary badge text-bg-info"><?= $val['nama_skpd'] ?></h6>

                        <div class="row">
                            <div class="col-2 fw-bold">
                                <p class="mb-0">Jenis Data</p>
                            </div>
                            <div class="col fw-semibold">
                                <p class="mb-0">: RPJMD</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 fw-bold">
                                <p class="mb-0">Tahun</p>
                            </div>
                            <div class="col fw-semibold">
                                <p class="mb-0">: <?= $val['tahun'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 fw-bold">
                                <p class="mb-0">Nilai</p>
                            </div>
                            <div class="col fw-semibold">
                                <p class="mb-0">: <?= $val['nilai'] . ' ' . $val['satuan'] ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2 fw-bold">
                                <p class="mb-0">Rumus</p>
                            </div>
                            <div class="col fw-semibold">
                                <p class="mb-0">: <?= $val['rumus_nama'] ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2 fw-bold">
                                <p class="mb-0">Data Dukung</p>
                            </div>
                            <div class="col fw-semibold">
                                <?php foreach ($val['dd_nama'] as $key => $val2) :
                                    if ($key == 0) : ?>
                                        <p class="mb-0">: - <?= $val2 ?></p>
                                    <?php else : ?>
                                        <div>
                                            <p class="mb-0"> &nbsp;- <?= $val2 ?></p>
                                        </div>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?= $this->section('javascript') ?>
<script>
    const heroSection = document.querySelector('section.sektoral');
    const heroObserver = new IntersectionObserver((entries) => {
        const [entry] = entries;
        if (entry.isIntersecting) {
            document.querySelector('.header-body').classList.add("bg-primary-subtle");
        } else {
            document.querySelector('.header-body').classList.remove("bg-primary-subtle");
        }
    }, {
        threshold: 0.9
    });
    heroObserver.observe(heroSection);
</script>
<?= $this->endSection() ?>

<?= $this->endSection() ?>