<?php
include('connection.php');
if(isset($_POST['brand_btn'])){
$Moviere_id=$_POST['Moview_category'];
$movie_title=$_POST['Moview_title'];
$Moview_producer=$_POST['Moview_producer'];
$Moview_director=$_POST['Moview_director'];
$Moview_actoir=$_POST['Moview_actoir'];

$Moview_description=$_POST['Moview_description'];
$Moview_Keyword=$_POST['Moview_Keyword'];
    
/*
image for get method
*/
$Moview_image1=$_FILES['Moview_image1']['name'];

/*
temops image folrder
*/
$temp_image1=$_FILES['Moview_image1']['tmp_name'];
$Moview_ratting=$_POST['Moview_ratting'];
$movie_status='true';
  
if($Moviere_id=="" or $movie_title=="" or $Moview_producer="" or $Moview_director=="" or $Moview_actoir="" or $Moview_description=="" or $Moview_Keyword=="" or $Moview_image1=="" or $Moview_ratting=="" ){
echo "<script>alert('please fill the all mandatory field')</script>";
    exit();
}else{
    
move_uploaded_file($temp_image1,"product_images/$Moview_image1");
    
$insert_query="insert into name_movie (Movie_id,Movie_Title,	Producer,director,	actor,Movie_Description,Movie_keywords,Movie_Image,
Movie_Rating,Date,Status) values ('$Moviere_id','$movie_title','$Moview_producer','$Moview_director','$Moview_actoir','$Moview_description','$Moview_Keyword','$Moview_image1','$Moview_ratting',NOW(),'$movie_status')";
$result_query=mysqli_query($con,$insert_query);
if($result_query){
echo "<script>alert('data has been updated')</script>";
}
}

}
?>



<!doctype html>
<html>
<head>
    <title>ertyu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ultra.css">
    <style>
    body{
        background-color: aliceblue;
        padding: 10px;       
        }
        .ultra{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        
        }
        .title{
        margin-top: 15px;
        font-size: 20px;    
        }
        .product{
        height: 40px;
        width: 500px;
        
        }
        select{
        height: 40px;
        width: 500px;
        
        }
        .johnty{
        height: 40px;
        width: 500px;
        font-size: 16px;
        }
        .rrr{
         font-size: 20px;
        }
        .rudra_bhagwan{
        height: 40px;
        width: 500px;
        background-color: lightgreen;
        border: none;
        margin-top: 10px;
        }
    </style>
    </head>
<body>
    <div class="ultra">
    <form action="" method="post" enctype="multipart/form-data">
        <H1>insert Movie Detail</H1>
        <div class="title">
       <label class="rrr">Category</label><br> 
            <select name="Moview_category">
       
       <?php
    $select_data="select * from categories";
    $select_query=mysqli_query($con,$select_data);
    while($row_data=mysqli_fetch_assoc($select_query)){
    $movie_id=$row_data['Movie_id'];
    $movie_title=$row_data['Categories_title'];
    echo "<option value=' $movie_id'>$movie_title</option>";
    }
        ?>

            </select>
            
            </div>
        <div class="title">
       <label class="rrr">Movie title</label><br> 
<input type="text" placeholder="enter your product name" name="Moview_title" class="product" autocomplete="off" required="required">
            </div>  
    <div class="title">
       <label class="rrr">Producer</label><br> 
        <input type="text" placeholder="Enter Producer's name" name="Moview_producer" class="product" autocomplete="off" required="required">
            </div>
         <div class="title">
       <label class="rrr">Director</label><br> 
        <input type="text" placeholder="Enter Director's name" name="Moview_director" class="product" autocomplete="off" required="required">
            </div>
         <div class="title">
       <label class="rrr">Actor</label><br> 
        <input type="text" placeholder="Enter Actor's name" name="Moview_actoir" class="product" autocomplete="off" required="required">
            </div>
        <div class="title">
       <label class="rrr">Description</label><br> 
        <input type="text" placeholder="enter your description" name="Moview_description" class="product" autocomplete="off" required="required">
            </div>  
        <div class="title">
       <label class="rrr">Keyword</label><br> 
        <input type="text" placeholder="enter your Keyword" name="Moview_Keyword" class="product" autocomplete="off" required="required">
            </div>
         <div class="title">
       <label class="rrr">image1</label><br> 
        <input type="file" name="Moview_image1" class="johnty" required="required">
            </div>
      
     <div class="Rating">
       <label class="rrr">Rating</label><br> 
        <input type="text" placeholder="enter your product price" name="Moview_ratting" class="product" autocomplete="off" required="required">
            </div>  
        <div class="ifpra">
        <input type="submit" value="add/brand" name="brand_btn" class="rudra_bhagwan">
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>