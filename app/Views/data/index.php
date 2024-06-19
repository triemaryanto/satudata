<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<style type="text/css">
    .table_custom thead tr th {
        padding: 6px 15px 6px 7px;
        font-size: 14px;
        line-height: 16px;
        vertical-align: middle;
    }

    .table_custom tbody tr td {
        padding: 6px 15px 6px 7px;
        font-size: 14px;
        line-height: 16px;
    }
</style>
<section class="sec-padding mb-5">
    <div class="container p-3">
        <div class="row align-items-center justify-content-center">
            <div class="col-10 col-lg-4 text-center mb-2 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="60">
                <img class="md-padding-30px-right" src="<?= $image ?>" alt="" style="height: auto; width:80%" />
            </div>
            <div class="col-10 col-lg-8 text-start appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="60">
                <div class="top-line-custom"></div>
                <h1 class="title-font alt-font font-weight-500 mt-100"><?= $title ?></h1>
                <p class="lh-13"><?= $deskription ?></p>
            </div>
        </div>

        <hr>
        <div class="row mt-5">
            <div class="btn-group" role="group">
                <div class="p-2">
                    <button type="button" class="btn btn-success " onclick="modal_download();">
                        <i class="fa fa-download"></i> Download Excel
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pb-5">
                <div class="table-responsive">
                    <hr>
                    <table class="table table-striped table-bordered table_custom dataTable no-footer" id="tabel-data" role="grid" aria-describedby="tabel-dummy_info">
                        <thead class="text-center">
                            <tr>
                                <td></td>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal form download file -->
<div class="modal fade" id="modal-download-file" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Satudata Wonosobo Download File</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('data/download/' . $tag) ?>" method="post" class="needs-validation">
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

<!-- Modal Meta Data-->
<div class="modal fade" id="modal-meta-data" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Meta Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="modal-content">

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->section('javascript') ?>

<script>
    $(document).ready(function() {
        tampil_data();
    });

    function tampil_data() {
        // Hancurkan DataTable jika sudah ada
        if ($.fn.DataTable.isDataTable('#tabel-data')) {
            $('#tabel-data').DataTable().destroy();
        }

        // Inisialisasi DataTable
        var table;

        $.ajax({
            url: '<?= base_url('data/get_data') ?>',
            type: "GET",
            dataType: "JSON",
            data: {
                kelompok: '<?= $tag ?>'
            },
            success: function(json) {
                // Mengisi tabel dengan data
                var data = json.data;

                // Membuat header kolom dinamis
                var tahunColumns = json.data_tahun && json.data_tahun.length > 0 ? json.data_tahun.map(function(tahun) {
                    return {
                        data: 'dd_nilai.' + tahun,
                        mData: 'dd_nilai.' + tahun,
                        className: 'text-center',
                        orderable: true,
                        render: function(data, type, row) {
                            // Pastikan nilai tidak kosong
                            if (data !== "") {
                                // Mengembalikan nilai hanya pada tipe display, bukan tipe sort atau filter
                                return type === 'display' ? data : "";
                            } else {
                                return "-"; // Jika data kosong
                            }
                        },
                    };
                }) : [];

                var columns = [{
                        data: 'nomor',
                        className: 'text-center',
                        orderable: true
                    },
                    {
                        data: 'dd_nama',
                        className: 'text-left',
                        orderable: true
                    },
                    {
                        data: 'satuan',
                        className: 'text-center',
                        orderable: true
                    },
                    {
                        data: 'meta_produsen',
                        className: 'text-center',
                        orderable: true
                    },
                ].concat(tahunColumns); // Tambahkan kolom tahun ke definisi kolom

                var headerHtml = `<tr>
                                <th rowspan="2" style="width: 35px;" class="text-center">No</th>
                                <th rowspan="2" style="width: auto;" class="text-center">Capaian Indikator</th>
                                <th rowspan="2" style="width: 100px;" class="text-center">Satuan</th>
                                <th rowspan="2" style="width: 200px;" class="text-center">Sumber</th>
                                <th colspan="${tahunColumns.length}" style="width: 200px;" class="text-center">Nilai Capaian Indikator</th>
                            </tr> 
                            <tr>`;
                tahunColumns.forEach(function(tahunColumn) {
                    headerHtml += `<th style="width: 45px;" class="text-center">${tahunColumn.data.split('.')[1]}</th>`;
                });
                headerHtml += '</tr>';

                $('#tabel-data thead').html(headerHtml);

                // Setelah mendefinisikan kolom dan header, inisialisasi DataTable di sini
                table = $('#tabel-data').DataTable({
                    destroy: true,
                    processing: true,
                    pageLength: 10,
                    paging: true,
                    lengthChange: true,
                    searching: true,
                    info: true,
                    autoWidth: false,
                    lengthMenu: [
                        [10, 25, -1],
                        [10, 25, "All"]
                    ],
                    order: [],
                    columns: columns, // Gunakan definisi kolom di sini
                    data: data, // Masukkan data di sini
                    rowCallback: function(row, data) {
                        // Menambahkan event click pada setiap baris
                        $(row).on('click', function() {
                            // Lakukan aksi sesuai kebutuhan
                            open_meta(data.meta_data); //panggil fungsi open meta
                            // Misalnya, tampilkan detail atau navigasi ke halaman tertentu
                        });
                    }
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
<?= $this->endSection() ?>

<?= $this->endSection() ?>