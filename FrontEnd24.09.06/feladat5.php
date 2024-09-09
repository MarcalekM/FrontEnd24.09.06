<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="fifth">Add meg a számot:</label>
        <input type="number" name="fifth" id="">
        <button>Ellenőrizd</button><br><br>
    </form>
    <?php
        if(isset($_POST['fifth'])){
            $number = $_POST['fifth'];
            $result = ($number > 100) ? "A megadott szám nagyobb 100-nál" : "A megadott szám nem nagyobb 100-nál";
            echo $result;
        }
    ?>
</body>
</html>
