<?php 

$db = mysqli_connect("localhost","root","","ecom_store");

function getPro()
{
    
    global $db;
    
    $get_products = "select * from capacitor order by 1 DESC LIMIT 0,8";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products))
    {
        
        $pro_id = $row_products['cap_id'];
        
        $pro_title = $row_products['cap_title'];
        
        $pro_price = $row_products['cap_price'];
        
        $pro_img1 = $row_products['cap_img1'];
        
        $pro_desc = $row_products['cap_desc'];
        
       { echo 
        "<main class='container'> 
         <div class='left-column'>
           
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='product_image/$pro_img1'>
                </a>
           
         </div>
         <div class='right-column'>
                <div class='text'>
                <h2>$pro_title</h2>
                
                
                
                $pro_desc<br>
                
                  <h3>  Rs $pro_price<br></h3>
                
                  <button type=submit class=cart-btn name=ca$pro_id ><i class='fa fa-shopping-cart' ></i> <b>ADD TO CART</b></button>
                    <br>
                </div>
        </div>
        </main>";}
        
    }
    
}

?>