<?php

require 'controller.php';
$jumlahDataperHalaman = 100;
$jumlahData = count(query("SELECT * FROM user"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataperHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataperHalaman * $halamanAktif) - $jumlahDataperHalaman;

$user = query("SELECT * FROM user LIMIT $awalData, $jumlahDataperHalaman");
if (isset($_POST["cari"])) {
     $user = cari($_POST["keyword"]);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Data Students</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
     <link rel="icon" href="img/lb.jpeg" />
     <style>
          body {
               text-align: center;
               background-image: url(img/kerenbgt.gif);
               font-family: Arial, Helvetica, sans-serif;
               background-size: cover;
          }

          .cb1 {
               padding: 15px 15px;
               font-size: 20px;
               text-align: center;
               cursor: pointer;
               outline: none;
               color: #fff;
               background-color: #04AA6D;
               border: none;
               border-radius: 15px;
               box-shadow: 0 9px #999;
          }

          .cb2 {
               font-size: 17px;
               padding: 13px 13px;
          }

          .cb3 {
               border-radius: 30px;
          }

          .card {
               width: 90%;
               max-width: 500px;
               padding: 2rem 1.5rem;

               border-radius: 1rem;
               border: 1px solid transparent;

               backdrop-filter: blur(1rem);
               box-shadow: 1.3rem 1.3rem 1.3rem rgba(0, 0, 0, 0.5);

               border-top-color: rgba(225, 225, 225, 0.1);
               border-left-color: rgba(225, 225, 225, 0.1);
               border-bottom-color: rgba(225, 225, 225, 0.1);
               border-right-color: rgba(225, 225, 225, 0.1);
          }

          .cb1 {
               background-color: rgba(225, 225, 225, 0.1);
          }

          .btn:hover {
               box-shadow: 0 0.3rem 1rem rgba(0, 0, 0, 0/3);
          }
     </style>
</head>

<body>
     <!-- Tabel -->
     <div class="position-absolute top-50 start-50 translate-middle">
          <div class="cb3 cb1 cb2 card" style="width: 200rem;">
               <div class="card-body">
                    <div class="">
                         <h1 style="color: black;">Pesanan Anda</h1>
                    </div>

                    <table class="table table-bordered border-dark" border="1" cellpadding="10" cellspacing="0">

                         <tr>
                              <th>No.</th>
                              <th>Nama</th>
                              <th>Pesanan</th>
                              <th>Menu</th>
                              <th>Alamat</th>
                         </tr>
                         <?php $i = 1; ?>
                         <?php foreach ($user as $data) : ?>
                              <tr>
                                   <td><?= $i; ?></td>
                                   <td><?= $data["nama_user"]; ?></td>
                                   <td><?= $data["pesanan_user"]; ?></td>
                                   <td><?= $data["menu_user"]; ?></td>
                                   <td><?= $data["alamat_user"]; ?></td>
                              </tr>
                              <?php $i++; ?>
                         <?php endforeach; ?>
                         <div>
                              <button type="submit" class="badge bg-primary text-wrap" name="submit"><a style="color: black; text-decoration: none;" href="index.html">Back To
                                        Menu</a>
                              </button>
                              <br><br>
                         </div>
                    </table>
               </div>
          </div>
     </div>
     <!-- Akhir Tabel -->
</body>

</html>