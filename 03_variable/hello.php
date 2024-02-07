<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- identitas -->
<style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
    }
    th {
        background-color: #af4c6d;
        color: white;
    }
  </style>
  </head>
  <body>
  <table>
    <tr>
        <th>nama</th>
        <th>kelas</th>
        <th>tanggal praktikum</th>
        <th>foto</th>
    </tr>
    <tr>
        <td>Hanny</td>
        <td>XI-RPL</td>
        <td>23 - november - 2023</td>
        <td><img src="me.jpg" alt="Flowers in Chania" width="140" height="90"></img></td>
    </tr>
    <tr>          
  </table>
<h2>variable</h2>
<!-- variable diawali dengan $ tanda, diikuti dengan nama variable-->
<?php
$x = 5;
$y = "John";

echo $x;
echo "<br>";
echo $y;
?>
<!--variable keluaran-->
<!-- Pernyataan PHP echo sering digunakan untuk menampilkan data ke layar. -->
<?php
// menunjukkan cara menampilkan teks dan variable
$txt = "stempert";
echo "I love $txt!";
// menampilkan jumlah dua variable
$x = 5;
$y = 4;
echo $x + $y;
?>
<h3>jenis variable</h3>
<!-- PHP tidak memiliki perintah untuk mendeklarasikan variabel, dan tipe datanya bergantung pada nilai variabe -->
<?php
$x = 5;      // $x is an integer
$y = "hanny"; // $y is a string

echo $x;
echo $y;
?>
</body>
</html>
