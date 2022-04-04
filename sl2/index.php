<?php
    session_start();
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="index-content">
        <h2>Aplikasi Pengelolaan Keuangan</h2>
        <h1>Selamat Datang di Aplikasi Pengelolaan Keuangan</h1>
        <a href="login.php" class="index-login">Login</a>
        <a href="register.php" class="index-register">Register</a>
    </div>

    <?php
        // $str_query = "select * from user";
        // $query = mysqli_query($connection, $str_query);
        // while($data = mysqli_fetch_array($query)){
        //     echo "Nama Depan: ".$data['namaDepan'].
        //     "<br>Nama Tengah: ".$data['namaTengah'].
        //     "<br>Tempat Lahir: ".$data['namaBelakang'].
        //     "<br>Tanggal Lahir: ".$data['namaBelakang'].
        //     "<br>NIK: ".$data['NIK'].
        //     "<br>Warga Negara: ".$data['wargaNegara'].
        //     "<br>Email: ".$data['email'].
        //     "<br>No HP: ".$data['noHP'].
        //     "<br>Alamat: ".$data['alamat'].
        //     "<br>Kode Pos: ".$data['kodePos'].
        //     "<br>Foto Profil: ".$data['fotoProfil'].
        //     "<br>Username: ".$data['username'].
        //     "<br>Password: ".$data['password'].
        //     "<br><br>";
        // }
    ?>

</body>
</html>