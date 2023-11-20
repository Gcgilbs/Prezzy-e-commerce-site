<?php

function abort($code){
    http_response_code($code);
    require "Views/guest/view.$code.php";
    die;
}


function dnd($el){
  echo "<pre>";
  var_dump($el);
  echo "</pre>";
  die;
}



function sanitize($el){
    return htmlspecialchars($el,ENT_QUOTES|ENT_HTML5,'UTF-8');
 }
 
 
 function length_of_string($el,$len=8){
     if(strlen($el) < $len){
         return false;
     }
     return true;
 }


 function Generatereferral(){

    if(!isset($_SESSION['referral'])){
      $length = 6;
      $character = '012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789QWERTYUIOPLKJHGFDSAZXCVBNM';
      $code = '';
  
    for ($i = 0; $i <$length; $i++) {
      $index = rand(0, strlen($character) - 1);
      $code .= $character[$index];
    }
    $_SESSION['referral'] = $code;
  
  } else {
    $code = $_SESSION['referral'];
  }
  
  return $code;
  }


  //multiple file upload
function multiple($uploads) {
    $target_dir = 'uploads/';
    $allowed_size = 4100000;
    $allowed_types = array('jpg', 'jpeg', 'gif', 'png');
    $error = false;
    $uploaded_files = array();
  
    if (!is_dir($target_dir)) {
        mkdir('uploads');
    }
  
    foreach ($uploads['tmp_name'] as $index => $tmp_name) {
        $target_file = $target_dir . time() . basename($uploads['name'][$index]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $file_size = $uploads['size'][$index];
  
        if (!empty($tmp_name)) {
            $get_img_size = getimagesize($tmp_name);
  
            if (!$get_img_size) {
                $error = true;
            }
        } else {
            return "Image is required";
        }
  
        if ($file_size > $allowed_size) {
            $error = true;
        }
  
        if (!in_array($file_type, $allowed_types)) {
            $error = true;
        }
  
        if (!$error) {
            if (move_uploaded_file($tmp_name, $target_file)) {
                $uploaded_files[] = $target_file;
            }
        }
    }
  
    return $uploaded_files;
  }



//   single file uplpoad
function file_upload($upload){
  $target_dir = 'uploads/';
  $allowed_size = 4100000;
  $allowed_types = Array('jpg','jpeg','gif','png');
  $error = false;

  if(!is_dir($target_dir)){
      $target_dir =mkdir('uploads');
  }
  $target_file = $target_dir .time().basename($upload['name']);
  $file_type= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $file_size = $upload['size'];

  if (!empty($upload["tmp_name"])) {
    $get_img_size = getimagesize($upload["tmp_name"]);

    if (!$get_img_size) {
      $error = true;
    }
  } else {
    return "Image is required";
  }

  
  if( $file_size > $allowed_size){
      $error = true;
  }

  if(!in_array($file_type,$allowed_types)){
      $error = true;
  }


  if(!$error){
      
      if(move_uploaded_file($upload['tmp_name'], $target_file)){
          return $target_file;
      }
  }
 
  // return "/Loginimages/User3.jpg";
}


//multiple file upload
function file_upload_multiple($uploads) {
  $target_dir = 'uploads/';
  $allowed_size = 4100000;
  $allowed_types = array('jpg', 'jpeg', 'gif', 'png');
  $error = false;
  $uploaded_files = array();

  if (!is_dir($target_dir)) {
      mkdir('uploads');
  }

  // Convert a single upload to an array to handle both cases
  if (!is_array($uploads['tmp_name'])) {
      $uploads = array(
          'name' => array($uploads['name']),
          'type' => array($uploads['type']),
          'tmp_name' => array($uploads['tmp_name']),
          'error' => array($uploads['error']),
          'size' => array($uploads['size'])
      );
  }

  foreach ($uploads['tmp_name'] as $index => $tmp_name) {
      $target_file = $target_dir . time() . basename($uploads['name'][$index]);
      $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      $file_size = $uploads['size'][$index];

      if (!empty($tmp_name)) {
          $get_img_size = getimagesize($tmp_name);

          if (!$get_img_size) {
              $error = true;
          }
      } else {
          return "Image is required";
      }

      if ($file_size > $allowed_size) {
          $error = true;
      }

      if (!in_array($file_type, $allowed_types)) {
          $error = true;
      }

      if (!$error) {
          if (move_uploaded_file($tmp_name, $target_file)) {
              $uploaded_files[] = $target_file;
          }
      }
  }

  return $uploaded_files;
}




