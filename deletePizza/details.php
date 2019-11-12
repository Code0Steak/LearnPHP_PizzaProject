<?php 
        
            $conn = mysqli_connect('localhost','root','','pizza_recipe');

            if(!$conn){
                echo 'Connection Failed. Error : ' . mysqli__connect_error();
            }

            //First check whether the GET req. is set for the id variable. 

            if(isset($_GET['id'])){

                $id = mysqli_real_escape_string($conn,$_GET['id']);

                $sql = "SELECT * FROM pizza_cooktable WHERE id = $id";

                //run the query on the db:

                $retreive = mysqli_query($conn,$sql);

                $details = mysqli_fetch_all($retreive,MYSQLI_ASSOC);
                #print_r($details);
                mysqli_free_result($retreive);
                mysqli_close($conn);
                
            }
            
        
        ?>

<!DOCTYPE html>
<html lang="en">
    <?php include '../components/header.php';?>
        <div class = "clr"></div>

        <?php if(!empty($details)){?>

        <div class="details">
        
            <div class = "name"> <?php echo htmlspecialchars($details[0]['name']); ?></div>
            <div class="by"><?php echo htmlspecialchars($details[0]['cook']); ?></div>
            <div class="email"><?php echo htmlspecialchars($details[0]['email']); ?></div>
            <div class="delButton"><a href="#"><abbr title="Are You Sure, You Want to delete this Recipe?"><i class="fas fa-trash"></i></abbr></a></div>
        
        </div>

        <?php } ?>

    <?php include '../components/footer.php';?>
</body>
</html>