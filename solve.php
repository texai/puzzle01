<?php

$filename = './pieces/08.txt';

$content = file_get_contents($filename);

echo PHP_EOL.$content;

$arr = explode("\n", $content);

$resarr = [];
foreach($arr as $line){
  if (trim($line)!=''){
    //echo ' > ',$line . ' < '. PHP_EOL;
    $a = array_map(function($s){return ($s=='1'?$s:'0');},str_split($line));
    $resarr[] = $a;
  }
}
var_dump($resarr);






