<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Fájlfeltöltés</title>
    <meta charset="UTF-8"/>
    <style>
        input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<form action="php/process.php" method="POST" enctype="multipart/form-data">
    <label for="file-upload">Profilkép:</label>
    <!-- Csak képfájlokat szeretnénk engedélyezni a feltöltés során -->
    <input type="file" id="file-upload" name="profile-pic" accept="image/*"/> <br/>
    <input type="submit" name="upload-btn" value="Feltöltés"/>
</form>
</body>
</html>
