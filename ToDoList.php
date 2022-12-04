<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head mit Imports und Titel -->
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>ToDoList</title>
</head>

<body>
<!-- Oberster Div Container mit Text -->
<div class="container-fluid">
    <div class="text-center bg-light mt-3 mb-3 p-5">
        <h1>Aufgabenplaner: Todos (Aktuelles Projekt)</h1>
    </div>
    <!-- Row Container mit Menü & Cards -->
    <div class="row">
        <!-- Col mit Menü -->
        <div class="col-2">
            <!-- Ausgelagertes Menü mit Style -->
            <?php include('Menu.php'); ?>
        </div>
        <!-- Col mit Card 1 -->
        <div class="col">
            <div class="card">
                <div class="card-header">ToDo:</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> Systemsoftware Übung abgeben </li>
                        <li class="list-group-item"> Früh schlafen gehen </li>
                    </ul>
            </div>
        </div>
        <!-- Col mit Card 2 -->
        <div class="col">
            <div class="card">
                <div class="card-header">Erledigt:</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> Kaffe trinken mit Chef</li>
                    </ul>
            </div>
        </div>
        <!-- Col mit Card 3 -->
        <div class="col">
            <div class="card">
                <div class="card-header">Verschoben:</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> Sport machen </li>
                        <li class="list-group-item"> Nach Gehaltserhöhung fragen </li>
                    </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>