<?php
require 'controller.php';

if (isset($_POST["submit"])) {

     if (input($_POST) > 0) {
          echo "
             <script>
             alert('Pesanan Anda Berhasil Ditambahkan');
             document.location.href = 'hasil.php';
             </script>
          ";
     } else {
          echo "
          <script>
          alert('Pesanan Gagal Ditambahkan');
          document.location.href = 'index.html';
          </script>
       ";
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Checkout</title>
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;0,800;1,100;1,200;1,300;1,400;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
     <link rel="icon" href="img/lb.jpeg" />
     <style>
     body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
     }

     .container {
          max-width: 800px;
          margin: 0 auto;
          padding: 20px;
     }

     h1 {
          text-align: center;
     }

     .checkout-form {
          margin-top: 30px;
     }

     .form-group {
          margin-bottom: 20px;
     }

     label {
          display: block;
          font-weight: bold;
          margin-bottom: 5px;
     }

     input[type="text"],
     input[type="email"],
     select {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          font-size: 16px;
     }

     input[type="submit"] {
          background-color: #4caf50;
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          font-size: 16px;
     }

     input[type="submit"]:hover {
          background-color: #45a049;
     }

     body {
          background-image: url(img/kerenbgt.gif);
          width: 100%;
          background-size: cover;
     }

     .title {
          margin: 90%;
          width: 100%;
          max-width: 400px;
          font-size: 4rem;
          text-align: center;
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
     <div class="position-absolute top-50 start-50 translate-middle">
          <div class="cb1 card" style="width: 30rem;">
               <div class="card-body">
                    <h1>Checkout</h1>
                    <form action="" method="post">
                         <div class="mb-3">
                              <label for="nama_user"> </label>
                              <input type="text" autofocus placeholder="Nama.." class="form-control" name="nama_user"
                                   id="nama_user">
                         </div>
                         <div class="mb-3">
                              <label for="pesanan_user" class="form-label"> </label>
                              <input type="text" autofocus placeholder="Pesanan.." class="form-control"
                                   name=" pesanan_user" id="pesanan_user">
                         </div>
                         <div class="mb-3">
                              <label for="menu_user" class="form-label"></label>
                              <input type="text" autofocus placeholder="Menu.." class="form-control" name="menu_user"
                                   id="menu_user">
                         </div>
                         <div class="mb-3">
                              <label for="alamat_user" class="form-label"> </label>
                              <input type="text" autofocus placeholder="Alamat.." class="form-control"
                                   name="alamat_user" id="alamat_user">
                         </div>
                         <div class="form-group">
                              <label for="payment">Metode Pembayaran</label>
                              <select id="payment" name="payment">
                                   <option value="credit-card">Kartu Kredit</option>
                                   <option value="bank-transfer">Transfer Bank</option>
                                   <option value="paypal">PayPal</option>
                              </select>
                              <br><br>
                              <div class="mb-3">
                                   <button type="submit" class="btn btn-primary" name="submit">Checkout</button>
                              </div>
                              <div class="mb-3">
                                   <button type="submit" class="btn btn-primary" name="submit"><a
                                             style="color: white; text-decoration:none;" href="index.html">Back
                                             To Menu</a></button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</body>

</html>