<?php

function getallproduct(){
    global $con;
    if(!isset($_GET['movie'])){
$select_query="select * from name_movie";
        $result_query=mysqli_query($con,$select_query);
        while($row_data=mysqli_fetch_assoc($result_query)){
        $Movies_id=$row_data['Movies_id'];
        $movie_title=$row_data['Movie_Title'];
        $movie_description=$row_data['Movie_Description'];
        $movie_image=$row_data['Movie_Image'];
        $movie_rating=$row_data['Movie_Rating'];
            echo "<div class='col-4'>
        <img src='product_images/$movie_image'>
        <h1>$movie_title</h1>
        <h2>$movie_description</h2>
        <h3>$movie_rating</h3>
        <div class='betroit'>
    <button type='submit' class='betr1'><a href='view.php?product_id=$Movies_id'>View More Detail</a></button>
    </div>
        </div>
        "
    ;
}
}
}

function getall_unique_product(){
    global $con;
    if(isset($_GET['movie'])){
    $categories_id=$_GET['movie'];
$select_query="select * from name_movie where Movie_id=$categories_id";
        $result_query=mysqli_query($con,$select_query);
        $result_number=mysqli_num_rows($result_query);
        if($result_number==0){
        echo "<h1>No data is available</h1>";
        }
        while($row_data=mysqli_fetch_assoc($result_query)){
        $Movies_id=$row_data['Movies_id'];
        $movie_title=$row_data['Movie_Title'];
        $movie_Producer=$row_data['Producer'];
        $movie_director=$row_data['director'];
        $movie_actor=$row_data['actor'];
        $movie_description=$row_data['Movie_Description'];
        $movie_image=$row_data['Movie_Image'];
        $movie_rating=$row_data['Movie_Rating'];
            echo "<div class='col-4'>
        <img src='product_images/$movie_image'>
        <h1>$movie_title</h1>
        <h2>$movie_description</h2>
        <h3>$movie_rating</h3>
      <div class='betroit'>
    <button type='submit' class='betr1'><a href='view.php?product_id=$Movies_id'>View More Detail</a></button>
    </div>
        </div>";
}
}
}



/*
get booking product
*/



function get_unique_search(){
global $con;
if(isset($_GET['search_btn'])){ 
$search_venom=$_GET['simons_lemons'];
$search_query="select * from name_movie where Movie_keywords like '%$search_venom%'";
       $result_query=mysqli_query($con,$search_query);
        $result_number=mysqli_num_rows($result_query);
        if($result_number==0){
        echo "<h1>search item list is empty</h1>";
        }
        while($row_data=mysqli_fetch_assoc($result_query)){
        $Movies_id=$row_data['Movies_id'];
        $movie_title=$row_data['Movie_Title'];
        $movie_Producer=$row_data['Producer'];
        $movie_director=$row_data['director'];
        $movie_actor=$row_data['actor'];
        $movie_description=$row_data['Movie_Description'];
        $movie_image=$row_data['Movie_Image'];
        $movie_rating=$row_data['Movie_Rating'];
            echo "<div class='col-4'>
        <img src='product_images/$movie_image'>
        <h1>$movie_title</h1>
        <h2>$movie_description</h2>
        <h3>$movie_rating</h3>
       <div class='betroit'>
    <button type='submit' class='betr1'><a href='view.php?product_id=$Movies_id'>View More Detail</a></button>
    </div>
        </div>";
}
}
}

function view_all_product(){
global $con;
    if(isset($_GET['product_id'])){
    if(!isset($_GET['movie'])){
$view_details=$_GET['product_id'];
$select_query="select * from name_movie where Movies_id=$view_details";
        $result_query=mysqli_query($con,$select_query);
        while($row_data=mysqli_fetch_assoc($result_query)){
        $Movies_id=$row_data['Movies_id'];
        $movie_title=$row_data['Movie_Title'];
        $movie_Producer=$row_data['Producer'];
        $movie_director=$row_data['director'];
        $movie_actor=$row_data['actor'];
        $movie_description=$row_data['Movie_Description'];
        $movie_image=$row_data['Movie_Image'];
        $movie_rating=$row_data['Movie_Rating'];
            echo "<div class='sector-1'>
    <div class='sector-2'>
        <img src='product_images/$movie_image'>
            </div>
    <div class='sector-2'>
        <h1>$movie_title</h1>
        <h3>$movie_description</h3>
            </div>
    
        </div>";
}
}
}
}

/*
booking queries
*/

function getbookingproduct(){
    global $con;
    if(!isset($_GET['deep'])){
$select_query="select * from booking_movie";
        $result_query=mysqli_query($con,$select_query);
        while($row_data=mysqli_fetch_assoc($result_query)){
        $drama_id=$row_data['drama_id'];
        $drama_title=$row_data['movie_title'];
        $drama_image=$row_data['image_1'];
        $drama_rating=$row_data['rating'];
        $drama_price=$row_data['Price'];

        echo "
        <div class='vitamins'>
        <div class='vitamind'>
    <img src='product_images/$drama_image'>
        </div>
     <div class='vitamind'>
     <div class='vitamind2'>
      <h1>$drama_title</h1>  
        <h2>$drama_rating</h2>
        <h2>$drama_price</h2>
     <button type='submit' class='btnty'><a href='allbooking.php?add_to_cart=$drama_id'>Add to cart</a></button>   
     <button type='submit' class='btnty2'><a href='bookinview.php?drama_id=$drama_id'>View More</a></button>         </div> </div> </div>"
            ;
        }
}
}


function getuniquedrams(){
 global $con;
   
    if(isset($_GET['deep'])){
    $categories_title=$_GET['deep'];
$select_query="select * from booking_movie where Movie_id=$categories_title";
        $result_query=mysqli_query($con,$select_query);
        $number=mysqli_num_rows($result_query);
    if($number == 0){
    echo "<h1>dATA IS NOT AVAILABLE</h1>";
    }
        while($row_data=mysqli_fetch_assoc($result_query)){
        $drama_id=$row_data['drama_id'];
        $drama_title=$row_data['movie_title'];
        $drama_image=$row_data['image_1'];
        $drama_rating=$row_data['rating'];
         $drama_price=$row_data['Price'];
        echo "
        <div class='vitamins'>
        <div class='vitamind'>
    <img src='product_images/$drama_image'>
        </div>
     <div class='vitamind'>
     <div class='vitamind2'>
      <h1>$drama_title</h1>  
        <h2>$drama_rating</h2>
        <h2>$drama_price</h2>
     <button type='submit' class='btnty'><a href='allbooking.php?add_to_cart=$drama_id'>Add to cart</a></button>   
     <button type='submit' class='btnty2'><a href='bookinview.php?drama_id=$drama_id'>View More</a></button>   
        </div> </div> </div>"
            ;
        }
}
}


function getdramasearch(){
global $con;
    if(isset($_GET['search_btn'])){
    $search_result=$_GET['seach_int'];
$select_query="select * from booking_movie where keyword like '%$search_result%'";
        $result_query=mysqli_query($con,$select_query);
        $number=mysqli_num_rows($result_query);
    if($number == 0){
    echo "<h1>dATA IS NOT AVAILABLE</h1>";
    }
        while($row_data=mysqli_fetch_assoc($result_query)){
        $drama_id=$row_data['drama_id'];
        $drama_title=$row_data['movie_title'];
        $drama_image=$row_data['image_1'];
        $drama_rating=$row_data['rating'];
        $drama_price=$row_data['Price'];
        echo "
        <div class='vitamins'>
        <div class='vitamind'>
    <img src='product_images/$drama_image'>
        </div>
     <div class='vitamind'>
     <div class='vitamind2'>
      <h1>$drama_title</h1>  
        <h2>$drama_rating</h2>
        <h2>$drama_price</h2>
     <button type='submit' class='btnty'><a href='allbooking.php?add_to_cart=$drama_id'>Add to cart</a></button>   
     <button type='submit' class='btnty2'><a href='bookinview.php?drama_id=$drama_id'>View More</a></button> 
        </div> </div> </div>"
            ;
        }
}
}
      

function view_all_dramas(){

global $con;
    if(isset($_GET['drama_id'])){
    if(!isset($_GET['deep'])){
    $product_variable=$_GET['drama_id'];
$select_query="select * from booking_movie where drama_id=$product_variable";
        $result_query=mysqli_query($con,$select_query);
        while($row_data=mysqli_fetch_assoc($result_query)){
        $drama_id=$row_data['drama_id'];
        $drama_title=$row_data['movie_title'];
        $drama_producer=$row_data['producer'];
        $drama_director=$row_data['director'];
        $drama_actor=$row_data['actor'];
        $drama_description=$row_data['description'];
        $drama_image=$row_data['image_1'];
        $drama_rating=$row_data['rating'];
        echo "
         <div class='mentos2'>
        <div class='mentos'>
<div class='melody'>
    <img src='product_images/$drama_image' width='500px' height='500px'>
    </div>
<div class='melody'>
    <div class='messhoo'>
   <h1>$drama_title</h1> 
    <h2>$drama_description</h2>
    <h3>$drama_rating</h3>
    </div>
    </div>
    </div>
    
    <div class='tab'>
<button type='submit' class='tablink' onclick='opencity(event,'paris')'>Star Caste</button>
<button type='submit' class='tablink' onclick='opencity(event,'london')'>Description</button>
<button type='submit' class='tablink' onclick='opencity(event,'dubai')'>Ratings</button>
    </div>
<div class='tab_content' id='paris'>
<h1>$drama_producer</h1>
<h1>$drama_director</h1>
<h1>$drama_actor</h1>
    </div>
<div class='tab_content' id='london'>
<h1>$drama_description</h1>
    </div>
<div class='tab_content' id='dubai'>
<h1>$drama_rating</h1>
    </div> </div>"
            ;
        }
}
}
}

/*
get ip address function
*/
function getIPAddress() {  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

function cart(){
if(isset($_GET['add_to_cart'])){
global $con;
     $ip = getIPAddress(); 
$get_product_id=$_GET['add_to_cart'];
$select_query="select * from  cart_details where ip_address='$ip' and product_id=$get_product_id";
$result_query=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_query);
    if($number>0){
    echo "<script>alert('data is already in database')</script>";
    echo "<script>window.open('allbooking.php','_self')</script>";
    }else{
    $insert_query="insert into cart_details (product_id,ip_address,quantity) values ($get_product_id,'$ip',0)";
    $result_question= mysqli_query($con,$insert_query);
            echo "<script>alert('Data store in database')</script>";

        echo "<script>window.open('allbooking.php','_self')</script>";    
    }
}

}

/*
function to get cart items numbers
*/
 function cart_items(){
 if(isset($_GET['add_to_cart'])){
global $con;
     $ip = getIPAddress(); 
$select_query="select * from  cart_details where ip_address='$ip'";
$result_query=mysqli_query($con,$select_query);
$count_cart_items=mysqli_num_rows($result_query);
    }else{
    global $con;
     $ip = getIPAddress(); 
$select_query="select * from  cart_details where ip_address='$ip'";
$result_query=mysqli_query($con,$select_query);
$count_cart_items=mysqli_num_rows($result_query);  
    }
    echo $count_cart_items;
}

/*
total price function
*/

function total_cart_price(){
global $con;
     $ip = getIPAddress(); 
    $total_price=0;
$cart_query="select * from cart_details where ip_address='$ip'";
$result_query=mysqli_query($con,$cart_query);
while($row_data=mysqli_fetch_assoc($result_query)){
$product_id=$row_data['product_id'];
$select_product="select * from  booking_movie where drama_id='$product_id'";
$result_product=mysqli_query($con,$select_product);
while($row_product_price=mysqli_fetch_assoc($result_product)){
$product_price=array($row_product_price['Price']);
$product_values=array_sum($product_price);
$total_price+=$product_values;
}
}
    echo $total_price;
}
?>
   




















