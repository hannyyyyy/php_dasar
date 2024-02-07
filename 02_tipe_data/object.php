<!DOCTYPE html>
<html>
<body>
<!-- Kelas dan objek adalah dua aspek utama pemrograman berorientasi objek.

Kelas adalah templat untuk objek, dan objek adalah turunan dari kelas.

Ketika masing-masing objek dibuat, mereka mewarisi semua properti dan perilaku kelas, tetapi setiap objek akan memiliki nilai properti yang berbeda.

Anggap saja kita mempunyai nama kelas Caryang bisa memiliki properti seperti model, warna, dll. Kita bisa mendefinisikan variabel seperti $model, $color, dan seterusnya, untuk menampung nilai properti ini.

Ketika objek individu (Volvo, BMW, Toyota, dll.) dibuat, mereka mewarisi semua properti dan perilaku dari kelasnya, namun setiap objek akan memiliki nilai properti yang berbeda.

Jika Anda membuat suatu __construct()fungsi, PHP akan secara otomatis memanggil fungsi ini ketika Anda membuat objek dari suatu kelas. -->
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>

</body>
</html>
