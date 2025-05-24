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
    <title>Hizmetlerimiz | <?php echo $avukatAdi; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Banner resmi için boyut ayarı */
        .banner {
            width: 100%;
            max-width: 800px;
            height: auto;
            display: block;
            margin-top: 20px;
        }
    </style>
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
    <h2>Hizmetlerimiz</h2>
    <ul>
        <b><li>Ceza Hukuku</li>
        <li>Aile Hukuku</li>
        <li>İcra ve İflas Hukuku</li>
        <li>Gayrimenkul Hukuku</li>
        <li>İş Hukuku</li>
        <li>Danışmanlık Hizmetleri</li><b>
    </ul>
    <img class="banner" src="hizmetler.jpg" alt="Hizmet görseli">
</main>
<footer>
    &copy; <?php echo date("Y"); ?> <?php echo $avukatAdi; ?> - Tüm Hakları Saklıdır.
</footer>
</body>
</html>
