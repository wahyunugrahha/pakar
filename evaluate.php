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
                'Ideal' => 1.0,
                'Tidak Ideal' => rand_float(0.0, 0.5)
            ];

            // Hitung tingkat Nutrisi dengan faktor kepastian
            $kepastian_nutrisi = ($kepastian[$kalori] + $kepastian[$gula] + $kepastian[$lemak] + $kepastian[$karbohidrat] + $kepastian[$protein]) / 5;

            if ($kepastian_nutrisi > 0.8) {
                $nutrisi = "Bagus";
            } elseif ($kepastian_nutrisi > 0.5 && $kepastian_nutrisi < 0.8) {
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
            echo "<p>Nutrisi: $nutrisi (CF: " . round($kepastian_nutrisi * 100, 2) . "%)</p>";
            echo "<p>Keputusan: $keputusan</p>";
        }
        ?>

        <form action="index.php" method="">
            <input type="submit" value="Kembali ke Halaman Utama">
        </form>


    </div>


    <?php
    function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
    {
        // Check if the start number is greater than the end number
        if ($st_num > $end_num) {
            return false; // Return false if start number is greater than end number
        }
        // Generate a random integer between the multiplied start and end numbers,
        // then divide it by the multiplication factor to get a random float value
        return mt_rand($st_num * $mul, $end_num * $mul) / $mul;
    }
    ?>
</body>

</html>