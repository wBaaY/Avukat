<?php
$avukatAdi = "Av. Murat Berkay Atmaca";
$telefon = "0546 137 23 06";
$email = "iletisim@mberkayatmacahukuk.com";
$adres = "Kızılay, Ankara";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim | <?php echo $avukatAdi; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1><?php echo $avukatAdi; ?></h1>
    <p>Hukuk ve Danışmanlık Bürosu</p>
</header>
<nav>
    <a href="index.php">Ana Sayfa</a>
    <a href="hakkimizda.php" target="_blank">Hakkımızda</a>
    <a href="hizmetler.php" target="_blank">Hizmetlerimiz</a>
    <a href="sss.php" target="_blank">SSS</a>
    <a href="iletisim.php" target="_blank">İletişim</a>
</nav>
<main>
    <h2>İletişim</h2><p><strong>Telefon:</strong> <?php echo $telefon; ?><br><strong>Email:</strong> <?php echo $email; ?><br><strong>Adres:</strong> <?php echo $adres; ?></p><img class='banner' src='https://images.unsplash.com/photo-1590658268037-6bf12165a8df' alt='İletişim görseli'>
</main>
<footer>
    &copy; <?php echo date("Y"); ?> <?php echo $avukatAdi; ?> - Tüm Hakları Saklıdır.
</footer>
</body>
</html>
