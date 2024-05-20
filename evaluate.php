<!DOCTYPE html>
<html>

<head>
    <title>Hasil Evaluasi</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Hasil Evaluasi</h1>
    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jenis_produk = $_POST['jenis_produk'];
            $standar_bpom = $_POST['standar_bpom'];
            $kalori = $_POST['kalori'];
            $gula = $_POST['gula'];
            $lemak = $_POST['lemak'];
            $karbohidrat = $_POST['karbohidrat'];
            $protein = $_POST['protein'];

            // Penanganan ketidakpastian
            $kepastian = [
                'Ideal' => 1,
                'Tidak Ideal' => 0.5
            ];

            // Hitung tingkat Nutrisi dengan faktor kepastian
            $kepastian_nutrisi = ($kepastian[$kalori] + $kepastian[$gula] + $kepastian[$lemak] + $kepastian[$karbohidrat] + $kepastian[$protein]) / 5;

            if ($kepastian_nutrisi > 0.8) {
                $nutrisi = "Bagus";
            } elseif ($kepastian_nutrisi > 0.5) {
                $nutrisi = "Cukup";
            } else {
                $nutrisi = "Buruk";
            }

            // Forward Chaining untuk menentukan Keputusan
            if ($jenis_produk == "Rumahan") {
                if ($standar_bpom == "Ya") {
                    if ($nutrisi == "Bagus") {
                        $keputusan = "Tinggi";
                    } elseif ($nutrisi == "Cukup") {
                        $keputusan = "Cukup";
                    } else {
                        $keputusan = "Rendah";
                    }
                } else {
                    if ($nutrisi == "Bagus" || $nutrisi == "Cukup") {
                        $keputusan = "Cukup";
                    } else {
                        $keputusan = "Rendah";
                    }
                }
            } else { // Industri
                if ($standar_bpom == "Ya") {
                    if ($nutrisi == "Bagus") {
                        $keputusan = "Tinggi";
                    } elseif ($nutrisi == "Cukup") {
                        $keputusan = "Cukup";
                    } else {
                        $keputusan = "Rendah";
                    }
                } else {
                    $keputusan = "Rendah";
                }
            }

            echo "<p>Jenis Produk: $jenis_produk</p>";
            echo "<p>Standar BPOM: $standar_bpom</p>";
            echo "<p>Nutrisi: $nutrisi (Kepastian: " . round($kepastian_nutrisi * 100) . "%)</p>";
            echo "<p>Keputusan: $keputusan</p>";
        }
        ?>
    <form action="index.php" method="POST">
        <button type="submit">Kembali ke Halaman Utama</button>
    </form>
    </div>
</body>

</html>
