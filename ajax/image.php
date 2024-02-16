<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./cdn/css/bootstrap.css">
    <script src="./cdn/js/bootstrap.js"></script>
    <script src="./cdn/js/jQuery.js"></script>
</head>
<body>
    <br/>
    <form action="img.php" id="myform" enctype="multipart/form-data" method="post">
    NAME:
    <input type="text" name="name" id="name"><br/>
    IMAGE:
    <input type="file" name="file" id="file"><br/>
    <input type="submit" name="submit" id="submit">
    </form>
    <script>
        $(document).ready(function(){
            $('#submit').click(function (e) {
                               e.preventDefault();
                            //    var formData = new FormData($('#myForm')[0]);
                            // var formData=$("#myform").serialize();
                            var formData={name:$("#name").val(),
                                file:$("#file").val(),
                            }
                               console.log(formData);
            })
        })
    </script>
</body>
</html>

