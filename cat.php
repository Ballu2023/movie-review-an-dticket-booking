<?php
include('connection.php');
if(isset($_POST['cat-btn'])){
$movie_title=$_POST['cat-int'];
    
$select_query="select * from categories where Categories_title='$movie_title'";
$result_select=mysqli_query($con,$select_query);
$result_Find=mysqli_num_rows($result_select);
if($result_Find > 0){
echo "<script>alert('data is already availablemin database')</script>";
}else{
    
$insert_query="insert into categories (Categories_title) value ('$movie_title')";
$result_query=mysqli_query($con,$insert_query);
if($result_query){
echo "<script>alert('Data Upadted')</script>";
}

}
}
?>


<!docktype html>
<html>
<head>
    <meta charset="utf-8">
    <title>thisis my website</title>
<style>
    .int{
    width: 80%;
    height: 40px;
    margin-top: 30px;
    margin-left: 150px;
    }
    .betto{
    background: blue;
    padding: 8px 20px;
    margin-top: 20px;
    color: white;
    margin-left: 150px;
    }
    
    
    </style>
    </head>
<body>
    <form action="" method="post">
    <div class="categories">
<input type="text" class="int" name="cat-int"><br>
<input type="submit" class="betto" name="cat-btn" value="Add Catgories">
    </div>
        </form>
    </body>
</html>