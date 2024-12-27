<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update product details
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $update_sql = "UPDATE products SET price = ?, quantity = ? WHERE product_id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("dii", $price, $quantity, $product_id);
    if ($stmt->execute()) {
        $message = "Product updated successfully!";
    } else {
        $message = "Error updating product.";
    }
}

// Refresh product list
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
        <a href="logout.php">Logout</a>
    </header>
    <main>
        <?php if (isset($message)): ?>
            <p><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price (€)</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <form method="POST">
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td>
                                <input type="number" name="price" value="<?php echo htmlspecialchars($row['price']); ?>" step="0.01" required>
                            </td>
                            <td>
                                <input type="number" name="quantity" value="<?php echo htmlspecialchars($row['quantity']); ?>" required>
                            </td>
                            <td>
                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                <button type="submit">Update</button>
                            </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
