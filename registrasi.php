<?php
require 'fungsi.php';
if (isset($_POST['registrasi'])){
  if(registrasi($_POST)>0){
    echo "<script>
    alert('user berhasil ditambahkan')
    </script>";

  }else{
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <main>
        <h1>Halaman Registrasi</h1>
    <form action="" method="post"></form>
     <!--Nama-->
     <div>
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" required>
     </div>
     <!--Username -->
     <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
     </div>
     <!--Email-->
     <div>
        <label for="username">Username</label>
        <input type="username" name="username" id="username" required >
     </div>
     <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input type="Password" name="password" id="password" required >
     </div>
     <!-- Konfirmasi Password -->
     <div>
        <label for="password">Konfirmasi Password</label>
        <input type="Password2" name="password2" id="password2" required >
     </div>
     <!-- Alamat -->
     <div>
        <label for="alamat">Alamat</label>
        <textarea name="alamat"  id="alamat" cols="30" rows="10" required></textarea>
     </div>
     <!-- Button -->
     <button type="submit" nama="Registrasi">Daftar</button>
    </main>
</body>
</html>