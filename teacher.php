<?php

include "config.php";
//include "teacher1.php";//teacher1 includes  insertion of grade by teacher in database table grade 

 $insert = false;
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

 // $tid = $_POST["tid"];
 $que = $_POST["que"];
 $ans = $_POST["ans"];
 $title= $_POST["title"];
 $descp = $_POST["descp"];
 //$grade = $_POST["grade"];
 
 
  // Sql query to be executed
 $sql= "INSERT INTO `assignment` (`title`,`descp`, `que`, `ans`) VALUES ('$title','$descp','$que', '$ans')";

  $result = mysqli_query($con, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($con);
  } 
 }
 
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .title{
        font-size: 2rem;
        margin :10px 20px;

      }

      .descp{
        color:green;
        margin:-10px 50px;
        padding-left: 35px;
        font-size: 1rem;
      }
      

.full{
  border:2px black solid;
  box-shadow: 10px 10px 5px grey;
  margin:-2px;
  padding-top: 5px;
}
    

    .box{
      margin:20px ;
    }

 /* .container{
background-color: gray;
}
*/
.deva{
  background-color:cyan;
  color:black;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding-top: 10px;
}

/*
    .btn {
      position: fixed;
      top: 0;
      right: 0;
      margin: 2.5%;
    }*/

    .btn1{
      width:100%;
      /*border:2px solid black;*/
      height:35px;
      border-radius: 5px ;
      background-color:#3797a4;
      color:white;
      height: 40px;
      font-weight: 600;
      font-size:20px;
    }

    .Qin{
      width: 100%;
      height: 40px;
      border:2px solid black;
      border-radius:5px;
    }
    .Answer{
       border:2px solid black;
      border-radius:5px;
    }

    .pre{
      margin-left: 2px;
      margin-top: 30px;
      margin-bottom: -60px;
      width: 80px;
    }

    .Next{
      margin-left:900px;
      margin-top: 30px;
      width: 80px;
    }

    .que{
      border:black solid 1px;
      box-shadow: 5px 5px 5px grey;
      border-radius:5px;
      padding:30px;
      margin:5px;
    }
    </style>

  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <i style="color:white"; class="far fa-arrow-circle-left fa-3x"></i>
  <a class="navbar-brand mr-auto mr-lg-0" href="Doodlet.html">Doodle</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </div>
</nav>

<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#">Dashboard</a>
    <a class="nav-link" href="#">
      Friends
      <span class="badge badge-pill bg-light align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
  </nav>
</div>

<main role="main" class="container">
  <div class="d-flex align-items-center deva p-3 my-3 text-white-50 bg-purple rounded .z-depth-5 shadow-lg">
   <i class="far fa-arrow-circle-left fa-2x" style="color: black;"></i>
    <div class="lh-100">
      <h6 class="mb-0  lh-100" style="color:black; padding-left:300px; font-size: 3rem;">My Assignments </h6>
      
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-lg">
    
   <div class="Main">
  <div class="que">
   
  


  <form action="teacher.php" method="POST">
    <div class="form-group">
      <label for="usr" style="font-size: 2rem; font-family:  Impact, fantasy;">Title :</label>
      <input type="text" name="title" class="form-control" style="border:1px solid black;"id="usr">
  </div>
  <div class="form-group">
      <label for="usr" style="font-size: 2rem; font-family:  Impact, fantasy;">Description :</label>
      <input type="text" name="descp" class="form-control" style="border:1px solid black;"id="usr">
  </div>
  <div class="form-group">
      <label for="usr" style="font-size: 2rem; font-family:  Impact, fantasy;">Question :</label>
      <input type="text" name="que" class="form-control" style="border:1px solid black;"id="usr">
  </div>
  <div class="form-group">
      <label for="comment" style="font-size: 2rem; font-family:  Impact, fantasy;">Reference answer:</label>
      <textarea class="form-control" name="ans" rows="5" id="comment" style="border:1px solid black;"></textarea>
  </div>


          <button class="btn1" name="submit">Submit</button>
<!-- After submit go to assignemnts page
 -->

 <button type="button" class="btn  pre btn-info" href="Ass.php">Previous</button>
  <button type="button" class="btn  Next btn-info" href="#">Next</button>


     </div> <!--  -->
  </div>
</form>


        
      

  <!-- <div class="form-group">
      <label for="comment" style="font-size: 2rem;    font-family:  Impact, fantasy;"> Answer:</label>
      <textarea class="form-control" class="Answer" name="ans" id="ans" rows="5" id="comment" style="border:1px solid black;"></textarea>
  
<script>
document.getElementById("btn").onclick = function() {myFunction()};

function myFunction() {
  document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
}
</script>


    </div>




</div>
</div>







        
     
    </div>


  </div>

  
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="offcanvas.js"></script></body>
</html>
   

    -- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>