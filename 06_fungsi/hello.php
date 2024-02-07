<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
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
    <div class="container">
        <h2>Functions</h2>
        <?php
            function sayHallo($name, $umur) {
                return "Hallo nama saya $name, saya berumur $umur tahun";
            }
        ?>
        <p><?= sayHallo("hanny", 17) ?></p>
        <p><?= sayHallo("tami", 16) ?></p>
        <p><?= sayHallo("saniah", 76) ?></p>
    </div>
</body>
</html>