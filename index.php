<?php
header("Content-type:text/html;charset=utf-8"); 
include "/php/yuming.php";
//print_r($yumig);exit;
$file = "php/".$yuming."/index.htm";
if(file_exists($file)){
include $file;
}else{
include '300.htm';
}
?>
