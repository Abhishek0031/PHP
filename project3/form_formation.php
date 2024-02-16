<?php


?>



<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="output.php?ty=<?php echo 'add'?>" method='post'>
       <B> ENTER FIRST NO.:-<B> <BR/>
        <input type="number" name="f1"><BR/>
       <B> ENTER SECOND NO.:- <B><BR/>
        <input type="number" name="f2"><BR/>
        <input type="submit" name="submit"value=add><br/>
        
    </form>


    <form action ="output.php?ty=<?php echo 'fact'?>" method='post'>
    <BR/><BR/>  
    <B> ENTER NO. FOR FACTORIAL:-<B> <BR/>
        <input type="number" name="f1"><BR/>
       
        <input type="submit" name="FACTORIAL"value=FACTORIAL><br/>
        
    </form>


    <form action ="output.php?ty=<?php echo 'PATT'?>" method='post'>
    <BR/><BR/>  
    <B> ENTER YOUR NO. FOR CREATE PATTERN:-<B> <BR/>
        <input type="number" name="f1"><BR/>
       
        <input type="submit" name="CREATE"value=CREATE><br/>
        
    </form>
</body>
</html>

