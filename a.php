#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/linux.words') as $line){
    $pos=strpos($line,'abc');
    if ($pos !== false){
     echo $line;
    }
    //関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
  } 
?>