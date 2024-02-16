<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
</head>
<body>
    
</body>
<script>
    
    function init(){
        ddd = Date();
        function namepr(){
            console.log(ddd);
        }
        namepr();
    }
    init();
</script>
</html>

<?php
    $directory = __Dir__;
    $files = scandir($directory);
    foreach ($files as $file) {
        $file = strtolower($file);
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if($extension == 'php'){
            $data = basename($file,'.php');
          echo ucfirst($data).'<br>';
        }
    }
?>