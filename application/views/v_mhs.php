<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <table border="1px solid black">
        <tr>
            <th>NAMA MAHASISWA</th>
            <TH>NIM</TH>
            <TH>ALAMAT</TH>
        </tr>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $mhs['nama'] ?></td>
                <td><?php echo $mhs['nim'] ?></td>
                <td><?php echo $mhs['alamat'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>