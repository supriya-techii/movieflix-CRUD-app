<?php

//Creat record function 

function creatRecord(){
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "movieflix_database";

//Creating a connection to database

$connection = mysqli_connect($serverName, $userName, $password, $databaseName);

// Check if connection was succesfull or not

if(!$connection ){
    die("connection unsuccesful :".mysqli_connect_error());



}else{

    echo "Connection succesfull!";
}

//Storing user input into variables
 $movieTitle = $_POST["creat-title"];
 $movieGenre = $_POST["creat-genre"];
 $movieDirector = $_POST["creat-director"];

//Attempting to INSERT DATA in our table

$sql = "INSERT INTO movieflix_table (title, genre, director) VALUE('$movieTitle', '$movieGenre', ' $movieDirector')";

//Check if inserting data was succesful

if(mysqli_query($connection, $sql)){
    echo "";
}else{
    echo "Error:".$sql.mysqli_error($connection);

}

//Close connection
mysqli_close($connection);

//Re-directing the user back to the main page index.php

header('location: index.php');

}

if(isset($_POST["submit-button"])){
$serverNmae = "localhost";
    creatRecord();
}

?>
