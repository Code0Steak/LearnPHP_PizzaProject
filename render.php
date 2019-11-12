<?php 

    //Database Connectivity using MySQLi 
    //the 'mysqli_connect' method takes in 4 parameters. 1. host,2. username, 3. password, 4. database name.
    $conn = mysqli_connect('localhost','root','','pizza_recipe');

    if(!$conn){
        echo 'Connection Failed. Error : ' . mysqli_connect_error();
    }

    //To retriew data:

    #1 write a query
    $sql = 'SELECT * FROM pizza_cooktable ORDER BY createdattime';

    #2 run the query on the database
    $retreive = mysqli_query($conn, $sql);
    
    #3 now to fetch the  data as a readable array. all as we want to fetch all the rows.
   $data =  mysqli_fetch_all($retreive, MYSQLI_ASSOC);

    //free the result
    mysqli_free_result($retreive);
    //then close the connection:
    mysqli_close($conn);

    #print_r($data);

?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'components/header.php';?>
    <div class = "clr"></div>
    <a href="renderAddPizza.php"><abbr title="Add Pizza Recipe"><i class="fas fa-plus-circle" id = "add"></abbr></i></a>
    <div class="clr"></div>
    <br><br><br><br><br><br>
    <?php include 'components/pizza.php' ?>
    <?php include 'components/footer.php';?>

</html>