<!-- Col mit Einlogitems -->
<div class="col">
    <!-- Form -->
    <form class="form-group">
        <a href="newProjekt" class="btn btn-primary mb-2" type="submit" value="button" name="btnNeu" id="btnNeu"><i
                    class="fas fa-plus-square"></i>&nbsp;Neu</a>
        <button type="submit" class="btn btn-primary mb-2" id="btnAuswahl" name="btnAuswahl" tabindex="2">Auswählen</button>
        <!-- Überschrift und Drop Down Menü-->
        <div class="row">
        <label class="pt-3" for="selectProjekt"><h3>Projekt wählen</h3></label>
        <select class="form-select mb-3" id="selectProjekt" name="selectProjekt" tabindex="1">
            <?php if (!empty($projekte)): foreach ($projekte as $item): ?>
                <option
                        value=<?= $item['Name'] ?>
                        label="<?= $item['Name'] ?>"
                ></option>
            <?php endforeach; endif; ?>
        </select>
    </form>
</div>
<!-- diese beiden divs kommen aus dem header und werden hier geschlossen -->
</div>
</div>
