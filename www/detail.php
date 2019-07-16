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
    </head>
    <body>
        
        <div class="container-fluid">
                            <div class="row text-center">
                                <div class="col-sm-6"> <a href="edit.php?id=<?php echo $trail->getId(); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Edit Your Activity </a> </div>
                                <div class="col-sm-6">
                                <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Home Page </a>
                                </div>
                                </div>
                    <div class="row ">
                        <div class="col-sm-6">

                                    <h1> Your Information </h1> 
                            <h3>Title :<?php echo $trail->getTitle();?> </h3>  
                            <h3>Name: <?php echo $trail->getName();?></h3>
                            <h3>StartingPoint : <?php echo $trail->getStartingPoint();?></h3>
                            <h3>EndlingPoint : <?php echo $trail->getEndingPoint();?></h3>
                            <h3>PostalCode : <?php echo $trail->getPostalCode();?></h3>
                            <h3>City : <?php echo $trail->getCity();?></h3>
                            <h3>Country : <?php echo $trail->getCountry();?></h3>
                            <h3>Description : <?php echo $trail->getDescription();?></h3>
                        </div>
                        
                        <div class="col-sm-6"> <img src="<?php echo $trail->getPhoto();?>"></div>
                        
                           

        </div>                   

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>