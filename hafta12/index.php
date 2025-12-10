<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>php tablo</title>
</head>
<body>

<h3>Tablo Oluştur</h3>

<form method="post">
    Satır Sayısı: <input type="number" name="satir" min="1" required>
    Sütun Sayısı: <input type="number" name="sutun" min="1" required>
    <button type="submit">Tabloyu Oluştur</button>
</form>

<br>

<?php
if ($_POST) {
    $satir = $_POST["satir"];
    $sutun = $_POST["sutun"];

    echo "<table border='1' cellpadding='10' cellspacing='0'>";

    for ($i = 0; $i < $satir; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $sutun; $j++) {
            $rastgeleSayi = rand(1, 100);
            echo "<td>$rastgeleSayi</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>

