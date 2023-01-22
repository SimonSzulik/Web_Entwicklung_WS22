 <!-- Col mit Reiter Sachen -->
        <div class="col">
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
                        <?php if (isset($mitglieder)): foreach ($mitglieder as $item): ?>
                            <tr>
                                <td><?= isset($item['Username']) ? $item['Username'] : '' ?></td>
                                <td><?= isset($item['EMail']) ? $item['EMail'] : '' ?></td>
                                <td><?php if(isset($item['inProjekt']) && $item['inProjekt'] == 'Y'){$item['state'] = 'checked';} else{$item['state'] = 'unchecked';} ?><?= isset($item['inProjekt']) ? '<input class="form-check-input" type="checkbox"'.$item['state'].'>' : '' ?></td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-link"><i class="far fa-edit"></i></button>
                                    <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    <br />
                <form>
                    <p>
                    <h3>Bearbeiten/Erstellen</h3>
                    <div class="form-group">
                        <label for="NeuName">Name</label>
                        <input type="text" id="NeuName" class="form-control" placeholder="Name"><br />
                        <label for="NeuDesc">E-Mail</label>
                        <input type="text" id="NeuMail" class="form-control" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Passwort</label>
                        <input type="password" placeholder="Passwort" class="form-control" id="InputPassword1">
                    </div>
                    <label class="my-1 mr-2" for="Project">Projekt zuweisen</label>
                    <select class="custom-select my-1 mr-sm-2 mb-3" id="Project">
                        <option selected>- ausw&auml;hlen -</option>
                        <option value="1">Projekt 1</option>
                        <option value="2">Projekt 2</option>
                        <option value="3">Projekt 3</option>
                    </select><br />
                    <button type="submit" class="btn btn-primary my-1">Speichern</button> &nbsp;
                    <button type="submit" class="btn btn-info my-1">Reset</button>
                    </p>
                </form>

            </div>
        </div>
 </div>