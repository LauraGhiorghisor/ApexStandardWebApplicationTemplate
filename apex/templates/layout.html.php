<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title><?=$title?></title>
</head>

<body>

    <style>
       
    </style>


    


<!-- big screen nav -->
    <nav class="navbar d-none d-lg-flex navbar-light bg-light justify-content-around  
        border-top border-bottom border-dark sticky-top basketNav">
        <div class="container px-0 d-flex flex-row justify-content-between">
            <!-- <a class="navbar-brand d-none d-md-flex">WEBSITE  </a> -->
            <a class="navbar-brand d-flex" href="index.php"><img src="images/randomLogo.png" class="brandLogo"> </a>
        
            <!-- <?=$buttons;?> -->
                
<div class=" px-0 d-flex flex-row justify-content-space-between">
<div class="dropdown">
<a class="nav-item nav-link mx-0  pl-0 dropdown-toggle" data-toggle="dropdown" href="#" id="servicesDropdown" aria-haspopup = "true" aria-expanded="false">Dashboard</a>

  <div class="dropdown-menu" aria-labelledby="servicesDropdown">
    <?=$buttonsDrop?>
  </div>
</div>
<span>
                <a href = "basket.html" class="account nav-item nav-link"></a>
                <a href = "basket.html" class="basket nav-item nav-link"></a>
                <a href = "basket.html" class="login nav-item nav-link"></a>
</span>
</div>
                <!-- <a href = "basket.html" class="logout"></a> -->
</div>
    </nav>

<!-- Jumbotron -->
    <div class="jumbotron d-lg-none rounded-0">
            <h1 class="red">  WEBSITE</h1>
        </div>
    
        <div class="jumbotron d-none d-lg-flex  rounded-0">
                <h1 class="red">  WEBSITE</h1>
            </div>



<!-- drop down -->
    <nav class="navbar d-lg-none navbar-light bg-light align-content-center justify-content-end border-top border-bottom border-dark sticky-top ">
    <div class="container d-flex flex-row px-0">

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#toggleMyNav"
            aria-controls="toggleMyNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon btn-sm-lg ">
            </span>
        </button>

        <a class="navbar-brand"> WEBSITE  </a>



 <!-- dashboard -->
 <div class=" px-0 d-flex flex-row justify-content-space-between">
        <div class="dropdown">
            <a class="nav-item nav-link mx-0  pl-0 dropdown-toggle" data-toggle="dropdown" href="#" id="servicesDropdown" aria-haspopup = "true" aria-expanded="false">Dashboard</a>

            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                <?=$buttonsDrop?>
            </div>
        </div>
<span>
                <a href = "basket.html" class="account nav-item nav-link"></a>
                <a href = "basket.html" class="basket nav-item nav-link"></a>
                <a href = "basket.html" class="login nav-item nav-link"></a>
</span>
</div>
      
        <!-- collapsible -->
        <div class="collapse navbar-collapse" id="toggleMyNav">
            <div class="separator">
               <?=$categories;?>
            </div>


            <form class="form-inline align-content-center pt-2 pb-4 py-md-0">
                <div class="input-group align-content-center">
                    <input class="form-control" type="text" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="submit"> Go </button>
                    </div>
                </div>
            </form>
         </div> <!-- end collapsible  -->





    </div>
</nav>


            <!-- second nav -->
    <nav class="navbar d-none d-lg-flex bg-light align-items-center justify-content-around  border-top border-bottom border-dark sticky-top secondNav">
            <!-- <div class="navbar-brand">WEBSITE COOL </div> -->
    
           <?=$categories;?>
            <form class = " form-inline" action = "search.php" method="POST">
                <input class="form-control mr-2" type="text" placeholder="Search" name ="keyword">
                <button class="btn btn-outline-dark" type="submit"> Go </button>
              </form>
    
            </nav>


<main>
<!-- PHP content -->
   <?= $content; ?>
</main>

   <!-- footer -->
    <div class="footer bg-light d-flex flex-column justify-content-center align-items-center py-3 "> 
 
    <div> 
    <a> About us</a>
    </div>
    <div> 
    <a> Contact</a>
    </div>
    <div> 
    <a> Customer rights</a>
    </div>
    <div> 
    <a> Terms and conditions</a>
    </div>
    
    </div>
<span class="copyright d-flex justify-content-center align-items-center p-2">&copy; Company</span>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>