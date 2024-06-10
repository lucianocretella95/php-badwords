<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>

<body>
    <?php $censura = $_GET["testo"]; ?>
    <h1>Censura</h1>
    <p>il testo censurato è:</p>
    <?php
    echo str_replace("testo", "***", $censura); ?>
    <p> <?php echo strlen($censura) ?> caratteri </p>
</body>

</html>