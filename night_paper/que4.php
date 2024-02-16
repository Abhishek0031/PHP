<?php
$str="program";

echo "array(";
for($i=0;$i<strlen($str);++$i)
{
  echo " [$i] => ".($str[$i]);
}
echo")";


?>