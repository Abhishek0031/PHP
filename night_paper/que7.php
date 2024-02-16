<?php
error_reporting(0);
$a=[1,2,3,4,5];
$count=0;
for($i=0;$a[$i]!=NULL;++$i)
{ global $count;
    $count++;
}

for($i=$count;$i>=0;--$i)
{ echo $a[$i]."&nbsp";
}

