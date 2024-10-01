<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header"><h1>BIURO PODRÓŻY</h1></div>
    <div id="left"></div><div id="middle"></div><div id="right"></div>
    <div id="footer"></div>
    <?php
            $con = mysqli_connect('localhost', 'root', '', 'podroze');
            $q = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";
            $res = mysqli_query($con, $q);
            while ($row = mysqli_fetch_array($res)) {
                echo "<img src='$row[0]' alt='$row[1]' title='$row[1]'>";
            }
            ?>
</body>
</html>