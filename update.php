<?php

function updateRecord(){
    $serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "movieflix_database";

//Creating a connection to database

$connection = mysqli_connect($serverName, $userName, $password, $databaseName);

//Storing user input into variables
$id = $_POST["update-ID"];
$movieTitle = $_POST["update-title"];
$movieGenre = $_POST["update-genre"];
$movieDirector = $_POST["update-director"];

//Set up/define our UPDATE Query,then run it

$sql = "UPDATE movieflix_table SET title='$movieTitle', genre='$movieGenre', director='$movieDirector' WHERE id= '$id'";

$updateQuery = mysqli_query($connection,$sql);     //Executed our Sql query

//Check if inserting data was succesful

if(!$updateQuery){
    echo "Error :".$sql.mysqli_error($connection);
}

//Close connection
mysqli_close($connection);

//Re-directing the user back to the main page index.php

header('location: index.php');


}

if(isset($_POST["submit-update"])){

updateRecord();

}



?>