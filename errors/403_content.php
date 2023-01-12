<?php require $_SERVER['DOCUMENT_ROOT'] . "/manual/assets/inc/ja/basic.php" ?>

<!DOCTYPE html>
<html lang="<?= $lang; ?>">

<head prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- info -->
    <title><?= $e403_title; ?></title>
    <meta name="robots" content="noindex,nofollow">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?= $img_path . "common/favicon.ico"; ?>">
    <!-- mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon-precomposed" href="<?= $img_path . "common/favicon_sp.png"; ?>">
    <!-- ogp -->
    <meta property="og:title" content="<?= $e403_title; ?>">
    <meta property="og:image" content="https:/.com/manual/assets/img/common/share.webp">
    <!-- ogp:twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $e403_title; ?>">
    <meta name="twitter:image:src" content="https://.com/manual/assets/img/common/share.webp">
    <!-- css -->
    <link href="/manual/assets/css/style_errors.css?t=<?= print date("Ymd", filemtime($_SERVER['DOCUMENT_ROOT'] . $css_path . "style_errors.css")); ?>" rel="stylesheet" type="text/css">
    <!-- font -->
    <?= $e403_font; ?>
</head>

<body>
    <div class="wrapper">
        <header>
            <figure class="header_logo">
                <a onclick="location.href='/manual/';"></a>
            </figure>
        </header>
        <main class="error_page">
            <section class="main">
                <figure class="kokecat"></figure>
                <h1><?= $e403_h1; ?></h1>
                <p><?= $e403_p; ?></p>
            </section>
        </main>
    </div>
    <footer>
        <div class="footer_bar_contents">
            <figure class="footer_logo">
                <img src="<?= $img_path . "common/rain_footer_tempologo.jpg"; ?>" alt="rain_tempologo">
            </figure>
            <div class="footer_text">
                <p><?= $e403_footer_p; ?></p>
            </div>
        </div>
    </footer>
</body>

</html>