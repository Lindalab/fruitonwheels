<?php
require_once("../controllers/product_controller.php");

if(isset($_POST['submit'])){
    $product_category= $_POST['mycat'];
    $product_name=$_POST['pname'];
    $product_price=$_POST['pprice'];
    $product_description=$_POST['pdesc'];
    $product_search_words=$_POST['pkeyword'];
    
    $root_dir = ".\\..\\images\\products\\";
    $upload_root_dir = "../images/products/";
    $file=$_FILES['pImage'];
    $file_dest = $root_dir . basename($file["name"]);
    $upload_file_dest = $upload_root_dir . basename($file["name"]);
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    
      $move = move_uploaded_file($file["tmp_name"], $file_dest);
      if ($move) {
          $result = createProduct_ctr($product_category, $product_name, $product_price, $product_description,$upload_file_dest, $product_search_words);
          if($result){
              echo "success";
              header("location:../view/admin.php");
          }else{
              echo "failed";
              header("location:../view/admin.php");
          }
      }



    

}
?>

