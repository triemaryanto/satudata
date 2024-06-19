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
                <p class="lh-13"><?= $deskription ?></p>
            </div>
        </div>

        <hr>
        <div class="row mt-5">
            <div class="col-auto">
                <div class="input-group mb-3 need-validation">
                    <span class="input-group-text fw-bold text-primary" id="basic-addon1">Tampilkan data 5 tahun dari</span>
                    <input type="number" class="form-control" id="tahun" name="tahun" value="<?= date('Y') ?>">
                    <div class="invalid-feedback"> </div>
                </div>
            </div>
            <div class="col-auto">
                <button type="btn" class="btn btn-primary" id="button-refresh" onclick="tampil_data()"><i class=""><i class="fa-sharp fa-solid fa-arrows-rotate"></i> refresh</button>
            </div>
        </div>
        <div class="row mt-5">
            <div id="chart-container"></div>
        </div>
        <div class="row">
            <div class="col-md-12 pb-5">

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
        tampil_data();
    });

    var formTahun = $('#tahun');

    function tampil_data() {
        var tahun = formTahun.val();
        $.ajax({
            url: '<?= base_url('makro/get_data') ?>',
            type: "GET",
            dataType: "JSON",
            data: {
                tahun: tahun
            },
            success: function(resp) {
                // chart
                for (var i = 0; i < resp.length; i++) {
                    var chartId = 'chart-container-' + (i + 1);
                    $("#chart-container").append('<div id="' + chartId + '" class="mt-5"></div>');

                    // Buat chart baru menggunakan objek konfigurasi
                    Highcharts.chart(chartId, resp[i]);
                }

                formTahun.removeClass('is-invalid');

                if (!resp.success) {
                    // Loop melalui setiap field yang memiliki kesalahan
                    $.each(resp.errors, function(field, message) {
                        var inputElement = $('[name="' + field + '"]');

                        // Hapus kelas is-invalid dari semua input
                        inputElement.removeClass('is-invalid')

                        // Tambahkan kelas is-invalid pada input yang tidak valid
                        inputElement.addClass('is-invalid');

                        // Tampilkan pesan kesalahan di bawah input yang bersangkutan
                        inputElement.next('.invalid-feedback').html(message);
                    });
                    return;
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