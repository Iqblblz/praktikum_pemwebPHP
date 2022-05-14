<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>mahasiswa</title>
    </head>
        <body>
            <h3>
                mahasiswa
            </h3>
            <table border=1>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Ipk</th>
                        <th>Predikat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($list_mhs as $mhs) {
                    ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $mhs -> Nim ?></td>
                        <td><?php echo $mhs -> Nama ?></td>
                        <td><?php echo $mhs -> Gender ?></td>
                        <td><?php echo $mhs -> Ipk ?></td>
                        <td><?php echo $mhs -> Predikat() ?></td>
                    </tr>
                    <?php
                    $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </body>
</html>