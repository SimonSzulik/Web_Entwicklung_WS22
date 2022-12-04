<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head mit Imports und Titel -->
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Projekte</title>
</head>

<body>
<!-- Oberster Div Container mit Text -->
<div class="container-fluid">
    <div class="text-center bg-light mt-3 mb-3 p-5">
        <h1>Aufgabenplaner: Projekte</h1>
    </div>
    <!-- Row Container mit Menü & Einlogitems -->
    <div class="row">
        <!-- Col mit Menü -->
        <div class="col-2">
            <!-- Ausgelagertes Menü mit Style -->
            <?php include('Menu.php'); ?>
        </div>
        <!-- Col mit Einlogitems -->
        <div class="col">
            <!-- Form -->
            <form class="form-group">
                <!-- Überschrift und Drop Down Menü-->
                <label class="pt-3" for="selectProjekt"><h3>Projekt wählen</h3></label>
                <select class="form-select mb-3" id="selectProjekt" name="selectProjekt" tabindex="1">
                    <option value="" selected>- bitte auswählen -</option>
                </select>
                <!-- 3 Knöpfe -->
                <button type="submit" class="btn btn-primary" id="btnAuswahl" name="btnAuswahl" tabindex="2">Auswählen
                </button>
                <button type="submit" class="btn btn-primary ms-1" id="btnBearbeiten" name="btnBearbeiten" tabindex="3">
                    Bearbeiten
                </button>
                <button type="submit" class="btn btn-danger ms-1" id="btnLoeschen" name="btnLoeschen" tabindex="4">
                    Löschen
                </button>
                <!-- Überschrift, Eingabefelder & 2 Knöpfe-->
                <h3 class="mt-4">Projekt Bearbeiten/erstellen</h3>
                <div class="form-group">
                    <label for="neuProjektName">Projektname</label>
                    <input type="text" id="neuProjektName" name="neuProjektName" class="form-control mt-2"
                           placeholder="Projekt" tabindex="5"><br/>
                    <label for="neuProjektBeschreibung">Projektbeschreibung</label>
                    <textarea id="neuProjektBeschreibung" name="neuProjektBeschreibung" class="form-control mt-2 mb-2"
                              placeholder="Beschreibung" rows="3" tabindex="6"></textarea>
                    <button type="submit" class="btn btn-primary" id="btnNeuSpeichern" name="btnNeuSpeichern"
                            tabindex="7">Speichern
                    </button>
                    <button type="submit" class="btn btn-info ms-1" id="btnReset" name="btnReset" tabindex="8">Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>