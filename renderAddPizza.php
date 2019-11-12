<?php 
    
    
    //connect to a database:

    $conn = mysqli_connect('localhost','root','','pizza_recipe');
    if(!$conn){
        echo 'Connection Failed. Error : ' . mysqli_connect_error();
    }
    
    # $_GET or _POST is a global array, declared for every form submission. It contains data sent to the server from a form, referenced by the name fields.
    #to prevent xss injection attacks use the 'htmlspecialchars' method : )

    #For validation use the 'filter' method.
    #you can also use REGEX for validation, in that case use the function 'preg_match'
    $cook = $email = $name = $ingr = '';
    $errors = ['cook'=>'','email'=>'','name'=>'','ingr'=>'','method'=>''];
    if(isset($_POST['submit'])){

        $cook = $_POST['cook'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $ingr = $_POST['ingr'];
        $method = $_POST['method'];

        
        if(empty($cook)){
            $errors['cook'] = 'Please enter Cook\'s Name <br/>';
            $cook = '';
        }else{
            if(!preg_match('/^[a-zA-Z\s]+$/',$cook)){
                $errors['cook'] = 'please don\'t add numbers/special chars in your name!! <br/>';
                $cook = '';
            }
        }
        if(empty($email)){
            $errors['email'] =  'Please enter Email!! <br/>';
            $email = '';
        }else{
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $errors['email'] =  'Enter a valid email address, eg. mycodestreak@gmail.com <br/>';
                $email = '';
            }
        }
        if(empty($name)){
            $errors['name'] = 'The Name of Pizza cannot be empty :\' ( <br/>';
            $name = '';
        }
        if(empty($ingr)){
            $errors['ingr'] =  'Please enter at least 3 ingrs. <br/>';
            $ingr = '';
        }else{
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingr)){
                $errors['ingr'] =  'Ingredients must be a comma seperated list of at least 3 items. <br/>';
                $ingr = '';
            }
        }

        if(empty($method)){
            $errors['method'] = 'The Procedure to make the pizza cannot be empty :\' ( <br/>';
        }

        #if there are no errors the user will be redirected to the main page, 'render.php', in this case.
        if(!array_filter($errors)){

            $cook = mysqli_real_escape_string($conn,$_POST['cook']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $ingr = mysqli_real_escape_string($conn,$_POST['ingr']);
            $method = mysqli_real_escape_string($conn,$_POST['method']);

            $sql = "INSERT INTO pizza_cooktable(cook,email,name,ingr,method) VALUES('$cook','$email','$name','$ingr','$method')";

            //check for the query:

                if(!mysqli_query($conn,$sql)){
                    echo 'Query Error : ' . mysqli_error($conn);
                }
                else{

                    //redirect
                    header('Location: render.php');
                }


            
        }

    }

    // function printError($ele){
    //     global $errors;
    //     echo $errors[$ele];
    // }

?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'components/header.php'; ?>
    <?php include 'addPizzaComponents/pizzaForm.php'; ?>
    <?php include 'components/footer.php'; ?>

</html>