<!DOCTYPE html>
<html>

<head>
    <title>Evaluation Result</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Evaluation Result</h1>
    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product_type = $_POST['product_type'];
            $bpom_standard = $_POST['bpom_standard'];
            $calories = $_POST['calories'];
            $sugar = $_POST['sugar'];
            $fat = $_POST['fat'];
            $carbohydrates = $_POST['carbohydrates'];
            $protein = $_POST['protein'];

            // Determine Nutrisi
            if ($calories == "Ideal" && $sugar == "Ideal" && $fat == "Ideal" && $carbohydrates == "Ideal" && $protein == "Ideal") {
                $nutrisi = "Bagus";
            } elseif ($calories == "Ideal" && $sugar == "Ideal" && $fat == "Ideal" && $carbohydrates == "Tidak Ideal" && ($protein == "Ideal" || $protein == "Tidak Ideal")) {
                $nutrisi = "Cukup";
            } elseif ($calories == "Ideal" && $sugar == "Ideal" && $fat == "Tidak Ideal" && ($carbohydrates == "Ideal" || $carbohydrates == "Tidak Ideal") && ($protein == "Ideal" || $protein == "Tidak Ideal")) {
                $nutrisi = "Cukup";
            } elseif ($calories == "Ideal" && $sugar == "Tidak Ideal" && ($fat == "Ideal" || $fat == "Tidak Ideal") && ($carbohydrates == "Ideal" || $carbohydrates == "Tidak Ideal") && ($protein == "Ideal" || $protein == "Tidak Ideal")) {
                $nutrisi = "Cukup";
            } else {
                $nutrisi = "Buruk";
            }

            // Determine Keputusan
            if ($product_type == "Rumahan") {
                if ($bpom_standard == "Ya") {
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
                if ($bpom_standard == "Ya") {
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

            echo "<p>Product Type: $product_type</p>";
            echo "<p>BPOM Standard: $bpom_standard</p>";
            echo "<p>Nutrisi: $nutrisi</p>";
            echo "<p>Keputusan: $keputusan</p>";
        }
        ?>
    </div>
</body>

</html>