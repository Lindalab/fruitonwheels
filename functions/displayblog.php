<?php

require_once("../controllers/tip_controller.php");

function showBlog_fnc()
{
    $data =selectBlogsByLimit_ctr();
   

        foreach($data as $tip) {

            $tip_id = $tip['tip_id'];
            $tipName = $tip['tip_title'];
            $tipdate = $tip['tip_date'];
            $tipImage = $tip['product_image'];
            $tipMessage = $tip['message'];
            
            
            showSingleBlog($tip_id,$tipName,$tipdate,$tipImage,$tipMessage);
            

            
        }
   
}


function showSingleBlog($tip_id,$tipName,$tipdate,$tipImage,$tipMessage)
{

    echo "
               <div class='col-lg-4 col-md-6'>
					<div class='single-latest-news'>
                    <div class='product-image'>
                    <a href='single-product.php'><img src='$tipImage' alt=''></a>
                      </div>
						<div class='news-text-box'>
							<h3><a href='single-news.php'>$tipName</a></h3>
							<p class='blog-meta'>
								<span class='author'><i class='fas fa-user'></i> Admin</span>
								<span class='date'><i class='fas fa-calendar'></i> $tipdate</span>
							</p>
							<p class='excerpt'>$tipMessage</p>
						</div>
					</div>
				</div>      
    ";
}


?>