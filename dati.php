<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dati.css">
    <title>Dati ricevuti</title>
</head>

<body>
    <?php
    $testo = $_GET["testo"];
    ?>
    <h1>Dati ricevuti</h1>
    <p>il testo è lungo: </p>
    <p><?php echo strlen($testo) ?> caratteri</p>
</body>

</html>