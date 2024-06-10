<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Badwords</title>
</head>

<body>
    <h1>Badwords</h1>
    <form action="dati.php" method="GET">
        <input type="text" placeholder="Immetti del testo" name="testo">
        <button type="submit">Invia</button>
    </form>
    <form action="censura.php" method="GET">
        <input type="text" placeholder="Censura una parola" name="testo">
        <button type="submit">Censura</button>
    </form>
</body>

</html>