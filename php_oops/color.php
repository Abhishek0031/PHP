<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "dropdown";
$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

$sel = "SELECT * FROM cities";
$array = mysqli_query($conn, $sel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
</head>
<body>

<div class="tablechange">
    <form id="myForm"> <!-- Add a form element -->
        <label for="td">TD</label>
        <input type="number" name="td" id="td">
        <label for="tr">TR</label>
        <input type="number" name="tr" id="tr">
        <label for="color">COLOR</label>
        <input type="text" name="color" id="color">
        <button type="button" id="submit">Submit</button> <!-- Use type="button" to prevent form submission -->
    </form>
</div>

<table border="1">
    <tr>
        <th>name</th>
        <th>szf</th>
        <th>sdf</th>
        <th>vxvc</th>
        <th>vxvc</th>
    </tr>
    <?php
    $count = 1;
    while ($data = mysqli_fetch_assoc($array)) {
    ?>
    <tr data-row="<?= $count ?>"> <!-- Use "data-" attribute to store additional data -->
        <td><?= $data['id']; ?></td>
        <td><?= $data['ctry_id']; ?></td>
        <td><?= $data['city_name']; ?></td>
        <td><?= $data['created_at']; ?></td>
        <td><?= $data['created_at']; ?></td>
    </tr>
    <?php
    $count++;
    }
    ?>
</table>

<script>
    $(document).ready(function () {
        $('#submit').click(function () {
            var text = $("tr").eq(1).find("td").eq(0).text();
            console.log(text)
            var td = $('#td').val();
            var tr = $('#tr').val();
            var color = $('#color').val();
              // console.log(td);

            // Find the table cell (td) based on the specified column (td) and change its background color
            $('tr[data-row="' + tr + '"] td:nth-child(' + td + ')').css('background-color', color);
        });
    });
</script>
</body>
</html>
