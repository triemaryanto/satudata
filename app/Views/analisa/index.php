<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    .select2-container .select2-selection--single {
        height: 40px !important;
    }

    th {
        border-radius: 10px;
    }

    th:first-child {
        border-top-left-radius: 10px;
    }

    th:last-child {
        border-top-right-radius: 10px;
    }
</style>
<section class="sec-padding mb-5 pb-5">
    <div class="container p-3">
        <div class="row">
            <h4 class="contact-title pb-10"><i class="fa-solid fa-chart-line fa-2xl me-2"></i> <span class="fs-2 fw-bold" style="color: #f05d0e;">Analisa</span> Data </h4>
        </div>
        <div class="row">
            <div class="card shadow" style="width: 100%;">
                <div class="card-body">
                    <h4 class="card-title text-primary mb-3">Perbandingan Data</h4>
                    <div class="col-12">
                        <div class="input-group mb-3 d-flex">
                            <span class="input-group-text">Data 1</span>
                            <select class="form-select select2" name="data_1" id="data_1" style="height: 40px;">
                                <option value="" selected>Cari & Pilih Data</option>
                                <?php foreach ($selectData as $key => $val) : ?>
                                    <option value="<?= $val['data_id'] ?>"><?= $val['data_nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Data 2</span>
                            <select class="form-select select2" name="data_2" id="data_2" style="height: 40px;">
                                <option value="" selected>Cari & Pilih Data</option>
                                <?php foreach ($selectData as $key => $val) : ?>
                                    <option value="<?= $val['data_id'] ?>"><?= $val['data_nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Data 3</span>
                            <select class="form-select select2" name="data_3" id="data_3" style="height: 40px;">
                                <option value="" selected>Cari & Pilih Data</option>
                                <?php foreach ($selectData as $key => $val) : ?>
                                    <option value="<?= $val['data_id'] ?>"><?= $val['data_nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <h4 class="card-title text-primary mb-3">Range Data Tahun</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">Tahun Mulai</span>
                                    <input type="number" aria-label="First name" class="form-control" name="tahun_begin" id="tahun_begin" value="<?= date('Y') - 1 ?>" require>
                                    <span class="input-group-text">Tahun Selesai</span>
                                    <input type="number" aria-label="Last name" class="form-control" name="tahun_end" id="tahun_end" value="<?= date('Y') ?>" require>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-end pe-5">
                            <button type="btn" class="btn btn-primary" onclick="tampil_data()"><i class="fa-sharp fa-solid fa-arrows-rotate"></i> Tampilkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 pt-5">
            <div id="chart-container"></div>
        </div>
        <div class="row my-5">
            <h4 class="card-title text-dark mb-3">Table Data</h4>
            <div class="table-container">

            </div>
        </div>
    </div>
</section>

<?= $this->section('javascript') ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: 'Cari & Pilih Data',
            allowClear: true,
            selectionCssClass: 'form-control',
            width: '90%',

        });
    });

    function tampil_data() {
        var data1_id = $('#data_1').val();
        var data2_id = $('#data_2').val();
        var data3_id = $('#data_3').val();
        var tahunBegin = $('#tahun_begin').val();
        var tahunEnd = $('#tahun_end').val();

        // validasi data harus di isi, minimal 1 data saja 
        if (!data1_id && !data2_id && !data3_id) {
            return Swal.fire({
                title: 'Informasi!',
                text: 'Tidak ada data yang di bandingkan',
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        }

        // validasi range tahun harus di isi 
        if (!tahunBegin || !tahunEnd) {
            return Swal.fire({
                title: 'Informasi!',
                text: 'Range tahun harus di isi',
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        }
        $.ajax({
            url: '<?= base_url('analisa/get_data') ?>',
            type: "GET",
            dataType: "JSON",
            data: {
                // tahun: tahun
                data: {
                    data1: data1_id,
                    data2: data2_id,
                    data3: data3_id,
                },
                tahun: {
                    tahun_begin: tahunBegin,
                    tahun_end: tahunEnd
                }
            },
            success: function(resp) {
                if (resp.success) {
                    // chart
                    // var chartId = 'chart-content';
                    // $("#chart-container").append('<div id="' + chartId + '" class="mt-5" style="height:500px"></div>');

                    // Buat chart baru menggunakan objek konfigurasi
                    Highcharts.chart('chart-container', resp.chart);
                    $('.table-container').html(resp.data);
                } else {
                    return Swal.fire({
                        title: 'Informasi!',
                        text: resp.msg,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>

<?= $this->endSection() ?>

<?= $this->endSection() ?>