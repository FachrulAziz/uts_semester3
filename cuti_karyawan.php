<?php
include("konek.php"); //untuk gabung file
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into cuti_karyawan(nik,nama,jabatan,bagian,pengajuan_cuti,sisa_cuti) values
	('".$_POST['nik']."',
	'".$_POST['nama']."',
	'".$_POST['jabatan']."',
	'".$_POST['bagian']."',
	'".$_POST['pengajuan_cuti']."',
	'".$_POST['sisa_cuti']."')";
	$proses_data=mysql_query($query_tambah_data);
if($proses_data){
	echo 'Tambah Data Berhasil';
}else{
	echo mysql_error();
}

}
?>

<form method="POST"action=""><!---form untuk kirim data ke database--> 
<table><!---name harus sama dengan database-->
	<tr>
		<td>Nik</td>
		<td><input name="nik" type="varchar"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input name="nama" type="varchar"></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td><input name="jabatan" type="varchar"></td>
	</tr>
	<tr>
		<td>Bagian</td>
		<td><input name="bagian" type="varchar"></td>
	</tr>
	<tr>
		<td>Pengajuan Cuti</td>
		<td><input name="pengajuan_cuti" type="int"></td>
	</tr>
	<tr>
		<td>Sisa Cuti</td>
		<td><input name="sisa_cuti" type="int"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>