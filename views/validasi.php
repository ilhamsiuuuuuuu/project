<?php
error_reporting(E_ALL ^ E_NOTICE);
include_once '../controllers/c_login.php';

if ($_SESSION['role'] == "admin") {
    echo "";

}elseif ($_SESSION['role'] == "kasir"){
    echo "";

}else {
    header("location: ../index.php");
}
?>