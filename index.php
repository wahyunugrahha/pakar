<!DOCTYPE html>
<html>

<head>
    <title>Food Product Decision</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Evaluate Food Product</h1>
    <form method="POST" action="evaluate.php">
        <label>Product Type:</label>
        <select name="product_type">
            <option value="Rumahan">Rumahan</option>
            <option value="Industri">Industri</option>
        </select><br>

        <label>BPOM Standard:</label>
        <select name="bpom_standard">
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select><br>

        <label>Calories:</label>
        <select name="calories">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <label>Sugar:</label>
        <select name="sugar">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <label>Fat:</label>
        <select name="fat">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <label>Carbohydrates:</label>
        <select name="carbohydrates">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <label>Protein:</label>
        <select name="protein">
            <option value="Ideal">Ideal</option>
            <option value="Tidak Ideal">Tidak Ideal</option>
        </select><br>

        <input type="submit" value="Evaluate">
    </form>
</body>

</html>