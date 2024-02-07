<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
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
  <!-- Array adalah struktur data yang dapat menyimpan satu atau lebih nilai dalam satu variabel tunggal. Setiap nilai dalam array memiliki indeks unik, yang memungkinkan kita mengakses nilai tersebut dengan mudah. -->
  <div class="container">
        <h2>Array</h2>
        <?php
            $handphone = [
                ["iphone", 22, 18],
                ["samsung", 15, 13],
                ["vivo", 5, 2],
                ["oppo", 17, 15]
            ];
        ?>
        <ul>
            <?php foreach ($handphone as $handphone) : ?>
                <li>
                    Merk: <?= $handphone[0] ?> | Stock: <?= $handphone[1] ?> | Sold: <?= $handphone[2] ?>
                </li>
                
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>
