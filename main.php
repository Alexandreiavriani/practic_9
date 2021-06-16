<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    require_once "database.php";
?>

<!DOCTYPE html>
<head>
    
    <title>Main</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <ul>
        <li><a href="?main=kancelaria">sakoncelario</a></li>            
        <li><a href="main.php">Main</a></li>
    </ul>
    <?php   
   
    if(isset($_GET['main']) && $_GET['main']=="kancelaria"){
            include "kancelaria.php";  
        
    }
  

        
    
    ?>
</body>
</html>
    
</body>
</html>