<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data IKAN</title>
</head>

<body>
    <center>
        <h3>DATA PAKAN IKAN</h3>
    </center>
    <center>
        <h1>PT.SURI TANI PEMUKA</h1>
        <h4>AQUACULTURE PURWAKARTA</h4>
    </center>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA PAKAN</th>
            <th>QUANTITY</th>
            <th>TANGGAL PRODUKSI</th>
            <th>RESEP</th>
            <th>SIZE</th>
            <th>KAVLING</th>
            <th>NAMA OPRATOR</th>
        </tr>
        <?php
        $no = 1;
        foreach ($ikan as $ikn) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ikn->nama ?></td>
                <td><?php echo $ikn->quantity ?></td>
                <td><?php echo $ikn->tgl_produksi ?></td>
                <td><?php echo $ikn->resep ?></td>
                <td><?php echo $ikn->size ?></td>
                <td><?php echo $ikn->kavling ?></td>
                <td><?php echo $ikn->operator ?></td>
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