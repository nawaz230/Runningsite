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
</head> 
<body>
<h1>Edit Your Activity</h1>

<!--here is forme begin -->
<form action="processupdate.php?id=<?php echo $id ?>" method="post">

    <label for ="nameActivity">Title :</label>
    <input type="text" id="nameActivity" name="title" value="<?php echo $trail->getTitle();?>"><br><br>

    <label for ="nameAuthor">Name :</label>
    <input type="text" id="nameAuthor" name="name" value="<?php echo $trail->getName();?>"><br><br>

    <label for ="imgActivity">Upload Map :</label>
    <input type="file" id="imgActivity" name="photo"><br><br>

    <label for ="Postalcode" value="code" >Postal code :</label>
    <input type="text" id="Postal" name="postalcode" value="<?php echo $trail->getPostalCode();?>"><br><br>

    <label for ="Startingpoint" value="start" >Starting point :</label>
    <input type="text" id="Start" name="startingpoint" value="<?php echo $trail->getStartingPoint();?>"><br><br>

    <label for ="Endingpoint" value="end" >Ending point :</label>
    <input type="text" id="End" name="endingpoint" value="<?php echo $trail->getEndingPoint();?>"><br><br>

    <label for ="city">City :</label>
    <input type="text" id="city" name="city" value="<?php echo $trail->getCity();?>"><br><br>

    <label for ="country" value="country" >Country :</label>
    <input type="text" id="country" name="country" value="<?php echo $trail->getCountry();?>"><br><br>

    <label for ="description">Description :</label> <br>       
    <textarea name="description" rows="5" cols="40" value="<?php echo $trail->getDescription();?>"></textarea><br>

    <input type="submit" value="Submit">

  </form>
</body>   
</html>