<?php

$title = SITE_TITLE . ' | ' . 'Admin upload';

$page_title = SITE_TITLE;

$nav_title = 'ADMIN ORDER UPLOADS';

$error= [];


if(isset($_POST['edit'])){
    // dnd($_FILES['image']);
    
        $uploaded_files = multiple($_FILES['image']);
        $title = sanitize($_POST['title']);
        $new_price = sanitize($_POST['new_price']);
        $old_price = sanitize($_POST['old_price']);
        $category = sanitize($_POST['category']);

        $size_6 = isset($_POST['size_6']) ? 6 : 0;
        $size_8 = isset($_POST['size_8']) ? 8 : 0;
        $size_10 = isset($_POST['size_10']) ? 10 : 0;
        $size_12 = isset($_POST['size_12']) ? 12 : 0;
        $size_14 = isset($_POST['size_14']) ? 14 : 0;
        $size_16 = isset($_POST['size_16']) ? 16 : 0;


        $products = [
            'title'=>$title,
            'new_price' => $new_price,
            'old_price' => $old_price,
            'category' => $category,
        ];

        if( array_sum($_FILES["image"]["size"]) <= 0) {
            $error[] = "image is required";
        }  
        
        if( array_sum($_FILES["image"]["size"]) >= 4100000) {
            $error[] = "image shouldn't be more than 4mb";
        }

        if (!$products['title']) {
            $error[] = 'title is required';
        }

        if (!$products['new_price']) {
            $error[] = 'new_price is required';
        }

        if (!$products['old_price']) {
            $error[] = 'old_price is required';
        }

        if (!$products['category']) {
            $error[] = 'category is required';
        }


        if (isset($_FILES["image"]) && array_sum($_FILES["image"]["size"]) > 0 && array_sum($_FILES["image"]["size"]) < 4100000) {

        if (empty($error)) {
           
            $image_paths = implode(', ', $uploaded_files); // Combine image paths into a single string
            
        $sql = "INSERT INTO products (image,title,new_price,old_price,category_id,size_6,size_8,size_10,size_12,size_14,size_16) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $cook = $conn->insert($sql, [$image_paths,$title,$new_price,$old_price,$category,$size_6,$size_8,$size_10,$size_12,$size_14,$size_16]);

        }
    }

}


$sql = "SELECT * FROM category";
$category = $conn->select($sql)->fetchAll();


$sql = "SELECT COUNT(id) FROM products";
$countproduct = $conn->select($sql)->fetch();

// dnd($countproduct[0]);
require_once('views/viewaccess/view.admin.php');