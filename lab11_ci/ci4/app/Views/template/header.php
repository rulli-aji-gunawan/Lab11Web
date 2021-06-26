<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<body>
    <div id="container">
        <header>
            <h1>Layout Sederhana</h1>
        </header>
        <nav>

            <!-- <a href="<?= base_url('/'); ?>" class="active">Home</a> --> 
            <a href="<?= base_url('/'); ?>" class="<?php echo($_SERVER['REQUEST_URI']=="/") ? "active" : ""; ?>" >Home</a>
            <a href="<?= base_url('/artikel'); ?>" class="<?php echo($_SERVER['REQUEST_URI']=="/artikel") ? "active" : ""; ?>" >Artikel</a>
            <a href="<?= base_url('/about'); ?>" class="<?php echo($_SERVER['REQUEST_URI']=="/about") ? "active" : ""; ?>" >About</a>
            <a href="<?= base_url('/contact'); ?>" class="<?php echo($_SERVER['REQUEST_URI']=="/contact") ? "active" : ""; ?>" >Kontak</a>
        </nav>
        <section id="wrapper"> 
            <section id="main">

