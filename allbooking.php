<?php
include('connection.php');
include('whole.php');
?>

<!dockrype html>
<html>
<head>
    <meta charset="utf-8">
    <title>this si my website</title>
    <style>
    *{
    padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .header{
    display: flex;
        align-items: center;
    background: black;
    padding: 5px;
    }
    .int{
    width: 800px;
    margin-left: 50px;
    height: 30px;
    }
    .btn{
    width: 70px;
    height: 30px;
    margin-left: -10px;
    background-color: darkorange;
    color: white;
    }
    .btn2{
    width: 120px;
    height: 30px;
    margin-left: 20px;
    background: none;
    border: 2px solid white;
    }
    .btn2 a{
    text-decoration: none;
    color: white;
    padding: 10px;
    }
    .btn2:hover{
    background-color: darkorange;
    transition: 0.5s;
    }
        .slider{
        width: 100%;
        position: relative;
        }
        .slideshow img{
         width: 100%;
        height: 500px;
        }
        .arrow{
        position: absolute;
        top: 200px;
        font-size: 50px;
        padding: 10px;
        background: black;
        color: white;
        cursor: pointer;
        }
        .next{
        right: 20px;
        }
        .prew{
        left: 20px;
        }
        .slideshow{
        display: none;
        }
        .vitamins{
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
        margin-top: 30px;
        }
        .vitamind h1{
        margin-top: -120px;
        margin-left: -200px;
        }
        .vitamind h2{
        margin-left: -200px;
        }
        .btnty{
        width: 150px;
        height: 40px;
        background: black;
        margin-top: 20px;
        margin-left: -200px;
        border: none;
        }
        .btnty a{
        color: white;
        text-decoration: none;
        }
        .btnty:hover{
        background-color: darkorange;
        transition: 0.5s;
        }
        .btnty2{
         height: 40px;
        background: black;
        margin-top: 20px;
        border: none;
        }
        .btnty2 a{
        color: white;
        text-decoration: none;
        }
         .btnty2:hover{
        background-color: darkorange;
        transition: 0.5s;
        }
        .vitamind img{
        height: 300px;
        width: 200px;
        margin-left: 80px;
        }
        .vitamind2{
        margin-left: -100px;
        }
        .vitamind{
        flex-basis: 50%;
        min-width: 300px;
        }
        .drama{
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
        }
        .overlay{
        overflow-x: hidden;
        background: black;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        transition: 0.5s;
        position: fixed;
        }
        .buttler{
        width: 200px;
        height: 40px;
        font-size: 20px;
        margin-left: -310px;
        margin-top: -10px;
        }
        #main{
        transition: margin-left .5s; 
        padding: 20px;
        }
        .closebtn{
        position: absolute;
        top: 30px;
        right: 30px;
        color: white;
        text-decoration: none;
        font-size: 50px;
        }
        .overlay-content{
        margin-top: 120px;
        text-align: center;
        
        }
        .overlay-content a{
        text-decoration: none;
        color: white;
        font-size: 30px;
        padding: 10px;
        margin-bottom: 80px;
        width: 100%;
        }
        .drama{
        background: black;
        height: 60px;
        }
        .drama2 h1{
        color: white;
        margin-left: -500px;
        margin-top: -10px;
        }
         .btn3{
    width: 150px;
    }
        .btn2 span{
        color: white;
        display: inline-block;
        }
        .btn3 span{
        color: white;
        }
        
        
        
        
        
        
        
    </style>
    </head>
<body>
    <div class="header">
<img src="image/lord%20of%20the%20rings.png" width="125px" height="50px">
<div class="search">
        <form method="get" action="bookingsearch.php" class="ceto">
    <input type="search" class="int" name="seach_int">
    <input type="submit" class="btn" name="search_btn">
    </form>
        </div>  
<div class="sign-in">
    <button type="submit" class="btn2"><a href="userlogin.php">Login</a></button>
<button type="submit" class="btn2"><a href="">Add to cart : <span> <?php cart_items(); ?>
    </span></a></button>
    <button type="submit" class="btn2 btn3"><a href="">Total Price: <span><?php total_cart_price(); ?></span></a></button>           
        </div>
    </div>
    
<!--
slider section
-->
    
<!-----calling cart function------->
    <?php
    cart();
    ?>
    
<div class="slider">
    <div class="slideshow">
    <img src="image/img/A%20mighty%20wind.jpg" width="100%" height="500px">  
    </div>
    <div class="slideshow">
    <img src="image/img/Congratulations.jpg" width="100%" height="500px">  
    </div>
    <div class="slideshow">
    <img src="image/img/Triangle%20of%20sadness.jpg" width="100%" height="500px">  
    </div>
    <div class="slideshow">
    <img src="image/img/Nope.jpg" width="100%" height="500px">  
    </div>
    <div class="slideshow">
    <img src="image/img/super%20mario%20bros.jpg" width="100%" height="500px">  
    </div>
    <span class="prew arrow" onclick="control(-1)">&#10094;</span>
    <span class="next arrow" onclick="control(1)">&#10095;</span>
    </div>
    
    <div class="drama">
    <div class="drama2">
        <div class="overlay" id="maynav">
    <a href="javascript:void(0)" class="closebtn" onclick="closebtns()">&times;</a>
            <div class="overlay-content">
            <ul>
            
        <?php
        $select_query="select * from categories";
        $result_query=mysqli_query($con,$select_query);
        while($row_data=mysqli_fetch_assoc($result_query)){
        $categories_id=$row_data['Movie_id'];
        $categories_title=$row_data['Categories_title'];
        echo "<li> <a href='allbooking.php?deep=$categories_id'>$categories_title</a> </li><br>";
        }
                ?>
            </ul>
                </div>
        </div>
    <div id="main">
    <button type="submit" class="buttler" onclick="openav()">&#9776; View Categories</button>
        </div>
        </div>
    
    <div class="drama2">
        <h1>All Drama List</h1>
        </div>
    </div>
        
        <?php
     getuniquedrams();   
    getbookingproduct();   
    
   /* $ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;  */
        ?>
    
    
    
    <script>
        var flag = 1;
        
        function control(x){
        flag = flag + x;
        slideshow(flag);
        }
        
     slideshow(flag);  
    function slideshow(nato){
    var txt = document.getElementsByClassName("slideshow");
    
    if(nato == txt.length){
    flag = 0;
    nato = 0;
    }
    if(nato < 0){
    flag = txt.length-1
    nato = txt.length-1
    }
      
    for(let y of txt){
    y.style.display = "none";
    }
        
    txt[nato].style.display = "block";
    }
    
    
    </script>
    
<script>
    function openav(){
    document.getElementById("maynav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    }
    function closebtns(){
    document.getElementById("maynav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    }
    
    
    </script>
    
    
    </body>
</html>