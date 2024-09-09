<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="sixth">Add meg a számot:</label>
        <input type="number" name="sixth" id="">
        <button>Ellenőrizd</button><br><br>
    </form>
    <?php
        if(isset($_POST['sixth'])){
            $result = "";
            $number = $_POST['sixth'];
            if($number > 0){
                $result = "A megadott szám nagyobb mint 0";
            }
            else if($number < 0){
                $result = "A megadott szám kisebb mint 0";
            }
            else {
                $result = "A megadott szám 0";
            }
            echo $result;
        }
    ?>
</body>
</html>