<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 card ps-0 pe-0">
            <?php if ($missingAGB == "noagb") {
                include('agb_error.php');
            } ?>
            <?php if ($missingAGB == "noInput") {
                include('noInput_error.php');
            } ?>
            <?= form_open('register', array('role' => 'form')) ?>
            <legend class="card-header"> Registrieren</legend>
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
                    <input type="password" class="form-control" id="password" name="password" \>
                </div>
                <input type="checkbox" class="form-check-input" id="agb" name="AGBs">
                <label class="form-check-label" id="ABGs" for="agb">AGBs und Datenschutzbedingung akzeptieren</label>
                <button id="btnsubmit" type="submit" class="btn btn-primary"> Registrieren</button>
                <a href="login" class="btn btn-info" role="button">Zum Login</a>
            </div>
        </div>
        </form>
    </div>
</div>
</div>