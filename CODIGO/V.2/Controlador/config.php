<?php 
if (!defined('CONFIG_INCLUDED')) {
    define('CONFIG_INCLUDED', true);
   
    session_start();
    if (!isset($_SESSION['ID'])) {
        header("Location: index.php");
        exit();
    }
}
?>