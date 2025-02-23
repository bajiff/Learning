<?php 
$conn_uc = mysqli_connect("localhost", "root", "", "organisasi");


function query($query){
    global $conn_uc;
    $result = mysqli_query($conn_uc, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>