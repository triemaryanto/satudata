<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SatuData - Wonosobo</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Satudata - Wonosobo">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://diskominfo.wonosobokab.go.id/front/assets/images/pemda.ico">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?> " type="text/css">
    <link rel="stylesheet" href="<?= base_url('fontawesome-free/css/all.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('animate/animate.compat.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('animate/animate.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('simple-line-icons/css/simple-line-icons.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('owl.carousel/assets/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('owl.carousel/assets/owl.theme.default.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('magnific-popup/magnific-popup.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap-star-rating/css/star-rating.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap-star-rating/themes/krajee-fas/theme.min.css') ?>"
        type="text/css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url('css/theme.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/theme-elements.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/theme-blog.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/theme-shop.css') ?>" type="text/css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="<?= base_url('css/demos/demo-auto-services.css') ?>" type="text/css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="<?= base_url('css/skins/skin-auto-services.css') ?>" type="text/css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>" type="text/css">

    <!--  DataTables -->
    <link rel="stylesheet" href="<?= base_url('datatables/datatables.min.css') ?>" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('select2/css/select2.min.css') ?>" type="text/css" />

    <!-- jquery -->
    <script src="<?= base_url('jquery/jquery.min.js') ?>"></script>
</head>

<body>

    <div class="body">
        <div class="notice-top-bar bg-primary" data-sticky-start-at="100">
            <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
                <span class="close">
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
        <header id="header"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
            <div class="header-body  box-shadow-none border-top-0">
                <!-- header-body-bottom-border-fixed -->
                <!-- Header -->
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column w-100">
                            <div class="header-row justify-content-between">
                                <div class="header-logo z-index-2 col-lg-2 px-0">
                                    <a href="<?= base_url() ?>">
                                        <img alt="" width="200" height="68" data-sticky-width="82"
                                            data-sticky-height="40" data-sticky-top="84"
                                            src="<?php echo base_url('img/logos/logo-satu-data-wonosobo.png') ?>">
                                    </a>
                                </div>
                                <div class="header-nav header-nav-links justify-content-end pe-lg-4 me-lg-3">
                                    <div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1"
                                        id="header-nav-main">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills " id="mainNav">
                                                <li><a href="<?= base_url('/') ?>"
                                                        class="nav-link fw-bold <?= ($activePage === ACTIVE_PAGE_HOME) ? 'active' : '' ?>">Beranda</a>
                                                </li>

                                                <li class="dropdown">
                                                    <a href="#"
                                                        class="nav-link dropdown-toggle fw-bold  <?= ($activePage === ACTIVE_PAGE_DATA) ? 'active' : '' ?>">Data</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="<?= base_url('rpjmd') ?>"
                                                                class="dropdown-item">RPJMD
                                                            </a>
                                                        </li>
                                                        <li><a href="<?= base_url('sdgs') ?>"
                                                                class="dropdown-item">SDG's</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url('lppd') ?>" class="dropdown-item">LPPD
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url('spm') ?>" class="dropdown-item">SPM
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url('makro') ?>"
                                                                class="dropdown-item">Makro</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="http://wonosobokab.ina-sdi.or.id/" target="_blank"
                                                        class="nav-link fw-bold">Peta Spasial
                                                    </a>
                                                </li>
                                                <!-- <li class="dropdown">
                                                    <a href="#" class="nav-link dropdown-toggle fw-bold">Integrasi</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="https://website.wonosobokab.go.id/" target="_blank" class="dropdown-item">Pemkab Wonosobo
                                                            </a>
                                                        </li>
                                                        <li><a href="https://diskominfo.wonosobokab.go.id/" target="_blank" class="dropdown-item">Kominfo Wonosobo</a>
                                                        </li>
                                                        <li><a href="https://datadesa.wonosobokab.go.id/" target="_blank" class="dropdown-item">Open Data Wonosobo
                                                            </a>
                                                        </li>
                                                        <li><a href="https://smartcity.wonosobokab.go.id/" target="_blank" class="dropdown-item">Smart City Wonosobo
                                                            </a>
                                                        </li>
                                                        <li><a href="https://satudata.wonosobokab.go.id/" target="_blank" class="dropdown-item">Satu Data Wonosobo
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li> -->
                                                <li class="dropdown">
                                                    <a href="#"
                                                        class="nav-link dropdown-toggle fw-bold <?= ($activePage === ACTIVE_PAGE_OPENDATA) ? 'active' : '' ?>">Open
                                                        Data</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="<?= base_url('opendata') ?>"
                                                                class="dropdown-item">Dataset
                                                            </a>
                                                        </li>
                                                        <li><a href="<?= base_url('opendata/organisasi') ?>"
                                                                class="dropdown-item">Organisasi</a>
                                                        </li>
                                                        <li><a href="<?= base_url('opendata/group') ?>"
                                                                class="dropdown-item">Group</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?= base_url('analisa') ?>"
                                                        class="nav-link fw-bold <?= ($activePage === ACTIVE_PAGE_ANALISA) ? 'active' : '' ?>">Analisa</a>
                                                </li>
                                                <li><a href="<?= base_url('tentang/') ?>"
                                                        class="nav-link fw-bold <?= ($activePage === ACTIVE_PAGE_TENTANG) ? 'active' : '' ?>">Tentang</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- <div class="d-flex col-auto pe-0 ps-0 ps-xl-1">
                                    <div class="header-nav-features ps-0 ms-1">
                                        <div class="header-nav-feature header-nav-features-search d-inline-flex position-relative top-3 border border-top-0 border-bottom-0 custom-remove-mobile-border-left px-4 me-2">
                                            <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search">
                                                <i class="icons icon-magnifier header-nav-top-icon text-5 font-weight-bold position-relative top-3"></i>
                                            </a>
                                            <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerTopSearchDropdown">
                                                <form role="search" action="page-search-results.html" method="get">
                                                    <div class="simple-search input-group">
                                                        <input class="form-control text-1 rounded" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                        <button class="btn" type="submit" aria-label="Search">
                                                            <i class="icons icon-magnifier header-nav-top-icon"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse"
                                    data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header -->
            </div>
        </header>

        <div role="main" class="main">


            <!-- content -->
            <?= $this->renderSection('content') ?>
            <!-- Javascript -->
            <?= $this->renderSection('javascript') ?>



        </div>

        <footer id="footer" class="border-0 mt-0">
            <hr class="bg-light opacity-2 my-0">
            <div class="container pb-5">
                <div class="row text-center text-md-start py-4 my-5">
                    <div
                        class="col-md-6 col-lg-3 align-self-center text-center text-md-start text-lg-center mb-5 mb-lg-0">
                        <a href="index.html" class="text-decoration-none">
                            <img src="<?php echo base_url('img/logos/logo-satu-data-wonosobo.png') ?>" class="img-fluid"
                                alt="" />
                        </a>
                        <br>
                        <!-- Histats.com  (div with counter) -->
                        <div id="histats_counter"></div>
                        <!-- Histats.com  START  (aync)-->
                        <script type="text/javascript">
                        var _Hasync = _Hasync || [];
                        _Hasync.push(['Histats.start', '1,4825410,4,604,110,55,00011000']);
                        _Hasync.push(['Histats.fasi', '1']);
                        _Hasync.push(['Histats.track_hits', '']);
                        (function() {
                            var hs = document.createElement('script');
                            hs.type = 'text/javascript';
                            hs.async = true;
                            hs.src = ('//s10.histats.com/js15_as.js');
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0])
                            .appendChild(hs);
                        })();
                        </script>
                        <!-- <noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4825410&101" alt="" class="border-0"> </a></noscript> -->
                        <!-- Histats.com  END  -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <h5 class="text-transform-nd text-color-light text-4-5 mb-4">Kontak Kami</h5>
                        <ul class="list list-unstyl">
                            <li class=" pb-1 mb-2">
                                <span class="d-block fontne-height-1 text-color-grey text-3-5">Alamat</span>

                                <a href="https://goo.gl/maps/RsvwzMW5eVoMygx69" target="_blank"
                                    class="text-color-light custom-text-underline-1 font-weight-medium text-3-5">
                                    Jalan Sabuk Alu No. 2A, Wonosobo Timur, Wonosobo
                                </a>

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3956.974287202423!2d109.9036709!3d-7.3567786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa1e023aaf2df%3A0x3fa1aea0b0ca3abc!2sDINAS%20KOMINFO!5e0!3m2!1sid!2sid!4v1656048898821!5m2!1sid!2sid"
                                    width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>


                            </li>
                            <li class="pb-1 mb-2">
                                <span class="d-block fontne-height-1 text-color-grey text-3-5 mb-1">PHONE</span>
                                <a href="tel:(0286) 325112"
                                    class="text-decoration-none text-color-light text-color-hover-default">
                                    (0286) 325112</a>
                            </li>
                            <li class="pb-1 mb-2">
                                <span
                                    class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span>
                                <a href="mailto:diskominfo@wonosobokab.go.id"
                                    class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default">diskominfo@wonosobokab.go.id</a>
                            </li>
                        </ul>
                        <ul class="social-icons social-icons-medium">
                            <li class="social-icons-instagram">
                                <a href="https://www.instagram.com/diskominfo_wonosobo/" class="no-footer-css"
                                    target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social-icons-twitter mx-2">
                                <a href="https://twitter.com/diskominfo_wsb" class="no-footer-css" target="_blank"
                                    title="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="social-icons-facebook">
                                <a href="https://www.facebook.com/diskominfowonosobo" class="no-footer-css"
                                    target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2 mb-5 mb-md-0 ms-2">
                        <h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Tentang Kami
                        </h5>
                        <ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
                            <li class="nav-item">
                                <a class="nav-link media" href="https://website.wonosobokab.go.id/" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-1"></span>
                                        <span class="media-body">
                                            Data
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="https://website.wonosobokab.go.id/" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-1"></span>
                                        <span class="media-body">
                                            Integrasi
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="https://website.wonosobokab.go.id/" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-1"></span>
                                        <span class="media-body">
                                            Open Data
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="https://website.wonosobokab.go.id/" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-1"></span>
                                        <span class="media-body">
                                            Publikasi
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2 ms-2">
                        <h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Link Terkait
                        </h5>
                        <ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
                            <li class="nav-item">
                                <a class="nav-link media" href="https://website.wonosobokab.go.id/" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-1"></span>
                                        <span class="media-body">
                                            Pemkab Wonosobo
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link media" href="https://datadesa.wonosobokab.go.id/" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-4"></span>
                                        <span class="media-body">
                                            Open Data Wonosobo
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="https://diskominfo.wonosobokab.go.id/" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-5"></span>
                                        <span class="media-body">
                                            Kominfo Wonosobo
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="https://data.go.id" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-5"></span>
                                        <span class="media-body">
                                            Satu Data Indonesia
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="https://wonosobokab.bps.go.id" target="_blank">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-seven-segment-5"></span>
                                        <span class="media-body">
                                            BPS Wonosobo
                                        </span>
                                    </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Modal Meta Data-->
    <div class="modal fade" id="modal-meta-data" tabindex="-1" data-bs-backdrop="static"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold">Meta Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="modal-content">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor -->
    <script src="<?= base_url('plugins/js/plugins.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap-star-rating/js/star-rating.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap-star-rating/themes/krajee-fas/theme.min.js') ?>"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?= base_url('js/theme.js') ?>"></script>

    <!-- Current Page Vendor and Views -->
    <script src="<?= base_url('js/views/view.contact.js') ?>"></script>
    <script src="<?= base_url('js/views/view.shop.js') ?>"></script>


    <!-- Demo -->
    <script src="<?= base_url('js/demos/demo-auto-services.js') ?>"></script>

    <!-- Theme Custom -->
    <script src="<?= base_url('js/custom.js') ?>"></script>

    <!-- Theme Initialization Files -->
    <script src="<?= base_url('js/theme.init.js') ?>"></script>

    <!-- Datatable -->
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/datatables.min.js"></script>

    <!-- Select2 -->
    <script src="<?= base_url('select2/js/select2.min.js') ?>"></script>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- custom form modal download file -->
    <script>
    function modal_download() {
        $('#modal-download-file').modal('show')
    }

    $(document).ready(function() {
        var modalDownloadFile = $('#modal-download-file');
        // Menambahkan event listener untuk peristiwa penyembunyian modal
        modalDownloadFile.on('hidden.bs.modal', function() {
            // Mengosongkan nilai formulir di dalam modal
            modalDownloadFile.find('form')[0].reset();
            // Menghapus kelas is-invalid dan invalid-feedback pada semua elemen
            modalDownloadFile.find('.is-invalid').removeClass('is-invalid');
            modalDownloadFile.find('.is-valid').removeClass('is-valid');
            modalDownloadFile.find('.valid').removeClass('valid');
            modalDownloadFile.find('.invalid-feedback').html('');
            // Membersihkan validasi dari formulir
            modalDownloadFile.find('form').removeClass('was-validated');

        });

        modalDownloadFile.find('form').submit(function(e) {
            e.preventDefault(); // Mencegah formulir dikirimkan secara tradisional

            var form = $(this);
            var url = form.attr('action');
            var method = form.attr('method');
            var formData = form.serialize();
            var filterDataTable = $('#tabel-data_filter input[type="search"]').val();

            $.ajax({
                type: method,
                url: url,
                data: formData + '&filter=' + filterDataTable,
                responseType: 'arraybuffer', // Menyatakan bahwa respons yang diharapkan adalah arraybuffer
                success: function(resp) {
                    // Tanggapan sukses dari backend
                    if (resp.success) {

                        // khusus untuk export excel
                        if (!!resp.file) {
                            var $a = $("<a>");
                            $a.attr("href", resp.file);
                            $("body").append($a);
                            $a.attr("download", "export_excel.xlsx");
                            $a[0].click();
                            $a.remove();

                            window.URL.revokeObjectURL(url);
                        } else {
                            // Mendapatkan nilai data-url dari tombol yang memanggil fungsi
                            var dataUrl = $('#btn-download-dataset').data('url');

                            window.open(dataUrl, '_blank');
                        }


                        // Tutup modal
                        $('#modal-download-file').modal('hide');
                        return;
                    } else {
                        // Tampilkan pesan kesalahan di swal
                        if (resp.msg) {
                            Swal.fire({
                                title: 'Error!',
                                text: resp.msg,
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            })
                        }
                    }
                    // Loop melalui setiap field yang memiliki kesalahan
                    $.each(resp.errors, function(field, message) {
                        // Hapus kelas is-invalid dari input yang lain
                        form.find('[name="' + field + '"]').removeClass(
                            'is-invalid');

                        // Jika ini elemen select, tambahkan kelas is-invalid pada container atau elemen lainnya
                        if (form.find('[name="' + field + '"]').is('select')) {
                            form.find('[name="' + field + '"]').parent()
                                .removeClass('is-invalid');
                            form.find('[name="' + field + '"]').parent().addClass(
                                'is-invalid');
                        } else {
                            // Tambahkan kelas is-invalid pada input yang tidak valid selain elemen select
                            form.find('[name="' + field + '"]').addClass(
                                'is-invalid');
                        }

                        // Tampilkan pesan kesalahan di bawah input yang bersangkutan
                        form.find('[name="' + field + '"]').next(
                            '.invalid-feedback').html(message);
                    });

                },
                error: function(error) {
                    // Tanggapan kesalahan dari backend
                    // console.error(err);
                    // Tambahkan logika lain sesuai kebutuhan Anda

                    // Tampilkan pesan kesalahan di modal
                    $('#modal-download-file .modal-body').html(error.responseText);
                }
            });
        });
    });


    // modal meta data
    function open_meta(data) {
        $('#modal-meta-data').modal('show');

        // Mengisi elemen-elemen modal dengan nilai dari objek JSON
        var kelompokData = !!data.meta_kelompok_data ? JSON.parse(data.meta_kelompok_data) : [];
        var htmlString = `
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Produsen Data</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_produsen}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Definisi</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_definisi}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Metode Pengumpulan Data</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_metode_pengumpulan}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Satuan</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_satuan}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Referensi Pedoman</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_ref_pedoman}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Tipe Data</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_type_data}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Periodisasi</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_periodisasi}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Unit Observasi</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_unit_observasi}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Klasifikasi/Kelompok</label>
            <div class="col-sm-9">`;

        // Menambahkan perulangan untuk setiap elemen dalam array
        kelompokData.forEach(function(value) {
            htmlString += `<li>${value}</li>`;
        })

        htmlString += `</div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Kode Referensi</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_kode_referensi}" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label fw-semibold">Interoperabilitas</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" value="${data.meta_interoperabilitas}" disabled>
            </div>
        </div>`;

        $('#modal-content').html(htmlString);

    }
    </script>
</body>

</html>