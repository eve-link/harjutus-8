<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Harjutus 8</title>
</head>
<body>

<h2>Funktsioon "continue"</h2>

<?php 
for ($number = 1; $number <= 10; $number++) {
    if ($number == 5) {
        continue; // Kui $nr == 5, siis jääb alljärgnev vahele ning tsükkel käivitub uuesti.
    }

    echo $number . ", ";
}
?>

<h2>Funktsioon "break"</h2>

<?php 
for ($number = 1; $number <= 10; $number++) {
    if ($number == 6) {
        break;
    }

    echo $number . ", ";
}
?>
</body>
</html>