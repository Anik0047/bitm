<?php
$title = "Email Templete";
$discount = "UP TO 40% OFF";
$name = "NEIMAN MARCUS";

$head = <<<EMAILTEMP1
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>$title</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
            h1, p{
            margin: 0;
        }
        
        #wrapper{
            width: 600px;
            margin: 20px auto 0;
            padding: 10px;
        }
        
        #wrapper header {
            border-bottom:  1px solid #808080;
        }
        
        #wrapper header .free-services{
            color: #bc0555;
            letter-spacing: 0.1rem;
            border-bottom: 1px solid #8080803e;
        }
        
        #wrapper header .navbar-brand{
            width: 30%;
            margin: auto;
        }
        
        #wrapper header .discount p:first-child{
            color: #ae7564;
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: 0.1rem;
        }
        
        #wrapper header .discount p:nth-child(2){
            font-size: 2.2rem;
            letter-spacing: 0.1rem;
        }
        
        #wrapper header .discount p:last-child a{
            color: black;
            text-decoration: none;
            border-bottom: 1px solid #000;
            font-size: 1.2rem;
        }
        
        #wrapper main{
            background-color: #e1e5e952;
        }
        
        #wrapper main div:first-child{
            background-color: #363131;
            color: #fff;
            width: 170px;
            margin: auto;
            padding: 10px;
        }
        
        #wrapper main div:first-child p:first-child{
            /* font-size: 12px; */
            letter-spacing: 0.1rem;
        }
        
        #wrapper main div:first-child p:last-child{
            font-size: 0.95rem;
            letter-spacing: 0.48rem;
            /* letter-spacing: 0.5rem; */
        }
        
        #wrapper main div:last-child h1{
            font-size: 3rem;
        }
        
        #wrapper main div:last-child p:last-child .btn{
            border-radius: 0;
            padding:0.5rem 1rem ;
        }
  </style>
</head>
EMAILTEMP1;


$header = <<<EMAILTEMP2
<header class="pb-3">
  <p class="free-services pb-3 mb-2 text-center fw-bold">FREE SHIPPING + FREE RETURN</p>
  <div class="navbar-brand">
    <a href="index.html">
      <img src="img-2/logo.svg" alt="Logo Icon" class="img-fluid">
    </a>
  </div>
  <div class="text-center discount mt-4">
    <p class="text-uppercase">2000 + STYLES JUST ADDED</p>
    <p class="fw-bold">$discount</p>
    <p><a href="#">SHOP SALE</a>&gt;</p>
  </div>
</header>
EMAILTEMP2;

$main = <<<EMAILTEMP3
<main class="mt-2 pt-4 pb-2">
  <div class="text-center">
    <p>$name</p>
    <P class="fw-bold">EXCLUSIVE</P>
  </div>

  <div class="text-center ">
    <h1 class="fw-semibold mb-2">Theory</h1>
    <p class="fs-5">Relaxed styles capture the effortless spirit of the</p>
    <p class="fs-5">Mediterranean, including exclusives only found here</p>
    <p class=" mt-3 mb-2"><button type="button" class="btn btn-dark text-uppercase">Shop Now</button></p>
  </div>
</main>
EMAILTEMP3;
?>

<!doctype html>
<html lang="en">
<?php
echo $head;
?>
<body>

  <div id="wrapper">
    <?php
      // if(isset($header)){
      //   if(empty($header)){
      //     echo "Nothing";
      //   }
      //   else{
      //     echo $header;
      //   }

      // }
      echo $header;
      echo $main;
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>