<?php
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "admin") {
        header("Location: views/v_home_admin.php");
    }else if  ($_SESSION['role'] == "kasir") {
        header("Location: views/v_home_kasir.php");
    }else {
        echo '';
    }
}
?>