<!-- Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Account löschen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Möchtest du deinen Account wirklich aus der Datenbank entfernen?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zurück zum Profil</button>
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
                Den Account wurde gelöscht und du wirst zum Login weitergeleitet.
            </div>
            <div class="modal-footer">
                <a href="delete_and_logout" class="btn btn-danger mb-2" type="submit" value="button" name="logout" id="logout"><i class="fa-solid fa-right-from-bracket"></i>Ok </a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!-- Col mit Reiter Sachen -->
<div class="col">
    <a href="logout" class="btn btn-danger mb-2" type="submit" value="button" name="logout" id="logout"><i class="fa-solid fa-right-from-bracket"></i>Logout </a>
    <!-- Reihe mit Tabelle  -->
    <div class="row">
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
                <tr>
                    <td><?= isset($user['Username']) ? $user['Username'] : '' ?></td>
                    <td><?= isset($user['EMail']) ? $user['EMail'] : '' ?></td>
                    <td><?php if(isset($user['inProjekt']) && $user['inProjekt'] == 'Y'){$user['state'] = 'checked';} else{$user['state'] = 'unchecked';} ?><?= isset($user['inProjekt']) ? '<input class="form-check-input" type="checkbox"'.$user['state'].' disabled >' : '' ?></td>
                    <td class="text-right">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <br />
            <?= form_open('profil', array('role' => 'form')) ?>
            <p>
            <h3>Daten ändern</h3>
            <div class="form-group">
                <label for="NeuName">Name</label>
                <input type="text" id="username" class="form-control" placeholder="Name" name="username">
                <label for="Passwordold">Passwort</label>
                <input type="password" placeholder="Aktuelles Passwort" class="form-control" id="Passwordold" name="Passwordold">
                <br />
                <?php if ($missingInfos == "missingInfos") {
                    include('missing_Infos.php');
                } ?>
                <label for="NeuDesc">E-Mail</label>
                <input type="text" id="NeuMail" class="form-control" placeholder="Neue E-Mail" name="Email">
            </div>
            <div class="form-group">
                <label for="PasswordNew">Passwort</label>
                <input type="password" placeholder="Neues Passwort" class="form-control" id="PasswordNew" name="PasswordNew">
            </div>
            <label class="my-1 mr-2" for="Project">Projekt zuweisen</label>
            <select class="custom-select my-1 mr-sm-2 mb-3" id="Project">
                <option selected>- ausw&auml;hlen -</option>
                <option value="1">Projekt 1</option>
                <option value="2">Projekt 2</option>
                <option value="3">Projekt 3</option>
            </select>
            <br />
            <button id="btnsubmit" type="submit" class="btn btn-success"><i class="far fa-save"></i>&nbsp;Speichern</button>
            </p>
        </form>
    </div>
</div>
</div>
