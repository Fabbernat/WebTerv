<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Aczélzivatar halászcsárda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/Bejelentkezes.css">
    <link rel="icon" type="image/png" href="img/Kormanykerek-350.png">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('form').on('submit', function (e) {
                e.preventDefault();
                var form = $(this);
                var formData = form.serialize();
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: formData,
                    success: function (response) {
                        if (response.status === 'success') {
                            alert('Sikeres bejelentkezés vagy regisztráció!');
                            // Itt végrehajthatod az adatok titkosítását és tárolását a PHP tömbben
                        } else {
                            alert('Hibás felhasználónév vagy jelszó, vagy a két jelszó nem egyezik meg!');
                        }
                    }
                });
            });
        });

        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            if (email === "" || password === "" || confirmPassword === "") {
                alert("Minden mező kitöltése kötelező!");
                return false;
            }

            if (password !== confirmPassword) {
                alert("A két jelszó nem egyezik meg!");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
<div class="topnav">
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?> href="index.php">Főoldal</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Rendeles_es_foglalas.php') echo 'class="active"'; ?> href="Rendeles_es_foglalas.php">Rendelés, Foglalás</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Szemelyzet.php') echo 'class="active"'; ?> href="Szemelyzet.php">Legénységünk</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Terkep.php') echo 'class="active"'; ?> href="Terkep.php">Térkép</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Tortenetunk.php') echo 'class="active"'; ?> href="Tortenetunk.php">Történetünk</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Vendegkonyv.php') echo 'class="active"'; ?> href="Vendegkonyv.php">Vendégkönyv</a>
    <a <?php if(basename($_SERVER['PHP_SELF']) == 'Bejelentkezes_es_regisztracio.php') echo 'class="active"'; ?>href="Bejelentkezes_es_regisztracio.php" style="float:right">Bejelentkezés</a>
</div>
<div class="zoldhatter">
    <h1 class="zoldhatter">BEJELENTKEZÉS</h1>
    <form action="Bejelentkezes.php" method="POST">
        <label>Felhasználónév: <input type="text" name="felhasznalonev"
                                      value="<?php if (isset($_POST['felhasznalonev'])) echo $_POST['felhasznalonev']; ?>"/></label>
        <br/>
        <label>Jelszó: <input type="password" name="jelszo"/></label> <br/>
    </form>
    <a href="Bejelentkezes.php" class="zoldhatter gomb">BEJELENTKEZÉS</a>
<!--    <iframe class="zoldhatter" src="Bejelentkezes.php" width="100%" height="300" title="BEJELENTKEZÉS"></iframe>-->
    <h1 class="zoldhatter">REGISZTRÁCIÓ</h1>
    <form action="Regisztracio.php" method="POST">
        <label>Felhasználónév: <input type="text" name="felhasznalonev" value="<?php if (isset($_POST['felhasznalonev'])) echo $_POST['felhasznalonev']; ?>"/></label> <br/>
        <label>Jelszó: <input type="password" name="jelszo"/></label> <br/>
        <label>Jelszó ismét: <input type="password" name="jelszo2"/></label> <br/>
        <label>Életkor: <input type="number" name="szuletesiDatum" value="<?php if (isset($_POST['szuletesiDatum'])) echo $_POST['szuletesiDatum']; ?>"/></label> <br/>
        <h3>Nem:</h3>
        <label><input type="radio" name="nem" value="F" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'F') echo 'checked'; ?>/> Férfi</label>
        <label><input type="radio" name="nem" value="N" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'N') echo 'checked'; ?>/> Nő</label>
        </form>
    <a href="Regisztracio.php" class="zoldhatter gomb">REGISZTRÁCIÓ</a>
<!--    <iframe class="zoldhatter" src="Regisztracio.php" width="100%" height="1000" title="REGISZTRÁCIÓ"></iframe>-->
</div>
</body>
</html>

<?php
    if (isset($_POST['register-submit'])) {
        // Regisztráció gombra kattintva végrehajtott műveletek
        $fullName = $_POST['full-name'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phone-number'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Store the user data and hashed password in your database
        // ...
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login-submit'])) {
        // Bejelentkezés gombra kattintva végrehajtott műveletek
        $email = encryptData($_POST['email']);
        $password = encryptData($_POST['password']);
        // Az adatokat tárolhatod egy tömbben vagy adatbázisban, ahol titkosítva vannak eltárolva
        $user = array(
            'email' => $email,
            'password' => $password
        );
        // További műveletek...
    } elseif (isset($_POST['register-submit'])) {
        // Regisztráció gombra kattintva végrehajtott műveletek
        $fullName = encryptData($_POST['full-name']);
        $email = encryptData($_POST['email']);
        $phoneNumber = encryptData($_POST['phone-number']);
        $address = encryptData($_POST['address']);
        $password = encryptData($_POST['password']);
        // Az adatokat tárolhatod egy tömbben vagy adatbázisban, ahol titkosítva vannak eltárolva
        $user = array(
            'fullName' => $fullName,
            'email' => $email,
            'phoneNumber' => $phoneNumber,
            'address' => $address,
            'password' => $password
        );
        // További műveletek...
    }
}

function encryptData($data)
{
    // Itt végezheted el az adatok titkosítását, például használhatsz beépített PHP függvényeket vagy saját titkosítási algoritmust
    // Ebben a példában az adatokat md5 hash függvénnyel titkosítjuk
    $encryptedData = md5($data);
    return $encryptedData;
}

?>
