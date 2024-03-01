<?php
session_start();
if(!isset($_SESSION["cusid"]))
{
    header("Location: admin.html");
    exit();
}
?>

