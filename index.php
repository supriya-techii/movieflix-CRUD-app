<!Doctype html>
<html>
<head>
    <title>Movieflix CRUD App</title>
    <style>
        #creat-form, #update-form, #delete-form {
            display:none;
        }

        .main-div {
            width: 50vw;
            margin: 0 auto;
        }

        h2{
            text-align:center;
        }

        table{
            margin: 15px auto;
            width: 50vw;
            text-align: center;
        }



        table tr td {
            padding: 12px;
        }

        .content-wrapper{
        width: 100%;
        margin: 0 auto;
        text-align: center;

        }

        #creat-button, #update-button, #delete-button {
            width:150px;
            height:38px;
            background-color:blue;
            color: #ffffff;
            border-radius:4px;
            border: 1px solid black;
            letter-spacing: 1.5px;
            cursor:pointer;
        }

        .small-button{
            width:76px;
            height:30px;
            background-color:blue;
            color: #ffffffAA;
            border-radius:2px;
            border: none;
            cursor:pointer;
 
        }

        input[type="text"]{
            width:260px;
            height:32px;
            margin:6px;
            padding:3px
        }
        </style>
</head>
<body>

    <div class = "main-div">
    <?php   require_once 'creat.php' ?>
<div>
<h2>Movieflix CRUD </h2>
<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "movieflix_database";

//Creating a connection to database

$connection = mysqli_connect($serverName, $userName, $password, $databaseName);


//Check if inserting data was succesful

if(!$connection ){
    die("connection unsuccesful :".mysqli_connect_error());
}
//Query the table for the records.

$sql = "SELECT * From movieflix_table "; //Set us a query
$result = mysqli_query($connection, $sql); //Store the result of our query into the result 
$rowCount = mysqli_num_rows($result); //Method returns to us the number of rows  ->$rowCount

if($rowCount>0){

    echo "
    <table>
    <thead>
    <tr>
    <th>Record ID</th>
    <th>Title</th>
    <th>Genre</th>
    <th>Directore</th>
    </tr>
    </thead>
    
    ";
}
?> <!--End php code -->

<?PHP 
          while($row= $result->fetch_assoc()):  ?>
<tr>
    <td><?php echo $row["id"] ?></td>
    <td><?php echo $row["title"] ?></td>
    <td><?php echo $row["genre"] ?></td>
    <td><?php echo $row["director"] ?></td>
</tr>

<?php endwhile ?>

</table>

</div>
<div class="content-wrapper">
    <button id="creat-button">Creat Record</button>
    <button id="update-button">Edit Record</button>
    <button id="delete-button">delete Record</button>

<form action="creat.php" method="POST" id="creat-form">
<input type="text" placeholder="Enter movie title" name="creat-title"></input><br/>
<input type="text" placeholder="Enter movie gener" name="creat-genre"></input><br/>
<input type="text" placeholder="Enter movie directore" name="creat-director"></input><br/>
<input type="submit" value="save" name="submit-button" class="small-button"/></input>
</form>

<form action="update.php" method="POST" id="update-form">
<input type="text" placeholder="Enter Record ID" name="update-ID"></input><br/>
<input type="text" placeholder="Enter movie title" name="update-title"></input><br/>
<input type="text" placeholder="Enter movie gener" name="update-genre"></input><br/>
<input type="text" placeholder="Enter movie directore" name="update-director"></input><br/>
<input type="submit" value="save" name="submit-update" class="small-button"/></input>
</form>

<form action = "delete.php" method = "POST" id = "delete-form">
 <input type="text" placeholder = "Enter Record ID" name = "delete-ID"></input><br/>
 <input type="submit" value = "save" name = "submit-delete" class="small-button"/></input>
          </form>
          </div>
</div>
<script src="script.js"></script>
</body>
</html>