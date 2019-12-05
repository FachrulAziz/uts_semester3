<?php
include('konek.php');
$tampilcuti=mysql_query("select *from cuti_karyawan");
?>

	<table border="1" cellpadding="6" cellspacing="6">
		<tr>
		<th>NIK</th>
		<th>Nama</th>
		<th>Jabatan</th>
		<th>Bagian</th>
		<th>Pengajuan Cuti</th>
		<th>Sisa Cuti</th>
		</tr>
		
	<?php
	while($sisa_cuti=mysql_fetch_array($tampilcuti)) { ?>
	<tr>
	<td><?php echo $sisa_cuti['nik'];?></td>
	<td><?php echo $sisa_cuti['nama'];?></td>
	<td><?php echo $sisa_cuti['jabatan'];?></td>
	<td><?php echo $sisa_cuti['bagian'];?></td>
	<td><?php echo $sisa_cuti['pengajuan_cuti'];?></td>
	<td><?php echo $sisa_cuti['sisa_cuti'];?></td>
	</tr>
	<?php } ?>
</table>