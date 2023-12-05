<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Mahasiswa</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #fff;
                color: #333;
            }

            .tombol {
                color: blue;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Data Nilai Mahasiswa</h1>
            <a href="create.php" class="tombol">Tambah Data</a>
            <a href="print.php" target="_blank" class="tombol">Cetak Data</a>

            <br><br>
            
            <table border="1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Tugas</th>
                        <th>NA</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $result = $model->tampil_data();
                        if ( !empty($result) ) {
                        foreach ($result as $data):
                    ?>
                    <tr>
                        <td><?=$index++ ?></td>
                        <td><?=$data->nim ?></td>
                        <td><?=$data->nama ?></td>
                        <td><?=$data->uts ?></td>
                        <td><?=$data->uas ?></td>
                        <td><?=$data->tugas ?></td>
                        <td><?=$data->na ?></td>
                        <td><?=$data->status ?></td>
                        <td>
                        <a name="edit" id="edit" class="tombol" href="edit.php?nim=<?=$data->nim ?>">Edit</a>
                        <a name="hapus" id="hapus" class="tombol" href="process.php?nim=<?=$data->nim ?>">Delete</a>
                        </td>
                    </tr>
                    
                    <?php endforeach;
                        }
                        else{
                    ?>
                    
                    <tr>
                        <td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>