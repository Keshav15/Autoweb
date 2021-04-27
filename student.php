<?php

    if(isset($_POST["submit"]))
  {
    require('config.php');
    require('session.php');
    $aid = $_GET["val"];
    $query = "SELECT ans FROM `assignment` WHERE aid=$aid";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $row=mysqli_fetch_array($result);
    $request=array("1"=>$_POST["ans"],"2"=>$row["ans"]);
    $url="http://ba0dabb10032.ngrok.io/";
    $request = json_encode($request);
    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $request );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $result = curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result);
    $grades=$result[0][0];
    $sid=$_SESSION["id"];
    $sql = "INSERT INTO `grade` ( aid,sid,grades) VALUES ( '$aid','$sid','$grades')";
    $result = mysqli_query($con,$sql);
  }
?>
<?php
error_reporting(0);
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
      margin:-5px;
    }
    </style>

  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="Doodle.html">Doodle</a>
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
  <form >
    <div class="Assdiv form-group">

        <div class="alert">


          
  
</form>


        
      
      
<div class="que">
   <form method="POST">
  <div class="form-group">
    
      <label for="usr" style="font-size: 2rem;   font-family:  Impact, fantasy;">Question :</label>
      <?php
        require("config.php");
        require("session.php");
        $aid = $_GET['val'];
        $sql = " SELECT que FROM `assignment` WHERE aid='$aid' ";
        $result = $con->query($sql);
        if($result->num_rows > 0) {
        // output data of each row
        if($row = $result->fetch_assoc()) {
        // echo '<input type="text" class="Qin" name="que" value='.$row['que'].'>';
          // ??echo '<p>'.$row['que'].'</p>';
          echo '<br> <span style="font-size:2rem; ">'.$row['que']. '</span>';
        }
        //echo "</table>";
        } else { echo "0 results"; }
        $con->close();

      ?>
     
      <!--  -->
  </div>
  <div class="form-group">
      <label for="comment" style="font-size: 2rem;    font-family:  Impact, fantasy;"> Answer:</label>
      <textarea class="form-control" class="Answer" name="ans" id="ans" rows="5" id="comment" style="border:1px solid black;"></textarea>
  </div>
  <a href='Ass.php'><button name="submit" class="btn1" id="btn" >Submit</button></a>

 <!--  after submit go to the grades page  -->

<hr>
  <!-- <ul class="pager">
    <li class="previous"><a href="#">Previous</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul> -->
  <button type="button" class="btn  Next btn-info" href="#">Next</button>
</form>


    </div>




</div>
</div>







    <div class="media text-muted pt-3">
      <!-- <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg> -->
      <!-- <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray"> -->
       
        
     
    </div>


  </div>

  
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="offcanvas.js"></script></body>
</html>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>