<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/manual/assets/inc/language_check.php";

// 転送設定
if (isset($_COOKIE["lang"])) {
    if ($_COOKIE["lang"] === "ja") { //値にjaが入ってる時
        header("Location: ./ja"); //日本語サイトへ
    } else { //値にja以外が入ってる時
        header("Location: ./en"); //英語サイトへ
    }
} else { //クッキーに値がない（言語を選択していない）時、
    if ($result === 'ja') { //ブラウザー言語日本語の時
        header("Location: ./ja"); //日本語サイトへ
    } else { //ブラウザー言語日本語以外の時
        header("Location: ./en"); //英語サイトへ
    }
}
