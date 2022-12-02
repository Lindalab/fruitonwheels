<?php
//connect to database class
require("../settings/db_class.php");

/**
*Customer class to handle all functions 
*/
/**
 *@author Linda Arthur
 *
 */

class tip_class extends db_connection
{ 
    function creatBlog($product_id,$tip_title,$tip_date,$message){
        $sql="INSERT INTO `tips`(`product_id`, `tip_title`, `tip_date`, `message`) VALUES ('$product_id','$tip_title','$tip_date','$message`)";
        return $this->db_query($sql);
    }
    function deleteblog($tip_id){
        $sql="DELETE FROM `tips` WHERE tip_id='$tip_id'";
        return $this->db_query($sql);
    }
    function updateBlog($tip_id,$product_id,$tip_title,$tip_date,$message){
        $sql="UPDATE `tips` SET `product_id`='$product_id',`tip-title`='$tip_title',`tip-date`='$tip_date',`message`='$message' WHERE `tip_id`='$tip_id'";
        return $this->db_query($sql);
    }
    function selectAllBlog(){
        $sql="SELECT * FROM `tips`";
        return $this->getAllData($sql);
    }
    function selectABlog($tip_id){
        $sql="SELECT * FROM `tips` WHERE `tip_id`=$tip_id";
        return $this->getAdata($sql);
    }
    function selectBlogsByLimit($number){
        $sql="SELECT * FROM `tips` LIMIT $number";
        return $this->getAllData($sql);
    }
}

?>