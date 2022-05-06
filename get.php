<?php
/**
 * Generate QR Code
 */

include_once "./lib/qrlib.php";
$param = $_GET['id']; // remember to sanitize that - it is user input!
ob_start("callback");

$text = $_GET['text'];

$debugLog = ob_get_contents();
ob_end_clean();
QRcode::png($text);