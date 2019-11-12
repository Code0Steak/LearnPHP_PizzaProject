

<div class="form">

    <form action="renderAddPizza.php" method = "POST">
    
        <div class="error"><?php echo $errors['cook']; ?></div> 
        <br>
        <input type="text" placeholder = "Recipe By" name = "cook" value = "<?php echo htmlspecialchars($cook); ?>">
        <br>
        <div class="error"><?php echo $errors['email']; ?></div>
        <br>
        <input type="text" placeholder = "Email" name = "email" value = "<?php echo htmlspecialchars($email); ?>">
        <br>
        <div class="error"><?php echo $errors['name']; ?></div>
        <br>
        <input type="text" placeholder = "Name of the Pizza" name = "name" value = "<?php echo htmlspecialchars($name); ?>">
        <br>
        <div class="error"><?php echo $errors['ingr']; ?></div>
        <br>
        <input type="text" placeholder = "Ingredients" name = "ingr" value = "<?php echo htmlspecialchars($ingr); ?>">
        <br>
        <div class="error"><?php echo $errors['method']; ?></div>
        <br>
        <textarea  id="" cols="30" rows="10" name = "method" >
        
        </textarea>
        <br>
        <div><input type="submit" id = "submit" name = "submit"></div>
        

    </form>

</div>