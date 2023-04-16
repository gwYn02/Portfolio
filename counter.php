<?php
// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Increment page visit counter
mysqli_query($conn, "UPDATE page_visits SET count = count + 1");

// Get total page visits
$result = mysqli_query($conn, "SELECT count FROM page_visits");
$row = mysqli_fetch_assoc($result);
$total_visits = $row['count'];

// Display page visit counter
echo "Total Page Visits: " . $total_visits;

// Close connection
mysqli_close($conn);
?>
