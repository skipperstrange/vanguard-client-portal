<?php echo is_secure_connection() ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= CSS_PATH ?>normalize.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <!-- Style -->

    <!-- Icomoon fonts -->
    <link rel="stylesheet" href="<?= FONT_URL ?>icomoon/style.css" />
    <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="<?= CSS_PATH ?>fontawesome.min.css" />
    <link rel="stylesheet" href="<?= CSS_PATH ?>all.min.css" />
    <!-- Material icons -->
    <link rel="stylesheet" href="<?= FONT_URL ?>material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="<?= CSS_PATH ?>style.css" />
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdn.usebootstrap.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= JS_PATH ?>jquery.sticky.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="<?= JS_PATH ?>jquery.steps.js"></script>
    <script src="<?= JS_PATH ?>moment.min.js" ></script>
    <script src="<?= JS_PATH ?>bootstrap-datetimepicker.min.js"></script>
    
    <title><?= _title() ?></title>
</head>

<body>
    <?php include_once LAYOUTS.'nav.php'; ?>
