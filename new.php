<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
    <!-- <meta name="viewport" content="width=q, initial-scale=1.0"> -->
    <title>Document</title>
</head>
<body>
    hiii
    <script>
        $(document).ready(function(){
            var data = [ 
            {"Id": 10004, "PageName": "club"}, 
            {"Id": 10040, "PageName": "qaz"}, 
            {"Id": 10059, "PageName": "jjjjjjj"}
            ];

            $.each(data, function(i, item) {
                console.log(data[i].PageName);
            });
            $.each(data , function(key, value) {
            console.log(this.PageName);
            });
            $.each(data, function(i, item) {
                console.log(item.PageName);
            });
    });
    </script>
</body>
</html>