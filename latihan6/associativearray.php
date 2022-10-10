<!DOCTYPE html>
<html>
<head>
    <title>Associative Array</title>

    <style>
    
        .kotak{
            width: 50px;
            height: 50px;
            background-color: pink;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;

        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;

        }

        .clear{
            clear: both;

        }
    
    </style>

</head>


<body>

    <?php 

        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];

    ?>

    <?php foreach($angka as $a) : ?>

        <?php foreach($a as $b) : ?>
            <div class="kotak"> <?php echo $b; ?> </div>
        <?php endforeach; ?>
        
        <div class="clear"></div>

    <?php endforeach; ?>


</body>
</html>