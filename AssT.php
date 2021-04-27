<?php

include "config.php";
$insert = false;
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

 // $tid = $_POST["tid"];
 $title= $_POST["title"];
 $max = $_POST["max"];
 $due = $_POST["due"];
 $descp = $_POST["descp"];
 //$grade = $_POST["grade"];
 
 
  // Sql query to be executed
 $sql= "INSERT INTO `ass` ( `title`,`max`,`due`, `descp`) VALUES ('$title','$max','$due', '$descp')";

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

    <link  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    


    <style>

      hr{
        size:5rem;

      }
              
      .heading{
        background-color:black;
        color:white;
        height:70px;
         margin : 5px;
        }

        .alert {
  padding: 20px;
  background-color: white;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
  border:2px solid black;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.Assdiv{
 width: 1100px;
 margin:30px 120px;
 border :0.2em solid black;
 padding:30px;
 border-radius:10px;
  background: linear-gradient(to bottom,white, #8bcdcd);
}

.cont{
    color:#0f3057;
    font-size:1.2rem;

}

.Main{
    border : 0.2rem solid black;
    background-color: #e8ffff;
    /*background: linear-gradient(to bottom,white, #8bcdcd);*/
}
hr {
  border-top: 2px solid black;
 
}

p{
  font-size: 1rem;
  color: #2d6187;
}

}
    </style>

    <title>Assignments</title>
  </head>
  <body>
    
    <div class="heading">
       <!--  <span class="closebtn" >&times;</span>   -->
        <i class="fal fa-arrow-square-left fa-2x" style="margin:10px; "></i>
   <!--  <h3 style="text-align: center; font-size:2rem;padding-top: -10px;">My Assignments</h3> -->
<h1 style="font-weight:900; margin-left:500px; margin-top:-40px">Create Assignment</h1>
    </div>
<div class="Main">
    <div class="Assdiv">

        



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teacher's Assignment interface</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{
      margin: 10px;
      padding: 10px;
    /*background: linear-gradient(to bottom,white, #8bcdcd);*/
    background-color: white;
    border:4px solid black;
        border-radius: 5px;
    }

    .que {
       border-radius: 5px;
        border: 5px solid black;
        padding: 40px;
        margin: 30px;
        background: linear-gradient(to bottom,white, #8bcdcd);
    }

    .btn {
      position: fixed;
      top: 0;
      right: 0;
      margin: 2.5%;
    }

    .btn1{
      width:70px;
      border:2px solid black;
      height:35px;
      border-radius: 5px ;
      background-color:#070d59;
      color:white;

    }
  </style>
</head>
<body>
 <!-- <h1 style="font-weight:900; margin-left:500px;">Create Assignment</h1> -->
 <!--  <button type="button" class="btn btn-primary active">End Assignment</button> -->

<div>
  <form action="AssT.php" method="POST">
  <div class="form-group">
      <label for="usr" style="font-size: 2rem;">Title:</label>
      <input type="text" name="title" class="form-control" id="usr">
  </div>
  <div class="form-group">
      <label for="usr" style="font-size: 2rem;">Max Marks:</label>
      <input type="text" name="max" class="form-control" id="usr">
  </div>
  <div class="form-group">
      <label for="usr" style="font-size: 2rem;">Due Date:</label>
      <input type="text" name="due" class="form-control" id="usr">
  </div>
  <div class="form-group">
      <label for="comment" style="font-size: 2rem;">Assignement Description</label>
      <textarea class="form-control" name="descp" rows="5" id="comment"></textarea>
  </div>
  
  

  <!-- <div class="form-group">
      <label for="usr">Question 2:</label>
      <input type="text" class="form-control" id="usr">
  </div>
  <div class="form-group">
    <label for="comment">Reference answer:</label>
  </div>
  <div class="radio">
      <label><input type="radio" name="optradio" checked>Option 1</label>
  </div>
  <div class="radio">
      <label><input type="radio" name="optradio">Option 2</label>
  </div>
  <div class="radio">
      <label><input type="radio" name="optradio">Option 3</label>
  </div>
</div> -->
<button class="btn1" name="submit">Submit</button>
<!-- After submit go to assignemnts page
 -->
</div>
</form>
  <ul class="pager">
    <li class="previous"><a href="#">Previous</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul>

</body>
</html>

        <


    <!-- <script>
            var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
      close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
      }
    }

     document.getElementById("myButton").onclick = function () {
        location.href = "teacher.php";

        
    };
    </script> -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>