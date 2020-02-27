<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
</head>
<body>
<header class="bg-dark text-light">
    <div class="row  p-4">
        <div class="col-4" style="margin-left:80px;">
            <h1><?php bloginfo('title') ?></h1>
            <h6><?php bloginfo('description') ?></h6>
        </div>
        <div class="col-3"></div>
        <div class="col-4">
            <form action="#" class="m-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            </form>
        </div>
    </div>
    <?php wp_nav_menu() ?>
</header>