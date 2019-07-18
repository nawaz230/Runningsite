<?php
require_once ("database.php");


$database = new Database();

$id = $_GET["id"];

$trail = $database->getTrailId($id);

?>
<html>
    <head>
        <title>

        </title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="container-fluid">
             <!--this is logonavigation bar-->
            
             <nav class="navbar navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.php">
                    <img src="photo/logo.png" width="100" height="100">

                        <span> <b>Running Site </b></span>

                    </a>

                    <a href="form-insert.php"><button type="button" class="btn btn-outline-primary">Add an activity</button></a>

                    <a href="edit.php?id=<?php echo $trail->getId(); ?>"> <button type="button" class="btn btn-outline-primary">Edit Your Activity</button></a>
                    

        <!--this is search bar-->
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
            </nav>
            <!--End search bar-->
                            
                    <div class="row pt-4">
                        <div class="col-sm-6 mb-5">

                                    <h1> Your Information </h1> 
                            <h3>Title :<?php echo $trail->getTitle();?> </h3>  
                            <h3>Name: <?php echo $trail->getName();?></h3>
                            <h3>Starting Point : <?php echo $trail->getStartingPoint();?></h3>
                            <h3>Ending Point : <?php echo $trail->getEndingPoint();?></h3>
                            <h3>Postal Code : <?php echo $trail->getPostalCode();?></h3>
                            <h3>City : <?php echo $trail->getCity();?></h3>
                            <h3>Country : <?php echo $trail->getCountry();?></h3>
                            <h3>Description : <?php echo $trail->getDescription();?></h3>
                        </div>
                        
                        <div class="col-sm-6 section3"> <img class="img-fluid" src="<?php echo $trail->getPhoto();?>"></div>
                    </div> 


        <!--Footer-->
        <div class="bg-footer mt-5 pb-0">
              <section class="container-fluid">
                  <div class="row">
                            <div class="col-sm-3 offset-sm-1 text-center">
                                <h2 class="h2-footer">About us
                                </h2>
                                <p class="p-footer">Just two guys who decided to start a business and it ended up working really well. Tired of taking the same route everyday?
                                    then you came to the right place. 
                                </p>
                            </div>
            
                            <div class="col-sm-3 offset-sm-1 text-center">
                                <h2 class="h2-footer">
                                    Our Location
                                </h2>
                                <h5 class="h5-footer">Our headquarter</h5>
                                <p class="p-footer">
                                    21 Jump Street <br>138 Melrose Avenue
                                </p>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>