<?php
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

    <script src="js/qrcode.min.js"></script>
</head>
<body>
    <h1>PHP QR-Code</h1>

    <form action="index.php" method="post">
        <label for="url">URL</label>
        <input type="url" name="url" id="url" required>
        <button type="submit">Generieren</button>
    </form>

    <?php if ($url): ?>
        <div id="qrcode"></div>
        <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "<?php echo $url; ?>",
            width: 256,
            height: 256,
            colorDark : "#fff",
            colorLight : "cornflowerblue",
            correctLevel : QRCode.CorrectLevel.H
        });
        </script>
    <?php endif; ?>

</body>
</html>
