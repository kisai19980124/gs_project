<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
 }

function redirect($file_name){
    header("Location: ". $file_name);
    exit();
}
function sschk(){
    if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id() ){
        exit("Login Error");
    }else{
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
    }
}
?>