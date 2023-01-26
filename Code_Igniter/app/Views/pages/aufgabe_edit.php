<!-- Col mit Einlogitems -->
<div class="col" xmlns="http://www.w3.org/1999/html">
    <!-- Überschrift, Eingabefelder & 2 Knöpfe-->
    <h3 class="mt-4">Aufgabe bearbeiten</h3>
    <?php if ($projektfilled == "yes") {
        include('projekt_error.php');
    } ?>
    <?= form_open('EditAufgaben', array('role' => 'form')) ?>
    <div class="form-group">
        <label for="neuAufgabeName">Aufgabenbezeichnung</label>
        <input type="text" id="neuAufgabeName" name="neuAufgabeName" class="form-control mt-2 mb-2" placeholder="<?=$_SESSION['aufgabe']['Name']?>" tabindex="1">
        <label for="neuAufgabeBeschreibung">Beschreibung der Aufgabe</label>
        <textarea id="neuAufgabeBeschreibung" name="neuAufgabeBeschreibung" class="form-control mt-2 mb-2" placeholder="<?=$_SESSION['aufgabe']['Beschreibung']?>" rows="3" tabindex="2"></textarea>
        <button type="submit" class="btn btn-primary" id="btnNeuSpeichern" name="btnNeuSpeichern" tabindex="7">Speichern</button>
    </form>
    </div>
</div>
</div>
<!-- diese beiden divs kommen aus dem header und werden hier geschlossen -->
</div>
</div>