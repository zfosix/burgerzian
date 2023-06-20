<?php

$conn = mysqli_connect("localhost", "id20936761_burgerzian", "fajarfauz123#R", "id20936761_burgerzian");

function query($query)
{
     global $conn;
     $result = mysqli_query($conn, $query);
     $rows = [];
     while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
     }
     return $rows;
}


function input($data)
{
     global $conn;
     $nama = htmlspecialchars($data["nama_user"]);
     $pesanan = htmlspecialchars($data["pesanan_user"]);
     $menu = htmlspecialchars($data["menu_user"]);
     $alamat = htmlspecialchars($data["alamat_user"]);

     $query = "INSERT INTO user
     VALUES
     ('', '$nama', '$pesanan', '$menu', '$alamat')";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function cari($keyword)
{
     $query = "SELECT * FROM user
     WHERE 
     nama_user LIKE '%$keyword%' OR
     pesanan_user LIKE '%$keyword%' OR
     menu_user LIKE '%$keyword%' OR
     alamat_user LIKE '%$keyword%' OR
     status LIKE '%$keyword%' 
     ";
     return query($query);
}
