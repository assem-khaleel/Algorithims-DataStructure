<?php
// compare between two strings if the have th same characters when sort them
function is_anagram($pharse1,$pharse2){
  $status = false;
  if($pharse1 && $pharse2){
   $pharse1=strtolower(str_replace(" ","", $pharse1));
   $pharse2=strtolower(str_replace(" ","", $pharse2));
   $pharse1 = str_split($pharse1);
   $pharse2 = str_split($pharse2);
   sort($pharse1);
   sort($pharse2);
   if($pharse1 === $pharse2){
   $status = true;
   }
  }
  return $status;
}
    ECHO is_anagram('Education', 'ducatione');

?>

