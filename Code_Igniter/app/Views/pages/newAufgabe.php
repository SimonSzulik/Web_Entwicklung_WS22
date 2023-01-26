<!-- Col mit Einlogitems -->
<div class="col">
    <!-- Überschrift, Eingabefelder & 2 Knöpfe-->
    <h3 class="mt-4">Aufgabe erstellen</h3>
    <?php if ($projektfilled == "yes") {
        include('projekt_error.php');
    } ?>
    <?= form_open('newAufgabe', array('role' => 'form')) ?>
    <div class="form-group">
        <label for="neuAufgabeName">Aufgabenbezeichnung</label>
        <input type="text" id="neuAufgabeName" name="neuAufgabeName" class="form-control mt-2 mb-2" placeholder="Aufgabe" tabindex="1">
        <label for="neuAufgabeBeschreibung">Beschreibung der Aufgabe</label>
        <textarea id="neuAufgabeBeschreibung" name="neuAufgabeBeschreibung" class="form-control mt-2 mb-2" placeholder="Beschreibung" rows="3" tabindex="2"></textarea>
        <label for="neuErstellungsdatum">Erstellungsdatum</label>
        <input type="date" id="neuErstellungsdatum" name="neuErstellungsdatum" class="form-control mt-2 mb-2" placeholder="Startdatum" tabindex="3">
        <label for="neuFaellig">Fällig bis</label>
        <input type="date" id="neuFaellig" name="neuFaellig" class="form-control mt-2 mb-2" placeholder="Erstellungsdatum" tabindex="4">
        <label for="neuReiter">Zugehöriger Reiter</label>
        <select class="form-select mt-2 mb-2" id="neuReiter" name="neuReiter" tabindex="5">
            <option value="ToDo" selected>ToDo</option>
            <option value="Erledigt" selected>Erledigt</option>
            <option value="Verschoben" selected>Verschoben</option>
        </select>
        <button type="submit" class="btn btn-primary" id="btnNeuSpeichern" name="btnNeuSpeichern" tabindex="7">Speichern</button>
    </div>
    </form>
</div>
</div>
<!-- diese beiden divs kommen aus dem header und werden hier geschlossen -->
</div>
</div>