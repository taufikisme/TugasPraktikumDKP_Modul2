<html>
<head>
	<title>Aplikasi Pembuatan Bangun Datar Berwarna</title>
</head>
<body>
	<style type="text/css">
		#persegi {
			width: 200px;
			height: 200px;
		}

		#lingkaran {
			border-radius: 50%;
			width: 200px;
			height: 200px;
		}

		#segitiga {
		    width: 0;
		    height: 0;
		    border-left: 120px solid transparent;
		    border-right: 120px solid transparent;
		}
	</style>
	<h2>Aplikasi Pembuatan Bangun Datar Berwarna</h2>
	<p>Oleh :</p>
	<p>[+] Moh. Taufik Afandi [21120119130050]</p>
	<p>[+] Fachrul [21120119130094]</p>
	<p>[+] Kelompok 17 Shift 1</p>

	<form action="tugasmodul2.php" method="POST">
		<label>Pilih Jenis Bangun Datar: </label>
		<select name="bentuk">
			<option disabled selected>--Bentuk--</option>
			<option value="b1">Persegi</option>
			<option value="b2">Lingkaran</option>
			<option value="b3">Segitiga</option>
		</select>
		<br>
		<label>Pilih Warna Bangun Datar: </label>
		<select name="warna">
			<option disabled selected>--Warna--</option>
			<option value="w1">Merah</option>
			<option value="w2">Hijau</option>
			<option value="w3">Biru</option>
		</select>
		<button type="submit" name="submit_btn">Submit</button>
	</form>

	<?php
		if (isset($_POST['submit_btn'])){
			$bentuk = $_POST['bentuk'];
			$warna = $_POST['warna'];
			switch ($bentuk) {
				case 'b1': //Persegi
					switch ($warna) {
						case 'w1':
							echo "<div id='persegi' style='background:red;'></div>";
							break;

						case 'w2':
							echo "<div id='persegi' style='background:green;'></div>";
							break;
						case 'w3':
							echo "<div id='persegi' style='background:blue;'></div>";
							break;
					}
					break;

				case 'b2': //Lingkaran
					switch ($warna) {
						case 'w1':
							echo "<div id='lingkaran' style='background:red;'></div>";
							break;

						case 'w2':
							echo "<div id='lingkaran' style='background:green;'></div>";
							break;
						case 'w3':
							echo "<div id='lingkaran' style='background:blue;'></div>";
							break;
					}
					break;
				
				case 'b3': //Segitiga
					switch ($warna) {
						case 'w1':
							echo "<div id='segitiga' style='border-bottom: 200px solid red;'></div>";
							break;

						case 'w2':
							echo "<div id='segitiga' style='border-bottom: 200px solid green;'></div>";
							break;
						case 'w3':
							echo "<div id='segitiga' style='border-bottom: 200px solid blue;'></div>";
							break;
					}
					break;

			}
		}
	?>
</body>
</html>
