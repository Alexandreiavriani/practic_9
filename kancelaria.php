<?php
    require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<body>

<div class="form"><h2>sakoncelario</h2>
<form method='post'>
        <input type="text" id="title" name="title" placeholder="title" >
    <br><br>
    <input type="date" id="date" name="date">
    <br><br>
    <input type="text" id="description" name="description" placeholder="description" >
    <br><br>
    <button  onclick="send()">Send</button>
    </div>
    </form>
    <script>
        function send(){
            let title=$("#title").val()
            let date=$("#date").val()
            let description=$("#description").val()
            
            $.ajax({
                type:"post",
                url:"insert_kancelaria.php",
                dataType: 'json',
                data:{
                    title:title,
                    date:date,
                    description:description
                },
                success:function(data){
                    console.log(data);
                    
                }
                
            })
        }


    </script>

<?php



?>

<?php
   $select_query="Select  * from sakancelario";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   


    


 <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   
    
    ?>
<br>
<div >
<div ><?=$fetch_ar['title']?></div>
<div  ><?=$fetch_ar['date']?></div>
    <div ><?=$fetch_ar['description']?></div>
    <div><a href="?main=update&kancelaria=<?=$fetch_ar['id']?>">UPDATE</a> <a href="?main=delete&kancelaria=<?=$fetch_ar['id']?>">DELETE</a></div>

</div> 
    

   <?php
   }
   
   
   ?>


<br><br>


</body>
</html>