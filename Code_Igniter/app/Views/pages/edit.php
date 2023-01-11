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
                            <td><?= isset($mitglieder['Username']) ? $mitglieder['Username'] : '' ?></td>
                            <td><?= isset($mitglieder['EMail']) ? $mitglieder['EMail'] : '' ?></td>
                            <td><?php if(isset($mitglieder['inProjekt']) && $mitglieder['inProjekt'] == 'Y'){$mitglieder['state'] = 'checked';} else{$mitglieder['state'] = 'unchecked';} ?><?= isset($mitglieder['inProjekt']) ? '<input class="form-check-input" type="checkbox"'.$mitglieder['state'].'>' : '' ?></td>
                            <td class="text-right">
                                <a href="" class='btn text-dark'><i class='fa-regular fa-pen-to-square'></i></a>
                                <a href="" class='btn text-dark'><i class='fa-regular fa-trash-can'></i></a>
                            </td>
                        </tbody>
                    </table>
                </form>
            </div>
            <!-- Überschrift, Eingabefelder & 2 Knöpfe-->
            <div class="container mt-5 mb-5">
                    <div class="col-8 card ps-0 pe-0">
                        <?= form_open('edit', array('role' => 'form')) ?>
                        <legend class="card-header"> Bearbeiten </legend>
                        <div class="card-body">
                            <div class="form-group pb-2">
                                <label for="username"> Username: </label>
                                <input type="text" class="form-control" id="username" name="username" \>
                            </div>
                            <div class="form-group pb-2">
                                <label for="email"> Email: </label>
                                <input type="email" class="form-control" id="email" name="email" \>
                            </div>
                            <div class="form-group pb-2">
                                <label for="passwort"> Password: </label>
                                <input type="password" class="form-control" id="passwort" name="passwort" \>
                            </div>
                            <button id="btnsubmit" type="submit" class="btn btn-primary"> Daten Ändern </button>
                        </div>
            </form>
        </div>
</div>