<?php

$title = SITE_TITLE . ' | ' . 'Home';

$page_title = SITE_TITLE;

// fetch all products
$sql = "SELECT * FROM products ORDER BY time DESC";
$products = $conn->select($sql)->fetchAll();



// product search and else {product display}

$search = sanitize($_GET['search'] ?? '');

$productsearch = [
    'search' => "%$search%",
];

if ($search) {

    $query = "SELECT products.*, category.title AS category_title FROM products LEFT JOIN category ON products.category_id = category.id WHERE products.title LIKE ? OR category.title LIKE ? ORDER BY products.time DESC";

    $products = $conn->select($query, [$productsearch['search'], $productsearch['search']])->fetchAll(PDO::FETCH_ASSOC);
}


// filter by price

$filtermin = $_GET['minPrice'] ?? '';
$filtermax = $_GET['maxPrice'] ?? '';

$productfilter = [
    'minPrice' => $filtermin,
    'maxPrice' => $filtermax,
];

if ($filtermin && $filtermax) {
    $query = "SELECT * FROM products WHERE new_price BETWEEN ? AND ? ORDER BY time DESC";

    $products = $conn->select($query, [$productfilter['minPrice'], $productfilter['maxPrice']])->fetchAll(PDO::FETCH_ASSOC);

} elseif ($filtermin) {
    $query = "SELECT * FROM products WHERE (new_price >= ?) ORDER BY time DESC";

    $products = $conn->select($query, [$productfilter['minPrice']])->fetchAll(PDO::FETCH_ASSOC);

} elseif ($filtermax) {
    $query = "SELECT * FROM products WHERE (new_price <= ?) ORDER BY time DESC";

    $products = $conn->select($query, [$productfilter['maxPrice']])->fetchAll(PDO::FETCH_ASSOC);

} 



$new = $_GET['new-arrival'] ?? '';

$newarrival = [
    'new-arrival' => "%$new%",
];


if ($new) {

    // Fetch all products added in the last 7 days.
    $sevenDaysAgo = date('Y-m-d', strtotime('-7 days'));
    $query = "SELECT * FROM products WHERE time >= ? ORDER BY time DESC";
    $products = $conn->select($query, [$sevenDaysAgo])->fetchAll(PDO::FETCH_ASSOC);
}


//category1

$category1= $_GET['active-wears'] ?? '';

if ($category1) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [1])->fetchAll(PDO::FETCH_ASSOC);
}


//category2

$category2= $_GET['bodysuit'] ?? '';

if ($category2) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [2])->fetchAll(PDO::FETCH_ASSOC);
}


//category3

$category3= $_GET['co-ords'] ?? '';

if ($category3) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [3])->fetchAll(PDO::FETCH_ASSOC);
}


//category4

$category4= $_GET['dresses'] ?? '';

if ($category4) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [4])->fetchAll(PDO::FETCH_ASSOC);
}


//category5

$category5= $_GET['jacket'] ?? '';

if ($category5) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [5])->fetchAll(PDO::FETCH_ASSOC);
}


//category1

$category6= $_GET['jeans'] ?? '';

if ($category6) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [6])->fetchAll(PDO::FETCH_ASSOC);
}


//category1

$category7= $_GET['jumpsuit'] ?? '';

if ($category7) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [7])->fetchAll(PDO::FETCH_ASSOC);
}


//category8

$category8= $_GET['pants'] ?? '';

if ($category8) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [8])->fetchAll(PDO::FETCH_ASSOC);
}


//category9

$category9= $_GET['shorts'] ?? '';

if ($category9) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [9])->fetchAll(PDO::FETCH_ASSOC);
}


//category10

$category10= $_GET['skirts'] ?? '';

if ($category10) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [10])->fetchAll(PDO::FETCH_ASSOC);
}


//category11

$category11= $_GET['tops'] ?? '';

if ($category11) {

    $products = $conn->select("SELECT * FROM products WHERE category_id LIKE ? ORDER BY time DESC", [11])->fetchAll(PDO::FETCH_ASSOC);
}


//size6

$size6= $_GET['six-size'] ?? '';

if ($size6) {

    $products = $conn->select("SELECT * FROM products WHERE size_6 LIKE ? ORDER BY time DESC", [6])->fetchAll(PDO::FETCH_ASSOC);
}

$sql = "SELECT COUNT(id) FROM products WHERE size_6 = ?";
$countsize6 = $conn->select($sql, [6])->fetch();


//size8

$size8= $_GET['eight-size'] ?? '';

if ($size8) {

    $products = $conn->select("SELECT * FROM products WHERE size_8 LIKE ? ORDER BY time DESC", [8])->fetchAll(PDO::FETCH_ASSOC);
}

$sql = "SELECT COUNT(id) FROM products WHERE size_8 = ?";
$countsize8 = $conn->select($sql, [8])->fetch();


//size10

$size10= $_GET['ten-size'] ?? '';

if ($size10) {

    $products = $conn->select("SELECT * FROM products WHERE size_10 LIKE ? ORDER BY time DESC", [10])->fetchAll(PDO::FETCH_ASSOC);
}

$sql = "SELECT COUNT(id) FROM products WHERE size_10 = ?";
$countsize10 = $conn->select($sql, [10])->fetch();


//size12

$size12= $_GET['twelve-size'] ?? '';

if ($size12) {

    $products = $conn->select("SELECT * FROM products WHERE size_12 LIKE ? ORDER BY time DESC", [12])->fetchAll(PDO::FETCH_ASSOC);
}

$sql = "SELECT COUNT(id) FROM products WHERE size_12 = ?";
$countsize12 = $conn->select($sql, [12])->fetch();


//size14

$size14= $_GET['fourteen-size'] ?? '';

if ($size14) {

    $products = $conn->select("SELECT * FROM products WHERE size_14 LIKE ? ORDER BY time DESC", [14])->fetchAll(PDO::FETCH_ASSOC);
}

$sql = "SELECT COUNT(id) FROM products WHERE size_14 = ?";
$countsize14 = $conn->select($sql, [14])->fetch();


//size16

$size16= $_GET['sixteen-size'] ?? '';

if ($size16) {

    $products = $conn->select("SELECT * FROM products WHERE size_16 LIKE ? ORDER BY time DESC", [16])->fetchAll(PDO::FETCH_ASSOC);
}

$sql = "SELECT COUNT(id) FROM products WHERE size_16 = ?";
$countsize16 = $conn->select($sql, [16])->fetch();



// Number of products per page
$productsPerPage = 12;

// Calculate the total number of pages
$totalPages = ceil(count($products) / $productsPerPage);

// Get the current page number from the query string
$page = $_GET['page'] ?? 1;
$page = max(1, min($page, $totalPages)); // Ensure $page is within a valid range

// Calculate the starting index for the current page
$startIndex = ($page - 1) * $productsPerPage;

// Retrieve products for the current page
$productsOnPage = array_slice($products, $startIndex, $productsPerPage);


// Next and Previous links
if ($page > 1) {
    $minuspage= ($page - 1); 
    $hide_prev = '';
}else{
    $minuspage = '';
    $hide_prev = 'hide';
}

if ($page < $totalPages) {
    $pluspage = ($page + 1);
    $hide_next = '';
} else{
    $pluspage = '';
    $hide_next = 'hide';
}

//   dnd($totalPages);

// dnd($pro);

require_once('Core/controller/headernav.php');
require_once('views/guest/view.home.php');