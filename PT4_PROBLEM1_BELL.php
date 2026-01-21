<!DOCTYPE html>
<html>
    <head>
        <title> Divisible Numbers </title>
        <link rel="stylesheet" href="/SS3_Activities/style.css">
</head>
<body>
    <div class="container">
<?php
$i = 1;

$div3Only = 0;
$div5Only = 0;
$divBoth = 0;

while ($i<=50)
    {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "$i - Divisible by both<br>";
            $divBoth++;
            }

            elseif ($i % 3 == 0) {
                echo "$i - Divisible by 3 only<br>";
            $div3Only++;
            }
                
            elseif ($i % 5 == 0) {
                echo "$i - Divisible by 5 only<br>";
            $div5Only++;
            }
        $i++;
    }
    echo "<hr>";

    echo "Divisible by 3 only: $div3Only<br>";
    echo "Divisible by 5 only: $div5Only<br>";
    echo "Divisible by both: $divBoth<br>";

    ?>
    </div>
</body>
</html>