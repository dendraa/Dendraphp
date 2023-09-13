<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
    
<?php if ( isset($_POST["submit"]) ) : ?>
      <h2> Hallo, Selamat Datang <?= $_POST["nama"]; ?></h2>
<?php endif; ?>

    <form action="latihan4.php" method="POST">
        Masukan nama : 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim! </button>
</form>
</body>
</html>
