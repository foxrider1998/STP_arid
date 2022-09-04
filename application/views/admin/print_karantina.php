<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data karantina</title>
</head>

<body>
    <center>
        <h1>DATA PAKAN karantina</h1>
    </center>
    <center>
        <h1>PT.SURI TANI PEMUKA</h1>
        <h2>AQUACULTURE PURWAKARTA</h2>
    </center>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA PAKAN</th>
            <th>QUANTITY</th>
            <th>TANGGAL PRODUKSI</th>
            <th>RESEP</th>
            <th>MESIN</th>
            <th>SETATUS</th>
            <th>KETERANGAN</th>
            <th>shif & grup</th>
        </tr>
        <?php
        $no = 1;
        foreach ($karantina as $krn) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $krn->nama ?></td>
                <td><?php echo $krn->quantity ?></td>
                <td><?php echo $krn->tgl_produksi ?></td>
                <td><?php echo $krn->resep ?></td>
                <td><?php echo $krn->mesin ?></td>
                <td><?php echo $krn->setatus ?></td>
                <td><?php echo $krn->shif ?></td>
            </tr>
        <?php
        };
        ?>
    </table>
    <!-- script dibawah ini untuk menampilkan jendela print -->
    <script type="text/javascript">
        window.print()
    </script>
</body>

</html>