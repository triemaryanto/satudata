<?= $this->extend('admin/dashboard') ?>

<?= $this->section('content') ?>
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Publikasi</span> -
                Manajemen Publikasi</h4>
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
                <span class="breadcrumb-item"><i class=""></i>Publikasi</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <button type="button" class="btn btn-primary" wire:click="add">
                    Tambah Publikasi<i class="icon-plus-circle2 ml-2"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <div class="card-header">
            <div class="col-12 row">
                <div class="search-set">
                    <div class="search-input">
                        <div class="dataTables_filter"><label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label></div>
                    </div>
                </div>
                <label class="col-form-label col-md-1">Sort By</label>
                <div class="col-md-2">
                    <div class="btn-group justify-content-center">
                        <a href="#" class="btn alpha-indigo dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Latest added
                        </a>

                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(163px, 36px, 0px);">
                            <a class="dropdown-item" href="#">Latest
                                added</a>
                            <a class="dropdown-item" href="#">Oldest
                                added</a>
                        </div>
                    </div>
                </div>
                <label class="col-form-label col-md-1">Show</label>
                <div class="col-md-2">
                    <div class="btn-group justify-content-center">
                        <a href="#" class="btn alpha-indigo dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            10
                            items
                        </a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(163px, 36px, 0px);">
                            <a class="dropdown-item" href="#">30
                                items</a>
                            <a class="dropdown-item" href="#">50
                                items</a>
                            <a class="dropdown-item" href="#">100
                                items</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="datatable-scroll">
            <table class="table datatable-basic">
                <thead>
                    <tr role="row">
                        <th>#</th>
                        <th>Nomor Katalog</th>
                        <th>Nomor Publikasi</th>
                        <th>ISSN / ISBN</th>
                        <th>Judul</th>
                        <th>Cover</th>
                        <th>Deskripsi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>