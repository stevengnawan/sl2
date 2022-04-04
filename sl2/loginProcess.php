<?php
    session_start();
    include("config.php");

    if(isset($_POST['submit'])){
        $str_query = "select * from user";
        $query = mysqli_query($connection, $str_query);

        while($data = mysqli_fetch_array($query)){
            if($data['username'] == $_POST['username']){
                if($data['password'] == $_POST['password']){
                    $_SESSION['username'] = $data['username'];

                    echo "login berhasil";
                    header("location:home.php?id='".$data['username']."'");
                }
                else {
                    echo " <script>
                            alert ('username atau password salah');
                            window.location.replace('login.php');
                        </script>";
               }
            }
        }
        echo " <script>
                alert ('username belum terdaftar');
                window.location.replace('login.php');
            </script>";
    }



    // if((isset($_POST['submit'])) && (isset($_POST['username'])) && (isset($_SESSION['username']))){
    //     if(($_POST['username'] == $_SESSION['username']) && ($_POST['password'] == $_SESSION['password1'])){
    //         header("location:home.php");
    //     }
    //     else{
    //         echo "Maaf Anda gagal login, pastikan username dan password sesuai.";
    //         echo "<br><a href='index.php'>Kembali</a>";
    //     }
    // }
    // else{
    //     echo "Maaf Anda gagal login, pastikan username dan password sesuai.";
    //     echo "<br><a href='index.php'>Kembali</a>";
    // }

?>