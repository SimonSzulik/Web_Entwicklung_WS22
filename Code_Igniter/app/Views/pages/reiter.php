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
            <?php include('menu.php'); ?>
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