<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Form Input Mahasiswa</h2>
    <form action="proses.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <input type="submit" value="Kirim">
    </form>
</body>
</html>