<?php 



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $removecart_id = sanitize($_POST['x-marked']) ?? null;



if(!$removecart_id){
    header('Location: /commerce101/');
    exit;
}

    // Delete from cart if click x
    $cart = $conn->select("DELETE FROM cart WHERE session=? AND id = ? ",[session_id(), $removecart_id])->fetch();


    header('Location: /commerce101/');


}
