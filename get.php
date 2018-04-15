<?php
$IP = $_SERVER['REMOTE_ADDR'];
$ALL = "IP: ".$IP.   "    |Date: "  .date("d/m/Y").      "    |Hour:"  .date("H:i:s   a");
$FP = fopen("received.txt", "a");
fwrite($FP, $ALL);
fclose($FP);
?>
