<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "dropdown";
$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($conn) {
    echo "Connection is OK";
} else {
    echo "Failed to connect to the server";
}

$rec = 10           ; // Number of records to display per page

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {    
    $page = 0;
}

$start = $page * $rec;
$sel = "SELECT * FROM cities";
$array_t = mysqli_query($conn, $sel);
$len = mysqli_num_rows($array_t);

$se = "SELECT * FROM cities LIMIT $start, $rec";
$array = mysqli_query($conn, $se);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pagination {
            display: flex;
            list-style: none;
        }
        .pagination li {
            margin: 5px;
        }
        .pagination .active a {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    echo $len;
    $totalPages = ceil($len / $rec);
    $currentPage = $page + 1;
    ?>
    
    
    <ul>
        <?php while ($data = mysqli_fetch_assoc($array)) { ?>
            <li><?php echo $data['city_name']; ?></li>
            <?php } ?>
        </ul>
        <ul class="pagination">
            <?php for ($i = 0; $i < $totalPages; $i++) { ?>
                <div style="border: 1px solid black; margin-left:2px;">
                        <li<?php echo $i == $page ? ' class="active"' : ''; ?>>
                        <a href="pagination.php?page=<?php echo $i; ?>"><?php echo $i + 1; ?></a>
                    </li>
                </div>
            <?php } ?>
        </ul>
</body>
</html>
