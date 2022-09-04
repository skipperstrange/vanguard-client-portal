<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= CSS_PATH ?>normalize.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= CSS_PATH ?>bootstrap.min.css" />
    <!-- Style -->

    <!-- Icomoon fonts -->
    <link rel="stylesheet" href="<?= FONT_URL ?>icomoon/style.css" />
    <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="<?= CSS_PATH ?>fontawesome.min.css" />
    <link rel="stylesheet" href="<?= CSS_PATH ?>all.min.css" />
    <!-- Material icons -->
    <link rel="stylesheet" href="<?= FONT_URL ?>material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.6.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>bootstrap-datetimepicker.min.css" />

    <link rel="stylesheet" href="<?= CSS_PATH ?>bootstrap-toaster.min.css" />
    
    <link rel="stylesheet" href="<?= CSS_PATH ?>alt-style.css" />
      
    <script src="<?= JS_PATH ?>jquery-3.3.1.min.js"></script>
    <script src="<?= JS_PATH ?>axios.min.js"></script>
    <script src="<?= JS_PATH ?>popper.min.js"></script>
    <script src="<?= JS_PATH ?>bootstrap.min.js"></script>
    <script src="<?= JS_PATH ?>jquery.sticky.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script src="<?= JS_PATH ?>urls.js"></script>


    <title><?= _title($pageTitle) ?></title>
    <style>
            /* force apply styling to selects */
    select.selectpicker {
    padding: 13px 25px;
    min-height: 50px;
    width: 100%;
    max-width: 550px;
    border-radius: 4px;
    border: solid 1px #ececec;
    }

    /* remove arrows from number fields*/
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
  
                       	body{
                            background-image: url('./public/images/vbg-fade.jpg');
                            background-size: cover;
                            background-position: left center;
                            background-repeat: no-repeat;
                        }
                    </style>
</head>

<body>
    <?php include_once LAYOUTS.'nav.php'; ?>
