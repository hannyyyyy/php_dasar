<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
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
  <!-- form merupakan sintaks HTML yang berisi kumpulan kolom isian data -->
   <h2>form</h2>
   <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
    <!-- Kode program di dibawah berfungsi untuk membaca data yang berada pada query string. Tanda @ sebelum variabel $_GET berfungsi untuk mengubah nilai menjadi null jika key nama atau pun alamat tidak tersedia pada array $_GET -->
    <?php
    $nama = @$_GET['nama'];
    $alamat = @$_GET['alamat'];

    if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} <br>";
}
     ?>
</body>
</html>
