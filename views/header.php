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
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admen" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo URL; ?>index">Home</a>
                </div>
                <div id="admen" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo URL; ?>help">Help</a></li>
                        <li><a href="<?php echo URL; ?>dashboard">Calculator</a></li>
                        <li><a href="<?php echo URL; ?>history">Operations history</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
