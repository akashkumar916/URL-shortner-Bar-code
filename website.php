<!doctype html>
<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
body{

  background: url("3621.jpg") no-repeat  fixed;
  background-size:1550px 750px;
  background-position: cover;


}

.card-header:hover{
  cursor:pointer;
  box-shadow:3px 3px black;




}



  </style>




</head>

<body>

  <div class="container ">
<h1 class="display-4 text-danger text-center" style="text-shadow:1px 1px red;font-weight:bold;">
<i class="fa fa-krw" aria-hidden="true"></i>URL Shortner | Bar Code Generator..

</h1>
</div>
<section>
<div class="container p-5" style="margin-left:350px;margin-top:20px;">
<div class="row">
<div class="col-md-8 ">


<div class="card card-light p-5 text-center" style="height:660px;width:800px;border:4px solid red;">
<div class="card-content">
<div class="card-header  bg-info">
<h1 class="card-title  text-center">shrink your link<i class="fa fa-hand-o-down" aria-hidden="true"></i>
<h1>

</div>
<div class="card-body">


  <?php
  include("qrlib.php");
  echo "<form class='form-inline'>";
  echo "<input type='text' placeholder='enter your url' class='form-control mt-5 form-control-md' style='width:700px' name='e1'>";
  echo "<input type='submit' class='btn btn-outline-danger btn-block mt-5 btn-lg form-control'  name='e' value='Shrink /Generate'/>";



  echo "</form>";
  if(isset($_GET["e"])){
  $y=$_GET["e1"];
  QRcode::png($y,'new.png','H','8','8');

  echo "<br\>"."<span class='h1 mt-5 ml-5' style='display-inline-block' >Bar code</span>";
  echo "<br\>"."<span class='h1 mt-5 ml-5' style='display-inline-block'>your  url:</span>"."<br\>";
  echo "<br\>"."<i class='fa fa-arrow-right' class='diplay-3' aria-hidden='true'></i>";
  echo "<div>";
  echo "<img src='new.png'/>";

    $t=substr(md5($y.rand()),0,10);
  echo "<span class='text-secondary' style='font-weight:bold'>";
  echo "http://".$t.".com";
echo "</span>";
echo "</div>";
  }





  ?>





</div>

</div>
</div>


</div>


</div>


</div>


</div>

</section>


</body>
</html>
