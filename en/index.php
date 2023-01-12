<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/manual/assets/inc/en/basic.php";
// トップ画像ランダム表示
$imgs = ["bg1", "bg2", "bg3", "bg4"];
$count = count($imgs);
$num = rand(0, $count - 1);
$imgsrc = $imgs[$num];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- info -->
    <title><?= $titleTxt; ?></title>
    <meta name="description" content="<?= $descTxt; ?>">
    <meta name="keywords" content="monster hunter frontier, official online manual, mhf, online game">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?= $img_path . "common/favicon.ico"; ?>">
    <!-- mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon-precomposed" href="<?= $img_path . "common/favicon_sp.png"; ?>">
    <!-- alternate -->
    <!-- <link rel="alternate" href="http://.com/en/" hreflang="en">
  <link rel="alternate" href="http://.com/ja/" hreflang="ja"> -->
    <!-- css -->
    <link href="/manual/assets/css/style.css?t=<?= print date("Ymd", filemtime($_SERVER['DOCUMENT_ROOT'] . $css_path . "style.css")); ?>" rel="stylesheet" type="text/css">
    <!-- js -->
    <script src="<?= $js_path . "jquery-3.6.1.min.js"; ?>" defer></script>
    <script src="<?= $js_path . "js.cookie.min.js"; ?>" defer></script>
    <script src="/manual/assets/js/main.js?t=<?= print date("Ymd", filemtime($_SERVER['DOCUMENT_ROOT'] . $js_path . "main.js")); ?>" defer></script>
    <!-- font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&family=Roboto:wght@400;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700;900&display=swap');
    </style>

</head>

<body>
    <div class="wrapper">
        <header>
            <!-- header -->
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . $inc_path . "en/header.php" ?>
        </header>

        <div class="top_images">
            <img class="top_img" src="/manual/assets/img/common/<?= $imgsrc; ?>.webp" alt="トップ画像">
        </div>

        <div class="bg">
            <main class="main_inner">
                <nav class="side_menu">
                    <!-- menu -->
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . $inc_path . "en/menu.php" ?>
                </nav>

                <article class="contents">
                    <!-- article -->
                    <?php require_once "./top.php" ?>
                </article>
            </main>
        </div>

        <div class="pagetop"></div>

        <footer>
            <!-- footer -->
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . $inc_path . "en/footer.php" ?>
        </footer>
    </div>
</body>

</html>