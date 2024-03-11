<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Umur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center> 
    <h1>Berapa Tahun Umur Kamu Sekarang ?</h1>
    <form method="post">
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    // Proses penghitungan umur
    if(isset($_POST['hitung'])) {
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $umur = hitungUmur($tanggal_lahir);
        echo "<p>Umur Anda adalah $umur tahun.</p>";
    }

    function hitungUmur($tanggal_lahir) {
        // Menghitung umur berdasarkan tanggal lahir
        $tgl_lahir = new DateTime($tanggal_lahir);
        $today = new DateTime('today');
        $umur = $today->diff($tgl_lahir)->y;
        return $umur;
    }
    ?>
    </center>
</body>
</html>
