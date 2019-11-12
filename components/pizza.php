

<div class = "pizzaCyl">

    <?php if(!empty($data)){ ?>
    
    <h2>Yummy Pizzas</h2>
    <?php foreach($data as $pizza){ ?>
        <div class="box">
        
        <div> <i class="fas fa-pizza-slice"></i> </div>
        <div class="pizzaName"><?php echo htmlspecialchars($pizza['name']); ?></div>
        <div class="cook"><?php echo 'By, ' . htmlspecialchars($pizza['cook']); ?></div>
        <div class="ingr">
        
        <div><p>Ingrediends:</p></div>
        <?php echo htmlspecialchars($pizza['ingr']); ?></div>

        <div class="method"><p>Cooking Procedure: </p>
        
        </div>
        
        <?php echo htmlspecialchars($pizza['method']); ?>
        <div class="del">
        
            <a href="deletePizza/details.php?id=<?php echo $pizza['id'] ?>"><abbr title="Delete Pizza Recipe"><i class="far fa-minus-square"></i></abbr></a>
        
        </div>
        </div>
        
    <?php }} ?>

</div>