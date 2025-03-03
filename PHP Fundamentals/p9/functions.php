<?php 
$conn_cs = mysqli_connect("localhost", "root", "", "organisasi");

function query($query){
    global $conn_cs;
    $result = mysqli_query($conn_cs, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}