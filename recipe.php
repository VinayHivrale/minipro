<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'config.php'; ?>
    <nav>
        <a href="index.php">Home</a>
    </nav>
    <main>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM recipes WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                echo '<div class="recipe-detail">';
                echo '<img src="' . $row["thumbnail_url"] . '" alt="' . $row["name"] . '">';
                echo '<h1>' . $row["name"] . '</h1>';
                echo '<h3>Ingredients</h3>';
                echo '<p>' . nl2br($row["ingredients"]) . '</p>';
                echo '<h3>Instructions</h3>';
                echo '<p>' . nl2br($row["instructions"]) . '</p>';
                echo '</div>';
            } else {
                echo "Recipe not found.";
            }
        } else {
            echo "No recipe selected.";
        }
        $conn->close();
        ?>
    </main>
</body>
</html>
