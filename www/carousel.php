<?php
require_once ("database.php");
require_once ("classtrail.php");

$database = new Database();

$trails = $database->getAllTrail();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Running site</title>

</head>
<body>
<!--Début de barre de navigation-->          
    <div class="container-fluid">
        <div class="row">   
            <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top col-12">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand col-3 offset-1" href="#">
                    <img src="photo/logo.png" width="100" height="100"> <!--Logo du site-->
                    <span> <b>Running Site </b></span>                  <!--Nom du site-->
                </a>     

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 col-3 offset-1">
                    <li class="nav-item">          
                        <a href="form-insert.php"><button type="button" class="btn btn-outline-primary">Add an activity</button></a><!--Bouton ajouter une activité-->
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0 col-3" action="http://localhost/index.php" method="GET" role="search">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </div>
<!--Fin de barre de navigation-->

<!--Début du carousel-->
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active mb-5 col-lg-11 offset-1">
                    <img class="d-block" src="upload/captown.jpg"  height="600" width="1519" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    <img src="photo/logo.png" width="300" height="300">
                    <span> <b>Running Site </b></span>
                </div>
            </div>

                <?php foreach($trails as $trail){?>  
                    <div class="carousel-item mb-5 col-lg-11 offset-1">
                        <img class="d-block" src="<?php echo $trail->getPhoto(); ?>"   height="600" width="1519" alt="Second slide">
                    </div>
                <?php } ?>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<!--Fin du carousel-->

<!--Début de la liste des activités-->
    <section class="container-fluid">
        <div class="row">
            <?php foreach($trails as $trail){?>  
                <div class="col-lg-4 col-md-6 text-center">
                    <img class="rounded-circle mb-3" src="<?php echo $trail->getPhoto(); ?>" height="140" width="140"  ><br>                            
                    <h2 class="mb-4"><strong><?php echo $trail->getTitle(); ?></strong> </h2>
                    <p class="p1 mb-3"><strong>Name :</strong> <?php echo $trail->getName();?></p>
                    <p class="p1 mb-3"><strong>City :</strong><?php echo $trail->getCity();?></p>
                    <p class="p1 mb-3"><strong> Country :</strong><?php echo $trail->getCountry();?> </p>
                    <a href="detail.php?id=<?php echo $trail->getID();?> <button type="button" class="btn btn-secondary">View Details >></button></a>
                    <hr class="style1">
                </div>
            <?php } ?>
        </div>
    </section>
<!--Fin de la liste des activités-->

<!--Début du footer-->
    <div class="bg-footer">
        <section class="container-fluid">
            <div class="row">
                <div class="col-sm-3 offset-sm-1 text-center">
                    <h2 class="h2-footer">About us</h2>
                    <p class="p-footer">Just two guys who decided to start a business and it ended up working really well. Tired of taking the same route everyday?
                        then you came to the right place. 
                    </p>
                </div>
            
                <div class="col-sm-3 offset-sm-1 text-center">
                    <h2 class="h2-footer">Our Location</h2>
                    <h5 class="h5-footer">Our headquarter</h5>
                    <p class="p-footer">21 Jump Street <br>138 Melrose Avenue</p>
                    <a class="facebookL" href="https://facebook.com/" target="_blank"><img src="photo/facebook-16.png" alt="Logo Facebook"></a>
                    <a class="youtubeL" href="https://youtube.com/" target="_blank"><img src="photo/youtube-16.png" alt="Logo Youtube"></a>
                    <a class="twitterL" href="https://twitter.com/" target="_blank"><img src="photo/twitter-16.png" alt="Logo Twitter"></a>
                </div>

                <div class="col-sm-3 text-center">
                    <h2 class="h2-footer">Nawaz <br> & <br> Donte </h2>
                    <img src="photo/icons8-ios-100.png" class="img-footer" height="100" width="100">
                    
                </div>
            </div>
        </section>
    </div>
<!--Fin du footer-->


<!--Début des liens Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Fin des liens Bootstrap-->
</body>
</html>