<!-- Col mit Einlogitems -->
<div class="col">
    <!-- Überschrift, Eingabefelder & 2 Knöpfe-->
    <h3 class="mt-4">Projekt "<?= $_SESSION['projekt']['Name']?>" bearbeiten</h3>
    <?php if ($projektfilled == "yes") {
        include('projekt_error.php');
    } ?>
    <?= form_open('EditProjekt', array('role' => 'form')) ?>
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
    </div>
    </form>
</div>
<!-- diese beiden divs kommen aus dem header und werden hier geschlossen -->
</div>
</div>
