<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi inventori sederhana dengan CI & Bootstrap">
    <meta name="author" content="Djava-ui">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset_frontend/css/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset_frontend/css/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset_frontend/css/chosen.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset_frontend/css/style.css')?>"/>
        <link rel="stylesheet" href="<?php echo base_url('asset_frontend/css/datepicker.css')?>"/>
        
    <style type="text/css">

        }
        .navbar .hidden-print .navbar-inner{
        background-color: #ffffff;}
    </style>
        <link id="bootstrap-style" href="<?php echo base_url();?>asset_frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset_frontend/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="<?php echo base_url();?>asset_frontend/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="<?php echo base_url();?>asset_frontend/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Fav icon -->

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('asset_frontend/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset_frontend/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset_frontend/js/chosen.jquery.js');?>"></script>
    <script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>

</head>

<body>
<div class="container">

    <!--========================= Header + Navbar ==============================-->
<center><h1><p style="color: white;>"><?php echo "$header"; ?></p></h1></center>