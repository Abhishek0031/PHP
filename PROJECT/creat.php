    <?php
    error_reporting(0);
    $HOSTNAME="localhost";
    $USERNAME="root";
    $PASSWORD="";
    $DATABASE="shinedezine";
    $conn=mysqli_connect($HOSTNAME,$USERNAME,"");
    $sql="CREATE DATABASE shinedezine";
    //CREATE DATABASE
    mysqli_query($conn,$sql);

    $con=mysqli_connect($HOSTNAME,$USERNAME,"",$DATABASE);
    $sq="CREATE TABLE detail
    (
        namee varchar(30),
        email varchar(30) ,
        age INTEGER
    )";


    //CREATE TABLE
    mysqli_query($con,$sq);    //For run the sql query use( mysqli_query())

    ?>
