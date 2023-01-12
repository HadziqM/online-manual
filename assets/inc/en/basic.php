<?php
$url = $_SERVER["REQUEST_URI"];


//各パス
$manual_path = "/manual/en/";
$img_path = "/manual/assets/img/";
$css_path = "/manual/assets/css/";
$js_path = "/manual/assets/js/";
$inc_path = "/manual/assets/inc/";

// タイトル管理
$defaultManualTitle = "MHF-Z Online Manual";
$defaultTitle = "Rain Server";
$array = [

    // トップページ
    $manual_path => [
        "title" => $defaultManualTitle,
        "desc" => "Official online manual of Monster Hunter Frontier for Rain Server."
    ],

    // アカウント作成手順
    $manual_path . "entry/acccreate/" => [
        "title" => "Account Creation Procedure" . " | " . $defaultManualTitle,
        "desc" => "Procedures for creating an account on the Rain server."
    ],

    // Discordアカウント連携
    $manual_path . "entry/acclink/" => [
        "title" => "Account linking Procedure" . " | " . $defaultManualTitle,
        "desc" => "Procedures for linking an account on the Rain server."
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