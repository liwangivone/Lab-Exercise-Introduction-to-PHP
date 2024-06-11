<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ivone - Lab Exercise PHP</title>
	</head>
	<body>
		<?php
		// 1. Tampilkan text "Hello World"
		echo "Hello World<br>";

		// 2. Tampilkan 10 baris text "Hello World"
		for ($i = 0; $i < 10; $i++) {
			echo "Hello World<br>";
		}

		// 3. Tampilkan 10 baris text "Hello World", tapi setiap baris genap ditambah text "Hello World - [no baris]"
		for ($i = 1; $i <= 10; $i++) {
			if ($i % 2 == 0) {
				echo "Hello World - $i<br>";
			} else {
				echo "Hello World<br>";
			}
		}

		// 4. Buat array berisi nama bulan dari Januari hingga Desember, dan tampilkan
		$months = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		foreach ($months as $month) {
			echo $month . "<br>";
		}

		// 5. Buat array 2 dimensi, di mana index pertama menyimpan nama bulan dan index kedua menyimpan hari libur nasional di bulan tersebut. Lalu tampilkan.
		$months_holidays = array(
			"Januari" => "Tahun Baru",
			"Februari" => "Imlek",
			"Maret" => "Nyepi",
			"April" => "Waisak",
			"Mei" => "Kenaikan Isa Almasih",
			"Juni" => "Idul Fitri",
			"Juli" => "Hari Kemerdekaan",
			"Agustus" => "Hari Raya Idul Adha",
			"September" => "Tahun Baru Islam",
			"Oktober" => "Maulid Nabi",
			"November" => "Hari Pahlawan",
			"Desember" => "Natal"
		);
		foreach ($months_holidays as $month => $holiday) {
			echo "$month - $holiday<br>";
		}

		// 6. Buat 4 functions untuk membuat pengurangan, perkalian, pembagian dan penjumlahan. Lalu panggil function tersebut dengan untuk melakukan operasi aritmatika.
		// Function untuk penjumlahan
		function penjumlahan($a, $b) {
			return $a + $b;
		}

		// Function untuk pengurangan
		function pengurangan($a, $b) {
			return $a - $b;
		}

		// Function untuk perkalian
		function perkalian($a, $b) {
			return $a * $b;
		}

		// Function untuk pembagian
		function pembagian($a, $b) {
			if ($b == 0) {
				return "Error: Division by zero";
			} else {
				return $a / $b;
			}
		}

		// Panggil function dan tampilkan hasilnya
		echo "Hasil penjumlahan 23 dan 2 adalah " . penjumlahan(23, 2) . "<br>";
		echo "Hasil pengurangan 23 dan 2 adalah " . pengurangan(23, 2) . "<br>";
		echo "Hasil perkalian 23 dan 2 adalah " . perkalian(23, 2) . "<br>";
		echo "Hasil pembagian 23 dan 2 adalah " . pembagian(23, 2) . "<br>";
		?>

	</body>
</html>