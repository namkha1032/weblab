<?php

if(isset($_POST))
{
    require_once 'database.php'; 
    
    $currcat = $_GET['category'];
    $old_name = $_GET['name'];
    $name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $imgurl = $_POST['imgurl'];
    $errors = array();

    $name = htmlspecialchars($name);
    $name = trim($name);
    $price = trim($price);
    $imgurl = trim($imgurl);
    

    $filteredPrice = filter_var($price, 
                          FILTER_VALIDATE_INT, 
                          array('options' => array('min_range' => 0)));

    if($name==""){
        array_push($errors,"Name is empty !!!");
    } 
    if(!$filteredPrice){
        array_push($errors,"Price is invalid !!!");
    }

    $query = "SELECT * FROM products
                      WHERE name='${old_name}'";
    $result = mysqli_query($conn, $query);
    $obj = mysqli_fetch_assoc($result);
    $result -> free_result();
    $id = $obj['id'];
    $old_category = $obj['category'];

    if(!empty($errors)){
        session_start();
        $_SESSION['insert_errors'] = $errors;
        $url = "Location:index.php?page=update&name=${old_name}";
        header($url);
    } else {
        $price = (int) $price;
    
        $query = "SELECT * from products
                    where name='$name'";
    
        $result = mysqli_query($conn,$query);
            $query = "UPDATE products 
                      SET name='$name', category='$category', price='$price', imgurl='$imgurl'
                      WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $url = "Location:index.php?page=product&category=${currcat}";
            header($url);
    }
    mysqli_close($conn);
}

?>