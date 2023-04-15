<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Aczélzivatar halászcsárda</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/Tablazat.css">
    <link rel="stylesheet" href="css/Rendeles.css">
</head>
<body>
<div class="kep">
    <table>
        <thead>
        <tr>
            <th colspan="4" class="Ételek">Ételek</th>
        </tr>
        <tr>
            <th rowspan="2">Étel neve</th>
            <th rowspan="2">Leírás</th>
            <th colspan="2">Ár</th>
        </tr>
        <tr>
            <th>Kicsi</th>
            <th>Nagy</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Halszelet</td>
            <td>Fűszerekkel ízesített hal, krumplipürével és zöldséggel</td>
            <td>2000 Ft</td>
            <td>3000 Ft</td>
        </tr>
        <tr>
            <td>Rántott hal</td>
            <td>Újhagymás-tormás öntettel, rizzsel és salátával</td>
            <td>2500 Ft</td>
            <td>3500 Ft</td>
        </tr>
        <tr>
            <td>Halászlé</td>
            <td>Igazi magyaros halászlé, csipetkével</td>
            <td>1500 Ft</td>
            <td>2500 Ft</td>
        </tr>
        <tr>
            <td>Sült lazac</td>
            <td>Roston sütött lazacfilé, zöldségekkel és fűszeres barna rizzsel</td>
            <td>3500 Ft</td>
            <td>4500 Ft</td>
        </tr>
        <tr>
            <td>Pisztráng filé</td>
            <td>Sült pisztrángfilé, citromos burgonyapürével és zöldséggel</td>
            <td>2800 Ft</td>
            <td>3800 Ft</td>
        </tr>
        <tr>
            <td>Fogas</td>
            <td>Párolt fogasfilé, zöldfűszeres vajjal, zöldségekkel és basmati rizzsel</td>
            <td>3200 Ft</td>
            <td>4200 Ft</td>
        </tr>
        <tr>
            <td>Kacsamáj</td>
            <td>Párolt kacsamáj, hagymás almával és sütőtökös rizottóval</td>
            <td>3500 Ft</td>
            <td>4500 Ft</td>
        </tr>
        <tr>
            <td>Gombafejek</td>
            <td>Rántott gombafejek, burgonyapürével és zöldséggel</td>
            <td>1800 Ft</td>
            <td>2800 Ft</td>
        </tr>
        <tr>
            <td>Rakott krumpli</td>
            <td>Magyaros rakott krumpli, füstölt kolbásszal, savanyúsággal</td>
            <td>2000 Ft</td>
            <td>3000 Ft</td>
        </tr>
        <tr>
            <td>Halpaprikás</td>
            <td>Ízletes halpaprikás, tejszínes galuskával</td>
            <td>2000 Ft</td>
            <td>3000 Ft</td>
        </tr>
        </tbody>
    </table>

    <fieldset>
        <legend>Személyes adatok</legend>
        <div class="markdown prose w-full break-words dark:prose-invert dark">
          <p>Kedves Vendégünk!</p>
            <p>Örömmel tájékoztatjuk, hogy az éttermünk ételkínálatát bővítettük! Az alábbi ételek is kaphatóak az
                éttermünkben:</p>
            <ul>
                <li>Rántott sajt</li>
                <li>Bélszín steak</li>
                <li>Csirkemell sajttal és sonkával töltve</li>
                <li>Gulyásleves</li>
                <li>Töltött káposzta</li>
                <li>Pörkölt (marhahús, sertéshús vagy vegyesen)</li>
            </ul>
            <p>Várjuk szeretettel az éttermünkben!</p></div>
        <label for="full-name">Teljes név:</label>
        <input type="text" id="full-name" name="full-name"> <br><br>
        <label for="email">E-mail cím:</label>
        <input type="email" id="email" name="email"> <br><br>
        <label for="phone-number">Telefonszám:</label>
        <input type="tel" id="phone-number" name="phone-number"> <br><br>
        <label for="delivery-point">Átvétel helyszíne:</label>
        <input type="text" id="delivery-point" name="delivery-point"> <br><br>
        <div>
            <div class="alsoSor">
                Rendelni kívánt étel:
                <label>
                    <select>
                        <option value="Halszelet">Halszelet</option>
                        <option value="Rántott hal" selected>Rántott hal</option>
                        <option value="Halászlé">Halászlé</option>
                        <option value="Sült lazac">Sült lazac</option>
                        <option value="Pisztráng filé">Pisztráng filé</option>
                        <option value="Fogas">Fogas</option>
                        <option value="Kacsamáj">Kacsamáj</option>
                        <option value="Gombafejek">Gombafejek</option>
                        <option value="Rakott krumpli">Rakott krumpli</option>
                        <option value="Halpaprikás">Halpaprikás</option>
                    </select>
                </label><br>
                <label>
                    <br>Fizetés módja:
                    <select>
                        <option>Átutalás</option>
                        <option>Készpénz</option>
                        <option>Bankkártya</option>
                        <option>Csekk</option>
                        <option>Utánvét</option>
                        <option>PayPal</option>
                        <option>SZÉP kártya</option>
                        <option>OTP Simple</option>
                    </select>
                    <br>
                </label>
              <br>
              <input type="reset" value="Beírt értékek törlése" style="padding: 10px">
                <br><br>
                <input type="submit" value="Rendelés">

            </div>
        </div>
    </fieldset>
</div>

<div class="alsoSor">
    <h6 class="csakfont" style="font-size: medium">Elérhetőség:</h6>
    <pre style="font-size: large">
  E-mail: h259147@stud.u-szeged.hu
  Telefon: +36308375338
  Facebook:
  Instagram:
  Twitter:
  Github:
  Discord:
  Coospace:
  </pre>
    Fabbernat & Magyarkebab©
</div>

</body>
</html>
