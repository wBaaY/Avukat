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
    <title>Sıkça Sorulan Sorular | <?php echo $avukatAdi; ?></title>
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
    <h2>Sıkça Sorulan Sorular</h2><p><strong>Avukatla görüşmek ücretli mi?</strong> İlk görüşme ücretsizdir.<br><strong>Dava süreci ne kadar sürer?</strong> Dava türüne göre değişiklik göstermektedir.<br><strong>Hangi davaları alıyorsunuz?</strong> Ceza, aile, ticaret, icra gibi birçok alanda hizmet sunulmaktadır.</p><img class='banner' src='https://images.unsplash.com/photo-1605379399642-870262d3d051' alt='SSS görseli'>
</main>
<footer>
    &copy; <?php echo date("Y"); ?> <?php echo $avukatAdi; ?> - Tüm Hakları Saklıdır.
</footer>
</body>
</html>
