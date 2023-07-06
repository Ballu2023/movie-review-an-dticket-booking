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
    width: 100px;
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
    
    .header img{
    margin-left: 30px;
    }
        .single{
        display: flex;
        align-items: center;
        }
        .single img{
        margin-left: 80px;
        margin-top: 60px;
        }
        .lepo{
        margin-left: 40px;
        margin-top: -275px;
        }
        .intro{
        margin-top: 30px;
        height: 30px;
        width: 60px;
        text-align: center;
        }
        .btn23{
        height: 40px;
        padding: 10px;
        margin-top: 30px;
        background-color: darkorange;
        color: white;
            font-weight: bold;
        font-size: 20px;
        }
        .btn23:hover{
        background: none;
        border: 2px solid black;
        transition: 0.5s;
        color: black;
        }
        select{
        height: 30px;
        margin-top: 10px;
        width: 130px;
        background: black;
        color: white;
        }
        .tab{
        overflow: hidden;
background-color: antiquewhite;
            padding: 5px;
        margin-top: 20px;
        }
        .tab button{
            float: left;
padding: 14px 16px;
height: 50px;
    font-size: 15px;
        background: none;
        border: none;
        color: black;
        align-items: center;
        }
        .tab button.active{
        border-bottom: 5px solid green;
        }
        .tablink{
        display: none;
                margin-left: 65px;
            
        }
        .keepon{
        margin-left: 60px;
        }
        .date{
        margin-bottom: 20px;
        }
        
    </style>
    </head>
<body>
     <div class="header">
<img src="image/lord%20of%20the%20rings.png" width="125px" height="50px">
<div class="search">
        <form method="post" action="" class="ceto">
    <input type="search" class="int">
    <input type="submit" class="btn">
    </form>
        </div>  
<div class="sign-in">
    <button type="submit" class="btn2"><a href="">Login</a></button>
    <button type="submit" class="btn2"><a href="">Contact us</a></button>
        </div>
    </div>
    
<!--
    second section
-->
    
    <div class="single">
<div class="single-1">
     <img src="image/img/Fear%20of%20a%20black%20hat.jpg" width="400px">   
        </div>
<div class="single-1">
   <div class="lepo">
    <h1>Lod of the ring</h1>
    <h1>Languge :</h1>
       <form class="bedpart" method="post" action="">
       <input type="number" class="intro" value="1"><br>
        <input type="date" class="date"><br>
           <select>
               <option>Select Time</option>
           <option>09:00AM</option>
           <option>09:00AM</option>
           <option>09:00AM</option>
           <option>09:00AM</option>
           <option>09:00AM</option>
           </select><br>
        <select>
               <option>Select Venue</option>
           <option>PVR</option>
           <option>INOX</option>
           <option>CARNIVAL</option>
           <option>MAXUS</option>
           <option>IMAX</option>
           </select><br>
           <input type="submit" class="btn23" value="Book Now">
       </form>        
    </div>     
        </div>
    </div>
    
<!--
    thirds section start
-->
    
    <div class="tab">
        <div class="keepon">
<button type="submit" class="btn21" onclick="opencity(event,'paris')">Description</button>
<button type="submit" class="btn21" onclick="opencity(event,'uk')">Star Cast</button>
<button type="submit" class="btn21" onclick="opencity(event,'tokyo')">Rating</button>
    </div>
        </div>
<div class="tablink" id="paris">
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    </div>
<div class="tablink" id="uk">
    <h1>Hellow rodd</h1>
    <p>demon -0dedally</p>
    </div>
<div class="tablink" id="tokyo">
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
    <h1>Hellow rodd</h1>
<h4>Negolizser</h4>
    </div>
    
<!--
    thirds section end 
-->
    
    <script>
function opencity(event,cityname){
var i,tablink,btn21;
    
tablink = document.getElementsByClassName("tablink");
for(i = 0; i < tablink.length; i++){
tablink[i].style.display = "none";
}
    
btn21 = document.getElementsByClassName("btn21");
for(i = 0; i < btn21.length; i++){
btn21[i].className = btn21[i].className.replace ("active", "");
}

document.getElementById(cityname).style.display = "block";
event.currentTarget.className += " active";

}
    </script>
    
    
    </body>
</html>
