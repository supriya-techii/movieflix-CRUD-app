<?php    

//Creat delete function 

function deleteRecord(){
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "movieflix_database";
    
    //Creating a connection to database
    
    $connection = mysqli_connect($serverName, $userName, $password, $databaseName);
    
    // Creat an ID variable to store user ID input
    $id = $_POST["delete-ID"];

    //Define SQL Query
    $sql = "DELETE FROM movieflix_table WHERE id='$id'";

    //Execute SQL Query
    $deleteQuery = mysqli_query($connection, $sql);

if(!$deleteQuery){
    echo "Error :".$sql.mysqli_error($connection);
}

//Close connection
mysqli_close($connection);

//Re-directing the user back to the main page index.php

header('location: index.php');
}
      

if(isset($_POST["submit-delete"])){
    deleteRecord();
    }
?>