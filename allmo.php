<?php
include("connection.php");
include('whole.php');
?>

<!docktype html>
<html>
<head>
    <meta charset="utf-8">
    <title>this is my webiste</title>
    <style>
    body{
    background: #0b0b0b;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }
    .dro-content{
    position: relative;
    border: 2px solid black;
    }
    .header{
    display: flex;
    align-items: center;
    height: 80px;
    }
    .header img{
    margin-left: 50px;
    margin-top: -10px;
    }
    .dropdown{
    overflow: hidden;
    float: left;
    }
    .btn{
    background: none;
    border: none;
    outline: none;
    font-size: 20px;
    margin-left: 50px;
    }
    .drop-content{
    display: none;
    position: absolute;
    min-width: 150px;
    z-index: 1;
    background: green;
    }
    .drop-content a{
    display: block;
    float: none;
    text-decoration: none;
    text-align: left;
    color: black;
    font-size: 20px;
    padding: 10px;
    text-align: center;
    }
    .drop-content a:hover{
    background: red;
    transition: 0.5s;
    color: white;
    }
    .dropdown:hover .drop-content{
    display: block;
    }
    .inh{
    width: 750px;
    height: 45px;
    margin-left: 10px;
    border: 5px solid white;
    outline: none;
    }
    .inty{
    width: 50px;
    height: 47px;
    padding: 2px;
    background-color: darkorange;
    color: white;
    font-size: 25px;
    }
    .search{
    display: flex;
    margin-right: 30px;
    }
    .booking{
    background: none;
    width: 100px;
    height: 40px;
    margin-right: 30px;
    font-size: 20px;
    border: none;
    outline: none;
    color: white;
    }
    .booking:hover{
    background-color: darkorange;
    transition: 0.5s;
    }
    .extra{
    background: none;
    width: 130px;
    height: 40px;
    margin-right: 30px;
    font-size: 20px;
    border: none;
    outline: none;
    color: white;
    }
    .extra:hover{
    background-color: darkorange;
    transition: 0.5s;
    }
    .meri{
    overflow-x: hidden;
    background: rgba(0,0,0,0.2);
    width: 100%;
    height: 0;
    top: 0;
    left: 0;
    transition: 1s;
    position: fixed;
    }
    .closewindow{
    position: absolute;
    text-decoration: none;
    }
    .demon{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    }
    .abbott{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    width: 1000px;
    height: 500px;
    background: white;
    margin-top: 120px;
    margin-left:300px;
    }
    .zeno{
    flex-basis: 30%;
    min-width: 200px;
    margin-top: -250px;
    margin-left: 200px;
    }
    .zeno a{
    font-size: 25px;
    text-decoration: none;
    color: black;
    margin-left: 25px;
    padding-bottom: 20px;
    }
    .opera{
    color: white;
    margin-left: 10px;
    padding: 8px;
    }
    .opera:hover{
    outline: 3px solid white;
    }
    .soni a{
    font-size: 50px;
    color: white;
    margin-left: 1320px;  
    margin-top: 90px;
    font-weight: bold;
    }
    .slideshow-container {
    width: 100%;
    margin: auto;
}

   .mySlides {
    display: none;
}


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
        form{
        display: flex;
        }

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
        .missindia{
        overflow-x: hidden;
        background: white;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        transition: 0.5s;
        position: fixed;
        z-index: 1;
        }
        .closeup{
        position: absolute;
        top: 30px;
        right: 40px;
        color: black;
        font-size: 30px;
        text-decoration: none;
        }
        #main{
        transition: margin-left .5s;
        padding: 25px;
        }
        .bittu{
        width: 100px;
        height: 30px;
        margin-top: -20px;
        margin-left: -20px;
        background: none;
        color: white;
        border: 2px solid white;
        }
        .bittu:hover{
        background-color: darkorange;
        transition: 0.5s;
        color: white;
        }
        .missindia a{
        text-decoration: none;
        display: block;
        font-size: 30px;
        color: black;
        padding: 10px;
        text-align: center;
        }
        .luka-medrick{
        margin-top: 60px;
        }
        .missindia a:hover{
        color: darkorange;
        }
        .coofee{
        display: flex;
        }
        
        .mixture{
        flex-basis: 10%;
        width: 100%;
        height: 100%;
        background: grey;
        }
        .sugar{
        flex-basis: 50%;
        background: red;
        width: 500px;
        height: 600px;
        }
        
        .deepmind{
        display: flex;
        }
        .machine{
        flex-basis: 25%;
        }
        .row{
        display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
        }
        .col-4{
            flex-basis: 15%;
            min-width: 300px;
            padding: 10px;
            text-align: center;
            color: #fff;
            border: 2px solid white;
            margin: 15px;
        }
        .col-4 img{
            max-width: 100%;
            height: 200px;
        }
        .betr1{
        color: wheat;
        background: none;
        border: none;
        padding: 10px 16px;
        border: white 2px solid;
        outline: none;
        }
        .betr1 a{
        text-decoration: none;
        color: white;
        }
        .betr1:hover{
        background-color: darkorange;
        transition: 0.5s;
        }
        
        
        
    </style>
    </head>
<body>
    <div class="header">
<img src="image/Movie%20Elite.png" width="125px">
   <div class="meri" id="metry">
       <div class="soni">
       <a href="javascript:void(0)" class="closewindow" onclick="ccloseup()">&times;</a>
        </div>
    <div class="abbott">
      <div class="demon">
    <div class="zeno">
       <h2>&#9679;Moviews</h2>
    <a href="">lkjljijli</a><br>
    <a href="">hfgdfkugukhome</a><br>
    <a href="">acadasdas</a><br>
    <a href="">ads</a><br>
    <a href="">hoaasdcadddme</a>      
          </div>
    <div class="zeno">
         <h2>&#9679;Moviews</h2>
    <a href="">home</a><br>
    <a href="">home</a><br>
    <a href="">home</a><br>
    <a href="">home</a><br>
    <a href="">home</a>      
          </div>
        <div class="zeno">
    <h2>&#9679;Moviews</h2>
    <a href="">home</a><br>
    <a href="">home</a><br>
    <a href="">home</a><br>
    <a href="">home</a><br>
    <a href="">home</a>      
          </div>
        </div> 
       </div>
       </div>
<span class="opera" onclick="operas()">&#9776; Menu</span>  
        
    <form action="search.php" method="get">
          <input type="search" placeholder="search no" class="inh" name="simons_lemons"> 
    <input type="submit" class="inty" value="search" name="search_btn">  
               </form>  
    <div class="booking">
    <button type="submit" class="booking">Booking</button>
       </div>
    <div class="extra">
    <button type="submit" class="extra">Contact Us</button>
       </div>
    </div> 
    
<!--
slider began section
-->
    
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="image/img/A%20mighty%20wind.jpg" style="width:100%" height="500px">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="image/img/best%20in%20show.jpg" style="width:100%" height="500px">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="image/img/Black%20Adam.jpg" style="width:100%" height="500px">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
    
<!--
    section 3 start
-->
   
   <div class="missindia" id="metricity">
<a href="javascript:void(0)" class="closeup" onclick="closeudown()">&times;</a>
       <div class="luka-medrick">
      
       <?php
         $select_query="select * from  categories";
        $result_query=mysqli_query($con,$select_query);
        while($row_data=mysqli_fetch_assoc($result_query)){
        $movie_id=$row_data['Movie_id'];
        $movie_title=$row_data['Categories_title'];
           echo " <a href='allmo.php?movie=$movie_id'>$movie_title</a>";
        }
           ?>
           </div>
    </div>
    <div id="main">
<button type="submit" class="bittu" onclick="bittuer()">&#9776; Menu</button>
        </div>
    
    <div class="row">
        <?php
        getallproduct();
        getall_unique_product();
        ?>
    <!--<div class="col-4">
        <img src="image/Drama%201.jpg">
        <h1>title</h1>
        <h2>description</h2>
        <h3>rating</h3>
        </div>-->
        
         
    </div>
 

    
    <script>
    function operas(){
    document.getElementById("metry").style.height = "100%";
    }
    function ccloseup(){
    document.getElementById("metry").style.height = "0%";
    }
    </script>
    
    <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
    
<script>
    function bittuer(){
document.getElementById("metricity").style.width = "250px";
document.getElementById("main").style.marginLeft = "250px";
    }
    function closeudown(){
document.getElementById("metricity").style.width = "0";
document.getElementById("main").style.marginLeft = "0";
    }
    
    </script>
    
    
    </body>
</html>