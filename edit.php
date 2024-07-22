<?php
require 'config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $nama_bank = $_POST['nama_bank'];
    $no_rek = $_POST['no_rek'];
    $no_bpjs = $_POST['no_bpjs'];
    $uk_baju = $_POST['uk_baju'];
    $uk_celana = $_POST['uk_celana'];
    $uk_sepatu = $_POST['uk_sepatu'];
    
    $sql = "UPDATE employees SET name = ?, email = ?, no_hp = ?, alamat = ?, tgl_masuk = ?, nama_bank = ?, no_rek = ?, no_bpjs = ?, uk_baju = ?, uk_celana = ?, uk_sepatu = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$name, $email, $no_hp, $alamat, $tgl_masuk, $nama_bank, $no_rek, $no_bpjs, $uk_baju, $uk_celana, $uk_sepatu, $id])) {
        header("Location: show_employees.php?success=1");
    } else { 
        echo "Error updating record: " . print_r($stmt->errorInfo(), true);
    }
}

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
    <title>Edit Karyawan</title>
</head>
<body>
    <h1>Edit Karyawan</h1>

    <form action="show_employees.php" method="post">
        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
        <div class="part1">
            <label>Nama:</label> <input type="text" name="name" value="<?php echo $employee['name']; ?>"><br>
            <div class="contact">
                <div class="email">
                    <label>Email:</label> <input type="email" name="email" value="<?php echo $employee['email']; ?>"><br>
                </div>

                <div class="no_hp">
                    <label>No HP:</label> <input type="text" name="no_hp" value="<?php echo $employee['no_hp']; ?>"><br>
                </div>
            </div>

            <label>Alamat:</label> <textarea name="alamat"><?php echo $employee['alamat']; ?></textarea><br>

            <label>Tanggal Masuk:</label> <input type="date" name="tgl_masuk" value="<?php echo $employee['tgl_masuk']; ?>"><br>

            <div class="bank">
                <div class="nama_bank">
                    <label>Nama Bank:</label> <input type="text" name="nama_bank" value="<?php echo $employee['nama_bank']; ?>"><br>
                </div>

                <div class="no_rek">
                    <label>No Rek:</label> <input type="text" name="no_rek" value="<?php echo $employee['no_rek']; ?>"><br>
                </div>
            </div>

            <label>No BPJS:</label> <input type="text" name="no_bpjs" value="<?php echo $employee['no_bpjs']; ?>"><br>
        
            <label for="uk_pakaian">Ukuran Pakaian</label><br>
            <div class="pakaian">
                <label for="uk_baju">Ukuran Baju:</label> <input type="text" name="uk_baju" class="uk_pakaian" value="<?php echo $employee['uk_baju']; ?>"><br>

                <label for="uk_celana">Ukuran Celana:</label> <input type="text" name="uk_celana" class="uk_pakaian" value="<?php echo $employee['uk_celana']; ?>"><br>

                <label for="uk_sepatu">Ukuran Sepatu:</label> <input type="text" name="uk_sepatu" class="uk_pakaian" value="<?php echo $employee['uk_sepatu']; ?>"><br>
            </div>

            <button type="submit" class="button">update</button>
        </div>
    </form>

</body>
<style>
    body {
    background-color: #fdd835;
    font-family: 'Montserrat';
    color: #333;
    margin: 0;
    padding: 0;
    }

    h1 {
        text-align: center;
        color: #000;
        margin: 10px;
        font-size: 45px;
        font-family: 'MuseoModerno';
    }

    form{
        display: flex;
    }

    .part1 {
        background-color: #fff;
        border-radius: 10px;
        padding: 30px;
        width: 500px;
        margin: 10px auto;
        justify-content: space-between;
    }

    .contact{
        display: flex;
    }

    .contact label{
        width: 237px;
    }

    .email{
        margin: 0 2px;
    }

    .no_hp{
        margin: 0 15px;
        margin-right: 10px;
        padding: 0 10px;
    }

    .bank{
        display: flex;
    }

    .bank label{
        width: 236px;
    }

    .nama_bank{
        margin: 0 2px;
    }

    .no_rek{
        margin: 0 15px;
        margin-right: 10px;
        padding: 0 10px;
    }

    .gender{
        display: flex;
    }

    .P{
        display: flex;
    }

    .L{
        display: flex;
        margin-left: 25px;
    }

    .pakaian{
        display: flex;
    }

    .pakaian input{
        margin: 0 5px;
        margin-right: 50px;
        height: 5px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
    }

    form input[type="text"],
    form input[type="date"],
    form input[type="email"],
    form textarea {
        width: calc(100% - 10px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: 'Arial', sans-serif;
        background-color: #F2E890;
    }

    form input[type="file"] {
        padding: 0.75rem 1.5rem;
        margin: 0.625rem;
        margin-bottom: 30px;
        border: none;
        width: 85%;
        border-radius: 10px;
        text-align: center;
        color: #ffffff;
        cursor: pointer;
        background: #F2E890;
        color: #000;
        }

    form input[type="file"]:hover {
        box-shadow: 0 0 20px rgba(87, 89, 93, 0.6), 0 0 40px rgba(87, 89, 93, 0.4);
    } 

    .foto{
        display: block;
        margin: 0 auto;
        background-color: #ffeb3b;
        border: 2px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s, border-color 0.3s;
        }

    .foto:hover {
        background-color: #fdd835;
        border-color: #bbb;
    }

    .foto:focus {
        outline: none;
        border-color: #999;
    }

    .button {
        background-color: #fdd835;
        color: #000;
        padding: 10px 20px;
        margin-top: 30px;
        float: right;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .button:hover {
        background-color: #000;
        color: #fff;
    }

    .container {
        display: flex;
        justify-content: space-between;
    }

    .left-section, .right-section {
        width: 48%;
    }

    input[type="radio"] {
        margin-right: 10px;
    }

    .radio-group {
        display: flex;
        align-items: center;
    }

    .radio-group label {
        margin-right: 20px;
    }

    .ukuran-pakaian {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .ukuran-pakaian label {
        margin-right: 10px;
    }

    .ukuran-pakaian input[type="text"] {
        width: 50px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }
</style>
</html>
