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

    <div class="register-content">
        <h2>Register</h2>
        <form name="registerForm" action="registerProcess.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
            <div class="table-container">
                <table class="table-1">
                    <tr>
                        <td>Nama Depan</td>
                        <td><input type="text" name="namaDepan"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" name="tempatLahir"></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td><input type="text" name="wargaNegara"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" id="" cols="22" rows="2"></textarea></td>
                    </tr>
                    <tr>
                    <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                </table>
                <table class="table-2">
                    <tr>
                        <td>Nama Tengah</td>
                        <td><input type="text" name="namaTengah"></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <td><input type="date" name="tglLahir"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td><input type="text" name="kodePos"></td>
                    </tr>
                    <tr>
                        <td>Password 1</td>
                        <td><input type="password" name="password1"></td>
                    </tr>
                </table>
                <table class="table-3">
                    <tr>
                        <td>Nama Belakang</td>
                        <td><input type="text" name="namaBelakang"></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><input type="text" name="NIK"></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td><input type="text" name="noHP"></td>
                    </tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td><input type="file" name="fotoProfil" style="width: 200px;" accept="image/*" required></td>
                        <!-- <td><input type="text" name="fotoProfil">Silahkan Pilih Foto</td> -->
                    </tr>
                    <tr>
                        <td>Password 2</td>
                        <td><input type="password" name="password2"></td>
                    </tr>
                </table>
            </div>
            <div class="register-button">
                <button class="register-back"><a href="index.php">Kembali</a></button>
                <input class="register-submit" type="submit" name="submit" value="Register">
            </div>
        </form>
        
    </div>
    
    <script>
        function validateForm(){
            if(document.registerForm.namaDepan.value == ""){
                alert("nama depan tidak boleh kosong");
                document.registerForm.namaDepan.focus();
                return false;
            }
            if(document.registerForm.namaTengah.value == ""){
                alert("nama tengah tidak boleh kosong");
                document.registerForm.namaTengah.focus();
                return false;
            }
            if(document.registerForm.namaBelakang.value == ""){
                alert("nama belakang tidak boleh kosong");
                document.registerForm.namaBelakang.focus();
                return false;
            }
            if(document.registerForm.tempatLahir.value == ""){
                alert("tempat lahir tidak boleh kosong");
                document.registerForm.tempatLahir.focus();
                return false;
            }
            if(document.registerForm.tglLahir.value == ""){
                alert("tanggal lahir tidak boleh kosong");
                document.registerForm.tglLahir.focus();
                return false;
            }
            if(document.registerForm.NIK.value == ""){
                alert("NIK tidak boleh kosong");
                document.registerForm.NIK.focus();
                return false;
            } 
            if (isNaN(document.registerForm.NIK.value)){
                alert("NIK harus berupa angka");
                document.registerForm.NIK.focus();
                return false;
            }
            if(document.registerForm.wargaNegara.value == ""){
                alert("warga negara tidak boleh kosong");
                document.registerForm.wargaNegara.focus();
                return false;
            } 
            if(document.registerForm.email.value == ""){
                alert("email tidak boleh kosong");
                document.registerForm.email.focus();
                return false;
            } 
            if(document.registerForm.email.value.endsWith(".com") == false){
                alert("format email salah");
                document.registerForm.email.focus();
                return false;
            } 
            if(document.registerForm.noHP.value == ""){
                alert("no HP tidak boleh kosong");
                document.registerForm.noHP.focus();
                return false;
            }
            if (isNaN(document.registerForm.noHP.value)){
                alert("no HP harus berupa angka");
                document.registerForm.noHP.focus();
                return false;
            }
            if(document.registerForm.alamat.value == ""){
                alert("alamat tidak boleh kosong");
                document.registerForm.alamat.focus();
                return false;
            }
            if(document.registerForm.kodePos.value == ""){
                alert("kode pos tidak boleh kosong");
                document.registerForm.kodePos.focus();
                return false;
            }
            // foto profil?
            if(document.registerForm.username.value == ""){
                alert("username tidak boleh kosong");
                document.registerForm.username.focus();
                return false;
            }
            if(document.registerForm.password1.value == ""){
                alert("password1 tidak boleh kosong");
                document.registerForm.password1.focus();
                return false;
            }
            if(document.registerForm.password2.value == ""){
                alert("password2 tidak boleh kosong");
                document.registerForm.password2.focus();
                return false;
            }
            if(document.registerForm.password2.value != document.registerForm.password1.value){
                alert("password 1 dan 2 harus sama");
                return false;
            }
        }
    </script>

</body>
</html>