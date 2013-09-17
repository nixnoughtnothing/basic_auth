<?php

    /**
    *実際の処理ページを作成する
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
    </body>
    
</html>

