<?php

    /**
    *実際の処理ページを作成する/basic2.php
    *
    *@author Ryoh Tsukahara <ryoh.t778@gmail.com>
    */

    require_once($_SERVER['DOCUMENT_ROOT'].'/basic_auth/basic_func.php');

    //認証 
    basic_auth();

?>

<!DOCTYPE html>
<html lang='ja'>
    <head>
        <meta charset = "UTF-8">
        <title>Basic認証</title>
    </head>
    <body>
        <h1>Basic認証</h1>
        2ページ目<br/>
        <a href = 'no_auth.php'>認証なしの画像へ</a>  
    </body>
</html>

