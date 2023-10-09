<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Detail Informasi Pendaftar</title>
</head>
<body>
    <div class="judul">
    <h1>Detail Informasi Pendaftar</h1>
    </div>
    <?php
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $telepon = $_GET['telepon'];
    $sandi = $_GET ['sandi'];
    ?>
    <table border="1">
        <tr>
            <th>Nama</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td><?php echo $telepon; ?></td>
        </tr>
        <tr>
            <th>Sandi</th>
            <td><?php echo $sandi; ?></td>
        </tr>
    </table>
</body>
</html>
