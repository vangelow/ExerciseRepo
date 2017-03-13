<?php
function toJadenCase($string) 
{
   $arr = explode(' ', $string);
   for ($i=0; $i <count($arr) ; $i++) { 
   	strtoupper($arr[$i][0]);
   }
   $arr = implode(' ', $arr);
   return $arr;
}