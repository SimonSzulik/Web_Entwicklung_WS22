<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head mit Imports und Titel(wird dynamisch gesetzt) -->
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title> <?= $title; ?> </title>
</head>
<body>
<!-- Oberster Div Container mit Überschrift -->
<div class="container-fluid">
    <div class="text-center bg-light mt-3 mb-3 p-5">
        <h1 class="animate__animated animate__backInDown">Aufgabenplaner: <?= $title; ?> </h1>
    </div>
    <!-- Row Container mit Menü ganz links -->
    <div class="row">
        <!-- Col mit Menü -->
        <div class="col-2">
            <!-- Ausgelagertes Menü -->
            <?php if ($title != 'Login' && $title != 'Registrieren') {
                include('menu.php');
            } ?>
        </div>
