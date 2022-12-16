<?php
$reiter = array(
    array(
        'id' => '0',
        'name' => 'ToDo',
        'beschreibung' => 'Dinge, die erledigt werden müssen'
    ),
    array(
        'id' => '1',
        'name' => 'Erledigt',
        'beschreibung' => 'Dinge, die erledigt sind'
    ),
    array(
        'id' => '2',
        'name' => 'Verschoben',
        'beschreibung' => 'Dinge, die später erledigt werden'
    )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head mit Imports und Titel -->
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">
    <title>Reiter</title>
</head>

<body>
<!-- Oberster Div Container mit Text -->
<div class="container-fluid">
    <div class="text-center bg-light mt-3 mb-3 p-5">
        <h1>Aufgabenplaner: Reiter</h1>
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
                <!-- form  -->
                <form class="form-group">
                    <!-- Tabelle -->
                    <table class="table table-hover">
                        <tr class="table-light">
                            <th scope="col">Name</th>
                            <th scope="col">Beschreibung</th>
                            <th scope="col"></th>
                        </tr>
                        <!-- Inhalt der Tabelle mit Hilfe von Array -->
                        <tbody>
                        <?php if (isset($reiter)): foreach ($reiter as $item): ?>
                            <tr>
                                <td><?= isset($item['name']) ? $item['name'] : '' ?></td>
                                <td><?= isset($item['beschreibung']) ? $item['beschreibung'] : '' ?></td>
                                <td class="text-right">
                                    <button type="submit" class="btn btn-link"
                                            value="<?= isset($item['id']) ? $item['id'] : '' ?>"><i
                                                class="far fa-edit"></i></button>
                                    <button type="submit" class="btn btn-link"
                                            value="<?= isset($item['id']) ? $item['id'] : '' ?>"><i
                                                class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    <!-- Überschrift, Eingabefelder & 2 Knöpfe-->
                    <h3 class="mt-4">Bearbeiten/Erstellen</h3>
                    <div class="form-group">
                        <label for="reiterNeuName">Bezeichnung des Reiters</label>
                        <input type="text" id="reiterNeuName" name="reiterNeuName" class="form-control mt-1"
                               placeholder="Reiter" tabindex="1"><br/>
                        <label for="reiterNeuBeschreibung">Beschreibung</label>
                        <textarea id="reiterNeuBeschreibung" name="reiterNeuBeschreibung" class="form-control mt-1 mb-3"
                                  placeholder="Beschreibung" rows="3" tabindex="2"></textarea>
                        <button type="submit" class="btn btn-primary" tabindex="3">Speichern</button>
                        <button type="submit" class="btn btn-info ms-1" tabindex="4">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>