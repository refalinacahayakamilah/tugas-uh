<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    $sql = "INSERT INTO books (title, author, year) VALUES ('$title', '$author', '$year')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Tambah Buku Baru</h1>
    <form method="post" action="">
        <label for="title">Judul:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="author">Pengarang:</label>
        <input type="text" id="author" name="author" required>
        <br>
        <label for="year">Tahun Terbit:</label>
        <input type="number" id="year" name="year" required>
        <br>
        <input type="submit" value="Tambah Buku">
    </form>
    <br>
    <a href="index.php">Kembali ke Daftar Buku</a>
</body>
</html>