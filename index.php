<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'config.php'; ?>
    <header>
        <h1>Delicious Recipes</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
    </nav>
    <main>
        <section class="recipe-list">
            <?php
            $sql = "SELECT id, name, thumbnail_url FROM recipes";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="recipe-card">';
                    echo '<a href="recipe.php?id=' . $row["id"] . '">';
                    echo '<img src="' . $row["thumbnail_url"] . '" alt="' . $row["name"] . '">';
                    echo '<h2>' . $row["name"] . '</h2>';
                    echo '</a>';
                    echo '</div>';
                }
            } else {
                echo "No recipes available.";
            }
            $conn->close();
            ?>
        </section>
    </main>
</body>
</html>
