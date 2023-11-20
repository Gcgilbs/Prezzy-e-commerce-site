<?php

$title = SITE_TITLE . ' | ' . 'Wishlist';

$page_title = SITE_TITLE;


// product search {product display}

$search = sanitize($_GET['search'] ?? '');

if ($search) {
    // Use string concatenation to include $productsearch['search'] in the header
    header('Location: /commerce101/?search=' . $search);
}



$wishlistproducts = $conn->select("SELECT * FROM wishlist WHERE session = ? AND publish=?",[session_id(),1])->fetchAll();



if(!$wishlistproducts){
    $hide_wishlist = '';
} else{
    $hide_wishlist = 'no-show-wishlist';
}


        // dnd(!$wishlistproducts);

require_once('Core/controller/headernav.php');
require_once('views/guest/view.wishlist.php');