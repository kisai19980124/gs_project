<?php
function db_conn(){
    try {
        //$db_name = "gsacademy-ki_unit1";    //データベース名
        //$db_id   = "gsacademy-ki";      //アカウント名
        //$db_pw   = "Kisai19980124-";          //パスワード：XAMPPはパスワード無し or MAMPはパスワード”root”に修正してください。
        //$db_host = "mysql661.db.sakura.ne.jp"; //DBホスト
        $db_name = "gsacademy-ki_unit1";    //データベース名
        $db_id   = "root";      //アカウント名
        $db_pw   = "";      //パスワード
        $db_host = "localhost"; //DBホスト
        return new PDO('mysql:dbname='.$db_name.'; charset=utf8; host='.$db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
    }
}

function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}
