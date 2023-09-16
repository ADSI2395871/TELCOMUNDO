<?php 
if (!defined('CONFIG_INCLUDED')) {
    define('CONFIG_INCLUDED', true);

    if (!isset($_SESSION)) {
        session_start();
    }
   
    if (!isset($_SESSION['ID'])) {
        header("Location: index.php");
        exit();
    }
}
?>
