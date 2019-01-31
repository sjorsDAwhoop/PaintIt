<?php
//werk niet op Chrome wel op explorer Edge
// header("Content-Type: application/json; charset=UTF-8");
//  $control= $_POST["data"];
    $control= $_GET["data"];
   	 $filePath = "read.json";
   	 $file = fopen($filePath, "w") or die("can't open file");
   	 fwrite($file, $control);
   	 fclose($file);
?>
