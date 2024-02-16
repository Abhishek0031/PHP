<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

</head>
<script>
    $(document).ready(function() {
        $("#fm").submit(function(e) {
            //alert('hvchvsdhvsad');
            // return;
            e.preventDefault();
            var name_get = jQuery("#name").val();
            var email_get = jQuery("#id").val();
            var isValid = true;
            var namepattern = /^[a-zA-Z_]+$/;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (name_get === "") {
                jQuery("#spname").text("Name is Required");
                isValid = false;
            } else if (!namepattern.test(name_get)) {
                jQuery("#spname").text("  please enter valid name");
                isValid = false;

            } else {
                jQuery("#spname").text("");

            }


            if (email_get === "") {
                jQuery("#spemail").text("  email is Required");
                isValid = false;
            } else if (!emailPattern.test(email_get)) {
                jQuery("#spemail").text("  please enter valid email");
                isValid = false;

            } else {
                jQuery("#spemail").text("");
            }

            //for insert
            if(isValid==true){
            var data = $("#fm").serializeArray();

            console.log(data);
            $.post("operation.php", data, function(data) {
                // console.log(data);
            });
        }   


            // }


        });

        //for delete
        $("#show").click(function(e) {
            e.preventDefault();
            jQuery("#mydiv").load("operation.php")
        });

        jQuery(".delet").click(function() {
            var data = {
                d_id: jQuery(this).attr("id").slice(3)
            }
             console.log(data);
            $.post("operation.php", data, function(response) {
                // console.log(data);  
                // document.getElementById("div1").innerHTML = response;    

            });


        });
    });
</script>


<body>
    <form id="fm" action="" method="post">
        NAME:
        <input type="text" name="name" id="name" /><span id="spname" style="color: red"></span><br />
        EMAIL:
        <input type="email" name="email" id="id" /><span id="spemail" style="color: red"></span><br />
        <input type="submit" name="sub" id="sub" /><br />
    </form>
    <button id="show">show</button>


    <div id="mydiv"></div>
    <div id="div1"></div>
</body>

</html>