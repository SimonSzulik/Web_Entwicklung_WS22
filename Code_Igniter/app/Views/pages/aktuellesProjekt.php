<!-- Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Projekt löschen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Möchtest du das Projekt: "<?= $_SESSION['projekt']['Name'] ?>" wirklich löschen?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zurück zum Projekt</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#infoModal">Löschen</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="infoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Gelöscht</h1>
            </div>
            <div class="modal-body">
                Das Projekt wurde gelöscht und du wirst zur Projektauswahl weitergeleitet.
            </div>
            <div class="modal-footer">
                <a href="project_delete" class="btn btn-danger mb-2" type="submit" value="button" name="logout" id="logout"><i class="fa-solid fa-right-from-bracket"></i>Ok </a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

     <!-- Col mit Card 1 -->
     <div class='col'>
         <button class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#deleteModal" type="submit" value="button" name="btndelete" id="btndelete"><i class="far fa-trash-alt"></i>&nbsp;Löschen</button>
         <a href="edit_projekt" class="btn btn-primary mb-2" type="submit" value="button" name="btnedit" id="btnedit"><i class="far fa-edit"></i>&nbsp;Bearbeiten</a>
         <div class="row">
         <div class="col">
            <div class="card">
                <div class="card-header">ToDo:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Systemsoftware Übung abgeben (Simon Szulik) </li>
                    <li class="list-group-item"> Früh schlafen gehen (Clara Gutbrodt) </li>
                </ul>
            </div>
        </div>
        <!-- Col mit Card 2 -->
        <div class="col">
            <div class="card">
                <div class="card-header">Erledigt:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Kaffe trinken mit Chef (Clara Gutbrodt)</li>
                </ul>
            </div>
        </div>
        <!-- Col mit Card 3 -->
        <div class="col">
            <div class="card">
                <div class="card-header">Verschoben:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Sport machen (Simon Szulik)</li>
                    <li class="list-group-item"> Nach Gehaltserhöhung fragen (Clara Gutbrodt)</li>
                </ul>
            </div>
        </div>
<!-- diese beiden divs kommen aus dem header und werden hier geschlossen -->
    </div>
</div>