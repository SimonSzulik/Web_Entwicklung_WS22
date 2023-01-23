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
                                <td><?php if(isset($item['inProjekt']) && $item['inProjekt'] == 'Y'){$item['state'] = 'checked';} else{$item['state'] = 'unchecked';} ?><?= isset($item['inProjekt']) ? '<input class="form-check-input" type="checkbox"'.$item['state'].' disabled >' : '' ?></td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>
            </div>
        </div>
 </div>