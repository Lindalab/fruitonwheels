<?php
require_once("../classes/tip_class.php");

function creatBlog_ctr($product_id,$tip_title,$tip_date,$message){
    $blog = new tip_class;
    return $blog->creatBlog($product_id,$tip_title,$tip_date,$message);
}
function deleteblog_ctr($tip_id){
    $blog = new tip_class;
    return $blog->deleteblog($tip_id);
}
function updateBlog_ctr($tip_id,$product_id,$tip_title,$tip_date,$message){
    $blog = new tip_class;
    return $blog->updateBlog($tip_id,$product_id,$tip_title,$tip_date,$message);
}
function selectAllBlog_ctr(){
    $blog = new tip_class;
    return $blog->selectAllBlog();
}
function selectABlog_ctr($tip_id){
    $blog = new tip_class;
    return $blog->selectABlog($tip_id);
}
function selectBlogsByLimit_ctr(){
    $blog = new tip_class;
    return $blog->selectBlogsByLimit();
}
?>