<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang</title>
</head>
<body style="margin-left:50px; margin-top:40px;">
    <!-- Output 1 -->
    <div>
        <p>Output 1 :</p>
        <?php
            for($a = 1; $a <= 6; $a++){
                for($b = 1; $b <= $a; $b++){
                    echo "*";
                }
                echo "<br>";
            }
        ?>
    </div>
    <!-- Output 2 -->
    <div>
        <p>Output 2 :</p>        
        <?php
            for( $a=6;$a>0;$a--) {
                for($b=1; $b<=$a; $b++){
                    echo "&nbsp ";
                }
                for($c=6;$c>$a;$c--){
                    echo "*";
                }
                echo "<br/> ";
            }
        ?>
    </div>
</body>
</html>