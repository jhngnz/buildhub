<?php
require_once __DIR__ . '/config/dbconfig.php';

// Test: fetch all users
$result = $conn->query("SELECT id, name, email, created_at FROM users");

if (!$result) {
    die("Query failed: " . $conn->error);
}

echo "<h2>Users Table:</h2>";
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>ID: {$row['id']} | {$row['name']} ({$row['email']}) - Created: {$row['created_at']}</li>";
}
echo "</ul>";

// Test: fetch all orders
$result2 = $conn->query("SELECT id, material, quantity, status, requested_date FROM orders");

if (!$result2) {
    die("Query failed: " . $conn->error);
}

echo "<h2>Orders Table:</h2>";
echo "<ul>";
while ($row = $result2->fetch_assoc()) {
    echo "<li>Order #{$row['id']} | {$row['material']} - {$row['quantity']} | Status: {$row['status']} | Date: {$row['requested_date']}</li>";
}
echo "</ul>";
