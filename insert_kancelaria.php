<?php
    require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>


<?php



   $title=$_POST['title'];
    $date=$_POST['date'];
    $description=$_POST['description'];

    

    $query="INSERT INTO sakancelario (title,date,description) VALUES ('$title','$date','$description')";
    

    if (mysqli_query($conn, $query))
     {  
        header("Location:main.php?main=kancelaria");
       
     }
   
     else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }


?>




</body>
</html>