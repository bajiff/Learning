<?php 
require "functions.php";

$id = $_GET["id"];

if (hapus($id) > 0 ){
    echo "<script>alert('Data berhasil dihapus :D'); document.location.href = 'index.php'</script>";
} else{
    echo "<script>alert('Data gagal dihapus :D'); document.location.href = 'index.php'</script>"; 
}
?>