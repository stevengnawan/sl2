<?php
    session_start();
    include("config.php");
    $id = $_SESSION['username'];
    $str_query = "select * from user where username = '".$id."'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        if($_FILES){
            if(is_uploaded_file($_FILES['fotoProfil']['tmp_name'])){
                $fileName = $_FILES['fotoProfil']['name'];
                $tempName = $_FILES['fotoProfil']['tmp_name'];

                $directory = "profilePict/";

                $upload = move_uploaded_file($tempName, $directory.$fileName);

                $str_query = "update user set namaDepan='".$_POST['namaDepan']."', 
                                            namaTengah='".$_POST['namaTengah']."',
                                            namaBelakang='".$_POST['namaBelakang']."',
                                            tempatLahir='".$_POST['tempatLahir']."',
                                            tglLahir='".$_POST['tglLahir']."',
                                            NIK='".$_POST['NIK']."',
                                            wargaNegara='".$_POST['wargaNegara']."',
                                            email='".$_POST['email']."',
                                            noHP='".$_POST['noHP']."',
                                            alamat='".$_POST['alamat']."',
                                            kodePos='".$_POST['kodePos']."',
                                            fotoProfil='".$directory.$fileName."',
                                            password='".$_POST['password1']."'
                                            where username='".$_POST['username']."'";
            }
        }
        else{
            $str_query = "update user set namaDepan='".$_POST['namaDepan']."', 
            namaTengah='".$_POST['namaTengah']."',
            namaBelakang='".$_POST['namaBelakang']."',
            tempatLahir='".$_POST['tempatLahir']."',
            tglLahir='".$_POST['tglLahir']."',
            NIK='".$_POST['NIK']."',
            wargaNegara='".$_POST['wargaNegara']."',
            email='".$_POST['email']."',
            noHP='".$_POST['noHP']."',
            alamat='".$_POST['alamat']."',
            kodePos='".$_POST['kodePos']."',
            fotoProfil='".$data['fotoProfil']."',
            password='".$_POST['password1']."'
            where username='".$_POST['username']."'";
        }
        
        $query = mysqli_query($connection, $str_query);

        if($query){
            echo "<script>";
            echo "alert('data BERHASIL diubah')";
            echo "</script>";

            echo "<script>";
            echo "window.location='index.php'";
            echo "</script>";
        }
        else{
            echo "<script>";
            echo "alert('data GAGAL diubah')";
            echo "</script>";

            echo "<script>";
            echo "window.location='index.php'";
            echo "</script>";
        }

        header("location:profile.php");
    }
?>