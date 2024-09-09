<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="eighth1">Add meg a havi bevételt:</label>
        <input type="number" name="eight1" id=""><br>
        <label for="eighth2">Add meg a havi kiadást:</label>
        <input type="number" name="eight2" id="">
        <br><button>Ellenőrizd</button><br>
    </form>
    <?php
        if(isset($_POST['eighth1']) and isset($_POST['eighth2'])){
            $koltsegvetes = $_POST['eighth1'];
            $kiadas = $_POST['eighth2'];
            $result = ($koltsegvetes > $kiadas) ? "A költségvetés elegendő" : "A költségvetés nem elegendő";
            echo $result;
        }
    ?>
</body>
</html>