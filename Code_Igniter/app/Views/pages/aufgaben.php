 <!-- Col mit Reiter Sachen -->
        <div class="col">
            <!-- Reihe mit Tabelle  -->
            <a href="newAufgabe" class="btn btn-primary mb-2" type="submit" value="button" name="btnNeu" id="btnNeu"><i
                        class="fas fa-plus-square"></i>&nbsp;Neu</a>
            <div class="row">
                <!-- Form -->
                <form class="form-group">
                    <!-- Tabelle -->
                    <table class="table table-hover">
                        <thead>
                        <tr class="table-light">
                            <th scope="col">AufgabenId</th>
                            <th scope="col">Aufgabenbezeichnung</th>
                            <th scope="col">Fällig</th>
                            <th scope="col">Reiter</th>
                            <th scope="col">Ersteller</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <!-- Inhalt der Tabelle mit Hilfe von Array -->
                        <tbody>
                        <?php if (isset($aufgaben)): foreach ($aufgaben as $item): ?>
                            <tr>
                                <td><?= isset($item['Id']) ? $item['Id'] : '' ?></td>
                                <td><?= isset($item['Name']) ? $item['Name'] : '' ?></td>
                                <td><?= isset($item['Fälligkeitsdatum']) ? $item['Fälligkeitsdatum'] : '' ?></td>
                                <td>
                                    <?php foreach($reiter as $reit): ?>
                                        <?php
                                        if($item['ReiterId'] == $reit['Id']){
                                            echo($reit['Name']);
                                        }?>
                                    <?php endforeach;?>
                                </td>
                                <td>
                                    <?php foreach($alleUser as $user): ?>
                                        <?php
                                            if($item['ErstellerId'] == $user['Id']){
                                            echo($user['Username']);}
                                        ?>
                                    <?php endforeach;?>
                                </td>
                                <td class="text-right">
                                    <?= form_open('EditAufgaben', array('role' => 'form')) ?>
                                    <button type="submit" id="editbutton" name="editbutton" class="btn btn-link" ><i class="far fa-edit"></i></button>
                                    <input type="hidden" id="id" name="id" value=<?=$item['Id']?>>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>
            </div>
        </div>
 <!-- diese beiden divs kommen aus dem header und werden hier geschlossen -->
 </div>
</div>