<?php
    session_start();

    include("config.php");

    $id = $_SESSION['username'];
    $str_query = "select * from user where username = '".$id."'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="home-header">
        <h2>Aplikasi Pengelolaan Keuangan</h2>
        <a href="home.php">Home</a>
        <a href="profile.php" class="active">Profile</a>
        <a href="logout.php">Logout</a>
    </header>

    <div class="profile-content">
        <h3>Profil Pribadi</h3>
        <div class="table-container">
            <table class="table-1">
                <tr>
                    <td>Nama Depan</td>
                    <td><b><?php echo $data['namaDepan']?></b></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><b><?php echo $data['tempatLahir']?></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><b><?php echo $data['wargaNegara']?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><b><?php echo $data['alamat']?></b></td>
                </tr>
            </table>
            <table class="table-2">
                <tr>
                    <td>Nama Tengah</td>
                    <td><b><?php echo $data['namaTengah']?></td>
                </tr>
                <tr>
                    <td>Tgl Lahir</td>
                    <td><b><?php echo $data['tglLahir']?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><b><?php echo $data['email']?></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td><b><?php echo $data['kodePos']?></b></td>
                </tr>
            </table>
            <table class="table-3">
                <tr>
                    <td>Nama Belakang</td>
                    <td><b><?php echo $data['namaBelakang']?></b></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><b><?php echo $data['NIK']?></b></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><b><?php echo $data['noHP']?></b></td>
                </tr>
                <tr>
                    <td>Foto Profil</td>
                    <td>
                        <div class="profile-pict">
                            <?php
                                echo "<img src='".$data['fotoProfil']."'>";
                            ?>
                        </div>
                    </td>
                    
                </tr>
            </table>
        </div>
        <?php
            echo "<a href='edit.php?id=".$id."'>
                <h4 style=color:blue;text-decoration:underline>
                    Edit Profile
                </h4>
            </a>";
        ?>
    </div>
    
</body>
</html>