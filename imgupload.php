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
<div class="col-md-3 card">
        <form id ="image_upload_form" action="#" method="post" enctype="multipart/form-data">
            <div>
            <label for="img_name" class="form-label">Image Name:</label>
            <input type="text" class="form-control" id="img_name" name="img_name">
            </div>
            <div>
            <label for="img" class="form-label">Image:</label>
            <input type="file" class="form-control" id="img" name="img">
            </div>
            <div style="height:100px; width:200px;  border:1px solid black" >
                    <div id="image_view"  style="margin-top:20px; margin-left:50px">
                </div>
            </div>

            <br/> 
            <div>
                <button type="submit" class="btn btn-primary" id="submit" name='submit'>Submit</button>
            </div>    
        </form>
        </div>
</body>
</html>


<script>
$(document).ready(function() {
   
    $('#img').change(function(){
    // console.log('hiii');
    var url = URL.createObjectURL(this.files[0]);
    console.log(url);
    html="<img src='" + url + "' style='height:50px; width:auto; '>";
    $('#image_view').html(html);
});
});
</script>
    
<?php

if(isset($_POST['submit']) && isset($_FILES['img'])){
    $data = imageStore();
    // if(isset($data)){
    //     echo "<pre>";
    //     print_r($data);
    // } else{
    //     print_r($data);
    // }
}   

function imageStore(){

    $file = $_FILES['img'];
    $fileName = $_FILES['img']['name'];
    $fileTmpName = $_FILES['img']['tmp_name'];
    $fileError = $_FILES['img']['error'];
    $fileSize = $_FILES['img']['size'];
    $fileType = $_FILES['img']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){

        if($fileError === 0){

            if($fileSize < 100000000){

                $fileNameNew = $_POST['img_name'].".jpg";

                $fileDestination = "storage/".$fileNameNew;
                function compressImage($source, $destination, $quality) {

                    $info = getimagesize($source);

                    if ($info['mime'] == 'image/jpeg') 
                        $image = imagecreatefromjpeg($source);

                    elseif ($info['mime'] == 'image/gif') 
                        $image = imagecreatefromgif($source);

                    elseif ($info['mime'] == 'image/png') 
                        $image = imagecreatefrompng($source);

                    
                    imagejpeg($image, $destination, $quality);
                    return true;

                }
                $returnData = compressImage($fileTmpName, $fileDestination, 90);
                return $returnData;
            }
}
}
}
?>