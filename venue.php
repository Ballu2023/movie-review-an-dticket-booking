<?php
include('connection.php');
if(isset($_POST['venue-btn'])){
$venue_slot=$_POST['venue-txt'];
  
    $select_query="select * from venue where venue_name='$venue_slot'";
    $result_num=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_num);
    if($number > 0){
    echo "<script>alert('data is already exist in database')</script>";
    }
    else{
    
$insert_query="insert into venue (venue_name) value ('$venue_slot')";
$result_query=mysqli_query($con,$insert_query);
    if($result_query){
    echo "<script>alert('data updated')</script>";
    }
}
}

?>



<!docktype html>
<html>
<head>
    <style>
    .row{
        display: inline-block;
        justify-content: space-around;
        flex-wrap: wrap;
        align-items: center;
        margin-left: 100px;
        margin-top: 100px;
        
        }
        input{
        width: 1100px;
            height: 50px;
            margin-bottom: 20px;
        }
        .btttn{
        background: #009688;
            color: white;
            padding: 15px 25px;
            font-size: 20px;
        }
        
    </style>
    <title>xyz</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="menu.php">
    </head>
    <body>
    <div class="row">
        <form action="" method="post">
        <input type="text" name="venue-txt"><br>
            <button class="btttn" name="venue-btn" type="submit">search venue</button>
        </form>
        </div>
    </body>
</html>