<?php
			$query = "SELECT * FROM create_quiz";
			$hasil = mysqli_query($koneksi, $query);
			while ($test = mysqli_fetch_array($hasil)){
			echo $test['Kode_soal'];
			}
			
			?>