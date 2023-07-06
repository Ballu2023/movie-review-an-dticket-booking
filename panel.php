<!docktype html>
<html>
<head>
    <meta charset="utf-8">
    <title>this is my website</title>
<style>
    .sing{
    background: grey;
    padding: 10px;
text-align: center;
    }
    .heading{
    text-align: center;
    }
    .admin{
    background-color: forestgreen;
    padding: 10px;
    text-align: center;
    }
    .btn{
    height: 40px;
    width: 120px;
    background: black;
    color: white;
    margin-right: 25px;
    font-size: 14px;
    border: none;
    outline: none;
    }
    .btn:hover{
    background: none;
    transition: 0.5s;
    border: 2px solid black;
    }
    a{
    text-decoration: none;
    color: white;
    }
    
    </style>
    </head>
<body>
    <div class="barca">
<div class="metro">
    <div class="sing">
<img src="image/img/A%20mighty%20wind.jpg" width="125px" height="50px">
        </div>
<div class="heading">
    <h1>Welcome to the Our Admin Panel</h1>
    </div>
<div class="admin">
    <button class="btn"><a href="panel.php?movie_add">Add Categories</a></button>
    <button class="btn"><a href="panel.php?venue_add">venue</a></button>
    <button class="btn"><a href="panel.php?time_add">Time</a></button>
    <button class="btn"><a href="panel.php?movie_Details">Movies Detail</a></button>
    <button class="btn"><a href="">All Order</a></button>
    <button class="btn"><a href="panel.php?Drama_details">Drama</a></button>
    <button class="btn"><a href="panel.php?movies_details">Movies</a></button>
    <button class="btn"><a href="">All Payment</a></button>
    <button class="btn"><a href="">Logout</a></button>
    </div>
        </div>
    </div>
<div class="radar">
    <?php
    if(isset($_GET["movie_add"])){
    include("cat.php");
    }
    if(isset($_GET['movie_Details'])){
    include("movie.php");
    }
    if(isset($_GET['Drama_details'])){
    include("bform.php");
    }
    if(isset($_GET['movies_details'])){
    include("bmovieform.php");
    }
    if(isset($_GET['venue_add'])){
    include("venue.php");
    }
    if(isset($_GET['time_add'])){
    include("time.php");
    }
    
    ?>
    </div>
    </body>
</html>