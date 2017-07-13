<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<!-- Compatibiliad con IE y Chrome-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Guarumo" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Indica a los buscadores el seguimiento de robots.txt-->
    <meta name="robots" content="INDEX,FOLLOW" />

	<title><?php echo APP_NAME." | ".(isset($titulo) ? $titulo : "" ); ?></title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon">
	<!-- Common Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap/bootstrap.min.css" >
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap/bootstrap-theme.min.css" >
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" type="text/css" charset="utf-8">
	<!-- Common Styles -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
