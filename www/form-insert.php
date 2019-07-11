<?php
    //Import de la database
    require_once("database.php");

    //Création de la connexion
    $database = new Database ();
?>

<html>
<header>
    <link rel="stylesheet" href="style.css">
</header>

<body>
    <!--Title of the form-->
    <h1>Add your activity!</h1>

    <!--here is forme begin -->
    <form action="index.html" method="post">

        <label for ="nameActivity">Title :</label>
        <input type="text" id="nameActivity" name="title" placeholder="Insert title"><br><br>

        <label for ="nameAuthor">Name :</label>
        <input type="text" id="nameAuthor" name="name" placeholder="Insert our name"><br><br>

        <label for ="imgActivity">Upload Map :</label>
        <input type="file" id="imgActivity" name="img"><br><br>

        <label for ="Startingpoint" value="start" >Starting point :</label>
        <input type="text" id="Start" name="point" placeholder="Insert starting point"><br><br>

        <label for ="Endingpoint" value="end" >Ending point :</label>
        <input type="text" id="End" name="point" placeholder="Insert ending point"><br><br>

        <label for ="Postalcode" value="code" >Postal code :</label>
        <input type="text" id="Postal" name="postal" placeholder="Insert postal code"><br><br>

        <label for ="city">City :</label>
        <input type="text" id="city" name="city" placeholder="Insert city"><br><br>

        <label for ="country" value="country" >Country :</label>
        <input type="text" id="country" name="country" placeholder="Insert country"><br><br>

        <label for ="description">Description :</label> <br>       
        <textarea name="description" rows="5" cols="40" ></textarea><br>

        <input type="submit" value="Submit">

      </form>

</body>

</html>