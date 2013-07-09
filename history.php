<?php include("include/header.php"); ?>
<?php include("include/menu.php"); 
if(empty($_SESSION['logged_in']))
{
	echo '<meta http-equiv="refresh" content="0;url=login.php">';
}
?>



<div class="cleaner_h10"><div id="space-white"><div id="inner-space-white-left"></div><div id="inner-space-white-right"></div></div></div>


<?php echo include("include/slider.php"); ?>

<div class="cleaner_h10"><div id="space-white"><div id="inner-space-white-left"></div><div id="inner-space-white-right"></div></div></div>

<div id="content">

	<div id="content-left">
	<div class="cleaner_h10"></div>
	<div class="cleaner_h5"></div>
		<ul id="crumbs" style="width:640px;">
			<li><a href="#">Home &raquo;</a></li>
			<li>Headline News</li>
		</ul>
		
		<div class="cleaner_h10"></div>
		
		<div id="title-news">HISTORY PESANAN </div>
		<div class="cleaner_h10"></div>
		<table cellpadding="5" border="1" style="border-collapse:collapse; width:95%;">
		<tr>
			<td>Kode Pemesanan</td>
			<td>Tanggal Pesanan</td>
			<td>Jumlah Pesanan</td>
			<td>Detail Pesanan</td>
		</tr>
		<?php
			$kueri = "SELECT id_member, id_pemesanan, tgl_pesan, (select count(id_pemesanan_detail) from tbl_pemesanan_detail where id_pemesanan=a.id_pemesanan) as jum FROM `tbl_pemesanan` a where id_member='".$_SESSION['id_member']."'";
			$STH = $DBH->prepare($kueri);
			$STH->execute();
			
			$total = "";
			while($data = $STH->fetch())
			{
				?>
					<tr>
						<td><?php echo $data['id_pemesanan']; ?></td>
						<td><?php echo $data['tgl_pesan']; ?></td>
						<td><?php echo $data['jum']; ?></td>
						<td><div class="index-button"><a href="detail-history.php?id=<?php echo $data['id_pemesanan']; ?>">Detail Pesanan</a></div></td>
					</tr>
				<?php
			}
		?>
		</table>
		
	<div class="cleaner_h10"></div>
	<div class="cleaner_h5"></div>
	</div><!--akhir content-left -->
	
	<div id="content-right">
	
	<?php include("include/kanan.php"); ?>
	
	</div><!--akhir content-right -->

<div class="cleaner_h0"></div>

</div><!--akhir content -->

<div class="cleaner_h10"><div id="space-white"><div id="inner-space-white-left"></div><div id="inner-space-white-right"></div></div></div>

<?php include("include/bottom.php"); ?>

<div class="cleaner_h20"></div>

<div id="footer-menu">
	<div id="center-footer-menu">
	<a href="">Beranda</a> | Profil Instansi | Layanan Kami | Peluang Investasi | Mekanisme Perijinan | Indexs Berita | Galeri Foto | Download | Hubungi Kami
	</div>
</div><!--akhir footer-menu -->

<div id="footer">
	<div class="cleaner_h20"></div>
		Copyright � 2012 Riau Aktual. All Rights Reserved.
			<div class="cleaner_h0"></div>
				Mirah Hotel, Yos Sudarso Street 28. Banyuwangi, East Java, Indonesia. Tel.-62 333 420600. Fax.-62 333 414890
			<div class="cleaner_h0"></div>
		You come here with the IP Address 180.247.235.203
	<div class="cleaner_h20"></div>
</div><!--akhir footer -->

</body>
</html>
