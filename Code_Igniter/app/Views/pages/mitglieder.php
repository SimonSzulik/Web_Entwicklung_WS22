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
                                    <?php
                                    $mitgliedInfos = $_SESSION['mitgliedInfos'][0];
                                    $helper = "";
                                    if ($mitgliedInfos['Id'] == $item['Id']) {
                                        $helper = $item['Id'];
                                    }
                                    ?>
                                    <a href="<?=$helper?>" class='btn text-dark'><i class='fa-regular fa-pen-to-square'></i></a>
                                    <a href="<?=$helper?>" class='btn text-dark'><i class='fa-regular fa-trash-can'></i></a>
                                </td>
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
 <!-- diese beiden divs kommen aus dem header und werden hier geschlossen -->
 </div>
</div>