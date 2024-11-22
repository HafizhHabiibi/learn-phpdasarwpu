<?php 

// Koneksi DB
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($querry) {
    global $conn;
    $result = mysqli_query($conn, $querry);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

?>