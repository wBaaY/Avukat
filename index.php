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
    <title>Ana Sayfa | <?php echo $avukatAdi; ?></title>
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
    <h2>Hoş Geldiniz</h2><p>
<b>Av. Murat Berkay Atmaca olarak, müvekkillerimize ceza hukuku, aile hukuku, ticaret hukuku başta olmak üzere pek çok hukuk alanında kapsamlı ve profesyonel destek sağlamaktayım. Her davayı titizlikle ele alıyor, adaletin sağlanması için en etkili çözümleri sunmayı amaçlıyorum.

Müvekkillerimin haklarını korumak ve hukuki süreçlerde en doğru yönlendirmeyi yapmak, benim için en büyük önceliktir. Hukuk alanındaki güncel gelişmeleri yakından takip ederek, her zaman yenilikçi ve güvenilir bir hizmet sunmayı taahhüt ederim.<b>

Siz değerli müvekkillerimizin yanında olmak, haklarınızı savunmak ve güveninizi kazanmak için buradayım.</p><img class="banner" src="https://images.unsplash.com/photo-1555374018-13a8994ab246" alt="avukatlık görseli">
</main>
<footer>
    &copy; <?php echo date("Y"); ?> <?php echo $avukatAdi; ?> - Tüm Hakları Saklıdır.
</footer>
</body>
</html>
