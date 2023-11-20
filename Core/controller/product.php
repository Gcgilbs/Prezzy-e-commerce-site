<?php

$title = SITE_TITLE . ' | ' . 'View Product';

$page_title = SITE_TITLE;



// product search {product display}

$search = sanitize($_GET['search'] ?? '');

if ($search) {
    // Use string concatenation to include $productsearch['search'] in the header
    header('Location: /commerce101/?search=' . $search);
}



if(isset($_GET['items'])){
    $items = sanitize($_GET['items']);

    $productitem = $conn->select("SELECT * FROM products WHERE id = ?",[$items])->fetch();
    $images = explode(',', $productitem['image']);
}



        // fetch size6 if not equal 0
        $sizeinfo6 = $conn->select("SELECT * FROM products WHERE id = ? AND size_6 = ?", [ $productitem['id'],6])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible6 = !empty($sizeinfo6['size_6']) ? 'door' : 'invisible';

        // fetch size8 if not equal 0
        $sizeinfo8 = $conn->select("SELECT * FROM products WHERE id = ? AND size_8 = ?", [ $productitem['id'],8])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible8 = !empty($sizeinfo8['size_8']) ? '' : 'invisible';

        // fetch size10 if not equal 0
        $sizeinfo10 = $conn->select("SELECT * FROM products WHERE id = ? AND size_10 = ?", [ $productitem['id'],10])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible10 = !empty($sizeinfo10['size_10']) ? '' : 'invisible';

        // fetch size12 if not equal 0
        $sizeinfo12 = $conn->select("SELECT * FROM products WHERE id = ? AND size_12 = ?", [ $productitem['id'],12])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible12 = !empty($sizeinfo12['size_12']) ? '' : 'invisible';

        // fetch size14 if not equal 0
        $sizeinfo14 = $conn->select("SELECT * FROM products WHERE id = ? AND size_14 = ?", [ $productitem['id'],14])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible14 = !empty($sizeinfo14['size_14']) ? '' : 'invisible';

        // fetch size16 if not equal 0
        $sizeinfo16 = $conn->select("SELECT * FROM products WHERE id = ? AND size_16 = ?", [ $productitem['id'],16])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible16 = !empty($sizeinfo16['size_16']) ? '' : 'invisible';


        // dnd($productitem['id']);

require_once('Core/controller/headernav.php');
require_once('views/guest/view.product.php');