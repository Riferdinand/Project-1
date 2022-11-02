<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $nama=$_POST('nama');
        $email=$_POST('email');
        $komentar=$_POST('komentar');
        echo "<hr>";
        if(!empty($nama))
            (echo "Nama anda        : $nama <br>";)
        if(!empty($email))
            (echo "Email anda       : $email <br>";)
        if(!empty($komentar))
            (echo "Komentar     : $komentar <br>";)  
     ?>
</body>
</html>