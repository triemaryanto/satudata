<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container p-3 mb-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 col-lg-4 text-center mb-2">
            <img class="md-padding-30px-right" src="<?= base_url('public/img/icons/dataset.png') ?>" alt="" style="height: auto; width:80%" />

        </div>
        <div class="col-10 col-lg-6 text-left">
            <h1 class="title-font alt-font font-weight-500 mt-100">Open Data | Detail Dataset</h1>
            <p class="lh-13">
                Selamat datang di sistem Open Data Kabupaten Wonosobo, untuk menuju Wonosobo Smart City dan mendukung
                keterbukaan data dan informasi di Kabupaten Wonosobo
            </p>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-lg-12">
            <h2 class="fw-semibold text-light-emphasis text-capitalize mb-2"> <?= $dataset['title'] ?> </h2>
            <h5 class="fw-medium text-body-emphasis"><?= $dataset['organization']['title'] ?></h5>
        </div>
        <hr>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-7">
                    <b style="font-size: 18px; color: #1d387c">Deskripsi Dataset</b>
                    <div class="mt-3 mb-3" id="ket" style="min-height: 200px;">
                        <p id="set_keterangan" class="mb-0"><?= $dataset['notes'] ?></p>
                    </div>
                    <span id="set_group">
                        <?php foreach ($dataset['groups'] as $key => $val) : ?>
                            <span class="badge text-bg-info pointer">$val</span>
                        <?php endforeach ?>
                    </span>
                    <span id="set_keyword">
                        <?php foreach ($dataset['tags'] as $key => $val) : ?>
                            <span class="badge text-bg-info">#<?= $val['display_name'] ?></span>
                        <?php endforeach ?>
                    </span>
                </div>
                <div class="col-5">
                    <b style="font-size: 18px; color: #1d387c">Metadata</b>
                    <table class="mt-3" id="tb-meta">
                        <tbody>
                            <tr>
                                <th style="width: 40%;"><span class="fs-6 fw-medium">Dataset Diperbaharui</span></th>
                                <td style="width: 5%;"></td>
                                <td id="set_waktu">27 September 2023 Pukul 07:00</td>
                            </tr>
                            <tr>
                                <th><span class="fs-6 fw-medium"> Dibuat</span></th>
                                <td style="width: 5%;"></td>
                                <td id="set_waktu2">27 September 2023 Pukul 09:20</td>
                            </tr>
                            <tr>
                                <th><span class="fs-6 fw-medium">Type</span></th>
                                <td style="width: 5%;"></td>
                                <td id="set_frek"><?= $dataset['type'] ?></td>
                            </tr>
                        </tbody>

                        <tr>
                            <th><span class="fs-6 fw-medium">Sumber data</span></th>
                            <td style="width: 5%;"></td>
                            <td><?= $dataset['organization']['title'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-3 mt-3"><b style="font-size: 18px; color: #1d387c">Data and Resources</b></div>
        <div id="list_resource">
            <div class="row">
                <?php foreach ($dataset['resources'] as $key => $val) : ?>
                    <div class="col-10">
                        <span class="h4 mb-0 judul" style="color:#2f3542;"><?= $val['name'] ?></span>
                        <p class="mb-0"><span class="badge text-bg-warning"><?= $val['format'] ?></span> <?= $val['description'] ?></p>
                        <i class="fa fa-download"></i> 0 kali
                    </div>
                    <div class="col-2 text-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-view-file" data-url="<?= $val['url'] ?>" data-title="<?= $val['name'] ?>">
                            <i class="fas fa-eye me-1"></i> Lihat File
                        </button>
                        <button type="button" class="btn btn-success mt-2" onclick="modal_download();" id="btn-download-dataset" data-url="<?= $val['url'] ?>">
                            <i class="fas fa-download me-1"></i> Download File
                        </button>
                    </div>
                <?php endforeach ?>

            </div>
            <hr>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-view-file" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="iframe_data" style="width: 100%;">
                    <iframe id="modalIframe" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-download-file" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Satudata Wonosobo Download File</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('opendata/download/' . $tag) ?>" method="post" class="needs-validation">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="nama">
                        <div class="invalid-feedback"> </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="alamat">
                        <div class="invalid-feedback"> </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kontak/Hp</label>
                        <input type="text" class="form-control" name="kontak" placeholder="08123456789">
                        <div class="invalid-feedback"> </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dari</label>
                        <select class="form-select" name="dari" aria-label="Default select example">
                            <option selected value="">Pilih</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="organisasi">Organisasi</option>
                            <option value="pelajar">Pelajar</option>
                            <option value="perusahaan">Perusahaan</option>
                            <option value="dunia usaha">Dunia Usaha</option>
                            <option value="umum">Umum</option>
                        </select>
                        <div class="invalid-feedback"> </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan Dari</label>
                        <input type="text" class="form-control" name="keterangan" placeholder="">
                        <div class="invalid-feedback"> </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keperluan</label>
                        <input type="text" class="form-control" name="keperluan" placeholder="">
                        <div class="invalid-feedback"> </div>

                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?= $this->section('javascript') ?>
<script>
    // Menangkap peristiwa yang terjadi setelah modal terbuka
    document.getElementById('modal-view-file').addEventListener('shown.bs.modal', function(event) {
        // Mendapatkan tombol yang membuka modal
        var button = event.relatedTarget;

        // Mendapatkan data atau URL dari atribut data
        var url = button.getAttribute('data-url');
        var title = button.getAttribute('data-title');

        // Mengubah atribut src pada elemen iframe dengan URL yang diterima
        document.getElementById('modalIframe').src = 'https://docs.google.com/viewerng/viewer?url=' + url + '&embedded=true';
        document.getElementById('exampleModalLabel').textContent = title;
    })
</script>
<?= $this->endSection() ?>

<?= $this->endSection() ?>