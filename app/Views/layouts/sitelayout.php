<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeInginiter 4</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- CSS  AlertifyJS-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
</head>

<body>
    <div class="app">
        <?= $this->include("layouts/inc/navbar")  ?>
        <?= $this->renderSection('content') ?>
    </div>


    <script src="<?= base_url('assets/js/jquery-3.6.3.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- JavaScript  AlertifyJS-->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
    $(document).ready(function() {
        <?php if (session()->getFlashdata('status')) {  ?>

        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?= session()->getFlashdata('status'); ?>");

        <?php }  ?>
    });
    </script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>