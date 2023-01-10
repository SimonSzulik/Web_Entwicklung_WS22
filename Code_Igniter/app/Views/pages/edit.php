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
                        <?php if (isset($mitglieder)): foreach ($mitglieder as $item): ?>
                            <tr>
                                <td><?= isset($item['Username']) ? $item['Username'] : '' ?></td>
                                <td><?= isset($item['EMail']) ? $item['EMail'] : '' ?></td>
                                <td><?php if(isset($item['inProjekt']) && $item['inProjekt'] == 'Y'){$item['state'] = 'checked';} else{$item['state'] = 'unchecked';} ?><?= isset($item['inProjekt']) ? '<input class="form-check-input" type="checkbox"'.$item['state'].'>' : '' ?></td>
                                <td class="text-right">
                                    <a href="edit" class='btn text-dark'><i class='fa-regular fa-pen-to-square'></i></a>
                                    <a href="" class='btn text-dark'><i class='fa-regular fa-trash-can'></i></a>
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
 <!-- diese beiden divs kommen aus dem header und werden hier geschlossen -->
 </div>
</div>