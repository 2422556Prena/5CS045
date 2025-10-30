<?php
include("db.php");
$sql = "SELECT title, genre, price, release_date FROM books ORDER BY title";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book List</title>
<style>
body { font-family: Arial; margin: 30px; }
table { border-collapse: collapse; width: 80%; }
th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
th { background-color: #f2f2f2; }
</style>
</head>
<body>
<h1>My Book Collection</h1>
<table>
<tr><th>Title</th><th>Genre</th><th>Price (£)</th><th>Release Date</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($row['title']) ?></td>
<td><?= htmlspecialchars($row['genre']) ?></td>
<td><?= number_format($row['price'], 2) ?></td>
<td><?= date("d/m/Y", strtotime($row['release_date'])) ?></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>

