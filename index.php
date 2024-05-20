<!DOCTYPE html>
<html>

<head>
    <title>Keputusan Produk Makanan</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Evaluasi Produk Makanan</h1>
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
</body>

</html>