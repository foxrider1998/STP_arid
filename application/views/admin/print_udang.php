<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data pakan udang</title>
</head>

<body>
    <center>
        <h1>DATA PAKAN UDANG</h1>
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
            <th>SIZE</th>
            <th>KAVLING</th>
            <th>NAMA OPRATOR</th>
        </tr>
        <?php
        $no = 1;
        foreach ($udang as $udg) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $udg->nama ?></td>
                <td><?php echo $udg->quantity ?></td>
                <td><?php echo $udg->tgl_produksi ?></td>
                <td><?php echo $udg->resep ?></td>
                <td><?php echo $udg->size ?></td>
                <td><?php echo $udg->kavling ?></td>
                <td><?php echo $udg->operator ?></td>
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