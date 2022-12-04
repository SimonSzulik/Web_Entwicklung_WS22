<?php
$aufgaben = array(
    array(
        'id' => '0',
        'bezeichnung' => 'Systemsoftware Übung abgeben',
        'beschreibung' => 'Synchronisations Bug fixen',
        'reiter' => 'ToDo',
        'zustaendig' => 'Simon Szulik'
    ),
    array(
        'id' => '1',
        'bezeichnung' => 'Früh schlafen gehen',
        'beschreibung' => '7-9 Stunden schlaf bekommen',
        'reiter' => 'ToDo',
        'zustaendig' => 'Clara Gutbrodt'
    ),
    array(
        'id' => '2',
        'bezeichnung' => 'Kaffe trinken mit Chef',
        'beschreibung' => 'Kaffe schmecken lassen',
        'reiter' => 'Erledigt',
        'zustaendig' => 'Clara Gutbrodt'
    ),
    array(
        'id' => '3',
        'bezeichnung' => 'Sport machen',
        'beschreibung' => 'mal wieder Bouldern gehen',
        'reiter' => 'Erledigt',
        'zustaendig' => 'Simon Szulik'
    ),
    array(
        'id' => '4',
        'bezeichnung' => 'Nach Gehaltserhöhung fragen',
        'beschreibung' => 'Nach Gehaltserhöhung fragen',
        'reiter' => 'Verschoben',
        'zustaendig' => 'Clara Gutbrodt'
    )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head mit Imports und Titel -->
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
    <title>Aufgaben</title>
</head>

<body>
<!-- Oberster Div Container mit Text -->
<div class="container-fluid">
    <div class="text-center bg-light mt-3 mb-3 p-5">
        <h1>Aufgabenplaner: Personen</h1>
    </div>
    <!-- Row Container mit Menü & Einlogitems -->
    <div class="row">
        <!-- Col mit Menü -->
        <div class="col-2">
            <!-- Ausgelagertes Menü mit Style -->
            <?php include('Menu.php'); ?>
        </div>
        <!-- Col mit Reiter Sachen -->
        <div class="col">
            <!-- Reihe mit Tabelle  -->
            <div class="row">
                <!-- Form -->
                <form class="form-group">
                    <!-- Tabelle -->
                    <table class="table table-hover">
                        <thead>
                        <tr class="table-light">
                            <th scope="col">Aufgabenbezeichnung</th>
                            <th scope="col">Beschreibung der Aufgabe</th>
                            <th scope="col">Reiter</th>
                            <th scope="col">Zuständig</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <!-- Inhalt der Tabelle mit Hilfe von Array -->
                        <tbody>
                        <?php if (isset($aufgaben)): foreach ($aufgaben as $item): ?>
                            <tr>
                                <td><?= isset($item['bezeichnung']) ? $item['bezeichnung'] : '' ?></td>
                                <td><?= isset($item['beschreibung']) ? $item['beschreibung'] : '' ?></td>
                                <td><?= isset($item['reiter']) ? $item['reiter'] : '' ?></td>
                                <td><?= isset($item['zustaendig']) ? $item['zustaendig'] : '' ?></td>
                                <td class="text-right">
                                    <button type="submit" class="btn btn-link" value="<?= isset($item['id']) ? $item['id'] : '' ?>"><i class="far fa-edit"></i></button>
                                    <button type="submit" class="btn btn-link" value="<?= isset($item['id']) ? $item['id'] : '' ?>"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    <!-- Überschrift, Eingabefelder & 2 Knöpfe & Dropdown Menüs für Auswahl von Reitern und Personen -->
                    <h3 class="mt-4">Bearbeiten/Erstellen</h3>
                    <div class="form-group">
                        <label for="neuAufgabeName">Aufgabenbezeichnung</label>
                        <input type="text" id="neuAufgabeName" name="neuAufgabeName" class="form-control mt-2 mb-2" placeholder="Aufgabe" tabindex="1">
                        <label for="neuAufgabeBeschreibung">Beschreibung der Aufgabe</label>
                        <textarea id="neuAufgabeBeschreibung" name="neuAufgabeBeschreibung" class="form-control mt-2 mb-2" placeholder="Beschreibung" rows="3" tabindex="2"></textarea>
                        <label for="neuErstellungsdatum">Erstellungsdatum</label>
                        <input type="date" id="neuErstellungsdatum" name="neuErstellungsdatum" class="form-control mt-2 mb-2" placeholder="Erstellungsdatum" tabindex="3">
                        <label for="neuFaellig">Fällig bis</label>
                        <input type="date" id="neuFaellig" name="neuFaellig" class="form-control mt-2 mb-2" placeholder="Erstellungsdatum" tabindex="4">
                        <label for="neuReiter">Zugehöriger Reiter</label>
                        <select class="form-select mt-2 mb-2" id="neuReiter" name="neuReiter" tabindex="5">
                            <option value="ToDo" selected>ToDo</option>
                            <option value="Erledigt" selected>Erledigt</option>
                            <option value="Verschoben" selected>Verschoben</option>
                        </select>
                        <label for="neuZustaendig">Zuständig</label>
                        <select class="form-select mt-2 mb-3" id="neuZustaendig" name="neuZustaendig" tabindex="6">
                            <option value="Simon Szulik" selected>Simon Szulik</option>
                            <option value="Clara Gutbrodt" selected>Clara Gutbrodt</option>
                        </select>
                        <button type="submit" class="btn btn-primary" id="btnNeuSpeichern" name="btnNeuSpeichern" tabindex="7">Speichern</button>
                        <button type="submit" class="btn btn-info ms-1" id="btnReset" name="btnReset" tabindex="8">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>