<html>
<head>
    <title>Bilangan Prima</title>
</head>
<body>

<h2>Finding the First 100 Prime Numbers</h2>

<?php
function prima($i) {
    if ($i < 2) {
        return false;
    }

    for ($n = 2; $n < $i; $n++) {
        if ($i % $n == 0) {
            return false;
        }
    }

    return true;
}

$i = 2;
$count = 0;

while ($i <= 100) {
    if (prima($i)) {
        echo "$i is a prime number<br>";
        $count = $count + 1;
    }

    $i = $i + 1;
}
?>

</body>
</html>