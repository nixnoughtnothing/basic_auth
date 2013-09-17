<?php


    /**
    *ベーシック認証をかける    
    * 
    *@param string $realm       レルム文字列
    *@param string $failed_text 認証失敗時のエラーメッセージ
    */

    function basic_auth($realm = 'Private Page',$failed_text = '認証失敗しました')
    {
        if(!isset($_SERVER['PHP_AUTH_USER'])){

            // キャンセル時の処理
            header('WWW-Authenticate: Basic realm = "'.$realm.'"');
            header('HTTP//1.0 401 Unauthorized');
            die($failed_text);
        }else{

            // ユーザー入力がここに入っている
            $input_user = $_SERVER['PHP_AUTH_USER'];
            $input_pass = $_SERVER['PHP_AUTH_PW'];

            // 入力された「ID」と「パスワード」のセットが存在するか確認
            $flag = true;

            if($flag){

                // 認証成功時
                return '認証成功!';
            }else{

                // 認証失敗時
                header('WWW-Authenticate: Basic realm = "'.$realm.'"');
                header('HTTP//1.0 401 Unauthorized');
                die($failed_text);
            }
        }
    }

    echo basic_auth();