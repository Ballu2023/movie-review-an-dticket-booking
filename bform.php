<?php
include('connection.php');
if(isset($_POST['brand_btn'])){
$book_id=$_POST['Moview_category'];
$Moview_title=$_POST['Moview_title'];
$Moview_producer=$_POST['Moview_producer'];
$Moview_director=$_POST['Moview_director'];
$Moview_actoir=$_POST['Moview_actoir'];
$Moview_description=$_POST['Moview_description'];
$venue_name1=$_POST['venue_name1'];
$venue_name2=$_POST['venue_name2'];
$venue_name3=$_POST['venue_name3'];
$Slot_time1=$_POST['Slot_time1'];
$Slot_time2=$_POST['Slot_time2'];
$Slot_time3=$_POST['Slot_time3'];
$Moview_Keyword=$_POST['Moview_Keyword'];
$Moview_ratting=$_POST['Moview_ratting'];
$Moview_price=$_POST['Moview_price'];
$booking_statu='true';
  
/*
permanant image    
*/

$Moview_image1=$_FILES['Moview_image1']['name'];
/*
temp images
*/
$temp_image1=$_FILES['Moview_image1']['tmp_name'];

if($book_id=="" or $Moview_title=="" or $Moview_producer=="" or $Moview_director=="" or $Moview_actoir=="" or $Moview_description=="" or $venue_name1=="" or $venue_name2=="" or $venue_name3=="" or $Slot_time1=="" or $Slot_time2=="" or $Slot_time3=="" or $Moview_Keyword=="" or $Moview_ratting=="" or $Moview_price=="" or $Moview_image1==""){
echo "<script>alert('please fill all the accurate details')</script>";
    exit();
}else{

move_uploaded_file($temp_image1,"product_images/$Moview_image1");
    
$inserting_query="insert into booking_movie (	Movie_id,movie_title,director,producer,actor,description,venu_name_one,venu_name_two,	venu_name_three,time_slot_one,actortime_slot_two,actortime_slot_three,keyword,image_1,rating,Price,status,date) value ('$book_id','$Moview_title','$Moview_producer','$Moview_director','$Moview_actoir','$Moview_description','$venue_name1','$venue_name2','$venue_name3','$Slot_time1','$Slot_time2','$Slot_time3','$Moview_Keyword','$Moview_image1','$Moview_ratting',$Moview_price,NOW(),'$booking_statu')";
$result_query=mysqli_query($con,$inserting_query);
if($result_query){
    echo "<script>alert('data update sucessfully')</script>";
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
        .ven{
            width: 100%;
            font-size: 12px;
            font-family: sans-serif;
        }
    </style>
    </head>
<body>
    <div class="ultra">
    <form action="" method="post" enctype="multipart/form-data">
        <H1>insert Drama Detail</H1>
        <div class="title">
       <label class="rrr">Category</label><br> 
            <select name="Moview_category">
       
       <?php
    $select_data="select * from categories";
    $select_query=mysqli_query($con,$select_data);
    while($row_data=mysqli_fetch_assoc($select_query)){
    $movie_id=$row_data['Movie_id'];
    $movie_title=$row_data['Categories_title'];
    echo "<option value='$movie_id'>$movie_title</option>";
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
       <label class="rrr">Venue One</label><br> 
        <select class="ven" name="venue_name1">
        <?php
    $select_query="select * from venue";
    $result_qury=mysqli_query($con,$select_query);
    while($row_data=mysqli_fetch_assoc($result_qury)){
    $venue_id=$row_data['venue_id'];
    $venue_name=$row_data['venue_name'];
        echo "<option>$venue_name</option>";
    }
            
            ?>
        </select>
            </div>
        <div class="title">
       <label class="rrr">Venue Two</label><br> 
        <select class="ven" name="venue_name2">
       <?php
    $select_query="select * from venue";
    $result_qury=mysqli_query($con,$select_query);
    while($row_data=mysqli_fetch_assoc($result_qury)){
    $venue_id=$row_data['venue_id'];
    $venue_name=$row_data['venue_name'];
        echo "<option>$venue_name</option>";
    }
            
            ?>
        </select>
            </div>
         <div class="title">
       <label class="rrr">Venue Three</label><br> 
        <select class="ven" name="venue_name3">
         <?php
    $select_query="select * from venue";
    $result_qury=mysqli_query($con,$select_query);
    while($row_data=mysqli_fetch_assoc($result_qury)){
    $venue_id=$row_data['venue_id'];
    $venue_name=$row_data['venue_name'];
        echo "<option>$venue_name</option>";
    }
            
            ?>
        </select>
            </div>
        <div class="title">
       <label class="rrr">Time slot one</label><br> 
        <select class="ven" name="Slot_time1">
        <?php
    $select_query="select * from time";
    $result_qury=mysqli_query($con,$select_query);
    while($row_data=mysqli_fetch_assoc($result_qury)){
    $venue_id=$row_data['time_id '];
    $venue_name=$row_data['time_name'];
        echo "<option>$venue_name</option>";
    }
     ?>
        </select>
        </div>
        <div class="title">
       <label class="rrr">Time slot two</label><br> 
        <select class="ven" name="Slot_time2">
        <?php
    $select_query="select * from time";
    $result_qury=mysqli_query($con,$select_query);
    while($row_data=mysqli_fetch_assoc($result_qury)){
    $venue_id=$row_data['time_id '];
    $venue_name=$row_data['time_name'];
        echo "<option>$venue_name</option>";
    }
     ?>
        </select>
        </div><div class="title">
       <label class="rrr">Time slot three</label><br> 
        <select class="ven" name="Slot_time3">
       <?php
    $select_query="select * from time";
    $result_qury=mysqli_query($con,$select_query);
    while($row_data=mysqli_fetch_assoc($result_qury)){
    $venue_id=$row_data['time_id '];
    $venue_name=$row_data['time_name'];
        echo "<option>$venue_name</option>";
    }
     ?>
        </select>
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
        <div class="Price">
       <label class="rrr">Price</label><br> 
        <input type="text" placeholder="enter your product price" name="Moview_price" class="product" autocomplete="off" required="required">
            </div> 
        <div class="ifpra">
        <input type="submit" value="add/brand" name="brand_btn" class="rudra_bhagwan">
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>