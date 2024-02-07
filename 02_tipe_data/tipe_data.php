<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipe data</title>
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
<!-- didalam tipe data ada beberapa pemograman yang harus dipahami yaitu
    -integer
    -boolean
    -array
    -string
    -float  -->

    <h3>integer</h3>
<!-- dalam contoh berikut $x adalah bilangan bulat. fungsi PHP var_dump() mengembalikan tipe data dan nilai -->
<?php  
$x = 5985;
var_dump($x);
?>  
    <h3>boolean</h3>
<!-- boolean mewakili dua kemungkinan keadaan: TRUE atau FALSE. -->
<?php 
$x = true;
var_dump($x);
?>
    <h3>array</h3>
<!--array menyimpan banyak nilai dalam satu variable
    dalam contoh berikut ini $cars adalah sebuah array. fungsi PHP var_dump() mengembalikan tipe data dan nilai -->
    <?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  
    <h3>string<h3><!-- string adalah rangkaian karakter, seperti "hello world!"
     string dapat berupa teks atau pun didalam tanda kutip -->
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>
    <h3>float</h3>
<!-- dalam contoh berikut $x ini adalah pelampung. fungsi PHP var_dump() mengembalikan tipe data dan nilai -->
<?php  
$x = 10.365;
var_dump($x);
?>  
</body>
</html>