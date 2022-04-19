<!--membuat sambungan ke db-->
<?php
	include('config.php');
?>

<html>
	<head>
	<title>Rekod Yuran</title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 10px;
	}
	body {
		background-color: #40E0D0;
	}
	</style>
   

	<body>
	<h2><p style="font-family:'Courier New'">REKOD YURAN AHLI</p></h2>
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=#b4f0ea>
		<tr>
		<th>ID PELAJAR</th>
		<th>NAMA PELAJAR</th>
		<th>KELAS</th>
		<th>YURAN(RM)</th>
		<th>TARIKH</th>
		<th>CATATAN</th>
		<th>PADAM</th>
		<th>EDIT</th>
		</tr>
	  
		<!--memaparkan rekod PELAJAR-->
		<?php
	    
		$papar=mysqli_query($connect, "SELECT * FROM pelajar");
		while($row=mysqli_fetch_array($papar)){
			 
		echo "
		<tr>
			<td>".$row['id_pelajar']."</td>
			<td>".$row['nama_pelajar']."</td>
			<td>".$row['kelas']."</td>
			<td>".$row['yuran']."</td>
			<td>".$row['tarikh']."</td>
			<td>".$row['catatan']."</td>
			
			<td>","<a  href=\"padam.php?id_pelajar=".$row['id_pelajar']. "\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">Padam</td>

          <td>","<a  href=\"edit.php?id_pelajar=".$row['id_pelajar']. "\" Onclick=\"return confirm('Rekod ini akan diedit')\">Edit</td>
				
		</tr>
		";
		
		}
		?>		  
	</table>
	<p><a href="tambah.php"><button name='tambah'type="submit">&#43; TAMBAH PELAJAR</button></a></p>
	
	</center>
	</body>
</html>
