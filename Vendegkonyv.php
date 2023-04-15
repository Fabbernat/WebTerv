<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Aczélzivatar halászcsárda</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/Vendegkonyv.css">
    <link rel="icon" type="image/png" href="img/Kormanykerek-350.png">
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

<h1 class="smaller_header"> ACZÉLZIVATAR HALÁSZCSÁRDA <span class="alcim"> <span class="year"><br>Alapítva: 1888</span></span></h1>
<main>
    <form><label><textarea name="feedback" rows="5" cols="60" maxlength="300"
                           placeholder="Hogy tetszett az étterem? Írja le őszinte véleményét, anonim módon!"></textarea></label><br><br><input
                type="submit" value="Vélemény megosztása"></form>
    <section><h1>VÉLEMÉNYEK:</h1>
        <div class="velemeny">"Fantasztikus élmény volt az Aczélzivatarban! Az ételek nagyon finomak voltak, a
            személyzet pedig nagyon barátságos és segítőkész volt. Biztosan visszatérünk még! - Eszti"
        </div>
        <div class="velemeny">"Szerintem az Aczélzivatar halászcsárda a legjobb étterem a környéken. Az ételek frissek
            és ízletesek, az árak pedig nagyon elfogadhatóak. Azt javaslom, hogy mindenki próbálja ki! - Nagy Árpi"
        </div>
        <div class="velemeny">"Sajnos nem voltam túl elégedett az ételekkel. Bár a személyzet nagyon kedves volt, az
            ételek minősége és íze nem volt olyan jó, mint amire számítottam. - Feri"
        </div>
        <div class="velemeny">"Egyedülálló élményben volt részünk az Aczélzivatarban! A kilátás gyönyörű volt, és az
            ételek fantasztikusak voltak. Azt javaslom, hogy mindenki látogasson el ide legalább egyszer! - Fütty Imre"
        </div>
        <div class="velemeny">"Az Aczélzivatar halás zcsárda nem csak hogy nagyszerű ételt szolgáltat, de igazán
            figyelnek a részletekre is. Az ételek nagyon finomak voltak, a személyzet pedig kiváló volt. Mindenképpen
            ajánlom! Fá - Zoltán"
        </div>
    </section>
</main>
</body>
</html>
