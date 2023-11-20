<?php


// product search and else {product display}

$search = sanitize($_GET['search'] ?? '');

$productsearch = [
    'search' => "%$search%",
];

if ($search) {

    $query = "SELECT products.*, category.title AS category_title FROM products LEFT JOIN category ON products.category_id = category.id WHERE products.title LIKE ? OR category.title LIKE ? ORDER BY products.time DESC";

    $products = $conn->select($query, [$productsearch['search'], $productsearch['search']])->fetchAll(PDO::FETCH_ASSOC);
}

// wishlist toogle


if(isset($_GET['wishlist_id'])){
    $wishlist_id = sanitize($_GET['wishlist_id']);

    $wish = $conn->select("SELECT * FROM wishlist WHERE session=? AND product_id = ?",[session_id(), $wishlist_id])->fetch();

    if($wish) {

    $setTo = ($wish['publish'] == 1)? 0 : 1;
    
    $conn->update("UPDATE wishlist SET publish=? WHERE session=? AND product_id = ?",[$setTo,session_id(),$wishlist_id]);

    }

    if(!$wish) {
        
    $res = $conn->select("SELECT * FROM products WHERE id=?",[$wishlist_id])->fetch();

    $sql = "INSERT INTO wishlist (session, title, image, new_price, product_id) VALUES(?,?,?,?,?)";

    $cook = $conn->insert($sql, [session_id(),$res['title'],$res['image'],$res['new_price'],$wishlist_id]);

    }

}


// Count wishlist that is added
$countwishlist = $conn->select("SELECT COUNT(*) FROM wishlist WHERE session=? AND publish = ?", [session_id(), 1])->fetch(PDO::FETCH_ASSOC);



// cartlist add


if(isset($_GET['cartlist_id'])){
    $cartlist_id = sanitize($_GET['cartlist_id']);
    $totalnumber = sanitize($_GET['totalnumber']);
    $totalsize = sanitize($_GET['totalsize']);

    // Check if the cart entry already exists
    $cart = $conn->select("SELECT * FROM cart WHERE session=? AND product_id = ? AND sizes=?",[session_id(), $cartlist_id,$totalsize])->fetch();

    if(!$cart) {
        
    $res = $conn->select("SELECT * FROM products WHERE id=?",[$cartlist_id])->fetch();

    $sql = "INSERT INTO cart (session, title, image, new_price,total_number, sizes, product_id) VALUES(?,?,?,?,?,?,?)";

    $cook = $conn->insert($sql, [session_id(),$res['title'],$res['image'],$res['new_price'],$totalnumber, $totalsize, $cartlist_id]);

    }
}


// Count cartlist that is added
$countcartlist = $conn->select("SELECT COUNT(*) FROM cart WHERE session=?", [session_id()])->fetch(PDO::FETCH_ASSOC);



// fetch all cart to the session
$sql = "SELECT * FROM cart WHERE session =? ";
$cartorders = $conn->select($sql,[session_id()])->fetchAll();



if(!$cartorders){
    $hide_cartlist = '';
    $hide_checkout = 'no-show-wishlist';
} else{
    $hide_cartlist = 'no-show-wishlist';
    $hide_checkout = '';
}


        // dnd(!$cartorders);