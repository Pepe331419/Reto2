<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/normalize.css">
    <title><?php echo $titulo; ?></title>
    <?php if (!empty($linkJS)) echo "<script src='static/js/{$linkJS}.js'></script>"; ?>
    <script src="static/js/header.js"></script>
</head>