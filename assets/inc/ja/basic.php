<?php
$url = $_SERVER["REQUEST_URI"];


//各パス
$manual_path = "/manual/ja/";
$img_path = "/manual/assets/img/";
$css_path = "/manual/assets/css/";
$js_path = "/manual/assets/js/";
$inc_path = "/manual/assets/inc/";

// タイトル管理
$defaultManualTitle = "MHF-Z オンラインマニュアル";
$defaultTitle = "Rain Server";
$array = [

    // トップページ
    $manual_path => [
        "title" => $defaultManualTitle,
        "desc" => "Rain Server版モンスターハンターフロンティアの公式オンラインマニュアル"
    ],

    // アカウント作成手順
    $manual_path . "entry/acccreate/" => [
        "title" => "アカウント作成手順" . " | " . $defaultManualTitle,
        "desc" => "Rainサーバーにおけるアカウントの作成手順をご紹介します。"
    ],

    // Discordアカウント連携
    $manual_path . "entry/acclink/" => [
        "title" => "アカウント連携手順" . " | " . $defaultManualTitle,
        "desc" => "Rainサーバーにおけるアカウントの連携手順についてご紹介します。"
    ],
];

// 各ページ処理
foreach ($array as $key => $value) {
    if ($url === $key) {
        $titleTxt = $value["title"];
        $descTxt = $value["desc"];
        break;
    }
};
