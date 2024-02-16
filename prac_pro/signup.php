<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../test _cdns/cdn/css/bootstrap.css">
    <script src="../../test _cdns/cdn/js/bootstrap.js"></script>
    <script src="../../test _cdns/cdn/js/jQuery.js"></script>
    <style>
            body {
         background-color: antiquewhite;
        }
    </style>
</head>
<body>

    
     
     <!-- <form action="#" method="post">
     <button type="submit" name="logout">logout</button>
     </form> -->
        <div class="container mt-3">
            <div class="row">
                <form class="col-sm-3" id="myForm" method="post" action="signup_php.php" enctype="multipart/form-data">
                    <h3 class="text-center p-2" style="color:chocolate;">
                        Sign Up
                    </h3>
                    <div>
                        <label for="nameid" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nameid" placeholder="Name*" name="name">
                    </div>
                    <div>
                        <label for="emailid" class="form-label">Email</label>
                        <input type="text" class="form-control" id="emailid" placeholder="Email*" name="email">
                    </div>
                    <div>
                        <label for="phid" class="form-label">phno.</label>
                        <input type="text" class="form-control" id="phid" placeholder="phno*" name="phno">
                    </div>
                    <div>
                        <label for="passwordid" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordid" placeholder="Password*" name="password" >
                    </div>
                    <div>
                        <label for="country" class="form-label">country</label>
                        <input type="text" class="form-control" id="countryid" placeholder="country*" name="country">
                    </div>
                    <br>
                    <div>
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="stateid" placeholder="state*" name="state" >
                    </div>
                    <div>
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="cityid" placeholder="city*" name="city">
                    </div>
                    <div style="height:50px;">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" id="image" placeholder="image*" name="image">
                    </div>
                    <div id="d2" class='mt-5'>
                        <button type="submit" class="btn btn-primary mt-3"  id="btnadd" name="submit">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <script>
            jQuery(document).ready(function(){
                jQuery("#btnadd").click(function(e){
                    e.preventDefault(); 
                    // console.log("hiiii");
                    ht=$('#myForm').serialize();

                    console.log(ht);
                    $.ajax({
                       url:"signup_php.php",
                       method:'POST',
                       data:ht, // serializes the form's elements.
                    //    dataType:"json",   
                       success : function (response) {
                        // console.log("in console");
                        console.log(response);
                       },

                    })
                })
            })
        </script>
</body>
</html>