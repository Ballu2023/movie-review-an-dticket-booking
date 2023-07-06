<?php
include('connection.php');
if(isset($_POST['time-txt'])){
$time_slot=$_POST['insert-time'];  
    
$select_query="select * from  time where time_name='$time_slot'";
$result_number=mysqli_query($con,$select_query);
$nunver=mysqli_num_rows($result_number);
if($nunver > 0){
echo "<script>alert('data is already is availabklein databade')</script>";
}else{

$insert_query="insert into time (time_name) value ('$time_slot')";
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
        <form method="post" action=""> 
        <input type="text" name="insert-time"><br>
    <button class="btttn" name="time-txt" type="submit">search time</button>
        </form>
        </div>
    </body>
</html>