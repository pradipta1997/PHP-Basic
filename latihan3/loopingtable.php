<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pengulangan Looping</title>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0"> 
    
        <?php
        //LOOPING BARIS & KOLOM TABLE
        
            for($i = 1; $i <= 3; $i++){
                echo "<tr>";

                    for($j = 1; $j <= 5; $j++){
                        echo "<td>$i,$j</td>";
                    }

                echo "<tr>";
            }

        ?>
    
    </table>    

</body>
</html>