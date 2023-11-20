



<?php
// Your database query and pagination logic here
// ...

// Number of products per page
$productsPerPage = 10;

// Calculate the total number of pages
$totalPages = ceil(count($products) / $productsPerPage);

// Get the current page number from the query string
$page = $_GET['page'] ?? 1;
$page = max(1, min($page, $totalPages)); // Ensure $page is within a valid range

// Calculate the starting index for the current page
$startIndex = ($page - 1) * $productsPerPage;

// Retrieve products for the current page
$productsOnPage = array_slice($products, $startIndex, $productsPerPage);

// Display the products for the current page
foreach ($productsOnPage as $product) {
    // Display product details here
    echo $product['title'] . "<br>";
}

// Display pagination links
echo "<div class='pagination'>";
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i'>$i</a>";
}
echo "</div>";

// Next and Previous links
if ($page > 1) {
    echo "<a href='?page=" . ($page - 1) . "'>Previous</a>";
}
if ($page < $totalPages) {
    echo "<a href='?page=" . ($page + 1) . "'>Next</a>";
}
?>


