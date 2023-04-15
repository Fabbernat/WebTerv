<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Fábián Bernát & Szabó Zalán">
    <meta name="description" content="Ez a halászcsárda weboldala">
    <meta name="keywords" content="étterem, restaurant, halászcsárda, fish soup">
    <title>Aczélzivatar halászcsárda</title>
    <link rel="icon" type="image/png" href="img/Kormanykerek-350.png">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/Szemelyzet.css">
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


<h2 class="header">Személyzetünk</h2>


<h2 class="szoveg">Szakácsaink: </h2>
<div class="row">


    <div class="column"><img class="centerimg" src="img/OlaszSzakacs.png" alt="Evola">
        <hr>
        Érfalvy Gyula <br>
        <p class="magyarazat"> A jó öreg Gyula bácsink, alapítónk és örökös főszakácsunk,
            ugyan 1848-ban született velencében késöbb az olasz egyesülés hatására Magyarországba menekült családjával.
            De nem csak egy magyar nevet hanem mondhatjuk nemzetünk teljes kultúrális esszenciáját is felvette és
            szorosan is
            ragaszkodott hozzá. Kedvenc mondása ez volt: "Kettő dolog ó igen édes nékem, A Tradicó, (ez alatt minden
            bizonnyal
            a
            Tradicionális olasz és magyar gasztronómiát értette) és hazám, Magyarország"
        </p>
    </div>
    <div class="column"><img class="centerimg" src="img/BladeeSzakacs.png" alt="Bladee">
        <hr>
        Jünger "Pengee" Ernő
        <br>
        <p class="magyarazat"> Ernő vagy ahogy csak mi hívjuk pengee lassan már 10 éve szeleteli nálunk a húsokat,
            14 szeres európa- és 8 szoros világ halfiléző bajnok. Nem mellesleg bár törzsvendégeinknek nem kell
            bemutatni
            zenei tehetségét ennek ellenére szeretnénk büszkélkedni, hogy éttermünkben ezt a különleges tálentumát is
            kamatoztatja
            a vendégek és személyzetünk javára, ugyanis Ernő gyakran ad elő hangulatfestő különleges és egyedi
            stílusában.<br>
            DE VIGYÁZAT!!! KÖNNYŰ LEFOLYNI A SZÉKRŐL HA AZ EMBER ELŐSZÖR HALLJA.
        </p>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<div class="row">
    <div class="column"><img class="centerimg" src="img/Finnszak.png" alt="Finnszakacs">
        <hr>
        Pekka Karjalainen
        <br>
        <p class="magyarazat"> Pekka még a 80-as években látogatott el először Magyarországra. Azonnal beleszeretett a
            hideg
            időjáráshoz szokott finn szakácstanonc. Mondhatnók még inkább beleszerett a napfény városának
            gasztronómiájába.
            Neki köszönhetően nagyon különleges finn gasztronómiai fogásokat is kostólhatnak a vendégek.
        </p>
    </div>
    <div class="column"><img class="centerimg" src="img/Ryan%20Gosling.jpg" alt="Bladee">
        <hr>
        Libássy Richárd
        <br>
        <p class="magyarazat"> Ricsit talán senkinek sem kell bemutatnunk. Magyarország többszörösen honorált és talán
            nyugodt szívvel kijelenthetően legjobb szakácsa aki, gyakran színesteket tart ahol különböző kortárs és
            klasszikus
            filmekből
            készült szindarabokat ad elő a vendégeknek akik ezt kitörő és egységes tapsviharral szokták követni.
        </p>
    </div>
</div>
</body>
</html>

