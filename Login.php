<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head mit Imports und Titel -->
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>
<!-- Oberster Div Container mit Text -->
<div class="container-fluid">
    <div class="text-center bg-light mt-3 mb-3 p-5">
        <h1>Aufgabenplaner: Login</h1>
    </div>
    <!-- Oberster Row Container -->
    <div class="row pt-3">

        <!-- Col -->
        <div class="col-lg-3 p-3"></div>

        <div class="col">

            <!-- Row -->
            <div class="row">

                <!-- Login -->
                <div class="col p-3">

                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-Mail Adresse</label>
                            <input type="email" class="form-control" id="email" name="email" tabindex="1" placeholder="E-Mail Adresse eingeben">
                        </div>
                        <div class="mb-3">
                            <label for="passwd" class="form-label">Passwort</label>
                            <input type="password" class="form-control" id="passwd" name="passwd" tabindex="2" placeholder="Passwort">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="agb" name="agb">
                            <label class="form-check-label" for="agb">AGBs und Datenschutzbedingung akzeptieren</label>
                        </div>
                        <button type="submit" class="btn btn-primary" id="loginSubmit" name="loginSubmit">Einloggen</button>
                    </form>

                    <p>
                        Noch nicht registriert? <a href="" style="text-decoration: none">Registrierung</a>
                    </p>

                    <p>
                        Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="index.php" style="text-decoration: none">Überspringen</a>
                    </p>

                </div>

            </div>
        </div>
        <div class="col-lg-3 p-3"></div>
    </div>
</div>
</body>
</html>