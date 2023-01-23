<div class="row">
    <?php if (isset($_SESSION['registriert'])){
        include('erfolgereich_registriert.php');
        unset($_SESSION['registriert']);
    } ?>
    <div class="col-md-3"></div>
    <div id="hauptkomponente" class="col-md-6">

        <?= form_open('', array('role' => 'form')) ?>
        <legend class="card-header">Login</legend>
        <div class="card-body">
            <div class="form-group">
                <label for="username">Benutzername</label>
                <input type="text" class="form-control <?php if(isset($error['username'])){ echo 'is-invalid';} ?>" id="username" name="username" />
                <div class="invalid-feedback">
                    <?= (isset($error['username']))?$error['username']:'' ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Passwort</label>
                <input type="password" class="form-control <?php if(isset($error['password'])){ echo 'is-invalid';} ?>" id="password" name="password" />
                <div class="invalid-feedback">
                    <?= (isset($error['password']))?$error['password']:'' ?>
                </div>
            </div>
            <br />
            <button id="btnsubmit" type="submit" class="btn btn-primary">Einloggen</button>
            <p>
                Noch nicht registriert ? <a href="register" > Registrierung </a>
            </p>
        </div>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>