<?php


define('NAMA', 'dwi');
echo NAMA;
echo "<br>";


const UMUR = 32;
echo UMUR;
echo "<br>";


class Coba {
  
    const NAMA = 'dwi';
}


echo Coba::NAMA;
echo "<br>";
echo "<br>";



echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";


function Coba(){
    return __FUNCTION__;
}