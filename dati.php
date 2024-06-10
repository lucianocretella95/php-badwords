<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dati.css">
    <title>Dati ricevuti</title>
</head>

<body>
    <h1>Dati ricevuti</h1>

    <?php
    $testo = $_GET["testo"];
    echo "<p>" . $testo . "</p";
    $caratteri = $_GET["numero"];
    ?>
</body>

</html>