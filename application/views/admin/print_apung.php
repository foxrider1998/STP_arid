<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Data apung</title>
</head>

<body>
	<center>
		<h1>DATA PAKAN APUNG</h1>
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
		foreach ($apung as $apg) { ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $apg->nama ?></td>
				<td><?php echo $apg->quantity ?></td>
				<td><?php echo $apg->tgl_produksi ?></td>
				<td><?php echo $apg->resep ?></td>
				<td><?php echo $apg->size ?></td>
				<td><?php echo $apg->kavling ?></td>
				<td><?php echo $apg->operator ?></td>
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