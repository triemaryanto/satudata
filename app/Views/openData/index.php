<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    .dataTables_paginate.paging_simple_numbers {
        margin-bottom: 40px !important;
    }
</style>
<div class="container-fluid mb-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 col-lg-4 text-center mb-2">
            <img class="md-padding-30px-right" src="<?= base_url('public/img/icons/dataset.png') ?>" alt="" style="height: auto; width:80%" />

        </div>
        <div class="col-10 col-lg-6 text-left">
            <h1 class="title-font alt-font font-weight-500 mt-100">Open Data | Package</h1>
            <p class="lh-13">
                Selamat datang di sistem Open Data Kabupaten Wonosobo, untuk menuju Wonosobo Smart City dan mendukung
                keterbukaan data dan informasi di Kabupaten Wonosobo
            </p>
            <p class="fw-medium mt-0 text-success mb-3">Jumlah Dataset</p>
            <p class="font-weight-500 mt-0 text-success" style="font-size: 50px;" id="tot_data"><?= $total ?></p>
        </div>
    </div>

    <hr>
    <div class="row px-5 mx-5">
        <div class="col-lg-12">
            <!-- <form action="<?= base_url('opendata/') ?>" method="GET" accept-charset="utf-8" id="formDataset"> -->

            <div class="row">
                <div class="col-lg-12 mb-2">
                    <span style="font-weight: bold;">Pencarian Dataset</span>
                </div>
                <div class="col-lg-12">
                    <input type="text" id="cari" class="form-control" placeholder="Cari data ...">
                </div>
                <div class="col-lg-12">
                    <label>Filter</label>
                </div>
                <div class="col-lg-3 mb-3">
                    <select class="form-control select2 select2-hidden-accessible" name="organisasi" id="organisasi" style="width: 300px;" onchange="load_data()">
                        <option selected value="all">Semua Organisasi</option>
                        <?php foreach ($select_organisasi as $key => $val) : ?>
                            <option value="<?= $val['name'] ?>"><?= $val['title'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-lg-3 mb-3">
                    <select class="form-control select2 select2-hidden-accessible" id="group" name="group" style="width: 300px;" onchange="load_data()" tabindex="-1" aria-hidden="true">
                        <option selected value="all">Semua Group</option>
                        <?php foreach ($select_group as $key => $val) : ?>
                            <option value="<?= $val['name'] ?>"><?= $val['title'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-lg-12">
                    <button onclick="load_data();" class="btn btn-primary btn-block"><i class="fa fa-search mr-1"></i> Cari Dataset</button>
                    <button onclick="reset_data();" id="reset" style="display: none;" class="btn btn-danger mt-1"><i class="fa fa-times mr-1"></i> Reset Pencarian</button>
                </div>
            </div>
            <div style="float:right">
                <label>Urutkan </label>
                <select class="form-control" id="order" onchange="load_data()" style="display: inline-block; width: 110px;">
                    <option value="1">Abjad</option>
                    <option value="2" selected="">Terbaru</option>
                    <option value="3">Terpopuler</option>
                </select>
            </div>
            <table class="table table-striped mt-5 dataTable mb-5" id="table_data" style="width:100%" role="grid" aria-describedby="table_data_info">
                <thead>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <!-- </form> -->
        </div>
    </div>


</div>

<?= $this->section('javascript') ?>
<script>
    $(document).ready(function() {
        load_data();
        $('.select2').select2();
    });


    function reset_data() {
        $('#cari').val(null);
        $('#organisasi').val('all').trigger('change');
        $('#group').val('all').trigger('change');
        load_data();
    }

    function load_data() {
        cari = $('#cari').val();
        organisasi = $('#organisasi').val();
        group = $('#group').val();
        order = $('#order').val();
        limit = $('#limit').val();

        if (cari == '' && organisasi == 'all' && group == 'all') {
            $('#reset').css('display', 'none');
        } else {
            $('#reset').css('display', '');
        }

        $(document).ready(function() {
            $('#table_data').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ordering: true,
                info: false, // info total data pagging
                autoWidth: false,
                lengthMenu: [
                    [5, 10, 20],
                    [5, 10, 20]
                ],
                ajax: {
                    url: '<?= base_url('opendata/get_data_table') ?>',
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        cari: cari,
                        organisasi: organisasi,
                        group: group,
                        order: order,
                        limit: limit
                    },
                },
                dom: 'lrtip',
                order: [],
                columnDefs: [{
                    targets: [0],
                    className: '',
                }],
                language: {
                    "infoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "lengthMenu": "Tampilkan _MENU_",
                    "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                    "infoEmpty": "Menampilkan 0 data",
                    "processing": "Sedang memproses...",
                    "zeroRecords": "Tidak ditemukan data yang sesuai",
                    "paginate": {
                        "next": ">",
                        "previous": "<"
                    },
                }
            }).on('xhr.dt', function(e, settings, json, xhr) {
                $('#tot_data').html(json.total)
            })
        });
    }

    function formatDateTime(dateTimeString) {
        const dateTime = new Date(dateTimeString);
        const day = String(dateTime.getDate()).padStart(2, '0');
        const month = String(dateTime.getMonth() + 1).padStart(2, '0');
        const year = dateTime.getFullYear();
        const hours = String(dateTime.getHours()).padStart(2, '0');
        const minutes = String(dateTime.getMinutes()).padStart(2, '0');

        const formattedDateTime = `${day}-${month}-${year} ${hours}:${minutes}`;
        return formattedDateTime;
    }

    function cari() {
        var key = $('#key_cari').val();
        location.href = '<?= base_url('opendata/cari?key=') ?>' + key;
    }

    $('#key_cari').on('keypress', function(e) {
        if (e.key === 'Enter') {
            cari();
        }
    });
</script>
<?= $this->endSection() ?>

<?= $this->endSection() ?>