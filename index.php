<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>

table {
    border-collapse: collapse;
    border: 1px solid black;
}
th,td {
    border: 1px solid black;
}

    </style>
</head>
<body>

<table>
    <?php
    for($i = 1; $i <= 9; $i++){
        for ($j = 1; $j <= 9; $j++) {
            echo '<td>'.$i * $j.'</td>';
        }
        echo '</tr>';
    }
    ?>

</table>



</body>
</html>