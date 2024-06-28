<!DOCTYPE html>
<html lang="en">
<head>
     <title>Coin Flip</title>
</head>

<body>
    <h1>Coin Flip</h1>
    
    <?php

    $heads = 0;
    $tails = 0;

    for ($i=1; $i <= 20 ; $i++) 
    { 
    $coin = rand(0,1);
     if ($coin == 0)
        {
            echo"<p>Flip #$i Heads <img src=\"images/heads.png\" alt=\"heads\"></p>";
            $heads++;
            
        }else
        { 
            echo"<p>Flip #$i Tails <img src=\"images/tails.png\" alt=\"tails\"></p>";
            $tails++;
        }
    
    }
    
    echo"<p>Totoal number of heads $heads(" . ($heads / 20) * 100 . "%)</p>";
    echo"<p>Total number of tails $tails(" . ($tails / 20) * 100 ."%)</p>";

    ?>

</body>
</html>