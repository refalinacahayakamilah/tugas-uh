<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="add_book.php">Tambah Buku</a>
    <table>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT id, title, author, year FROM books";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["title"]. "</td>
                        <td>" . $row["author"]. "</td>
                        <td>" . $row["year"]. "</td>
                        <td><a href='delete_book.php?id=" . $row["id"]. "'>Hapus</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada buku yang tersedia</td></tr>";
        }
        ?>
    </table>
</body>
</html>