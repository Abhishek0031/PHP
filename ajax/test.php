<?php 
if(isset($_POST['submit'])){
    print_r($_POST);
}

?>


<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<h2>HTML Forms</h2>

<form action="" id='Myform' method='post'>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value=""><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>
    <input type="submit" name="submit" value="Submit" id='submitbtn'>
</form> 

<script>
    $(document).ready(function(){
        $('#submitbtn').click(function(e){
            e.preventDefault();
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var checkError = 0;
            if(fname == ''){
                $('#fname').css('border','1px solid red');
                checkError += 1;
            } else {
                $('#fname').css('border','');
            }
            if(lname == ''){
                $('#lname').css('border','1px solid red');
                checkError += 1;
            } else {
                $('#lname').css('border','');
            }
            if(checkError == 0){
                window.location.href=window.location.href;
                // $('#Myform').submit();
            }
        });
    });
</script>

</body>
</html>


