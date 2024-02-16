<?php
$B=PHP_INT_MAX;
$A=PHP_INT_MIN;

$C=PHP_INT_SIZE;
$str="PHP Intern";

echo $A ."<br/>";
echo "<br/>";
echo $B ."<br/>";
echo "<br/>";
echo $C ."<br/>";



echo "string length:".strlen($str)."<br/>";
echo "string word count:".str_word_count($str)."<br/>";
echo "string position:".strpos($str,"In")."<br/>";
echo "string padding:".str_pad($str,20,'.',STR_PAD_BOTH)."<br/>";
echo "string replace:".str_replace("Intern","expert", $str)."<br/>";
echo "string shuffle:".str_shuffle($str)."<br/>";
echo "string replace:".str_ireplace("INTERN","expert", $str)."<br/>";
echo "string TRIM:".trim($str,"P")."<br/>";
echo "string left TRIM:".ltrim($str,"PHP")."<br/>";
echo "string right TRIM:".rtrim($str,"rn")."<br/>";
echo "first char.of  string converted into lower case:".lcfirst($str)."<br/>";
echo "first char. of string coverted in upper case:".ucfirst($str)."<br/>";
echo "string revers:".strrev($str)."<br/>";
$har = "my\n name\n is \n harvinder";
echo nl2br($har);
echo $A,$B;
?>
