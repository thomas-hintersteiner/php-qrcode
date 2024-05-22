<?php

use chillerlan\QRCode\QRCode;

    require_once("vendor/autoload.php");

    $url = '';
    
    if (count($_POST) > 0) {
        $url = $_POST['url'] ?? '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP QR-Code</title>
</head>
<body>
    <h1>PHP QR-Code</h1>

    <form action="index.php" method="post">
        <label for="url">URL</label>
        <input type="url" name="url" id="url" required>
        <button type="submit">Generieren</button>
    </form>

    <?php if ($url): ?>
        <div>
            <img src="<?php echo (new QRCode())->render($url) ?>">
        </div>
    <?php endif; ?>

</body>
</html>