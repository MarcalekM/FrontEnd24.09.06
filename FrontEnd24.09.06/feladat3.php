<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="third">Add meg a számot:</label>
        <input type="number" name="third" id="">
        <button>Ellenőrizd</button><br>
    </form>
    <?php
        if(isset($_POST['third'])){
            $result = "";
            $number = $_POST['third'];
            if($number % 2 == 0){
                $result = $number . " páros szám";
            }
            else{
                $result = $number . " nem páros szám";
            }
            if($number % 5 == 0){
                $result = $result . " osztható 5-tel"; 
            }
            else{
                $result = $result . " nem osztható 5-tel";
            }
            echo $result;
        }
    ?>
</body>
</html>