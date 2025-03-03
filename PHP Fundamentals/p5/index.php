<?php 

// * Belajar array, array adalah variabel yang dapat menampung banyak nilai
// dihawah ini adalah variabel dengan 1 arrayx
// ! Element pada array dapat memiliki tipe data yang berbeda
// * Dalam php, array itu dapat di asumsikan mempunyai key dan value contoh dibawah ini
// ? [0] => string(4) "Baji"
// 0 = index yang pasti dimulai dari angka 0
// string(4) "Baji" value nya, yang bisa bertipe apapun, dikasus ini kita bertipe string

$nama = "Baji";

// ! Menggunakan Cara Lama
$students = array("Baji", "Meki", "Penny", "Puky", "Lawanq", true, false);

$lecturer = ["Jeki", "Budi", "Triono", "Logan", "Sadat", "Rahmat"];
$people = ["Ujang", 10, "Sandi", "Jaja", true, "Ulil", false, "Bole"];
// echo $lecturer[0];
// echo $students[0];
var_dump("Menggunakan var_dump",true,$lecturer);
echo "</br>";
print_r($students);
?>