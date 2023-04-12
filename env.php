<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "sexEducation";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/SexEducation/";
const IMG_URL = "SexEducation/public/uploads/";


function route($name){
    return BASE_URL .$name;
}
function redirect($key,$message,$route){
    $_SESSION[$key]=$message;
    switch ($key){
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header("Location:". BASE_URL. $route."?message=".$key);die;
}
const IMAGE_DIR ="./public/uploads/";
function save_file($fieldname, $folderName){ // Hàm lưu file, $fieldname là tên trường file, $target_dir là thư mục lưu file
    $file_uploaded = $_FILES[$fieldname]; // mảng chứa thông tin file
    $file_name =uniqid('',true).'-'. basename($file_uploaded["name"]); // lấy tên file
    $target_path = IMAGE_DIR.$folderName .$file_name; // đường dẫn file
    move_uploaded_file($file_uploaded["tmp_name"], $target_path); // di chuyển file vào thư mục
    return $file_name; // trả về tên file
}




