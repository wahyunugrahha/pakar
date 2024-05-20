<!DOCTYPE html>
<html>

<head>
    <title>Keputusan Produk Makanan</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="assets/css/select2.min.css" href="styles.css">
</head>

<body>
    <h1 class="">Evaluasi Produk Makanan</h1>
    <form method="POST" action="evaluate.php">
        <label>Jenis Produk:</label>
        <select name="jenis_produk">
            <option value="Rumahan">Rumahan</option>
            <option value="Industri">Industri</option>
        </select><br>

        <label>Standar BPOM:</label>
        <select name="standar_bpom">
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select><br>

        <label>Kalori:</label>
        <select name="kalori">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <label>Gula:</label>
        <select name="gula">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <label>Lemak:</label>
        <select name="lemak">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <label>Karbohidrat:</label>
        <select name="karbohidrat">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <label>Protein:</label>
        <select name="protein">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <input type="submit" value="Evaluasi">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="assets/js/select2.min.js"></script>
</body>

</html>