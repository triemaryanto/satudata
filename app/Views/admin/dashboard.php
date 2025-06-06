<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="#">
    <title>Satu Data Wonosobo</title>
    <?= $this->renderSection('extra-css') ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="#">

    <?php include(APPPATH . 'Views/admin/_partials/head.php'); ?>

</head>
<?php include(APPPATH . 'Views/admin/_partials/header.php'); ?>

<div class="page-content">
    <?php include(APPPATH . 'Views/admin/_partials/sidebar.php'); ?>

    <div class="content-wrapper">
        <div class="content">
            <?= $this->renderSection('content') ?>
        </div>
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
                <span class="navbar-text">
                    &copy; 2024. by <a href="#" target="_blank">Dev Bagundal Crut</a>
                </span>

                <ul class="navbar-nav ml-lg-auto">

                </ul>
            </div>
        </div>
    </div>
</div>
<?php include(APPPATH . 'Views/admin/_partials/footer_scripts.php'); ?>
<?= $this->renderSection('extra-js') ?>
</body>

</html>