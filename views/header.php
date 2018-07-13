<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script type="text/javascript" src="public/js/calculator.js"></script>
</head>

<body>
    <div class="header">
        <div class="btn-group">
            <a class="btn btn-primary" href="<?php echo URL; ?>index">Main</a>
            <a class="btn btn-info" href="<?php echo URL; ?>help">Help</a>
            <a class="btn btn-info" href="<?php echo URL; ?>dashboard">Calculator</a>
            <a class="btn btn-info" href="<?php echo URL; ?>history">Operations history</a>
        </div>
        <a class="btn btn-danger pull-right" href="<?php echo URL; ?>dashboard/logout">Logout</a>
    </div>
