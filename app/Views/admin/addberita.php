<?= $this->extend('admin/dashboard') ?>
<?= $this->section('extra-css') ?>
<link rel="stylesheet" href="<?= base_url('custom/css/style2.css') ?> ">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Berita</span> -
                Manajemen Berita</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="d-flex justify-content-center">

            </div>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?= base_url('/admin/dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                    Home</a>
                <a href="<?= base_url('/admin/berita') ?>" class="breadcrumb-item"><i class=""></i>Berita</a>
                <span class="breadcrumb-item"><i class=""></i><?= isset($berita['id']) ? 'Edit Berita' : 'Tambah Berita' ?></span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

    </div>
</div>
<div class="card">
    <div class="card-body">

        <?php if (session()->getFlashdata('errors')) { ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('errors') as $field => $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach ?>
            </div>

        <?php } ?>
        <form action="<?= base_url((isset($berita['id']) ? 'admin/updateberita/' . $berita['id'] : 'admin/saveberita/')) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <fieldset class="mb-3">
                <legend class="text-uppercase font-size-sm font-weight-bold">
                    <?= isset($berita['id']) ? 'Edit Berita' : 'Tambah Berita' ?>
                </legend>
            </fieldset>
            <div class="mb-3 row">
                <label class="col-form-label col-lg-2">Judul Berita</label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" value="<?= esc($berita['judul'] ?? '') ?>" required>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-form-label col-lg-2">Isi Berita</label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <textarea type="text" class="form-control h-100 " rows="5" name="isi" id="isi" required><?= esc($berita['isi'] ?? '') ?></textarea>
                    </div>
                </div>
            </div>
            <div class="mb-2 row">
                <label class="col-form-label col-md-2">image</label>
                <div class="col-md-10">
                    <div class="new-employee-field">
                        <div class="input-blocks mb-0">
                            <div class="image-upload mb-0">
                                <input type="file" name="image" id="image" accept="image/png, image/gif, image/jpeg">

                            </div>
                        </div>
                        <div class="profile-pic-upload edit-pic">
                            <div class="profile-pic">
                                <div id="loading" style="display: none;">
                                    <div class="text-center">
                                        <div class="spinner-border" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <span id="preview" class="image-preview">
                                    <?php if (!empty($berita['image'])) : ?>
                                        <img src="<?php echo base_url('uploads/berita/' . $berita['image']); ?>" alt="User Image" id="userImage">
                                    <?php else : ?>
                                        <img src="<?php echo base_url('limitless/global_assets/images/placeholders/placeholder.jpg'); ?>" alt="User Image" id="userImage">
                                    <?php endif; ?>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="<?= base_url('/admin/berita') ?>" class="btn btn-danger">Cancel</a>
                    </li>
                </ul>

                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <button type="submit" class="btn btn-primary text-right">Save changes</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra-js') ?>
<script>
    $(document).ready(function() {
        $('#image').on('change', function() {
            $('#loading').show();
            $('#preview').hide();

            var reader = new FileReader();
            reader.onload = function(e) {
                $('#userImage').attr('src', e.target.result);
                $('#loading').hide();
                $('#preview').show();
            };
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
<?= $this->endSection() ?>