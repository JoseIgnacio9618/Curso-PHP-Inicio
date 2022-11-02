<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<table class="default">

<?php

for ($i=0 ; $i < 101 ; $i++) { 
    
    if($i%10==0 || $i==0){
        echo'<tr>'; 
        
    };
    

    if($i%2==0){

        echo '<td WIDTH="10" style="background-color:grey;"  HEIGHT="10">'.htmlspecialchars($i).'</td>';

    };

    if($i%2!==0){

        echo '<td WIDTH="10" style="background-color:white;"  HEIGHT="10">'.htmlspecialchars($i).'</td>';

    };

    
    

   

    
    
}

?> 

</table>
</body>
</html>




