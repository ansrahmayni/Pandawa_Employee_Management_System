<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'config.php'?>
    <h1>Pandawa</h1>
    <form action="add_employee.php" method="POST" enctype="multipart/form-data">
        <div class="part1">
            <label>Nama:</label><br>
            <input type="text" name="name" required><br><br>
            
            <div class="contact">
                <div class="email">
                    <label>Email:</label><br>
                    <input type="email" name="email" required><br><br>
                </div>

                <div class="no_hp">
                    <label>No HP:</label><br>
                    <input type="text" name="no_hp" required><br><br>
                </div>
            </div>

            <label>Alamat:</label><br>
            <textarea name="alamat" required></textarea><br><br>
            
            <label>Tanggal Masuk:</label><br>
            <input type="date" name="tgl_masuk" required><br><br>

            <div class="bank">
                <div class="nama_bank">
                    <label>Nama Bank:</label><br>
                    <input type="text" name="nama_bank" required><br><br>
                </div>

                <div class="no_rek">
                    <label>No Rekening:</label><br>
                    <input type="text" name="no_rek" required><br><br>
                </div>
            </div>
            <label>No BPJS:</label><br>
            <input type="text" name="no_bpjs" required><br><br>
        </div>

        <div class="part2">
            <label for="gender">Gender:</label><br>
            <div class="gender">
                <div class="P">
                    <input type="radio" id="perempuan" name="gender" value="perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>

                <div class="L">
                    <input type="radio" id="laki-laki" name="gender" value="laki-laki">
                    <label for="laki-laki">Laki - Laki</label>
                </div>
            </div>
            <br><br>
            
                <label for="uk_pakaian">Ukuran Pakaian:</label><br>
            <div class="pakaian">
                <label for="uk_baju">Baju</label>
                <input type="text" id="uk_baju" name="uk_baju" class="uk_pakaian">

                <label for="uk_celana">Celana</label>
                <input type="text" id="uk_celana" name="uk_celana" class="uk_pakaian">

                <label for="uk_sepatu">Sepatu</label>
                <input type="text" id="uk_sepatu" name="uk_sepatu" class="uk_pakaian">
            </div><br>

    
                <label>Foto KTP:</label><br>
                <input type="file" name="ktp_photo" accept="image/*" class="foto" id="ktp" required>
                
                <label>Foto KK:</label><br>
                <input type="file" name="kk_photo" accept="image/*" class="foto" id="kk" required>
                
                <label>Foto Ijazah:</label><br>
                <input type="file" name="ijazah_photo" accept="image/*" class="foto" id="ijazah" required>
            

            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>