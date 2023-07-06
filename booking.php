<?php
include('connection.php');
include('whole.php');
?>

<!docktype html>
<html>
<head>
    <meta charset="utf-8">
    <title>this is my website</title>
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
    width: 150px;
    height: 30px;
    margin-left: 10px;
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
    
    .header img{
    margin-left: 30px;
    }
    .slideshow{
    width: 100%;
    position: relative;
    }
    .slider img{
    width: 100%;
    height: 500px;
    }
    .arrow{
    position: absolute;
    top: 50%;
    background: white;
    padding: 10px;
    border-radius: 100%;
    cursor: pointer;
    font-size: 30px;
    width: 60px;
    text-align: center;
    }
    .next{
    right: 10px;
    }
    .arrow:hover{
    background: black;
    color: white;
    transition: 0.5s;
    border: 2px solid white;
    }
    .prew{
    left: 10px;
    }
    .slider{
    display: none;
    }
    .meta{
    display: flex;
    align-items: center; 
    padding: 40px;
    background: black;
    margin-top: -70px;
    }
    
    .meta2{
    flex-basis: 40%;
    background: grey;
    height: 500px; 
    margin-right: 30px;
    overflow: scroll;
    
    }
    .meta3{
    flex-basis: 60%;
    height: 500px; 
    }
    .dabba{
    display: flex;
    margin-left: 20px;
    margin-top: 30px;
    }
    .moviename{
    margin-left: 20px;
    }
    .dabba img{
    border: 5px solid black;
    }
    .btn22{
    width: 80px;
    height: 30px;
    margin-top: 10px;
    background: none;
    border: 2px solid white;
    }
    .btn22:hover{
    background: white;
    transition: 0.5s;
    }
    .btn22 a{
    color: white;
    text-decoration: none;
    }
    .btn22 a:hover{
    color: black;
    }
    .slapmmar{
    width: 100%;
    position: relative;
    }
    .anti{
    position: absolute;
    top: 1100px;
    font-size: 50px;
    padding: 10px;
    color: black;
    border: 2px solid black;
    }
    .anti:hover{
    background: black;
    color: wheat;
    transition: 0.5s;
    }
    .right{
    right: 58px;
    }
    .left{
    left: 650px;
    }
    .slag{
    display: none;
    }
    .slag img{
    border: 2px solid black;
    }
    .overlay{
    overflow-x: hidden;
    position: fixed;
    background: rgba(0,0,0,0.5);
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
        left: 0;
    transition: 5s;
    z-index: 1;
    }
    .closeup{
    position: fixed;
    top: 30px;
    right: 40px;
    color: white;
    font-size: 50px;
    text-decoration: none;
    }
    .dropee-content{
    width: 800px;
    height: 500px;
    background: white;
    margin-left: 300px;
    margin-top: 80px;
    }
    .parallax{
    background-image: url(image/img/Guardians%20of%20the%20galaxy%203.jpg);
    min-height: 200px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
    .parallax2{
background-image: url(image/img/Man%20Bites%20dog.jpg);
    min-height: 100px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
    .imdb{
    margin-left: 220px;
    margin-top: 20px;
    }
    .ll{
    margin-top: -500px;
        position: fixed;
    }
    .nun{
    width: 140px;
    height: 30px;
    position: absolute;
        z-index: 1;
    transition: 2s;
    left: -100px;
    text-align: center;
    font-weight: bold;
    color: white;
    padding: 10px;
    }
    .nun:hover{
    left: 0;
    }
    
    #yellow{
    background: yellow;
        top: 80px;
    }
    
    #pink{
    background: pink;
        top: 120px;
    }
    #green{
    background: green;
        top: 160px;
    }
    #blue{
    background: blue;
        top: 200px;
    }
    .drmas{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
        margin-top: 30px;
    }
    .nippo{
        flex-basis: 20%;
        text-align: center;
        min-width: 300px;
    }
    .nippo img{
    width: 300px;
        height: 400px;
        padding: 5px;
    }
    .petto{
    padding: 10px 16px;
    margin-top: 15px;
    background: black;
        font-size: 18px;
    color: white;
    margin-bottom: 10px;
        outline: none;
    border-radius: 4px;
    }
    .petto:hover{
    background: none;
    border: 2px solid black;
    color: black;
    transition: 0.5s;
    }
    .uffer{
    margin-left: 40px;
        font-size: 18px;
    }
    .keep{
    margin-top: 45px;
    }
    hr{
    width: 7%;
    border: 2px solid #ff523b;
        margin-top: 4px;
    }
    .dedaddly hr{
    width: 13%;
    }
    .deefer{
    margin-top: 40px;
    }
    .container{
        position: relative;
flex-basis: 20%;
    min-width: 200px;
    margin-top: 20px;
    margin-bottom: 20px;
    }
    .container img{
    padding: 25px;
    max-width: 100%;
    }
    
    .image{
    width: 300px;
    margin: auto;
    }
    .overlayslap{
    overflow: hidden;
    background: rgba(0,0,0,0.8);
    top: 0;
    left: 0;
    bottom: 0;
    width: 280px;
    height: 100%;
    transition: 1s ease;
    transform: scale(0);
    position: absolute;
    }
    .container:hover .overlayslap{
    transform: scale(1);
    }
    .text h1{
    text-align: center;
    color: red;
    text-align: center;
    transform: translate(-40%,-40%);
    }
    .metrocity{
    display: flex;
    margin-left: 40px;
    margin-right: 40px;
    }
    .container h1{
    color: white;
    text-align: center;
    }
    .wishu{
    margin-top: 50px;
    }
    .wishu h4{
    color: darkorange;
    margin-left: 30px;
    font-size: 30px;
    }
    .wishu span{
    color: white;
    }
    .wishu h5{
    color: white;
    margin-left: 30px;
    font-size: 20px;
    margin-top: 20px;
    }
    .buttler{
    margin-top: 25px;
    width: 110px;
    height: 35px;
    margin-left: 80px;
    background: black;
    border: 1px solid white;
    }
    .buttler a{
    color: white;
    text-decoration: none;
    }
    .buttler:hover{
    transition: 1s;
    background-color: darkorange;
    }
    .helper{
    margin-top: 50px;
    margin-left: 80px;
    font-size: 20px;
    margin-bottom: -40px;
    }
    .helper hr{
    width: 198px;
    height: 5px;
    background-color: darkorange;
    }
    .hingoli{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-left: 55px;
    margin-right: 55px;
    margin-top: 80px;
    }
    .hajmola{
    flex-basis: 20%;
    min-width: 280px;
    }
    .hajmola img{
padding: 10px;
        max-width: 100%;
        margin-right: 5px;
    }
    .buttler1{
    margin-top: 25px;
    width: 110px;
    height: 35px;
    margin-left: 80px;
    background: black;
    border: 1px solid white;
    margin-bottom: 20px;
    }
    .buttler1 a{
    color: white;
    text-decoration: none;
    }
    .buttler1:hover{
    transition: 1s;
    background-color: darkorange;
    }
    
    .hajmola h4{
    font-size: 20px;
    color: darkorange;
    text-align: center;
    }
    .hajmola span{
    font-size: 20px;
    color: black;
    }
    .hajmola h5{
    font-size: 20px;
            text-align: center;

    }
    .btn3{
    width: 130px;
    }
    
    
    
    

    
    
    
   
    
   
       </style>
    </head>
<body>
<!--
    header section start
-->
    <div class="header">
<img src="image/lord%20of%20the%20rings.png" width="125px" height="50px">
<div class="search">
        <form method="post" action="" class="ceto">
    <input type="search" class="int">
    <input type="submit" class="btn">
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
header section end    
-->
    <div class="parallax2">
    
    </div> 
<!--
slider section start
-->
   <div class="slideshow">
<div class="slider">
       <img src="image/img/Shehzada.jpg" width="100%" height="500px">
       </div>
<div class="slider">
       <img src="image/img/Welcome.jpg" width="100%" height="500px">
       </div>
<div class="slider">
       <img src="image/img/the%20Banshees.jpg" width="100%" height="500px">
       </div>
<div class="slider">
       <img src="image/img/Mummies%202o23.jpg"width="100%" height="500px">
       </div>
<div class="slider">
       <img src="image/img/John%20Wick%204.jpg" width="100%" height="500px">
       </div>
<span class="prew arrow" onclick="control(-1)">&#10094;</span>
<span class="next arrow" onclick="control(1)">&#10095;</span>
    </div> 
<!--
slider section end 
-->
 <div class="parallax">
    
    </div>   
<!--
third section start
-->
<div class="ll">
    <span class="nun" id="yellow">INSTAGRAM</span>
    <span class="nun" id="pink">FACEBOOK</span>
    <span class="nun" id="green">TWITTER</span>
    <span class="nun" id="blue">SNAPCHAT</span>
    </div>
    
 <div class="meta">
    <div class="meta2">
    <div class="dabba">
     <img src="image/img/A%20mighty%20wind.jpg" height="130px" width="200px">   
       <div class="moviename">
    <h1>Movie Name</h1>
    <h2>Rating</h2>
    <h3>Language</h3>
           <div class="overlay" id="maynav">
<a href="javascript:void(0)" class="closeup" onclick="closebtn()">&times;</a>
            <div class="dropee-content">

               </div>
           </div>
    <button type="submit" class="btn22" onclick="viewtrailer()">View Trailer  </button>
        </div>
        </div>
     <div class="dabba">
     <img src="image/img/A%20mighty%20wind.jpg" height="130px" width="200px">   
       <div class="moviename">
    <h1>Movie Name</h1>
    <h2>Rating</h2>
    <h3>Language</h3>
    <div class="overlay" id="maynav">
<a href="javascript:void(0)" class="closeup" onclick="closebtn()">&times;</a>
            <div class="dropee-content">
               
               </div>
           </div>
    <button type="submit" class="btn22" onclick="viewtrailer()">View Trailer  </button>  
        </div>
        </div>
         <div class="dabba">
     <img src="image/img/A%20mighty%20wind.jpg" height="130px" width="200px">   
       <div class="moviename">
    <h1>Movie Name</h1>
    <h2>Rating</h2>
    <h3>Language</h3>
    <div class="overlay" id="maynav">
<a href="javascript:void(0)" class="closeup" onclick="closebtn()">&times;</a>
            <div class="dropee-content">
               
               </div>
           </div>
    <button type="submit" class="btn22" onclick="viewtrailer()">View Trailer  </button>
        </div>
        </div>
    <div class="dabba">
     <img src="image/img/A%20mighty%20wind.jpg" height="130px" width="200px">   
       <div class="moviename">
    <h1>Movie Name</h1>
    <h2>Rating</h2>
    <h3>Language</h3>
    <div class="overlay" id="maynav">
<a href="javascript:void(0)" class="closeup" onclick="closebtn()">&times;</a>
            <div class="dropee-content">
               
               </div>
           </div>
    <button type="submit" class="btn22" onclick="viewtrailer()">View Trailer  </button>
        </div>
        </div>
    <div class="dabba">
     <img src="image/img/A%20mighty%20wind.jpg" height="130px" width="200px">   
       <div class="moviename">
    <h1>Movie Name</h1>
    <h2>Rating</h2>
    <h3>Language</h3>
    <div class="overlay" id="maynav">
<a href="javascript:void(0)" class="closeup" onclick="closebtn()">&times;</a>
            <div class="dropee-content">
               
               </div>
           </div>
    <button type="submit" class="btn22" onclick="viewtrailer()">View Trailer  </button>
        </div>
        </div>
    <div class="dabba">
     <img src="image/img/A%20mighty%20wind.jpg" height="130px" width="200px">   
       <div class="moviename">
    <h1>Movie name</h1>
    <h2>Rating</h2>
    <h3>Language</h3>
    <div class="overlay" id="maynav">
<a href="javascript:void(0)" class="closeup" onclick="closebtn()">&times;</a>
            <div class="dropee-content">
               
               </div>
           </div>
    <button type="submit" class="btn22" onclick="viewtrailer()">View Trailer  </button>
        </div>
        </div>
    <div class="dabba">
     <img src="image/img/A%20mighty%20wind.jpg" height="130px" width="200px">   
       <div class="moviename">
    <h1>Movie Name</h1>
    <h2>Rating</h2>
    <h3>Language</h3>
    <div class="overlay" id="maynav">
<a href="javascript:void(0)" class="closeup" onclick="closebtn()">&times;</a>
            <div class="dropee-content">
               
               </div>
           </div>
    <button type="submit" class="btn22" onclick="viewtrailer()">View Trailer  </button>
        </div>
        </div>
     </div>
    <div class="meta3">
        <div lang="slapmmar">
    <div class="slag">
<img src="image/img/best%20in%20show.jpg" width="100%" height="480px">
            </div>
    <div class="slag">
<img src="image/img/Black%20Adam.jpg" width="100%" height="500px">     
            </div>
    <div class="slag">
<img src="image/img/Black%20Panther%202.jpg" width="100%" height="500px">     
            </div>
    <div class="slag">
<img src="image/img/Bob%20Roberts.jpg" width="100%" height="500px">     
            </div>
    <div class="slag">
<img src="image/img/Congratulations.jpg" width="100%" height="500px">     
            </div>
    <span class="left anti" onclick="command(-1)">&#10094;</span>
    <span class="right anti" onclick="command(1)">&#10095;</span>
        </div>
     </div>
    </div>   
<!--
third section end
-->
    
<!--
4 sectio start
-->
    
<div class="imdb">
    <img src="image/screenshot.PNG" width="80%" height="100px">
    </div>
    
<!--
4 section end
-->
    <div class="helper">
    <h1>lates Movie</h1>
    <hr>
    </div>
    <div class="metrocity">
   <div class="container">
<img src="image/img/A%20mighty%20wind.jpg" class="image" height="400px">
       <div class="overlayslap">
           <div class="wishu">
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
<button type="submit" class="buttler"><a href="">View More</a> </button>
               </div>
       </div>
       
    </div>
    <div class="container">
<img src="image/img/best%20in%20show.jpg" class="image"  height="400px">
       <div class="overlayslap">
              <div class="wishu">
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
<button type="submit" class="buttler"><a href="">View More</a> </button>
               </div>
       </div>
       
    </div>
    <div class="container">
<img src="image/img/Black%20Adam.jpg" class="image"  height="400px">
       <div class="overlayslap">
              <div class="wishu">
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
<button type="submit" class="buttler"><a href="">View More</a> </button>
               </div>
       </div>
       
    </div>
    <div class="container">
<img src="image/img/Bob%20Roberts.jpg" class="image"  height="400px">
       <div class="overlayslap">
              <div class="wishu">
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
<button type="submit" class="buttler"><a href="">View More</a> </button>
               </div>
       </div>
       
    </div>
    <div class="container">
<img src="image/img/Chup%20chup%20ke.jpg" class="image"  height="400px">
       <div class="overlayslap">
              <div class="wishu">
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
<button type="submit" class="buttler"><a href="">View More</a> </button>
               </div>
       </div>
       
    </div>
</div>
    
    
<!--new section-->  
    
 <div class="helper">
    <h1>latest Drama</h1>
    <hr>
    </div>
<div class="hingoli">
<div class="hajmola">
 <img src="image/img/Triangle%20of%20sadness.jpg" height="400px"> 
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
    <button type="submit" class="buttler1"><a href="">View More</a> </button>
    </div>
<div class="hajmola">
 <img src="image/Drama%204.jpg" height="400px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>  
    <button type="submit" class="buttler1"><a href="">View More</a> </button>
    </div>
<div class="hajmola">
 <img src="image/img/The%20Menu.jpg" height="400px"> 
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
    <button type="submit" class="buttler1"><a href="">View More</a> </button>
    </div>
<div class="hajmola">
  <img src="image/img/the%20Banshees.jpg" height="400px"> 
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
    <button type="submit" class="buttler1"><a href="">View More</a> </button>
    </div>
<div class="hajmola">
 <img src="image/img/Shazam%202.jpg" height="400px">
    <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
    <button type="submit" class="buttler1"><a href="">View More</a> </button>
    </div>
    </div>
    

   <!------------------------------> 
    <script>
    var flag = 0;
        
    function control(x){
    flag = flag + x;
     slideshow(flag);
    }    
        
    slideshow(flag);
    function slideshow(numb){
    var txt = document.getElementsByClassName('slider');
    if(numb == txt.length){
    flag = 0;
    numb = 0;
    }
    if(numb < 0){
    flag = txt.length-1;
    numb = txt.length-1;
    }
        
    for(let y of txt){
    y.style.display = "none";
    }
    txt[numb].style.display = "block";
    
    }
    </script>
    
<!--
third section start
-->
    <script>
     var veesh = 0;  
        
    function command(y){
    veesh = veesh + y;
    mitra(veesh);
    }
        
     mitra(veesh);
    function mitra(ultra){
    var trip = document.getElementsByClassName('slag');
    if(ultra == trip.length){
    ultra = 0;
    veesh = 0;
    }
    if(ultra < 0){
    ultra = trip.length-1;
    veesh = trip.length-1;
    }
        
        
        
    for(let deep of trip){
    deep.style.display = "none";
    }
    trip[ultra].style.display = "block";
    }
    </script>
    
<!--
popup section
-->
<script>
    function viewtrailer(){
    document.getElementById('maynav').style.display = "block";
    }
    function closebtn(){
    document.getElementById('maynav').style.display = "none";
    }
    
    </script>
    
    
    
    </body>
</html>