<?php if($this->session->userdata('user_id') === null) {
    
        redirect('public/users'); } ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
    <!-- Bootstrap 4 cdn stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!--<link href="css/sb-admin.css" rel="stylesheet">-->
    
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--datatables -->
    
    <link rel=stylesheet type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel=stylesheet type="text/css" href="<?php echo base_url(); ?>assets/css/elements.css">
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/my_js.js"></script>
    
     



<!-- Pie Chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>   
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- dropdown for logout/profile wasn't working without below bootstrap scripts -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->

</head>

<body>

    <div id="wrapper">