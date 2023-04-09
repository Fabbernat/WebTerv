<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Fábián Bernát & Szabó Zalán">
  <meta name="description" content="Ez a halászcsárda weboldala">
  <meta name="keywords" content="étterem, restaurant, halászcsárda, fish soup">
  <title>Aczélzivatar halászcsárda</title>
  <link rel="icon" type="image/png" href="img/Kormanykerek-350.png">
  <link rel="stylesheet" href="css/Rendeles_es_foglalas.css">
  <style>

    @font-face {
      font-family: special-elite;
      src: url('fonts/special-elite.regular.ttf');
    }

    /* Itt egy írógép szerű fontot adok hozzá*/

    body {
        background-image: url("img/hatterkep2.jpg");
        /* Háttérkép parallaxis effekt, nem tudom hogy van magyarul xdd*/
      min-height: 1200px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }


    .header {
      padding: 22px; /* padding, nem tudom hogy hívják magyarul */
      text-align: center; /* középre igazít */
      background: #f3e5ab; /* gyönyörűséges elefántcsont szín háttér */
      color: #5e4a32; /* text szövege */
      font-family: special-elite, sans-serif; /*menő irógép font lsd: css */
      font-size: 88px;
      font-weight: 900;
    }

    .szoveg {
      padding: 22px; /* padding, nem tudom hogy hívják magyarul */
      text-align: left; /* középre igazít */
      background: #f3e5ab; /* gyönyörűséges elefántcsont szín háttér */
      color: #5e4a32; /* text szövege */
      font-family: Helvetica, sans-serif; /*menő irógép font lsd: css */
      font-size: 16px;
      font-weight: 900;
    }

    .header2 {
      padding: 22px; /* padding, nem tudom hogy hívják magyarul */
      text-align: center; /* középre igazít */
      background: #f3e5ab; /* gyönyörűséges elefántcsont szín háttér */
      color: #5e4a32; /* text szövege */
      font-family: special-elite, sans-serif; /*menő irógép font lsd: css */
      font-size: 32px;
      font-weight: 400;
    }


    /*Innentől van a navigációs menű css-e: */
    /*Innentől van a navigációs menű css-e: */
    .topnav {
      position: fixed;
      z-index: 100;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #cdba96;
      overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
      float: left;
      color: #50545C;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: #d0f0c0;
      color: #9966cc;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
      background-color: #fff8c9;
      color: #483c32;
    }

    .row {
      display: flex;
      background: #f3e5ab; /* gyönyörűséges elefántcsont szín háttér */
      color: #5e4a32; /* text szövege */
    }

    /* Create two equal columns that sits next to each other */
    .column {
      text-align: center; /* középre igazít */
      background: #f3e5ab; /* gyönyörűséges elefántcsont szín háttér */
      color: #5e4a32; /* text szövege */
      font-family: "Times New Roman", sans-serif; /*menő írógép font lsd: css */
      font-size: 32px;
      font-weight: 900;
      flex: 50%;
      padding: 10px;
      height: 800px; /* Should be removed. Only for demonstration */
    }

    .centerimg {
      /*position: center;*/
      display: inline-block;
      margin: 10px;
      width: 50%;
    }

    .magyarazat {
      margin: 10px;
      padding: 10px;
      z-index: 1;
      position: relative;
      display: flex;
      background: #cdba96;
      text-align: justify;
      font-family: "helvetica", sans-serif; /*menő irógép font lsd: css */
      font-size: 14px;
      /*height: available;*/
    }
  </style>

</head>

<body>
<div class="topnav">
  <a href="index.php">Főoldal</a>
  <a href="Rendeles_es_foglalas.php">Rendelés, Foglalás</a>
  <a class="active" href="Szemelyzet.php">Legénységünk</a>
  <a href="Terkep.php">Térkép</a>
  <a href="Tortenetunk.php">Történetünk</a>
  <a href="Vendegkonyv.php">Vendégkönyv</a>
  <a href="Bejelentkezes.php" style="float:right">Bejelentkezés</a>
</div>

<h2 class="header">Személyzetünk</h2>


<h2 class="szoveg">Szakácsaink: </h2>
<div class="row">


  <div class="column"><img class="centerimg" src="img/OlaszSzakacs.png" alt="Evola">
    <hr>
    Érfalvy Gyula <br>
    <p class="magyarazat"> A jó öreg Gyula bácsink, alapítónk és örökös főszakácsunk,
      ugyan 1848-ban született velencében késöbb az olasz egyesülés hatására Magyarországba menekült családjával.
      De nem csak egy magyar nevet hanem mondhatjuk nemzetünk teljes kultúrális esszenciáját is felvette és szorosan is
      ragaszkodott hozzá. Kedvenc mondása ez volt: "Kettő dolog ó igen édes nékem, A Tradicó, (ez alatt minden bizonnyal
      a
      Tradicionális olasz és magyar gasztronómiát értette) és hazám, Magyarország"
    </p>
  </div>
  <div class="column"><img class="centerimg" src="img/BladeeSzakacs.png" alt="Bladee">
    <hr>
    Jünger "Pengee" Ernő
    <br>
    <p class="magyarazat"> Ernő vagy ahogy csak mi hívjuk pengee lassan már 10 éve szeleteli nálunk a húsokat,
      14 szeres európa- és 8 szoros világ halfiléző bajnok. Nem mellesleg bár törzsvendégeinknek nem kell bemutatni
      zenei tehetségét ennek ellenére szeretnénk büszkélkedni, hogy éttermünkben ezt a különleges tálentumát is
      kamatoztatja
      a vendégek és személyzetünk javára, ugyanis Ernő gyakran ad elő hangulatfestő különleges és egyedi stílusában.<br>
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
    <p class="magyarazat"> Pekka még a 80-as években látogatott el először Magyarországra. Azonnal beleszeretett a hideg
      időjáráshoz szokott finn szakácstanonc. Mondhatnók még inkább beleszerett a napfény városának gasztronómiájába.
      Neki köszönhetően nagyon különleges finn gasztronómiai fogásokat is kostólhatnak a vendégek.
    </p>
  </div>
  <div class="column"><img class="centerimg" src="img/Ryan%20Gosling.jpg" alt="Bladee">
    <hr>
    Libássy Richárd
    <br>
    <p class="magyarazat"> Ricsit talán senkinek sem kell bemutatnunk. Magyarország többszörösen honorált és talán
      nyugodt szívvel kijelenthetően legjobb szakácsa aki, gyakran színesteket tart ahol különböző kortárs és klasszikus
      filmekből
      készült szindarabokat ad elő a vendégeknek akik ezt kitörő és egységes tapsviharral szokták követni.
    </p>
  </div>
</div>
</body>
</html>

