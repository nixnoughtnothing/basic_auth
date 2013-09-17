<?php

    $user = 'admin';
    $pass = 'pass';

    if(!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate:Basic realm = "Private Page"');
        header('HTTP/1.0 401 Unauthorized');
        die('このページを見るには、ログインが必要です。');
    }else if(isset($_SERVER['PHP_AUTH_USER'])){
        if($_SERVER['PHP_AUTH_USER'] != $user || $_SERVER['PHP_AUTH_PW'] != $pass){
            header('WWW-Authenticate:Basic realm = "Private Page"');
        }
        header('HTTP/1.0 401 Unauthorized');
        die('このページを見るには、ログインが必要です。');
    }else{
        echo 'ようこそ！';
    }


