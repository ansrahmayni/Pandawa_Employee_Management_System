<?php
require 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM employees WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $employee = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Pandawa</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <h1>Detail Pandawa</h1>

    <?php if ($employee): ?>
    <div class="detail">
        <div class="data">
            <p><strong>ID:</strong> <?php echo $employee['id']; ?></p>
            <hr>
            <p><strong>Nama:</strong> <?php echo $employee['name']; ?></p>
            <hr>
            <p><strong>Email:</strong> <?php echo $employee['email']; ?></p>
            <hr>
            <p><strong>No HP:</strong> <?php echo $employee['no_hp']; ?></p>
            <hr>
            <p><strong>Alamat:</strong> <?php echo $employee['alamat']; ?></p>
            <hr>
            <p><strong>Tanggal Masuk:</strong> <?php echo $employee['tgl_masuk']; ?></p>
            <hr>
            <p><strong>Nama Bank:</strong> <?php echo $employee['nama_bank']; ?></p>
            <hr>
            <p><strong>No Rek:</strong> <?php echo $employee['no_rek']; ?></p>
            <hr>
            <p><strong>No BPJS:</strong> <?php echo $employee['no_bpjs']; ?></p>
            <hr>
            <p><strong>Gender:</strong> <?php echo $employee['gender']; ?></p>
            <hr>
            <p><strong>Ukuran Baju:</strong> <?php echo $employee['uk_baju']; ?></p>
            <hr>
            <p><strong>Ukuran Celana:</strong> <?php echo $employee['uk_celana']; ?></p>
            <hr>
            <p><strong>Ukuran Sepatu:</strong> <?php echo $employee['uk_sepatu']; ?></p>

            <a href="index.php" class="kembali">Kembali</a>
            <button class="download-btn">download</button>
            <script src="main.js"></script>
        </div>
        <div class="foto">
            <p><strong>KTP:</strong><br> <img src="upload/<?php echo $employee['ktp_photo']; ?>" width="300"></p>
            <hr>
            <p><strong>KK:</strong><br> <img src="upload/<?php echo $employee['kk_photo']; ?>" width="300"></p>
            <hr>
            <p><strong>Ijazah:</strong><br> <img src="upload/<?php echo $employee['ijazah_photo']; ?>" width="300"></p>
        </div>
    </div>

    <?php else: ?>
        <p>Data tidak ditemukan.</p>
    <?php endif; ?>

</body>
<style>
    body{
        font-family: 'Montserrat';
        color: #333;
        margin: 0;
        padding: 0;
        background-color: #F2E890
    }

    h1{
        font-family: 'MuseoModerno';
        text-align: center;
        color: #000;
        margin: 10px;
        font-size: 35px;
    }

    .detail{
        display: flex;
    }

    hr{
        height: 1px;
        background-color: #000;
    }

    .data{
        background-color: #fff;
        border-radius: 10px;
        padding: 10px 20px;
        width: 500px;
        margin: 10px auto;
        margin-right: 10px;
        justify-content: space-between;
    }

    .foto{
        background-color: #fff;
        border-radius: 10px;
        padding: 10px 20px;
        width: 400px;
        margin: 10px auto;
        margin-left: 10px;
        justify-content: space-between;
        text-align: center;
    }

    .foto p img{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .kembali {
        background-color: #D10C0C;
        color: #fff;
        padding: 10px 20px;
        margin-top: 20px;
        float: left;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        text-decoration: none;
    }

    .kembali:hover {
        background-color: #000;
        color: #fff;
    }

    .download-btn {
        background-color: #2988F8;
        color: #fff;
        padding: 10px 20px;
        margin-top: 20px;
        float: right;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .download-btn:hover {
        background-color: #000;
        color: #fff;
    }
</style>
</html>
