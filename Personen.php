<?php
$personen = array(
    array(
        'id' => '0',
        'name' => 'Simon Szulik',
        'email' => 's4siszul@uni-trier.de',
        'inProjekt' => true
    ),
    array(
        'id' => '1',
        'name' => 'Clara Gutbrodt',
        'email' => 's1clgutb@uni-trier.de',
        'inProjekt' => true
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
    <title>Personen</title>
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
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">In Projekt</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <!-- Inhalt der Tabelle mit Hilfe von Array -->
                    <tbody>
                    <?php if (isset($personen)): foreach ($personen as $item): ?>
                        <tr>
                            <td><?= isset($item['name']) ? $item['name'] : '' ?></td>
                            <td><?= isset($item['email']) ? $item['email'] : '' ?></td>
                            <td><?php if(isset($item['inProjekt']) && $item['inProjekt']){$item['state'] = 'unchecked';} ?><?= isset($item['inProjekt']) ? '<input class="form-check-input" type="checkbox"'.$item['state'].'>' : '' ?></td>
                            <td class="text-right">
                                <button type="submit" class="btn btn-link" value="<?= isset($item['id']) ? $item['id'] : '' ?>"><i class="far fa-edit"></i></button>
                                <button type="submit" class="btn btn-link" value="<?= isset($item['id']) ? $item['id'] : '' ?>"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; endif; ?>
                    </tbody>
                </table>
                <!-- Überschrift, Eingabefelder & 2 Knöpfe-->
                <h3 class="mt-4">Bearbeiten/Erstellen</h3>
                <div class="form-group">
                    <label for="neuPersonName">Username</label>
                    <input type="text" id="neuPersonName" name="neuPersonName" class="form-control mt-2 mb-2" placeholder="Username" tabindex="1">
                    <label for="neuPersonEMail">E-Mail</label>
                    <input type="text" id="neuPersonEMail" name="neuPersonEMail" class="form-control mt-2 mb-2" placeholder="E-Mail" tabindex="2">
                    <label for="neuPersonPasswort">Passwort</label>
                    <input type="password" id="neuPersonPasswort" name="neuPersonPasswort" class="form-control mt-2 mb-2" placeholder="Passwort" tabindex="3">
                    <div class="form-check mb-3">
                        <input class="form-check-input mb-3" type="checkbox" value="" id="neuPersonCheck" name="neuPersonCheck" tabindex="4">
                        <label class="form-check-label" for="neuPersonCheck">Dem Projekt zugeordnet</label>
                    </div>
                    <button type="submit" class="btn btn-primary" tabindex="5">Speichern</button>
                    <button type="submit" class="btn btn-info ms-1" tabindex="6">Reset</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>