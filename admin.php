<!docktype html>
<html>
<head>
    <meta charset="utf-8">
    <title>home page</title>
    <meta charset="utf-8">
<style>
    
/*
    header section start
*/ 
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
    width: 830px;
    height: 45px;
    margin-left: 10px;
    border: none;
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
    
    .slidheshwo{
    width: 100%;
    }
    .arrow{
    position: absolute;
    top: 300px;
    font-size: 50px;
    padding: 8px 10px;
    cursor: pointer;
    }
    .next{
    right: 10px;
    }
    .prew{
    left: 10px;
    }
    .arrow:hover{
    background: black;
    color: white;
    transition: 0.5s;
    }
    .slider{
    display: none;
    }
    .tab{
    overflow: hidden;  
    background: black;
    padding: 10px;
    margin-top: 30px;
    margin-bottom: 30px;
    
    }
    .tab button{
    float: left;
    background: none;
    font-size: 20px;
    color: white;
    border: none;
    outline: none;
    padding: 10px 12px;
    margin-left: 20px;
    }
    .tab button:hover{
    background: red;
    transition: 0.5s;
    }
    .tab button.active{
    background: grey;
    }
    .tab-content{
    display: none;
    height: 200px;
    }
    .sonic{
text-align: center;
    }
    .messi{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    }
    .call-4{
    flex-basis: 20%;
    min-width: 300px;
    border: 2px solid black;
    }
    .call-4 img{
    max-width: 100%;
    padding: 25px;
    }
    .mbappe{
    margin-top: 30px;
    }
    .call-4 h3{
    text-align: center;
    }
    .trailer2{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    }
    .call-1 h4{
    margin-left: 80px;
    margin-top: -10px;
    }
    .arrows{
    position: absolute;
    top: 850px;
    font-size: 40px;
    padding: 12px 14px;
    color: yellow;
    padding: 5px;
    }
    .nextt{
    right: 10px;
    }
    .arrows:hover{
    background: rgba(0,0,0,0.5);
    color: white;
    transition: 0.5s;
    }
    .trailer2{
    display: none;
    }
    .flop{
    display: flex;
    margin-left: 35px;
    }
    .call-1{
    flex-basis: 20%;
    min-width: 300px;
    }
    .call-1 img{
    max-width: 100%;
    padding: 25px;
    height: 300px;
    }
    .tailor{
    margin-left: 45px;
    color: white;
    margin-bottom: 20px;
    }
    .tailor h1{
        margin-left: -17px;
    }
    .tailor hr{
    width: 15%;
    margin-left: -18px;
    height: 7px;
    background-color: darkorange;
    border: none;
    margin-top: -10px;
    }
      
    .all-out{
    overflow-x: hidden;
    width: 100%;
     height: 100%;
    display: none;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.5);
    transition: 0.5s;
    position: fixed;
    z-index: 1;  
    }
    .closebtrns{
    position: absolute;
    top: 30px;
    right: 140px;
    text-decoration: none;
    color: white;
    }
    
    .btr{
    padding: 8px;
    margin-left: 80px;
    margin-bottom: 20px;
    background: black;
    color: white;
    }
    .drop-content2{
    width: 800px;
    height: 500px;
    background: black;
    margin-top: -10px;
    margin-left: 350px;
    }
    .byju{
    margin-top: 80px;
    }
    .byju a{
    color: white;
    right: 330px;
    font-size: 50px;
    text-decoration: none;
        margin-left: 1150px;
        margin-top: 500px;
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
    .zeno a:hover{
    text-decoration: underline;
    color: red;
    transition: 0.5s;
    }
    
    .soni a{
    font-size: 50px;
    color: black;
margin-left: 1320px;  
    margin-top: 90px;
        font-weight: bold;
    }
    .flip-box{
    width: 250px;
    height: 400px;
    border: 2px solid black;
    perspective: 1000px;
    margin-left: 20px;
    margin-top: 40px;
    margin-right: 20px;
    }
    .flip-innre{
    width: 100%;
    height: 100%;
    transition: transform 0.5s;
    transform-style: preserve-3d;
    position: relative;
    }
    .flip-box:hover .flip-innre{
    transform: rotateY(180deg);
    }
    .front, .back{
    position: absolute;
    text-align: center;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    }
    .front{
    background: grey;
    color: white;
    }
    .back{
    background: #1F1F1F;
    color: white;
    transform: rotateY(180deg);
    }
    .flipboxx{
    display: flex;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
        padding: 10px;
    }
    .flipboxxx_row{
    flex-basis: 33%;
        display: flex;
        
    }
    .drama1{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    }
    .dreams{
    flex-basis: 19%;
    min-width: 250px;
    }
    .dreams img{
    padding: 25px;
    max-width: 100%;
    height: 250px;
    margin-left: -10px;
    height: 350px;
    width: 250px;
    }
    .dreams h1{
    text-align: center;
    margin-top: -20px;
    }
    .done{
    position: absolute;
    top: 2530PX;
    font-size: 50px;
    cursor: pointer;
    }
    .done:hover{
    background: white;
    color: black;  
    }
    .rIGHT{
    right: 10px;
    }
    .drama1{
    display: none;
    }
    .demon-dadly{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-left: 10px;
    }
    .dreams{
    border: 2px solid black;
    width: 100px;
    height: 480px;
    background-color: #1F1F1F;
    margin-top: 20px;
    margin-bottom: 30px;
    }
    
    .drama h1{
    text-align: center;
    }
    
    .drama-overlay{
    overflow-x: hidden;
    background: rgba(0,0,0,0.5);
    height: 100%;
    width: 100%;
    display: none;
    top: 0;
    left: 0;
    transition: 0.5s;
    position: fixed;
    }
   .drone .dramaclose{
    position: absolute;
    top: 30px;
    right: 40px;
    text-decoration: none;
    font-size: 50px;
    color: white;
    }
    .dramas{
    padding: 10px 16px;
    border: 2px solid black;
    margin-left: 80px;
    color: black;
    font-size: 18px;
    background: black;
    color: white;
    cursor: pointer;
    }
    .dramas:hover{
    background: none;
    color: white;
    transition: 0.5s;
    border:2px solid white;
    }
    .drama-content{
    width: 800px;
    height: 500px;
    background: #C7C7C7;
    margin-left: 400px;
    margin-top: 100px;
    border: 5px solid white;
    }
    .depos{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    }
    .meesh img{
    width: 350px;
    height: 450px;
    margin-left: -100px;
    }
    .opera{
    color: white;
    margin-left: 10px;
    padding: 8px;
    }
    .opera:hover{
outline: 3px solid white;
    }
    .lio{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
    }
    .meridona{
    height: 450px;
    background-color: #1F1F1F;
    }
    .meridona h4{
    margin-left: 10px;
    color: blue;
    font-size: 25px;
    margin-top: -1px;
    color: darkorange;
    }
    span{
    color: white;
    }
    .meridona h5{
    font-size: 20px;
    color: white;
    margin-top: -30px;
    margin-left: 10px;
    }
    .meridona h5:hover{
    text-decoration: underline;
    }
    .trigger{
    margin-top: -20px;
    margin-left: 40px;
    width: 120px;
    height: 40px;
    background: none;
    border: 2px solid white;
    color: white;
    font-size: 15px;
    }
    .trigger:hover{
    background-color: darkorange;
    transition: 0.5s;
    }
    .kenok{
    overflow-x: hidden;
    background: black;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    transition: 0.5s;
    position: fixed;
    }
    .claim{
    position: absolute;
    top: 20px;
    right: 20px;
    color: wheat;
    text-decoration: none;
    font-size: 50px;
    }
    .deep-learning{
    width: 900px;
    height: 500px;
    background: white;
    margin-left: 300px;
    margin-top: 120px;
    }
    .trimmer{
    margin-left: 80px;
    }
    .tailor-25{
    margin-bottom: -20px;
    margin-left: 65px;
    }

    </style>        
    </head>
<body>
    
<!--
    header section start
-->
    
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
<!--<div class="dropdown">
       <button class="btn" type="submit">All</button>
<div class="drop-content">
    <a href="">home</a>
    <a href="">home</a>
    <a href="">home</a>
    <a href="">home</a>
    </div>
       </div>  -->
    <form action="search.php" method="get">
          <input type="search" placeholder="search no" class="inh" name="simons">   
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
    header section end
-->

<!--
    slider section start
-->
<div class="slidheshwo">
<div class="slider">
    <img src="image/img/A%20mighty%20wind.jpg" width="100%" height="500px">
    </div>
<div class="slider">
    <img src="image/img/best%20in%20show.jpg" width="100%" height="500px">
    </div>
<div class="slider">
    <img src="image/img/Black%20Adam.jpg" width="100%" height="500px">
    </div>
<div class="slider">
    <img src="image/img/Black%20Panther%202.jpg" width="100%" height="500px">
    </div>
<div class="slider">
    <img src="image/img/Chup%20chup%20ke.jpg" width="100%" height="500px">
    </div>
<span class="prew arrow" onclick="control(-1)">&#10094;</span>
<span class="next arrow" onclick="control(1)">&#10095;</span>
    </div>
    
 
<!--
    trailler section start
-->
    
<div class="tailor">
    <h1>Latest Trailer</h1>
<hr>
    </div>
        
<div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>

<div class="tab">
<button class="tablink" onclick="opencity(event, 'Comedy')">Comedy</button>
<button class="tablink" onclick="opencity(event, 'Thrileer')">Thrileer</button>
<button class="tablink" onclick="opencity(event, 'Drama')">Drama</button>
<button class="tablink" onclick="opencity(event, 'Horror')">Horror</button>
<button class="tablink" onclick="opencity(event, 'Sci-fi')">Sci-fi</button>
<button class="tablink" onclick="opencity(event, 'Hollywood')">Hollywood</button>
<button class="tablink" onclick="opencity(event, 'Tollyuwood')">Tollyuwood</button>
<button class="tablink" onclick="opencity(event, 'dOCUMEBTORY')">dOCUMEBTORY</button>
    </div>
    
<div id="Comedy" class="tab_content">
    <div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>
    </div>
<div class="tab_content" id="Thrileer">
   <div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>
    
    </div>
<div id="Drama" class="tab_content">
    <div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>
    </div>
<div id="Horror" class="tab_content">
    <div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>
    </div>
<div id="Sci-fi" class="tab_content">
   <div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>
    </div>
<div id="Hollywood" class="tab_content">
   <div class="mbappe">
   <div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>
        </div>
    
    </div>
<div id="Tollyuwood" class="tab_content">
   <div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>
    </div>
<div id="dOCUMEBTORY" class="tab_content">
   <div class="pele">  
    <div class="lio">
      
    <div class="meridona">
    <img src="image/img/best%20in%20show.jpg" width="200px" height="300px">
        <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
  <img src="image/img/Black%20Adam.jpg" width="200px" height="300px">  
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
        </div>
    <div class="meridona">
   <img src="image/img/Black%20Panther%202.jpg" width="200px" height="300px"> 
    <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Bob%20Roberts.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
    <div class="meridona">
    <img src="image/img/Chup%20chup%20ke.jpg" width="200px" height="300px">
      <h4>&#9733; <span>8.4</span></h4>
        <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
<div class="meridona">
   <img src="image/img/Congratulations.jpg" width="200px" height="300px"> 
  <h4>&#9733; <span>8.4</span></h4>
    <h5>Hangama<br>(The Fun Unlimited)</h5>
        <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger" onclick="triggering()">View Trailer</button>
    </div>
        </div>
</div>
    </div>
    
<!--
tab section end
-->
 
<!--
flip the image section start
-->
    <div class="tailor tailor-25">
    <h1>Latest Trailer</h1>
<hr>
    </div>
    <div class="flipboxx">
       
        <div class="flipboxxx_row">
  <div class="flip-box">
<div class="flip-innre">
      <div class="front">
    <img src="image/img/A%20mighty%20wind.jpg" width="250px" height="400px">
    </div>
<div class="back">
    <h1>heading</h1>
    <p>kjhkj</p>
    </div>
      </div>
    </div>  
   
     <div class="flip-box">
<div class="flip-innre">
      <div class="front">
    <img src="image/img/A%20mighty%20wind.jpg" width="250px" height="400px">
    </div>
<div class="back">
    <h1>heading</h1>
    <p>kjhkj</p>
    </div>
      </div>
    </div>  
    
     <div class="flip-box">
<div class="flip-innre">
      <div class="front">
    <img src="image/img/A%20mighty%20wind.jpg" width="250px" height="400px">
    </div>
<div class="back">
    <h1>heading</h1>
    <p>kjhkj</p>
    </div>
      </div>
    </div>  
            <div class="flip-box">
<div class="flip-innre">
      <div class="front">
    <img src="image/img/A%20mighty%20wind.jpg" width="250px" height="400px">
    </div>
<div class="back">
    <h1>heading</h1>
    <p>kjhkj</p>
    </div>
      </div>
    </div>
          <div class="flip-box">
<div class="flip-innre">
      <div class="front">
    <img src="image/img/A%20mighty%20wind.jpg" width="250px" height="400px">
    </div>
<div class="back">
    <h1>heading</h1>
    <p>kjhkj</p>
    </div>
      </div>
    </div>
    </div>
    </div>
<!--
flip the image section end
-->
 
    
<!--
Drama Section start
-->
    
    
<!--
    curtain menu code start
-->
   <div class="tailor">
    <h1>Latest Trailer</h1>
<hr>
    </div>
<div class="drama">
    <div class="drama1">
        <div class="demon-dadly">
<div class="dreams">
  <img src="image/img/murder%20Mystery%202.jpg">
    <h1>name of drama</h1>
   <div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>
        </div>
<div class="dreams">
  <img src="image/img/Black%20Panther%202.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>
            </div>
<div class="dreams">
  <img src="image/img/Black%20Adam.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>   
        </div>
<div class="dreams">
  <img src="image/img/Chup%20chup%20ke.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>
       
            </div>
<div class="dreams">
  <img src="image/img/Guardians%20of%20the%20galaxy%203.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>       
            </div>
</div>
    </div>
<div class="drama1">
  <div class="demon-dadly">   
<div class="dreams">
  <img src="image/img/FOB2.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>
      </div>
<div class="dreams">
  <img src="image/img/Shehzada.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>
      </div>
<div class="dreams">
  <img src="image/img/Hungama.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>
      </div>
<div class="dreams">
  <img src="image/img/Welcome.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>
      </div>
<div class="dreams">
  <img src="image/img/Interstellar.jpg">
    <h1>name of drama</h1>
<div class="kenok" id="tramelo">
    <a href="javascript:void(0)" class="claim" onclick="clamp()">&times;</a>
            <div class="deep-learning">
            
            </div>
        </div>
    <button type="submit" class="trigger trimmer" onclick="triggering()">View Trailer</button>
      </div>
    </div>
    </div>
<span class="left done" onclick="fast(-1)">&#10094;</span>
<span class="rIGHT done" onclick="fast(1)">&#10095;</span>
    </div>
   
<!--
drama section end
-->

   
    
<script>
    function operas(){
    document.getElementById("metry").style.height = "100%";
    }
    function ccloseup(){
    document.getElementById("metry").style.height = "0%";
    }
    </script>
   
<!--
 curtain menu section end    
-->
    
<!--
    slider section start
-->
  <script>
      var flag = 0;
      
    function control(x){
        flag = flag + x;
    slideshow(flag);
    }
      
      slideshow(flag);
    function slideshow(numb){
 var txt = document.getElementsByClassName("slider");
        
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
    slider section end
-->
    
<!--
  tab section start  
-->
  
<script>
    function opencity(event,cityname){
    var i,tab_content,tablink;
        
   tab_content = document.getElementsByClassName("tab_content");
    for(i = 0; i < tab_content.length; i++){
    tab_content[i].style.display = "none";
    }
    
    tablink = document.getElementsByClassName("tablink");
    for(i = 0; i < tablink.length; i++){
    tablink[i].className = tablink[i].className.replace (" active", "");
    }
        
    document.getElementById(cityname).style.display = "block";
    event.currentTarget.className += " active";
    }
    </script>
 <!--   tab section end-->
    
<!--
trailer section start
-->
 

    
<!--
trailer section end
-->
    
<!--
    popup section start
-->
    
    
    
<!--
    drama section start
-->
    <script>
    var fifa = 0;
    function fast(a){
    fifa = fifa + a;
    dramashow(fifa);
    }    
        
    dramashow(fifa);
    function dramashow(dram){
    var drama = document.getElementsByClassName("drama1");
     if(dram == drama.length){
     fifa = 0;
        dram = 0;
     }   
        if(dram < 0){
     fifa = drama.length-1;
     dram = drama.length-1;
       
     }   
    for(let y of drama){
    y.style.display = "none";
    }
        
    drama[dram].style.display = "block";
    }
    </script>
    
<!--
drama section end
-->  
<script>
function triggering(){
    document.getElementById("tramelo").style.width = "100%";
    }
    function clamp(){
    document.getElementById("tramelo").style.width = "0%";
    }    </script>

  

    </body>
</html>