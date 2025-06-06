<?= $this->extend('admin/dashboard') ?>

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
                <span class="breadcrumb-item"><i class=""></i>Berita</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="<?= base_url('/admin/addberita') ?>" class="btn btn-primary">
                    Tambah Berita <i class="icon-plus-circle2 ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header">
            <?php if (session()->getFlashdata('message')) { ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('message'); ?>
                </div>
            <?php } ?>
            <div class="col-12 row">
                <form action="<?= site_url('admin/berita') ?>" method="get" class="col-12 row">
                    <div class="search-set">
                        <div class="search-input">
                            <div class="dataTables_filter">
                                <label>
                                    <input type="search" name="search" class="form-control form-control-sm" placeholder="Search" value="<?= esc($search) ?>">
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="col-form-label col-md-1">Sort By</label>
                    <div class="col-md-2">
                        <div class="btn-group justify-content-center">
                            <a href="<?= site_url('admin/berita?search=' . esc($search) . '&sort=latest&limit=' . esc($limit)) ?>" class="btn alpha-indigo dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?= $sort === 'oldest' ? 'Oldest added' : 'Latest added' ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= site_url('admin/berita?search=' . esc($search) . '&sort=latest&limit=' . esc($limit)) ?>">Latest added</a>
                                <a class="dropdown-item" href="<?= site_url('admin/berita?search=' . esc($search) . '&sort=oldest&limit=' . esc($limit)) ?>">Oldest added</a>
                            </div>
                        </div>
                    </div>

                    <label class="col-form-label col-md-1">Show</label>
                    <div class="col-md-2">
                        <div class="btn-group justify-content-center">
                            <a href="<?= site_url('admin/berita?search=' . esc($search) . '&sort=' . esc($sort) . '&limit=10') ?>" class="btn alpha-indigo dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?= $limit ?> items
                            </a>
                            <div class="dropdown-menu" x-placement="bottom-start">
                                <a class="dropdown-item" href="<?= site_url('admin/berita?search=' . esc($search) . '&sort=' . esc($sort) . '&limit=10') ?>">10 items</a>
                                <a class="dropdown-item" href="<?= site_url('admin/berita?search=' . esc($search) . '&sort=' . esc($sort) . '&limit=30') ?>">30 items</a>
                                <a class="dropdown-item" href="<?= site_url('admin/berita?search=' . esc($search) . '&sort=' . esc($sort) . '&limit=50') ?>">50 items</a>
                                <a class="dropdown-item" href="<?= site_url('admin/berita?search=' . esc($search) . '&sort=' . esc($sort) . '&limit=100') ?>">100 items</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="datatable-scroll">
            <table class="table datatable-basic">
                <thead>
                    <tr role="row">
                        <th>#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Gambar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php if (!empty($berita) && is_array($berita)) { ?>
                        <?php foreach ($berita as $row) { ?>
                            <tr>
                                <td> <?php echo $no++; ?></td>
                                <td> <?php echo $row['judul']; ?></td>
                                <td> <?php
                                        // Truncate the 'isi' field to 25 characters
                                        $isi = $row['isi'];
                                        $maxLength = 25;
                                        if (strlen($isi) > $maxLength) {
                                            $isi = substr($isi, 0, $maxLength) . '...';
                                        }
                                        echo $isi;
                                        ?></td>
                                <td>
                                    <img src="<?php echo base_url('uploads/berita/' . $row['image']); ?>" alt="Berita Image" style="width: 100px; height: auto;">
                                </td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="<?= base_url('/admin/editberita/' . $row['id']) ?>" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                <a href="#" class="dropdown-item" onclick="confirmDelete(<?= $row['id'] ?>)"><i class="icon-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td></td>
                            <td class='text-center'>Tidak Ada Berita</td>
                            <td></td>
                            <td></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
            <?= $pager->links(); ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
    })

    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to the delete URL
                window.location.href = `<?= base_url('admin/deleteberita') ?>/${id}`;
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>
<?= $this->endSection() ?>