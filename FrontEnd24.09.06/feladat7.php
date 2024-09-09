<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="seventh">Add meg a pontszámot:</label>
        <input type="number" name="seventh" id="">
        <button>Ellenőrizd</button><br><br>
    </form>
    <?php
        if(isset($_POST['seventh'])){
            $result = "";
            $number = $_POST['seventh'];
            if($number <= 49){
                $result = "Elégtelen";
            }
            elseif(50 <= $number and $number < 70){
                $result = "Közepes";
            }
            elseif(70 <= $number and $number < 90){
                $result = "Jó";
            }
            elseif(90 <= $number){
                $result = "Kivűló";
            }
            echo $result;
        }
    ?>
</body>
</html>