<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data gudang</title>
</head>

<body>
    <center>
        <h1>DATA PAKAN gudang</h1>
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
            <th>expired</th>

        </tr>
        <?php
        $no = 1;
        foreach ($gudang as $gdg) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $gdg->nama ?></td>
                <td><?php echo $gdg->quantity ?></td>
                <td><?php echo $gdg->tgl_produksi ?></td>
                <td><?php echo $gdg->expired ?></td>

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